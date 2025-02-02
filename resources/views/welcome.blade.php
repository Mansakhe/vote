<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /* Styles globaux */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
   
    height: 100%;
    font-family: 'Arial', sans-serif;
}

/* Container de la page */
.container {
    
    
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Contenu centré */
.content {

    background-image: url('image/img.jpg');
    object-fit: cover;
    background-repeat: none;
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
}

/* Style du bouton */



/* Style du texte */
h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

p {
    font-size: 1.2rem;
}

        </style>
    </head>
    <body class="antialiased" >
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a style="text-decoration: none;" href="{{ route('login') }}" class="btn btn-info text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a style="text-decoration: none;" href="{{ route('register') }}" class="btn btn-info ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    <div class="container py-5" >
        <div class="content py-5">
            <a class="btn btn-success my-5" href="{{route('vote')}}">Click Pour Votez</a>
            <h1>Bienvenue Sur Votre Page De Vote</h1>
            <p><strong>Connectez Vous afin de Voter</strong></p>
            <p>La Liste Des Candidats est La Suivantes</p>

           
        </div>

        
    </div>

    <div class="container">
        <div class="row">


            <table class="table">
                <thead>
                  <tr>
                    <th class="bg-success" scope="col">Daouda Diouf</th>
                    <th class="bg-info"  scope="col">Pape Djibril Fall</th>
                    <th class="bg-primary"  scope="col">OUsmane Sonko</th>
                    <th class="bg-warning"  scope="col">Bougane Gueye Dani</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                   
                  <tr>
                    <th class="bg-success"  scope="row">{{$nbrVotant}} Vois</th>
                    <td class="bg-info" >{{$nbrVotant0}} Vois</td>
                    <td class="bg-primary" >{{$nbrVotant9}} Vois</td>
                    <td class="bg-warning" >{{$nbrVotant8}} Vois</td>
                </tr>
               
                  
                </tbody>
              </table>



           {{-- @foreach ($candidat as $candidat)
                <div class="toast-header">
                  <img style="widows: 50px;height:50px" src="{{url('image/',$candidat->image)}}" class="rounded me-2" alt="...">
                  <strong class="me-auto">{{$candidat->name}}</strong>
                  <small>{{$count9}}</small>
                </div>
            @endforeach --}}
        </div>
    </div>




    {{-- <div class="container">
        <h1>Formulaire de Candidature</h1>
        <form action="#" method="POST">
            <!-- Informations personnelles -->
            <fieldset>
                <legend>Informations personnelles</legend>
                <label for="nom">Nom complet :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="dob">Date de naissance :</label>
                <input type="date" id="dob" name="dob" required>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required>

                <label for="tel">Numéro de téléphone :</label>
                <input type="tel" id="tel" name="tel" required>

                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </fieldset>

           

         
          

            <button type="submit">Envoyer la candidature</button>
        </form>
    </div> --}}

</body>
</html>

          
        </div>
    </body>
</html>
