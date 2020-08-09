@extends('layouts.master')

@section('content')


<div class="card card-primary ml-3 mr-3 mt-3">
    <div class="card-header">
      <h3 class="card-title">Tambah Proyek</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/proyek">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nama_proyek">Nama</label>
        <input type="text" class="form-control" id="nama_proyek" value="{{old('nama_proyek','')}}" name="nama_proyek" placeholder="Enter nama proyek">
          @error('nama_proyek')
            <div class="alert alert-danger sm">{{ $message }}</div>
           
          @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_proyek">Deskripsi Proyek</label>
          <input type="text" class="form-control" id="deskripsi_proyek" name="deskripsi_proyek" placeholder="deskripsi proyek" value="{{old('deskripsi_proyek','')}}">
          @error('deskripsi proyek')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="tanggal_mulai">Tanggal Mulai</label>
          <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="tanggal mulai" value="{{old('tanggal_mulai','')}}">
          @error('tanggal_mulai')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="tanggal_deadline">Tanggal deadline</label>
          <input type="date" class="form-control" id="tanggal_deadline" name="tanggal_deadline" placeholder="tanggal deadline" value="{{old('tanggal_deadline','')}}">
          @error('tanggal_deadline')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
     
     
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
    
@endsection
