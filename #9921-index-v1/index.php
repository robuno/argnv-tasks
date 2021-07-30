<?php 
    setlocale (LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
    include 'panel/process.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ana Sayfa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 80) { 
			//alert("a");
            $('#nb').removeClass('nbR'); 
			$('#nb').addClass('nbF');
		}
        if ($(window).scrollTop() >= 200) { 
			// alert("a");
			$('#about-us-left img').addClass('AnimateMe');
		}
        if ($(window).scrollTop() >= 960) { 
			// alert("a");
			$('.categories-card').addClass('AnimateMe');
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">   
                <?php 
                    $query = "SELECT * FROM datacontent ORDER BY ID DESC LIMIT 4";
                    $result = mysqli_query($conn, $query);

                    $lastID = 0;    
                    while($row = mysqli_fetch_array($result) ) {
                        if ($row["id"] > $lastID) {
                            $lastID = $row["id"];
                            $selectedActive = 'active';
                        } else {
                            $selectedActive = '';
                        }

                        echo '
                        <div class="carousel-item '.$selectedActive.'">
                            <img class="d-block w-100" src="'.$row["imglink"].'" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                
                                <h5>'.$row["title"].'</h5>
                                <div class="carousel-buttons">
                                    <a href="blog-detail.php?id='.$row["id"].'"><button >Gönderiye Git</button>
                                    <div class="carousel-button-gray">
                                        <a href="categories_detail.php?id='.$row["categoryID"].'"><button >Hizmetlere Göz At</button></a>
                                    </div>
                                </div>
                            </div>    
                        </div>';
                    }
                ?>
            
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>


    <div class="container" id="about-us-index">
        <div class="row"> 
            <div class="col-md-4" id="about-us-left">
                <img src="https://rstheme.com/products/html/braintech/assets/images/about/main-home/about-part-1.png" alt="people-about-us">
                
            </div>
            <div class="col-md-8" id="about-us-right">
                <h4>Hakkımızda</h4>
                <h1>İş Başarımızı Teknoloji İle Arttırıyoruz</h1>
                <p>25 yılı aşkın bir süredir dünyanın her yerindeki müşteriler için yazılım uygulamaları ve mobil uygulamalar geliştiren BT hizmetlerinde çalışmaktadır.</p>
                
                <div class="progress-all">
                    <h2>Yazılım Geliştirme</h2>
                    <div class="progress">
                        
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 92%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress-all">
                    <h2>Siber Güvenlik</h2>
                    <div class="progress">
                        
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress-all">
                    <h2>Yapay Zeka</h2>
                    <div class="progress">
                        
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 78%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress-all">
                    <h2>Web Hizmetleri</h2>
                    <div class="progress">
                        
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <a href=""><button >Daha Fazla Bilgi Al</button></a>
                
            </div>
        </div>
    </div>

    <div class="container" id="categories-services">
        <h4>Servislerimiz</h4>
        <h1>Bilişim Çözümleri Hizmetlerini Sunuyoruz</h1>
        <div class="row" id="categories-services-row">
        <?php 
        $query = "SELECT * FROM  categoriesdb ORDER BY ID ASC"; 
        $result = mysqli_query($conn, $query); 

        while($row = mysqli_fetch_array($result) ) 
        { echo ' <div class="col-4" >
            <div class="categories-card">
                <div class="categories-icon">
                    <img src="'.$row["iconlink"].'">
                </div>
                <a href=""><h3>'.$row["categoryname"].'</h3></a>
                <p>'.$row["explanation"].'</p>
            </div>
        </div>'; } 
        ?>
        </div>

    </div>
    
<script src="script.js"></script>      
</body>
    
<!-- Footer -->

<?php include 'footer.php'; ?>
</html>