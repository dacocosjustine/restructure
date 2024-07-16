<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<div class="container-fluid my-5">
    <div class="custom-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="handbook-title">
                Student Handbook
            </div>
            <div class="back-button">
                <button type="button" class="btn btn-success">
                    <div class="d-flex align-items-center">
                        <div class="back-icon"></div>
                        <span class="ms-2">Back</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="image-section">
            <img src="https://via.placeholder.com/1016x607" class="img-fluid" alt="Placeholder Image">
        </div>
        <div class="content-section">
            <!-- Your content here -->
        </div>
    </div>
</div>

<style>

.custom-container {
    width: 1116px;
    height: 737px;
    position: relative;
    background: white;
}

.handbook-title {
    width: 1016px;
    left: 50px;
    top: 50px;
    position: absolute;
    justify-content: flex-end;
    align-items: center;
    display: inline-flex;
    color: black;
    font-size: 32px;
    font-family: Inter;
    font-weight: 700;
    word-wrap: break-word;
}

.back-button {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    background: #198754;
    border-radius: 30px;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    display: flex;
}

.back-icon {
    width: 24px;
    height: 24px;
    padding-top: 4.08px;
    padding-bottom: 4.08px;
    padding-left: 4.16px;
    padding-right: 4px;
    justify-content: center;
    align-items: center;
    display: flex;
}

.image-section {
    width: 1016px;
    height: 607px;
    left: 50px;
    top: 130px;
    position: absolute;
}

.content-section {
    width: 775px;
    height: 551px;
    left: 187px;
    top: 186px;
    position: absolute;
    background: white;
}


</style>