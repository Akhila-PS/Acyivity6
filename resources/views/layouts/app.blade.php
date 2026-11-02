<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .success { 
            background: #d4edda; 
            color: #155724; 
            padding: 12px; 
            margin-bottom: 20px; 
            border-radius: 5px; 
            border: 1px solid #c3e6cb;
        }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        a { text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

    @if(session('status'))
    <div class="success" style="background:#d4edda; padding:15px; margin:20px 0; border:1px solid green;">
        success: {{ session('status') }}
    </div>
    @endif

    @yield('content')

</body>
</html>