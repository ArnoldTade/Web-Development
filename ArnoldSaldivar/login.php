<?php
    $title = "User Login";
    
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is Incorrect! Please try again. </div>';            
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
           
            

            header("Location: viewrecords.php");                 
        }
    }
?>
<div class="container1">
<h1 class="text-center"><?php echo $title ?></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="form-floating mb-3">
           <label for="username">Username: </label>
            <input type="text" class="form-control" name="username" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>" placeholder="Your username">
</div>
           <label for="password">Password: </label>
            <input type="password"  class="form-control" name="password" id="password" placeholder="Your password">
        

    </table><br/>


    <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
    <a href="#">Forgot Password</a>
    </form><br/>
    </div>
    <br>

    <br>

<br> <br>
<br> <br>
<br>
<br>
<br>
<br>
<br>
 <br>



    <?php include_once 'includes/footer.php' ?>