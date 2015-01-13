<?php  
	$var_name=127.55;  
	if (is_double($var_name))  
		echo 'This is a double value.<br>';  
	else  
		echo 'This is not a double value.<br>';  
		echo '<br>';  
		var_dump(is_double(11));  
		echo '<br>';  
		var_dump(is_double(1e0));  
		echo '<br>';  
		var_dump(is_double(true));  
		echo '<br>';  
		var_dump(is_double(array(23.3, 56, 6)));  
?>  

<br>
<br>

<?php  


	$var_name= false;  
	if (is_bool($var_name))  
		echo 'This is a boolean.';  
	else  
		echo 'This is not a boolean.';  
?> 

<br>
<br>

<?php  
	$var_name = TRUE;  
	if (is_null($var_name)){  
		echo 'Variable is  NULL';  
	}  
	else{  
	echo 'Variable is not NULL';  
	}  
?>  
