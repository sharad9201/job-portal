@extends('layouts.app')
@section('content')
<div class="containner">
    Admin
    
    <div>
        <a href="{{ route('posts.create') }}">Create a Job Post</a>
        
        {{-- <a href="{{ route('applications.application_array',$posts->id) }}"> See the Applicants</a> --}}

    </div>
</div>
@endsection
