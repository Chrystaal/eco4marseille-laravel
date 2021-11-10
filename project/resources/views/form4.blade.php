@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<h4 class="position-absolute mt-3 top-0 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h4>

<div class="m-5">
        <h3 class="form-label mt-4"> Etape 2 : Fabrication et Assemblage </h3>
        <form action="{{ route('assembly.post') }}" method="POST">
            <label for="transportation"> Comment est-il transporté vers le lieu d'assemblage ? :</label>
            <input class="form-control" type="text" id="transportation" name="transportation_means_assembly">
            <label for="energy"> Quel est le mix énergétique des différentes usines ? :</label>
            <input class="form-control" type="text" id="energy" name="energy">
            <label for="lossratio"> Quel est le taux de pertes résiduelles de la fabrication ? :</label>
            <input class="form-control" type="text" id="lossratio" name="loss_rate">
            <label for="location"> Où se trouve le lieu d'assemblage ? :</label>
            <input class="form-control" type="text" id="location" name="assembly_location">
            <button type="submit"  class="btn btn-success mt-3">Valider</button>
        </form>
    </div>

    <label class="mt-4 ml-5" for="subassembly">Votre meuble a-t-il d'autres sous-ensembles ? </label>
    <a href="{{ url('/form2') }}">OUI</a>
    <a href="{{ url('/form5') }}">NON</a>

        @endsection