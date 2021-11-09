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
<div class="m-5">



<div class="mt-4">
       
        <form action="{{ route('product_use.post') }}" method="POST">

<h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
<h2 class="position-absolute top-10 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h2> 
<h3 class="form-label mt-4"> Etape 4 : Utilisation </h3>

        <label for="glue"> Quelles sont les colles utilisées ?</label>
        <input class="form-control" type="text" id="glue" name="glue">
        <label for="paint"> Quelles sont les peintures utilisées ?</label>
        <input class="form-control" type="text" id="paint" name="paint">
        <button type="submit" class="btn btn-success mt-4">Valider</button>
</form>
    </div>
</div>

    @endsection