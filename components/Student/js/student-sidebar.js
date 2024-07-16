$(document).ready(function () {
    // Add similar click event handlers for other menu items
    $("#student-activities").click(function (e) {
      e.preventDefault();
      $("#main-content").load(
        "../components/Student/Activities/activities.php"
      );
      $("#student-activities").addClass("active");
      $("#student-scholarship").removeClass("active");
      $("#student-organization").removeClass("active");
      $("#student-assistantship").removeClass("active");
      $("#student-discipline").removeClass("active");
    });
  
    $("#student-organization").click(function (e) {
      e.preventDefault();
      $("#main-content").load(
        "../components/Student/Organization/college-list.php"
      );
      $("#student-organization").addClass("active");
      $("#student-scholarship").removeClass("active");
      $("#student-activities").removeClass("active");
      $("#student-assistantship").removeClass("active");
      $("#student-discipline").removeClass("active");
    });
  
    $("#student-scholarship").click(function (e) {
      e.preventDefault();
      $("#main-content").load(
        "../components/Student/Scholarship/scholarship-menu.php"
      );
      $("#student-scholarship").addClass("active");
      $("#student-organization").removeClass("active");
      $("#student-activities").removeClass("active");
      $("#student-assistantship").removeClass("active");
      $("#student-discipline").removeClass("active");
    });
  
    $("#student-assistantship").click(function (e) {
      e.preventDefault();
      $("#main-content").load(
        "../components/Student/Assistantship/assistantship-menu.php"
      );
      $("#student-assistantship").addClass("active");
      $("#student-organization").removeClass("active");
      $("#student-activities").removeClass("active");
      $("#student-scholarship").removeClass("active");
      $("#student-discipline").removeClass("active");
    });
  
    $("#student-discipline").click(function (e) {
      e.preventDefault();
      $("#main-content").load(
        "../components/Student/Discipline/discipline-menu.php"
      );
      $("#student-discipline").addClass("active");
      $("#student-organization").removeClass("active");
      $("#student-activities").removeClass("active");
      $("#student-scholarship").removeClass("active");
      $("#student-assistantship").removeClass("active");
    });
  });