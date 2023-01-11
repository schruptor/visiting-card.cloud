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
        
        foreach($card->cardable->information->filter(function ($value, $key) {
            if (in_array($value->type, ['phone-private', 'whatsapp', 'phone-business', 'telegram'])) {
                return true;
            }

            return false;
        })->groupBy('value') as $information)  {
            $information = $information->first();
            switch ($information->type) {
                case 'phone-private':
                case 'whatsapp':
                    $vcard->addPhoneNumber($information->value, 'HOME');
                    break;
                case 'phone-business':
                    $vcard->addPhoneNumber($information->value, 'WORK');
                    break;
                case 'telegram':
                    $vcard->addURL('https://telegram.me/' . $information->value);
                    break;
            }
        }

        foreach ($card->cardable->information->filter(function ($value, $key) {
            if (! in_array($value->type, ['phone-private', 'whatsapp', 'phone-business', 'telegram'])) {
                return true;
            }

            return false;
        }) as $information) {
            switch ($information->type) {
                case 'companytitle':
                    $vcard->addJobtitle($information->value);
                    break;
                case 'email-private':
                    $vcard->addEmail($information->value, 'HOME');
                    break;
                case 'email-business':
                    $vcard->addEmail($information->value, 'WORK');
                    break;
                case 'birthday':
                    $vcard->addBirthday(Carbon::parse($information->value)->format('Y-m-d'));
                    break;
                case 'facebook':
                    $vcard->addURL('https://facebook.com/' . $information->value);
                    break;
                case 'instagram':
                    $vcard->addURL('https://instagram.com/' . $information->value);
                    break;
                case 'link':
                    $vcard->addURL('https://' . $information->value);
                    break;
                case 'linkedin':
                    $vcard->addURL('https://de.linkedin.com/in/' . $information->value);
                    break;
                case 'spotify':
                    $vcard->addURL('https://open.spotify.com/user/' . $information->value);
                    break;
                case 'twitch':
                    $vcard->addURL('https://twitch.tv/' . $information->value);
                    break;
                case 'xing':
                    $vcard->addURL('https://www.xing.com/profile/' . $information->value);
                    break;
                case 'youtube':
                    $vcard->addURL('https://www.youtube.com/channel/' . $information->value);
                    break;
            }
        }

        $vcard->addURL(config('app.url') . '/profile/' . $uuid);

        $vcard->addNote('You can update this V-Card at the URL above.');

        return Response::make(
            $vcard->getOutput(),
            200,
            $vcard->getHeaders(true)
        );
    }
}
