<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

// affiche la lust des utilisateir
    public function index()
    {
        $users = User::all();
        return view('admin.index')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    // page gestion  utlisateur
    public function edit(User $user)
    {
        return  view('admin.edit',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    //  admin modifier info des utilisateur
    public function update(Request $request, User $user)
    {
        $user->name=$request->name;
        $user->firstname=$request->firstname;
        $user->email=$request->email;
        $user->role=$request->role;
        $user->save();
        return redirect()->route('utilisateur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // suuprimer utulisateur
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('utilisateur.index');
    }
}
