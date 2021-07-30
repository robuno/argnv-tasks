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
    <?php include "header-top.php" ?>  
    <?php include "nav-bottom.php" ?>  
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
                    <a href="blog-detail.php"><h2>Servo Project Linux Fold Desco'ya Katıldı</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
                    <a href="blog-detail.php"><h2>Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
                        Yazılım Geliştirme
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
                        Web Geliştirme
                    </div></a>
                </div>
                <div id="blog-post-content">
                    <a href="blog-detail.php"><h2>Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
                    <a href="blog-detail.php"><h2>Servo Project Linux Fold Desco'ya Katıldı</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
                    <a href="blog-detail.php"><h2>Evde Kalmayı Kolaylaştıran Teknolojik Ürünler</h2></a>
                    
                    <div id="icon-grp6">
                            <i class="far fa-calendar-check"></i>
                            <p>Ocak 21, 2020</p>
                            <i class="far fa-user"></i>
                            <p>admin</p>
                    </div>
                    
                    <div icon="blog-post-text">
                        <p>Her kurumun kendine özgü bir ziyaretçi yönetim süreci bulunmaktadır. Geliştirdiğimiz çözüm modüler bir yapıda tasarlanmıştır. Kurumunuzun ihtiyaçlarına göre özelleştirilebilir....</p>
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
            
            <!-- Categories -->
            <?php include 'categories.php'; ?>
        </div>
    </div>
</div>      
<script src="script.js"></script>      
</body>
    

<?php include "footer.php" ?>  

</html>