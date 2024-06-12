<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>{{__('home.page')}}</h1>

    <ul>
        <li>{{__('home.home')}}</li>
        <li>{{__('home.about')}}</li>
        <li>{{__('home.contact')}}</li>
    </ul>

    <hr>

    <h2>{{__('home.welcome_message', ['name'=>'david'])}}</h2>
</body>

</html>
