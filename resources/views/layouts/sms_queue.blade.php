@extends('layouts.main')
@section('content')

<div class="row">
  <form class="col s12 center" method="POST" action="{{ route('schedule_sms') }}" id="sms-queue">
    {{ csrf_field() }}
    <div class="row">
      <div class="col s12 center">
        <h3>Set Up Get Me Out of Here!</h3>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="fake-sender-name" type="text" class="validate" name="fake_sender_name">
        <label for="fake-sender-name" data-error="wrong" data-success="right">Fake Sender Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="fake-sender-number" type="text" class="validate" name="fake_sender_number">
        <label for="fake-sender-number" data-error="wrong" data-success="right">Fake Sender Number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">send</i>
        <input id="send-to" type="text" class="validate" name="send_to">
        <label for="send-to">Send To</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">sms</i>
        <textarea id="message" class="materialize-textarea" name="message"></textarea>
        <label for="message">Message</label>
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
        <input id="set-schedule" type="text" name="send_time">
        <label for="set-schedule=">Set Schedule</label>
      </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn" id="submit-sms-queue"><i class="material-icons right">send</i>Submit</button>
  </form>
  @if(Session::has('success'))
    <script>
      swal({
        title: "Done",
        text: "{{ Session::get('success') }}",
        type: "success",
        timer: 5000,
        allowOutsideClick: true
      });
    </script>
  @endif

  @if(Session::has('error'))
    <script>
      swal({
        title: "Opp! Something went wrong",
        text: "{{ Session::get('error') }}",
        type: "error",
        timer: 5000,
        allowOutsideClick: true
      });
    </script>
  @endif
</div>
@endsection
