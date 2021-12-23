<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\Registration\TwoStep\StoreRequest;
use App\Models\Country;

class RegisterSecondStepController extends Controller
{
    public function show()
    {
        $countries = Country::all();

        return view('auth.registration.register-step-2', compact('countries'));
    }

    public function store(StoreRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect()->route('home');
    }
}
