var functionButton = function(e) {

    e.preventDefault;
    e.target.classList.remove('animate');
    e.target.classList.add('animate');
    setTimeout(function(){
        document.location.href=e.target.dataset.url;
        e.target.classList.remove('animate');
    }, 400);
};

var TyroButtons = document.getElementsByClassName("tyrobutton");

for (var i = 0; i < TyroButtons.length; i++) {
    TyroButtons[i].addEventListener('click', functionButton, false);
}
