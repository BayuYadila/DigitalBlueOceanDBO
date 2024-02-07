{{-- Layout Dashboard --}}
@extends('layouts.dashboard')

{{-- Yield container-bg2 --}}
@section('container-bg2')

{{-- Yield Tittle --}}
@section('title', 'Review')

  {{-- Dashboard Contents --}}
  @include('partials.panel.user_panel')
  @include('partials.authorization.editor.review')

@endsection