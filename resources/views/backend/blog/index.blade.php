@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">BLogs</span>
                    <a href="/blog/create" class="float-end btn btn-info">New blog </a>
                </div>
                <div class="card-body">
                    <div class="row">
                    @foreach ($blogs as $blog)
                            <div class="col-md-3">
                                <div class="card-hover">
                                    <div class="card-body">
                                        <h5>{{ $blog->title }}</h5>
                                        <img src="{{ asset($blog->image) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <form action="/blog/{{$blog->id}} " method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/blog/{{ $blog->id }}/edit" class="btn btn-info">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
