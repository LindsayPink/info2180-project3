window.onload = function() {
/*global $ history*/
$(document).ready(function() {
  $("nav a").on('click', function(event) {
    event.preventDefault();
    let page = $(this).attr("href");
    requestContent(page);
  });

 
  /*$(window).on('popstate', function(event) {
    // This is triggered whenever a user clicks the forward and back buttons
    // in the web browser.
    // console.log('pop state triggered');
    let page = history.state.page;
    let filename = page + '.php';

    // load the page and put it's contents in the main element.
    requestContent(filename);

    // Update the page title in the browser tab
    document.title = 'My AJAX Web Page | ' + page;

    $('#nav-' + page).parent().addClass('active');
  });*/
  
  //on click of log in button
  $("#login").on('click', houseKey);
  
  $("#submitJ").on('click',addJob);
  
  $("submitU").on('click',addUser);
  
  //on click of job title links
  $("a").on('click', function(event) {
    event.preventDefault();
    let page = $(this).attr("href");
    requestContent(page);
  });
});

function formatForUrl(page) {
  var pageName = page.split('.');
  return pageName[0];
}

function requestContent(filename) {
  $('main').load(filename);
}

function houseKey(element) {
    element.preventDefault();
    var httpRequest = new XMLHttpRequest();
    let userE = document.getElementById("email").value.trim();
    let userP = document.getElementById("password").value.trim();
    if (userE === "admin" && userP === "password123") {
      var url = "dashboard.php";
      httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {
            var response = httpRequest.responseText;
            var result = document.querySelector('#main');
            result.innerHTML = response;
          } else {
              alert('There was a problem with the request.');
            }
        }
      };
      
      httpRequest.open('POST', url);
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      httpRequest.send('name=' + encodeURIComponent(userE) + "&idnumber=" + encodeURIComponent(userP));
    } else if (userE === "" && userP === "") {
      
    } else {
        var result = document.querySelector('#main');
        result.innerHTML = "Invalid email address or password";
    }
}

function addJob(argument) {
  // body...
}

function addUser () {
    let fname = document.getElementById("fname").value.trim();
    let lname = document.getElementById("lname").value.trim();
    let pwd = document.getElementById("password").value.trim();
    let email = document.getElementById("email").value.trim();
    let tel = document.getElementById("tel").value.trim();
    
}



   
    
 function isValidEmail(email) {
  return /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/.test(email);
}
function isValidTelephoneNumber(tel) {
  return /^\d{3}-\d{3}-\d{4}$/.test(tel);
}
function isValidPassword(pwd){
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(pwd);
    
}
 var myform = document.querySelector('#form-group');

  myform.addEventListener('submit', function (element) {
    console.log('form submitted');
    var validationFailed = false;
    
    let fname = document.getElementById("fname").value.trim();
    let lname = document.getElementById("lname").value.trim();
    let pwd = document.getElementById("password").value.trim();
    let email = document.getElementById("email").value.trim();
    let tel = document.getElementById("tel").value.trim();
    


 if (isEmpty(fname.value.trim())) {
      validationFailed = true;
      displayErrorMessage(fname, "You must fill in your First Name");
    };

    if (isEmpty(lname.value.trim())) {
      validationFailed = true;
      displayErrorMessage(lname, "You must fill in your Last Name");
    };

    if (!isValidTelephoneNumber(tel.value.trim())) {
      validationFailed = true;
      displayErrorMessage(tel, "Incorrect format for telephone number.");
    };

    if (!isValidEmail(email.value.trim())) {
      validationFailed = true;
     
      displayErrorMessage(email, "Incorrect format for email address.");
    };
    if (!isValidPassword(pwd.value.trim())) {
      validationFailed = true;
      displayErrorMessage(pwd, "Incorrect format for password.");
    };

    

    if (validationFailed) {
      console.log('Please fix issues in Form submission and try again.');
      element.preventDefault();
    }
});
};

function isEmpty(elementValue) {
  if (elementValue.length == 0) {
    // Or you could check if the value == ""
    console.log('field is empty');
    return true;
  }

  return false;
}
function displayErrorMessage(formField, message) {
  formField.setAttribute('class', 'error');
  var errorMessageText = document.createTextNode(message);
  var errorMessage = document.createElement('span');
  errorMessage.setAttribute('class', 'error-message');
  errorMessage.appendChild(errorMessageText);
  //formField.insertAfter(errorMessage);
  insertAfter(formField, errorMessage);
}
function insertAfter(element, newNode) {
  element.parentNode.insertBefore(newNode, this.nextSibling);
}


