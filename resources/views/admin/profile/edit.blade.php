// layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')
{{-- admin.blade.phpの＠yield（'title'）に'ニュースの新規作
成'を埋め込む --}}
@section('title','プロフィールの編集')

// admin.blade.php@yield('content')に以下のタグを埋め込む
@section('content')
<div class-"container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィールの編集</h2>
        </div>
    </div>  
</div>
@endsection
    