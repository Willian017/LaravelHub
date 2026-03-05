<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login', ['title' => 'Login']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        //$validated = $request->validated();
        //if(Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']]))

        if(Auth::attempt($request->safe()->only(['email','password']))){
            $request->session()->regenerate();

            return back()->with('login_success','logado com sucesso');
            //return redirect()->intended('dashboard');
        }

        return back()->with([
            'error' => 'The provided credentials do not match out records'
        ])->onlyInput('email');

        // dd(collect($request->validated()) -> only(['email'])->toArray());
        // dd(collect($request->safe()) -> only(['email'])->toArray());

        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:3',
        //     'password_confirmation' => 'same:password'
        // ],
        // [
        //     'email.required' => 'O campo email é obrigatório',
        //     'email.email' => 'O campo email tem que ser obrigatóriamente um email',
        //     'password.required' => 'O campo password é obrigatório',
        //     'password.min' => 'O campo password tem que conter no mínimo :min caracteres',
        //     'password_confirmation.same' => 'O campo de confirmação deve ser igual a senha'
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.index');
    }
}
