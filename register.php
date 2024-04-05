<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="wrap">
        <div class="box-login">
            <h1>Register</h1>
            <h4>ZallStore</h4>
            <form id="form-register" class="form">
                <div class="input">
                    <label for="Username">Username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Username" />
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email" />
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password" />
                </div>
                <div class="input">
                    <label for="password">Re-Type Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Re-Type Password" />
                </div>
                <input
                    type="submit"
                    value="Daftar" />
            </form>
        </div>
    </div>
</body>
</html>