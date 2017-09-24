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
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>   
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="col-md-1 " style="text-align: center;">
                                         <input type="checkbox" name="checkbox">
                                         </td>
                                         <td class="col-md-9">
                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt</p>
                                        </td>
                                         <td class="col-md-2">
                                        <a href="">Edit</a> | 
                                        <a href="">Preview</a>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
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