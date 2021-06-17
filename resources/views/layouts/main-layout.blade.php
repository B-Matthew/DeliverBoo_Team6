<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">   
     <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>deliveBoo</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div id="app">
        @include('components.header')
        @yield('content')
        @include('components.footer')   
    </div>
</body>
</html>      

