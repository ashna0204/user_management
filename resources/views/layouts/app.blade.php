<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            @auth
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                @if(auth()->user()->role == 'admin')
                    <a class="nav-link" href="{{ route('admin.users.index') }}">Manage Users</a>
                @endif
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link">Logout</button>
                </form>
            @else
                <a class="nav-link" href="{{ route('login') }}">Login</a>
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>
