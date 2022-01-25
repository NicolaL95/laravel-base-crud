@extends('layouts.app');
@section('comics_list')
<h1>Add new Character</h1>
<form class="m-3" action="{{route('characters.store')}}" method="post">
        @csrf
<div class="mb-3">
  <label for="name" class="form-label"></label>
  <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="nameHelp" value="{{old('name')}}" required>
  <small id="nameHelp" class="text-muted">Add the Character's name</small>
</div>

<div class="mb-3">
  <label for="birth_date" class="form-label"></label>
  <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="" aria-describedby="birthHelp" value="{{old('birth_date')}}">
  <small id="birthHelp" class="text-muted">Add the Character's birth date</small>
</div>

<div class="mb-3">
  <label for="bio" class="form-label"></label>
  <textarea class="form-control" name="bio" id="bio" rows="20">
       {{old('bio')}}
  </textarea>
</div>
<button type="submit" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link">Submit</button>
</form>
@endsection