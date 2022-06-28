<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Exceptions\LoginException;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Exceptions\RegisterException;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated->message)) {
            return response()->json($validated, Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        try {
            $user = User::create([
                'mobile' => request('mobile'),
            ]);

            if ($user instanceof User) {
                return response()->json(["msg" => "ثبت نام شما با موفقیت انجام شد."], Response::HTTP_CREATED);
            }
            return response()->json(["msg" => "خطایی رخ داده است. لطفا مجددا تلاش نمائید."], Response::HTTP_INTERNAL_SERVER_ERROR);

        } catch (RegisterException $e) {
            throw new RegisterException('An error occurred while user register process.');
        }
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated->message)) {
            return response()->json($validated, Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        try {
            $user = User::firstOrCreate(
                ['mobile' => $request->mobile],
            );

            if ($user && $token = JWTAuth::fromUser($user)) {
                return $this->respondWithToken($token);
            }


            return response()->json(["msg" => "شما قبلا با این شماره همراه ثبت نام نکرده اید."], Response::HTTP_INTERNAL_SERVER_ERROR);

        } catch (LoginException $e) {
            throw new LoginException('An error occurred while user login process.');
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }
}
