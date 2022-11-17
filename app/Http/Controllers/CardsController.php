<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Cards\StoreRequest;

class CardsController extends Controller
{
    public function index(Factory $view, Request $request): View
    {
        return $view->make('cards.index', ['cards' => Card::whereUserId($request->user()->id)->get()]);
    }

    public function create(Factory $view): View
    {

        return $view->make('cards.create');
    }

    public function store(StoreRequest $request)
    {
        $class = (config('card.type.'.$request->get('type'))::create([
            'prename' => $request->get('prename'),
            'name' => $request->get('name'),
            'company' => $request->get('company'),
        ]));

        $card = Card::create([
            'title' => $request->get('title'),
            'user_id' => $request->user()->id,
            'uuid' => Uuid::uuid4(),
            'cardable_type' => config('card.type.'.$request->get('type')),
            'cardable_id' => $class->id,
            'card_id' => null,
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
        $card->update([
            'title' => $request->get('title'),
            'cardable_type' => config('card.type.'.$request->get('type')),
        ]);

        return redirect()->route('cards.show', ['card' => $card])->banner('Card successfully edited.');
    }

    public function destroy(Card $card)
    {
    }
}
