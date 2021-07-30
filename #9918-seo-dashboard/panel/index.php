<?php
include 'process.php'; 


if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Kullanici adini giriniz.");
        exit();
    } else if(empty($pass)) {
        header("Location: index.php?error=Sifreyi giriniz.");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
           
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            //if ($row['user_name'] === $uname && $row['password'] == $pass) {
                $SESSION['user_name'] = $row['user_name'];
                $SESSION['id'] = $row['id'];
                header("Location: dashboard.php?error=Giris basarili!");
                exit();
            //} else {
            //    header("Location: index.php?error=Hatali kullanici adi veya sifre!");
            //    exit();
            //}

        } else {
            header("Location: index.php?error=Hatali kullanici adi veya sifre!");
            exit();
        }
    }

} 




?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

	<script>
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 80) { 
			//alert("a");
            $('#nb').removeClass('nbR'); 
			$('#nb').addClass('nbF');
		}
		else {
			$('#nb').removeClass('nbF'); 
			$('#nb').addClass('nbR');
		}
	});
	
	</script>
</head>

<header class="nbR" id="nb">
    <?php include "../header-top.php" ?>  
    <?php include "nav-bottom.php" ?>  
</header>  
    
<body>
    <div id="blog-photo-head">
        <div id="blog-header-text">
            <h3>Login</h3>
            <p><a href="" >Ana Sayfa </a>/ Login</p>   
        </div>

        <img src="https://bedfordgroup.com/wp-content/uploads/2017/09/our-team-banner.jpg" alt="LatestPostImg">
    </div>
    <div class="container " id="container-form" >
        <div class="myCard3">
            <div class="row">
                <div class="col-md-12" id="login-container-log">
                    <div class="form-right">
                        <div class="row" >
                            <small id="demo"></small>
                        </div>
                        
                        <form class="myFormLogin" id="myFormLogin" method="POST">
                            
                        <!-- <form class="myForm text-center" id="myForm">     -->
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Giriş Yap</h2>
                                <div class="errorContainer">
                                    <?php if(isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="myLeftCtn">
                                        
                                        <div class="form-group">
                                            <label>Kullanici adi</label>
                                            <input class="myInput" type="text" name="uname" placeholder="Kullanici adi" />
                                        </div>
                                        <div class="form-group">
                                            <label>Şifre</label>
                                            <input class="myInput" type="password" name="password" placeholder="Sifre" />
                                        </div>

                                        <button type="submit" class="btn btn-primary" >Giriş Yap</button>
                                        
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <h2>Kaydol</h2>
                                <div class="myLeftCtn">
                                        
                                        <div class="form-group">
                                            <label>E-mail Adresiniz*</label>
                                            <input class="myInput" type="email" name="email-register" placeholder="E-Mail Adresiniz" />
                                        </div>
                                        <p>Şifre mail adresinize gönderilecektir..</p>
                                        <p>Kişisel verileriniz, bu web sitesindeki deneyiminizi desteklemek, hesabınıza erişimi yönetmek ve gizlilik politikamızda açıklanan diğer amaçlar için kullanılacaktır.</p>
                                        <button type="submit" class="btn btn-primary" >Kaydol</button>
                                </div>
                            </div> 

                                
                        
                        </div>    
                        </form> 

                    </div>      
                </div>
                
                
                  
        </div> 
        
    </div>

   
<!-- Footer -->

<?php include 'footer.php'; ?>

<script src="script.js"></script>      
</body>
</html>