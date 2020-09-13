@extends('layout')
@section('content')
    <table class='table'>
        <tr>
            <th>Title</th><th>Body</th>
            <th>Show</th><th>Edit</th><th>Delete</th>
        </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a href="show/{{$post->id}}" class = "btn btn-primary">Show</td>
            <td><a href="edit/{{$post->id}}" class = "btn btn-warning">Edit</td>
            <td><a href="delete/{{$post->id}}" class = "btn btn-danger">Delete</td>
        </tr>
    @endforeach
    </table>
@endsection