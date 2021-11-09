@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <div class="m-5">
    

   <form action="{{ route('product.post') }}" method="POST">
    
    <h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
    <h2 class="position-absolute top-10 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h2>
    
        <label for="product"> Nom du produit :</label>
        <input class="form-control" type="text" id="product" name="product">
        <label for="product"> Type de produit :</label>
        <input class="form-control" type="text" id="product" name="product">

        <button type="submit" class="btn btn-success mt-3">Valider</button>
    </form>
    
    </div>

    @endsection