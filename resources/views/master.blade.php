<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body>

    @include('shared.navbar')

    @yield('content')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script>
        $(document).ready(function() {
    
        
        }); 
    </script>
</body>

</html>