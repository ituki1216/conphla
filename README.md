Laravel project contact form app

1. Dockerをinstall
2. 新規プロジェクトfileを作成後パスをコピー
3. cmdでcd path名を入力する
4. 移動したらfileなどの作成を行うため、Conposer create ????????????? でfileつくる
5. config/app.phpへ移動してタイムゾーンを変更する egからjpへ
6. 日本語packageを追加する　sail composer require laravel-lang/lang laravel-lang/publisher --dev
7. sail artisan lang:add ja
8. 次に入力(contact)、確認(confirm), 完了(complete)用アクションを追加していく
9.  入力ページ
     */
    public function index()
    {
        return view('contact.index');
    }+/
10.次にルーティングの設定をおこなう Route::get('/contact', [FormController::class, 'index'])->name('contact');
11. baldeエンジンで見た目を整えていいく
12. 
