<!DOCTYPE html>

<html>
    <head>
       <meta charset = "utf-8">
       <title>  </title>
	   
	   <style>
  body {
  background-image: url('image.jpeg');
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: 100% 100%;
}

Button{
background-color:#A9A9A9;
font-family:serif;
}
		   
 @media only screen and (orientation:portrait){
form{
font-size:25px;
margin-top:350px;
margin-left:1px;
}


}
</style>
       
    </head>
	
	
    
    <body>
    
	<form method="POST" action="code.php">
	<input type="hidden" name="myFrom">
	
	<p><button name="Forward" value="Forward" style=" width:130px;  height:75px; font-size:25px;  margin-left:235px;  margin-bottom:20px; margin-top:250px; border-radius:10px; " >Forward</button></p>
	
    <p><button name="Left" value="Left" style=" width:130px;  height:75px; font-size:25px; margin-left:80px; margin-top:10px;  border-radius:10px; " >Left</button>   
             
    <button name="Stop" value="Stop" style=" width:130px;  height:75px; font-size:25px; margin-left:20px; border-radius:10px; background-color:#ff1A1A " >Stop</button>  
	
	<button name="Right" value="Right" style=" width:130px;  height:75px; font-size:25px; margin-left:20px; border-radius:10px; " >Right</button></p>
	
	<p><button name="Backward" value="Backward" style=" width:130px;  height:75px; font-size:25px; margin-left:235px;  margin-bottom:50px; margin-top:20px; border-radius:10px; " >Backward</button></p>


</form>
     
     
    
	
    </body>


</html>
