@extends('layout')
@section('content')
<style>
#c{
    margin:50px;
}
#error{
  color:red;
}
</style>
<form method = "POST" action="/update/{{$post->id}}">
    @csrf
    @method('post')
  <div id="c">
  <h4>Edit your post</h4>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name = "title" class="form-control" id="title" value = "{{$post->title}}">
    <label id = "error">{{$errors->first('title')}}</label>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" name = "body" class="form-control" id="body" value = "{{$post->body}}">
  </div>
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <td><a href="{{URL::previous()}}" class = "btn btn-primary">Cancel</a></td>
  </div>
</form>
@endsection