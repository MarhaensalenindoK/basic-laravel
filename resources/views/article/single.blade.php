@extends('layouts.app')



@section('content')
<h1>{{$article->title}}</h1>
<p>
    <div class="card mb-3">
        <div class="card-body" style="background:#373737;">
            {{$article->subject}}
        </div>
    </div>
</p>
<div class="row mb-3 ml-1">

    <a href="/artikel/{{$article->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
    <form action="/artikel/{{$article->id}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger ml-2">Hapus</button>
    </form>
    <a href="/artikel" class="btn btn-sm btn-dark ml-2">Kembali</a>
</div>
@include('layouts.footer')

@endsection