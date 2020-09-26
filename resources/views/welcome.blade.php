
@extends('Layouts.website')
@section('content')

<div class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                <img src="{{url('')}}/website/images/banners/{{$banner->banner_image}}" class="w-100 img-fluid">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Packages -->
<div class="packages">
    <div class="container">
        <div class="row mb-4 mb-lg-5">
            <div class="col-12 text-center">
                <h1>package's</h1>
            </div>
        </div>

        <div class="row">

            @foreach($packages as $package)
            <div class="col-12 col-md-6 col-lg-4 px-sm-4">
                <div class="card rounded-0 package-card border-0">
                    <div class="img-box">
                        <img src="{{url('')}}/website/images/packages/{{$package->image}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3>{{$package->title}}</h3>
                        <div class="d-flex">
                            <div><p class="mb-0 mt-2">{{$package->start_date}}</p></div>
                            <div class="ml-auto">
                                <a href="{{route('package.show', $package->id)}}" type="button" class="btn shadow-none">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>



@endsection