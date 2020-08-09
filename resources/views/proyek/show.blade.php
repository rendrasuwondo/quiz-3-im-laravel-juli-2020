@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3">
    
    <h4>{{$post->nama_proyek}}</h4>
        <p>{{$post->desckripsi_proyek}}</p>

</div>

@endsection