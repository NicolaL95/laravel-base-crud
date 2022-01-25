@extends('layouts.app')
@section('comics_list')
<a href="{{route('characters.create')}}" class="btn btn-primary m-2">Create</a>
<div class="container">
    <div class="row">
@foreach($characters_list as $character)
<div class="card m-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$character['name']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$character['birth_date']}}</h6>
    <p class="card-text">{{$character['bio']}}</p>
    <a href="{{route('characters.show',$character->id)}}" class="btn btn-success">Details</a>
    <a href="{{route('characters.edit',$character->id)}}" class="btn btn-success">Edit</a>
     <button button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup">Elimina</button>
    </div>
    
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="deletePopup" tabindex="-1" aria-labelledby="deletePopupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletePopupLabel">Conferma eliminazione personaggio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi davvero eliminare questo personaggio?
      </div>
      <div class="modal-footer">;
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('characters.update',$character->id)}}" method="post">
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
</div>
{{$characters_list->links()}}
@endsection