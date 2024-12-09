<!-- ここはお問い合わせの確認ページです -->
@extends('layouts.default')
@section('title', 'お問い合わせ確認')

@section('content')

<section>

    @if($error->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact.confirm') }}" method="POST">

        <div>
            <label for="job">職業</label>
            {{old('job')}}
            <input type="hidden" name="job" value="{{ old('job') }}">
        </div>

        <div>
            <label for="name">名前</label>
            {{ old('name') }}
            <input type="hidden" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="name_kana">フリガナ</label>
            {{ old('name_kana') }}
            <input  type="hidden" name="name_kana" value="{{ old('name_kana') }}">
        </div>

        <div>
            <label for="phone">電話番号</label>
            {{ old('phone_number') }}
            <input  type="hidden" name="phone" value="{{ old('phone_number') }}">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            {{ old('email') }}
            <input  type="hidden" name="email" value="{{ old('email') }}">
            <input  type="hidden" name="email_confirmation" value="{{ old('email_confirmation') }}">
        </div>

        <div>
            <label for="body">お問い合わせ内容</label>
            {{ old('body') }}
            <input  type="hidden" name="body" value="{{ old('body') }}">
        </div>

        <div>
            <button tyoe="submit" name="submitBtnVal" value="back">戻る</button>
            <button type="submit" name="submitBntVAl" value="complete">送信</button>
        </div>

    </form>
</section>