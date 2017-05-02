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
           height:230px;
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
          width:70px;
         }
		</style>
	</head>
	<body>
		<div id="container">
			<h2>网站logo修改:</h2>
			<div id="content">
				<?php 
				  mysql_connect('localhost','root','');
				  mysql_set_charset('utf8');
				  mysql_select_db('bbs');
				  $sql = "select image from conf";
				  $image = mysql_fetch_assoc(mysql_query($sql));

				?>
				<form action='doLogoConf.php' method='post' enctype="multipart/form-data">
				  <table>
					<tr>
						<td align='right'>原logo:</td>
						<td><img src='../../Public/upload/logo/<?php echo $image['image'];?>'></td>
					</tr>
					<tr></tr>
					<tr>
						<td  align='right'>选择上传logo:</td>
						<td><input type='file' name='image'></td>
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
	<?php mysql_close();?>
</html>