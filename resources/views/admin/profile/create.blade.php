// layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')
{{-- admin.blade.phpの＠yield（'title'）に'ニュースの新規作
成'を埋め込む --}}
@section('title','プロフィールの新規作成')

// admin.blade.php@yield('content')に以下のタグを埋め込む
@section('content')
<div class-"container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィールの新規作成</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('gender') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="hobby">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>  
    </div>
@endsection
    