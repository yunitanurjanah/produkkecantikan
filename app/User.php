<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function detailUser($idUser)
    {
    	return User::findOrFail($idUser);
    }

    public static function addEditUser($idUser, $namaUser, $emailUser)
    {
    	$user = User::where("id",$idUser)->first();

    	if ($user == null) {
    		$user = new User();
    	}
    	
    	$user->name	    = $namaUser;
        $user->email	= $emailUser;
    	$user->save();

    	return $user;
    }

    public function deleteUser($idUser)
    {
        $user = User::findOrFail($idUser);                                
        $user->delete();

        return $idUser;

    }
}
