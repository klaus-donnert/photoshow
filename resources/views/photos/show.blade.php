@extends('layouts.app')

@section('content')
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <a href="/albums/{{$photo->album_id}}">Back</a>
    <hr>
    <img class="boxshadow" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <br>
    <br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' =>'post']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class' => 'button alert'])}}
    {!! Form::close() !!}
    <hr>
    <small>Size: {{$photo->size}}</small>
@endsection