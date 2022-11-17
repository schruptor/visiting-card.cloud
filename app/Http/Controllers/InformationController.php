<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;

class InformationController extends Controller
{
    public function index()
    {

    }

    public function create(Factory $view, Request $request): View
    {
        return $view->make('information.create');
    }

    public function store(Request $request)
    {
        $card = Card::findOrFail($request->get('card'));

        Information::create([
            'profile_id' => $card->cardable->id,
            'type' => $request->get('type'),
            'value' => $request->get('value'),
            'color' => $request->get('color'),
            'order' => $card->cardable->information->isNotEmpty() ? $card->cardable->information->last()->order + 1 : 1
        ]);

        return redirect()->route('cards.show', ['card' => $card])->banner('Infomation successful created.');
    }

    public function show(Information $information)
    {
    }

    public function edit(Information $information)
    {
    }

    public function update(Request $request, Information $information)
    {
    }

    public function destroy(Information $information)
    {
    }
}
