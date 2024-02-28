@extends('shared/_Layout')
@section('title' , 'blogs')


@section('content')

<div class="container">
  <div class=" d-flex justify-content-between mb-3 mt-3">
    <h1 class="text-center mt-2">My Blogs</h1>
    <a href="{{route('create')}}" class="btn btn-primary m-2 mb-3">Create New Post </a>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($posts as $post)
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$post->id}}</h5>
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->Descreption }}</p>
          <p class="card-subtext">{{$post->Createdat}}</p>
          <div class="d-flex justify-content-between">


            <a href="{{route('show',$post['id'])}}" class="btn btn-warning">View</a>

            <a href="{{route('update',$post['id'])}}" class="btn btn-secondary">Update</a>

            <form action="{{route('delete',$post['id'])}}" method="post">
              @csrf
              @method('Delete')
              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" class="btn btn-danger" >Delete</button>
            </form>



          </div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>



    @endforeach

  </div>
</div>

@endsection