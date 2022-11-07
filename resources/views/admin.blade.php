@extends('layouts.app')
@section('content')
<div class="containner">
    Admin
    
    <div>
        {{-- <a href="{{ route('posts.create') }}">Create a Job Post</a> --}}
        
        {{-- <a href="{{ route('applications.application_array',$posts->id) }}"> See the Applicants</a> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center m-20">
                    <button type="button" class="btn btn-outline-secondary rounded-pill pb-2 mt-5" onclick="window.location='{{ route("posts.index") }}'"">
                        VIEW JOBS
                    </button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill pb-2 mt-5" onclick="window.location='{{ route("posts.create") }}'"">
                        Create a Job Post
                    </button>
                </div>
            </div>
        </div>

        

    </div>
</div>
@endsection
