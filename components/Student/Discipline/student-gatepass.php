<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<div class="container-wrapper">
  <div class="container-main">
    <div class="header">
      <div class="header-icon">
        <i class="bi bi-arrow-left"></i>
        <span class="header-text">Back</span>
      </div>
    </div>
    <div class="content">
      <div class="section">
        <div class="section-title">Gate pass form.docx</div>
      </div>
      <div class="info">
        <div class="info-item">
          <div class="info-title">Download, print, and fill the gate pass form</div>
        </div>
        <div class="info-item">
          <div class="info-title">Upload the accomplished forms</div>
        </div>
      </div>
      <div class="upload-section">
        <div class="upload-item">
          <div class="upload-title">Gate pass form <span style="color: #F41102">*</span></div>
          <div class="upload-button">
            <i class="bi bi-cloud-upload"></i>
            <span class="upload-text">Upload File</span>
          </div>
        </div>
        <div class="upload-item">
          <div class="upload-title">Copy of employee ID <span style="color: #F41102">*</span></div>
          <div class="upload-button">
            <i class="bi bi-cloud-upload"></i>
            <span class="upload-text">Upload File</span>
          </div>
        </div>
        <div class="upload-item">
          <div class="upload-title">Certificate of employment <span style="color: #F41102">*</span></div>
          <div class="upload-button">
            <i class="bi bi-cloud-upload"></i>
            <span class="upload-text">Upload File</span>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="submit-button">
        <div class="submit-content">
          <i class="bi bi-arrow-right"></i>
          <span class="submit-text">Submit</span>
        </div>
      </div>
    </div>
    <div class="title">
      <div class="title-text">Request for Gate Pass</div>
    </div>
  </div>
</div>


<style>

.container-wrapper {
  width: 1116px;
  height: 690px;
  padding: 30px 50px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
}

.container-main {
  width: 1016px;
  height: 630px;
  position: relative;
  background: white;
  box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
}

.header {
  height: 39px;
  position: absolute;
  left: 910px;
  top: 27px;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.header-icon {
  display: flex;
  align-items: center;
  gap: 5px;
}

.content {
  position: absolute;
  left: 30px;
  top: 82px;
  width: 932px;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.section {
  padding: 14px;
  background: white;
  box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.10);
  border-radius: 10px;
  display: flex;
  align-items: center;
  gap: 18px;
}

.section-title {
  color: #262729;
  font-size: 20px;
  font-family: Inter;
  font-weight: 400;
  text-decoration: underline;
}

.info {
  position: absolute;
  top: 224px;
  left: 30px;
  color: black;
  font-size: 20px;
  font-family: Inter;
  font-weight: 400;
}

.info-item {
  height: 41px;
  word-wrap: break-word;
}

.upload-section {
  position: absolute;
  top: 283px;
  left: 30px;
  width: 961px;
  display: flex;
  gap: 40px;
}

.upload-item {
  padding: 14px;
  background: white;
  border-radius: 10px;
  border: 2px #198754 solid;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.upload-title {
  color: black;
  font-size: 18px;
  font-family: Inter;
  font-weight: 400;
  text-decoration: underline;
}

.upload-button {
  display: flex;
  align-items: center;
  gap: 18px;
}

.upload-button i {
  width: 28px;
  height: 26px;
  position: relative;
}

.upload-button .upload-text {
  color: #198754;
  font-size: 18px;
  font-family: Inter;
  font-weight: 500;
}

.footer {
  position: absolute;
  top: 432px;
  width: 1016px;
  height: 54px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}

.submit-button {
  padding: 15px;
  background: #198754;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.submit-content {
  display: flex;
  align-items: center;
  gap: 5px;
}

.submit-button i {
  width: 24px;
  padding: 2px 1px;
  justify-content: center;
  align-items: center;
}

.submit-text {
  color: white;
  font-size: 15px;
  font-family: Inter;
  font-weight: 400;
  word-wrap: break-word;
}

.title {
  position: absolute;
  left: 38px;
  top: 27px;
  width: 916px;
  display: flex;
  align-items: center;
  gap: 20px;
}

.title-text {
  color: black;
  font-size: 24px;
  font-family: Inter;
  font-weight: 700;
  word-wrap: break-word;
}



</style>