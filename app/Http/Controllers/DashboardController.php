<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        $links = $user->links()
            ->orderBy('sort')
            ->get();
        return view('dashboard', compact('user', 'links'));
    }
}
