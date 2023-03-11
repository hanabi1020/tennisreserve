<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tennisreserve</title>
        
        <style>
         a {
            text-decoration:none;
            width:150px;
            display:inline-block; /*送信とリセットを横並び*/
            font-size:16px;
            text-align:center;
            padding:10px;
            border-radius: 50px;
            background:#CCCCCC	; /*ボタンのカラー（背景色）*/
            color:#000000;　/*ボタンのフォントカラー*/
            line-height:1em;
            border:none;
            padding-left:1em;
	        text-indent:-1em;
        }   
        a:hover {　/*マウスを合わせた時の処理（hover）*/
            color:#AAAAAA;
            background:#AAAAAA;
        }
       #tblmembers {
  display: flex;
  justify-content: space-around;
}
#tblmembers > div {
  width: 30%;
}

        </style>
    </head>
    <body>
        <div class="container">
           
        <h1>予約</h1>
           <label for="select">施設</label>
		            <select class="form-control" name="reserve_time" id="reserve_time">
			            <option value="0">Aテニスコート</option>
			            <option value="1">Bテニスコート</option>
			        </select>
	          
        　　
        　　 <form action="#" method="post">
	            <div class="form-group">
	                <label for="select">時間</label>
		            <select class="form-control" name="reserve_time" id="reserve_time">
			            <option value="0">10:00~11:00</option>
			            <option value="1">11:00~12:00</option>
			            <option value="2">12:00~13:00</option>
			            <option value="3">13:00~14:00</option>
			            <option value="4">14:00~15:00</option>
			            <option value="5">15:00~16:00</option>
			            <option value="6">16:00~17:00</option>
			            <option value="7">17:00~18:00</option>
		            </select>
	            </div>
        　　</form>
           
          
            <div>
                <a href="{{ action('Admin\MypageController@index') }}">予約する</a>
            </div>
        　  <div>
                <a href="{{ action('Admin\MypageController@delete') }}">取り消し</a>
            </div>
        </div>
    </body>
</html>
