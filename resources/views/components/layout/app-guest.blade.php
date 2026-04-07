<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-zinc-950  text-white h-full">
    <main class="w-full flex gap-10 p-5 h-screen">
        <div class="w-3/5">
            <img src="/images/login-register.png" alt="Image login or register" class="h-full rounded-2xl">
        </div>
        <section class="flex flex-col justify-center items-center w-2/5 gap-24 px-20">
            <div class="w-56">
                <img src="/images/logo.png" alt="Logo">
            </div>
            {{ $slot }}
        </section>
    </main>
</body>

</html>
