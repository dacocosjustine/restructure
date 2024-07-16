<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<div class="container-fluid mt-5">
    <div class="custom-container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">College Department</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="college-list">
                            <li class="college-item">
                                <button class="college-button"  type="button" onclick="window.location.href='../components/Student/Organization/college-details.php'">
                                    <div class="orange-bar"></div>
                                    <div class="college-image">
                                        <img src="../assets/CollegeList/ccs-logo.png" alt="CCS Logo">
                                    </div>
                                    <div class="college-info">
                                        <h3 class="college-title">College of Computing Studies</h3>
                                        <p class="college-description">Recognized Student Organizations</p>
                                    </div>
                                </button>
                            </li>
                            <li class="college-item">
                                <button class="college-button" type="button">
                                    <div class="maroon-bar"></div>
                                    <div class="college-image">
                                        <img src="../assets/CollegeList/cas-logo.png" alt="CAS Logo">
                                    </div>
                                    <div class="college-info">
                                        <h3 class="college-title">College of Arts and Science</h3>
                                        <p class="college-description">Recognized Student Organizations</p>
                                    </div>
                                </button>
                            </li>
                            <li class="college-item">
                                <button class="college-button" type="button">
                                    <div class="yellow-bar"></div>
                                    <div class="college-image">
                                        <img src="../assets/CollegeList/cbaa-logo.png" alt="CBAA Logo">
                                    </div>
                                    <div class="college-info">
                                        <h3 class="college-title">College of Business, Accountancy and Administration</h3>
                                        <p class="college-description">Recognized Student Organizations</p>
                                    </div>
                                </button>
                            </li>
                            <li class="college-item">
                                <button class="college-button" type="button">
                                    <div class="green-bar"></div>
                                    <div class="college-image">
                                        <img src="../assets/CollegeList/chas-logo.png" alt="CHAS Logo">
                                    </div>
                                    <div class="college-info">
                                        <h3 class="college-title">College of Health and Allied Sciences</h3>
                                        <p class="college-description">Recognized Student Organizations</p>
                                    </div>
                                </button>
                            </li>
                            <li class="college-item">
                                <button class="college-button" type="button">
                                    <div class="red-bar"></div>
                                    <div class="college-image">
                                        <img src="../assets/CollegeList/coe-logo.png" alt="COE Logo">
                                    </div>
                                    <div class="college-info">
                                        <h3 class="college-title">College of Engineering</h3>
                                        <p class="college-description">Recognized Student Organizations</p>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <button type="button" class="btn btn-success btn-back">
                            <div class="d-flex align-items-center">
                                <div class="back-icon"></div>
                                <span class="ms-2">Back</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.custom-container {
    width: 1116px;
    height: 1015px;
    padding: 50px;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    display: inline-flex;
}

.card {
    width: 1016px;
    height: 915px;
    position: relative;
    background: white; 
    box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
}

.title {
    color: black;
    font-size: 24px;
    font-family: Inter;
    font-weight: 700;
    word-wrap: break-word;
}

.college-list {
    list-style: none;
    padding: 0;
}

.college-item {
    width: 90%;
    background: white; 
    box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.10); 
    border-radius: 20px; 
    border: 1px #F6F6F6 solid;
    margin-bottom: 20px;
}

.college-button {
    width: 100%;
    padding: 20px;
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 30px;
}

.college-image img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #B5B5B5;
}

.college-title {
    color: #313131;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 5px;
}

.college-description {
    color: #828282;
    font-size: 18px;
}

.btn-back {
    padding: 15px 20px;
    background: #198754;
    border-radius: 30px;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    display: inline-flex;
    border: none;
    cursor: pointer;
}

.back-icon {
    height: 24px;
    width: 24px;
    background-color: white;
    border-radius: 50%;
    border: 2px solid #198754;
}

.orange-bar {
    width: 4.96px;
    height: 82.69px;
    background: #F36A22;
    border-radius: 16535.88px;
}

.maroon-bar {
    width: 4.96px;
    height: 82.69px;
    background: #5B0717;
    border-radius: 16535.88px;
}

.yellow-bar {
    width: 4.96px;
    height: 82.69px;
    background: #FBB71F ;
    border-radius: 16535.88px;
}

.green-bar {
    width: 4.96px;
    height: 82.69px;
    background: #025424;
    border-radius: 16535.88px;
}

.red-bar {
    width: 4.96px;
    height: 82.69px;
    background: #EF0000;
    border-radius: 16535.88px;
}

</style>