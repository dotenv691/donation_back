<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function paymentapprove(Request $request) {
        $xml_data = $request->xmlmsg;
        $xmlmsg = str_replace("\\\"","\"",$xml_data);
        $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        echo 'OrderID: '.$array['OrderID']."<br>";
        echo 'Version: '.$array['Version']."<br>";
        echo 'TransactionType: '.$array['TransactionType']."<br>";
        echo 'PAN: '.$array['PAN']."<br>";
        echo 'PurchaseAmount: '.$array['PurchaseAmount']."<br>";
        echo 'Currency: '.$array['Currency']."<br>";
        echo 'TranDateTime: '.$array['TranDateTime']."<br>";
        echo 'ResponseCode: '.$array['ResponseCode']."<br>";
        echo 'OrderStatus: '.$array['OrderStatus']."<br>";
        echo 'ApprovalCode: '.$array['ApprovalCode']."<br>";
        echo 'MerchantTranID: '.$array['MerchantTranID']."<br>";
        echo 'OrderDescription: '.$array['OrderDescription']."<br>";
        echo 'ApprovalCodeScr: '.$array['ApprovalCodeScr']."<br>";
        echo 'PurchaseAmountScr: '.$array['PurchaseAmountScr']."<br>";
        echo 'CurrencyScr: '.$array['CurrencyScr']."<br>";
        echo 'OrderStatusScr: '.$array['OrderStatusScr']."<br>";
        // echo 'ThreeDSVerificaion: '.$array['ThreeDSVerificaion']."<br>";
        echo 'ShopOrderId: '.$array['ShopOrderId']."<br>";
        echo 'SignatureValue: '.$array['SignatureValue']."<br>";
    }
    public function paymentreject(Request $request) {
        echo 'reject';
        echo '<pre>' . var_export($request, true) . '</pre>';
    }
}
