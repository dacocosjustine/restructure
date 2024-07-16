<head>
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- CSS for full calendar -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"rel="stylesheet"/>
    
    <!-- JS for full calendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
</head>

<body>
    <div class="main-container d-flex">
        <!-- Sidebar -->
        <?php require_once('../include/sidebar.php');?>

        <div class="content">
            <!-- Header -->
            <?php include '../include/header.php';?>

            <!-- Main content -->
            <div class="main-content px-4 pt-4">
                
                <div class="header">
                    <div class="title">
                        <h2 class="fs-5">Student Activities</h2>
                        <p>S.Y. 2024-2025</p>
                    </div>

                    <!-- v-if student officer -->
                    <button data-toggle="modal" class="add-event-btn" data-target="#exampleModal">
                        <i class="bi bi-calendar2-plus"></i>
                        Add Event
                    </button>
                </div>

                <!-- v-else walang button -->
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <!-- Add Event Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Event</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addEventForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" class="form-control" id="eventName" name="eventName"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3" style="resize: vertical"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" id="eventStartDate" name="eventStartDate"/>
                    </div>
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" id="eventEndDate" name="eventEndDate"/>
                    </div>
                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text" class="form-control" id="eventVenue" name="eventVenue"/>
                    </div>
                    <div class="form-group">
                        <div class="time-label">
                            <label>Start Time</label>
                            <label>End Time</label>
                        </div>
                        <div class="time-input">
                            <input type="time" class="form-control" id="eventStartTime" name="eventStartTime"/>
                            <input type="time" class="form-control" id="eventEndTime" name="eventEndTime"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Approval Letter</label>
                        <input type="file" class="form-control" id="eventApprovalLetter" name="eventApprovalLetter"/>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addEventButton">Add Event</button>
                </div>
            </div>
        </div>
    </div>

    <script>
      $(document).ready(function () {
        display_events();
        $("#addEventButton").on("click", function () {
          var formData = new FormData($("#addEventForm")[0]);
          $.ajax({
            type: "POST",
            url: "components/Student/Activities/add_event.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
              var res = JSON.parse(response);
              if (res.status) {
                alert(res.msg);
                location.reload();
              } else {
                alert(res.msg);
              }
            },
            error: function (xhr, status, error) {
              alert("Error adding event");
            },
          });
        });
      });

      function display_events() {
        var events = [];
        $.ajax({
          url: "/components/Student/Activities/display_event.php",
          dataType: "json",
          success: function (response) {
            var result = response.data;
            $.each(result, function (i, item) {
              events.push({
                event_id: item.event_id,
                title: item.title,
                start: item.start,
                end: item.end,
                color: item.color,
                url: item.url,
              });
            });
            $("#calendar").fullCalendar({
              defaultView: "month",
              timeZone: "local",
              editable: true,
              height: 700,
              selectable: false,
              selectHelper: false,
              select: function (start, end) {
                $("#eventStartDate").val(moment(start).format("YYYY-MM-DD"));
                $("#eventEndDate").val(moment(end).format("YYYY-MM-DD"));
                $("#exampleModal").modal("show");
              },
              events: events,
              eventRender: function (event, element) {
                element.bind("click", function () {
                  alert(event.event_id);
                });
              },
            });
          },
          error: function (xhr, status) {
            alert("Error fetching events");
          },
        });
      }
    </script>

    <style>
      .fc-view-container {
        box-shadow: 5px 5px 8px #b5b5b5;
        margin-bottom: 70px;
      }

      .fc-head-container .fc-widget-header {
        height: 35px;
      }

      .fc th {
        vertical-align: middle;
      }

      .fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
        float: left;
      }

      .fc td,
      .fc th {
        padding: 3px 3px 0px 3px;
      }

      .fc-unthemed td.fc-today {
        background: none;
      }

      .fc-today > span.fc-day-number {
        display: flex;
        height: 1.2rem;
        width: 1.2rem;
        color: #fff;
        background: #198754;
        border-radius: 100%;
        justify-content: center;
        align-items: center;
      }

      .fc-state-default {
        background-color: #198754;
        background-image: -moz-linear-gradient(top, #fff, #e6e6e6);
        background-image: -webkit-gradient(
          linear,
          0 0,
          0 100%,
          from(#1d8856),
          to(#1b7d4f)
        );
        background-image: -webkit-linear-gradient(top, #1d8856, #1e724b);
        background-image: -o-linear-gradient(top, #1d8856, #1e724b);
        background-image: linear-gradient(to bottom, #1d8856, #1e724b);
        background-repeat: repeat-x;
        border-color: #1e724b #1e724b #1b7d4f;
        color: #ffffff;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2),
          0 1px 2px rgba(0, 0, 0, 0.05);
      }

      .add-event-btn {
        border: none;
        color: #ffffff;
        background-color: #198754;
        padding: 10px 20px 10px 20px;
        height: 40px;
        border-radius: 5px;
        display: flex;
        gap: 10px;
        align-items: center;
      }

      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
      }

      .form-group {
        display: flex;
        flex-direction: column;
      }

      .time-label {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 10px;
      }

      .time-label label {
        width: 45%;
        margin-bottom: 0;
      }

      .time-input {
        display: flex;
        justify-content: space-between;
        width: 100%;
      }

      .time-input input[type="time"] {
        width: 45%;
        margin-bottom: 0;
      }
    </style>
</body>