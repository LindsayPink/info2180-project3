window.onload = function () {
    "use strict";
    //navigational links
 /*   let home = document.getElementsByClassName("home");
    let addUser = document.getElementsByClassName("add");
    let newJob = document.getElementsByClassName("new");
    let exit = document.getElementsByClassName("exit");*/
    
    //listening for clicks in the navigation
  /*  home.addEventListener("click", goHome);
    addUser.addEventListener("click", goUser);
    newJob.addEventListener("click", goJob);
    exit.addEventListener("click", leave);*/
    
    //buttons in #main
    let logIn = document.getElementById("login");
 /*   let userSub = document.getElementById("");
    let jobSub = document.getElementById("");
    let jobPost = document.getElementById("");
    let apply = document.getElementById(""); */
    
    //listening for #main button clicks
    logIn.addEventListener("click", houseKey);
 /*   userSub.addEventListener("click", goUser);
    jobSub.addEventListener("click", goUser);
    jobPost.addEventListener("click", goJob);
    apply.addEventListener("click", leave);*/


/*function goHome () {
    
}

function goUser () {
    
}

function goJob () {
    
}

function leave () {
    
}*/

function houseKey () {
    let userE = document.getElementById("email").trim();
    let userP = document.getElementById("password").trim();
    if (userE === "admin" && userP === "password123") {
        var httpRequest = new XMLHttpRequest();
        var url = "https://info2180-project3-lindsaypink.c9users.io/dashboard"; //?user=somehashedvar&pd=somehashedvar
        httpRequest.onreadystatechange = function ()  {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                    //$('main').load(login.php);
                    var response = httpRequest.responseText;
                    document.getElementById("main").innerHTML = response;
                } else {
                    alert('Invalid email or password. Try again');
                }
            }
        };
    }
    httpRequest.open('GET', url);
    httpRequest.send();
}
 
  };
