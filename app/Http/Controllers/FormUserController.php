<?php

namespace App\Http\Controllers;

use App\Models\FormUser;
use App\Http\Requests\StoreFormUserRequest;
use App\Http\Requests\UpdateFormUserRequest;

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
    public function create()
    {
        //
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
