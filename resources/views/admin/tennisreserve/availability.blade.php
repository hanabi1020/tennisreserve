<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tennisreserve</title>
        <link rel="stylesheet" href="css/availability_style.css">
       
    </head>
    <body>
        <div class="container">
            <h1>空き状況</h1>
        
            <h3>Aテニスコート</h3>
            <table>
                <tr>
                   <tr><th>10:00~11:00</th></tr>
                　 <tr><td>11:00~12:00</td></tr>
                   <tr><th>12:00~13:00</th></tr>
                   <tr><td>13:00~14:00</td></tr>
                   <tr><th>14:00~15:00</th></tr>
                　 <tr><td>15:00~16:00</td></tr>
                   <tr><th>16:00~17:00</th></tr>
                   <tr><td>17:00~18:00</td></tr>

                </tr>
            </table>
            
            <h3>Bテニスコート</h3>
             <table>
                <tr>
                    <tr><th>10:00~11:00</th></tr>
                　  <tr><td>11:00~12:00</td></tr>
                    <tr><th>12:00~13:00</th></tr>
                    <tr><td>13:00~14:00</td></tr>
                    <tr><th>14:00~15:00</th></tr>
                　  <tr><td>15:00~16:00</td></tr>
                    <tr><th>16:00~17:00</th></tr>
                    <tr><td>17:00~18:00</td></tr>
                </tr>
             </table>
        
            <h1>予約</h1>
            
        　　    <form action="{{ action('Admin\AvailabilityController@add') }}" method="post" enctype="multipart/form-data">
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
	            {{ csrf_field() }}
	            <input type="submit" class="btn btn-primary" value="予約する">
        　　</form>
        　  <div>
                <a href="{{ action('Admin\AvailabilityController@delete') }}">取り消し</a>
            </div>
        </div>
    </body>
</html>
