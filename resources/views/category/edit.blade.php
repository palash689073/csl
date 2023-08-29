@extends('master')
@section('title','about page')
@section('content')


	<div class="container" style="margin-top: 100px; margin-bottom: 100px;">

  <h1 class="display-3" style="font-size: 22px;">Category Edit </h1>
  <hr>

   @include('partial.message')

  <form method="post" action="{{url('category/update')}}">
    @csrf

<input type="hidden" name="id" value="{{$data->id}}">

  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="category_name" placeholder="Enter Category" value="{{$data->name}}">
  </div>
  

  <div class="form-group">
    <label>Description</label>
   <textarea class="form-control" name="description">{{$data->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  

  <a href="{{url('category')}}" style="float:right;"> Back</a>
</div>


@endsection