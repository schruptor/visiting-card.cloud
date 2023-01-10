<?php

namespace App\Http\Controllers\Card;

use Carbon\Carbon;
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
            if ($information->type === 'companytitle') {
                $vcard->addJobtitle($information->value);
            }

            if ($information->type === 'email-private') {
                $vcard->addEmail($information->value, 'Private');
            }

            if ($information->type === 'email-business') {
                $vcard->addEmail($information->value, 'Business');
            }

            if ($information->type === 'phone-private') {
                $vcard->addPhoneNumber($information->value, 'Private');
            }

            if ($information->type === 'phone-business') {
                $vcard->addPhoneNumber($information->value, 'Business');
            }

            if ($information->type === 'Birthday') {
                $vcard->addBirthday(Carbon::parse($information->value)->format('Y-m-d'));
            }
        }

        return Response::make(
            $vcard->getOutput(),
            200,
            $vcard->getHeaders(true)
        );
    }
}
