<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="add-event-container">
                <div class="add-event-badge">
                    <img src="../assets/StudScholarship/addEventIcon.svg" alt="">
                    <div class="badge-text">Add Event</div>
                </div>
            </div>
            <div class="title-container">
                <div class="title">CHED Tulong Dunong Scholarship 2023-2024</div>
                <div class="subtitle">Student Recipients</div>
            </div>
            <div class="filter-container">
                <div class="filter-badge">
                    <div class="filter-icon"></div>
                    <div class="filter-text">Filter</div>
                </div>
            </div>
            <div class="data-container">
                <div class="data-row">
                    <div class="data-cell">Name</div>
                    <div class="data-cell">Dept.</div>
                    <div class="data-cell">Level</div>
                    <div class="data-cell">Units</div>
                    <div class="data-cell">Status</div>
                </div>
                <div class="data-row">
                    <div class="data-cell">Galang, Harold P.</div>
                    <div class="data-cell">CCS</div>
                    <div class="data-cell">3</div>
                    <div class="data-cell">24</div>
                    <div class="data-cell text-success fw-bold">ACTIVE</div>
                </div>
                <div class="data-row">
                    <div class="data-cell">Dacocos, Justine Jay P.</div>
                    <div class="data-cell">CCS</div>
                    <div class="data-cell">2</div>
                    <div class="data-cell">18</div>
                    <div class="data-cell text-success fw-bold">ACTIVE</div>
                </div>
                <div class="data-row">
                    <div class="data-cell">Rosaria, Gelvi Ryan P.</div>
                    <div class="data-cell">CCS</div>
                    <div class="data-cell">3</div>
                    <div class="data-cell">17</div>
                    <div class="data-cell text-success fw-bold">ACTIVE</div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>

/* Add Event Badge */
.add-event-container {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

.add-event-badge {
    padding: 15px;
    background-color: #198754;
    border-radius: 25px;
    display: flex;
    align-items: center;
}

.badge-icon {
    width: 18px;
    height: 20px;
    background-color: white;
}

.badge-text {
    flex: 1;
    color: white;
    font-size: 15px;
    font-family: Inter;
    font-weight: 400;
    word-wrap: break-word;
}

/* Title and Subtitle */
.title-container {
    margin-bottom: 20px;
}

.title {
    font-size: 32px;
    font-weight: 700;
    font-family: Inter;
    word-wrap: break-word;
}

.subtitle {
    font-size: 20px;
    font-weight: 400;
    font-family: Inter;
    word-wrap: break-word;
}

/* Filter Badge */
.filter-container {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

.filter-badge {
    padding: 10px;
    background-color: white;
    border-radius: 25px;
    display: flex;
    align-items: center;
}

.filter-icon {
    width: 24px;
    height: 24px;
    background-color: #747474;
    border-radius: 50%;
}

.filter-text {
    margin-left: 5px;
    color: #747474;
    font-size: 15px;
    font-family: Inter;
    font-weight: 400;
    word-wrap: break-word;
}

/* Data Table */
.data-container {
    margin-top: 20px;
}

.data-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.25);
    border: 1px #747474 solid;
    padding: 20px;
    margin-bottom: 20px;
}

.data-cell {
    flex: 1;
    text-align: center;
    color: black;
    font-size: 16px;
    font-family: Inter;
    font-weight: 400;
    word-wrap: break-word;
}

.data-cell.text-success {
    color: #198754;
    font-weight: 700;
}


</style>