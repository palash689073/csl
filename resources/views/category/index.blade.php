@extends('master')
@section('title','about page')
@section('content')


	<div class="container" style="margin-top: 100px; margin-bottom: 100px;">

  <h1 class="display-3" style="font-size: 22px;">Category Index <a href="{{asset('category/create')}}" style="float:right;"> Create</a></h1>

  @include('partial.message')

  <table class="table">
    <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th> 

      </tr>
      <?php $i=1;?>
      
@foreach($data as $item) 
      <tr>
          <td>{{$i++}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->description}}</td>
          <td>
            <a href="{{url('category/edit/'.$item->id)}}">Edit</a>|
            <a href="{{url('category/delete/'.$item->id)}}">Delete</a>
          </td>
      </tr>
@endforeach

  </table>
  
</div>


@endsection