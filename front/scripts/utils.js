function changeLanguage(lang){
    document.cookie = "lang=" + lang;
    location.reload();
}
document.getElementById("en").onclick = function(){changeLanguage('en');}
document.getElementById("fr").onclick = function(){changeLanguage('fr');}