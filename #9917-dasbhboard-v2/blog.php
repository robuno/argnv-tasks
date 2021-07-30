<?php 
    include 'panel/process.php'; 
?>

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
            
            <?php
            $query = "SELECT * FROM  datacontent ORDER BY ID ASC";
            $result = mysqli_query($conn, $query);
        
            
            while($row = mysqli_fetch_array($result))
                {

                    echo '
                    <div id ="blog-post">
                    <div id="blog-post-img">
                        <img src="'.$row["imglink"].'" alt="LatestPostImg" >
                        
                        <a href="#"><div id="blog-img-button">        
                            Uygulama Testi
                        </div></a>
                    </div>
                    <div id="blog-post-content">
                    <a href="blog-detail.php?id='.$row["id"].'"><h2>'.$row["title"].'</h2></a>
                        
                        <div id="icon-grp6">
                                <i class="far fa-calendar-check"></i>
                                <p>Ocak 21, 2020</p>
                                <i class="far fa-user"></i>
                                <p>admin</p>
                        </div>
                        
                        <div icon="blog-post-text">
                            ';
                            
                            $wordOfContent = explode(" ",$row["content"]); 
                            $countWord = count($wordOfContent);
                            $limitContent = 40;
                            if($countWord <= $limitContent) { $cutContent = $countWord*50/100; } 
                            else { $cutContent = $limitContent; } 
                            
                            for($i = 0; $i <= $cutContent; $i++)
                            { echo strip_tags($wordOfContent[$i]).' ' ; }
                        
                            echo '...
                        </div>
                        
                           <div id="blog-post-more">
                               <a href="#"><p>Ocak 21, 2020</p>
                               <i class="fas fa-arrow-right"></i></a>     
                        </div>
                    </div>
                </div>  ';
                }
        
            ?>
        
            <!--
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
            -->

        </div>
            <!-- Right Menu + Search Box + Latest Posts -->

            <?php include 'right-menu.php'; ?>
        
            <!-- Categories -->

            <?php include 'categories.php'; ?>
            
    </div>
</div>      
<script src="script.js"></script>      
</body>
    
<!-- Footer -->

<?php include 'footer.php'; ?>
</html>