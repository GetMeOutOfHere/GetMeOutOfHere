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

  $('#rendom-button').click(function() {
    rendomNumber = Math.floor((Math.random() * 7) + 1);
    arraySms =
    ["COME HOME NOW!!! Your brother did the thing again. I NEED YOU!!!",
    "I found the thing. I'm so disappointed in you. Come home now! I mean it!😡😲😠",
    "Hey honey, I need you to come over right now... I don't have to explain why xxx 💕❤️",
    "OMG COME HOME! There's a guy here who says he's your cousin and wants the money back!!!",
    "PLEASE HELP! I got stuck in the thing again! Come round now!😮😬😱",
    "Babe. I need you. Right now. Come home 😍❤️❤️",
    "There's a policeman here with a problem. I think you need to come home right now...!",
    "Sir, I have found your wallet. Please meet me at the police station"];

    $('#message').val(arraySms[rendomNumber]);
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
