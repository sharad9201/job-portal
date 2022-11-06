@extends('layouts.app')

@section('content')

<header>
    {{-- <img src="{{ asset('img/myimage.png') }}" class="img-fluid" alt="Responsive image"> --}}
    <div style="background-color: #D6DFDC; width:100%; height:30rem" >

       
        <div class="container">
            <form action="search" method="get">
            <div class="form-group">                      
                   
                    <div class="input-group">
                        <input type="text" class="form-control mt-5 " name="search_name" placeholder="Search for job">
                        <div class="input-group-append">
                            <button class="btn btn-secondary mt-5" type="Submit">
                                Search
                              </button>
                              {{-- <i class="fa fa-search"></i> --}}
                        </div>
                      </div>
                    
           
        </div>
    </form>
</div>
    
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
      
    </div>

    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40rem">
            
        </div>
    </div>
    
</div>
@endsection
{{-- @yield('jobs') --}}
