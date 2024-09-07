<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

</head>
<body>
    <div class="container">
        <div class="card">
            <h3 class="txt-warning">
                message From {{ $data['name'] }},{{ $data['email'] }}
            </h3>
            <p>
                {{ $data['message'] }}
            </p>
            <em>phone  :: {{ $data['phone'] }}</em>
        </div>
    </div>

<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
