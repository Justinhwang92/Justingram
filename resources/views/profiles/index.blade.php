@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="https://lh3.googleusercontent.com/Krj7U36DaLwvUl1lRaZsNBhIw06Ftayl7OakgXOcSPJu9P2xYSLenKflvZdwmDy1gXiXo6zvfIk1wG8l9vjqRcnm_Q0ZBJnaetyOtZ5fuVhO_rGR9OeX-oGbHyRAyCE47T5iWzyeUDCdhORXHTmZ09EN4r-GphkUkIekOfbIpfiYx-JVI4ofzochgzr0U9uba0SENp9RTxdnV1X5KIYDGngg5eQGVVyOlbV52dlyYbpRzPrhj34y9Hx7t77VzajxlJCI4fefb08Srkx9QmFUUhM-aAE91kPm_6yPS6yCIVHFWEAE2QXlL996wY6j1g-PRRO97EkvbaTc5Cmwf4pQe104tFRjL25vYajPyS4gJz9debht0SDzVS-dkEOIbBYhfQkYFABoCJm_swgeS4IpH1ce5hnXBLICj8Beoq-k_AZF6CGBNnPngvwRb_HF-RXURpoqtdcWYGXKrK73cJh-q8DBFhUjla_t3kOsw3PQHXt5ueUUHx5StLJLicoLxWZqV1XA51Lmqd_oPDOWdVfE74wNrPK0GR17mVTjsl66ugdSbf0e_caHx0yEkftErWQg1D4ufDdxcUys_xO6X6lKpN2gv2d-g4JNADqnDGzHz_k2cbKYoRBqqZavJL4JHlM-R22d11x8d6IMJEBd-q0rptIC5WUB_bAq-d3H0V50ioRdeeHvDaZuvYTJk0CphjOkZ8zudp7SLQtuaUKW3ZZKVCBMpQ=w328-h262-no?authuser=0" alt="profile" class="rounded-circle" style="height:150px;"></div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <!-- User name display -->
                <h1>{{ $user->username }}</h1>
                <!-- button -->
                <a href="/p/create">Add post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>2568</strong> Posts</div>
                <div class="pr-4"><strong>19.7M</strong> Followers</div>
                <div class="pr-4"><strong>0</strong> Folloing</div>
            </div>
            <!-- Titile display -->
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <!-- Description dispaly -->
            <div>{{ $user->profile->description }}</div>
            <!-- URL display -->
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <!-- get user's posts -->
        @foreach($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        @endforeach


    </div>
</div>
@endsection