<?php

namespace App\Http\Controllers;

use App\Models\Sortrudnik;
use App\Http\Requests\StoreSortrudnikRequest;
use App\Http\Requests\UpdateSortrudnikRequest;
use App\Http\Resources\SotrudnikResource;
use Illuminate\Http\Request;

class SortrudnikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sotrudnik/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSortrudnikRequest $request)
    {
        $data = $request->validated();
        $model = new Sortrudnik();
        $model->fill($data);
    
        return response($model->save(), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sortrudnik $sortrudnik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sortrudnik $sortrudnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSortrudnikRequest $request, Sortrudnik $sortrudnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sortrudnik $sortrudnik)
    {
        //
    }
}
