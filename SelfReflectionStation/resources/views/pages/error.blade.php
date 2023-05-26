<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$key}}</title>
</head>
<body>
    <h1>This is an Error, You fucked UP</h1>
    <br>
    <h2>{{$errorMSG}}</h2>
    <script>
        setTimeout(function () {
            window.location.href = "{{$key}}";
        }, 5000); // Convert seconds to milliseconds
    </script>
</body>
</html>