<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VHASS Login | Signup</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", sans-serif;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 380px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(255, 165, 0, 0.3);
            overflow: hidden;
            position: relative;
        }

        .toggle-buttons {
            display: flex;
            justify-content: center;
            background: orange;
        }

        .toggle-buttons button {
            flex: 1;
            padding: 12px;
            border: none;
            background: orange;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .toggle-buttons button.active {
            background: #fff;
            color: orange;
            font-weight: bold;
        }

        .form-wrapper {
            display: flex;
            width: 200%;
            transition: transform 0.5s ease-in-out;
        }

        form {
            width: 50%;
            padding: 30px;
            background: #fff;
        }

        form h2 {
            margin-bottom: 20px;
            color: orange;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid orange;
            border-radius: 6px;
        }

        button.submit-btn {
            width: 100%;
            padding: 12px;
            background: orange;
            color: #fff;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button.submit-btn:hover {
            background: darkorange;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="toggle-buttons">
            <button id="loginBtn" class="active">Login</button>
            <button id="signupBtn">Signup</button>
        </div>
        <div class="form-wrapper" id="formWrapper">
            <!-- Login Form -->
            <form action="login.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>

            <!-- Signup Form -->
            <form action="signup.php" method="POST">
                <h2>Signup</h2>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="submit-btn">Signup</button>
            </form>
        </div>
    </div>

    <script>
        const loginBtn = document.getElementById("loginBtn");
        const signupBtn = document.getElementById("signupBtn");
        const formWrapper = document.getElementById("formWrapper");

        loginBtn.addEventListener("click", () => {
            formWrapper.style.transform = "translateX(0%)";
            loginBtn.classList.add("active");
            signupBtn.classList.remove("active");
        });

        signupBtn.addEventListener("click", () => {
            formWrapper.style.transform = "translateX(-50%)";
            signupBtn.classList.add("active");
            loginBtn.classList.remove("active");
        });
    </script>

</body>
</html>
