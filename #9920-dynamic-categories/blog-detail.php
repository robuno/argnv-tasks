<?php 
    setlocale (LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
    include 'panel/process.php';

    //echo $path ;
    if (isset($_GET["id"])) {  $id = $_GET["id"]; }

    $query = "SELECT * FROM  datacontent where ID='$id'";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            $title =$row["title"];
            $imglink =$row["imglink"];
            $content =$row["content"];
            $keywords =$row["keywords"];
            $postdate =$row["postdate"]; 
        }

        $actionComment = "";
        if (isset($_POST["actionComment"])) {$actionComment = $_POST["actionComment"];} 

        if($actionComment == "kaydet")
        {

            if (isset($_POST["emailComment"])) {$emailComment = $_POST["emailComment"];} 
            if (isset($_POST["nameComment"])) {$nameComment = $_POST["nameComment"];} 
            if (isset($_POST["messageComment"])) {$messageComment = $_POST["messageComment"];}
            if (isset($_POST["commentdate"])) {$commentdate = $_POST["commentdate"];}
            if (isset($_POST["blogID"])) {  $blogID = $_POST["blogID"]; }
            //kayıt işlemi

            $kaydet = "INSERT INTO postcomment (nameComment, emailComment, messageComment, blogID) VALUES('$nameComment', '$emailComment', '$messageComment', '$blogID')";

                        if ($conn -> query($kaydet)) {                     
                            // echo 'Kaydedildi!';
              
                        } else {
                            echo $conn->error;
                        } 
        }

?>

<!DOCTYPE html>

<html lang="tr">
<head>
    <title><?php echo $title; ?></title>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php 
        $pos=strpos($content, ' ', 200);
        echo strip_tags(substr($content,0,$pos));?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="blog-detail.php?id=<?php echo $id; ?>" rel="canonical">

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
                        <p><?php echo strftime("%e %B, %Y", strtotime($postdate)); ?></p>
                        <i class="far fa-user"></i>
                        <p>admin</p>
                        <i class="fas fa-book "></i>
                        <p>Strateji</p>
                        <i class="far fa-comments"></i>
                        <p>1</p>
                </div>
                
                <div class="single-post-text">
                    <?php echo $content; ?> 
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
                    <?php 
                    
                        $sql_comment="SELECT count(*) AS total FROM postcomment WHERE blogID='$id'";
                        $result_comment=mysqli_query($conn,$sql_comment);
                        $data_comment=mysqli_fetch_assoc($result_comment);

                        if($data_comment['total'] > 0) {
                            echo '<h3>'.$title.' için  '.$data_comment['total'].' yorum bulundu.</h3>';
                        }
                    ?>
                
                <?php 
                $query = "SELECT * FROM  postcomment WHERE blogID='$id' ORDER BY ID DESC";
                $result = mysqli_query($conn, $query);
        
            
                while($row = mysqli_fetch_array($result))
                { 
                    $commentdate =$row["commentdate"]; 
                    $datetotext =strftime("%e %B, %Y %H:%M", strtotime($commentdate));
                    echo '
                    <div class="single-post-comment">
                    <div id="post-comment-img">
                         <img src="https://rstheme.com/products/html/braintech/assets/images/rstheme.png" alt="UserPic" >
                    </div>
                    <div class="single-post-comment-text">
                        <h4>'.$row["nameComment"].'</h4>
                        <h5>'.$datetotext.'</h5>
                        <p>'.$row["messageComment"].'</p>
                        <div class="comment-button-post">
                            <a href="#makecomment"><div id="blog-img-button">        
                            Cevapla</div>
                        </a>
                        </div>
                    </div>
                </div>';

                }
                
                ?>
                </div>


                <div class="single-post-form" id="makecomment"> 
                    <form action="blog-detail.php?id=<?php echo $id; ?>" method="POST">
                    <input type="hidden" name="actionComment" value="kaydet">
                    <input type="hidden" name="blogID" value="<?php echo $id; ?>">
                    
                    
                    <div id="single-post-form-line-header2"></div>
                        <div class="row" id="single-post-form-row">
                            <h2>Yorum Bırakın</h2>
                            <p>E-mail adresiniz paylaşılmayacaktır. Gerekli alanlar işaretlenmiştir *</p>
                        
                            <div class="col-md-6" >
                                        <div class="form-group4">
                                            <input class="form-control2" type="text" placeholder="İsim*" name="nameComment" id="nameComment" required>
                                            <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                        </div>
                            </div>
                            
                            <div class="col-md-6" >
                                        <div class="form-group4">
                                        <input class="form-control2" type="text" placeholder="E-mail*" name="emailComment" id="emailComment" required>
                                            <div class="invalid-feedback">Lütfen doldurunuz.</div>
                                        </div>
                            </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group4" id="explanation-form">
                            <textarea class="form-control2" id="explanation" placeholder="Mesajınız" name="messageComment" rows="6"></textarea>    
                            </div>
                            <button type="submit" id="blog-img-button" >Gönder</button>
                        </div>
  
                    </div> 
                    </form>
                
                </div>
            </div>
        </div>
            

        <!-- Right Menu + Search Box + Latest Posts -->

        <?php include 'right-menu.php'; ?>

            <!-- Categories -->
            <?php include 'categories.php'; ?>
        </div>
    </div>
</div>
<script src="script.js"></script> 
</body>
    
<!-- Footer -->

<?php include 'footer.php'; ?>
</html>