<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Grupo de estudiantes</title>
</head>
<body>
    <main class="mt-5">
        <h1 class="text-center">Grupos de estudiantes</h1>
        <div class="mt-5 d-flex justify-content-evenly">
            <a href="{{ route('cursos.index') }}" class="btn btn-lg btn-primary">Cursos</a>
            <a href="" class="btn btn-lg btn-primary">Generar grupos</a>
        </div>
    </main>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>