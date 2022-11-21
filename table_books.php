<?php include_once("table_server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Book Details</title>
</head>
<body>
    <div>
        <div class="mt-3 mb-3">
            <a href="add_form.php"><button class="float-end">ADD</button></a>
        </div>
        <table class="table table-bordered table-sm">
            <thead class="table-light">
                <tr>
                    <th>Sl.No.</th>
                    <th>Book Name</th>
                    <th>Publish Date</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Author</th>
                </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_assoc($fth_rslt)){
            ?>
            <tr>
            <td><?php echo $row['SlNo']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['publishdate']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><a href="./uploads/<?php echo $row['Image']; ?>"><?php echo $row['Image']; ?></a></td>
            <td><?php echo $row['Author']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>