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
            <img src="{{ asset('uploads/users/' . Auth::user()->image) }}" alt="" width="40"
                    height="30" class="d-inline-block align-text-top">
                {{ Auth::user()->name }}'s Posts
        </tr>
        @endforeach
    </table>
</div>