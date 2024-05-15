<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--Datatable plugin CSS file -->
        <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 
    
        <!--jQuery library file -->
        <script type="text/javascript" 
            src="https://code.jquery.com/jquery-3.5.1.js"> 
        </script> 
    
        <!--Datatable plugin JS library file -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> 
        </script> 
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        
        <div id='main'></div>
        <script type="text/javascript" src="../functions"> 
        </script>

    </body>
</html>
