
@extends('Layouts.website')
@section('content')

<div class="package-show py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 m-auto">

                @if($package)
                    <div class="card rounded-0 border-0 shadow-none">
                        <img src="{{url('')}}/website/images/packages/{{$package->image}}" class="img-fluid w-100">
                        <div class="card-body px-0">
                            <h2 class="mb-0">{{$package->title}}</h2>
                            <h6>Start from {{$package->start_date}} to {{$package->end_date}}</h6>
                            <div class="text-right px-1 py-2">
                                <a href="" type="button" class="btn shadow-none" id="bookNow">Book Now</a>
                            </div>
                            <div class="details">
                                {!! $package->details !!}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center py-4">
                        <h2>Package not found !!</h2>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<script>
    $('#bookNow').click(function(){
        var user = '<?php echo Auth::User()->name; ?>'
        alert(user)
    })
</script>

@endsection