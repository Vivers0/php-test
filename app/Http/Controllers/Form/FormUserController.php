<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\FormUser;
use App\Http\Requests\StoreFormUserRequest;
use App\Http\Requests\UpdateFormUserRequest;

use Illuminate\Http\Request;

class FormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formuser = FormUser::all();
        return view('formUser/index', ['formuser' => $formuser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGet()
    {
        return view('formUser/create');
    }

    public function createPost(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'roles' => 'required',
            'bod' => 'required'
        ]);

        $project = FormUser::create($data);
        return response()->json(['success' => "Success!"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FormUser $formUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormUser $formUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormUserRequest $request, FormUser $formUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formUser = FormUser::destroy($id);
        $message = "ok";
        return view("formUser/delete", ['message' => $id]);
    }
}
