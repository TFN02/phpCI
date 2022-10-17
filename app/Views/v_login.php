<!-- <!DOCTYPE html>
<html>

<head>
    <title>Login</title>
	
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body align="center">
    <div class="card text-center">
        <div class="card-header">
			<h1>
            Login Form
			</h1>

        </div>
        <div class="card-body">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                <table align="center">
                    <tr>
                        <td><h4>Username</h4></td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><h4>Password</h4></td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn-primary" type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html> -->

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Login</div>
        <div class="content">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your Username" name="username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter your Password" name="password" required>
                    </div>
                    <div class="button">
                        <input type="submit" value="Login">
                    </div>
            </form>
        </div>
    </div>

</body>

</html>