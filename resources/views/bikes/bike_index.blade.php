<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レンタルバイク一覧</title>
</head>
<body>
    <h1>レンタルバイク 一覧</h1>
@foreach ($bikes as $bike )
    <p>{{ $bike->type }}<!--{{ $bike->status }}--> </p>
    
@endforeach

</body>
</html>
