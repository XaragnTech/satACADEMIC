<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   LIBELE                = "libele";
    const   SEMESTRE              = "semestre";
    const   DELETED_AT            = "deleted_at";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        self::ID,
        self::LIBELE,
        self::SEMESTRE,
        self::DELETED_AT,
    ];
}
