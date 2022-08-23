@extends('Backend.Layouts.header')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <section id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img src="/img/book.jpg" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <form action="{{route('Posts.update',$posts->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                       <div class="mb-3">
                            <small>Add Title</small>
                            <input type="text" class="form-control" id=title" name="title" placeholder="title" value="{{$posts->title}}">
                        </div>
                        <br>
                        <div class="mb-3">
                            <small>Content</small>
                            <textarea name="desc" id="desc" cols="30" rows="4" class="form-control" placeholder="content">{{$posts->desc}}</textarea>
                        </div>
                        <div class="mb-3">
                            <small>File Photo</small>
                            <input type="file" class="form-control" id="photo" name="photo" >
                        </div>
                        <button type="submit" class="btn btn-brand">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('Backend.Layouts.footer')
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

@endsection
