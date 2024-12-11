<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('roles.index') }}">Role Management</a>
            <a class="navbar-brand" href="{{ route('statuses.index') }}">Statuses Management</a>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
