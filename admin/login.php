
<?php include "includes/header.php"; ?>

<section class="section-login">
    <h2>Admin Login</h2>
    <form class="login" method="GET">
        <label for="username" class="login-item login-label">Username</label>
        <input type="text" class="login-item login-input" placeholder="Admin" name="username" required>
        <hr>
        <label for="password" class="login-item login-label">Password</label>
        <input type="password" class="login-item login-input" placeholder="••••••••" name="password" required>
        <button type="submit" name="submit" class="login-button">Login</button>
    </form>

</section>

<?php 
    if(isset($_GET['submit'])){
        if($_GET['username'] == "Keuper" && $_GET['password'] == "Keuper"){

            $_SESSION['username'] = $_GET['username'];
            header("Location: ../admin");

        }
        else{
            $message = "Invalid Username/Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    };
?>

<?php include "includes/footer.php"; ?>