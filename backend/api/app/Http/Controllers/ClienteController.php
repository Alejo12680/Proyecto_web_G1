<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class ClienteController extends Controller
{
    public function signup(Request $request){
        $data = $request->all();
        $data['clave'] = Hash::make($data['clave']);
        $cliente = Cliente::create($data);
        $token = JWTAuth::fromUser($cliente);
        return array('token' => $token);
        // Cliente::create($request->all());
    }

    public function login(Request $request){
        // $correo =$request->input('correo');
        // $clave =$request->input('clave');
        // $cliente=Cliente::select('clave')->where('correo',$correo)->first();
        // // return $cliente->clave==$clave;
        // $res=array(  
             //     "validado"=> $cliente->clave==$clave
        // );
        // return $res;

        $credentials = $request->all();
        $cliente = Cliente::where('correo', $credentials['correo'])->first();
        if(Hash::check($credentials['clave'], $cliente['clave'])){
            $token = JWTAuth::fromUser($cliente);
        }else{
            return response()->json(['error' => 'credenciales invalidas..'], 400);
        }
        return array('token' => $token);
       
    }

    // public function update(Request $request){
    // }

    public function update(Request $request){
        // $data = $request->all();
        // $update= Cliente::where('doc', '1127')->update($data)!=0;
        // return array('update'=>$update);

        return ($request->bearerToken());
       $data = $request->all();
       $updated = Cliente::where('doc', '398')->update($data) != 0;
       $token = JWTAuth::getToken();
       return array('updated' => $updated,'token'=>$token);

        // $data = $request->all();
        // return Cliente::where('doc', '1127')->update($data);

    }

    // public function showAll(){
    //     return Cliente::all();
    // }
}
