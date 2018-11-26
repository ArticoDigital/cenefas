<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Model\Country;
use App\Model\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.file.index', [
            'files' => File::with('category.country')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.file.create', [
            'countries' => Country::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {
        $data = $request->validated();
        $data['preview'] = Storage::url($request->file('preview')->store('public'));
        $data['file'] = Storage::url($request->file('file')->store('public'));
        File::create($data);
        return redirect()->route('file.index')
            ->with([
                'message' => 'El Archivo ha sido creado'
            ]);
    }

    /**
     * @param File $file
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(File $file)
    {
        return view('Editor.create-notebook', [
            'file' => $file
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }

    public function fileUpload($file)
    {
        return $file;
    }
}
