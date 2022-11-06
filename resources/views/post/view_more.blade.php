@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card" style="width:100% height:50%">
        <div class="card-title">
            {{$post->title}}
        </div>
        <div class="">
            <img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="150px"
                height="150px">
        </div>
        <div class="card-text">
            
            {{$post->description}}
        </div>

        <div>
            @if (auth()->user()->isAdmin())
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                <a href="{{ route('applications.application_array',$post->id) }}"> See the Applicants</a>
            @endif
            <a href="{{route('posts.apply',$post->id)}}">Apply</a>
        </div>

    </div>
@endsection
