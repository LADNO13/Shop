<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    protected $table = 'users';
    protected $guarded = false;

    static function getGenders()
    {
        return [
            self::GENDER_MALE => 'Мужской',
            self::GENDER_FEMALE => 'Женский',
        ];
    }

    public function getGenderTitleAttribute()
    {
        return self::getGenders()[$this->gender];
    }


    protected $fillable = [

        'name',
        'surname',
        'email',
        'password',
        'patronymic',
        'age',
        'gender',
        'address'

    ];

    /**
     * Атрибуты, которые должны быть скрыты при сериализации.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Атрибуты, которые должны быть приведены к собственным типам.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
