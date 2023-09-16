<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レンタルサイクル案内</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ Storage::url('images/infos/pexels-luizph-2829532.jpg') }}');
            background-size: cover;
            /* 画像を画面いっぱいに表示 */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            /* 画像を中央に配置 */
            color: #fff;
            /* テキストの色を白に設定 */
            font-family: Arial, sans-serif;
            /* フォント指定 */
        }

        /* マップコンテナスタイル */
        .map-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%;
            /* アスペクト比を維持するために設定 */
        }

        /* マップスタイル */
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="text-center py-12">
        <h1 class="text-4xl font-semibold">レンタルサイクルサービス</h1>
        <p class="text-lg mt-4">平泉町内を自由自在に回って快適に楽しもう！</p>
    </header>

    <section class="bg-black bg-opacity-70 text-white py-8 px-4 md:px-24 mb-4 rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">レンタル案内</h2>
        <p class="mb-4">料金:</p>
        <ul class="list-disc list-inside ml-4">
            <li>一般サイクル: 4時間 500円、1時間増すごとに 200円、1日 900円</li>
            <li>電動サイクル: 4時間 600円、1時間増すごとに 200円、1日 1,200円</li>
        </ul>
        <p class="mt-4">営業時間: 9:00～16:00 (4月1日～11月末の営業)</p>
        <p class="mt-4">住所: 〒029-4102 岩手県西磐井郡平泉町平泉駅構内 TEL: 0191-46-5086</p>
        <p class="mt-4">TEL: 0191-46-5086</p>
    </section>

    <section class="bg-black bg-opacity-70 text-white py-8 px-4 md:px-24 mb-4 rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">スマホで簡単に受付</h2>
        <p class="mb-4">当サービスでは待ち時間も少なく、快適なサイクリングをお楽しみいただけます。</p>
        <p class="mb-4">以下のフォームに必要事項を入力して、自転車のレンタルを申し込んでください。</p>
        <p class="mb-4">この受付は当日のみ有効です。</p>
        <form action="/apply" method="post">
        @csrf
            <input type="submit" value="受付する"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </section>

    <section class="bg-black bg-opacity-70 text-white py-8 px-4 md:px-24 mb-4 rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">地図</h2>
        <!-- Google マップの埋め込みコード -->
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25154.015377055465!2d141.11816819999998!3d38.911068749999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNODCsDA3JzIyLjEiTiAxNDEMNDM0LjMiVw!5e0!3m2!1sen!2sus!4v1613661576510!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</body>

</html>
