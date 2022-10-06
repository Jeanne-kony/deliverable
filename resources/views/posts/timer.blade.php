<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h2 class="text-center">
           カテゴリー
        </h2>
        <div class="content">
            
                <h1>時間</h1>
            
        </div>
        <div class="footer">
            <a href="/posts/studystart">戻る</a>
        </div>
    </body>
</html>
@endsection