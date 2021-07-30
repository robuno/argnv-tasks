<?php
session_start();
include "db_conn.php";

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






?>