<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/style.css')  }}" rel="stylesheet" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/view.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @yield('js')
    </body>
    <script>
        $(function() {
            get_data();
        });
    
        function get_data() {
            $.ajax({
                url: "/",
                dataType: "json",
                success: data => {
                    $("#comment-data")
                        .find(".comment-visible")
                        .remove();
                        
                    for (var i = 0; i < data.comments.length; i++) {
                        var html = `
                                    <div class="media comment-visible">
                                        <div class="media-body comment-body">
                                            <div class="row">
                                                <span class="comment-body-user" id="name">${data.comments[i].name}</span>
                                                <span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
                                            </div>
                                            <span class="comment-body-content" id="comment">${data.comments[i].comment}</span>
                                        </div>
                                    </div>
                                `;
                        $("#comment-data").append(html);
                    }
                },
                error: () => {
                    
                }
            });
        
            setTimeout("get_data()", 5000);
        }
    </script>
</html>