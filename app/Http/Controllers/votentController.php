<?php

namespace App\Http\Controllers;

use App\Models\candidat;
use App\Models\persone_votant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class votentController extends Controller
{
    public function home()
    {
        $candidat = candidat::all();
        $nbrVotant = persone_votant::where('name', 'daouda diouf')->count();
        $nbrVotant0 = persone_votant::where('name', 'Pape Djibril Fall')->count();
        $nbrVotant9 = persone_votant::where('name', 'OUsmane Sonko')->count();
        $nbrVotant8 = persone_votant::where('name', 'Bougane Gueye Dani')->count();
        return view('welcome', compact('candidat', 'nbrVotant', 'nbrVotant0', 'nbrVotant9', 'nbrVotant8'));
    }


    public function vote()
    {
        $usertype = auth()->user()->usertype;
        if ($usertype == 'candidat') {
            $useridentite = Auth::user();
            $data = candidat::all();
            $candidateId = Candidat::where('name', 'daouda diouf')->pluck('id')->first();
            return view('votent', compact('data', 'useridentite', 'candidateId'));
        } else {
            return view('candidat');
        }
    }

    public function EnregCandidat(Request $request)
    {
         $request->validate(
            [
                'name' => ['required'],
                'image' => ['required'],
                'identite' => ['required', 'digits:12', 'unique:persone_votant,identite'], // Remplace 'users' par le nom de ta table et 'code' par ton champ
            ],
           // Définir les messages personnalisés
            [
                'identite.required' => 'Le champ identite est obligatoire.',
                'identite.digits' => 'Le identite doit contenir exactement 12 chiffres.',
                'identite.unique' => 'Ce identite a déjà été utilisé.',
                'image.required' => 'Le champ image est obligatoire.',
                'name.required' => 'Le champ name est obligatoire.',


            ]
        );

        $data = new candidat();
        $data->name = $request->name;
        $data->identite = $request->identite;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('image', $imagename);
        $data->image = $imagename;
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Produit ajouter avec Success');
        return back();
        
    }


    public function Enregevotent(Request $request, $candidateId)
    {
        $request->validate(
            [
                'identite' => ['required', 'digits:12', 'unique:persone_votants,identite'], // Remplace 'users' par le nom de ta table et 'code' par ton champ
            ],
            // Définir les messages personnalisés
            [
                'identite.required' => "Gnéff sa oukh!!! remplireul  N° d'identite bii. bakhneu!!!",
                'identite.digits' => "waye waye waye!!! 12 chiffres kassé moye N° identite.",
                'identite.unique' => 'Bougoumala Saga Ndeye voté voteé wate amoul.',

            ]
        );

        $data = new persone_votant();
        $data->name = $request->name;
        $data->identite = $request->identite;
        $user = Auth::user();
        $data->user_id = $user->id;
        $data->candidat_id = $candidateId;
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Ton vote a ete prise en compte');
        return back();
    }
}
