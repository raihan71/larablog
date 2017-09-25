@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Edit Post</h1>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <li class="fa fa-pencil-square-o"></li>
                                    Post
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ url('admin/post',[$post->id]) }}">
                                    <div class="form-group">
                                        <label for="Title">Post Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Place your title here" value="{{$post->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">Post Content</label>
                                        <textarea name="content" class="form-control" rows="7" style="resize:none;" placeholder="Place your content here" required>{{$post->desc}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload Image</label>
                                        <input type="file" name="image" accept="image/*" >
                                    </div>
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        {{ method_field('PATCH') }}
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                        <a href="{{ url('admin/post') }}" class="btn btn-default">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
