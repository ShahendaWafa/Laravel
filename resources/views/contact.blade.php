@extends('layout')
@section('content')
<br>
<h3> Contact Informations..</h3><br>
@foreach($arr as $a=>$b)
        <ul>
        <li>{{$a}}  : {{$b}}</li>
        </tr>
        </ul>
    @endforeach
@endsection