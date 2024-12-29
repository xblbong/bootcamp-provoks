<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modernize TailwindCSS HTML Admin Template</title>
    @include('layouts.partials.link')
    @vite('resources/css/app.css')
</head>

<body class=" bg-white">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex">
            @include('layouts.partials.sidebar')
            <div class=" w-full page-wrapper overflow-hidden">

                <!--  Header End -->
                @include('layouts.partials.header')
                <!-- Main Content -->
                @yield('content')
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>
    @include('layouts.partials.script')
</body>

</html>
