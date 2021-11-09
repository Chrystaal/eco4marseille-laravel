@extends('layout')
  
@section('content')
<div>
        <h3> Etape 3 : Distribution </h3>
        <form action={{ route("store_distribution") }} method=POST>
        <label for="transportationdis"> Par quel moyen de transport les meubles sont-ils distribués ? :</label>
        <input type="text" id="transportationdis" name="transportation_means_dis">
        <label for="packaging"> Comment sont faits vos emballages ? (livraison à plat, carton, zéro plastique et suremballage, etc...) :</label>
        <input type="text" id="packaging" name="conditioning">
    </form>

    </div>
    <div>
        <h3> Etape 4 : Utilisation </h3>
        <form action={{ route("store_product_use") }} method=POST>
        <label for="glue"> Quelles sont les colles utilisées ? :</label>
        <input type="text" id="glue" name="glue">
        <label for="paint"> Quelles sont les peintures utilisées ? :</label>
        <input type="text" id="paint" name="paint">
</form>
<form action={{ route("store_lifespan") }} method=POST>
        <label for="guarantee"> Combien de temps est garanti votre produit ? :</label>
        <input type="text" id="guarantee" name="guarantee">
        <label for="resistance"> Quelle est la résistance mécanique de votre produit ? :</label>
        <input type="text" id="resistance" name="resistance">
</form>
    </div>
    <div>
        <h3> Etape 5 : Fin de vie </h3>
        <form action={{ route("store_afterlife") }} method=POST>
        <label for="recycling"> Quel est le taux de recyclage du meuble ? :</label>
        <input type="text" id="recycling" name="recyclable">
        <label for="paint"> Est-il démontable ? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="movable">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="guarantee"> Est-il réparable ?? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="fixable">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="resistance"> Contribuez-vous à Eco-mobilier ? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="eco-mobilier">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
</form><form action={{ route("store_distribution") }} method=POST>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </div>

@endsection