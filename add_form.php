<?php include("form_submit.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Book Add</title>
</head>
<body>
    <h3 class="text-center">ADD A BOOK</h3>
    <div class="container mt-5 col-sm-5 bg-light">      
        <form action="" method="POST" enctype="multipart/form-data">
        <?php echo '<div class="text-danger">'.$emptyErr.'</div>'; ?>
        <div class="m-3 pt-3 ">
            <label class="form-label" for="bookname">Book Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter book name.">
            <?php echo '<div class="text-danger">'.$nameErr.'</div>'; ?>
        </div>
        <div class="ps-3">
            <label class="form-label" for="date">Published date</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
        <div class="ps-3 pt-2">
            <label class="form-label" for="Price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter the price.">
        </div>
        <div class="ps-3 pt-2">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Enter the quantity.">
            <?php echo '<div class="text-danger">'.$qtyErr.'</div>'; ?>
        </div>
        <div class="ps-3 pt-2">
            <label class="form-label" for="image">Image</label>
            <input type="file" class="form-control" name="uploadfile" id="image">
            <?php echo '<div class="text-danger">'.$filetypErr.'</div>'; ?>
        </div>
        <div class="ps-3 pt-2">
            <label class="form-label" for="author">Author</label>
            <select class="form-select" name="author" id="author">
                <option value="#"></option>
                <?php 
                while($f_result = mysqli_fetch_assoc($result)){

                ?>
                <option value="<?php echo $f_result["authorname"];?>"><?php echo $f_result["authorname"];?></option>
                <?php } ?>
            </select><br>
            <?php echo '<div class="text-danger">'.$auth_nameErr.'</div>'; ?>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" name="submit" class="btn btn-lg btn-primary">Insert</button>
        </div>
        </form>
       
    </div>
    
</body>
</html>