@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="card">
            <div class="d-flex justify-content-center" height='100%'>
                <div>
                    <div class="card-title">
                        
                        <h5>Job for:  {{ $post->title }}</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="card-text d-flex justify-content-start" style="border: .5px; color:black ;border-style: dashed;">
                        <div>
                            <h4>Description:</h4> <br>
                        {{ $post->description }}
                            </div>
                    </div>
                </div>
            </div>

            <div>

            </div>
            <div class="d-flex justify-content-evenly">

                @if (auth()->user()->isAdmin())
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>

                    </div>
                    <div>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @method('Delete')
                            @csrf
                            <button class="btn btn-danger" type="submit"> Delete</button>
                        </form>
                    </div>

                    <div>
                        <a href="{{ route('applications.application_array', $post->id) }}" class="btn btn-primary"> See the
                            Applicants</a>

                    </div>
                @endif
                <div>
                    <a href="{{ route('posts.apply', $post->id) }}" class="btn btn-primary" style="width: 150px">Apply</a>
                </div>
            </div>
        </div>
    </div>
@endsection
