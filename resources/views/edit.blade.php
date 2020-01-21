@extends('layout')

@section('title')

	Edit

@endsection


<link rel="stylesheet" href="{{ asset('css/edit_style.css') }}">

<form action = "/edit/{{$info['employee_id']}}" method="post">

    {{ csrf_field() }}

		<header><br>
		<p></p>
		<div class = "header">
			<h1>- 内容編集 -</h1>
		</div>
	</header>

	<div class = "info">
		<div class="id">
			<span class="number">社員番号</span>
			<span name="employee_id" value ="employee_id">{{$info['employee_id']}}</span>
		</div>

	<div class = "info">
		<div class="name">
			<div class="Lname">
				<span>姓</span>
				<input type="text" id="txtlname" name = "lname" value= "{{$info['last_name']}}" required><br>
			</div>
			<span></span>
			<p></p>
			<div class="Fname">
				<span>名</span>
				<input type="text" id="txtfname" name = "fname" value= "{{$info['first_name']}}" required><br>

			</div>
			<span></span>
			<p></p>
		</div>

		<div class="department">
			<span>部署</span>
			<select class = sltDepartment name="sltDepartment" value = {{$info['department_id']}} required>
				<option value="">- Select -</option>
				<option value="1001" @if ($info['department_id'] == "1001")selected = "selected"; @endif>Sales</option>
				<option value="1002" @if ($info['department_id'] == "1002")selected = "selected"; @endif>Marketing</option>
				<option value="1003" @if ($info['department_id'] == "1003")selected = "selected"; @endif>IT</option>
				<option value="1004" @if ($info['department_id'] == "1004")selected = "selected"; @endif>Management</option>
				<option value="1005" @if ($info['department_id'] == "1005")selected = "selected"; @endif>Finance</option>
				<option value="1006" @if ($info['department_id'] == "1006")selected = "selected"; @endif>Accounting</option>
			</select>
		</div>
		<span></span>
		<p></p>

		<div class="gender">
		 	<span>性別</span>

            <?php $radioBtn = ($info["gender"]); ?>
            <input type="radio" class = gender name="gender" value="1" @if ($radioBtn == "1") checked = "checked"; @endif required> 男
            <input type="radio" class = gender name="gender" value="2" @if ($radioBtn == "2") checked = "checked"; @endif required>女

		</div>
		<span></span>
		<p></p><br>

		<div>
			<input type="hidden" name="empInfo" value="">
			<button type="submit" class="register" name="register" value="register">変更登録</button>
			<button type = "reset" name ="clear" value = "clear" class = "clear">元に戻す</button><br>
		</div>

			<a href="/" class = "home">戻る</a>

	</div>

</form>

