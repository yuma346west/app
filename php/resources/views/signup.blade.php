<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <div>
        <div>
            <h3>サインアップ</h3>
            <p>ユーザー登録をお願いします</p>
            <p><a href="/user/signin">登録済みの方はこちら</a></p>
        </div>
        <form method="POST" action="user/signup">
            @csrf
            <div>
                <label for="username">ユーザー名:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    </body>
</html>
