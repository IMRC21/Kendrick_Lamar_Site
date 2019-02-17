<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'kendrick');

$username = $_SESSION['username'];
$user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
echo $user['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Info</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../CSS/accountInfo.css">
</head>
<body>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
            <a href='../index.php'><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $user['username']?>
					</div>
				</div>
				<div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm">BUY TICKET</button>
                        <button type="button" class="btn btn-danger btn-sm"><a href="./index.php?logout='1'">logout</a></button>
                    
				</div>
				<div class="profile-usermenu">
					<ul class="nav">
						<li class='active'>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
            <ul class="nav dataList">
						<li>
                            <p>Firstname: </p><input type='text' value='<?php echo $user['firstname'];?> ' disabled>
                             
                        </li>
                        <li>
                            <p>Lastname: </p><input type='text' value='<?php echo $user['lastname'];?> ' disabled>
                            
                        </li>
                        <li>
                            <p>Username: </p><input type='text' value='<?php echo $user['username'];?> ' disabled>
                             
                        </li>
                        <li>
                            <p>E-Mail: </p><input type='text' value='<?php echo $user['email'];?> ' disabled>
                             
						</li>
                        <li>
                            <p>Birthday: </p><input type='text' value='<?php echo $user['birthday'];?> ' disabled>
                             
                        </li>
                        <li>
                            <p>Gender: </p><input type='text' value='<?php if($user['gender']=="M"){echo "Male";}else{echo "Female";}?> ' disabled>
                             
                        </li>
                        <li>
                            <p>Phone: </p><input type='text' value='<?php echo $user['phone'];?> ' disabled>
                             
                        </li>
                        <?php if ($user['username'] == 'Admin') : ?>
                                <div class='col'>
                                <form method="post" action="index.php">
                                <li>
                                        <p>Tickets amount: </p><input type='text' value='' name="ticket">
                                </li>
                                <li>
                                        <p>Tickets amount: </p><input type='text' value='' name="ticket">
                                </li>
                                <li>
                                        <p>Tickets amount: </p><input type='text' value='' name="ticket">
                                </li>
                                        <label>tickets amount</label>
                                        <input type="text"  >
                                        <label>Guests</label>
                                        <input type="text" name="guests">
                                        <label>Place</label>
                                        <input type="text" name="place">
                                    <center>
                                        <input type="submit" value="insertTicket" name="login_user">
                                    </center>
                                </form>
                                </div>
                        <?php endif ?>
					</ul>
            </div>
        </div>
        
	</div>
</div>
</body>
</html>