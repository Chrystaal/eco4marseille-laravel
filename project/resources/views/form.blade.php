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
    <div>
        <h3> Etape 3 : Distribution </h3>

        <label for="transportationdis"> Par quel moyen de transport les meubles sont-ils distribués ? :</label>
        <input type="text" id="transportationdis" name="transportationdis">
        <label for="packaging"> Comment sont faits vos emballages ? (livraison à plat, carton, zéro plastique et suremballage, etc...) :</label>
        <input type="text" id="packaging" name="packaging">

    </div>
    <div>
        <h3> Etape 4 : Utilisation </h3>

        <label for="glue"> Quelles sont les colles utilisées ? :</label>
        <input type="text" id="glue" name="glue">
        <label for="paint"> Quelles sont les peintures utilisées ? :</label>
        <input type="text" id="paint" name="paint">
        <label for="guarantee"> Combien de temps est garanti votre produit ? :</label>
        <input type="text" id="guarantee" name="guarantee">
        <label for="resistance"> Quelle est la résistance mécanique de votre produit ? :</label>
        <input type="text" id="resistance" name="resistance">
    </div>
    <div>
        <h3> Etape 5 : Fin de vie </h3>

        <label for="recycling"> Quel est le taux de recyclage du meuble ? :</label>
        <input type="text" id="recycling" name="recycling">
        <label for="paint"> Est-il démontable ? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="guarantee"> Est-il réparable ?? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>
        <label for="resistance"> Contribuez-vous à Eco-mobilier ? :</label>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">oui</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">non</label>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</div>