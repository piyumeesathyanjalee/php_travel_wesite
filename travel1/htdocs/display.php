<?php
    include 'db_connection.php';

    $sql = "SELECT * FROM book_form";
    $result = $conn->query($sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="../css/styless.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <!--header section starts-->
    <section class="header">
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="../home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <!-- <a href="book.php">book</a> -->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--header section end-->
    <div class="heading" style="background:url(../images/img2.jpg) no-repeat">
        <h1>View Details</h1>
    </div>

    <div class="details">
        <h1>Details</h1>
  
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Where to</th>
                <th>How Many</th>
                <th>Arrivals</th>
                <th>Leaving</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
    
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                    <td><?php echo htmlspecialchars($row['location']); ?></td>
                    <td><?php echo htmlspecialchars($row['guests']); ?></td>
                    <td><?php echo htmlspecialchars($row['arrivals']); ?></td>
                    <td><?php echo htmlspecialchars($row['leaving']); ?></td>
                    <td><?php echo htmlspecialchars($row['price']); ?></td>
                    <td>
                        <a href="edit_order.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_order.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <h1>Final Price</h1>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Guests</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
            <?php
                $sql_total = "SELECT name, guests, price, (guests * price) AS total_price FROM book_form";
                $result_total = $conn->query($sql_total);

                while ($row_total = $result_total->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row_total['name']); ?></td>
                    <td><?php echo htmlspecialchars($row_total['guests']); ?></td>
                    <td><?php echo htmlspecialchars($row_total['price']); ?></td>
                    <td><?php echo htmlspecialchars($row_total['total_price']); ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php $conn->close(); ?>
</body>
</html>