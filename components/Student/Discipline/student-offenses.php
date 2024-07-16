<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<div class="container-wrapper">
  <div class="main-container">
    <div class="header">
      <div class="back-button">
        <i class="bi bi-arrow-left-square"></i>
        <div class="back-text">Back</div>
      </div>
    </div>
    <div class="content">
      <div class="title">Request for Gate Pass</div>
      <div class="instruction">Download, print, and fill the gate pass form</div>
      <div class="instruction">Upload the accomplished forms</div>
      <div class="uploads">
        <div class="upload-section">
          <div class="section-title">
            Gate pass form.docx
            <span>*</span>
          </div>
          <div class="upload">
            <i class="bi bi-cloud-upload"></i>
            <span>Upload File</span>
          </div>
        </div>
        <div class="upload-section">
          <div class="section-title">
            Copy of employee ID
            <span>*</span>
          </div>
          <div class="upload">
            <i class="bi bi-cloud-upload"></i>
            <span>Upload File</span>
          </div>
        </div>
        <div class="upload-section">
          <div class="section-title">
            Certificate of employment
            <span>*</span>
          </div>
          <div class="upload">
            <i class="bi bi-cloud-upload"></i>
            <span>Upload File</span>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="submit-button">
        <i class="bi bi-check-circle-fill"></i>
        <span>Submit</span>
      </div>
    </div>
  </div>
</div>

<style>
.container-wrapper {
  width: 100%;
  max-width: 1116px;
  margin: 0 auto;
  padding: 30px;
  display: flex;
  justify-content: center;
}

.main-container {
  width: 100%;
  max-width: 1016px;
  background: white;
  box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
  padding: 20px;
}

.header {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  margin-bottom: 20px;
}

.back-button {
  display: flex;
  align-items: center;
  gap: 10px;
}

.back-button i {
  font-size: 24px;
  color: #198754;
}

.back-text {
  color: #198754;
  font-size: 20px;
  font-weight: 500;
}

.content {
  margin-bottom: 30px;
}

.title {
  font-size: 24px;
  font-weight: 700;
  color: #262729;
  margin-bottom: 15px;
}

.instruction {
  font-size: 18px;
  color: #262729;
  margin-bottom: 10px;
}

.uploads {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.upload-section {
  width: calc(50% - 10px);
  background: white;
  box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.10);
  border-radius: 10px;
  padding: 15px;
}

.section-title {
  font-size: 18px;
  font-weight: 500;
  color: #262729;
  display: flex;
  align-items: center;
  gap: 5px;
}

.section-title span {
  color: #F41102;
}

.upload {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 10px;
}

.upload i {
  font-size: 20px;
  color: #198754;
}

.upload span {
  font-size: 18px;
  color: #198754;
  font-weight: 500;
}

.footer {
  display: flex;
  justify-content: flex-end;
}

.submit-button {
  padding: 10px 20px;
  background: #198754;
  color: white;
  border-radius: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
}

.submit-button i {
  font-size: 24px;
}

.submit-button span {
  font-size: 18px;
  font-weight: 500;
}

</style>
