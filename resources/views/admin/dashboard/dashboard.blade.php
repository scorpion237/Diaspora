@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tableau de bord</h1>
            <!-- Contenu du tableau de bord -->
            <section class="dashboard-section">
                <h2>Carousels</h2>
                <a href="{{ route('carousels.create') }}" class="btn btn-primary">Ajouter un carousel</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carousels as $carousel)
                        <tr>
                            <td>{{ $carousel->title }}</td>
                            <td>{{ $carousel->description }}</td>
                            <td><img src="{{ asset('storage/' . $carousel->image) }}" alt="Carousel Image" width="100"></td>
                            <td>
                                <a href="{{ route('carousels.edit', $carousel->id) }}" class="btn btn-secondary">Modifier</a>
                                <form action="{{ route('carousels.destroy', $carousel->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>

            <!-- Répétez pour chaque section (Slogans, Témoignages, Agences, Permis) -->
        </div>
    </div>
</div>
@endsection
