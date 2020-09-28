@extends('layouts.app')

@component('mail::message')

Afrigotel Tech

Hello There
,Thank you for signing up with Red Heart.

Your policy document will be emailed to you shortly.

For Further Details Please don't hesitate to contact us on the following contact Details

<br>
Phone: +27 11 020 8200
<br>
Emil: info@redheart.afrigoteltech.co.za
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
