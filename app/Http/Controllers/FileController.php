<?php

namespace App\Http\Controllers;

use ErlandMuchasaj\LaravelFileUploader\FileUploader;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function index() {
       return view('files');
   }

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

       return redirect()
           ->back()
           ->with('success', 'File has been uploaded!')
           ->with('file', $response);
   }
}
