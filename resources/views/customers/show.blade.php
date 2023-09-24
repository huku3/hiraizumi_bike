<!DOCTYPE html>
<html lang="ja">
<head>
    <x-flash-message :message="session('notice')" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>受付 詳細</title>
    <!-- Tailwind CSS リンクを追加 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <a href="/" class="text-blue-600 hover:underline">戻る</a>

    <h1 class="text-3xl font-semibold mt-4">{{ $customer->name }}さん</h1>
    <p>{{ $customer->name_kana }}</p>
    <p>利用台数: {{ $customer->unit_count }}</p>
    <p>希望の利用開始時間: {{ $customer->start_time }}</p>
    <p>住所:〒{{ $customer->post_code }}{{ $customer->address_1 }}{{ $customer->address_2 }}{{ $customer->address_3 }}</p>
    <p>電話番号: {{ $customer->tel_number }}</p>
    <p>メールアドレス:{{ $customer->email }}</p>

    <form action="{{ route('customers.edit', $customer) }}">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">編集する</button>
    </form>

    <form action="{{ route('customers.destroy', $customer) }}" method="post" onsubmit="return confirm('削除しますか？')">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">削除</button>
    </form>

    <form action="{{ route('customers.rentals.create', $customer) }}">
        @csrf
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">予約する</button>
    </form>
</body>
</html>
