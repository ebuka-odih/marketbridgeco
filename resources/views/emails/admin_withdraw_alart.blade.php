@component('mail::message')
# Hello Admin

A withdrawal request from


<p>Name: {{ optional($data['user'])->fullname() }}.</p>
<br>
<p>Amount: {{ $data['withdraw']->amount }}</p>

<br>
<p>Visit your admin dashboard for more details</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
