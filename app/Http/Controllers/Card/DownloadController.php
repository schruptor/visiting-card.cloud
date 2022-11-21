<?php

namespace App\Http\Controllers\Card;

use App\Models\Card;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function __invoke(Request $request, string $uuid)
    {
        $card = Card::whereUuid($uuid)->firstOrFail();

        $vcard = new VCard();

        $vcard->addName($card->cardable->name, $card->cardable->prename, $card->cardable->notes);

        if ($card->cardable->company) {
            $vcard->addCompany($card->cardable->company);
        }

        foreach ($card->cardable->information as $information) {
            $vcard->addPhoneNumber($information->value, $information->type);
        }

        return Response::make(
            $vcard->getOutput(),
            200,
            $vcard->getHeaders(true)
        );
    }
}
