<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password',
        'name',
        'surname',
        'email',
        'password',
        'remember_token',
        'phone',
        'job_title',
        'company_name',
        'company_url',
        'company_size',
        'street_name',
        'building_number',
        'postal_code',
        'city',
        'country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function confirmEmail()
    {
        $this->verified = true;
        $this->token = null;
        $this->save();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
