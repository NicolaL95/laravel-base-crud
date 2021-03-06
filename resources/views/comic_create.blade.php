@extends('layouts.app')
@section('page-title', 'homepage')
@section('comics_list')

<div class="container">
    <h1>Create a new Comic</h1>
    @include('partials.errors');
    <form action="{{route('comic.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type your title here" aria-describedby="titleHelper" value="{{ old('title') }}">
            <small id="titleHelper" class="text-muted">Type the comic's title!</small>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

@endsection
