<?php

namespace App\Http\Controllers;

use App\Model\File;
use App\Model\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Editor.notebooks', [
            'notebooks' => File::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function show(notebook $notebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function edit(notebook $notebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notebook $notebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(notebook $notebook)
    {
        //
    }
}
