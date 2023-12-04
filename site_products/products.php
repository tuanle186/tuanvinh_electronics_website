<?php
    session_start();
    include '../config/dbConn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../assets/logo.jpg">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../style/style.css" rel="stylesheet">
        <link href="style_products.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../script/script.js"></script>
        <script src="script_products.js"></script>
    </head>
    <body>
        <?php include '../component/nav.php'; ?>

        <div class="container w-50 d-flex flex-column align-items-center mt-4" id="resumeContainer">
            <table class="table border-5 rounded-3 overflow-hidden">
                <colgroup>
                    <col span="1" style="width: 70%;">
                    <col span="1" style="width: 30%;">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">
                            <p class="text-danger mb-2 px-4">Tên sản phẩm</p>
                        </th>
                        <th scope="col">
                            <p class="text-danger mb-2">Giá bán</p>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" id="productTableBody">
                <?php
                $searchTerm = "";
                if (isset($_GET['q'])) {
                    $searchTerm = $_GET['q'];
                }   
                $limit = 10;
                $query = "SELECT * FROM products WHERE product_name LIKE '%" . $searchTerm . "%' LIMIT $limit";
                $products = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($products)) :
                ?>
                <tr>
                    <td> <a class="title px-4" href="#"> <?php echo $row['product_name']; ?> </td>
                    <td> <?php echo $row['price']; ?> VND</td>
                </tr> 
                <?php endwhile; ?>
                </tbody>                
            </table>
            <button type="button" class="btn btn-primary mb-3" id="loadMoreBtn">Show more</button>
        </div>
    </body>
</html>
