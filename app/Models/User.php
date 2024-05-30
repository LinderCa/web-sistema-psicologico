<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Indicamos que se llene de forma masiva
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'names',
        'surnames',
        'email',
        'username',
        'password',
        'tipo_rol'
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

    /** CONSISTENCIA DE DATOS, en este caso definimos el password como un hashed
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected static function boot(){
        parent::boot();
        static::creating(function ($user){
            $user->tipo_rol='postulante';
        });
    }

    //Con esta funcion establece la encriptacion al password, y lo realiza de forma automatica
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
