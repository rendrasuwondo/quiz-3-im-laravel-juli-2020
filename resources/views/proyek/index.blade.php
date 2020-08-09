@extends('layouts.master')

@section('content')
    
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Proyek</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if (session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
      @endif
      <a class="btn btn-primary mb-3" href="/proyek/create">Tambah</a>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tgl Mulai</th>
            <th>Tgl deadline</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
       
        
            @forelse ($posts as $key => $post)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $post->nama_proyek }}</td>
                <td>{{ $post->deskripsi_proyek }}</td>
                <td>{{ $post->tanggal_mulai }}</td>
                <td>{{ $post->tanggal_deadline }}</td>
                <td style="display:flex;">
                  <a href="/proyek/{{$post->id}}" class="btn btn-info btn-sm ">show</a>
                  <a href="/proyek/{{$post->id}}/edit" class="btn btn-default btn-sm ml-1">edit</a>
                <form action="/proyek/{{$post->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                <input type="submit" value="delete" class="btn btn-danger btn-sm ml-1">
                </form>
                </td>
              </tr>
            @empty
            <tr><td colspan="4" align="center">No Data</td></tr>
                
            @endforelse
     
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
   
  </div>
@endsection