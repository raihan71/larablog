@extends('layouts.visitor-layout')
@section('style-css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
@endsection

@section('content')
<!-- Post Content Column -->
<div class="clearfix"></div>

<div class="col-md-8 col-sm-8 col-xs-8" style="font-size: larger;">

  <!-- Title -->
  <h1 class="mt-4">{{$data->title}}</h1>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#">Admin</a>
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Posted on {{$data->created_at}}</p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="{{URL::asset('images/post'.$data->image)}}" alt="No Gambar">

  <hr>

  <!-- Post Content -->
  <p class="lead">{{$data->desc}}</p>

  <hr>

  <!-- Comments Form -->
  <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form>
        <div class="form-group">
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-danger" onclick="self.history.back();">Back</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <!-- Single Comment -->
  <div class="media mb-4">
    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
    <div class="media-body">
      <h5 class="mt-0">Commenter Name</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </div>
</div>

</div>
</div>

</div>
@stop