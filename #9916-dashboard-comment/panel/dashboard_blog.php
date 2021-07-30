<?php

include 'process.php'; 


// echo $file ;

if (isset($_GET["id"])) {  $id = $_GET["id"]; }


$action = "";
if (isset($_GET["action"])) {$action = $_GET["action"];} 
if (isset($_POST["action"])) {$action = $_POST["action"];} 

//echo $action;

if (isset($_POST["title"])) {$title = $_POST["title"];} 
if (isset($_POST["content"])) {$content = $_POST["content"];} 
if (isset($_POST["imglink"])) {  $imglink = $_POST["imglink"]; }
if (isset($_POST["id"])) {  $id = $_POST["id"]; }




?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
    <div class="header-contact-top">
        <div class="container" id="header-cont">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://www.argenova.com.tr/assets/images/logo.svg" alt="Argenova" class="logo1" >
                </div>
                
                
                <div class="col-md-8">
                    <div class="contact-group-all">
                    
                    <div class="contact-group-top">
                                <div class="icon-grp text-center">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                
                                <div class="contact-hear-text">
                                    <h5>Adres:</h5>
                                    <p>Gebze / Kocaeli</p> 
                                </div>                         
                    </div>
                    
                    <div class="contact-group-top">
                                <div class="icon-grp text-center">
                                    <i class="far fa-envelope"></i>
                                </div>
                                
                                <div class="contact-envelope">
                                    <h5>E-mail:</h5>
                                    <p>info@argenova.com.tr</p>
                                </div>                         
                    </div>
                    
                    <div class="contact-group-top">
                                <div class="icon-grp text-center">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                
                                <div class="contact-hear-text">
                                    <h5>Telefon:</h5>
                                    <p>(532) 134-0757</p>
                                </div>                         
                    </div>
                    </div>    
                </div>
            </div>
        </div>  
    </div>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid" id="nav-container-bottom">
            <img src="https://www.argenova.com.tr/assets/images/logo.svg" alt="Argenova" class="logo2">
            <div class="toggle-pos ms-auto">
                <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            
            
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="../index.php"> Anasayfa </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Hakkımızda </a></li>
                
    
                <li class="nav-item dropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown2">  Hizmetler  </a>
                    <ul class="dropdown-menu">
                      <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                      <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                              <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                      <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                    </ul>
                  </li>
    
                <li class="nav-item dropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown2">  Sayfalar  </a>
                    <ul class="dropdown-menu">
                      <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                      <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                              <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                          <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                      <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                    </ul>
                  </li>
                
                <li class="nav-item dropdown" id="myDropdown">
                  <a class="nav-link dropdown-toggle" href="../blog.php" data-bs-toggle="dropdown2">  Blog  </a>
                  <ul class="dropdown-menu">
                    <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                    <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                        <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                        <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                          <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                            <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                        <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                    <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="../contact.php"> İletişim </a></li>
    
                
              </ul>
            </div>
            <!-- navbar-collapse.// -->
            <ul class="navbar-nav ms-auto" id ="right-nav-items">
                <li class="nav-item" id="search-icon"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <!-- container-fluid.// -->
        </div>
        </div>  
    </nav>
</header>  
   


 

    
<body>
<nav class="navbar navbar-expand-lg navbar-light " id="navbar2cms">
    <div class="toggle-pos ms-auto">
                <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavCMS"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
  <div class="collapse navbar-collapse" id="navbarNavCMS">
    <ul class="navbar-nav">
      <li class="nav-item<?php if($file == 'dashboard_blog.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard_blog.php">Blog Yöneticisi</a>
      </li>
      <li class="nav-item<?php if($file == 'dashboard.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard.php">Kullanicilar</a>
      </li>
      <li class="nav-item<?php if($file == 'dashboard_comments.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard_comments.php">Yorumlar</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container" id="container-form-dash" >
        <div class="myCard3">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-right">
                        
                        <form class="myFormLogin text-center" id="myFormLogin" action="process.php" method="POST">      
                        <!-- <form class="myForm text-center" id="myForm">     -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorContainer">
                                    <?php if(isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>     
                        </div>    
                        </form> 
                    </div>      
                </div>               
        </div>      
    </div>


    <div class= "container" id="new-user-container">
        <div class="row justify-content-center">
            <?php 
                    if ($action=='duzenle') {
                        $goster = mysqli_query($conn, "SELECT * FROM datacontent WHERE id='$id' ");
                        while ($row = @mysqli_fetch_array($goster)) {
                            $title = $row["title"];
                            $content = $row["content"];
                            $imglink = $row["imglink"];
                        }
                    
                        echo '
                        <form action="dashboard_blog.php" method="POST">
                        <input type="hidden" name="action" value="guncelle">
                        <input type="hidden" name="id" value="'.$id.'">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="'.$title.'">
                        </div>
                        <div class="form-group">
                            <label>Görsel Link</label>
                            <input type="text" name="imglink" class="form-control" value="'.$imglink.'">
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea type="text" name="content" id="content2" class="form-control" >'.$content.'</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary">Kaydet</button>
                        </div>
                        </form>';
                    
                    } 
                    else if ($action=='guncelle') 
                    {
                    

                        $guncelle = "UPDATE datacontent SET
                        datacontent.title = '$title',
                        datacontent.content = '$content',
                        datacontent.imglink = '$imglink'
                        WHERE datacontent.id = '$id'
                        ";

                        if ($conn -> query($guncelle)) {
                            echo 'Guncellendi!';
                            
                            
                        } else {
                            echo $conn->error;
                        }

                    }
                    else if ($action=='sil') 
                    {
                        $sil = "DELETE FROM datacontent 
                        WHERE datacontent.id = '$id'
                        ";

                        if ($conn -> query($sil)) {
                            echo 'Silindi!';
                            
                            
                        } else {
                            echo $conn->error;
                        }

                    }                     
                    
                    else if ($action=='kaydet') 
                    {
                        $kaydet = "INSERT INTO datacontent (title, content, imglink) VALUES('$title', '$content', '$imglink')";

                        if ($conn -> query($kaydet)) {                     
                            echo 'Kaydedildi!';
              
                        } else {
                            echo $conn->error;
                        } 
                    
                    } 


                    else if ($action=='yeni') 
                    {
                        echo '
                        <form action="dashboard_blog.php" method="POST">
                        <input type="hidden" name="action" value="kaydet">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Görsel Link</label>
                            <input type="text" name="imglink" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="content" id="content2"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary">Ekle</button>
                        </div>
                        </form>';
                    
                    } 
 
                    else 
                    {
                        // echo '
                        // <form action="dashboard.php" method="POST">
                        // <input type="hidden" name="action" value="kaydet">
                        // <div class="form-group">
                        //     <label>Username</label>
                        //     <input type="text" name="uname" class="form-control" value="">
                        // </div>
                        // <div class="form-group">
                        //     <label>Password</label>
                        //     <input type="text" name="password" class="form-control" value="">
                        // </div>
                        // <div class="form-group">
                        //     <button type="submit" name="save" class="btn btn-primary">Kaydet</button>
                        // </div>
                        // </form>';

                    }
            ?>

        </div>
    </div>

    <div class="container" id="table-new-user">
        <div class="row">
            <!-- <div class="col"> -->
                <a href="dashboard_blog.php?action=yeni"><button class="btn btn-primary">Yeni Blog</button></a>            
                <?php
                    tableShowBlog();
                ?>   
            <!-- </div> -->

        </div>
    </div>
    <script src="script.js"></script>  
    <!-- <script src="ckeditor/ckeditor.js"></script>  -->
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>   
            CKEDITOR.replace( 'content2' );
            
    </script>


</body>
    
<footer id="footer-foot">
 <div class="container" id="footer-cont">
        <div class="row" id="footer-cont-col">
            <div class="col-md-3 " id="footer-first">
                
                <img src="https://www.argenova.com.tr/assets/images/logo.svg" alt="Argenova" >
                <p>Yenilikçi ve girişimci ruhumuz ile hareket ediyor, her işimizi değerlerimiz ışığında en doğru şekilde yapıyoruz.</p>
            
                <div class="footer-first-icons">
                    
                    <a href="#">
                        <div class="icon-grp rounded-circle text-center">
                        <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>

                    <a href="#">
                        <div class="icon-grp rounded-circle text-center">
                        <i class="fab fa-twitter"></i>
                        </div>
                    </a>

                    <a href="#">
                        <div class="icon-grp rounded-circle text-center">
                        <i class="fab fa-pinterest-p"></i>
                        </div>
                    </a>

                    <a href="#">
                        <div class="icon-grp rounded-circle text-center">
                        <i class="fab fa-instagram"></i>
                        </div>
                    </a>
                    
                </div>
                
            </div>
            
            <div class="col-md-3" id="services-footer">
                <h2>Bilişim Hizmetleri</h2>
                
                <a href="#"><p>Yazılım Geliştirme</p></a>
                <a href="#"><p>Web Geliştirme</p></a>
                <a href="#"><p>Analitik Çözümler</p></a>
                <a href="#"><p>Cloud and DevOps</p></a>
                <a href="#"><p>Proje Tasarımı</p></a>
                
            
            </div>
            
            <div class="col-md-3" id="contact-footer">
                <h2>İletişim Bilgileri</h2>
                <div class="footer-first-icons">
                    <div class="icon-grp2">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Muallimköy Mah. Deniz Cad.</p>
                    </div>
                    <div class="icon-grp2">
                        <i class="fas fa-phone-volume"></i>
                        <p><a href="#"> (532) 134-0757</a></p>
                    </div>
                    <div class="icon-grp2">
                        <i class="far fa-envelope"></i>
                        <p><a href="#">info@argenova.com.tr</a></p>
                    </div>
                    <div class="icon-grp2">
                        <i class="far fa-clock"></i>
                        <p>Çalışma Saatleri: 09:00 - 17:00</p>
                    </div>
                </div>
            
            </div>
            
            <div class="col-md-3" id="footer-news">
                <h2>Haberler</h2>
                <p>Ofisimiz Türkiye'nin en büyük teknoparklarından birisi olan Bilişim Vadisi içerisinde yer almaktadır. </p>
            
                <div id="footer-email">
                <div class="form-group"> 
                    <form class="myForm">
                        <input class="myInput2" type="Email" placeholder="E-mail adresiniz" id="email" required>
                        <a href="#"><div class="icon-grp3 bg-info rounded-circle text-center"><i class="fas fa-paper-plane"></i></div>  </a>
                    </form>
                    
                </div>
                </div>
                
            </div>
            
        </div>
    </div>  
    

</footer>
    
<footer id="footer-bottom-deep">
    <div class="container" id ="cont-foot">
    
        <div class="row">
            <div class="col-md-4 ">
                <p>© 2021 Tüm Hakları Saklıdır.</p>
            </div>
            
            <div class="col-md-8 ">
                <ul id ="footer-bottom-right-nav">
                    <li><a href="#">Ana Sayfa</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="index.php">Blog</a></li>
                    <li><a href="#">Mağaza</a></li>
                    <li><a href="#">SSS</a></li>
                    <li><a href="index.php">Panel</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</footer>
</html>


<script>
    $(document).ready(function(){
        $('user_name_data').DataTable();
    });
</script>

