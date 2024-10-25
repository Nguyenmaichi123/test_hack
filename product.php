<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        img
        {
            width: 100px;
            height: 100px;
        }
        a
        {
            text-decoration: none;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Warranty</th>
            </tr>
        </thead>
        <tbody>
           <?php
                include "connect.php";
                $sql = "SELECT * from sanpham";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><img src="./img/product/<?php echo $row['image'] ?>" alt=""></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['warranty'] ?> <a href="delete.php?this_id=<?php echo $row['id'] ?>">Delete</a><a href="update.php?this_id=<?php echo $row['id'] ?>">Update</a></td> 
                    
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
