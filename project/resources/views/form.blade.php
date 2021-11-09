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
        <form action={{ route("store_sub_assembly") }} method=POST>
        <label for="subassembly"> Quel est le sous-ensemble concerné ? </label>
        <input type="text" id="subassembly" name="name">
    </form>

    <div>
        <h3> Etape 1 : Matières Premières </h3>

        <form action={{ route("store_raw_material") }} method=POST>
            <label for="weight"> Quelle est sa masse (kg)? :</label>
            <input type="text" id="weight" name="weight">
            <label for="material"> Quelle est la matière utilisée ? :</label>
            <input type="text" id="material" name="material">
            <label for="origin"> D'où provient-elle ? :</label>
            <input type="text" id="origin" name="origin">
            <label for="transformation"> Où est-elle transformée ? :</label>
            <input type="text" id="transformation" name="transformation_location">
            <label for="transportation">Comment est-elle transportée vers le lieu de transformation ? :</label>
            <input type="text" id="transportation" name="transportation_means_raw">
        </form>

    </div>
    <div>
        <h3> Etape 2 : Fabrication et Assemblage </h3>
        <form action={{ route("store_assembly") }} method=POST>
            <label for="transportation"> Comment est-il transporté vers le lieu d'assemblage ? :</label>
            <input type="text" id="transportation" name="transportation_means_assembly">
            <label for="energy"> Quel est le mix énergétique des différentes usines ? :</label>
            <input type="text" id="energy" name="energy">
            <label for="lossratio"> Quel est le taux de pertes résiduelles de la fabrication ? :</label>
            <input type="text" id="lossratio" name="loss_rate">
            <label for="location"> Où se trouve le lieu d'assemblage ? :</label>
            <input type="text" id="location" name="assembly_location">
        </form>
    </div>


    <button type="submit" class="btn btn-primary">Soumettre</button>
    
        <label for="subassembly">Votre meuble a-t-il d'autres sous-ensembles ? </label>
        <button type="submit" class="btn btn-primary">OUI</button>
        <button type="submit" class="btn btn-primary">NON</button>
    </div>
    
</div>
@endsection