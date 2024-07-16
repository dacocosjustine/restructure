<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Activities</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include '../includes/admin-sidebar.php'; ?>
    <div class="main-content">

        <section id="header">
            <?php include '../components/header.php'; ?>
        </section>

        <section id="main">
            <div class="container" id="main-content">
                <?php include '../components/content.php'; ?>
            </div>
        </section>

        <section id="footer">
            <?php include '../components/footer.php'; ?>
        </section>

    </div>

    <script src="../js/admin-sidebar.js"></script>
</body>

</html>