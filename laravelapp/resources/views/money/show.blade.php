@extends('layouts.helloapp')
<style>
    .pagination {font-size:10pt;}
    .pagination li {display:inline-block}
    tr th a:link {color:white;}
    tr th a:visited {color:white;}
    tr th a:hover {color:white;}
    tr th a:active {color:white;}
</style>
@section('title','Index')

@section('menubar')
    @parent
    ページ
@endsection

@section('content')
    @if(Auth::check())
    <p>USER: {{$user->name. '('. $user->email. ')'}}</p>
    <table>
        @foreach ($items as $item)
        <tr><th>ユーザーネーム</th><td>{{$item->name}}</td></tr>
        <tr><th>年齢</th><td>{{$item->age}}</td></tr>
        <tr><th>メールアドレス</th><td>{{$item->mail}}</td></tr>
        <tr><th>総資産額</th><td>{{$item->totalAssets}}万円</td></tr>
        <tr><th>投資元本</th><td>{{$item->investmentPrincipal}}万円</td></tr>
        <tr><th>年収</th><td>{{$item->annuaIncome}}万円</td></tr>
        @endforeach
    </table>
    <td><a href="/money/edit">更新</a></td>

    @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>|
    <a href="/register">登録</a>)</p>
    @endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection