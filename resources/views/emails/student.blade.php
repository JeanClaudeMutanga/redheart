@extends('layouts.app')

@component('mail::message')

Afrigotel Tech

Hello There
{{$user->name}}, Thank you for signing up with Red Heart.

Your policy document will be emailed to you shortly.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
