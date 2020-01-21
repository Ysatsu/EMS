@extends('layout')

@section('title')

	Detail

@endsection

<link rel="stylesheet" href="{{ asset('css/detail_style.css') }}">

<form action = "" method="post">

    <header><br>
        <p></p>
        <div class = "header">
            <h1>- 社員詳細 -</h1>
        </div>
    </header>


    <div class = "info">


        <div class="left">

            <ul style="list-style-type: none">
            <li>社員番号</li><br>
            <li>姓</li><br>
            <li>名</li><br>
            <li>部署</li><br>
            <li>性別</li><br>
            </ul>

        </div>

        <div class="right">

            <ul style="list-style-type: none">
            <li>{{$info['employee_id']}}</li><br>
            <li>{{$info['last_name']}}</li><br>
            <li>{{$info['first_name']}}</li><br>
            <li>{{$viewDep[$info['department_id']]}}</li><br>
            <li>{{config('const.gender_list')[$info["gender"]]}}</li><br>
            </ul>

        </div>

        <div class = "return">
            <a href="/" class = "home">戻る</a>
        </div>

    </form>
