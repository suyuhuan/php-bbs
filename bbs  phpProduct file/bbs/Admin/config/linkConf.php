<!doctype html>
<html>
	<head>
		<title>bannConf</title>
		<meta charset='utf-8'/>
		<style>
		 #container{
		  	 padding:10px;
		  	margin:40px auto;
		  	width:56%;
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
           height:400px;
           border:1px solid #DCE5F0;
         }
         #content table{
            margin:5px auto;
            line-height:40px;
            color:#C67F83;
         }
         #content button{
          margin-left:10px;
          margin-top:10px;
          float:right;
          height:30px;
          width:70px;
         }
         #content input{
         	margin:3px;
         }
		</style>
	</head>
	<body>
		<div id="container">
			<h2>添加友情链接:</h2>
			<div id='content'>    
	        <form action='./doLinkConf.php' method='post'>
				<table>
							<tr>
								<td align='right'>链接名</td>
								<td><input type='text' value="" name='name'></td>
							</tr>
							<tr>
								<td align='right'>url:</td>
								<td><input type='text' value="" name='link'></td>
							</tr>
		                     <tr>
		                     	<td></td>
		                     	<td>

		                     		<button type='submit'>确定</button>
		                   
		                     	</td>
		                     </tr>
				</tatle>						
			</form>
             </div>
		 </div>
	</body>
</html> 