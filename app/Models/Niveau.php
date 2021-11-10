<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   LIBELE                = "libele";
    const   DELETED_AT            = "deleted_at";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        self::ID,
        self::LIBELE,
        self::DELETED_AT,
    ];
}
