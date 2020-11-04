@extends('layouts.app')
@section('title','Halaman Artikel')


@section('content')

<h1>Halaman Artikel</h1>


@foreach($articles->chunk(3) as $artChunk)
<div class="row">
    @foreach($artChunk as $art)
    <div class="col card mb-1 ml-1 mr-1" style="background: #373737;">


        <img src="/image/{{$art->thumbnail}}" alt="" class="card-img-top mt-2">

        <div class="card-body">
            <p> <strong>{{ucfirst($art->title)}}</strong> </p>
            <p>{{$art->subject}}</p>
            <a href="/artikel/{{$art->slug}}" class="btn btn-info btn-sm stretched-link">Baca</a>
        </div>
    </div>
    @endforeach
</div>
@endforeach
<div>
    {{$articles->links()}}
</div>
@include('layouts.footer')
@endsection