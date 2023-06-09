<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'success'   => false,
                'message' => 'These credentials do not match our records.'
            ], 404);
        }

        $token = $user->createToken('ApiToken')->plainTextToken;

        $response = [
            'success'   => true,
            'user'      => $user,
            'token'     => $token
        ];

        return response($response, 200);
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        $id_user = request('id_user');

        $gettoken = DB::table('personal_access_tokens')->where('tokenable_id', $id_user)->delete();

        if ($gettoken) {
            auth()->logout();

            return response()->json([
                'success'    => true
            ], 200);
            
        } else {


            return response()->json([
                'success'    => false
            ], 500);
        }
    }
}
