<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
</head>
<body>
    
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    {{-- Method One --}}
    {{-- <?php echo $slot ?> --}}
    {{-- Method two --}}
    {{$slot}}
</body>
</html>