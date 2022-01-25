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
    <a href="{{route('characters.show',$character->id)}}" class="card-link">Details</a>
    <a href="{{route('characters.edit',$character->id)}}" class="card-link">Edit</a>
  </div>
</div>
@endforeach
</div>
</div>
{{$characters_list->links()}}
@endsection