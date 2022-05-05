function validateGiveFeedbackForm(pForm)
{
    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    const comment = pForm.comments.value;
    const username = pForm.username.value;

    if (comment == "") {
        err1.innerHTML="Comment cannot be empty";
        return false;
    }

    if (username == "") {
        err2.innerHTML="Username cannot be empty";
        return false;
    }
    const actionURL = pForm.action;
    const actionMethod = pForm.method;

    let xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("msg").innerHTML = this.responseText;
    }
    alert("comments=" + comment + "username=" + username);
    xhttp.open(actionMethod, actionURL);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //xhttp.send("comment= " +comment  + "username= "+username);
    //xhttp.send("&comments");
}