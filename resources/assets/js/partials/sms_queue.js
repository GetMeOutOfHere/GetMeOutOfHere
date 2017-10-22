$(document).ready(function() {
  $('#schedule-date.datepicker').pickadate({
    selectMonths: true,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false
  });

  $('#schedule-time.timepicker').pickatime({
    default: 'now',
    fromnow: 0,
    twelvehour: false,
    donetext: 'OK',
    cleartext: 'Clear',
    canceltext: 'Cancel',
    autoclose: false,
    ampmclickable: true
  });

  $('#submit-sms-queue').click(function() {
    scheduleDate = $('#schedule-date').val();
    scheduleTime = $('#schedule-time').val();
    dateObject   = new Date(scheduleDate + ' ' + scheduleTime);
    year         = dateObject.getFullYear();
    month        = dateObject.getMonth() + 1;
    day          = dateObject.getDate();
    hour         = dateObject.getHours();
    minute       = dateObject.getMinutes();

    $('#set-schedule').val(year + '/' + month + '/' + day + '/' + hour + '/' + minute + '/0' );
  });

  $('.btn-logout').on('click', function(e){
    e.preventDefault();
    $(this).parents('.form-logout').submit();
  });
});
