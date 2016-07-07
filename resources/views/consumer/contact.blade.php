@extends('default')

@section('content')

    <h1>Contacter</h1>

    <form action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="consumer">Votre email</label>
            <input type="text" name="mail" id="mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Votre message</label>
            <input type="text" name="content" id="content" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-default">Ajouter</button>
        </div>
    </form>

@endsection
