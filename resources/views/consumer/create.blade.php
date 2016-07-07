@extends('default')

@section('content')

    <h1>Ajouter un nouveau consumer :</h1>

    <form action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="consumer">Nom du consumer</label>
            <input type="text" name="consumer" id="consumer" class="form-control">
        </div>
        <div class="form-group">
            <label for="consumer">Mail du consumer</label>
            <input type="text" name="mail" id="mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description du consumer</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-default">Ajouter</button>
        </div>
    </form>

@endsection