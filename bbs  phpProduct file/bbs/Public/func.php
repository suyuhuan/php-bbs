<?php
//粮票等级函数
header('content-type:text/html;charset=utf-8');
  function  cort($score){
  	 if($score>50 && $score<=100){
  	 	return "新兵";
  	 }else if($score>100 && $score<=200){
  	 	 return "排长";
  	 }else if($score>200 && $score<=400){
  	 	 return "连长";
  	 }else if($score>400 && $score<=600){
  	 	 return "团长";
  	 }else if($score>600 && $score<=800){
  	 	 return "营长";
  	 }else if ($score>800 && $score<=1000){
  	 	return "旅长";
  	 }else if($score>1000 && $score<=1200){
  	 	 return "师长";
  	 }else if($score>1200 && $score<=1400){
  	 	 return "军长";
  	 }else{
        return "司令";
  	 }

    }

?>