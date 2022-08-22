@extends('Backend.Layouts.header')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <br><br><br><br>

    <section id="team" class="row g-0 py-0 text-center">
        @foreach($posts as $post)

    <div class="col-lg-3 col-sm-6 team-member">
        <div class="team-member-img">
            <img class="card-img-top" src="{{$post->photo}}" alt="{{$post->title}}">
        </div>
        <div class="p-4">
            <small class="text-white">{{$post->title}}</small>
            <div class="hline"></div>
            <p class="text-white">{{$post->desc}}</p>
            <p><a href="{{route('Posts.edit',$post->id)}}" class="btn btn-primary" role="button">Edit</a>
                <a href="{{route('Posts.destroy',['id'=>$post->id])}}" class="btn btn-brand" role="button">Delete</a> </p>
        </div>
    </div>
        @endforeach
    </section>
    <br><br>
    @include('Backend.Layouts.footer')
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
@endsection
