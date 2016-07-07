@extends('default')

@section('content')

    <h1>Consumer enregistrer avec succès !</h1>


    <pre style="margin-top: 40px">
        <h2>Récapitulatif de la nouvelle entrée</h2>
        <code class="language-bash">
            <h3>Nom : {{ $input['name'] }}</h3>
            <h3>Description : {{ $input['describe'] }}</h3>
        </code>
    </pre>
@endsection
