<?php

include 'process.php'; 



if (isset($_GET["id"])) {  $id = $_GET["id"]; }


$action = "";
if (isset($_GET["action"])) {$action = $_GET["action"];} 
if (isset($_POST["action"])) {$action = $_POST["action"];} 

//echo $action;

if (isset($_POST["uname"])) {$uname = $_POST["uname"];} 
if (isset($_POST["password"])) {$password = $_POST["password"];} 
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


    <div class="container" id="container-form-dash" >
        <div class="myCard3">
            <div class="row" id="panel-head-info-row">
                <div class="col-md-6">
                    <p>
                    <?php
                        $sql_content="SELECT count(*) AS total FROM postcomment";
                        $result_content=mysqli_query($conn,$sql_content);
                        $data_content=mysqli_fetch_assoc($result_content);


                        echo '<i class="far fa-comments"></i> Toplam Yorum Sayısı: '.$data_content['total'].'';
                    ?> 

                    </p>

                    <p>
                    <?php
                        $query = "SELECT * FROM postcomment ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            echo '<i class="fas fa-file-import"></i> Son Yorum Yapılan Gönderi: <a href="blog-detail.php?id='.$row["blogID"].'">'.$row['blogID'].'</a>';
                        }
                    ?> 

                    </p>
                     
                </div>    
                <div class="col-md-6">
                    <p>
                    <?php
                        $query = "SELECT * FROM postcomment ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            echo '<i class="far fa-user"></i> Son Yorum Gönderen: '.$row['nameComment'].'';
                        }
                        
                    ?>  
                    </p>
                    
                    <p>

                    <?php
                        $query = "SELECT * FROM postcomment ORDER BY ID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result) ) {
                            echo '<i class="far fa-envelope"></i> Son Yorum Gönderen E-Mail: '.$row['emailComment'].'';
                        }
                        
                    ?>  

                    
                    </p>


                </div>             
        </div>      
    </div>

    <div class="container" id="table-new-user">
        <div class="row">
            <!-- <div class="col"> -->
                         
                <?php
                    tableShowComment();
                ?>   
            <!-- </div> -->

        </div>
    </div>
<script src="script.js"></script>      
</body>
    

</html>

<script>
    $(document).ready(function(){
        $('user_name_data').DataTable();
    });
</script>

