@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <span class="fw-bold fs-4">Blog</span>
                    <a href="/blog" class="btn btn-info float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="/blog" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span> </label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="category">Category <span class="text-danger">*</span> </label>
                            <input type="text" name="category" id="category" class="form-control" placeholder="Enter Category">
                        </div>
                        <div class="form-group">
                            <label for="date">Date <span class="text-danger">*</span> </label>
                            <input type="text" name="date" id="date" class="form-control" placeholder="Enter Date">
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span> </label>
                            <textarea name="description" id="description"  class="form-control" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image">Image <span class="text-danger">*</span> </label>
                                    <input type="file" name="image" id="image" class="form-control"  accept="image/jpeg, image/jpg, image/png ,images/webp">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">Save Record</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
