<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<div class="container">
  <div class="main-content">
        <div class="back-button">
            <div style="justify-content: center; align-items: center; gap: 5px; display: flex;">
                <i class="bi bi-arrow-left"></i>
                <button class="btn btn-outline-dark fs-6 text-decoration-underline custom-back-button">Back</button>
            </div>
        </div>
    <div class="submit-button">
      <button class="submit-button-content">
        <div class="submit-icon">
            <div class="bi bi-file-earmark-plus"></div>
        </div>
        <div class="submit-text">Submit</div>
      </button>
    </div>
    <div class="title-container">
      <div class="title-text">File a complaint</div>
    </div>
    <div class="form-container">
      <div class="form-group">
        <div class="form-label">Grievance Title</div>
        <div class="form-input">
          <div class="input-placeholder">Enter title</div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">Name of respondent</div>
        <div class="form-input">
          <div class="input-placeholder">Enter the name of the person you’re complaining to</div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-label">Context</div>
        <div class="form-input form-textarea">
          <div class="input-placeholder">Tell us your story</div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
* {
  box-sizing: border-box;
}

body {
  font-size: 14px;
  font-family: 'Inter', sans-serif;
  margin: 0;
}

.container {
  width: 1116px;
  height: 690px;
  padding: 30px 50px;
  display: inline-flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
}

.main-content {
  width: 1016px;
  height: 630px;
  position: relative;
  background: white;
  box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.10);
}

.back-button {
  height: 39px;
  padding: 15px 20px;
  position: absolute;
  left: 910px;
  top: 27px;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.back-button-content {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}

.back-icon {
  width: 24px;
  height: 24px;
  position: relative;
}

.back-icon-line-1 {
  width: 16px;
  height: 0px;
  position: absolute;
  left: 4px;
  top: 12px;
  border: 1.5px #262729 solid;
}

.back-icon-line-2 {
  width: 5px;
  height: 10px;
  position: absolute;
  left: 4px;
  top: 7px;
  border: 1.5px #262729 solid;
}

.back-text {
  color: #262729;
  font-size: 15px;
  font-family: Inter;
  font-weight: 400;
  text-decoration: underline;
  word-wrap: break-word;
}

.submit-button {
  width: 1016px;
  height: 54px;
  position: absolute;
  top: 505px;
  display: inline-flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}

.submit-button-content {
  padding: 15px 20px;
  background: #198754;
  border-radius: 10px;
  overflow: hidden;
  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.submit-icon {
  width: 24px;
  padding: 2px 4px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.submit-icon-bg {
  width: 19px;
  height: 21px;
  background: white;
}

.submit-text {
  color: white;
  font-size: 15px;
  font-family: Inter;
  font-weight: 400;
  word-wrap: break-word;
}

.title-container {
  width: 916px;
  position: absolute;
  top: 27px;
  left: 38px;
  display: inline-flex;
  justify-content: flex-start;
  align-items: center;
  gap: 20px;
}

.title-text {
  color: #262729;
  font-size: 24px;
  font-family: Inter;
  font-weight: 700;
  word-wrap: break-word;
}

.form-container {
  height: 397px;
  position: absolute;
  top: 82px;
  left: 38px;
  display: inline-flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 26px;
}

.form-group {
  align-self: stretch;
  height: 74px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 6px;
}

.form-label {
  align-self: stretch;
  padding-right: 12px;
  display: inline-flex;
  justify-content: flex-start;
  align-items: center;
  gap: 4px;
  color: #262729;
  font-size: 24px;
  font-family: Roboto;
  font-weight: 400;
  word-wrap: break-word;
}

.form-input {
  align-self: stretch;
  height: 40px;
  padding: 12px;
  background: white;
  box-shadow: 0px 2px 4px rgba(65.87, 80.32, 102, 0.10);
  border-radius: 5px;
  overflow: hidden;
  border: 1px rgba(66, 80, 102, 0.40) solid;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  gap: 6px;
}

.form-input.form-textarea {
  height: 163px;
}

.input-placeholder {
  align-self: stretch;
  display: inline-flex;
  justify-content: flex-start;
  align-items: center;
  gap: 8px;
  flex: 1 1 0;
  color: #D3D3D3;
  font-size: 14px;
  font-family: Roboto;
  font-weight: 400;
  word-wrap: break-word;
}
</style>
