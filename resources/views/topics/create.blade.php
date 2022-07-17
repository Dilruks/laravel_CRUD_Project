@extends('layouts.master')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!-- Create topic Table (begin) -->
<center><h2>You Can Add Topic Here</h2></center>

<div class="container mb-4">
  
    <form method="POST" action="{{ url('/add-topic')}}">
        {{csrf_field()}}
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control"  placeholder=" Enter Title Name">
  </div>

  <button class="btn btn-primary mt-4">Submit</button>
</form>
</div>

 <!-- end -->

@endsection

