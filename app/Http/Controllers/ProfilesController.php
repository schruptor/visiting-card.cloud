<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Profile $profile)
    {
    }

    public function edit(Profile $profile)
    {
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update([
            'prename' => $request->get('prename'),
            'name' => $request->get('name'),
            'company' => $request->get('company'),
        ]);

        return redirect()->route('cards.show', ['card' => $profile->card])->banner('Card successfully edited.');
    }

    public function destroy(Profile $profile)
    {
    }
}
