@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier le temoignage</h1>
            <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="author">Auteur</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $testimonial->author }}" required>
                </div>
                <div class="form-group">
                    <label for="content">Message</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required>{{ $testimonial->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Testimonial Image" width="100">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection
