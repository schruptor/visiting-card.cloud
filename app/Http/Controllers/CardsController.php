<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;

class CardsController extends Controller
{
    public function index()
    {

    }

    public function create(Factory $view): View
    {
        return $view->make('cards.create');
    }

    public function store(Request $request)
    {
        $class = (config('card.type.'.$request->get('type'))::create());

        $card = Card::create([
            'title' => $request->get('title'),
            'user_id' => $request->user()->id,
            'uuid' => Uuid::uuid4(),
            'cardable_type' => config('card.type.'.$request->get('type')),
            'cardable_id' => $class->id,
        ]);

        return redirect()->route('cards.show', ['card' => $card])->banner('Card successfully created.');
    }

    public function show(Factory $view, Card $card)
    {
        return $view->make('cards.show', ['card' => $card]);
    }

    public function edit(Card $card)
    {
    }

    public function update(Request $request, Card $card)
    {
    }

    public function destroy(Card $card)
    {
    }
}
