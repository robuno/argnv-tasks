<?php 
    setlocale (LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
?>

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

                <?php
            $query = "SELECT * FROM datacontent ORDER BY ID DESC LIMIT 4";
            $result = mysqli_query($conn, $query);
        
                
            while($row = mysqli_fetch_array($result) )
                {
                    $postdate =$row["postdate"]; 
                    $datetotext =strftime("%e %B, %Y", strtotime($postdate));
                    echo '
                    
                    <div id="post-latest">
                    <div id="categories-btw-lines">
                        </div>
                
                    <div id="latest-posts-post">

                        <div id="latest-post-line">
                        </div>
                        <div id="latest-posts-img">
                            <img src="'.$row["imglink"].'" alt="LatestPostImg" >
                        </div>

                        <h5><a href="blog-detail.php?id='.$row["id"].'">'.$row["title"].'</a></h5>
                    </div>
                        <div id="icon-grp5">
                            <i class="far fa-calendar-alt"></i>
                            <p>'.$datetotext.'</p>
                        </div>

                    </div>';

                }

                
            ?>
                

                
                
            </div>