@extends('layouts.app')

@component('mail::message')

Afrigotel Tech

Hello There
{{$school->contact}}, Thank you for registering {{$school->name}} for Pocket Cash.

Our Team will contact you shortly with more information.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
