function hoverProject(element) {
    gif = element.getAttribute("gif");
    element.setAttribute('src', gif);
}

function unHoverProject(element) {
    logo = element.getAttribute("logo");
    element.setAttribute('src', logo);
}