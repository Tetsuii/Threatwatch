@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/home.css">

<section>
    <!-- Full-width image banner -->
    <div class="container-fluid" style="background-image: url('{{ asset('images/cypherimg.png') }}'); background-size: cover; background-position: center; height:content; width: 1800px; margin-top: 70px;">
        <div class="Description">
            <h1 class style="text-align: center; font-size:50px">LETD</h1> 
        </div>
        <div class="container-fluid" style="height:content; width: 1800px; display: flex; flex-wrap: wrap; justify-content: space-evenly;">
            @foreach ($ITEMS as $ITEMS)
            @if ($loop->index >=0)
                <div style="border-width:3px; border-style:solid; border-color:#000000; padding: 1em; height:600px; width:500px; margin-bottom: 40px">
                    <div style="border-width:3px; border-style:solid; border-color:#FF0000; padding: 1em;">
                        <div>
                        <!-- Updated to an anchor tag -->
                        <h4>{{ $ITEMS['service_name']}} </h4>
                        <p>
                        <ul>
                            <li>{{ $ITEMS['service_description'] }}</li>
                        </ul>
                        </p>
                        </div>
                    </div>
                    <div style="border-width:3px; border-style:solid; border-color:#FF0000; padding: 1em;">
                        <div class="right-image" style="height: 100%; width: 100%; overflow:hidden;">
                            <img src="{{ $ITEMS['service_image'] }}" alt=""
                                style="height: 250px; object-fit:scale-down;">
                        </div>
                    </div>    
                </div>
            @endif
            @endforeach
        </div>
    </div>   
</section>
@endsection