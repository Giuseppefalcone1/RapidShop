<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>NUOVA RICHIESTA</h1>
    <h2>Dati dell'utente</h2>
    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>email: {{$user->email}}</li>
        <li>cover letter: {{$coverLetter}}</li>
        <a href="{{ route('make.revisor', Auth::user()) }}">Rendi revisore</a>
    </ul>
</body>
</html>