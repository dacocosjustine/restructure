<head>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>


<div class="action-frame">
    <div class="row">
        <div class="col-12">
            <span class="top-title">College Department</span>
        </div>
    </div>

    <button class="btn-back">
        <i class="bi bi-calendar2-plus"></i>
        <span>Back</span>
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <ul class="college-list">
                    <?php include 'fetch-departments.php'; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        display: flex;
        width: 100%;
        height: 915px;
        position: relative;
        background: white;
        box-shadow: 5px 5px 8px #b5b5b5;
    }

    .top-title {
        color: #262729;
        font-size: 1.8rem;
        font-family: Inter;
        font-weight: 500;
        word-wrap: break-word;
    }

    .college-list {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
    }

    .action-frame {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .btn-back {
        display: inline-flex;
        gap: .5rem;
        padding: 15px 20px 15px 20px;
        background: #198754;
        color: #ffffff;
        border-radius: 30px;
        justify-content: center;
        align-items: center;
        border: none;
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
        background: #FBB71F;
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