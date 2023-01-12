function hoverProject(element) {
    gif = element.getAttribute("gif");
    element.setAttribute('src', gif);
}

function unHoverProject(element) {
    logo = element.getAttribute("logo");
    element.setAttribute('src', logo);
}


function oldProjectBtn(nbId, status) {

    classNew = ".infoNew-A" + nbId
    classOld = ".infoOld-A" + nbId
    classBtn = ".btnInfoOld-A" + nbId

    if(status == "def"){

        displayNew = "none";
        displayOld = "unset";
        NewStatus = "nodef";
        NewTextBtn = "Explication";

        
    } else if (status == "nodef"){

        displayNew = "unset";
        displayOld = "none";
        NewStatus = "def";
        NewTextBtn = "Version d'avant";

    }



    // New
    let elementNew = document.querySelectorAll(classNew)

    elementNew.forEach(function(itemNew) {
        itemNew.setAttribute("style", "display: "+displayNew+";");
    });

    // Old
    let elementOld = document.querySelectorAll(classOld)

    elementOld.forEach(function(itemOld) {
        itemOld.setAttribute("style", "display: "+displayOld+";");
    });


    let elementBtn = document.querySelector(classBtn)

    elementBtn.setAttribute("onclick", "oldProjectBtn('"+nbId+"','"+NewStatus+"')");
    elementBtn.innerHTML = '<i class="fas fa-chevron-down"></i> '+NewTextBtn;







}