/*var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
*/
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 3 seconds
}
//---------------------------------------------------

//-----------------Registration form validation---------

function validateRegistrationForm(pForm){
    let regerr1 = document.getElementById("regerr1");
    let regerr2 = document.getElementById("regerr2");
    let regerr3 = document.getElementById("regerr3");
    let regerr4 = document.getElementById("regerr4");
    let regerr5 = document.getElementById("regerr5");
    let regerr6 = document.getElementById("regerr6");

    const oname = pForm.oname.value;
    const phone = pForm.phone.value;
    const email = pForm.email.value;
    const username = pForm.username.value;
    const password = pForm.password.value;
    const cpassword = pForm.cpassword.value;


    if(oname == "")
    {
        regerr1.innerHTML = "Organization Name cannot be empty";
        return false;
    }
    if(phone == "")
    {
        regerr2.innerHTML = "Phone cannot be empty";
        return false;
    }
    if(email == "")
    {
        regerr3.innerHTML = "E-mail cannot be empty";
        return false;
    }
    if(username == "")
    {
        regerr4.innerHTML = "Username cannot be empty";
        return false;
    }
    if(password == "")
    {
        regerr5.innerHTML = "Password cannot be empty";
        return false;
    }
    if(cpassword == "")
    {
        regerr6.innerHTML = "Confirm Password cannot be empty";
        return false;
    }

    if (password!=cpassword) {
        alert("Confirm Password does not match");
        return false;
    }
    
}

function validateLoginForm(pForm) {

    let logerr1 = document.getElementById("err1");
    let logerr2 = document.getElementById("err2");


    const firstname = pForm.username.value;
    const lastname = pForm.password.value;


    if (firstname === "") {
        err1.innerHTML = "Firstname cannot be empty";
        return false;
    }
    if (lastname === "") {
        err2.innerHTML = "Lastname cannot be empty";
        return false;
    }

}



function validateDonateMoneyForm(pForm)
{
    let derr1 = document.getElementById("derr1");
    let derr2 = document.getElementById("derr2");
    
    const organizationName=pForm.oname.value;
    const amount=pForm.amount.value;

    if (organizationName=="") {
        derr1.innerHTML="Organization name cannot be empty";
        return false;
    }
    if (amount=="") {
        derr2.innerHTML="Amount cannot be empty";
        return false;
    }
}

function validateRequestMoneyForm(pForm)
{
    let err1 = document.getElementById("er1");
    let err2 = document.getElementById("er2");
    let err3 = document.getElementById("er3");
    
    const oname=pForm.oname.value;
    const reason = pForm.reason.value;
    const amnt=pForm.amount.value;

    if (oname=="") {
        err1.innerHTML="Organization name cannot be empty";
        return false;
    }
    if (reason=="") {
        err2.innerHTML="Reason cannot be empty";
        return false;
    }
    if (amnt=="") {
        err3.innerHTML="Amount cannot be empty";
        return false;
    }

}

function validateForgetPasswordForm(pForm)
{
    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");
    let err3 = document.getElementById("err3");
    
    const fuser=pForm.user.value;
    const fpass= pForm.npassword.value;
    const fcpass=pForm.cnpassword.value;

    if (fuser=="") {
        err1.innerHTML="username cannot be empty";
        return false;
    }
    if (fpass=="") {
        err2.innerHTML="New Password cannot be empty";
        return false;
    }
    if (fcpass=="") {
        err3.innerHTML="Confirm new Password cannot be empty";
        return false;
    }
    if(fpass!=fcpass)
    {
        alert("Confirm Password does not match");
        return false;
    }
}

function validateChangePasswordForm(pForm)
{
    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");
    let err3 = document.getElementById("err3");
    
    const opass=pForm.opass.value;
    const npass= pForm.npassword.value;
    const cnpass=pForm.cnpassword.value;

    if (opass=="") {
        err1.innerHTML="username cannot be empty";
        return false;
    }
    if (npass=="") {
        err2.innerHTML="New Password cannot be empty";
        return false;
    }
    if (cnpass=="") {
        err3.innerHTML="Confirm new Password cannot be empty";
        return false;
    }
    if(npass!=cnpass)
    {
        alert("Confirm Password does not match");
        return false;
    }
}



function validateTopDonatorSearch(pForm)
{
    let errh = document.getElementById("errh");

    const s = pForm.s.value;

    if (s == "") {
        errh.innerHTML = "Empty!";
        return false;
    }
    const actionUrl = pForm.action;
    const actionM = pForm.method;

    let xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
    document.getElementById("hint").innerHTML = this.responseText;
      }
    xhttp.open(actionM, actionUrl + "?q=" + s);
    xhttp.send();
}
//-----------------------rfv---------------------------

















//---------------------------------------------------