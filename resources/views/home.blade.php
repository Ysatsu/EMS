@extends('layout')

@section('title')

	Home

@endsection

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<header>
    <div class = "header">
        <h1> - iYell社員管理システム - </h1>
    </div>
</header>


<div class = "new">
    <a href="/new" class = "new_button" value="new_button" name = "new_button">新規登録</a>
</div>

<table class = "table" name = "table" border ="2">
    <div class = "tb_column">
        <tr>
            <th width="15%">社員番号</th>
            <th width="20%">姓</th>
            <th width="20%">名</th>
            <th width="15%">部署</th>
            <th width="10%">性別</th>
            <th></th>
    </tr>
    </div>

    <div class = "tb_data">
        @foreach ($infos as $info)
        <tr align = "center">
            <td> <a href="/detail/{{$info['employee_id']}}">{{$info['employee_id']}}</a></td>
            <td>{{$info['last_name']}}</td>
            <td>{{$info['first_name']}}</td>


            <td>{{$viewDep[$info['department_id']]}}</td>



            <td>{{config('const.gender_list')[$info["gender"]]}}</td>


            <td width="9%"><a href="/edit/{{$info['employee_id']}}">編集</a>/<a href="/delete/{{$info['employee_id']}}">削除</a></td>
        </tr>
        @endforeach

    </div>

</table>

