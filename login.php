<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="container mt-5">
        <form id="loginForm" onsubmit="loginSubmit(event)">
            <!-- Name (You can remove this if you don't need it for login) -->
            <div class="form-group">
                <label for="loginName">Name:</label>
                <input type="text" class="form-control" id="loginName" required>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="loginEmail">Email:</label>
                <input type="email" class="form-control" id="loginEmail" required>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" class="form-control" id="loginPassword" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <!-- Navigation Link to Registration Page -->
        <div class="mt-3">
            <p>Don't have an account? <a href="index.html">Register here</a></p>
        </div>
    </div>
    <?php
    
    ?>
    
</body>
</html>