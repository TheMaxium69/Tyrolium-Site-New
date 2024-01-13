
let offre1 = document.querySelector('#o1');
let offre2 = document.querySelector('#o2');
let offre3 = document.querySelector('#o3');
let offre4 = document.querySelector('#o4');
let offre5 = document.querySelector('#o5');


let classTrans = "trans";

$(document).ready(function() {


    $(offre1).hover(
        function () {
            offre1.setAttribute('data-size','3')
            offre2.setAttribute('data-size','2D')
            offre3.setAttribute('data-size','1')
            offre4.setAttribute('data-size','1')
            offre5.setAttribute('data-size','1')
        },
        function () {
            def();
        }
    );

    $(offre2).hover(
        function () {
            offre1.setAttribute('data-size','2G')
            offre2.setAttribute('data-size','3')
            offre3.setAttribute('data-size','2D')
            offre4.setAttribute('data-size','1')
            offre5.setAttribute('data-size','1')
        },
        function () {
            def();
        }
    );

    $(offre4).hover(
        function () {
            offre1.setAttribute('data-size','1')
            offre2.setAttribute('data-size','1')
            offre3.setAttribute('data-size','2G')
            offre4.setAttribute('data-size','3')
            offre5.setAttribute('data-size','2D')
        },
        function () {
            def();
        }
    );

    $(offre5).hover(
        function () {
            offre1.setAttribute('data-size','1')
            offre2.setAttribute('data-size','1')
            offre3.setAttribute('data-size','1')
            offre4.setAttribute('data-size','2G')
            offre5.setAttribute('data-size','3')
        },
        function () {
            def();
        }
    );




})

function def() {
    offre1.setAttribute('data-size','1');
    offre2.setAttribute('data-size','2G');
    offre3.setAttribute('data-size','3');
    offre4.setAttribute('data-size','2D');
    offre5.setAttribute('data-size','1');
}

