@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier l'agence</h1>
            <form action="{{ route('agencies.update', $agency->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $agency->name }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ $agency->address }}</textarea>
                </div>

                <div class="form-group">
                    <label for="phone">telephone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>{{ $agency->phone }}</input>
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="{{ asset('storage/' . $slogan->image) }}" alt="Slogan Image" width="100">
                </div> --}}
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection
