@extends('layouts.app')

<div>
    Apply for job
</div>

<div>
    {{$post->title}}
</div>

<form method="POST" action="{{ route('posts.apply',$post->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label"> Your name</label>
        <input type="text" class="form-control" placeholder="enter here..." id="formGroupExampleInput" name="name">
        @error('title')
            <div style="color: red">{{ $message }}</div>
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Describe About Yourself in 200 words</label>
        <textarea class="form-control" placeholder="enter here..." id="exampleFormControlTextarea1" rows="8" name="description"></textarea>
        @error('description')
            <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Your CV</label>
        <input class="form-control" type="file" id="formFile" name="image">
        @error('image')
            <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Apply</button>
</form>
</div>

