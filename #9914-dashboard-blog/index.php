<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
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
                <li class="nav-item"><a class="nav-link" href="#"> Hakk??m??zda </a></li>
                
    
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

                <li class="nav-item"><a class="nav-link" href="contact.php"> ??leti??im </a></li>
    
                
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
            <h3>Blog</h3>
            <p><a href="" >Ana Sayfa </a>/ Blog</p>   
        </div>

        <img src="https://bedfordgroup.com/wp-content/uploads/2017/09/our-team-banner.jpg" alt="LatestPostImg">
    </div>
<div class="container" id="blog-all-containers">
    <div class="row">
        <div class="col-md-8" id="posts-left" >
            <div id ="blog-post">
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" alt="LatestPostImg" >
                    
                    <a href="#"><div id="blog-img-button">        
                        Uygulama Testi
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Servo Project Linux Fold Desco'ya Kat??ld??</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="#"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
                    </div>
                </div>
            </div>
            
            
            
            <div id ="blog-post">
                
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/2.jpg" alt="LatestPostImg" >
                    
                    <a href="#"><div id="blog-img-button">        
                        Uygulama Testi
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="#"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
                    </div>
                </div>
            </div>
            
            
            
            <div id ="blog-post">
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/3.jpg" alt="LatestPostImg" >
                    
                    <a href="#"><div id="blog-img-button">        
                        Yaz??l??m Geli??tirme
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="blog-detail.php"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
                    </div>
                </div>
            </div>
            
            
            
            <div id ="blog-post">
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/4.jpg" alt="LatestPostImg" >
                    
                    <a href="blog-detail.php"><div id="blog-img-button">        
                        Web Geli??tirme
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="#"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
                    </div>
                </div>
            </div>
            
            
            <div id ="blog-post">
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/5.jpg" alt="LatestPostImg" >
                    
                    <a href="#"><div id="blog-img-button">        
                        Uygulama Testi
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Servo Project Linux Fold Desco'ya Kat??ld??</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="#"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
                    </div>
                </div>
            </div>
            
            
            <div id ="blog-post">
                <div id="blog-post-img">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/6.jpg" alt="LatestPostImg" >
                    
                    <a href="#"><div id="blog-img-button">        
                        Uygulama Testi
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine ??zg?? bir ziyaret??i y??netim s??reci bulunmaktad??r. Geli??tirdi??imiz ????z??m mod??ler bir yap??da tasarlanm????t??r. Kurumunuzun ihtiya??lar??na g??re ??zelle??tirilebilir....</p>
                    </div>
                    
                       <div id="blog-post-more">
                           <a href="#"><p>Ocak 21, 2020</p>
                           <i class="fas fa-arrow-right"></i></a>     
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
                    <h4>Son G??nderiler</h4>
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

                        <h5><a href="blog-detail.php">Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</a></h5>
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

                        <h5><a href="blog-detail.php">Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</a></h5>
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

                        <h5><a href="blog-detail.php">Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</a></h5>
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

                        <h5><a href="blog-detail.php">Evde Kalmay?? Kolayla??t??ran Teknolojik ??r??nler</a></h5>
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
                        </div><a href="#">Yaz??l??m Geli??tirme</a></li>
                        <li><div id="categories-btw-lines">
                        </div><a href="#">Web Geli??tirme</a></li>
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
                <p>Yenilik??i ve giri??imci ruhumuz ile hareket ediyor, her i??imizi de??erlerimiz ??????????nda en do??ru ??ekilde yap??yoruz.</p>
            
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
                <h2>Bili??im Hizmetleri</h2>
                
                <a href="#"><p>Yaz??l??m Geli??tirme</p></a>
                <a href="#"><p>Web Geli??tirme</p></a>
                <a href="#"><p>Analitik ????z??mler</p></a>
                <a href="#"><p>Cloud and DevOps</p></a>
                <a href="#"><p>Proje Tasar??m??</p></a>
                
            
            </div>
            
            <div class="col-md-3" id="contact-footer">
                <h2>??leti??im Bilgileri</h2>
                <div class="footer-first-icons">
                    <div class="icon-grp2">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Muallimk??y Mah. Deniz Cad.</p>
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
                        <p>??al????ma Saatleri: 09:00 - 17:00</p>
                    </div>
                </div>
            
            </div>
            
            <div class="col-md-3" id="footer-news">
                <h2>Haberler</h2>
                <p>Ofisimiz T??rkiye'nin en b??y??k teknoparklar??ndan birisi olan Bili??im Vadisi i??erisinde yer almaktad??r. </p>
            
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
                <p>?? 2021 T??m Haklar?? Sakl??d??r.</p>
            </div>
            
            <div class="col-md-8 ">
                <ul id ="footer-bottom-right-nav">
                    <li><a href="#">Ana Sayfa</a></li>
                    <li><a href="#">Hakk??m??zda</a></li>
                    <li><a href="index.php">Blog</a></li>
                    <li><a href="#">Ma??aza</a></li>
                    <li><a href="#">SSS</a></li>
                    <li><a href="panel/index.php">Panel</a></li>
                </ul>
            </div>
            
        </div>
    </div>
</footer>
</html>