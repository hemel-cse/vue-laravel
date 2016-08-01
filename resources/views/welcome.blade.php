<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/main.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <div class="content">






                {{--<template id="child-template">--}}
                    {{--<input v-model="msg">--}}
                    {{--<button @click="notify">Dispatch Event</button>--}}
                {{--</template>--}}

                {{--<!-- template for parent -->--}}
                {{--<div id="events-example">--}}
                    {{--<p>Messages: {{ messages | json }}</p>--}}
                    {{--<child></child>--}}
                {{--</div>--}}

            </div>
        </div>



        <!-- JavaScript -->
        <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>

    </body>
</html>
