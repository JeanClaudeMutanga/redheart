@extends('layouts.app')

@component('mail::message')

Afrigotel Tech

New School has been registred, Find the details belows
 
 <br>
 
School Name: {{$school->name}}

School Ref No: {{$school->ref}}

Contact Person: {{$school->contact}}

Contact Number: {{$school->phone}}


Thanks,<br>
{{ config('app.name') }} Website!
@endcomponent
