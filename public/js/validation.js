var name=1;
var contact=1;
var address=1;
var nationality=1;
var edu=1;
// var dob=1;
var email=1;
var password=1;

pat_name=/^[a-z A-Z]+$/;
pat_contact=/^\d{10}$/;
pat_address=/^[a-z A-Z]+$/;
pat_nationlity=/^[a-z A-Z]+$/;
pat_edu=/^[a-z A-Z]+$/;
// pat_dob =^(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\\d\\d$;
pat_email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
pat_password=/^\d{7}$/;

function nameValidation(val) {
  if (val != "") {
    if (pat_name.test(val)) {
      document.getElementById('nameERR').innerHTML = "";
      name = 1;
    }else{
      document.getElementById('nameERR').innerHTML = "invalid name";
      name = 0;
    }
  }
  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

function contactValidation(val) {
  if (val != "") {
    if (pat_contact.test(val)) {
      document.getElementById('contactERR').innerHTML = "";
      contact = 1;
    }else{
      document.getElementById('contactERR').innerHTML = "invalid contact";
      contact = 0;
    }
  }
  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

function addressValidation(val) {
  if (val != "") {
    if (pat_address.test(val)) {
      document.getElementById('addressERR').innerHTML = "";
      address = 1;
    }else{
      document.getElementById('addressERR').innerHTML = "invalid address";
      address = 0;
    }
  }
  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

function nationalityValidation(val) {
  if (val != "") {
    if (pat_nationlity.test(val)) {
      document.getElementById('nationalityERR').innerHTML = "";
      nationality = 1;
    }else{
      document.getElementById('nationalityERR').innerHTML = "invalid nationality";
      nationality = 0;
    }
  }
  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

function eduValidation(val) {
  if (val != "") {
    if (pat_edu.test(val)) {
      document.getElementById('eduERR').innerHTML = "";
      edu = 1;
    }else{
      document.getElementById('eduERR').innerHTML = "invalid education";
      edu = 0;
    }
  }
  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

/*function dobValidation(val) {
  if (val != "") {
    if (pat_dob.test(val)) {
      document.getElementById('dobERR').innerHTML = "";
      dob = 1;
    }else{
      document.getElementById('dobERR').innerHTML = "Invalid Date Of Birth";
      dob = 0;
    }
  }
  if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}*/

function emailValidation(val) {
  if (val != "") {
    if (pat_email.test(val)) {
      document.getElementById('emailERR').innerHTML = "";
      email = 1;
    }else{
      document.getElementById('emailERR').innerHTML = "invalid email";
      email = 0;
    }
  }

  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}

function pwdValidation(val) {
  if (val != "") {
    if (pat_password.test(val)) {
      document.getElementById('pwdERR').innerHTML = "";
      password = 1;
    }else{
      document.getElementById('pwdERR').innerHTML = "invalid password";
      password = 0;
    }
  }

  if (name==1 && contact==1 && address==1 && nationality==1 && edu==1 && email==1 && password==1) {
    $('#showBtn').fadeIn('slow');
  }else{
    $('#showBtn').hide();
  }
}