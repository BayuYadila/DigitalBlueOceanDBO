{{-- Layout Dashboard --}}
@extends('layouts.dashboard')

{{-- Yield container-bg2 --}}
@section('container-bg2')

{{-- Yield Tittle --}}
@section('title', 'Detail')

  {{-- Dashboard Contents --}}
  @include('partials.panel.user_panel')
  @include('partials.items.detail.detail')

@endsection