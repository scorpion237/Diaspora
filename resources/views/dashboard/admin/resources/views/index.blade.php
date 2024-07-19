<!-- resources/views/admin/dashboard.blade.php -->

@extends('admin::layouts')

@section('content')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/argon-dashboard.min.css" integrity="sha512-xX4LTTrPRKtHKQ2OEa6N+8PRWSALWLss8pegG7sJ96j97V+Lw8WHKKLOAjYmkfemrD6dLsW0vX1p/7pE0Yc1gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-icons.min.css" integrity="sha512-GhQLa5q131bN6G1TOG7zviS79WU8/18DE5WLS7rHN+EOQ0G3BDJfV6+/g680Cq9ocHU+SLKvO9gFnS0NuhZXGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-svg.min.css" integrity="sha512-3vhUeqMoZelRDM1EDZGDqNi+r/FBKb0Xigen7qjdUOqtIlyDPlzjQieCU1MrjygOpmc+VAlKG/MyLa00fesRMw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tableau de bord</h1>

            @foreach (['Carousel' => $carousels, 'Slogan' => $slogans, 'Testimonial' => $testimonials, 'Agency' => $agencies, 'Permis' => $permis] as $section => $items)
                <section class="dashboard-section">
                    <h2>{{ $section }}s</h2>
                    <a href="{{ route(strtolower($section).'s.create') }}" class="btn btn-primary">Ajouter un {{ $section }}</a>
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
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->title ?? $item->name }}</td>
                                <td>{{ $item->description ?? $item->address }}</td>
                                <td><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $section }} Image" width="100"></td>
                                <td>
                                    <a href="{{ route(strtolower($section).'s.edit', $item->id) }}" class="btn btn-secondary">Modifier</a>
                                    <form action="{{ route(strtolower($section).'s.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
            @endforeach
        </div>
    </div>
</div>
@endsection
