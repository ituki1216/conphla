@extends('layouts.default') <!--お問い合わせ画面作成 -->
@section('title', 'お問い合わせ')

@section('contact')

<section>

    @if($error->any()) <!-- $errorは特別な変数でバリデーションが失敗した場合に自動的にsetされる-->
    <div>
        <ul>
            @foreach($error->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

        <div>
            <label for="job">職業<span>必須</span></label>
            <input type="text" name="job" value="{{ old('job')}}">
            @error($error->has('job'))
            <p>{{ $error->first('job') }}</p>
            @endif
        </div>

        <div>
            <label for="name">名前<span>必須</span></label>
            <input type="text" name="name" value="{{ old('name')}}">
            @if($error->has('name'))
            <p>{{ $error->first('name') }}</p>
            @endif
        </div>

        <div>
            <label for="name_kana">フリガナ<span>必須</span></label>
            <input type="text" name="name_kana" value="{{ old('name_kana')}}">
            @error($error->has('name_kana'))
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone_number">電話番号<span>必須</span></label>
            <input type="text" name="phone_number" value="{{ old('phone_number')}}">
            @error($error->has('phone_number'))
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">メールアドレス<span>必須</span></label>
            <input type="email" name="email" value="{{ old('email')}}">
            @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div>
            <label for="email_confirm">メールアドレスの確認<span>必須</span></label>
            <input type="text" name="email_confirm" value="{{ old('email_confirm')}}">
            @if($errors->has('email_confirm'))
            <p>{{ $error->first('email_confirm') }}</p>
            @endif
        </div>

        <div>
            <label for="body">お問い合わせ内容<span>必須</span></label>
            <input type="text" name="body" value="{{ old('body')}}">
            @if($errors->has('body'))
            <p>{{ $errors->first('body') }}</p>
            @endif
        </div>

        <div>
            <button type="submit" name="submitBtnVal" value="confirm">確認画面へ</button>
        </div>
        
    </form>
</section>