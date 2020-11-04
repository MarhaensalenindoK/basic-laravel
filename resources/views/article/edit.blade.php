@extends('layouts.app')



@section('content')
<h1>Edit Artikel</h1>



<form action="/artikel/{{$article->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <x-input field="title" label="Judul" type="text" placeholder="Isi judul..." value="{{$article->title}}" />
    <x-textarea field="subject" label="Subject" placeholder="Isi subject..." value="{{$article->subject}}" />
    @if($article->thumnail)
    <p>Kamu belum punya thumbnail</p>
    @else
    <img src="/image/{{$article->thumbnail}}" width="150" class="card">
    @endif
    <x-file />

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection