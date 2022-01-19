@extends('layouts.app')
@section('page-title', 'homepage')
@section('comics_list')
<div class="bg_d">
  <div class="current_series series_format">
        <h2>CURRENT SERIES</h2>
      </div>
<div class="container">
    <div class="row pt-5">
@foreach($comics_album as $key=>$value)
<div class="col-2">
    <a class="card_container" href="{{ route('comic',['num' => $key])}}">
        <img src="{{$value['thumb']}}" alt="Album image">
        <p>{{$value['series']}}</p>
    </a>
</div>
@endforeach
    </div>


      <button class="load">LOAD MORE</button>
    </div>
    <div class="generic_bg">
      <div class="generic_container">
        <div class="generic_content">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}"alt="Icona Generica">
          <p>DIGITAL COMICS</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="Icona Generica">
          <p>DC MERCHANDISE</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Icona Generica">
          <p>SUBSCRIPTION</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Icona Generica">
          <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="generic_content">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="Icona Generica">
          <p>DC POWER VISA</p>
        </div>
      </div>
    </div>
    </div>
    </div>
   </div>
@endsection
