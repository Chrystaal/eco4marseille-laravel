@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

    <h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
    <h2 class="position-absolute top-10 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h2>
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

    <label class="mt-4" for="subassembly">Votre meuble a-t-il d'autres sous-ensembles ? </label>
        <button type="submit" class="btn btn-success">OUI</button>
        <button type="submit" class="btn btn-success">NON</button>

        @endsection