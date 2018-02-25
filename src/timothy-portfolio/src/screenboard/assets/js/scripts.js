/**
 * Created by timothylock on 2017-10-13.
 */
function start() {
    updateDateTime();
    setInterval(updateDateTime, 1000);

    updateWeather();
    setInterval(updateWeather, 900000);

    updateCalendar();
    setTimeout("location.reload(true);", 3600000);
}

function updateDateTime() {
    $("#date").text(moment().format("dddd, MMM Do"));
    $("#time").text(moment().format('LT'));
}

function updateCalendar() {
    try {
        formatGoogleCalendar.init({
            calendarUrl: 'https://www.googleapis.com/calendar/v3/calendars/lock.k.timothy@gmail.com/events?key=AIzaSyAHBSzZ5ruFspS-BTOk-051k_NlosNaHPw',
            past: true,
            upcoming: true,
            sameDayTimes: true,
            dayNames: true,
            pastTopN: -1,
            upcomingTopN: 5,
            itemsTagName: 'li',
            upcomingSelector: '#events-upcoming',
            pastSelector: '#events-past',
            recurringEvents: true,
            upcomingHeading: '<br><br><br><br><h2>Upcoming events</h2>',
            format: ['<b>', '*date*', '</b><br> ', '*summary*'],
            timeMin: moment().format(),
            timeMax: '2200-06-03T10:00:00-07:00'
        });
    } catch (err) {
        $("#events-upcoming").html("Failed to fetch calendar");
    }

}

function updateWeather() {
    $.simpleWeather({
        location: 'Toronto, ON',
        woeid: '',
        unit: 'c',
        success: function (weather) {
            html = '<i class="icon-' + weather.code + '"></i><a>' + weather.temp + '&deg;' + weather.units.temp + '   ' +
                weather.currently + ' High: ' + weather.high + '&deg;' + weather.units.temp +
                ' Low: ' + weather.low + '&deg;' + weather.units.temp + "</a>";
            $("#weather").html(html);
        },
        error: function (error) {
            console.log(error);
            $("#weather").html('Error fetching weather');
        }
    });
}
