<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PhoneNumberRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdatePasswordRequest;
use App\Http\Responses\Error;
use App\Http\Responses\Success;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Notifications\Facades\Vonage;

class AuthController extends Controller
{
    //REGISTER
    public function register (RegisterRequest $request): Error|Success
    {
        try{
            $user = User::query()->create([
                'user_name' => $request->input('user_name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'phone_number' => $request->input('phone_number'),
                'is_admin' => $request->input('is_admin'),
                'is_introduced' => $request->input('is_introduced'),
            ]);

            $token = $user->createToken('Token')->plainTextToken;

            return new Success(
                'Register account successfully!',
                [
                    'token' => $token,
                    'type' => 'bearer',
                ],
                200,
            );
        }catch (Exception $e) {
            return new Error(
                'Register account failed!',
                $e,
                404
            );
        }
    }

    //LOGIN
    public function login (LoginRequest $request): Error|Success
    {
        try{
            $credentials = $request->only('email', 'password');
            $isCredentials = Auth::attempt($credentials);
            if (!$isCredentials) {
                return new Error(
                    'Unauthorized!',
                    'No data',
                    403
                );
            }
            $user = User::query()->where('email', $request->input('email'))
                                ->first();

            if (!Hash::check($request->input('password'), $user->password, [])) {
                return new Error(
                    'Wrong password!',
                    'No data',
                    400
                );
            }

            $token = $user->createToken('Token')->plainTextToken;

            return new Success(
                'Login account successfully!',
                ['token' => $token,'type' => 'Bearer'],
                200
            );
        }catch (Exception $e) {
            return new Error(
                'Login account failed!',
                $e,
                404
            );
        }
    }

    //LOGOUT
    public function logOut(): Error|Success
    {
        try{
            /** @var User $user */
            $user = Auth::user();
            $user->tokens();

            return new Success(
                'Logout account successfully!',
                ['No data!'],
                200
            );
        }catch (Exception $e) {
            return new Error(
                'Logout account failed!',
                $e,
                404
            );
        }
    }

    //SEND-LINK-RESET
    public function sendOTP (PhoneNumberRequest $request): Error|Success
    {
        try{
            $OTP = Str::random(5);
            $receiveNumber = $request->input('phone_number');

            //Check Exits phone number
            $existPhoneNumber = User::query()->where('phone_number', $receiveNumber)->first();
            if (!$existPhoneNumber){
                return new Error('Phone number does not exist!', 'No data!', 422);
            }

            //Update new password
            User::query()->Where('phone_number', $request->input('phone_number')) ->update(['password' => Hash::make($OTP)]);

            $basic  = new \Vonage\Client\Credentials\Basic(config('app.admin_key'), config('app.admin_secret'));
            $client = new \Vonage\Client($basic);
            $client->sms()->send(
                new \Vonage\SMS\Message\SMS($receiveNumber, config('app.admin_sms_number'), 'Test message using PHP client library')
            );

            return new Success('Please check your phone!', ['No data!'], 200);
        }catch (Exception $e) {
            return new Error('Send email to reset password failed!', $e, 404);
        }
    }

    //UPDATE-PASSWORD
    public function updatePassword (UpdatePasswordRequest $request): Error|Success
    {
        try{
            $newPassword = Hash::make($request->input('new_password'));
            $id = Auth::user()->id;

            User::query()->where('id',$id)->update([
                'password' => $newPassword
            ]);

            return new Success('Update password successfully!', ['No data!'], 200);
        }catch (Exception $e) {
            return new Error('Update password failed!', $e, 404);
        }
    }
}
