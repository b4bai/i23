<?php
$message = '';
					if (isset($_POST['email']) && !empty($_POST['from']))
					
					{ 
								if(ereg("^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)+$",$_POST['email']))
								{
												  if (mail($_POST['email'], $_POST['subject'], $_POST['body'], ''))
												  {
													$message = "Email has been sent to <b>".$_POST['email']."</b>.<br>";
												  }
								else
												{
													$message = "Failed sending message to <b>".$_POST['email']."</b>.<br>";
												  
												}
								}//not empty
								else
								{
										  if (isset($_POST['submit']))
										   {
											$message ="plz check ur mail id<br>";
										  }
								}
				}//validate
else
{
 $message =  "No email address specified!<br>";
}
?>
<html>
  <head>
    
   <center><B> Mail test</B></center><br>
<br>
<br>
<br>
  </head>
  <body>
    <?php echo $message; ?>
    <form method="post" action="email1.php">
     <center>
	 <table border =2>
        <tr>
          <td><B>
            TO:    </B>
          </td>
          <td>
            <input type=" text" size="50" border="1" name="email" value="<?php if (isset($_POST['email']) && !empty($_POST['email'])) echo $_POST['email']; ?>">
          </td> </tr>
 	<tr>
          <td><B>
            FROM:    </B>
          </td>
          <td>
            <input type="text" size="50" border="1" name="from" value="<?php if (isset($_POST['from']) && !empty($_POST['from'])) echo $_POST['from']; ?>">
          </td> </tr>

        <tr>
          <td>
           <B>SUBJECT</B>
          </td>
          <td>
            <input type=" text" size="50" border="1"name="subject">
          </td>
        </tr>
        <tr>
          <td>
            <B>MESSAGE</B>
          </td>
          <td>
            <textarea name="body"rows="20" cols="60" ppborder="1"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
          <td>
            <input type="submit" value="send" name="submit">
          </td>
        </tr>
<center>
      </table>
    </form>
  </body>
</html>




