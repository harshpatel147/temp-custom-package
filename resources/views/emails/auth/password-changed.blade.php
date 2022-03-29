@component('mail::message')
# Hello {{ $user->name }}!

The password for your {{ config('app.name') }} Account {{ $user->email }} was recently changed.

# Don't recognise this Activity?

@component('mail::button', ['url' => route('password.request')])
Reset your password
@endcomponent

Click above button or <a href="{{ route('password.request') }}">click here</a> for reset your password to protect your account. And please make sure you don't reuse your password for other apps and sites. Or <b>Please Contact to Us</b> at: <a href="mailto:info@microtechos.com">info@microtechos.com</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
