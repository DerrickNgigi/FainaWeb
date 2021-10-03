// var radio = document.getElementById('radio_btn');
const disability = document.getElementById('disability');
const connectivity = document.getElementById('connectivity');
const customAmount = document.getElementById('custom_amount');
const intern_other = document.getElementById('intern_other');
const custom_connect = document.getElementById('custom_connect');
const intern_other_input = document.getElementById('intern_other_input');

disability.addEventListener('click', function (e) {
  if (e.target === disability) {
    customAmount.classList.add('showInput');
    customAmount.classList.remove('hideInput');
  }
  console.log('hello');
});
connectivity.addEventListener('click', function (e) {
  if (e.target === connectivity) {
    custom_connect.classList.add('showInput');
    custom_connect.classList.remove('hideInput');
  }
  console.log('hello');
});
intern_other.addEventListener('click', function (e) {
  if (e.target === intern_other) {
    intern_other_input.classList.add('showInput');
    intern_other_input.classList.remove('hideInput');
  }
  console.log('hello');
});
