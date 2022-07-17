@extends('layouts.master')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!-- form for edit data Post table (begin) -->

<h1>You Can Edit Post Here</h1>

<div class="container mb-4">
    <form method="POST" action="{{url ('/edit-post2/'.$post->id)}}">
        {{csrf_field()}}
        
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Body</label>
    <input type="text" name="body" value="{{old('body') ?? $post->body}}"  class="form-control"  placeholder="Body">
  </div>

  <select name="topic_id"   class="form-select" aria-label="Default select example">
    @foreach($topics as $topic)
    <option value="{{$topic->id}}">{{$topic->title}}</option>
    @endforeach
  </select>

  <button class="btn btn-primary mt-4">Submit</button>
</form>
</div>

 <!-- end -->

@endsection