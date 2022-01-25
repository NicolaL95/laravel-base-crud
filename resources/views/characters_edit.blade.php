@extends('layouts.app');
@section('comics_list')
<h1>Edit a Character</h1>
<form class="m-3" action="{{route('characters.update',$character->id)}}" method="post">
        @csrf
        @method('PUT')
<div class="mb-3">
  <label for="name" class="form-label"></label>
  <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="nameHelp" value="{{$character->name}}" required>
  <small id="nameHelp" class="text-muted">Add the Character's name</small>
</div>

<div class="mb-3">
  <label for="birth_date" class="form-label"></label>
  <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="" aria-describedby="birthHelp" value="{{$character->birth_date}}">
  <small id="birthHelp" class="text-muted">Add the Character's birth date</small>
</div>

<div class="mb-3">
  <label for="bio" class="form-label"></label>
  <textarea class="form-control" name="bio" id="bio" rows="20">{{ $character->bio}}</textarea>
</div>
<button type="submit" class="btn btn-danger">Update</button>
</form>
@endsection