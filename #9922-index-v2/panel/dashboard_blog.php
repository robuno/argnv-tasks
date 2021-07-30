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
if (isset($_POST["categoryID"])) {  $categoryID = $_POST["categoryID"]; }
if (isset($_POST["keywords"])) {  $keywords = $_POST["keywords"]; }
if (isset($_POST["postdate"])) {  $postdate = $_POST["postdate"]; }
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
    <?php include "nav-bottom.php" ?>  
</header>  
    
<body>
    <?php include "panel-navbar.php" ?>
    
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
                            $categoryID = $row["categoryID"];
                            $keywords = $row["keywords"];
                            $postdate = $row["postdate"];
                        }

                        $catlist='';
                        $queryCategory = "SELECT * FROM categoriesdb ORDER BY ID ASC";
                        $resultCategory = mysqli_query($conn, $queryCategory);
                        while ($row = @mysqli_fetch_array($resultCategory)) {

                            if ($row["id"] == $categoryID) {
                                $selectedCat = ' selected';
                            }
                            else {
                                $selectedCat ='';
                            }
                            $catlist .= '<option value="'.$row["id"].'" '.$selectedCat.'>'.$row["categoryname"].'</option>';
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
                        <label>Kategori</label>
                        <select name="categoryID" class= "form-class-selector">              
                        '.$catlist.'
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <h5><i class="fas fa-exclamation-circle"></i>Anahtar kelimelerde Türkçe karakter kullanmayınız.</h5>
                            <input type="text" name="keywords" class="form-control" value="'.$keywords.'">
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
                        datacontent.keywords = '$keywords',
                        datacontent.categoryID = '$categoryID',
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
                        $kaydet = "INSERT INTO datacontent (title, content, imglink, categoryID, keywords) VALUES('$title', '$content', '$imglink', '$categoryID', '$keywords')";

                        if ($conn -> query($kaydet)) {                     
                            echo 'Kaydedildi!';
              
                        } else {
                            echo $conn->error;
                        } 
                    
                    } 


                    else if ($action=='yeni') 
                    {
                        $catlist='';
                        $queryCategory = "SELECT * FROM categoriesdb ORDER BY ID ASC";
                        $resultCategory = mysqli_query($conn, $queryCategory);
                        while ($row = @mysqli_fetch_array($resultCategory)) {
                            $catlist .= '<option value="'.$row["id"].'">'.$row["categoryname"].'</option>';
                        }
                        
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
                        <label>Kategori</label>
                        <select name="categoryID">
                        
                        '.$catlist.'

                            

                        </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <h5><i class="fas fa-exclamation-circle"></i>Anahtar kelimelerde Türkçe karakter kullanmayınız.</h5>
                            <input type="text" name="keywords" class="form-control" value="">
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

    <div class="container" id="container-form-dash" >
        <div class="myCard3">
            <div class="row" id="panel-head-info-row">
                <div class="col-md-6">
                <p>
                    <?php
                        $sql_content="SELECT count(*) AS total FROM datacontent";
                        $result_content=mysqli_query($conn,$sql_content);
                        $data_content=mysqli_fetch_assoc($result_content);


                        echo '<i class="far fa-list-alt"></i> Toplam Blog Gönderisi Sayısı: '.$data_content['total'].'';
                    ?> 
                </p>    
                <p>        
                    <?php
                        $query = "SELECT * FROM datacontent ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            $date = date_create($row["postdate"]);
                            echo '<i class="far fa-calendar-alt"></i> Son Gönderi Tarihi: '.date_format($date, 'd.m.Y').'';
                        }  
                    ?> 
                </p>    
                </div>    
                <div class="col-md-6">
                <p>
                    <?php
                        $query = "SELECT * FROM datacontent ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            echo '<i class="far fa-newspaper"></i> Son Gönderilen Blog Gönderisi: <a href="blog-detail.php?id='.$row["id"].'">'.$row['title'].'</a>';
                        }  
                    ?>  
                </p>
                <p>    
                <?php
                        $query = "SELECT * FROM datacontent ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            $categoryID = $row["categoryID"];
                            echo '<i class="far fa-folder"></i> Son Gönderi Yapılan Kategori: <a href="../categories_detail.php?id='.$row["categoryID"].'">'.getNameofRow("SELECT categoryname FROM categoriesdb WHERE id='$categoryID'").'</a>';
                        }  
                    ?> 
                </p>
                </div>             
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


</html>


<script>
    $(document).ready(function(){
        $('user_name_data').DataTable();
    });
</script>

