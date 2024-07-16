$(document).ready(function () {
  // Add similar click event handlers for other menu items
  $("#admin-activities").click(function (e) {
    e.preventDefault();
    $("#main-content").load(
      "../components/Admin/Activities/calendar/admin-calendar.html"
    );
    $("#admin-activities").addClass("active");
    $("#admin-scholarship").removeClass("active");  
    $("#admin-organization").removeClass("active");
    $("#admin-assistantship").removeClass("active");
    $("#admin-discipline").removeClass("active");
  });

  $("#admin-organization").click(function (e) {
    e.preventDefault();
    $("#main-content").load(
      "../components/Admin/Activities/calendar/admin-calendar.html"
    );
    $("#admin-organization").addClass("active");
    $("#admin-scholarship").removeClass("active");
    $("#admin-activities").removeClass("active");
    $("#admin-assistantship").removeClass("active");
    $("#admin-discipline").removeClass("active");
  });

  $("#admin-scholarship").click(function (e) {
    e.preventDefault();
    $("#main-content").load(
      "../components/Admin/Scholarship/StudentScholarship.php"
    );
    $("#admin-scholarship").addClass("active");
    $("#admin-organization").removeClass("active");
    $("#admin-activities").removeClass("active");
    $("#admin-assistantship").removeClass("active");
    $("#admin-discipline").removeClass("active");
  });

  $("#admin-assistantship").click(function (e) {
    e.preventDefault();
    $("#main-content").load(
      "../components/Admin/Activities/calendar/admin-calendar.html"
    );
    $("#admin-assistantship").addClass("active");
    $("#admin-organization").removeClass("active");
    $("#admin-activities").removeClass("active");
    $("#admin-scholarship").removeClass("active");
    $("#admin-discipline").removeClass("active");
  });

  $("#admin-discipline").click(function (e) {
    e.preventDefault();
    $("#main-content").load(
      "../components/Admin/Discipline/StudentDiscipine.php"
    );
    $("#admin-discipline").addClass("active");
    $("#admin-organization").removeClass("active");
    $("#admin-activities").removeClass("active");
    $("#admin-scholarship").removeClass("active");
    $("#admin-assistantship").removeClass("active");
  });
});