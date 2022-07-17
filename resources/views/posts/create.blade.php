@extends('layouts.master')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!-- form for add data Post table (begin) -->

<center><h2>You Can Add Post Here</h2></center>


<div class="container">
  <a class="btn btn-success btn-lg float-righ mb-4" href="{{ url('/')}}"> Go Back</a>
    <form method="POST" action="{{ url('/add-post')}}">
        {{csrf_field()}}
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Body</label>
    <input type="text" name="body" class="form-control"  placeholder="Body">
  </div>

  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <select name="topic_id" class="form-select" aria-label="Default select example">
    @foreach($topics as $topic)
    <option value="{{$topic->id}}">{{$topic->title}}</option>
    @endforeach
  </select>

  <button class="btn btn-primary mt-4">Submit</button>
</form>
</div>

 <!-- end -->

@endsection