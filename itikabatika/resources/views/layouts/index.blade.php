@extend('layouts.default') <!--ここはuserが最初に行きつく画面です, extendは（）内を継承する？意味が分からんって-->
@section('title', 'Home')

<section>

    <h1>Home</h1>

    <div>
        <a href="/contact">お問い合わせ</a>
    </div>

</section>