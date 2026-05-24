<?php
session_start();
?>

<?php include 'header.inc'; ?>

<div class="container">
    <div class="main-content">
        <div class="card">
            <h2>Login Form</h2>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="message error">
                    Invalid username or password. Please try again.
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['logout'])): ?>
                <div class="message success">
                    You have been successfully logged out.
                </div>
            <?php endif; ?>
            
            <form id="loginForm" action="process.php" method="POST">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" required>
                </div>
                
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                
                <!-- Hidden field -->
                <input type="hidden" name="userToken" value="Y123456">
                
                <button type="submit">Login</button>
            </form>
            
            <div style="margin-top: 1.5rem;">
                <p><strong>Demo:</strong></p>
                <p>Username: admin</p>
                <p>Password: 1234</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.inc'; ?>