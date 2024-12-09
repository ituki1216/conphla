<!DOCTYPE html> <!-- ここはヘッダーフッターナビゲーションバーなど、全ページで共通して表示したい部分を定義するためのレイアウトtemplate -->
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'フォームAPP')</title>
</head>
<body>
    <header>{{-- // header --}}</header>

    <main>@yield('contact')</main> 

    <footer>{{--  // footer  --}}</footer>
</body>

</html>