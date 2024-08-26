<?php

namespace App\Http\Controllers\Auth;

use App\Models\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerVerify(Request $request)
    {
        $request->validate([
            'userName' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password'
        ],[
            'userName.required' => 'el nombre de usuario es requerido',
            'userName.unique' => 'el nombre de usuario ya ha sido usado',
            'email.required' => 'el email es requerido',
            'email.unique' => 'el email ya ha sido usado',
            'role.required' => 'el rol es requerido',
            'password.required' => 'la contraseña es requerida',
            'password.min' => 'la contraseña debe tener al menos 4 caracteres',
            'confirmPassword.required' => 'la confirmación de contraseña es requerida',
            'confirmPassword.same' => 'la confirmación no coincide con la contraseña' ,
        ]);
        try {
            User::create([
                'name' => $request->userName,
                'email' => $request->email,
                'rol' => $request->role,
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'Error al registrar el usuario');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginVerify(Request $request){
        $request->validate([
          'email' => 'required|email',
          'password' => 'required|min:8'
        ],[
          'email.required' => 'el email es requerido',
          'email.unique' => 'el email ya ha sido usado',
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){
            return redirect()->route('home');
        }return back()->withErrors(['invalid_credentials'=>'usuario o contraseña no es valido'])->withInput();
}
public function logout()
{
    Auth::logout();
    return redirect('/auth/login'); // Redirige al usuario a la página de inicio de sesión
}
}