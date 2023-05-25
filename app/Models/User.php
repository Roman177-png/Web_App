<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

//use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'surname',
        'email',
        'password',
        'gender',
        'age',
        'phone_number',
        'role',
        'image',
        'experience',
        'speciality',
        'description'
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
    protected function role(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["client", "trainer", "receptionist" , "admin"][$value],
        );
    }
    public function userAvatar($request)
    {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        //dd($name);
        $destination = public_path('/images');
        $image->move($destination, $name);
        return $name;
    }
}
