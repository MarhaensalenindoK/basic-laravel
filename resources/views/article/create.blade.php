@extends('layouts.app')



@section('content')
<h1>Tambah Artikel Baru</h1>



<form action="/artikel" method="post" enctype="multipart/form-data">
    @csrf


    <x-input field="title" label="Judul" type="text" placeholder="Isi judul..." />
    <x-textarea field="subject" label="Subject" placeholder="Isi subject..." />
    <x-file />

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection