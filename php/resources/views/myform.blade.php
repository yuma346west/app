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
        {{ $warn }}
    </div>

    <form method="POST" action="content/append">
        @csrf
        <div>
            <label for="inputField">Input:</label>
            <input type="text" id="inputField" name="message">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <div>

        @foreach ($contents as $content)
            <div>{{ $content->user_id }}: {{ $content->message }}</div>
        @endforeach
    </div>
    </body>
</html>
