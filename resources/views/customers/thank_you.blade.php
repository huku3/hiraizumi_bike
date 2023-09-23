<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お申し込み完了</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">お申し込み完了</h1>
        <h2 class="text-2xl text-gray-700 mb-2">{{ $customer->name }}様、お申込みありがとうございます</h2>
        <p class="text-lg text-gray-600 mb-2">{{ $customer->start_time }}分でご利用開始ですね。</p>
        <p class="text-lg text-gray-600 mb-6">店舗スタッフにこちらの画面をご提示頂くとスムーズにご案内出来ますのでご協力お願い致します。</p>
        <p class="text-lg text-gray-600 mb-6">電動自転車のご利用が初めての場合は、以下のYouTube動画をご覧ください。</p>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/IYs7gRNKBVA?si=YmiGq6rSDPiWvV0r" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <p class="text-lg text-gray-600 mb-2">また、おすすめのサイクリングコース情報は<a
                href="https://hiraizumi.or.jp/course/touring/index.html" target="_blank"
                class="text-blue-500 hover:underline">こちら</a>からご確認いただけます。</p>
        <p class="text-lg text-gray-600">一般社団法人 平泉観光協会様のひらいずみナビへ遷移します。</p>
    </div>
</body>

<header>

</header>

</html>
