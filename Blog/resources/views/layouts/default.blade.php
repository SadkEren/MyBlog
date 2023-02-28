<!DOCTYPE html>
<html lang="en">
<head>

     @include('includes.head')   
     
</head>
<body>

    @include('includes.header')  

    @yield('header') <!-- I know ! -->

    @yield('content') 

    @yield('ckeditor')
    
    @include('includes.footer')   
</body>
</html>
