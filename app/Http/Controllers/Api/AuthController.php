<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request){
        $http = new \GuzzleHttp\Client([
            'base_uri' => config('app.url')
        ]);
         try {

            $response = $http->request('POST',config('services.passport.login_endpoint'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'bsWYs7mi7c1jcCpIbBoagKkjGSiDkwAfqqWnFzaM',
                    'username' => $request->username,
                    'password' => $request->password,
                ],
            ]);
            return json_decode((string) $response->getBody(), true);
        } catch(\GuzzleHttp\Exception\BadResponseException $e) {
            if($e->getCode() == 400){
                return response()->json('メールとパスワードを入力してください',$e->getCode());
            } else if($e->getCode()==401){
                return response()->json('認証キーが正しくありません。もう一度試してください。',$e->getCode());
            }
            
            return response()->json('サーバーエラー',$e->getCode());
        }   
    }

  
}
