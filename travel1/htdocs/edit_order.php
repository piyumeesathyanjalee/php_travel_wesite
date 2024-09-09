<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing data
    $sql = "SELECT * FROM book_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Update data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        $price = $_POST['price'];

        $sql_update = "UPDATE book_form SET name = ?, email = ?, phone = ?, address = ?, location = ?, guests = ?, arrivals = ?, leaving = ?, price = ? WHERE id = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("sssssiisii", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving, $price, $id);

        if ($stmt_update->execute()) {
            header("Location: display.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="../css/style.css">
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
        <h1>Edit Order</h1>
    </div>

    <!--editing section starts-->
    <section class="booking">

        <h1 class="heading-title">Edit your trip!</h1>

        <form method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" name="address" value="<?php echo htmlspecialchars($row['address']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Location:</span>
                    <input type="text" name="location" value="<?php echo htmlspecialchars($row['location']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Guests:</span>
                    <input type="number" name="guests" value="<?php echo htmlspecialchars($row['guests']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Arrivals:</span>
                    <input type="date" name="arrivals" value="<?php echo htmlspecialchars($row['arrivals']); ?>" required>
                </div>

                <div class="inputBox">
                    <span>Leaving:</span>
                    <input type="date" name="leaving" value="<?php echo htmlspecialchars($row['leaving']); ?>" required>
                </div>
            </div>

            <div class="price-info">
                <h2>Price: $<?php echo htmlspecialchars($row['price']); ?></h2>
            </div>

            <input type="submit" value="Update" class="btn">
        </form>

    </section>
    <!--editing section end-->

    <!--footer section starts-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>book</a> 
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>011-3456780</a>
                <a href="#"> <i class="fas fa-phone"></i>011-3234398</a>
                <a href="#"> <i class="fas fa-envelope"></i>travel@gmail.com</a>
                <a href="#"> < i class="fas fa-map"></i>No.23.colombo7</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>

        <div class="credite"> create by <span>p&s. web designer</span> | all rights reserved!</div>

    </section>
    <!--footer section end-->

    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>
