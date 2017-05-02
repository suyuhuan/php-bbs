<!doctype html>
<html>
	<head>
		<title>logoConf</title>
		<meta charset='utf-8'/>
		<style>
		  #container{
		  	 padding:10px;
		  	margin:40px auto;
		  	width:60%;
		    border:3px solid #DCE5F0;
		    border-radius:50px;	
		  
		  }
		  #container>h2{
		  	margin:5px;
		  	padding:20px;
		  	border-radius:10px;
		  	color:#C67F83;
		  	border:1px solid #DCE5F0;
		  }
         #content{
           border-radius:10px;
           margin:0 auto;
           width:94%;
           text-align:inherit;
           height:200px;
           border:1px solid #DCE5F0;
         }
         #content table{
            margin:40px auto;
            line-height:40px;
            color:#C67F83;
         }
         #content button{
          margin-left:10px;
          margin-top:10px;
          float:right;
          height:30px;
          width:100px;
         }
		</style>
	</head>
	<body>
		<div id="container">
			<h2>网站关闭:</h2>
			<div id="content">
				<form action='doExit.php' method='post'>
					<table>
						<tr>
						 <td>
					    	关闭:<input type='radio' name='close' value='1'/>
						    开启:<input type='radio' name='close' value='0'/>
						  </td>
					    </tr>
					    <tr>
					    	<td>
							 <button type='submit'>确定</botton>
							</td>
						</tr>
					</table>
				</form>
			</div>	
		</div>
	</body>
</html>