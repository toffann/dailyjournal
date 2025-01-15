<?php
session_start();
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi password dengan MD5

    // Query dengan prepared statement
    $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah data ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php"); // Redirect ke admin.php
        exit;
    } else {
        $error = "Username atau Password salah!";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        
       /* CSS */
       body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            background-image: url('img/background_login.png'); /* Ganti dengan path gambar Anda */
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }
        .login-form { 
            background: rgba(255, 255, 255, 0.9); /* Warna putih dengan transparansi */
            padding: 20px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            width: 300px; 
        }
        .login-form h2 { 
            margin-bottom: 20px; 
            text-align: center; 
        }
        .login-form label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
        }
        .login-form input[type="text"], 
        .login-form input[type="password"] { 
            width: 100%; 
            padding: 8px; 
            margin-bottom: 15px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }
        .login-form button { 
            width: 100%; 
            padding: 10px; 
            background: #007bff; 
            color: #fff; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
        }
        .login-form button:hover { 
            background: #0056b3; 
        }
        .error { 
            color: red; 
            font-size: 14px; 
            text-align: center; 
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>    <wbr>Welcome to Taufan's Journal</wbr></h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
