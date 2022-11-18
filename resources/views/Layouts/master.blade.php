<html>
<head>
    <title>Paw'some - @yield('title')</title>
    <link href=" {{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
