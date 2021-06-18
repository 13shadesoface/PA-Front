function changeLanguage(lang){
    document.cookie = "lang=" + lang;
    location.reload();
}
document.getElementById("en").onclick = function(){changeLanguage('en');}
document.getElementById("fr").onclick = function(){changeLanguage('fr');}

$(document).ready(function(){
    console.log(document.cookie);
});
function signUp(){
    console.log("Signed up");
    
}
function signIn(){
    var email = document.getElementById("email").value;
    var email = document.getElementById("pwd").value;
    document.cookie = "user=" + email;
    console.log(email + "Signed in");
    location.href = '/PA/front/index.php';
}

function signOut(){
    //document.cookie = "user=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/;"
    document.cookie = "user=guest";
    console.log("Signed out");
    location.href = '/PA/front/index.php';
}

function checkEmail(email){
    return !(/\S+@\S+\.\S+/.test(email))
}
