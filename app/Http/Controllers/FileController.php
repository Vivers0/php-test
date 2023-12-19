<?php

namespace App\Http\Controllers;

use App\Models\Files;
use ErlandMuchasaj\LaravelFileUploader\Exceptions\UploadFailed;
use ErlandMuchasaj\LaravelFileUploader\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
   public function index() {
       return view('files');
   }

    /**
     * @throws UploadFailed
     */
    public function store(Request $request) {
        $max_size = (int) ini_get('upload_max_filesize') * 1000;
        $extensions = implode(',', FileUploader::allExtensions());

        $request->validate([
            'file' => [
                'required',
                'file',
                'mimes:' . $extensions,
                'max:' . $max_size,
            ]
        ]);

        $file = $request->file('file');
        $response = FileUploader::store($file);

        if ($response && $response['path'] && $response['mime_type']) {
            $fileDB = new Files();
            $fileDB->path = $response['path'];
            $fileDB->type = $response['mime_type'];
            $fileDB->save();
        }

       return redirect()
           ->back()
           ->with('success', 'File has been uploaded!')
           ->with('file', $response);
   }

   public function show($id) {
    $file = Files::where("id", "=", $id)->first();

    if ($file && $file['path']) {
        return view("info", ["path" => $file["path"], "type" => $file["type"], "id" => $file["id"] ]);
    }
   }

   public function download($id) {
    $file = Files::where("id", "=", $id)->first();
    $full_path = FileUploader::path($file["path"]);

    return response()->download($full_path);
   }
}
