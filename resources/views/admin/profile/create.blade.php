@extends('layouts.profile')

{{--  課題11-4 --}}


@section('title', 'Myプロフィール')

 {{--  課題13-4 --}}
 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール作成画面</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" 
                enctype="multipart-form/data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row" >
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name')}}" >
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="radio"   name="gender" value="male" @if(old('gender')!='female')checked="checked"@endif >男性
                            <input type="radio"   name="gender" value="female" @if(old('gender')=='female')checked="checked"@endif >女性
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

