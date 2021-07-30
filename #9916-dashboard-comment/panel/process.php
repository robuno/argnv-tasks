<?php
session_start();
include "db_conn.php";

$path = $_SERVER["SCRIPT_NAME"];
$file = basename($path);


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
                    <td><a href="dashboard.php?action=duzenle&id='.$row["id"].'">Düzenle</a>-<a href="dashboard.php?action=sil&id='.$row["id"].'">Sil</a></td>
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
                <td>İşlemler</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["title"].'</td>
                    <td><a href="dashboard_blog.php?action=duzenle&id='.$row["id"].'">Düzenle</a>-<a href="dashboard_blog.php?action=sil&id='.$row["id"].'">Sil</a></td>
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
                <td>Yorum</td>
            </tr>
        </thead>';

    while($row = mysqli_fetch_array($result))
        {
            echo '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["blogID"].'</td>
                    <td>'.$row["nameComment"].'</td>
                    <td>'.$row["emailComment"].'</td>
                    <td>'.$row["messageComment"].'</td>
                </tr>
            ';
        }
        echo '            </table>
        </div>';
}
?>