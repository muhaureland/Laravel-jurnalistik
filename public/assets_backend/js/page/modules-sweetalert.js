"use strict";

$("#swal-1").click(function() {
	swal('Hello');
});

$("#swal-2").click(function() {
	swal('Good Job', 'You clicked the button!', 'success');
});

$("#swal-3").click(function() {
	swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function() {
	swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function() {
	swal('Good Job', 'You clicked the button!', 'error');
});

$("#swal-6").click(function(e) {
  e.preventDefault();
  const href = $(this).attr('href');
  swal({
      title: 'Are you sure?',
      text: 'Once deleted, you will not be able to recover this imaginary file!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((result) => {
      if (result.value) {
      document.location.href = href;
      } 
    });
});

$('.delete-confirm').on('click', function (event) {
  event.preventDefault();
  const url = $(this).attr('href');
  swal({
      title: 'Are you sure?',
      text: 'This record and it`s details will be permanantly deleted!',
      icon: 'warning',
      buttons: ["Cancel", "Yes!"],
  }).then(function(value) {
      if (value) {
          window.location.href = url;
      }
  });
});

$("#swal-7").click(function() {
  swal({
    title: 'What is your name?',
    content: {
    element: 'input',
    attributes: {
      placeholder: 'Type your name',
      type: 'text',
    },
    },
  }).then((data) => {
    swal('Hello, ' + data + '!');
  });
});

$("#swal-8").click(function() {
  swal('This modal will disappear soon!', {
    buttons: false,
    timer: 3000,
  });
});