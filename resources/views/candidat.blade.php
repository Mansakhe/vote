<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
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
    <div class="container py-5">
        <div class="row">
            <x-app-layout>
            </x-app-layout>
            <h1 class="fw-bold fs-1 my-5">Enregistrement Des Candidats</h1>
            {{-- @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form action="{{ route('EnregCandidat') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="saisie ton nom"
                            value="{{ old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="number" name="identite" class="form-control"
                            placeholder="saisie ton N° d'identite" value="{{ old('identite')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" class="form-control" placeholder="ton Image"
                            value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Ajouter Candidat !!!</button>
            </form>
        </div>
    </div>
</body>

</html>
