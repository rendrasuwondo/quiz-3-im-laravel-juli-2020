<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    public function index()
    {
        $posts = DB::table('proyek')->get();
        // dd($posts);
        return view('proyek.index', compact('posts'));
    }

    public function create()
    {
        return view('proyek.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_proyek' => 'required|unique:proyek',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_deadline' => 'required',
        ]);

        $query = DB::table('proyek')->insert(
            [
                'nama_proyek' => $request['nama_proyek'],
                'deskripsi_proyek' => $request['deskripsi_proyek'],
                'deskripsi_proyek' => $request['deskripsi_proyek'],
                'tanggal_mulai' => $request['tanggal_mulai'],
                'tanggal_deadline' => $request['tanggal_deadline'],
                'status' => 0,
                'manager_id' => 1
            ]
        );

        return redirect('/proyek')->with('success', 'proyek Berhasil Disimpan!');
    }

    public function show($id)
    {
        $post = DB::table('proyek')->where('id', $id)->first();
        // dd($post);
        return view('proyek.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_deadline' => 'required',
        ]);

        $query = DB::table('proyek')
            ->where('id', $id)
            ->update([
                'nama_proyek' => $request['nama_proyek'],
                'deskripsi_proyek' => $request['deskripsi_proyek'],
                'deskripsi_proyek' => $request['deskripsi_proyek'],
                'tanggal_mulai' => $request['tanggal_mulai'],
                'tanggal_deadline' => $request['tanggal_deadline']
            ]);

        return redirect('/proyek')->with('success', 'Berhasil ubah proyek!');
    }

    public function destroy($id)
    {
        $query = DB::table('proyek')->where('id', $id)->delete();
        return redirect('/proyek')->with('success', 'proyek berhasil dihapus!');
    }
}
