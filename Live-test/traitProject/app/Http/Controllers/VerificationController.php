<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class VerificationController extends Controller
{

    public function generateVerificationCode(string $email)
    {
        $user = new User();
        $user->email = $email;
        $verificationCode = $user->generateVerificationCode();

        return $verificationCode;
    }

}
