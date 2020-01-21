@extends('layout')

@section('title')

	Delete

@endsection

<link rel="stylesheet" href="{{ asset('css/delete_style.css') }}">

<form action = "/delete/{{$info['employee_id']}}" method="post">

    {{ csrf_field() }}

    <header><br>
        <p></p>
        <div class = "header">
            <h1>- データ削除 -</h1>
        </div>
    </header>

    <table align= center class="contents" name ="contents" >
        <tr>
            <th width="70%" height="60px">社員番号</th>
            <td>{{$info['employee_id']}}</td>
        </tr>

        <tr>
            <th width= "100px" height="60px">姓</th>
            <td>{{$info['last_name']}}</td>
        </tr>

        <tr>
            <th width = "100px" height="60px">名</th>
            <td>{{$info['first_name']}}</td>
        </tr>

        <tr>
            <th width = "100px" height="60px">部署</th>
            <td>{{$viewDep[$info['department_id']]}}</td>
        </tr>

        <tr>
            <th width = "100px" height="60px">性別</th>
            <td>{{config('const.gender_list')[$info["gender"]]}}</td>
        </tr>
    </table><br>

    <div class= "delete" name = "delete">
            <input type="hidden" name="empInfo" value="">
            <button type="submit" class="btndelete" name="btndelete" value="btndelete" >削除</button>
    </div>

    <div class = "return">
            <a href="/" class = "home">戻る</a>
    </div>

    </form>
