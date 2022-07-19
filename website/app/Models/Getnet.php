<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class Getnet extends Model
{
    use HasFactory;
    // public function getTokenAcesso() {
        
    //     $autorization = base64_encode(env('CLIENT_ID_GETNET').':'.env('CLIENT_SECRET_GETNET'));
    //     $response = new \GuzzleHttp\Client();
    //     $response->post(env('ULR_BASE_GETNET').'/auth/oauth/v2/token',[
    //         'headers' => ['Content-Type' => 'application/x-www-form-urlencoded',
    //                       'Authorization' => 'Basic '.$autorization],
    //                       'debug' => true]);
    //                       dd($response);
                        
    
    // }
}
   
