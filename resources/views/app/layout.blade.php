<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>My Blog Site</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
            <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
            <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

    </head>
    <body>
      <section class="section">

              @yield('content')

      </section>
    </body>
</html>
