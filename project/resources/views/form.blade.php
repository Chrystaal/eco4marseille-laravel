@extends('layout')
  
@section('content')
<div>
    <h1>TRES ecodesign </h1>
    <h2> Informations techniques - analyses d'impact environnemental </h2>
        <label for="productname"> Nom du produit :</label>
        <input type="text" id="productname" name="productname">
        <label for="producttype"> Type de produit :</label>
        <input type="text" id="producttype" name="producttype">

    <div>
        <h3> Etape 1 : Matières Premières </h3>

        <label for="weight"> Quelle est sa masse (kg)? :</label>
        <input type="text" id="weight" name="weight">
        <label for="material"> Quelle est la matière utilisée ? :</label>
        <input type="text" id="material" name="material">
        <label for="origin"> D'où provient-elle ? :</label>
        <input type="text" id="origin" name="origin">
        <label for="transformation"> Où est-elle transformée ? :</label>
        <input type="text" id="transformation" name="transformation">
        <label for="transportation">Comment est-elle transportée vers le lieu de transformation ? :</label>
        <input type="text" id="transportation" name="transportation">

    </div>
    <div>
        <h3> Etape 2 : Fabrication et Assemblage </h3>

        <label for="transportation"> Comment est-il transporté vers le lieu d'assemblage ? :</label>
        <input type="text" id="transportation" name="transportation">
        <label for="energy"> Quel est le mix énergétique des différentes usines ? :</label>
        <input type="text" id="energy" name="energy">
        <label for="lossratio"> Quel est le taux de pertes résiduelles de la fabrication ? :</label>
        <input type="text" id="lossratio" name="lossratio">
        <label for="location"> Où se trouve le lieu d'assemblage ? :</label>
        <input type="text" id="location" name="location">
    </div>


    <button type="submit" class="btn btn-primary">Soumettre</button>
    
        <label for="subassembly">Votre meuble a-t-il d'autres sous-ensembles ? </label>
        <button type="submit" class="btn btn-primary">OUI</button>
        <button type="submit" class="btn btn-primary">NON</button>
    </div>
    
</div>
@endsection