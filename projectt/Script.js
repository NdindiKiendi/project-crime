// login direction
function myFunction(){
    var un = document.forms["myform"]["name"].value;
    var pw = document.forms["myform"]["password"].value;
    if(un=="" && pw=="12345678"){
        window.location.href="profile.html";
    }
    else
    {
        alert("error check details");
    }
}
//login-register 
var card =document.getElementById("card");
function openRegister(){
    card.style.transform = "rotateY(-180deg)"
}
function openLogin(){
    card.style.transform = "rotateY(0deg)"
}