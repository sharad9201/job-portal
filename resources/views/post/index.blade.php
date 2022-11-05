
<div class="modal-dialog modal-dialog-scrollable">
    <table border="1px">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Posted By</th>
            <th>Image</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post->user['name']}}</td>
            <td><img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="150px"
                height="150px"></td>
        <td>
        </tr>
        @endforeach
    </table>
</div>  

