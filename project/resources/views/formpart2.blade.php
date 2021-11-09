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
<h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
<div class="m-5">
    <div class="mt-4">
        <h3> Etape 3 : Distribution </h3>

        <label for="transportationdis"> Par quel moyen de transport les meubles sont-ils distribués ?</label>
        <input class="form-control" type="text" id="transportationdis" name="transportationdis">
        <label for="packaging"> Comment sont faits vos emballages ? (livraison à plat, carton, zéro plastique et suremballage, etc...)</label>
        <input class="form-control" type="text" id="packaging" name="packaging">

    </div>
    <div class="mt-4">
        <h3> Etape 4 : Utilisation </h3>

        <label for="glue"> Quelles sont les colles utilisées ?</label>
        <input class="form-control" type="text" id="glue" name="glue">
        <label for="paint"> Quelles sont les peintures utilisées ?</label>
        <input class="form-control" type="text" id="paint" name="paint">
        <label for="guarantee"> Combien de temps est garanti votre produit ?</label>
        <input class="form-control" type="text" id="guarantee" name="guarantee">
        <label for="resistance"> Quelle est la résistance mécanique de votre produit ?</label>
        <input class="form-control" type="text" id="resistance" name="resistance">
    </div>
    <div class="mt-4">
        <h3> Etape 5 : Fin de vie </h3>

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
        </div>

        <button type="submit" class="btn btn-success mt-4">Valider</button>
    </div>
</div>
@endsection