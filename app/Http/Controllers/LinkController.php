<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        $data = $request->validated();

        if ($file = $request->poster) {
            $data['poster'] = $file->store('posters');
        }

        $user = auth()->user();

        $data['sort'] = $user->links()->count() + 1;

        $request->user()->links()->create($data);

        return redirect()->route('dashboard')->with('message', 'Link criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $data = $request->validated();

        if ($file = $request->poster) {
            $data['poster'] = $file->store('posters');
        }

        $link->update($data);

        return redirect()->route('dashboard')->with('message', 'Link atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->route('dashboard')->with('message', 'Link excluído com sucesso!');
    }
}
