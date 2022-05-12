<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Vue with CDN</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!--Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


</head>

<body>

    {{-- <div id="app">

        <input v-model="text" placeholder="Type here">
        <p>@{{ text }}</p>
        <p>@{{ count }}</p>

        <button @click="count++">Click Me</button>
        <button v-on:click="say">Say what</button>

    </div> --}}


    <!-- Vue CDN -->
    {{-- <script src="https://unpkg.com/vue@3"></script> --}}
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}


    <script>
        import {
            createApp
        } from 'vue'

        createApp({
            data() {
                return {
                    message: "Iqbal Hossen",
                    count: 0,
                    text: ''
                }
            }
        }).mount('#app')
    </script>

    <div id="app">
        <h1>Hello World! @{{ message }}</h1>
    </div>


    {{-- <script>
        import {
            createApp
        } from 'vue'

        const app = createApp({
            data() {
                return {
                    message: "Iqbal Hossen",
                    count: 0,
                    text: ''
                }
            }
        })

        app.mount('#app')
    </script> --}}

</body>

</html>
