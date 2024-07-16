<div class="container-fluid py-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex gap-2 align-items-center">
            <div class="d-flex align-items-center border border-success rounded-pill">
                <div class="bg-success text-white px-3 py-2 rounded-pill shadow-sm">
                    <span class="fw-bold">Student Complaints</span>
                </div>
                <div class="bg-white text-success px-3 py-2 rounded-pill">
                    <span class="fw-bold">Employee Referrals</span>
                </div>
            </div>
        </div>
        <div class="bg-white px-3 py-2 d-flex align-items-center gap-2">
            <div class="d-flex align-items-center">
                <div class="bg-secondary rounded-circle" style="width: 24px; height: 24px;"></div>
            </div>
            <span class="text-secondary">Filter</span>
        </div>
    </div>
    <div class="d-flex flex-column gap-2">
        <div class="data-row-header">
            <div class="data-cell fw-bold">Title</div>
            <div class="data-cell fw-bold">Student</div>
            <div class="data-cell fw-bold">Dept.</div>
            <div class="data-cell fw-bold">Report Date</div>
            <div class="data-cell fw-bold">Status</div>
        </div>
        <div class="data-row">
            <div class="data-cell">Bullying Issues</div>
            <div class="data-cell">Dela Cruz, John</div>
            <div class="data-cell">COE</div>
            <div class="data-cell">September 5, 2024</div>
            <div class="data-cell text-warning fw-bold">IN PROGRESS</div>
        </div>
        <div class="data-row">
            <div class="data-cell">Teacher missing classes</div>
            <div class="data-cell">Almonte, Ken</div>
            <div class="data-cell">CHAS</div>
            <div class="data-cell">July 12, 2024</div>
            <div class="data-cell text-success fw-bold">RESOLVED</div>
        </div>
        <div class="data-row">
            <div class="data-cell">Harassment</div>
            <div class="data-cell">San Juan, Mark</div>
            <div class="data-cell">CBAA</div>
            <div class="data-cell">May 9, 2024</div>
            <div class="data-cell text-danger fw-bold">DISMISSED</div>
        </div>
        <div class="data-row">
            <div class="data-cell">Cyberbullying</div>
            <div class="data-cell">Almodovar, Daniel</div>
            <div class="data-cell">CCS</div>
            <div class="data-cell">April 23, 2024</div>
            <div class="data-cell text-success fw-bold">RESOLVED</div>
        </div>
    </div>
</div>


<style>

/* Container */
.container-fluid {
    max-width: 1116px;
    height: 733px;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 25px;
    padding-bottom: 25px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 10px;
}

/* Title Badge */
.d-flex.align-items-center.border.border-success.rounded-pill {
    flex: 1 1 0;
    height: 44px;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    display: flex;
}

.d-flex.align-items-center.border.border-success.rounded-pill .bg-success {
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25) inset;
}

/* Filter Badge */
.d-flex.align-items-center.bg-white {
    justify-content: center;
    align-items: center;
    display: flex;
}

.d-flex.align-items-center.bg-white .bg-secondary {
    width: 18px;
    height: 18px;
}

/* Data Rows */
.data-row-header,
.data-row {
    width: 100%;
    padding: 20px;
    background-color: white;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.25);
    border: 1px solid #747474;
    justify-content: space-between;
    align-items: center;
    display: flex;
    margin-bottom: 10px;
}

.data-cell {
    flex: 1 1 0;
    text-align: center;
    font-size: 16px;
    font-family: Inter;
    word-wrap: break-word;
}

.data-cell.text-warning {
    color: #F48C02;
}

.data-cell.text-success {
    color: #198754;
}

.data-cell.text-danger {
    color: #BF0000;
}


</style>