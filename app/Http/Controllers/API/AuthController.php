<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    public function regis(Request $request)
    {
        $user = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'telp'      => $request->telp,
            'password'      => Hash::make($request->password),
        ]);
        // Make token
        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'status'        => 1,
            'message'       => 'Success',
            'user'          => $user,
            'meta'          => [
                'token'     => $token
            ]
        ], Response::HTTP_OK);
    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('token')->plainTextToken;
                return response([
                    'status'        => 1,
                    'message'       => 'Successfully logged in!',
                    'user'          => $user,
                    'token'         => [
                        'token'     => $token
                    ]
                ], Response::HTTP_OK);
            } else {
                return response([
                    'message'       => 'Wrong password!'
                ], Response::HTTP_UNAUTHORIZED);
            }
        } else {
            return response([
                'message'           => 'User not found!'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message'               => 'Successfully logged out!'
        ], Response::HTTP_OK);
    }
}
