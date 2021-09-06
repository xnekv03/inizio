<?php

namespace App\Http\Controllers;

use App\Models\Ares;
use Defr\Ares as AresService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AresController extends Controller
{
    public function fetch(Request $request)
    {
        $validated = $request->validate([
            'ico' => 'required|numeric|digits_between:6,8',
        ]);

        $ares = new AresService();


        try {
            $record = $ares->findByIdentificationNumber($validated[ 'ico' ]);
        } catch (\Exception $e) {
            $message = $e->getMessage().' ico: '.$validated[ 'ico' ];
            Log::warning($message);
            return response()->json([
                'message' => $message,
            ], 500);
        }

        $street = $record->getStreet().' '.$record->getStreetHouseNumber().'/'.$record->getStreetOrientationNumber();

        $data = [
            'name'   => $record->companyName,
            'street' => $street,
            'town'   => $record->getTown(),
            'zip'    => $record->getZip(),
        ];

        $exists = Ares::whereIco($validated[ 'ico' ])->exists();
        if ($exists) {
            Ares::whereIco($validated[ 'ico' ])->update($data);
        } else {
            $data[ 'ico' ] = $validated[ 'ico' ];
            Ares::create($data);
        }
        $data = [
            'ares' => Ares::whereIco($record->getCompanyId())->first(['name', 'street', 'town', 'zip', 'ico', 'id']),
            'exists' => $exists,
        ];
        return response()->json($data);
    }

    public function detail(Ares $ares)
    {
        return view('detail')->with(['record'=>$ares]);
    }
}