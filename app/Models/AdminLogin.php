<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class AdminLogin extends Authenticatable
{
    use notifiable;
    protected $guard='admin';
    public $table = 'admins';
    protected $fillable = [
        'name', 'email', 'password','l_name','verify',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}
