<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;

class CustomResponseController extends Controller
{
    public function index(Request $request, Donate $donate) {

        // parse xml
        if(!$request->id && $donate->where('id', $request->id)->count() != 1) {
            return [
                'status' => '200',
                'success' => false,
                'message' => 'Bad request'
            ];
        }
        $info = $donate->where('id', $request->id)->first();
        if($info->hasShow == 0) {
            Donate::where('id', $request->id)->update([
                'hasShow' => 1
            ]);
            if($info->verf == 'APPROVED') {
                return [
                    'status' => '200',
                    'success' => true,
                    'data' => $info
                ];
            } else {
                return [
                    'status' => '200',
                    'success' => false,
                    'message' => $info->description ?? 'There was an error connecting to the bank'
                ];
            }
        } else {
            return [
                'status' => '201'
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
        return redirect()->to('https://cancerfund.mn/donate-now?id='.$array["ShopOrderId"]);
    }
    public function paymentreject(Request $request, Donate $donate) {
        $new = simplexml_load_string($request->xmlmsg);
        $con = json_encode($new);
        $newArr = json_decode($con, true);
        echo $newArr;
        if($donate->where('id', $newArr['ShopOrderId'])->count() != 1) {
            return redirect()->to('https://cancerfund.mn/donate-now');
        }
        $donate->where('id', $newArr['ShopOrderId'])->update([
            'verf' => $newArr['OrderStatus'],
            'description' => $newArr['ResponseDescription'],
            'value' => $newArr['PurchaseAmountScr'],
            'tranId' => $newArr['TranId'],
            'card_number' => $newArr['PAN'],
            'cardHolderName' => $newArr['CardHolderName'],
            'brand' => $newArr['Brand'],
            'sessionId' => $newArr['SessionId'],
            'lang' => $newArr['Language'],
            'responseCode' => $newArr['ResponseCode'],
        ]);
        return redirect()->to('https://cancerfund.mn/donate-now?id='.$newArr['ShopOrderId']);
    }
}
