<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.Login');
    }

    protected function redirectTo()
    {
        if (auth()->user()->is_admin) {
            return '/admin'; // admin → admin paneline gider
        }
        return '/'; // normal kullanıcı → menüye gider
    }

    // Giriş işlemi
    public function loginp(Request $request)
    {
        // Validation
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Auth::attempt giriş denemesi yapar
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            // giriş başarılı → kullanıcıyı al
            $user = Auth::user();

            // admin mi kontrol et
            if ($user->is_admin == 1) {
                return redirect('/admin'); // admin paneline yönlendir
            } else {
                return redirect('/'); // normal kullanıcı menüye yönlendir
            }
        }

        // giriş başarısız → geri dön hata ver
        return back()->withErrors([
            'email' => 'Email veya şifre hatalı.',
        ]);
    }

    // Çıkış
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
