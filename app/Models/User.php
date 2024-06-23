<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use App\Notifications\CustomResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,CanResetPassword;

    public function sendPasswordResetNotification($token)
{
    $this->notify(new \App\Notifications\CustomResetPassword($token));
}

/*
public function verificationUrl($notifiable)
{
    $appUrl = config('app.frontend_url', config('app.url'));

    $url = URL::temporarySignedRoute(
        'verification.verify',
        Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
        ['id' => $notifiable->getKey()]
    );

    return str_replace(url('/api'), $appUrl, $url);
}

public function sendEmailVerificationNotification()
{
    if ($this->hasVerifiedEmail()) {
        return response()->json(['status' => 'success', 'message' => 'Email already verified.'], 200);
    }

    $this->notify(new Notifications\VerifyEmail);

    return response()->json(['status' => 'success', 'message' => 'Verification link sent.'], 200);
}



*/


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
