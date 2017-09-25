@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="jumbotron" style="margin-top: 40px">
						  <h1>Hello {{ ucfirst($user->name) }}!</h1>
						  <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						  <p><a class="btn btn-primary btn-lg" href="{{ url('admin/post/create') }}" role="button">Write Something</a></p>
						</div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection