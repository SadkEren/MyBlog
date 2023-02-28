<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.head2')

</head>

<body id="page-top">

    @include('includes.sidebar')
    @include('includes.header2')

    @yield('content')
    
    @yield('ckeditor2')

    @include('includes.footer2')
    
</body>

</html>