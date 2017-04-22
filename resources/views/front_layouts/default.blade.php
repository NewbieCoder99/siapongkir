<!DOCTYPE html>
<html lang="en">
    <head>
		@include('front_layouts.headers.head')
    </head>
    <body>
		@yield('content')
		@include('front_layouts.footers.footer')
		@include('front_layouts.footers.loadjs')
    </body>
</html>