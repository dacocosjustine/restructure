<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sidebar</title>
</head>

<body>

    <div class="sidebar active">
        <div class="top d-flex align-items-center p-2">
            <i onclick="toggleSidebar()" class="bi bi-arrow-left-short" id="btn"></i>
            <!-- <div class="logo ms-2">
            <i class="bi bi-people-fill"></i>
            <span>Student Affairs & Services Department</span> -->
        </div>
        <div class="banner mt-2 d-flex justify-content-center">
            <img src="../assets/sidebar/pnc-header.svg" alt="Placeholder Image" class="img-fluid">
        </div>

        <div class="divider-padding my-2">
            <div class="divider"></div>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" id="admin-activities" class="nav-link d-flex align-items-center">
                    <i class="bi bi-calendar-event"></i>
                    <span class="nav-item-text ms-2">Student Activities</span>
                </a>
                <span class="tooltip">Student Activities</span>
            </li>
            <li class="nav-item">
                <a href="#" id="admin-organization" class="nav-link d-flex align-items-center">
                    <i class="bi bi-people-fill"></i>
                    <span class="nav-item-text ms-2">Student Organization</span>
                </a>
                <span class="tooltip">Student Organization</span>
            </li>
            <li class="nav-item">
                <a href="#" id="admin-scholarship" class="nav-link d-flex align-items-center">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span class="nav-item-text ms-2">Scholarship Program</span>
                </a>
                <span class="tooltip">Scholarship Program</span>
            </li>
            <li class="nav-item">
                <a href="#" id="admin-assistantship" class="nav-link d-flex align-items-center">
                    <i class="bi bi-award-fill"></i>
                    <span class="nav-item-text ms-2">Student Assistantship</span>
                </a>
                <span class="tooltip">Student Assistantship</span>
            </li>
            <li class="nav-item">
                <a href="#" id="admin-discipline" class="nav-link d-flex align-items-center">
                    <i class="bi bi-clipboard-check"></i>
                    <span class="nav-item-text ms-2">Student Discipline</span>
                </a>
                <span class="tooltip">Student Discipline</span>
            </li>
            <li class="nav-item">
                <a href="#" id="admin-account-management" class="nav-link d-flex align-items-center">
                    <i class="bi bi-person-circle"></i>
                    <span class="nav-item-text ms-2">Account Management</span>
                </a>
                <span class="tooltip">Account Management</span>
            </li>
        </ul>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .divider-padding {
            padding: 5px 0px 5px 0px;
        }

        .divider {
            align-self: stretch;
            height: 0px;
            border: 1px #d3d3d3 solid;
        }

        .sidebar {
            box-shadow: 1px 0px 10px #555555;
            z-index: 1;
            position: fixed;
            /* Change to fixed */
            top: 0;
            left: 0;
            height: 100vh;
            width: 80px;
            background-color: #fff;
            padding: 0.4rem 0.8rem;
            transition: all 0.5s ease;
        }

        .sidebar.active~.main-content {
            left: 250px;
            width: calc(100% - 250px);
        }

        .sidebar.active {
            width: 250px;
        }

        .sidebar #btn {
            position: absolute;
            top: 0.4rem;
            /* Adjust the top position as needed */
            right: 0.8rem;
            /* Adjust the right position to place it within the sidebar */
            color: #494949;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all .5s ease;
        }

        .sidebar.active #btn {
            transition: all .5s ease;
            right: 0.8rem;
            /* Ensure it remains in place when the sidebar is active */
        }

        .sidebar .top .logo {
            color: #494949;
            pointer-events: none;
            opacity: 0;
        }

        .sidebar.active .top .logo {
            opacity: 1;
            transition: all .2s ease-out;
            transition-delay: .5s;
        }

        .top .logo i {
            font-size: 2rem;
            margin-right: 5px;
        }

        .banner img {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: 1px solid #198754;
            transition: all 0.5s ease;
        }

        .sidebar.active .banner img {
            width: 100%;
            height: 50px;
            border-radius: 0px;
            border: 0px;
        }

        .sidebar p {
            opacity: 0;
        }

        .sidebar.active p {
            opacity: 1;
        }

        .sidebar ul li {
            position: relative;
            list-style-type: none;
            height: 50px;
            width: 100%;
            margin: 1rem auto;
            line-height: 60px;
        }

        .sidebar ul li a {
            color: #494949;
            text-decoration: none;
            border-radius: 0.8rem;
        }

        .sidebar ul li a.active {
            color: #198754;
            font-weight: bold;
            text-shadow: 1rem .5rem 1.8rem #198754;
        }

        .sidebar ul li a span {
            white-space: nowrap;
            transition: all .1s ease;
            transition-delay: .1s;
        }

        .sidebar ul li a:hover {
            background-color: #198754;
            color: #fff;
        }

        .sidebar ul li a i {
            min-width: 30px;
            text-align: center;
            height: 50px;
            border-radius: 12px;
            line-height: 50px;
        }

        .sidebar .nav-item-text {
            opacity: 0;
        }

        .sidebar.active .nav-item-text {
            opacity: 1;
        }

        .sidebar ul li .tooltip {
            position: absolute;
            background-color: #198754;
            color: #fff;
            left: 90px;
            top: 40%;
            transform: translate(-50%, 50%);
            box-shadow: 0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);
            border-radius: .2rem .6rem .6rem .6rem;
            padding: .4rem 1.2rem;
            line-height: 1.8rem;
            z-index: 20;
            opacity: 0;
        }

        .sidebar ul li:hover .tooltip {
            transition: all 1s ease;
            opacity: 1;
        }

        .sidebar.active ul li .tooltip {
            display: none;
        }

        .main-content {
            position: relative;
            background-color: #eee;
            min-height: 100vh;
            top: 0;
            left: 80px;
            transition: all 0.5s ease;
            width: calc(100% - 80px);
            overflow-y: auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = $('.sidebar');

            if (sidebar.hasClass('active')) {
                sidebar.removeClass('active');
                $('#btn').removeClass('bi-arrow-left-short').addClass('bi-arrow-right-short');
            } else {
                sidebar.addClass('active');
                $('#btn').removeClass('bi-arrow-right-short').addClass('bi-arrow-left-short');
            }
        }
    </script>

</body>

</html>