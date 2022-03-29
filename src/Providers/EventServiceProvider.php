<?php 
namespace Smiley\UserCrud\Providers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Smiley\UserCrud\Listeners\SendPasswordResetEmail;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        PasswordReset::class => [
            SendPasswordResetEmail::class, // send password changed notification mail
        ],
    ];

}