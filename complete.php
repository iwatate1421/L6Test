<?php

    if (array_key_exists('company', $_POST)) {
        $company = $_POST['company'];
    }

    if (array_key_exists('name', $_POST)) {
        $name = $_POST['name'];
    }

    if (array_key_exists('mail', $_POST)) {
        $mail = $_POST['mail'];
    }

    if (array_key_exists('tel', $_POST)) {
        $tel = $_POST['tel'];
        
        
    }

    if (array_key_exists('content', $_POST)) {
        $content = $_POST['content'];
    }

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>送信完了 | サンプル株式会社</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>

</head>

<body>
    <header>
        <nav class="navbar bg-base-200">
            <div class="flex-1">
                <!-- ボタンの背景を透明にする指定を追加 -->
                <a href="#" class="btn btn-ghost normal-case hover:bg-transparent">サンプル株式会社</a>

                <!-- メニューについて、以下の2つの指定を追加 -->
                <!-- (1)通常は表示しない -->
                <!-- (2)768px以上の画面幅のときにメニューを表示する -->
                <ul class="menu menu-horizontal p-0 hidden sm:inline-flex">
                    <li><a href="#">会社情報</a></li>
                    <li><a href="#">ニュース</a></li>
                    <li><a href="#">採用情報</a></li>
                    <!-- お問い合わせページを表示していることをわかりやすくする設定を追加 -->
                    <li><a href="#" class="active">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <button class="btn btn-ghost sm:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#">会社情報</a></li>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">採用情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="m-4">
        <h1 class="text-4xl">送信完了</h1>
        <div class="my-4">
            <p>ありがとうございました。送信を受け付けました。</p>
            <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
        </div>
        <p>送信内容</p>
        
        <table class="table w-full">
            <tbody>
                <tr>
                    <th class="text-left">会社名</th>
                    <td class="text-left"><?php print htmlspecialchars( $company , ENT_QUOTES, 'UTF-8') . PHP_EOL; ?> </td>
                </tr>
                <tr>
                    <th class="text-left">名前</th>
                    <td class="text-left"><?php print htmlspecialchars( $name , ENT_QUOTES, 'UTF-8') . PHP_EOL; ?> </td>
                </tr>
                <tr>
                    <th class="text-left">メール</th>
                    <td class="text-left"><?php print htmlspecialchars( $mail , ENT_QUOTES, 'UTF-8') . PHP_EOL; ?> </td>
                </tr>
                <tr>
                    <th class="text-left">電話番号</th>
                    <td class="text-left"><?php print htmlspecialchars( $tel , ENT_QUOTES, 'UTF-8') . PHP_EOL; ?> </td>
                </tr>
                <tr>
                    <th class="text-left">内容</th>
                    <td class="text-left"><?php print nl2br(htmlspecialchars( $content , ENT_QUOTES, 'UTF-8')) . PHP_EOL; ?> </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center m-4">
            <!-- 「戻る」ボタンを紫色にする設定を追加 -->
            <a href="contact.php" class="btn normal-case bg-blue-600 hover:bg-blue-900 text-white">戻る</a>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2024 SAMPLE Inc.
    </footer>
</body>

</html>