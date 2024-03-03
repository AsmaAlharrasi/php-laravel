@extends('shared/_Layout')
@section('title' , 'blogs')


@section('content')

<div class="mt-4 ">
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
      <div class="card border-3">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">

          <h5 class="card-title">Post ID: ( {{$post->id}} )</h5>
          <!-- <hr> -->
          <h6 class="mt-3">Title:</h6>
          <p class="card-title mx-3"> {{$post->title}}</p>
          <!-- <hr> -->
          <h6 class="mt-3">Description:</h6>
          <p class="card-text mx-3">{{$post->Descreption}}</p>
          <!-- <hr> -->
          <h6 class="mt-3">Created at:</h6>
          <p class="card-subtext mx-3"> {{$post->Createdat}}</p>


        </div>
        <!-- <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div> -->
      </div>
    </div>

  </div>
  <a href="{{route('index')}}" class="btn btn-primary mt-3 ">Back</a>

</div>



@endsection