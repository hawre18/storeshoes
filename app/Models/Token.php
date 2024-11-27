<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Ipe\Sdk\Facades\SmsIr;
use Mockery\Exception;

class Token extends Model
{
    const EXPIRATION_TIME = 15; // minutes
    protected $fillable = [
        'code',
        'user_id',
        'used'
    ];
    public function __construct(array $attributes = [])
    {
        if (! isset($attributes['code'])) {

            $attributes['code'] = $this->generateCode();
        }
        parent::__construct($attributes);

    }
    public function generateCode($codeLength = 6)
    {
        $code = mt_rand(100000, 999999);
        return $code;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function isValid()
    {
        return ! $this->isUsed() && ! $this->isExpired();
    }
    public function isUsed()
    {
        return $this->used;
    }
    public function isExpired()
    {
        return $this->created_at->diffInMinutes(Carbon::now()) > static::EXPIRATION_TIME;
    }
    public function sendCode($phone)
    {
        if (! $this->user) {
            Session::flash('user_error','کاربری یافت نشد');
            return redirect('/login-phone');
        }
        if (! $this->code) {
            $this->code = $this->generateCode();
        }
        try {
            $mobile = $phone; // شماره موبایل گیرنده
            $templateId = 279756; // شناسه الگو
            $parameters = [
                [
                    "name" => "Code",
                    "value" =>$this->code
                ]
            ];
            $response = SmsIr::verifySend($mobile, $templateId, $parameters);
        }catch (Exception $er){
            return false;
        }
        return true;
    }
}
