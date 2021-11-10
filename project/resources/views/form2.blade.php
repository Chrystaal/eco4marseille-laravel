@extends('layout')

@section('content')
<h4 class="position-absolute mt-3 top-0 start-50 translate-middle-x"> Informations techniques - analyses d'impact environnemental </h4>
<div class="m-5">
    
    <div class="mt-4">
        <form action="{{ route('sub_assembly.post') }}" method="POST">
            <label for="sub_assembly"> Quel est le sous-ensemble concerné ? </label>
            <input class="form-control" type="text" id="sub_assembly" name="name">
            <button type="submit" class="btn btn-success mt-3">Valider</button>
        </form>

    </div>
    <a href="{{ url('/form3') }}">Page suivante</a>
</div>

@endsection