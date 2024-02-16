<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    // public function validateForPassportPasswordGrant($password)
    // {
    //     // Devuelve true para permitir la autenticación sin contraseña
    //     return true;
    // }


    public function generateToken()
    {
        $randomNumber = rand(200, 500);
        $tokenData = [
            'email' => $this->email,
            'login_time' => now()->format('Y-m-d H:i:s'),
            'random_number' => $randomNumber,
        ];
        $tokenString = implode('', $tokenData);
        $token = Hash::make($tokenString);
        
        return $token;
    }

   

}
