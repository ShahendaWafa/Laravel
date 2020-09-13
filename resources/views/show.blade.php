@extends('layout')
@section('content')

<table class = "table">
    <tr>
        <td> <b> Post # </b></td>
        <td>{{$post->id}}</td>
    </tr>
    <tr>
        <td> <b> Post Title </b></td>
        <td>{{$post->title}}</td>
    </tr>
    <tr>
        <td> <b> Post Body </b></td>
        <td>{{$post->body}}</td>
    </tr>
    <tr>
        <td> <b> Created at </b></td>
        <td>{{$post->created_at}}</td>
    </tr>
    <tr>
        <td> <b> Updated at </b></td>
        <td>{{$post->updated_at}}</td>
    </tr>
    <tr>
        <td><a href="{{URL::previous()}}" class = "btn btn-primary">Back</a></td>
        <td><a href="/allposts" class = "btn btn-primary">All Posts</a></td>
    </tr>
</table>

@endsection