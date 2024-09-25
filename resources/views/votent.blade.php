<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Candidature</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;
            margin: 50px 50px;
            color: #333;


            background-color: #28a745;


        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }


        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="file"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;

        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <x-app-layout>
        </x-app-layout>
        <h1 class="my-5 fs-2 fw-bold">MA Carte Ma Voie</h1>

        {{-- @if ($errors->any())
            <div class="alert alert-info">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('Enregevotent', $candidateId) }}" method="post">
            @csrf
            <div class="form-group">

                <div class="mb-3">
                    <input type="number" name="identite" value="{{ old('identite')}}" class="form-control"
                        placeholder="saisie ton N° d'identite">
                    @error('identite')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <select name="name" id="options" required>
                       
                        <option value="option1">Choisi ton Candidat</option>
                        @foreach ($data as $data)
                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Votez !!!</button>
        </form>
    </div>
</body>

</html>
