<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ipe\Sdk\Facades\SmsIr;
use Mockery\Exception;

class LoginController extends Controller
{
    public function loginPhone()
    {
        return view('index.user.v1.login');
    }
    public function doLoginPhone(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'phone' => 'required|exists:users',
        ]);
        $user = User::where('phone', $request->input('phone'))->first();
        $token = Token::create([
            'user_id' => $user->id
        ]);
        $rememberMe  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        if ($token->sendCode($request->input('phone'))) {
            session()->put("code_id", $token->id);
            session()->put("user_id", $user->id);
            session()->put("remember", $rememberMe);
            return redirect()->route('verify');
        }
        $token->delete();
        return redirect()->route('loginPhone')->withErrors([
            "Unable to send verification code"
        ]);
    }
    public function verify()
    {
        return view('index.user.v1.verify');
    }
    public function doVerify(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric'
        ]);
        if (!session()->has('code_id') || !session()->has('user_id'))
            redirect()->route('loginPhone');
        $token = Token::where('user_id', session()->get('user_id'))->find(session()->get('code_id'));
    if (!$token || empty($token->id))
        redirect()->route('loginPhone');
    if (!$token->isValid())
        redirect()->back()->withErrors('این کد مصرف شده است');
    if ($token->code !== $request->input('code'))
        redirect()->back()->withErrors('کد اشتباه است');
    $token->update([
        'used' => true
    ]);
    $user = User::find(session()->get('user_id'));
    $rememberMe = session()->get('remember');
    auth()->login($user, $rememberMe);
    return redirect()->route('index');
}
    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('index');
    }
}
