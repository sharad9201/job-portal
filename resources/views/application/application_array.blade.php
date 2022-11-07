@extends('layouts.app')
@section('content')
<div>
    <h2> Application Submitted by Applicants</h2>
        <table class="table" >
            <tr>
                <th>Users name</th>
                <th>Description</th>
                <th>CV</th>
            </tr>
            @foreach ($applications as $application)
            <tr>
                <td>{{$application['name']}}</td>
                <td>{{$application['description']}}</td>
                <td><img src="{{ asset('/uploads/images/' . $application->image) }}" alt="" width="150px"
                    height="150px"></td>
                </td>
                <td>
                    <a href="{{route('download',$application->id)}}" class="btn btn-primary">Download CV</a>
                </td>
                
                </tr>
                
            </tr>
            @endforeach
        </table>
</div>
@endsection

