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
    <p>{{ $customer->name_kana}}</p>
    <p>利用台数{{ $customer->unit_count }}</p>
    <p>利用開始時間{{ $customer->start_time }}</p>
    <p>〒{{ $customer->post_code }}{{ $customer->address_1 }}{{ $customer->address_2 }}{{ $customer->address_3 }}</p>
    <p>電話番号:{{ $customer->tel_number }}</p>
    <p>{{ $customer->email }}</p>
</body>

</html>
