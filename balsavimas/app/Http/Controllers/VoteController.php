<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function create(){
        return view('voting.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'contentas' => 'required'
        ]);

    $data['user_id'] = auth()->user()->id;

    $voting = \App\Models\Voting::create($data);

    return redirect('/voting/'.$voting->id);
    }

    public function show(Voting $voting){
        return view('voting.show', compact('voting'));
    }

    public function showall(){
        $voting=Voting::all();
        return view('voting.all', compact('voting'));

    }
}
