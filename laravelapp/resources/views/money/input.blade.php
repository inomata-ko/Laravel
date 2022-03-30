@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報新規登録画面
@endsection

@section('content')
   <form action="/money/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
      <tr><th>age: </th><td><input type="number" name="age"></td></tr>
      <tr><th>総資産額(万円)</th><td><input type="number" name="totalAssets"></td></tr>
    <tr><th>投資元本(万円)</th><td><input type="number" name="investmentPrincipal"></td></tr>
    <tr><th>年収(万円)</th><td><input type="number" name="annuaIncome"></td></tr>

      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection

