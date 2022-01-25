<?php

namespace Modules\User\Entities;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory,Notifiable, HasRoles, SoftDeletes;

    protected $guard_name = 'dashboard';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    

    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->orderBy('created_at', 'desc');
    }

    /**
     * Get the entity's read notifications.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function readNotifications()
    {
        return $this->notifications()->read();
    }

    /**
     * Get the entity's unread notifications.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function unreadNotifications()
    {
        return $this->notifications()->unread();
    }


           
    public function notifications_messages()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->where('type','Modules\ContactUs\Notifications\SendMessage')->orderBy('created_at', 'desc');
    }


    public function unreadNotifications_message()
    {
        return $this->notifications()->where('type','Modules\ContactUs\Notifications\SendMessage')->unread();
    }


    // orders notification
    public function notifications_orders()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->where('type','Modules\Customer\Notifications\SendOrder')->orderBy('created_at', 'desc');
    }


    public function unreadNotifications_orders()
    {
        return $this->notifications()->where('type','Modules\Customer\Notifications\SendOrder')->unread();
    }



    // orders notification

    public function notifications_reinscription()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')->where('type','Modules\Customer\Notifications\SendReinscription')->orderBy('created_at', 'desc');
    }


    public function unreadNotifications_reinscription()
    {
        return $this->notifications()->where('type','Modules\Customer\Notifications\SendReinscription')->unread();
    }

    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\UserFactory::new();
    }
}
