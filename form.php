<?php
session_start();
//echo $_SESSION["session_user_id"];exit;
if(!isset($_SESSION["session_user_id"]))
	header("Location:login.php?msg=2");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    
    
  </head>
   <script  src="release/js/save_data.js"></script>
  <script type="text/javascript">
  	
/*function save_data1() {
       //alert("hi");
       var pno= document.getElementById("p").value;
       var com= document.getElementById("c").value;
       //alert(pno);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("msg").innerHTML = this.responseText;
                document.getElementById("p").value="";
                document.getElementById("c").value="";
            }
        };
        xmlhttp.open("GET", "save_form.php?p="+pno+"&c="+com, true);
        xmlhttp.send();
    }


*/

  </script>
  <body>
  
<section class="section">
    <div class="container">
 <!--<form>-->
   <div id="msg" class="notification is-success">
   </div>
	 <div class="field"><br/>
		
  		<label class="label">Phone No</label>
  		<div class="control has-icons-left has-icons-right">
    		<input class="input" id="p" type="text" placeholder="" name="Phone" required maxlength="10">
    	<span class="icon is-small is-left">
      	<i class="fas fa-home"></i>
    	</span>
    
  		</div>
 
	</div>
<div class="field">
  <label class="label">Comments</label>
  <div class="control">
    <textarea class="textarea" id="c" placeholder="Textarea" name="comments"></textarea>
  </div>
</div>
 <div class="control">
    <button class="button is-link" onclick="save_data()">Submit</button>
  </div>
<!--</form>-->

</html>


