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
            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
        @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $news_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $news_form->body }}</textarea>
                        </div>
                    </div>
                    <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $news_form->body }}</textarea>
                        </div>
                        <label class="col-md-2" for="introduction">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $news_form->body }}</textarea>
                        </div>
                     </div>  
                     
                     
                     
                </div>
             </form>
         </div>
       </div>
    </div>
@endsection