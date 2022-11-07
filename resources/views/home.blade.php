@extends('layouts.app')

@section('content')

<header>
    {{-- <img src="{{ asset('img/myimage.png') }}" class="img-fluid" alt="Responsive image"> --}}
    <div style="background-color: #D6DFDC; width:100%; height:30rem" >

       
        <div class="container">
            <form action="search" method="get">
                <div class="form-group">                      
                   
                    <div class="input-group">
                        <input type="text" class="form-control pb-2 mt-5 rounded-pill " name="search_name" placeholder="Search for job">
                        <div class="input-group-append">
                            <button class="btn btn-secondary px-2 mt-5 rounded-pill" type="Submit">
                                Search
                              </button>
                              {{-- <i class="fa fa-search"></i> --}}
                        </div>
                      </div>
                    
           
                </div>

            </form>
        </div>

        <div class="ml-5 pb-2 mt-5">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center m-20">
                        <button type="button" class="btn btn-outline-secondary rounded-pill pb-2 mt-5" onclick="window.location='{{ route("posts.index") }}'"">
                            VIEW JOBS
                        </button>
                    </div>
                </div>
            </div>
            {{-- <button class="btn btn-outline-secondary rounded-pill pb-2 mt-5" onclick="window.location='{{ route("posts.index") }}'">
                
            </button> --}}
        </div>
    
    </div>

    <div class="our-services d-flex mt-15">
           
        <div class="container">
                
            <div class="d-flex justify-content-center mb-0_8">
                <h2>Our Services</h2>
                  
            </div>
            <div class="row">
                <!-- column 1 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
            
                                <img src="sourceimages/job1.jpeg" alt="" class="img-thumbnail">
                            
                            <div class="card-body mt-0_6">
                                <h4 class="card-title">Find a step.</h4>
                                <p class="card-text mb-0_4">An adventure is an exciting experience that is typically bold, sometimes risky, undertaking. Adventures may be activities with some potential for physical dange, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                    cum eligendi illum!</p>
                                <a href="" class="card-link text-uppercase style">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column 2 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card" >
                        <div class="card-body">
                            <img src="sourceimages/job2.jpeg" alt="" class="img-thumbnail">

                            <div class="card-body mt-0_6">
                                <h4 class="card-title">Oppurtunities</h4>
                                <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                    Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                    totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                    cum eligendi illum!</p>
                                <a href="" class="card-link text-uppercase style">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column 3 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card ">
                        <div class="card-body">
                            <img src="sourceimages/job3.jpeg" alt="" class="img-thumbnail">

                            <div class="card-body mt-0_6">
                                <h4 class="card-title">Internship</h4>
                                <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                    Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                    totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                    cum eligendi illum!</p>
                                <a href="" class="card-link text-uppercase style">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

               
                   
                

            </div>
        </div>
    </div>
   
</header>
<div class="row two-column pt-5 pl-2 mt-5 ">
    

    <div class="colsm-12 col-md-6 mb-30 ">
    <img src="sourceimages/resume.jpeg" alt="Responsive image" class="card-img-top pl-2">
    </div>
    <div class="colsm-12 col-md-6 mb-30">
        <div class="text-wrap p-45">
            <h2 class="my-30">Why Nepal?</h2>
            <p class="my-15">Nepal is a country of contrasts. Spectacular natural riches combine with a vibrant culture and sense of history. Home to ten of the world's 14 highest mountains, the country offers a magnificent setting for hiking and mountaineering, as well as some of the world's best white water rafting.</p>
            <p class="my-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam
                minima
                praesentium
                sapiente? Aliquid sit deserunt deleniti quaerat, eaque, doloribus magnam dolores,
                voluptatibus
                tenetur dolorum optio eligendi unde enim accusamus?</p>
                <a href="" class="btn btn-primary rounded-0 px-15 py-0_5">Lets go</a>
        </div>
    </div>
    
</div>
@include('footer')
@endsection
{{-- @yield('jobs') --}}
