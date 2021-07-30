<?php 
    include 'panel/process.php';
    
    if (isset($_GET["id"])) {  $id = $_GET["id"]; }

    $query = "SELECT * FROM  datacontent where ID='$id'";
    $result = mysqli_query($conn, $query);

    
    while($row = mysqli_fetch_array($result))
        {
            
            $title =$row["title"];
            $imglink =$row["imglink"];
            $content =$row["content"];
            
        }

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <li class="nav-item active"> <a class="nav-link" href="index.php"> Anasayfa </a> </li>
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
                  <a class="nav-link dropdown-toggle" href="blog.php" data-bs-toggle="dropdown2">  Blog  </a>
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

                <li class="nav-item"><a class="nav-link" href="contact.php"> İletişim </a></li>
    
                
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
    <div id="blog-photo-head">
        <div id="blog-header-text">
            <h3><?php echo $title; ?></h3>
            <p><a href="" >Ana Sayfa </a><a href="index.php" >/ Blog </a><a href="blog.php" >/ IT Hizmetleri </a>/ <?php echo $title; ?></p>   
        </div>

        <img src="https://bedfordgroup.com/wp-content/uploads/2017/09/our-team-banner.jpg" alt="LatestPostImg">
    </div>
<div class="container" id="blog-all-containers">
    <div class="row">
        <div class="col-md-8" id="posts-left" >
            <div class="post-single">                
                <div class="blog-post-single-img-top">
                    <img src="<?php echo $imglink; ?>" alt="LatestPostImg" >
                </div>
                
                <div id="icon-grp6">
                        <i class="far fa-calendar-check"></i>
                        <p>Ocak 21, 2020</p>
                        <i class="far fa-user"></i>
                        <p>admin</p>
                        <i class="fas fa-book "></i>
                        <p>Strateji</p>
                        <i class="far fa-comments"></i>
                        <p>1</p>
                </div>
                
                <div class="single-post-text">
                    <p><?php echo $content; ?> </p>
                </div>
                
                <!-- <div class="single-post-quote">
                    <i class="fas fa-quote-left"></i>
                    <p>We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday’s burden over again today, and then add the burden of the morrow before we are required to bear it.</p>
                    <div class="quote-author">
                        <div id="single-post-quote-line"></div>
                        <p>Robert Calibo</p>
                    </div>
                    
                </div> -->
                
                <!-- <div class="single-post-text">
                    <h2>Digital technology on the cutting edge</h2>
                    <ul>
                        <li>How will digital activities impact traditional manufacturing.</li>
                        <li>All these digital elements and projects aim to enhance .</li>
                        <li>I monitor my staff with software that takes screenshots.</li>
                        <li>Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
                        <li>Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
                    </ul>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                    </p>
                </div> -->
                
            



                











                <!-- Comments -->
                
                <div class="single-post-comment-cont">
                    <h3>1 comment on “Servo Project Joins The Linux Foundation Desco”</h3>
                    <div class="single-post-comment">
                        <div id="post-comment-img">
                             <img src="https://rstheme.com/products/html/braintech/assets/images/rstheme.png" alt="UserPic" >
                        </div>
                        <div class="single-post-comment-text">
                            <h4>Admin</h4>
                            <h5>December 3, 2020 at 8:30 am</h5>
                            <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                            <div class="comment-button-post">
                                <a href="#"><div id="blog-img-button">        
                                Reply</div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="single-post-form">
                    <div id="single-post-form-line-header2"></div>
                    <div class="row" id="single-post-form-row">
                    <h2>Leave a Reply</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    
                    <div class="col-md-6 " >
                        <form class="myForm4 text-center">
                                <div class="form-group4">
                                    <input class="myInput4" type="text" placeholder="Name*" id="name" required>
                                    <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                </div>
                        </form>
                    </div>
                    
                    <div class="col-md-6 ">
                        <form class="myForm4 text-center">
                                <div class="form-group4">
                                    <input class="myInput4" type="text" placeholder="E-mail*" id="name" required>
                                    <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                </div>
                        </form>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group4" id="explanation-form">
                                <textarea class="form-control2" id="explanation" placeholder="Your Message Here" rows="6"></textarea>
                            </div>
                            
                            <div class="comment-button-post">
                                <a href="#"><div id="blog-img-button">        
                                Post Comment</div>
                            </a>
                            </div>
                        </div>
                        
                        
                    </div> 
                    
                
                
                </div>


                

                

            </div>
        </div>
            
            
        
        
        
        <div class="col-md-4" id ="blog-right-menu">
            <div id="search-box-blog">
                <div class="form-group"> 
                    <form class="myForm" >
                        <input class="myInput3" type="Text" placeholder="Arama" id="search-blog" required>
                        <a href="#"><div class="icon-grp4 text-center"><i class="fas fa-search"></i></div>  </a>
                    </form>
                </div>
            </div>
            <div id="latest-posts-blog">
                <div id ="latest-posts-header">
                    <h4>Son Gönderiler</h4>
                    <div id="latest-posts-line-header">
                    </div>
                </div>
                
                <div id="post-latest">
                    <div id="categories-btw-lines">
                        </div>
                
                    <div id="latest-posts-post">

                        <div id="latest-post-line">
                        </div>
                        <div id="latest-posts-img">
                            <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" alt="LatestPostImg" >
                        </div>

                        <h5><a href="blog-detail.php">Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</a></h5>
                    </div>
                        <div id="icon-grp5">
                            <i class="far fa-calendar-alt"></i>
                            <p>Ocak 21, 2020</p>
                        </div>

                </div>
                
                <div id="post-latest">
                    <div id="categories-btw-lines">
                        </div>
                
                    <div id="latest-posts-post">

                        <div id="latest-post-line">
                        </div>
                        <div id="latest-posts-img">
                            <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/2.jpg" alt="LatestPostImg" >
                        </div>

                        <h5><a href="blog-detail.php">Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</a></h5>
                    </div>
                        <div id="icon-grp5">
                            <i class="far fa-calendar-alt"></i>
                            <p>Ocak 21, 2020</p>
                        </div>

                </div>
                
                <div id="post-latest">
                    <div id="categories-btw-lines">
                        </div>
                
                    <div id="latest-posts-post">

                        <div id="latest-post-line">
                        </div>
                        <div id="latest-posts-img">
                            <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/3.jpg" alt="LatestPostImg" >
                        </div>

                        <h5><a href="blog-detail.php">Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</a></h5>
                    </div>
                        <div id="icon-grp5">
                            <i class="far fa-calendar-alt"></i>
                            <p>Ocak 21, 2020</p>
                        </div>

                </div>
                
                <div id="post-latest">
                    <div id="categories-btw-lines">
                        </div>
                
                    <div id="latest-posts-post">

                        <div id="latest-post-line">
                        </div>
                        <div id="latest-posts-img">
                            <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/4.jpg" alt="LatestPostImg" >
                        </div>

                        <h5><a href="blog-detail.php">Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</a></h5>
                    </div>
                        <div id="icon-grp5">
                            <i class="far fa-calendar-alt"></i>
                            <p>Ocak 21, 2020</p>
                        </div>

                </div>
                
                
            </div>
            
            <div id="categories-blog">
                <div id ="latest-posts-header">
                    <h4>Kategoriler</h4>
                    <div id="categories-line-header">
                    </div>
                </div>
                
                <div id="categories-names">
                    <ul>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Uygulama Testi</a></li>
                        
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Yapay Zeka</a></li>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Dijital Teknoloji</a></li>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">IT Hizmetleri</a></li>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Yazılım Geliştirme</a></li>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Web Geliştirme</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script> 
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
                    <li><a href="panel/index.php">Panel</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</footer>
</html>