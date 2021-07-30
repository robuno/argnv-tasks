<div id="categories-blog">
                <div id ="latest-posts-header">
                    <h4>Kategoriler</h4>
                    <div id="categories-line-header">
                    </div>
                </div>
                
                <div id="categories-names">
                    <ul>
                        <?php 
                        $query = "SELECT * FROM  categoriesdb ORDER BY ID ASC";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) {
                            echo '
                            <li><div id="categories-btw-lines">
                            </div><a href="categories_detail.php?id='.$row["id"].'">'.$row["categoryname"].'</a></li>
                            ';
                        } ?> 
                    </ul>
                </div>
            </div>
        </div>