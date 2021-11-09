@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire partie 1</title>
</head>

    <h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
    <div>
        <div class="m-5">
            <h2 class="form-label"> Informations techniques - analyses d'impact environnemental </h2>
            <label for="productname"> Nom du produit :</label>
            <input class="form-control" type="text" id="productname" name="productname">
            <label for="producttype"> Type de produit :</label>
            <input class="form-control type=" text" id="producttype" name="producttype">
            <div>
                <h3 class="form-label mt-4"> Etape 1 : Matières Premières </h3>

                <label for="transportation"> Comment est-il transporté vers le lieu d'assemblage ? :</label>
                <input class="form-control" type=" text" id="transportation" name="transportation">
                <label for="energy"> Quel est le mix énergétique des différentes usines ? :</label>
                <input class="form-control" type=" text" id="energy" name="energy">
                <label for="lossratio"> Quel est le taux de pertes résiduelles de la fabrication ? :</label>
                <input class="form-control" type=" text" id="lossratio" name="lossratio">
                <label for="location"> Où se trouve le lieu d'assemblage ? :</label>
                <input class="form-control" type=" text" id="location" name="location">
            </div>
            <button type="submit" class="btn btn-success mt-3">Soumettre</button>
            <div>
            <label class="mt-4" for="subassembly">Votre meuble a-t-il d'autres sous-ensembles ? </label>
            <button type="submit" class="btn btn-success">OUI</button>
            <button type="submit" class="btn btn-success">NON</button></div>
        </div>
    </div>

    @endsection