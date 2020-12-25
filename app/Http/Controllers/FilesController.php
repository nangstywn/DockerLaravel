<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = File::all(); //Fungsi untuk mengambil seluruh data pada tabel books

        return view('files.index', compact('data')); //Redirect ke halaman books/index.blade.php
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create'); //Redirect ke halaman books/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', //nama form "title" harus diisi (required)
            'email' => 'required', //nama form "writer" harus diisi (required)
            'position' => 'required',
            'picture' => 'required | image', //nama form "publisher" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
        $data = $request->file('picture');
        $namaFile = $data->getClientOriginalName();
        $request->file('picture')->move('uploadgambar', $namaFile);
        $do = new File($request->all());
        $do->picture = $namaFile;
        $do->save();

       // File::create($request->all()); //Fungsi untuk menyimpan data inputan kita

        return redirect()->route('files.index')
           ->with('success', 'Files created successfully.'); //Redirect ke halaman books/index.blade.php
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = File::findOrFail($id);
        return view('files.detail',compact('data'));
        //return view('files.detail', compact('datas')); //Redirect ke halaman books/detail.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('files.edit', compact('datas')); //Redirect ke halaman books/edit.blade.php
        $data = File::findOrFail($id);
        return view('files.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required', //nama form "title" harus diisi (required)
            'email' => 'required', //nama form "writer" harus diisi (required)
            'position' => 'required',
            'picture' => 'required', //nama form "publisher" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
            
        $data = File::findOrFail($id);
        $data->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('files.index')
            ->with('success', 'File updated successfully'); //Redirect ke halaman books/index.blade.php 
           
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = File::findOrFail($id);
        $datas->delete();
        return redirect()->route('files.index')->with('alert-success','Data berhasil dihapus!');
    }
}