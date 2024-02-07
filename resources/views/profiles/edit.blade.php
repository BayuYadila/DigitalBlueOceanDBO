{{-- Layout Dashboard --}}
@extends('layouts.dashboard')

{{-- Yield container-bg2 --}}
@section('container-bg2')

{{-- Yield Tittle --}}
@section('title', 'Edit Info User')

  {{-- Dashboard Contents --}}
  @include('partials.panel.user_panel')
  @include('partials.profiles.edit')

@endsection