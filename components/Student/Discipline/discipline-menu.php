<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<div class="container-fluid my-5">
    <div class="custom-container">
        <div class="d-flex justify-content-center align-items-center gap-30">
            <button class="custom-card" onclick="window.location.href='../components/Student/Discipline/complaint-form.php'">
                <div class="custom-icon">
                    <i class="bi bi-person-workspace"></i>
                </div>
                <div class="custom-text">File a<br>Complaint</div>
            </button>

            <button class="custom-card" onclick="window.location.href='../components/Student/Discipline/student-handbook.php'">
                <div class="custom-icon">
                    <i class="bi bi-book"></i>
                </div>
                <div class="custom-text">Student Handbook</div>
            </button>

            <button class="custom-card" onclick="window.location.href='../components/Student/Discipline/student-offenses.php'">
                <div class="custom-icon">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <div class="custom-text">View Offenses and Disciplinary Procedures</div>
            </button>

            <button class="custom-card" onclick="window.location.href='../components/Student/Discipline/student-gatepass.php'">
                <div class="custom-icon">
                    <i class="bi bi-door-open"></i>
                </div>
                <div class="custom-text">Issue<br>Gate Pass</div>
            </button>
        </div>
    </div>
</div>

<style>
.custom-container {
    width: 1116px;
    height: 744px;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}

.custom-card {
    width: 225px;
    height: 304px;
    padding: 64px 13px 47px 12px; /* Top, right, bottom, left padding */
    background: white;
    box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    gap: 51.67px;
    cursor: pointer;
    border: none;
    outline: none;
    margin: 10px; /* Add margin to create space between cards */
}

.custom-card:hover .custom-icon i {
    color: #157a42; /* Slightly darker green for hover effect on icon */
}

.custom-icon {
    width: 75px;
    height: 83.33px;
    background: #198754;
    display: flex;
    justify-content: center;
    align-items: center;
}

.custom-icon i {
    color: white;
    font-size: 48px; /* Adjust the font size as needed */
}

.custom-text {
    width: 200px;
    text-align: center;
    color: #198754;
    font-size: 24px;
    font-family: Inter, sans-serif;
    font-weight: 400;
    word-wrap: break-word;
}
</style>