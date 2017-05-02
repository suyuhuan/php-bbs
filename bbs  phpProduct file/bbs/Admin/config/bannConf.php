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
			<?php
			 mysql_connect('localhost','root','');
			 mysql_set_charset('utf8');
			 mysql_select_db('bbs');
			 $sql = "select * from banner";
			 $array= mysql_fetch_assoc(mysql_query($sql));

			?>
			<h2>菜单设置:</h2>
			<div id='content'>    
	        <form action='./doBannConf.php' method='post'>
				<table>
							<tr>
								<td align='right'>菜单一</td>
								<td><input type='text' value="<?php echo $array['tit1']?>" name='titl'></td>
							</tr>
							<tr>
								<td align='right'>菜单二</td>
								<td><input type='text' value="<?php echo $array['tit2']?>"name='tit2'></td>
							</tr>
							<tr>
								<td align='right'>菜单三</td>
								<td><input type='text' value="<?php echo $array['tit3']?>"name='tit3'></td>
							</tr>
							<tr>
								<td align='right'>菜单四</td>
								<td><input type='text' value="<?php echo $array['tit4']?>" name='tit4'></td>
							</tr>
							<tr>
								<td align='right'>菜单五</td>
								<td><input type='text' value="<?php echo $array['tit5']?>" name='tit5'></td>
							</tr>
							<tr>
								<td align='right'>菜单六</td>
								<td><input type='text' value="<?php echo $array['tit6']?>" name='tit6'></td>
							</tr>
		                     <tr>
		                     	<td></td>
		                     	<td>
		                     		<button type='submit'>确定</button>
		                     		<button type='reset'>重置</button>
		                     	</td>
		                     </tr>
				</tatle>						
			</form>
             </div>
		 </div>
  <?php mysql_close(); ?>
	</body>
</html> 