function hoverService(element, picture) {
    element.setAttribute('src', 'assets/'+ picture +'.png');
}

function unHoverService(element, picture) {
    element.setAttribute('src', 'assets/'+ picture +'_black.png');
}