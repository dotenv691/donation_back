<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;

class CustomResponseController extends Controller
{
    public function index(Request $request, Donate $donate) {

        // parse xml
        if(!$request->id || $donate->where('id', $request->id)->count() != 1) {
            return [
                'status' => '200',
                'success' => false,
                'message' => 'Bad request'
            ];
        }
        $info = $donate->where('id', $request->id)->first();
        if($info->hasShow == 0 && $info->verf == 'APPROVED') {
            Donate::where('id', $request->id)->update([
                'hasShow' => 1
            ]);
            return [
                'status' => '200',
                'success' => true,
                'data' => $info
            ];
        } else {
            return [
                'status' => '200',
                'success' => false,
                'message' => 'There was an error connecting to the bank'
            ];
        }
    }

    public function paymentapprove(Request $request, Donate $donate) {

        // parse xml
        $xml_data = $request->xmlmsg;
        $xmlmsg = str_replace("\\\"","\"",$xml_data);
        $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);

        // update to server
        $donate->where('id', $array['ShopOrderId'])->update([
            'type' => $array['MerchantTranID'],
            'value' => $array['PurchaseAmountScr'],
            'card_number' => $array['PAN'],
            'exp' => $array['ApprovalCodeScr'],
            'verf' => $array['OrderStatus'],
            'name' => $array['CurrencyScr'],
        ]);
        return redirect()->to('http://localhost:3000/donate-now?id='.$array["ShopOrderId"]);
    }
    public function paymentreject(Request $request, Donate $donate) {
        // parse xml
        $xml_data = $request->xmlmsg;
        $xmlmsg = str_replace("\\\"","\"",$xml_data);
        $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        foreach($array as $arr) {
            echo $arr;
        }

        $donate->where('id', $array['ShopOrderId'])->update([
            'verf' => 'REJECTED',
        ]);
        echo 'error!';
        // return redirect()->to('http://localhost:3000/donate-now?id='.$array["ShopOrderId"]);
    }
}
