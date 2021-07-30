<!DOCTYPE html>
<html>
<head>
    <title>Header+İletişim Formu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    
    <div class="container" id="container-form" >
        <div class="myCard">
            <div class="row">
                <div class="col-md-4">
                    <div class="myRightCtn">
                        
                        <div class="box">
                            <h2>İletişim</h2>
                            <header>Deneyimli Mühendislerimiz ile İletişim Kurun.</header>
                            <div class="contact-left-group">
                                <div class="icon-grp bg-white rounded-circle text-center">
                                    <i class="fas fa-home"></i>
                                </div>
                                
                                <div class="left-group-text">
                                    <h5>Email:</h5>
                                    <p>info@argenova.com.tr</p>
                                </div>
                            </div>

                            <div class="contact-left-group">
                                <div class="icon-grp bg-white rounded-circle text-center">
                                    <i class="fas fa-phone "></i>
                                </div>
                                
                                <div class="left-group-text">
                                    <h5>Telefon:</h5>
                                    <p>(532) 134-0757</p>
                                </div>
                            </div>
                            
                            <div class="contact-left-group">
                                <div class="icon-grp bg-white rounded-circle text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                
                                <div class="left-group-text">
                                    <h5>Adres</h5>
                                    <p>Muallimköy Mah. Deniz Cad.</p> 
                                    <p>No: 143/5 Kat: 2 Kapı No: 23</p>
                                    <p>Gebze / Kocaeli</p> 
                                    
                                </div>
                                                     
                            </div>
                            
                            <img src="https://www.argenova.com.tr/assets/images/logo.svg" alt="Argenova" >
                        </div>      
                    </div>
                </div>
                
                 
                <div class="col-md-8">
                    <div class="form-right">
                        <div class="row" id="right-welcome">
                            <h3>Bizimle İletişime Geçin</h3>
                            <header>Aşağıdaki Formu Doldurabilirsiniz</header>
                            <small id="demo"></small>
                        </div>
                        
                        <form class="myForm text-center" id="myForm" onsubmit="return myFunction()" action="contact.php">
                        <!-- <form class="myForm text-center" id="myForm">     -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="myLeftCtn">
                                        <div class="form-group">
                                            <input class="myInput" type="text" placeholder="İsim Soyisim" id="username" required>
                                            <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                        </div>
                                        <div class="form-group">

                                            <input class="myInput" type="text" placeholder="Telefon Numaranız" id="phone" required>
                                            <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                        </div>
                                </div>
                            </div>     
                        
                            <div class="col-md-6">
                                <div class="myLeftCtn ">
                                        <div class="form-group">
                                            
                                            <input class="myInput" type="password" placeholder="Şifre" id="password" required>
                                            <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <input class="myInput" type="Email" placeholder="Email" id="email" required>
                                        </div>
                                </div>
                            </div>
                        </div>    
                        <div class="row " id="last2rows">
                            <div class="col-md-12">
                                <div class="myLeftCtn ">
                                    
                                        <div class="form-group">
                                            
                                            <select id="gender" class="form-control">
                                                <option selected>Cinsiyet</option>
                                                <option>Bay</option>
                                                <option>Bayan</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group" id="explanation-form">
                                            <textarea class="form-control" id="explanation" placeholder="Açıklama" rows="6"></textarea>
                                        </div>
                    
                                    <button class="btn btn-primary" onclick="myFunction()" >Gönder</button>
                                
                                </div>
                            </div>    
                        </div>

                        </form> 

                    </div>      
                </div> 
                  
        </div>              
    </div>


    
               
<div id="maps-google">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17336.273833899846!2d29.51544493504388!3d40.790345905207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9da4a8874a99c217!2sArgenova%20Teknoloji!5e0!3m2!1str!2str!4v1623866736936!5m2!1str!2str" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
</div> 
    
    

    
    
    
    
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
                        <input class="myInput2" type="Email" placeholder="E-mail adresiniz" id="email2" required>
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




<script src="script.js"></script>
</body>


</html>