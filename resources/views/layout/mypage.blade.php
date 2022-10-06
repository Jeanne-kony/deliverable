@extends('layout.common')
 

 
@include('layout.category')

@include('layout.profile')
@section('content')
    <body>
        <h1>アイコン&emsp;&emsp;名前 職業 &emsp;&emsp; <a href='/posts/calendar'>カレンダー</a></h1>
        <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;カテゴリー</h1>
        <div class='posts'>
            <a href='/posts/ranking'><p class='title'>ランキング</p></a>
            <a href='/posts/studystart'><p>学習開始</p></a>
   
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')