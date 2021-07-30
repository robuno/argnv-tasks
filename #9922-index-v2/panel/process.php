<?php
session_start();
include "db_conn.php";

$path = $_SERVER["SCRIPT_NAME"];
$file = basename($path);

function getNameofRow($sqldb) {
    global $conn;
    $result = $conn->query($sqldb);
    $result2 = mysqli_fetch_array($result);
    return $result2[0];
}

function tableShow() {
    global $conn;
    $query = "SELECT * FROM  users ORDER BY ID ASC";
    $result = mysqli_query($conn, $query);
    
    echo '<div  class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Kullanici Adi</td>
                <td>İşlemler</td>
            </tr>
        </thead>';
   
    while($row = mysqli_fetch_array($result))
        {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["user_name"].'</td>
                    <td><a href="dashboard.php?action=duzenle&id='.$row["id"].'"><i class="far fa-edit"></i>Düzenle</a><a href="dashboard.php?action=sil&id='.$row["id"].'" id="remove-icon"><i class="far fa-trash-alt"></i>Sil</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}

function tableShowBlog() {
    global $conn;
    $query = "SELECT * FROM  datacontent ORDER BY ID ASC";
    $result = mysqli_query($conn, $query);
    
    echo '<div  class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Blog Başlık</td>
                <td>Kategori Adı</td>
                <td>Anahtar Kelimeler</td>
                <td>Gönderilme Tarihi</td>
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            $date = date_create($row["postdate"]);
            $categoryID = $row["categoryID"];

            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.getNameofRow("SELECT categoryname FROM categoriesdb WHERE id='$categoryID'").'</td>
                    <td>'.$row["keywords"].'</td>
                    <td>'.date_format($date, 'd.m.Y').'</td>
                    <td><a href="dashboard_blog.php?action=duzenle&id='.$row["id"].'"><i class="far fa-edit"></i>Düzenle</a><a href="dashboard_blog.php?action=sil&id='.$row["id"].'" id="remove-icon"><i class="far fa-trash-alt"></i>Sil</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}

function tableShowComment() {
    global $conn;
    $query = "SELECT * FROM  postcomment ORDER BY ID DESC";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM  datacontent ORDER BY ID ASC";
    $result2 = mysqli_query($conn, $query2);

    // while($row_commenttable = mysqli_fetch_array($result)) {
    //     while($row_contenttable = mysqli_fetch_array($result2)) {
    //         if ($row_commenttable["blogID"] == $row_contenttable["id"] ) {
    //             echo $row_contenttable["title"];
    //         }
    //     }
    // }

    echo '<div class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Yorum Yapılan Başlık ID</td>
                <td>Yorum Yapan</td>
                <td>Yorum Yapan E-Mail</td>
                <td>Yorum Tarihi</td>
                <td>Yorum</td>
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            $date = date_create($row["commentdate"]);
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["blogID"].'</td>
                    <td>'.$row["nameComment"].'</td>
                    <td>'.$row["emailComment"].'</td>
                    <td>'.date_format($date, 'd.m.Y H:i:s').'</td>
                    <td>'.$row["messageComment"].'</td>
                    <td><a href="../blog-detail.php?id='.$row["blogID"].'"><i class="far fa-arrow-alt-circle-right"></i>Blog Gönderisine Git</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}


function tableShowCategories() {
    global $conn;
    $query = "SELECT * FROM categoriesdb ORDER BY ID ASC";
    $result = mysqli_query($conn, $query);

    echo '<div class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Kategori Adı</td>
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["categoryname"].'</td>
                    <td><a href="dashboard_category.php?action=duzenle&id='.$row["id"].'"><i class="far fa-edit"></i>Düzenle</a><a href="dashboard_category.php?action=sil&id='.$row["id"].'" id="remove-icon"><i class="far fa-trash-alt"></i>Sil</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}

function tableShowProjects() {
    global $conn;
    $query = "SELECT * FROM projects ORDER BY ID ASC";
    $result = mysqli_query($conn, $query);

    echo '<div class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Proje Adı</td>
                <td>Kategori Adı</td>
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            $categoryID = $row["categoryID"];
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.getNameofRow("SELECT categoryname FROM categoriesdb WHERE id='$categoryID'").'</td>
                    <td><a href="dashboard_projects.php?action=duzenle&id='.$row["id"].'"><i class="far fa-edit"></i>Düzenle</a><a href="dashboard_projects.php?action=sil&id='.$row["id"].'" id="remove-icon"><i class="far fa-trash-alt"></i>Sil</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}

function tableShowPrices() {
    global $conn;
    $query = "SELECT * FROM prices ORDER BY ID ASC";
    $result = mysqli_query($conn, $query);

    echo '<div class="table-responsive">

    <table id="user_name_data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Paket Adı</td>
                <td>Fiyatı</td>
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.$row["price"].'</td>
                    <td><a href="dashboard_prices.php?action=duzenle&id='.$row["id"].'"><i class="far fa-edit"></i>Düzenle</a><a href="dashboard_prices.php?action=sil&id='.$row["id"].'" id="remove-icon"><i class="far fa-trash-alt"></i>Sil</a></td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}
?>

