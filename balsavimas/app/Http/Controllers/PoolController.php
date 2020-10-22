<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voting;
use App\Models\Pool;

class PoolController extends Controller
{
    public function regvote(){
        $pooldata = new Pool();
        $pooldata['pool_answer'] = request('poolanswer');
        $pooldata['voting_id'] = request('poolid');
        $pooldata['user_id'] = auth()->user()->id;
        $pooldata->save();
        // $vote = \App\Models\Pool::create($pooldata);
        return redirect('/');
    }

}
