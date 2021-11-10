@extends('layout')

@section('content')
<html lang="en">
    
   <form action="{{ route('product.post') }}" method="POST">
    
    <h4 class="position-absolute mt-3 top-0 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h4>
<div class="m-5">
        <label for="product"> Nom du produit :</label>
        <input class="form-control" type="text" id="product" name="product">
        <label for="product"> Type de produit :</label>
        <input class="form-control" type="text" id="product" name="product">

        <button type="submit" class="btn btn-success mt-3">Valider</button>
    </form>
<br/>
    <a href="{{ url('/form2') }}" class="mt-2">Page suivante</a>
    
    </div>

    @endsection