<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<div class="inner-container">+<div class="




"></div>
    <form action="" class="application-form">
        <!-- action frame on top, buttons section -->
        <div class="action-frame top">
            <a class="back-btn">
                <i class="bi bi-arrow-left"></i>
                back
            </a>
        </div>

        <!-- Title section or form header -->
        <div class="form-heading">
            <div class="form-title">
                Student Assistantship Application
            </div>
            <div class="status-container">
                <div class="circle-status"></div>
                <span>open</span>
            </div>
            <div class="txt-duration">
                until May 30, 2024
            </div>
        </div>

        <!-- include files to download -->
        <div class="step-1">
            <div>
                1. Download, print, and fill the following form/s
            </div>
            <div class="card-forms">
                <div class="card">
                    <div class="card-content">
                        <!-- provide a direct link to download a file -->
                        <a href="" class="anchor-deco">
                            <i class="bi bi-file-earmark-medical"></i>
                            <span>Application form.docx</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- include files to submit/upload -->
        <div class="step-2">
            <div>
                2. Upload the accomplished forms
            </div>
            <div class="card-forms">
                <!-- For uploading Application Form -->
                <div class="card upload-card">
                    <div class="card-content">
                        <div class="card-title required">
                            Application form
                        </div>
                        <div class="upload-container">
                            <i class="bi bi-upload green-txt" style="font-size: 1.4rem;"></i>
                            <label for="up-application" class="btn upload-txt green-txt">Upload File</label>
                            <input id="up-application" style="display:none;" type="file" required>
                        </div>
                    </div>
                </div>

                <!-- For uploading Parent's ITR -->
                <div class="card upload-card">
                    <div class="card-content">
                        <div class="card-title required">
                            Parent's ITR
                        </div>
                        <div class="upload-container">
                            <i class="bi bi-upload green-txt" style="font-size: 1.4rem;"></i>
                            <label for="up-parent-itr" class="btn upload-txt green-txt">Upload File</label>
                            <input id="up-parent-itr" style="display:none;" type="file" required>
                        </div>
                    </div>
                </div>

                <!-- For uploading Voter's Certificate -->
                <div class="card upload-card">
                    <div class="card-content">
                        <div class="card-title required">
                            Voter's Certificate
                        </div>
                        <div class="upload-container">
                            <i class="bi bi-upload green-txt" style="font-size: 1.4rem;"></i>
                            <label for="up-voter-cert" class="btn upload-txt green-txt">Upload File</label>
                            <input id="up-voter-cert" style="display:none;" type="file" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="action-frame bottom">
            <button type="submit" class="pnc-btn bi bi-file-earmark-plus">
                Submit
            </button>
        </div>
    </form>
</div>

<style>
    /* Define CSS classes for styles */

    * {
        font-style: inter;
        color: #494949;
    }

    .step-1,
    .step-2 {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-heading,
    .card-forms,
    .card,
    .upload-container,
    .top,
    .action-frame,
    .inner-container,
    .status-container,
    .application-form {
        display: flex;
    }

    .inner-container {
        padding: 20px 50px 20px 50px;
        width: 100%;
        height: 630px;
        position: relative;
        background: white;
        box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
        border: 1px solid #e2e2e2;
    }

    .application-form {
        width: 100%;
        height: 100%;
        flex-direction: column;
        gap: 30px;
    }

    .action-frame {
        justify-content: space-evenly;
    }

    .top {
        justify-content: flex-end;
    }

    .pnc-btn {
        color: white;
        background-color: #198754;
        border: none;
        border-radius: 10px;
        padding: 15px 20px 15px 20px;
    }

    .back-btn {
        color: #494949;
        font-size: 1rem;
        cursor: pointer;
    }

    .form-heading {
        align-items: baseline;
        gap: 10px;
    }

    .form-title {
        font-size: 24px;
        font-weight: bold;
    }

    .status-container {
        align-items: baseline;
        border: 1px solid #494949;
        gap: 5px;
        padding: 10px 10px 10px 10px;
    }

    .circle-status {
        width: 0.5rem;
        height: 0.5rem;
        background-color: limegreen;
        border-radius: 100%;

    }

    .txt-duration {
        font-size: small;
        font-style: italic;
    }

    .anchor-deco {
        color: #494949;
        font-style: italic;
    }

    .card {
        width: 14rem;
        padding: 14px 17px 14px 17px;
        background: white;
        box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.10);
        border-radius: 10px;
        align-items: center;
        gap: 18px;
    }

    .card-title {
        font-size: 1.1rem;
    }

    .card-forms {
        gap: 1em;
    }

    .upload-card {
        border: 2px solid #198754;
    }

    .upload-container {
        align-items: baseline;
    }

    label {
        width: 120px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }


    label.upload-txt {
        font-size: small;
        font-family: 'Inter', sans-serif;
        transition: .3s;
        text-overflow: ellipsis;
        overflow: hidden;
        text-decoration: underline;
    }

    label.upload-txt:hover {
        font-size: medium;
        color: #198754;
    }

    .required::after {
        content: "*";
        color: red;
        font-size: 20px;
    }

    .green-txt {
        color: #198754;
    }
</style>

<script>
    document.querySelector("#up-application").onchange = function() {
        const fileName = this.files[0]?.name;
        const label = document.querySelector("label[for=up-application]");
        label.innerText = fileName ?? "Upload File";
    };

    document.querySelector("#up-parent-itr").onchange = function() {
        const fileName = this.files[0]?.name;
        const label = document.querySelector("label[for=up-parent-itr]");
        label.innerText = fileName ?? "Upload File";
    };

    document.querySelector("#up-voter-cert").onchange = function() {
        const fileName = this.files[0]?.name;
        const label = document.querySelector("label[for=up-voter-cert]");
        label.innerText = fileName ?? "Upload File";
    };
</script>