<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->store('photos');
        }

        $request->user()->update($data);

        return redirect()->route('profile')->with('message', 'Profile atualizado com sucesso.');
    }
}
