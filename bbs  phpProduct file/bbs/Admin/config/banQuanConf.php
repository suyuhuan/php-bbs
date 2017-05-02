<!doctype html>
<html>
	<head>
		<title>seoConf</title>
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
           height:230px;
           border:1px solid #DCE5F0;
         }
         #content table{
            margin:5px auto;
            line-height:40px;
            color:#C67F83;
         }
         #content input{
         	width:300px;
         	height:20px;

         }
         #content textarea{
         	margin-top:10px;
         	width:300px;
         	height:80px;
         	resize:none;
         }
         #content button{
          margin-left:10px;
          margin-top:10px;
          float:right;
          height:30px;
          width:70px;
         }
		</style>
	</head>
	<body>
		<div id="container">
			<h2>网站版权设置:</h2>
			<div id="content">
				<?php
				  mysql_connect('localhost','root','');
				  mysql_set_charset('utf8');
				  mysql_select_db('bbs');
				  $sql = "select * from conf";
				  $array = mysql_fetch_assoc(mysql_query($sql));
				?>
				<form action='./dobanQuanConf.php' method='post'>
				  <table>
					<tr>
						<td align='right'>网站名:</td>
						<td><input type='text' value="<?php echo $array['title']?>" name='title'></td>
					</tr>
					<tr>
						<td  align='right'>版权信息设置:</td>
						<td><textarea name='banquan'><?php echo $array['banquan']?></textarea></td>
					</tr>
                     <tr>
                     	<td></td>
                     	<td>
                     		<button type='reset'>重置</button>
                     		<button type='submit'>确定</button>
                     	</td>
                     </tr>
				   </tatle>
				</form>
			</div>
			<?php mysql_close();?>
		</div>
	</body>
</html>