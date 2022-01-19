@extends('layouts.app')
@section('comics_list')
    <div class="bg_a pt-5 pb-4 position-relative">
        <div class="container">
        <div class="cover_format position-absolute">
            <img class="position-relative" src="{{ $dett_com[$num]['thumb'] }}" alt="Cover image">
            <span class="position-absolute text-uppercase">{{ $dett_com[$num]['type'] }}</span>
            <p class="m-0">VIEW GALLERY</p>
        </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <div class="content">
                    <h2 class="text_da">{{ $dett_com[$num]['title'] }}</h2>
                    <div class="d-flex price_av justify-content-between">
                    <div>
                        <div class="d-flex bg_gr p-2 av justify-content-between">
                            <p class="m-0 text-secondary">US.Price <span class="text-white">{{ $dett_com[$num]['price'] }}</span></p>
                            <p class="m-0 text-secondary">AVAILABLE</p>
                        </div>
                    </div>
                    <p class="m-0 bg_gr p-2 text-white">Check Availability</p>
                    </div>
                    <p class="fw-bold">{{ $dett_com[$num]['description'] }}</p>
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
    <div class="bg_g bt_1g">
        <div class="container">
            <div class="row">
                <div class="col-6 py-3">
                    <div class="talent">
                        <h2 class="text_da">Talent</h2>
                        <div class="art d-flex bt_1g py-2 justify-content-between align-items-center">
                            <p class='m-0 text_da'>Art by:</p>
                            <p class="text-primary w_435r m-0">
                                @foreach($dett_com[$num]['artists'] as $artist)
                               {{$artist}}
                                @if(!$loop->last)
                                 <span class="text-dark">,</span>
                                @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="writter d-flex bt_1g bb_1g py-2 justify-content-between align-items-center">
                        <p class='m-0 text_da'>Written by:</p>
                            <p class="text-primary w_435r m-0">
                                @foreach($dett_com[$num]['writers'] as $writers)
                               {{$writers}}
                                @if(!$loop->last)
                                <span class="text-dark">,</span>
                                @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 py-3">
                    <div class="specs">
                        <h2 class="text_da">Specs</h2>
                        <div class="series d-flex bt_1g align-items-center justify-content-between py-2">
                            <p class='m-0 text_da'>Series:</p>
                            <p class='w_435 m-0 text-primary text-uppercase'>{{ $dett_com[$num]['series'] }}</p> 
                        </div>
                        <div class="price d-flex bt_1g align-items-center justify-content-between py-2">
                            <p class='m-0 text_da'>U.S. Price:</p>
                            <p class='w_435 m-0 '>{{ $dett_com[$num]['price'] }}</p>
                        </div>
                        <div class="sale d-flex bt_1g bb_1g align-items-center justify-content-between py-2">
                            <p class='m-0 text_da'>On Sale Date:</p>
                            <p class='w_435 m-0'>{{ $date_format }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
