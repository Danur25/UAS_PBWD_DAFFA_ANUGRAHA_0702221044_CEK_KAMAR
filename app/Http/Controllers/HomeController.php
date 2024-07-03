<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman pengaturan.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman kontak.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    public function signup()
    {
        return view('register');
    }
    /**
     * Menyimpan perubahan data pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Logika untuk memperbarui data pengguna
        // Misalnya:
        // $user = Auth::user();
        // $user->update($request->all());

        return redirect()->route('login')->with('success', 'Data updated successfully.');
    }

    /**
     * Menampilkan form untuk mengubah email.
     *
     * @return \Illuminate\Http\Response
     */
    public function showChangeEmailForm()
    {
        return view('change_email'); // Pastikan Anda memiliki view untuk mengubah email
    }

    /**
     * Mengubah email pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeEmail(Request $request)
    {
        $request->validate([
            'new_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        ]);

        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found.');
        }

        $user->email = $request->new_email;
        $user->save();

        return redirect()->route('home')->with('success', 'Email berhasil diubah.');
    }

    /**
     * Menampilkan form registrasi.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Menangani proses registrasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validation and registration logic here
    }
}
