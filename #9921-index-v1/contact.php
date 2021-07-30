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
    <?php include "header-top.php" ?>  
    <?php include "nav-bottom.php" ?>  
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
    
<!-- Footer -->

<?php include 'footer.php'; ?>

<script src="script.js"></script>
</body>


</html>