application


<div class="modal-dialog modal-dialog-scrollable">
    <table border="1px">
        <tr>
            <th>Users name</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        @foreach ($applications as $application)
        <tr>
            <td>{{$application['name']}}</td>
            <td>{{$application['description']}}</td>
            <td><img src="{{ asset('/uploads/images/' . $application->image) }}" alt="" width="150px"
                height="150px"></td>
            </td>
            <td>
                <a href="{{route('download',$application->id)}}">Download</a>
            </td>
            
            </tr>
            
        </tr>
        @endforeach
    </table>
</div>  