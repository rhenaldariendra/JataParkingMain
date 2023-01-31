<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In < Jataparking ></title>
    <link rel="stylesheet" href="/Assets/css/admin/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <img src="/Assets/Images/logo.svg" alt="">
        <div class="box">
            <div class="box-container">
                <form action="/login/user" method="POST">
                    @csrf
                    <div class="input-placeholder">
                        <label for="username">Username or Email Adress</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="input-placeholder">
                        <label for="password">Password</label>
                        <div class="password">
                            <input type="password" name="password" id="password">
                            <i id="togglePassword" class="bi bi-eye-slash" style="font-size: 20px;"></i>
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="input-placeholder remember">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <button type="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>
</body>
</html>
