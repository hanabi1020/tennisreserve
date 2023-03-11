<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tennisreserve</title>
        <style>
            .submit-button {
            width:150px;
            display:block; /*送信とリセットを縦並び*/
            font-size:16px;
            text-align:center;
            padding:10px;
            background:#00CCFF	; /*ボタンのカラー（背景色）*/
            color:#FFFFFF;　/*ボタンのフォントカラー*/
            line-height:1em;
            border:none;
            padding-left:1em;
	        text-indent:-1em;
	        margin-bottom: 10px; /*ログインと新規登録の幅*/
            }
            .submit-button:hover {　/*マウスを合わせた時の処理（hover）*/
            color:#0099FF;
            background:#0099FF;
            }
    
            .tel
            {
            }           
            .email
            {
           
            }
            .password
            {
                
            }
            #page {
            width: 800px;
            margin: 0 auto;
            }
                    </style>
    </head>
    <body>
       <div id="page">
            <h1>予約システム</h1>
                <form action="reservation_calender.php" method="post">
                          
                            <p>電話番号</p>
                            <div><input type="tel" name="number" placeholder="08012349876" style="width:200px; height:20px;"></div>
                            
                            <p>email</p>
                            <div><input type="email"style="width:200px; height:20px;"></div>
                            
                            <p>password</p>
                            <div><input type="password" name="name"style="width:200px; height:20px;"></div>
                            
                            <!--ログイン・新規登録-->
                           <div>
                                <a href="{{ action('Admin\TopController@login') }}">ログイン</a>
                           </div>
        　                  <div>
                                <a href="{{ action('Admin\TopController@signup') }}">新規登録</a>
                           </div>
                </form>
        </div>
    </body>
</html>