@extends('layouts.app')

@component('mail::message')
# Afrigotel Tech

Hello There,
{{$invites->company}} has invited you to sign up or Red Heart.

<a href="https://test.afrigoteltech.co.za/confirm/{{$invites->id}}">Continue To Apply Here</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
