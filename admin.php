<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>
<div class="nav-space"></div>

<!-- -------------- body -------------- -->

<section class="section-login">
    <h2>Admin Login</h2>
    <form class="login">
        <label for="username" class="login-item login-label">Username</label>
        <input type="text" class="login-item login-input" placeholder="Username" name="username">
        <hr>
        <label for="password" class="login-item login-label">Password</label>
        <input type="password" class="login-item login-input" placeholder="Password" name="password">
        <button type="submit" name="submit" class="login-button">Login</button>
    </form>
</section>

<!-- ---------------------------------- -->

<?php include "includes/footer.php" ?>
