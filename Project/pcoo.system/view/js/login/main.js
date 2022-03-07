$(function() {
	'use strict';
	
  $('.form-control').on('input', function() {
	  var $field = $(this).closest('.form-group');
	  if (this.value) {
	    $field.addClass('field--not-empty');
	  } else {
	    $field.removeClass('field--not-empty');
	  }
	});

});

// Login - show password
function showPass() {
	var sp = document.getElementById("password");
	if (sp.type === "password") {
	  sp.type = "text";
	} else {
	  sp.type = "password";
	}
  }
  // Login - show password