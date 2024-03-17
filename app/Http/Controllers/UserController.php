<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show_edit(){
        return view('profile.edit');
    }
    
    public function update(Request $request){

        $foto_do_perfil = $request->file('photo_path');
        $nome_da_foto = $foto_do_perfil->getClientOriginalName(); //pega nome original da foto

        $Storage::disk('local')->put('public/'. $nome_da_foto, $foto_do_perfil->getContent()) ;//salva a imagem no disco local
        
        $request->merge([
            'photo_path' => $nome_da_foto
        ]);

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
