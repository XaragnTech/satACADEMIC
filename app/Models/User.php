<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    const   ID                    = "id";
    const   FIRST_NAME            = "first_name";
    const   LAST_NAME             = "last_name";
    const   EMAIL                 = "email";
    const   PHONE_NUMBER          = "phone_number";
    const   PASSWORD              = "password";
    const   PASSWORD_CONFIRMATION = "password_confirmation";
    const   REMEMBER_TOKEN        = "remember_token";
    const   API_TOKEN             = "api_token";
    const   ROLE                  = "role";
    const   CONFIRMED             = "confirmed";
    //const   EMAIL_CONFIRMED       = "email_confirmed";
    const   DELETED_AT            = "deleted_at";
    const   TITLE                 = "title";
    //
    const   FULL_NAME             = "full_name";
    const   AVATAR                = "avatar";
    const   ROLE_TEXT             = "role_text";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        self::FIRST_NAME, self::LAST_NAME, 
        self::EMAIL, self::PASSWORD, 
        self::PHONE_NUMBER,
        self::CONFIRMED,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
