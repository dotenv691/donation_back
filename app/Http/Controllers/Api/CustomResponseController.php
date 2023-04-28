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
                'message' => 'There was an error connecting to the bank'
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
        $resp = simplexml_load_string($request->xmlmsg);
        // custom variables
        $id = 0;
        $merchant_tran_id = 0;
        $purchase_amount_str = "0.00";
        $pan = "NULL";
        $cart_number = "0.00";
        $approve_code_str = "0.00";
        $order_status = "000";
        $currency_str = "USD";

        if($resp->OrderDescription) $id = str_replace(" ", "", strtok($newArr['OrderDescription'], '(')) ?? 0;
        if($resp->MerchantTranID) $merchant_tran_id = $resp->MerchantTranID ?? 0;
        if($resp->PurchaseAmountScr) $purchase_amount_str = $resp->PurchaseAmountScr ?? "0.00";
        if($resp->ApprovalCodeScr) $approve_code_str = $resp->ApprovalCodeScr ?? "0.00";
        if($resp->OrderStatus) $order_status = $resp->OrderStatus ?? "000";
        if($resp->PAN) $pan = $resp->PAN ?? "NULL";
        if($resp->CurrencyScr) $currency_str = $resp->CurrencyScr ?? "USD";

        if($id > 0 && $id != null && $id != "") {
            // update to server
            $donate->where('id', $id)->update([
                'type' => $merchant_tran_id,
                'value' => $purchase_amount_str,
                'card_number' => $pan,
                'exp' => $approve_code_str,
                'verf' => $order_status,
                'name' => $currency_str,
            ]);
            return redirect()->to('https://cancerfund.mn/donate-now?id='.$id);
        } else {
            return redirect()->to('https://cancerfund.mn/donate-now');
        }
    }
    public function paymentreject(Request $request, Donate $donate) {
        if(!$request->xmlmsg) {
            return redirect()->to('https://cancerfund.mn/donate-now?id=0');
        } else {
            $resp = simplexml_load_string($request->xmlmsg);

            // custom variables
            $order_status = 0;
            $id = 0;
            $response_description = "NULL";
            $amount_str = "0.00";
            $tran_id = 1;
            $pan = "NULL";
            $card_holder_name = "NULL";
            $brand = "VISA";
            $session_id = "NULL";
            $language = "EN";
            $response_code = "000";

            if($resp->OrderStatus) $order_status = $resp->OrderStatus ?? 0;
            if($resp->OrderDescription) $id = str_replace(" ", "", strtok($resp->OrderDescription, '(')) ?? 0;
            if($resp->PurchaseAmountScr) $amount_str = $resp->PurchaseAmountScr ?? "0.00";
            if($resp->ResponseDescription) $response_description = $resp->ResponseDescription ?? "NULL";
            if($resp->TranId) $tran_id = $resp->TranId ?? 0;
            if($resp->PAN) $pan = $resp->PAN ?? "NULL";
            if($resp->CardHolderName) $card_holder_name = $resp->CardHolderName ?? "NULL";
            if($resp->Brand) $brand = $resp->Brand ?? "VISA";
            if($resp->SessionId) $session_id = $resp->SessionId ?? "NULL";
            if($resp->Language) $language = $resp->Language ?? "EN";
            if($resp->ResponseCode) $response_code = $resp->ResponseCode ?? "000";

            if($donate->where('id', $id)->count() != 1) {
                return redirect()->to('https://cancerfund.mn/donate-now');
            }
            $donate->where('id', $id)->update([
                'verf' => $order_status,
                'description' => $response_description,
                'value' => $amount_str,
                'tranId' => $tran_id,
                'card_number' => $pan,
                'cardHolderName' => $card_holder_name,
                'brand' => $brand,
                'sessionId' => $session_id,
                'lang' => $language,
                'responseCode' => $response_code,
            ]);
            return redirect()->to('https://cancerfund.mn/donate-now?id='.$id);
        }
    }
}
