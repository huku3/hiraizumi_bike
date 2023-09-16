<!DOCTYPE html>
<html lang="ja">

<head>
    <x-flash-message :message="session('notice')" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>受付 詳細</title>
</head>

<body>
    <a href="/">戻る</a>

    <h1>{{ $customer->name }}</h1>
    <p>{{ $customer->name_kana }}</p>
    <p>利用台数{{ $customer->unit_count }}</p>
    <p>利用開始時間{{ $customer->start_time }}</p>
    <p>〒{{ $customer->post_code }}{{ $customer->address_1 }}{{ $customer->address_2 }}{{ $customer->address_3 }}</p>
    <p>電話番号:{{ $customer->tel_number }}</p>
    <p>{{ $customer->email }}</p>
    <form action="{{ route('customers.edit', $customer) }}">
        @csrf
        <input type="submit" value="編集する">
    </form>

    <form action="{{ route('customers.destroy', $customer) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false;}"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </form>
    <form action="{{ route('rentals.create') }}">
    
    </form>


</body>

</html>
