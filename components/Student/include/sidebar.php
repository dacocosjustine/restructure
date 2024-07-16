<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="\assets\css\styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sidebar</title>
</head>

<body>
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-6 d-flex justify-content-between">
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
                <i onclick="toggleSidebar()" class="bi bi-arrow-left-short" id="btn"></i>
            </button>
            <div class="banner mt-2 d-flex justify-content-center">
                <img src="\assets\img\pnc-header.svg" alt="Placeholder Image" class="img-fluid">
            </div>
        </div>

        <hr class="h-color mx-2">

        <ul class="list-unstyled px-2">
            <li class="nav-item">
                <a href="#" id="student-activities" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-calendar-event"></i>
                    Student Activities
                </a>
            </li>
            <li class="nav-item">
                <a href="#student-organization" id="student-organization" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-people-fill"></i>
                    Student Organization
                </a>
            </li>
            <li class="nav-item">
                <a href="#" id="student-scholarship" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-mortarboard-fill"></i>
                    Student Scholarship
                </a>
            </li>
            <li class="nav-item">
                <a href="#" id="student-assistantship" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-award-fill"></i>
                    Student Assistantship
                </a>
            </li>
            <li class="nav-item">
                <a href="#" id="student-discipline" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-clipboard-check"></i>
                    Student Discipline
                </a>
            </li>
            <li class="nav-item">
                <a href="#" id="account-management" class="text-decoration-none px-3 py-2 d-block">
                    <i class="bi bi-person-circle"></i>
                    Account Management
                </a>
            </li>
        </ul>
    </div>

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