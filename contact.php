<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせ | サンプル株式会社</title>
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
                    <!-- 640px以上はハンバーガーメニューを非表示にする -->
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
        <h1 class="text-4xl mb-2">お問い合わせ</h1>

        <!-- 以下の2つの指定を追加 -->
        <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
        <!-- (2)768px以上の画面幅のとき、4個のカラムが並んだグリッドにする -->
        <div class="md:grid md:grid-cols-4 md:gap-2">
            <div class="col-span-1">
                    <!-- (1)電話に関するHeroiconsのアイコンを追加 -->
                    <!-- (2)このアイコンをインラインで表示するための指定を追加 -->
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                        <strong>
                            <span class="label-text">お電話：</span>
                        </strong>
                    </div>
            </div>
    
            <!-- 768px以上の画面幅のとき、3つ分のカラム幅で表示する指定を追加 -->
            <div class="col-span-3">
                <p>該当する内容の電話番号におかけください。</p>

                <div class="overflow-x-auto mb-4">
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)テーブルの装飾を適用する -->
                    <!-- (2)テーブルの行ごとの背景色を交互に変える -->
                    <table class="table table-zebra w-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>内容</th>
                                <th>電話番号</th>
                                <th>担当</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0000</td>
                                <td>煌木</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>採用に関するお問い合わせ</td>
                                <td>03-0000-0001</td>
                                <td>煌田</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0002</td>
                                <td>煌山</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <!-- 黄色の枠のアラートを指定 -->
                <div class="alert alert-warning mb-2">
                    <div class="flex w-full text-left">
                        <!-- (1)時間に関するHeroiconsのアイコンを追加 -->
                        <!-- (2)このアイコンをインラインで表示するための指定を追加 -->
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        営業時間：平日10時〜19時
                    </div>
                </div>
            </div>
        </div>
        <!-- 以下の2つの指定を追加 -->
        <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
        <!-- (2)768px以上の画面幅のとき、4個のカラムが並んだグリッドにする -->
        <div class="md:grid md:grid-cols-4 md:gap-2">
            <div class="col-span-1">
                <!-- (1)メールに関するHeroiconsのアイコンを追加 -->
                <!-- (2)このアイコンをインラインで表示するための指定を追加 -->
                 <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                        <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg>
                    <strong>
                        <span class="label-text">メール：</span>
                    </strong>
                </div>  
            </div>
            <!-- 768px以上の画面幅のとき、3つ分のカラム幅で表示する指定を追加 -->
            <div class="col-span-3">
                <div class="form-control w-full my-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- プライバシーポリシーのテキスト -->
                    <p class="col-span-3">
                        プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br>
                        お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                    </p>
                </div>
                <form action="complete.php" method="POST">
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <label for="test2" class="sm:col-span-1 label">
                            <span class="label-text">会社名：</span>
                        </label>
                        <div class="sm:col-span-5">
                            <input type="text" id="company" name="company" required placeholder="会社名を入力してください" class="input input-bordered w-full">
                        </div>
                    </div>    
                        
                        
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <label for="company" class="sm:col-span-1 label">
                            <span class="label-text">氏名：</span>
                        </label>
                        <div class="sm:col-span-5">
                            <input type="text" id="name" name="name" required placeholder="氏名を入力してください" class="input input-bordered w-full">
                        </div>
                    </div>    
                    
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <label for="test2" class="sm:col-span-1 label">
                            <span class="label-text">メール：</span>
                        </label>
                        <div class="sm:col-span-5">
                            <input type="text" id="mail" name="mail" required placeholder="メールアドレスを入力してください" class="input input-bordered w-full">
                        </div>
                    </div>    
                        
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <label for="test2" class="sm:col-span-1 label">
                            <span class="label-text">電話番号：</span>
                        </label>
                        <div class="sm:col-span-5">
                            <input type="text" id="tel" name="tel" required placeholder="電話番号を入力してください" class="input input-bordered w-full">
                        </div>
                    </div>    
                        
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <label for="test2" class="sm:col-span-1 label">
                            <span class="label-text">内容：</span>
                        </label>
                        <div class="sm:col-span-5">
                            <textarea class="textarea textarea-bordered w-full" id="content" name="content" required placeholder="内容を入力してください"></textarea>
                        </div>
                    </div>                        
    
                    <!-- 以下の2つの指定を追加 -->
                    <!-- (1)768px以上の画面幅のとき、グリッドを使う -->
                    <!-- (2)768px以上の画面幅のとき、6個のカラムが並んだグリッドにする -->
                    <div class="form-control w-full my-4 grid grid-cols-1 sm:grid-cols-6 gap-4">
                        <span class="sm:col-span-1"></span> <!-- 空のカラム -->
                        <div class="sm:col-span-5">
                            <button type="submit" class="btn btn-outline text-green-500 border-green-500 hover:bg-transparent w-full">
                                お問い合わせ内容を送信する
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2024 SAMPLE Inc.
    </footer>
</body>

</html>