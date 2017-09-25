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
                                <thead>
                                 <tr>
                                     <th class="col-md-1 ">
                                       <input type="checkbox" class="form-control" id="checkall">
                                     </th>
                                     <th colspan="2">
                                        <button type="button" class="btn pull-right" onclick="event.preventDefault();document.getElementById('destroy-all').submit();"><li class="fa fa-trash"></li></button>
                                     </th>
                                 </tr>   
                                </thead>
                                 <tbody>
                                    <form id="destroy-all" action="{{ url('admin/delete') }}" method="POST"> {{ csrf_field() }} 
                                    @foreach($post as $posts)
                                     <tr>
                                         <td class="col-md-1 ">
                                            <input type="checkbox" name="checkbox[]" value="{{$posts->id}}" class="form-control checkboxes">
                                         </td>
                                         <td class="col-md-8">
                                             <p>{{$posts->title}}</p>
                                              <small>{{ $posts->created_at }}</small>
                                         </td>
                                         <td class="col-md-3" style="vertical-align: middle; text-align:right">
                                            <a href="{{ url('admin/post',[ $posts->id,'edit']) }}" class="btn btn-default"><li class="fa fa-pencil"></li> Edit</a>
                                            <a href="{{ url('admin/post',[ $posts->id]) }}" class="btn btn-default"> <li class="fa fa-search"></li> Preview</a>
                                         </td>
                                     </tr> 
                                    @endforeach
                                    </form>
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