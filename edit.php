<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDPHP</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=tel], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=email], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
        }
    </style>
</head>
<body>
        <?php
            $id = $_GET['id'];
            include 'connect.php';
            $sql = "SELECT * FROM crud WHERE id = $id";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
    <div>
        <form action="update.php" method="post">
           
                <label class="col-sm-3 col-form-label"  >First Name</label>
                    <input type="text"  class="form-control" name="name" placeholder="Full name" value="<?php echo $row['name']; ?>" required>
               
            
            
                <label class="col-sm-3 col-form-label"  >Phone Number</label>
              
                    <input type="tel"  class="form-control" name="phone" placeholder="Phone number" value="<?php echo $row['phone']; ?>" required>
               
            
          
                <label class="col-sm-3 col-form-label">Email</label>
                
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required>

            <input type="hidden" name="id" value="<?php echo $id;?>">
                    <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>