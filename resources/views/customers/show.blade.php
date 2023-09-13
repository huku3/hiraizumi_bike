<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>受付 詳細</title>
</head>

<body>
    <a href="/">戻る</a>
    <h1>{{ $customer->name }}</h1>
    <p>{!! nl2br(e($customer->name_kana)) !!}</p>
</body>

</html>
