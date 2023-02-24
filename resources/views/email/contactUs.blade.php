<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data['subject']  }}</title>
</head>
<body>

<p>Hi Admin, {{$data['name']}} with email: <a href="mailto:{{$data['email']}}">{{$data['email']}}</a> just left you a message </p>
<p>{{$data['name']}} wants to talk to you about {{$data['subject']}}, below is the content of the message</p>
<p>{{$data['message']}}</p>


<br>
<p>Thank You.</p>
</body>
</html>
