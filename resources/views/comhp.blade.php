@extends('layouts.app')
@section('page-title', 'homepage')
@section('comics_list')
<div class="bg_d">
  <div class="current_series series_format">
        <h2>CURRENT SERIES</h2>
      </div>
<div class="container">
    <div class="row pt-5">
@foreach($comics_album as $comic)
<div class="col-2">
    <a class="card_container" href="{{ route('comic.show',$comic -> id)}}">
        <img src="{{$comic['thumb']}}" alt="Album image">
        <p class='mb-1'>{{$comic['series']}}</p>
    </a>
    <div class="button_container mb-2">
      <a class="btn btn-primary" href="{{ route('comic.edit',$comic->id)}}" role="button">Edit</a>
    <button button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup">Elimina</button>
    </div>
    
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="deletePopup" tabindex="-1" aria-labelledby="deletePopupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletePopupLabel">Conferma eliminazione fumetto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi davvero eliminare questo fumetto?
      </div>
      <div class="modal-footer">;
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('comic.update',$comic->id)}}" method="post">
      @csrf
      @method('DELETE')
       <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach
    </div>


      <a class="load" href="{{ route('comic.create')}}">ADD NEW COMIC</a>
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
