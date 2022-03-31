@extends('layouts.jissyu')

@section('title', 'money')

@section('menu_title')
ユーザ情報更新画面
@endsection

@section('content')
   <form action="/money/update" method="post">
   <table>
    @foreach ($items as $item)
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail"
         value="{{$item->mail}}"></td></tr>
      <tr><th>age: </th><td><input type="text" name="age"
         value="{{$item->age}}"></td></tr>
         <tr><th>総資産額(万円): </th><td><input type="number" name="totalAssets"
         value="{{$item->totalAssets}}"></td></tr>
      <tr><th>投資元本(万円): </th><td><input type="number" name="investmentPrincipal"
         value="{{$item->investmentPrincipal}}"></td></tr>
      <tr><th>年収(万円): </th><td><input type="number" name="annuaIncome"
         value="{{$item->annuaIncome}}"></td></tr>

      <tr><th></th><td><input type="submit" value="更新"></td></tr>
         @endforeach
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection

