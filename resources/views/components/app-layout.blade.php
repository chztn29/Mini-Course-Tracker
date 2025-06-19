@php
    $isAdmin = Auth::check() && Auth::user()->email === 'admin@example.com';
@endphp

@if ($isAdmin)
    @include('layouts.admin-layout')
@else
    @include('layouts.main-layout') {{-- or app-layout or sidebar-layout --}}
@endif
