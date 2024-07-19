@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ajouter un Permis de Conduire
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permis.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="categorie">Catégorie :</label>
                                <input type="text" class="form-control" id="categorie" name="categorie">
                            </div>
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="conditions">conditions :</label>
                                <textarea class="form-control" id="conditions" name="conditions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="duree_validite">validite :</label>
                                <input type="number" class="form-control" id="duree_validite" name="duree_validite"></input>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection