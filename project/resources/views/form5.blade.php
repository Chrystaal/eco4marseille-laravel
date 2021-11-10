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
    <div class="mt-4">

    <form action="{{ route('distribution.post') }}" method="POST">

    <h3 class="form-label mt-4"> Etape 3 : Distribution </h3>

        <label for="transportationdis"> Par quel moyen de transport les meubles sont-ils distribués ?</label>
        <input class="form-control" type="text" id="transportationdis" name="transportationdis">
        <label for="packaging"> Comment sont faits vos emballages ? (livraison à plat, carton, zéro plastique et suremballage, etc...)</label>
        <input class="form-control" type="text" id="packaging" name="packaging">
        <button type="submit" class="btn btn-success mt-4">Valider</button>
    </form>
    <a href="{{ url('/form6') }}">Page suivante</a>
    </div>
   
    

        
    </div>

@endsection