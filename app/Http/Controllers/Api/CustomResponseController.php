<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;

class CustomResponseController extends Controller
{
    public function index() {
        return redirect()->to('http://localhost:3000/donate-now?status=error');
    }
    public function get(Request $request) {
        // echo 'reqs ========> ';
        // echo '<pre>' . var_export($request->xmlmsg, true) . '</pre>';
// // echo $xmlmsg;   
        // $xml_data = $request->xmlmsg;
        // $xmlmsg = str_replace("\\\"","\"",$xml_data);
        // $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        // $json = json_encode($xml);
        // $array = json_decode($json,TRUE);
        // var_dump($array);

        $xmlmsg = $_POST;
        print_r($request);
    // $xmlmsg = str_replace("\\\"","\"",$xmlmsg);
    // $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
    // $json = json_encode($xml);
    // $array = json_decode($json,TRUE);
    
        // return redirect()->to('http://localhost:3000/donate-now?status=error');
    }

    public function paymentapprove(Request $request, Donate $donate) {

        // parse xml
        $xml_data = $request->xmlmsg;
        $xmlmsg = str_replace("\\\"","\"",$xml_data);
        $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);

        // update to server
        $donate->where('id', $array['ShopOrderId']);
        $donate->update([
            'type' => $array['MerchantTranID'],
            'value' => $array['PurchaseAmountScr'],
            'card_number' => $array['PAN'],
            'exp' => $array['ApprovalCodeScr'],
            'verf' => $array['OrderStatus'],
            'name' => $array['CurrencyScr'],
        ]);
        $info = $donate->first();

        echo $info;
    }
    public function paymentreject(Request $request) {
        echo 'reject';
        echo '<pre>' . var_export($request, true) . '</pre>';
    }
}
