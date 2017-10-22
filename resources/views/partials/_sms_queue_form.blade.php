<div class="row">
  <form class="col s12 center" action="#" id="sms-queue">
    <div class="row">
      <div class="col s12 center">
        <h3>Set Up Get Me Out of Here!</h3>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="fake-sender-name" type="text" class="validate" name="sms_queue[fake_sender_name]">
        <label for="fake-sender-name" data-error="wrong" data-success="right">Fake Sender Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="fake-sender-number" type="text" class="validate" name="sms_queue[fake_sender_number]">
        <label for="fake-sender-number" data-error="wrong" data-success="right">Fake Sender Number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">send</i>
        <input id="send-to" type="text" class="validate" name="sms_queue[send_to]">
        <label for="send-to">Send To</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">sms</i>
        <div class="btn" id="#rendom-button">
          <span>Generate Message</span>
          <input type="text" id="message" name="sms_queue[message]">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">access_alarms</i>
        <input id="schedule-date" type="text" class="datepicker">
        <label for="schedule-date">Schedule Date</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">access_alarms</i>
        <input id="schedule-time" type="text" class="timepicker">
        <label for="schedule-time">Schedule Time</label>
      </div>
    </div>
    <div class="row hide">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">access_alarms</i>
        <input id="set-schedule" type="text" name="sms_queue[send_time]">
        <label for="set-schedule=">Set Schedule</label>
      </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn" id="submit-sms-queue"><i class="material-icons right">send</i>Submit</button>
  </form>
</div>
