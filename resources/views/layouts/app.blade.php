<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .success { background: #d4edda; padding: 12px; margin-bottom: 20px; border-radius: 5px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    @if(session('status'))
        <div class="success">{{ session('status') }}</div>
    @endif

    @yield('content')
</body>
</html>