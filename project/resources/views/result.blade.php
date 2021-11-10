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
        
        <form action="{{ route('afterlife.post') }}" method="POST">
<h3 class="form-label mt-4"> Etape 5 : Fin de vie </h3>
        <label for="recycling"> Quel est le taux de recyclage du meuble ?</label>
        <input class="form-control mb-2" type="text" id="recycling" name="recycling">
        <label for="paint"> Est-il démontable ? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="ml-2 form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="ml-5 form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="guarantee"> Est-il réparable ?</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="ml-2 form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="ml-5 form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="resistance"> Contribuez-vous à Eco-mobilier ?</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="ml-2 form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="ml-5 form-check-label" for="flexSwitchCheckDefault">non</label>
            <br/>
            <button type="submit" class="btn btn-success mt-4">Valider</button>
        </form>
        
        <br/>
        <a href="{{ url('/dashboard') }}">FIN</a>
        </div>

        @endsection