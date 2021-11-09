@extends('layout')

@section('content')
<div class="m-5">
    
    <div class="mt-4">
        <form action="{{ route('sub_assembly.post') }}" method="POST">
    <h1 class="position-absolute top-10 start-50 translate-middle-x">TRES ecodesign </h1>
    <h2 class="position-absolute top-10 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h2>
            <label for="sub_assembly"> Quel est le sous-ensemble concerné ? </label>
            <input class="form-control" type="text" id="sub_assembly" name="name">
            <button type="submit"  class="btn btn-sucess mt-3">Soumettre</button>
        </form>
    </div>
</div>

@endsection