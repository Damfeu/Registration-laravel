<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Authentification</title>
</head>
<body class="dam">
    <form action="{{ route('registration.process')}}" method="POST" class="dan">
        @csrf
        <h1>Inscription</h1>

        @if ($errors->any())
        <ul class="alert alert-danger">
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ul>
            
        @endif

        @if ($message = Session::get('error'))
        <div>{{ $message}}</div><br />
            
        @endif

        <label for="name">Nom d'utilisateur</label><br/>
        <input type="text" name="name" id="name" placeholder="Saisir le mot de passe ici ..."  class="damm"><br/><br/>

        <label for="email">Email</label><br/>
        <input type="text" name="email" id="email" placeholder="Saisir votre email ici ..." class="damm"><br/><br/>

        <label for="password">mot de passe</label><br>
        <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici..."  class="damm"><br/><br/>

        <label for="passwordConfirm">Confirmer mot de pasee </label><br>
        <input type="password" name="passworConfirm" id="passwordConfirm" placeholder="Confirmer le mot de passe ici ..." class="damm"><br/><br/>

        <a href="{{ route('login')}}">Se connecter</a><br/><br/>

      <button type="submit" class="btn btn-success">Soumettre</button>
    </form>
    
</body>
</html>