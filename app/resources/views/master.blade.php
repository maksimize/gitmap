<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Git Map</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css">

    <style type="text/css">


        .main.container {
            margin-top: 2em;
        }

        .main.menu {
            margin-top: 4em;
            border-radius: 0;
            border: none;
            box-shadow: none;
            transition: box-shadow 0.5s ease,
            padding 0.5s ease;
        }

        .main.menu .item img.logo {
            margin-right: 1.5em;
        }

        .overlay .menu {
            position: relative;
            left: 0;
            transition: left 0.5s ease;
        }

        .main.menu.fixed {
            background-color: #FFFFFF;
            border: 1px solid #DDD;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }
        .overlay.fixed .menu {
            left: 800px;
        }

    </style>

</head>
<body>
<div class="ui main container">
    <h1 class="ui header">Git Map</h1>
</div>


@include('menu')

<div class="ui container">
    @yield('page')
</div>

<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>
<script>
    $(document)
        .ready(function () {

            // fix main menu to page on passing
            $('.main.menu').visibility({
                type: 'fixed'
            });
            $('.overlay').visibility({
                type: 'fixed',
                offset: 80
            });

            // show dropdown on hover
            $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
            });
        })
    ;
</script>
</body>
</html>
