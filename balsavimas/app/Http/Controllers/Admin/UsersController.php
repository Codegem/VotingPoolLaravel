<?php

namespace App\Http\Controllers\Controller;
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Grupes;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        // tikrinu ar useris gali editint kitus users
        if(Gate::denies('edit_users')){
            return redirect(route('admin.users.index'));
        }
        $grupes = Grupes::all();
        return view('admin.users.edit', compact('user', 'grupes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // siuncia array of id naudojant sync
        $user->grupes()->sync($request->grupes);
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete_users')){
            return redirect(route('admin.users.index'));
        }

        $user->grupes()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
