<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<div class="container custom-container">
    <div class="position-relative bg-white shadow p-3 custom-inner-container">
        <div class="position-absolute custom-title">
            <div class="text-dark fs-4 fw-bold">Scholarship Programs</div>
        </div>
        <div class="d-flex flex-wrap justify-content-start align-items-start gap-4 custom-scholarships">
            <div class="card custom-card">
                <div class="card-body d-flex flex-column justify-content-between align-items-center p-3">
                    <div class="d-flex align-items-center gap-2 custom-status">
                        <div class="rounded-circle custom-status-circle"></div>
                        <div class="text-center text-muted fs-6">open</div>
                    </div>
                    <div class="d-flex flex-column justify-content-between align-items-center custom-details">
                        <div class="text-center text-dark fs-5">Sui Generis Scholarship</div>
                        <button class="btn btn-success rounded-pill px-4">Apply</button>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-body d-flex flex-column justify-content-between align-items-center p-3">
                    <div class="d-flex align-items-center gap-2 custom-status">
                        <div class="rounded-circle custom-status-circle"></div>
                        <div class="text-center text-muted fs-6">limited</div>
                    </div>
                    <div class="d-flex flex-column justify-content-between align-items-center custom-details">
                        <div class="text-center text-dark fs-5">CHED Tulong Dunong Scholarship 2023-2024</div>
                        <button class="btn btn-success rounded-pill px-4">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-button">
            <div style="justify-content: center; align-items: center; gap: 5px; display: flex;">
                <i class="bi bi-arrow-left"></i>
                <button class="btn btn-outline-dark fs-6 text-decoration-underline custom-back-button">Back</button>
            </div>
        </div>
    </div>
</div>

<style>

.custom-container {
    width: 1116px;
    height: 690px;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 30px;
    padding-bottom: 30px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
}

.custom-inner-container {
    width: 1016px;
    height: 630px;
    box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
    background: white;
    position: relative;
}

.custom-title {
    height: 34px;
    left: 48px;
    top: 43px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}

.custom-scholarships {
    width: 920px;
    padding-top: 20px;
    padding-bottom: 20px;
    left: 48px;
    top: 87px;
    position: absolute;
}

.custom-card {
    width: 200px;
    height: 225px;
    background: white;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    overflow: hidden;
    border: 1px #747474 solid;
    display: inline-flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 5px;
}

.custom-status {
    align-self: stretch;
    padding: 10px;
    border: 1px #747474 solid;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.custom-status-circle {
    width: 10px;
    height: 10px;
    background: #2DC774;
    border-radius: 100px;
}

.custom-details {
    align-self: stretch;
    flex: 1 1 0;
    padding-top: 20px;
    padding-bottom: 20px;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    display: flex;
}

.custom-back {
    height: 39px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    left: 910px;
    top: 27px;
    position: absolute;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    justify-content: center;
    align-items: center;
}

.custom-back-icon {
    width: 24px;
    height: 24px;
    position: relative;
}

/* Additional styles */
.custom-back-icon::before {
    content: '';
    width: 16px;
    height: 0px;
    left: 4px;
    top: 12px;
    position: absolute;
    border: 1.50px #262729 solid;
}

.custom-back-icon::after {
    content: '';
    width: 5px;
    height: 10px;
    left: 4px;
    top: 7px;
    position: absolute;
    border: 1.50px #262729 solid;
}


</style>