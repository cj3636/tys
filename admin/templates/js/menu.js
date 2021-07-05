setMenuActive();

function setMenuActive() {
    switch (page) {
        case index:
            document.getElementById("home").className = "active item";
            break;
        case faq:
            document.getElementById("help").className = "active item";
            break;
        case about:
            document.getElementById("about").className = "active item";
            break;
        case login:
            document.getElementById("login").className = "active item";
            break;
        case signup:
            document.getElementById("signup").className = "active item";
            break;
        default:
            return "";
    }
}

$('.ui.dropdown').dropdown();
