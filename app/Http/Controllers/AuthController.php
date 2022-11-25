<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Teacher;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function teacher_store(Request $request)
    {
        $request->validate([
            'registration' => 'required|max_digits:5',
        ]);

        if (Teacher::where('registration', $request->registration)->first()) {
            $request->session()->put('teacher_registration', $request->input('registration'));
            return redirect('/teacher-avaliation/create');
        } else {
            return redirect('teacher/login')->with('message', 'A matrícula inserida não corresponde a nenhum cadastro.');
        }
    }
}