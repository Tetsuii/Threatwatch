@extends('layouts.app')

@section('content')

<section>
    <!-- Full-width image banner -->
    <div class="container-fluid" style="background-image: url('{{ asset('/images/jjk.jpeg') }}'); background-size: cover; background-position: center; height:content; width: 1800px; margin-top: 70px;">
        <div class="Description">
            <h1 class style="text-align: center; font-size:50px">Enchanced Reporting</h1> 
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
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
                        <div>
                            <img src="{{ $ITEMS['service_image'] }}" alt=""
                                style="height: 350px; object-fit: cover;">
                        </div>
                    </div>    
                </div>
            @endif
            @endforeach
        </div>
    </div>   
</section>
@endsection