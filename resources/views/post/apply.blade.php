@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card p-5 " style="width:70%;">
            <h1 class="text-center text-secondary">
                Apply for job
            </h1>
    
            <div class="pt-2 ">
                <h1>Applying For: {{ $post->title }}</h1>
            </div>
    
            <form method="POST" action="{{ route('posts.apply', $post->id) }}" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="mb-3">
                    <label class="form-label">
                        <h4>Your Name</h4>
                    </label>
                    <input type="text" class="form-control" placeholder="Enter here..." id="formGroupExampleInput"
                        name="name">
                    @error('title')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
    
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        <h4>Describe About Yourself in 200 Words</h4>
                    </label>
                    <textarea class="form-control" placeholder="Enter here..." id="exampleFormControlTextarea1" rows="8"
                        name="description"></textarea>
                    @error('description')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">
                        <h4>Upload Your CV</h4>
                    </label>
                    <input class="form-control" type="file" id="formFile" name="image">
                    @error('image')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Apply</button>
            </form>
        </div>
    </div>
    



@endsection
