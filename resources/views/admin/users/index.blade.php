@extends('layouts.app')

@section('content')
    <h1>User Management</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Create User</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

   @livewire('admin.user-table')
@endsection
