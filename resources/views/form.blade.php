<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
    <form method="POST" action="{{ route('request') }}">
    @csrf
    
 
    
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
    </body>
    </html>