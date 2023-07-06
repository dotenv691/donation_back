<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;

class KhanbankController extends Controller
{
    public function req(Request $request, Donate $donate)
    {
        if (!$request->amount) {
            return response()->json([
                'status' => 401,
                'success' => false,
                'message' => 'Please include your amount.'
            ]);
        }
        $donate->type = '';
        $donate->value = $request->amount;
        $donate->card_number = '';
        $donate->exp = '';
        $donate->verf = '';
        $donate->name = '';
        $donate->save();

        $url = "https://acs2.khanbank.com/epg/rest/register.do";
        $language = 'en';
        $currency = '496';
        $actual_link = 'https://backend.cancerfund.mn/api/';
        $num = intval($request->amount ?? 1).'00';
        $data = array(
            'amount' => $num,
            'currency' => $currency,
            'language' => $language,
            'orderNumber' => $donate->id,
            'userName' => 'CANCERFUNDMN',
            'password' => 'Vh2s06ks6Z',
            'returnUrl' => $actual_link.'paymentapprove?qid=',
            'failUrl' => $actual_link.'paymentreject?qid=',
            'description' => 'DONATE. #' . $donate->id,
            'jsonParams' => '{"orderNumber":' . $donate->id . '}'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $responsearr = explode(',', $response);
        $replace_string = array('"formUrl":"','"}');

        $replace_string = array('"orderId":"','"');
        $cookie_value = str_replace($replace_string, '',$responsearr[1]);

        setcookie('orderId', $cookie_value, time() + (1200), "/");

        return response()->json([
            'status' => 200,
            'success' => true,
            'message' => 'Connecting successfully.',
            'data' => $response,
        ]);
    }

}
