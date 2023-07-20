<?php

namespace App\Helper;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Mockery\Exception;

class JWTToken
{
    public static function CreateToken($userEmail)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel-token',
            'iat' => time(),
            'exp' => time() + 60*60,
            'userEmail' => $userEmail,
        ];
        return JWT::encode($payload, $key,'HS256');
    }
    public static function CreateTokenForSetPassword($userEmail)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel-token',
            'iat' => time(),
            'exp' => time() + 60*10,
            'userEmail' => $userEmail,
        ];
        return JWT::encode($payload, $key,'HS256');
    }

    public static function VerifyToken($token):string
    {
        try{
            $key = env('JWT_KEY');
            $decode = JWT::decode($token, new Key($key, 'HS256'));
            return $decode->userEmail;
        }
        catch (Exception $e){
            return "Unauthorized";
        }
    }
}
