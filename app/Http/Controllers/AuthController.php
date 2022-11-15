<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Visitor;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function visitor_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (Visitor::where('email', $request->email)->first()) {
            $request->session()->put('visitor', $request->input('email'));
            return view('visitor-crud');
        } else {
            return redirect('visitor/login')->with('message', 'O e-mail inserido não corresponde a nenhum cadastro.');
        }
    }
}