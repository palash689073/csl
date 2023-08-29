@extends('master')
@section('title','about page')
@section('content')


	<div class="container" style="margin-top: 100px; margin-bottom: 100px;">

  <h1 class="display-3" style="font-size: 22px;">Category Create </h1>
  <hr>

   @include('partial.message')

  <form method="post" action="{{url('category/create')}}">
    @csrf

  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="category_name" placeholder="Enter Category" value="{{old('category_name')}}">
    @error('category_name')
    <span style="color:red">{{$message}}</span>
    @enderror

  </div>
  

  <div class="form-group">
    <label>Description</label>
   <textarea class="form-control" name="description"></textarea>

    @error('description')
    <span style="color:red">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  

  <a href="{{url('category')}}" style="float:right;"> Back</a>
</div>


@endsection