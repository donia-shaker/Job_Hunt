@component('mail::message')
... Hi {{$data['name']}}
<br>
Wellcome To JobHunt
<br><br>
Click The Button To Activate Your Account
@component('mail::button', ['url' => $data['activation_url'], 'color' =>  'primary'])
Active Your Acount
@endcomponent

@endcomponent
