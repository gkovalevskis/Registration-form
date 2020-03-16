<?php 
				$hostname = "127.0.0.1";
				$username = "root";
				$password = "";
				
				$conn = mysqli_connect($hostname, $username, $password, "databaethree");
				
				if (!$conn){
					die("Could not establish connection! </br>" . mysqli_connect_error());
				}
				
				if (isset($_POST['submit'])){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$psw = $_POST['psw'];
					if (!empty($name) && !empty($email) && !empty($psw)){
						$sql = "INSERT INTO registratedusers (name, email, psw) VALUES ('$name', '$email', '$psw')";
						mysqli_query($conn, $sql);
						echo "<center>Reiģstrācija veiksmīga!</center>";
					}else{
						echo "<center>Neveiksmīga reģistrācija!</center>";
						die("<center>Neveiksmīga reģistrācija!</center>");
					}
				}
				mysqli_close($conn);
?>
