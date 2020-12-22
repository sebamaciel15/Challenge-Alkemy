<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;
    
    protected $table= 'alkemy_user';
    protected $primaryKey= 'ID';

    protected $fillable= [
        'name', 'last_name', 'age', 'email', 'password'
    ];    
}
