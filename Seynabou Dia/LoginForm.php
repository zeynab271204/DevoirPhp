<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Contact</title>
    <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
    
    <h1>SaveUSERS</h1>
    <form method="POST" action="">
        <label for="Login">USER LOGIN:</label><br>
        <input type="text" id="Login" name="Login" required><br>
        <label for="Password">PASSWORD:</label><br>
          <input type="password" id="Password" name="Password" required><br>
       <button type="submit" name="Connexion">CONNEXION</button>
    </form>
   <?php
require_once 'DbConnect.php';


$db = new DbConnect();
$conn = $db->connect();

if(isset($_POST['Connexion'])) {
    $log = $_POST['Login'];
    $pass = $_POST['Password'];
  
    $stmt = $conn->prepare("Select * from UserTable where :Login and :Password)");
    $stmt->bindParam(':Login', $log);
    $stmt->bindParam(':Password', $firstName);
     
    $stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($user){
        header("location: welcome.php");
}
    else{
       header("location: LoginErr.php");
    }

}
?>

      

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Contact</title>
  

</html>
