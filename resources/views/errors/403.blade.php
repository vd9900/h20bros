@extends('errors::minimal')

@section('title', __('Pristinegreencleaning - Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
