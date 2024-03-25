<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Include any additional JavaScript libraries or scripts here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <main>
        <!-- Content section -->
        @yield('content')
    </main>
        @yield('js')
    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
    </footer>

</body>
</html>