@extends('layouts.default')
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
            <label for="job">職業<span>必須aaaaaa</span></label>
            <input type="text" name="job" value="{{ old('job')}}">
            @if($error->has('job'))
            <p>{{ $error->first('job') }}</p>
            @endif
        </div>


    </form>
</section>