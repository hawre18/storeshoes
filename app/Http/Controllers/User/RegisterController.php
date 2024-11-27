<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class RegisterController extends Controller
{
    public function register()
    {
        return view('index.user.v1.register');
    }
    public function doRegister(Request $request)
    {
        try {
            $data = $request->all();
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'phone' => 'nullable|numeric',
            ]);
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            return redirect()->route('index');
        }catch (Exception $er){

        }

    }


}
