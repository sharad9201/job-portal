<div>
 
   @foreach ($posts as $post)
   <div class="card " style="width: 18rem;">
   
       <img class="card-img-top"  src="{{ asset('/uploads/images/' . $post->image) }}" alt="Card image cap">
       <div class="card-body ">
         <h5 class="card-title">  {{$post['title']}}</h5>

         <p class="card-text"> {{ \Illuminate\Support\Str::words($post->description, 10)}} </p>
         <a href="{{route('posts.view_more',$post->id)}}" class="btn btn-primary">View more..</a>
       </div>
   </div>
   
   @endforeach
   
   
</div>