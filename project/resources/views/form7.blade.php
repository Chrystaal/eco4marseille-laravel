@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulaire partie 2</title>
</head>
<h4 class="position-absolute mt-3 top-0 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h4>
<div class="m-5">
        <form action="{{ route('product_use.post') }}" method="POST">
<h3 class="form-label mt-4"> Etape 4bis : Durée de vie </h3>
        <label for="guarantee"> Combien de temps est garanti votre produit ?</label>
        <input class="form-control" type="text" id="guarantee" name="guarantee">
        <label for="resistance"> Quelle est la résistance mécanique de votre produit ?</label>
        <input class="form-control" type="text" id="resistance" name="resistance">
        <button type="submit" class="btn btn-success mt-4">Valider</button>
</form>

<a href="{{ url('/result') }}">Page suivante</a>
</div>

@endsection