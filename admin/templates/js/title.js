let path = window.location.pathname;
let page = path.split("/").pop();
const index = "index.php";
const about = "about.php";
const faq = "faq.php";
const error = "error.php";

getName();

function getName() {
    switch (page) {
        case index:
            document.getElementById("desc").innerHTML = "Home";
            break;
        case about:
            document.getElementById("desc").innerHTML = "About";
            break;
        case faq:
            document.getElementById("desc").innerHTML = "FAQ";
            break;
        case error:
            document.getElementById("desc").innerHTML = "Error";
            break;
        default:
            return "";
    }
}
