@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-3">Inserisci il tuo progetto</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <h4>Correggi i seguenti errori</h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('admin.projects.store')}}" method="POST" class="row g-3">
        @csrf
        <div class="col-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{old('description')}}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}">
            @error('url')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-success w-50">Salva</button>
    </form>
    <a class="btn btn-primary my-5 w-20" href="{{route('admin.projects.index')}}">Torna alla home page</a>
</div>
@endsection