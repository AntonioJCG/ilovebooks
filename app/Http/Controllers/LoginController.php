<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }

    public function register(Request $request) {
        $existingEmail = User::where('email', $request->email)->first();
        $existingUser = User::where('name', $request->name)->first();

        if ($existingEmail) {
            // El correo electrónico ya está registrado y muestra el error
            return redirect()->back()->withInput()->withErrors('El correo electrónico ya está registrado.');
        } else if ($existingUser) {
            // El nombre de usuario ya está registrado y muestra el error
            return redirect()->back()->withInput()->withErrors('El nombre de usuario ya está registrado.');
        }

        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); //para más seguridad
        $user->admin = false;

        $user->save();

        Auth::login($user);

        return redirect(route('home'));
    }

    public function login(Request $request) {
        $credenciales = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::validate($credenciales)) {
            if (Auth::attempt($credenciales, $remember)) {
                $request->session()->regenerate();
                return redirect()->intended('home');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('Las credenciales proporcionadas son inválidas.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
