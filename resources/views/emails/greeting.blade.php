@component('mail::message')
# Hello {{ $username }}

Nice to have you with us!!

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::button', ['url' => 'https://simedicine.org'])
Simedicone.org
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
