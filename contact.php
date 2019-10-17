<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>

</head>

<body>
<?php

  $servername = "localhost";
  $username = "id5159239_giorgosakritidis596";
  $password = "Dikefalos04";
  $dbname = "id5159239_islandsdb";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['message'];

  $to='ga222ey@student.lnu.se';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		// the request method is fine

} else {

	exit('Invalid Request');

}

if(isset($_POST['submit']))
{
  $name = $email = $subject = "";
  $nameErr = $emailErr = $subjectErr = "";
  $valid = TRUE;
  $validemail = TRUE;
  $validsubject = TRUE;

  if (empty($_POST['name'])){
      header('Location: https://greekislands.000webhostapp.com/#footer');
      $nameErr ="Name is required";
      $valid = FALSE;
  }
      else{
         $name = $_POST["name"];
         $valid=TRUE;
      // check name only contains letters and whitespace
      }
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = "Only letters and white space allowed";
      $valid = FALSE;
      }



  if (empty($_POST["email"])){
        $emailErr ="Email is required";
         $validemail = FALSE;
        }
        else{
           $email = $_POST["email"];
           $validemail=TRUE;
        }
   if (!preg_match("/([a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$)/",$email)){
        $emailErr = "Email format is incorrect";
       $validemail = FALSE;
   }


    if (empty($_POST["subject"])){
            $subjectErr ="Subject is required";
            $validsubject = FALSE;
            }
            else{
               $subject = $_POST["subject"];
               $validsubject=TRUE;
            }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error){
      die("Connection failed: " .$conn->connect_error);
  }

  if (($valid === TRUE) AND ($validemail === TRUE) AND ($validsubject === TRUE) ){
  $sql= "INSERT INTO Comments (Name, Email, Subject, Comment) VALUES ('$name', '$email', '$subject', '$comment')";
  
  mail($to, $subject,$comment, 'From:' . $email);
  }

  if ($conn->query($sql) === TRUE ){
       ?>

        <script type="text/javascript">
             window.alert("Your message has been sent successfully. We appreciate your comments.");
        </script>

       <?php

     }
     else
     {
	?>
		<script type="text/javascript">
		    window.alert("Your message was not sent succesfully!");
		</script>

    <?php
		
		
     
	 }
	 if (isset($_POST['submit'])){
			?>
                
         <script type="text/javascript">
			window.location = "https://greekislands.000webhostapp.com/#footer";
			
		 </script>  
		  <?php
		}
	 

     $conn -> close();
}
  
?>
</body>
</html>