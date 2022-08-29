@component('mail::message')

Click The Button To Reset Your Password

@component('mail::button', ['url' => $data['activation_url'],'color' => 'primary'])
Reset Password
@endcomponent

Thanks,<br>
@endcomponent
