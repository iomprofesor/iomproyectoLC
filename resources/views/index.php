<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mi CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0;
            background: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 2.2em;
        }
        .header p {
            color: #666;
            margin: 5px 0;
        }
        .experience h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-top: 0;
        }
        .job {
            margin-bottom: 20px;
        }
        .job h3 {
            margin: 0 0 5px;
            font-size: 1.2em;
            color: #333;
        }
        .job p {
            margin: 2px 0;
        }
        .divider {
            border-top: 1px dashed #ccc;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<div class="container">
    @if($perfil)
        <div class="header">
            <h1>{{ $perfil->nombre }}</h1>
            <p>{{ $perfil->email }} | {{ $perfil->telefono }}</p>
            <p>
                <a href="{{ $perfil->linkedin }}" target="_blank">LinkedIn</a>
            </p>
        </div>

        <div class="experience">
            <h2>Experiencia Laboral</h2>
            @forelse($perfil->experiencias as $exp)
                <div class="job">
                    <h3>{{ $exp->empresa }}</h3>
                    <p><strong>Cargo:</strong> {{ $exp->cargo }}</p>
                    <p><strong>Fecha Inicio:</strong> {{ $exp->fecha_inicio }}</p>
                    <p><strong>Fecha Fin:</strong> {{ $exp->fecha_fin ?? 'Actualmente' }}</p>
                </div>
            @empty
                <p>No hay experiencias registradas.</p>
            @endforelse
        </div>
    @else
        <p>No se encontró ningún perfil.</p>
    @endif
</div>
</body>
</html>
