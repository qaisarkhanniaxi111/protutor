$(function () {
    // Initialize the select element with a default option
    $("#timezone-selector").append(
      $("<option/>").text("Select timezone").attr("value", "")
    );
  
    $("#calendar").fullCalendar({
      header: {
        left: "prev,next",
        right: "title",
      },
      defaultView: "agendaWeek",
      navLinks: true,
      editable: true,
      selectable: true,
      eventLimit: true,
      events: [
        {
            title: "15:00",
            start: "2023-10-10T07:00:00",
            end: "2023-10-10T07:00:00",
            allDay: false,
          },
          {
            title: "13:00",
            start: "2023-10-11T07:00:00",
            end: "2023-10-11T07:00:00",
            allDay: false,
          },
          {
            title: "01:00",
            start: "2023-10-12T14:00:00",
            end: "2023-10-12T14:00:00",
            allDay: false,
          },
          // Add a new custom event for October 3, 2023, at 9:00 AM
          {
            title: "12:00",
            start: "2023-10-03T09:00:00",
            end: "2023-10-03T09:00:00",
            allDay: false,
          },
        // Add more custom events as needed
      ],
      loading: function (bool) {
        $("#loading").toggle(bool);
      },
      eventRender: function (event, el) {
        if (event.start.hasZone()) {
          el.find(".fc-title").after(
            $('<div class="tzo"/>').text(event.start.format("Z"))
          );
        }
      },
      allDaySlot: false,
      displayEventTime: false, // Hide event times
      slotLabelFormat: "", // Hide time labels
    });
  
    $.getJSON(
      "https://fullcalendar.io/demo-timezones.json",
      function (timezones) {
        $.each(timezones, function (i, timezone) {
          if (timezone != "UTC") {
            $("#timezone-selector").append(
              $("<option/>").text(timezone).attr("value", timezone)
            );
          }
        });
      }
    );
  
    // Set the default selected option to "Select timezone"
    $("#timezone-selector").val("select");
  
    $("#timezone-selector").on("change", function () {
      $("#calendar").fullCalendar("option", "timezone", this.value || false);
    });
  });
  