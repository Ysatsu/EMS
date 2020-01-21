@extends('layout')

@section('title')

    New Register

@endsection

<link rel="stylesheet" href="{{ asset('css/new_style.css') }}">


<form action = "/" method="post">
    {{ csrf_field() }}

        <header><br>
            <p></p>
            <div class = "header">
                <h1>- 新規登録 -</h1>
            </div>
        </header>

        <div class = "info">
            <div class="name">
                <div class="Lname">
                    <span>姓</span>
                    <input type="text" id="txtlname" name = "lname" value="" required><br>
                </div>
                <span class = "error"></span>
                <p></p>
                <div class="Fname">
                    <span>名</span>
                    <input type="text" id="txtfname" name = "fname" value= "" required>
                </div>
                <span class = "error"></span>
                <p></p>
            </div>

            <div class="department">
                <span>部署</span>
                <select class = sltDepartment name="sltDepartment" required>
                    <option value="">- Select -</option>
                    <option value="1001" >Sales</option>
                    <option value="1002" >Marketing</option>
                    <option value="1003" >IT</option>
                    <option value="1004" >Management</option>
                    <option value="1005" >Finance</option>
                    <option value="1006" >Accounting</option>
                </select>
            </div>
            <span class = "error"></span>
            <p></p>

            <div class="gender">
                 <span>性別</span>
                <input type="radio" class = gender name="gender" value="1" required>男
                <input type="radio" class = gender name="gender" value="2" required>女
            </div>
            <span class = "error"></span>
            <p></p>
            <div>
                <button type="submit" class="register" name="register" value="register">登録</button>
                <button type = "reset" name ="clear" value = "clear" class = "clear">リセット</button><br>
            </div>



                <a href="/" class = "home">戻る</a>

        </div>

        </form>
