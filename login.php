<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>
<div class="nav-space"></div>

<!-- -------------- body -------------- -->

<?php 
    if(isset($_SESSION['username'])){
        header("Location: comingSoon");
    }
?>

<section class="section-login">
    <h2>Admin Login</h2>
    <form class="login" method="POST">
        <label for="username" class="login-item login-label">Username</label>
        <input type="text" class="login-item login-input" placeholder="Admin" name="username" required>
        <hr>
        <label for="password" class="login-item login-label">Password</label>
        <input type="password" class="login-item login-input" placeholder="••••••••" name="password" required>
        <button type="submit" name="submit" class="login-button">Login</button>
    </form>

</section>

<!-- ---------------------------------- -->

<?php include "includes/footer.php" ?> 

<?php 
    if(isset($_POST['submit'])){
        if($_POST['username'] == "Keuper" && $_POST['password'] == "Keuper"){

            $_SESSION['username'] = $_POST['username'];
            header("Location: comingSoon");

        }
        else{
            $message = "Invalid Username/Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    };
?>