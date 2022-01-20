@extends('layouts.app')
@section('comics_list')
    <div class="bg_a pt-5 pb-4 position-relative">
        <div class="container">
        <div class="cover_format position-absolute"></div>
            <img class="position-relative" src="{{ $comic->thumb }}" alt="Cover image">
            <span class="position-absolute text-uppercase">{{ $comic->type }}</span>
            <p class="m-0">VIEW GALLERY</p>
        </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div class="content">
                    <h2 class="text_da">{{ $comic->title }}</h2>
                    <div class="d-flex price_av justify-content-between">
                    <div>
                        <div class="d-flex bg_gr p-2 av justify-content-between">
                            <p class="m-0 text-secondary">US.Price <span class="text-white">{{ $comic->price }}</span></p>
                            <p class="m-0 text-secondary">AVAILABLE</p>
                        </div>
                    </div>
                    <p class="m-0 bg_gr p-2 text-white">Check Availability</p>
                    </div>
                    <p class="fw-bold">{{ $comic->description }}</p>
                </div>
            </div>
        
            <div class="col-6">
                <div class="adv">
                    <h2 class="adv_title">ADVERTISEMENT</h2>
                    <img src="{{asset('img/adv.jpg')}}" alt="adv">    
                </div>
            </div>
        </div>
    </div>
@endsection
