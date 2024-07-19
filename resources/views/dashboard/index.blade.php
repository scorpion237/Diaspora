@extends('layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/argon-dashboard.min.css" integrity="sha512-xX4LTTrPRKtHKQ2OEa6N+8PRWSALWLss8pegG7sJ96j97V+Lw8WHKKLOAjYmkfemrD6dLsW0vX1p/7pE0Yc1gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-icons.min.css" integrity="sha512-GhQLa5q131bN6G1TOG7zviS79WU8/18DE5WLS7rHN+EOQ0G3BDJfV6+/g680Cq9ocHU+SLKvO9gFnS0NuhZXGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-svg.min.css" integrity="sha512-3vhUeqMoZelRDM1EDZGDqNi+r/FBKb0Xigen7qjdUOqtIlyDPlzjQieCU1MrjygOpmc+VAlKG/MyLa00fesRMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tableau de bord</h1>

            <section class="dashboard-section">
                <h2>Carousel</h2>
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



            <section class="dashboard-section">
                <h2>Slogans</h2>
                <a href="{{ route('slogans.create') }}" class="btn btn-primary">Ajouter un Slogan</a>
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
                        @foreach($slogans as $slogan)
                        <tr>
                            <td>{{ $slogan->title }}</td>
                            <td>{{ $slogan->description }}</td>
                            <td><img src="{{ asset('storage/' . $slogan->image) }}" alt="Slogan Image" width="100"></td>
                            <td>
                                <a href="{{ route('slogans.edit', $slogan->id) }}" class="btn btn-secondary">Modifier</a>
                                <form action="{{ route('slogans.destroy', $slogan->id) }}" method="POST" style="display:inline-block;">
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

            <section class="dashboard-section">
                <h2>Témoignages</h2>
                <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Ajouter un Témoignage</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->author }}</td>
                            <td>{{ $testimonial->content }}</td>
                            <td><img src="{{ asset('storage/' . $testimonial->image) }}" alt="Testimonial Image" width="100"></td>
                            <td>
                                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-secondary">Modifier</a>
                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
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

            <section class="dashboard-section">
                <h2>Agences</h2>
                <a href="{{ route('agencies.create') }}" class="btn btn-primary">Ajouter une Agence</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agencies as $agency)
                        <tr>
                            <td>{{ $agency->name }}</td>
                            <td>{{ $agency->address }}</td>
                            <td>{{ $agency->phone }}</td>
                            <td>
                                <a href="{{ route('agencies.edit', $agency->id) }}" class="btn btn-secondary">Modifier</a>
                                <form action="{{ route('agencies.destroy', $agency->id) }}" method="POST" style="display:inline-block;">
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
            <section class="dashboard-section">
                <h2>Permis de Conduire</h2>
                <a href="{{ route('permis.create') }}" class="btn btn-primary">Ajouter un Permis de Conduire</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Catégorie</th>
                            <th>Description</th>
                            <th>conditions</th>
                            <th>duree_validite</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permis as $permisItem)
                        <tr>
                            <td>{{ $permisItem->categorie }}</td>
                            <td>{{ $permisItem->description }}</td>
                            <td>{{ $permisItem->conditions }}</td>
                            <td>{{ $permisItem->duree_validite }} ans</td>
                            <td>
                                <a href="{{ route('permis.edit', $permisItem->id) }}" class="btn btn-secondary">Modifier</a>
                                <form action="{{ route('permis.destroy', $permisItem->id) }}" method="POST" style="display:inline-block;">
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
        </div>
    </div>
</div>
@endsection
