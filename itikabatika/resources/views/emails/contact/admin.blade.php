<!-- ここはLaravelのbladetemplateエンジンを使って管理者に送信するお問い合わせのメールを本文を作成します

{{ $form_data['name'] }} さんより下記の内容のお問い合わせがありました

//お問い合わせ内容

//職業
{{ $form_data['job']}}
//名前
{{ $from_data['name']}}
//フリガナ
{{ $form_data['kana_name']}}
//メールアドレス
{{ $form_data['email']}}
//電話番号
{{ $form_data['phone_number']}}
//お問い合わせ内容
{{ $form_data['body']}}
