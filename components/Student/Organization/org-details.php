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
                        <h2 class="title">Organization Details</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php include 'fetch-orgDetails.php'; ?>
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
</style>