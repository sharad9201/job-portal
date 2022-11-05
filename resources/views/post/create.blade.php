@extends('layouts.app')

<div>
    create post
</div>

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="title">
        @error('title')
            <div style="color: red">{{ $message }}</div>
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description"></textarea>
        @error('description')
            <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="image">
        @error('image')
            <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>

