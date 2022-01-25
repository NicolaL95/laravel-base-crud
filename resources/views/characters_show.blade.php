@extends('layouts.app')
@section('comics_list')
<h2>Name: {{ $character->name }}</h2>
<h2>Birth Date: {{ $character->birth_date }}</h2>
<h2>Bio: {{ $character->bio }}</h2>
@endsection