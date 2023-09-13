<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自転車レンタル</title>
    <!-- CSS スタイルシートをここにリンク -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>自転車レンタルサービス</h1>
        <p>快適な自転車で街を楽しもう！</p>
    </header>

    <section>
        <h2>レンタル案内</h2>
        <p>当サービスでは、多種多様な自転車を提供しており、快適なサイクリングをお楽しみいただけます。</p>
        <ul>
            <li>シティバイク</li>
            <li>マウンテンバイク</li>
            <li>電動アシストバイク</li>
            <!-- 他の自転車の種類を追加 -->
        </ul>
    </section>

    <section>
        <h2>レンタル申し込み</h2>
        <p>以下のフォームに必要事項を入力して、自転車のレンタルを申し込んでください。</p>
        <form action="submit.php" method="post">
            <label for="name">お名前：</label>
            <input type="text" id="name" name="name" required>

            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">電話番号：</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="bike">希望自転車：</label>
            <select id="bike" name="bike">
                <option value="city_bike">シティバイク</option>
                <option value="mountain_bike">マウンテンバイク</option>
                <option value="electric_bike">電動アシストバイク</option>
                <!-- 他の自転車の選択肢を追加 -->
            </select>

            <label for="rental_date">希望レンタル日：</label>
            <input type="date" id="rental_date" name="rental_date" required>

            <input type="submit" value="申し込む">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 自転車レンタルサービス</p>
    </footer>
</body>

</html>
