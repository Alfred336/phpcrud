<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDPHP</title>
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
    <div class="container my-5">
    <h2>list client</h2>
            <a class="btn btn-primary" href="index.php" role="button">Add client</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include 'connect.php';

                        $sql = "SELECT * FROM crud";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo "
                                    <tr>
                                        <td>$row[name]</td>
                                        <td>$row[phone]</td>
                                        <td>$row[email]</td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
    </div>
</body>
</html>