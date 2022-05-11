<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Vue with CDN</title>



    <!--Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<body>

    <div id="app">
        <h1>Hello @{{ message }}</h1>
    </div>


    <!-- Vue CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.33/vue.cjs.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue.js!'
            }
        });
    </script>
</body>

</html>
