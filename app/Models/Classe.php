<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   CLASSNAME             = "classname";
    const   LEVEL                 = "level";
    const   DELETED_AT            = "deleted_at";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        self::ID,
        self::CLASSNAME,
        self::LEVEL,
        self::DELETED_AT,
    ];


    public function levels(){
        return $this->belongsTo(Niveau::class,Classe::LEVEL);
    }
}
