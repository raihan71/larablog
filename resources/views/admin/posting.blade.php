@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>
                          <span>All Posts</span>
                          <a class="btn btn-primary pull-right" href="{{ url('admin/post/create') }}">New Post</a>
                        </h1>
                        <hr/>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-file-o fa-fw"></i>
                                Posts
                            </div>
                            <div class="panel-body">
                             <table class="table table-striped">
                                 <tbody>
                                    @foreach($post as $posts)
                                     <tr>
                                         <td class="col-md-1 ">
                                         <input type="checkbox" name="checkbox" class="form-control">
                                         </td>
                                         <td class="col-md-9">
                                         <p>{{$posts->title}}</p>
                                          <small>{{ $posts->created_at }}</small>
                                        </td>
                                         <td class="col-md-2" style="vertical-align: middle;">
                                        <a href="{{ url('admin/post',[ $posts->id,'edit']) }}">Edit</a> | 
                                        <a href="{{ url('admin/post',[ $posts->id]) }}">Preview</a>
                                         </td>
                                     </tr> 
                                    @endforeach
                                 </tbody>
                             </table>
                             {{ $post->links() }}
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