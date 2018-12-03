/*global $ history*/
$(document).ready(function() {
  $("nav a").on('click', function(event) {
    event.preventDefault();

    let page = $(this).attr("href");
    
    /*Use the History API to update the browser history with the
    new URL so we can use the browser back and forward buttons */
    let stateObj = { page: formatForUrl(page) };
    history.pushState(stateObj, null, formatForUrl(page));

    requestContent(page);

    // Update active class on navigation links
    removeActiveClass();
    $(event.target).parent().addClass('active');
  });

  $(window).on('popstate', function(event) {
    // This is triggered whenever a user clicks the forward and back buttons
    // in the web browser.
    // console.log('pop state triggered');
    let page = history.state.page;
    let filename = page + '.php';

    // load the page and put it's contents in the main element.
    requestContent(filename);

    // Update the page title in the browser tab
    document.title = 'My AJAX Web Page | ' + page;

    // Update active class on navigation links
    removeActiveClass();
    $('#nav-' + page).parent().addClass('active');
  });
  
  //on click of log in button
  $("#login").on('click', houseKey);
});

function formatForUrl(page) {
  var pageName = page.split('.');
  return pageName[0];
}

function requestContent(filename) {
  $('main').load(filename);
}

function removeActiveClass() {
  $('nav li.active').removeClass('active');
}

function houseKey(element) {
    element.preventDefault();
    var httpRequest = new XMLHttpRequest();
    let userE = document.getElementById("email").value.trim();
    let userP = document.getElementById("password").value.trim();
    if (userE === "admin" && userP === "password123") {
      var url = "login.php";
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
    } else {
        var result = document.querySelector('#main');
        result.innerHTML = "Invalid email address or password";
    }
}