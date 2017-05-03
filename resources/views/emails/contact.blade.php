@component('mail::message')
# {{ $senderName }} stuurde u een bericht via de website:

@component("mail::panel")
{{ $message }}
@endcomponent

-----

{{ $senderName }} - {{ $senderMail }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
