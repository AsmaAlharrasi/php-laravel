@extends('shared/_Layout')

@section('content')


<div class="w-50 p-5">
    <h3 class="text-align-center"> Update Post  </h3>
    <form method="POST" action="{{ route('updateID', ['id' => $post->id]) }}" >
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    @method('PATCH')
    <input type="text" name="title" value="{{$post->title}}" class="form-control mt-3" placeholder="Post Title">

    <input type="text" name="Descreption" value="{{$post->Descreption}}" class="form-control mt-3 w-100" placeholder="Enter Post Description" > </textarea>

    <!-- <input type="date" class="form-control mt-3 " > -->

    <input type="submit" class="btn btn-success mt-3" />

</form>

</div>
@endsection