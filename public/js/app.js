/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(4);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

__webpack_require__(2);
__webpack_require__(3);

/***/ }),
/* 2 */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('.button-collapse').sideNav();
  Materialize.updateTextFields();
  $('.parallax').parallax();
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

$(document).ready(function () {
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

  $('#emergency-text').click(function () {
    currentDate = new Date();
    phoneNumber = $('#send-to').data('number');
    $('#send-to').val(phoneNumber);
    $('#fake-sender-name').val('anonymous');
    rendomMessage();
    timeMachine(currentDate);

    $('form#sms-queue').trigger('submit');
  });

  $('#rendom-button').click(function () {
    rendomMessage();
  });

  $('#submit-sms-queue').click(function () {
    scheduleDate = $('#schedule-date').val();
    scheduleTime = $('#schedule-time').val();
    setSchedule = scheduleDate + ' ' + scheduleTime;
    timeMachine(setSchedule);
  });

  function rendomMessage() {
    arraySms = ["COME HOME NOW!!! Your brother did the thing again. I NEED YOU!!!", "I found the thing. I'm so disappointed in you. Come home now! I mean it!😡😲😠", "Hey honey, I need you to come over right now... I don't have to explain why xxx 💕❤️", "OMG COME HOME! There's a guy here who says he's your cousin and wants the money back!!!", "PLEASE HELP! I got stuck in the thing again! Come round now!😮😬😱", "Babe. I need you. Right now. Come home 😍❤️❤️", "There's a policeman here with a problem. I think you need to come home right now...!", "Sir, I have found your wallet. Please meet me at the police station", "Bleeeurghh... I'm really not feeling well 😞 come and look after me, please???!", "Dude, it happened again! Help! 😱 You gotta come do the thing again...😬", "Mr Happy needs his funtime now! Get here now!", "You know that favour you owe me? Time to pay up. Meet me at the place. Bring soap", "Did you forget your dentist appointment? They just rang here!", "Bleeeurghh... I'm really not feeling well 😞 come and look after me, please???!", "Dude, it happened again! Help! 😱 You gotta come do the thing again...😬", "Mr Happy needs his funtime now! Get here now!", "You know that favour you owe me? Time to pay up. Meet me at the place. Bring soap", "Did you forget your dentist appointment? They just rang here!"];
    rendomNumber = Math.floor(Math.random() * arraySms.length);

    console.log(arraySms[rendomNumber] + " / " + rendomNumber);
    // debugger;

    $('#message').val(arraySms[rendomNumber]);
    $('#hidden-message').val(arraySms[rendomNumber]);
  }

  function timeMachine(setSchedule) {
    dateObject = new Date(setSchedule);
    year = dateObject.getFullYear();
    month = dateObject.getMonth() + 1;
    day = dateObject.getDate();
    hour = dateObject.getHours();
    minute = dateObject.getMinutes();

    $('#set-schedule').val(year + '/' + month + '/' + day + '/' + hour + '/' + minute + '/0');
  }

  $('.btn-logout').on('click', function (e) {
    e.preventDefault();
    $(this).parents('.form-logout').submit();
  });
});

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);