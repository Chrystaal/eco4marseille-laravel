@extends('layout')

@section('content')
<html lang="en">

<h4 class="position-absolute mt-3 top-0 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h4>
<div class="m-5">
    <h3 class="form-label mt-4"> Etape 1 : Matières Premières</h3>
    <form action="{{ route('raw_material.post') }}" method="POST">
            <label for="weight"> Quelle est sa masse (kg)? :</label>
            <input class="form-control" type="text" id="weight" name="weight">
            <label for="material"> Quelle est la matière utilisée ? :</label>
            <input class="form-control" type="text" id="material" name="material">
            <label for="origin"> D'où provient-elle ? :</label>
            <input class="form-control" type="text" id="origin" name="origin">
            <label for="transformation"> Où est-elle transformée ? :</label>
            <input class="form-control" type="text" id="transformation" name="transformation_location">
            <label for="transportation">Comment est-elle transportée vers le lieu de transformation ? :</label>
            <input class="form-control" type="text" id="transportation" name="transportation_means_raw">
            <button type="submit"  class="btn btn-success mt-3">Valider</button>
    </form>

    <a href="{{ url('/form4') }}">Page suivante</a>
</div>

@endsection