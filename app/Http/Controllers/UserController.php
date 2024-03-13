<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show_edit(){
        return view('profile.edit');
    }
    
    public function  update(Request $request) {
        
        $user = User::find($request->id);
        if ($user){

            $result = $user->update($request->all());

            if($result){
                return redirect()->route('home');
            }else{
                return redirect()->back()->with('error', 'Erro ao atualizar usuário');
            }
        }
    }
}
