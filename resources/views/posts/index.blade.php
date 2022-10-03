<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    

    
    <body>
        <h1>アイコン&emsp;&emsp;名前 職業 &emsp;&emsp; <a href='/posts/calendar'>カレンダー</a></h1>
        <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;カテゴリー</h1>
        <div class='posts'>
            <a href='/posts/show'><p class='title'>ランキング</p></a>
            <a href='/posts/study'><p>学習開始</p></a>
        </div>
    </body>
</html>