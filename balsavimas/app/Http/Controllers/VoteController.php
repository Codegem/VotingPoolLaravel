<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class VoteController extends Controller
{
    public function create(){
        return view('voting.create');
    }

    public function store(){
        // $answers =  json_encode($request->except(['_token', 'title', 'contentas']));
        // $answer = implode(array_keys(json_decode($answers, true)));
        $data = new Voting();
        $data->title = request('title');
        // $data->contentas = request('contentas');
        $data->answers = json_encode(request('answers'));
        // dd($data);
        $data['user_id'] = auth()->user()->id;
        // $voting = \App\Models\Voting::create($data);    
        $data->save();
        // dd($answer);
        // $data = request()->validate([
        //     'title' => 'required',
        //     'contentas' => 'required',
        //     'answers' => $answer
        //     // 'answers' => json_decode('answers[]')
        //     // 'answers' => ''
        // ]);
        // dd(json_decode(request('answers[]')));

    return redirect('/visipool');

    }

    public function show(Voting $voting){
        return view('voting.show', compact('voting'));
    }

    public function showall(){
        $voting=Voting::all();
        return view('voting.all', compact('voting'));

    }
}
