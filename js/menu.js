const page = window.location.pathname.split('/').pop().split('.').shift();
const title = page.charAt(0).toUpperCase() + page.slice(1);
const tl = 'top left';
const cr = 'right center';
const pages = {
    home: {id: '#home', target: '#home', name: 'Home', pos: tl},
    discord: {id: '#discord', target: '#discord', name: 'Discord', pos: tl},
    videos: {id: '#videos', target: '#videos', name: 'Videos', pos: tl},
    help: {id: '#help', target: '#help', name: 'FAQ', pos: tl},
    about: {id: '#about', target: '#about', name: 'About Us', pos: tl},
    download: {id: '#download', target: '#download', name: 'Downloads', pos: tl},
    tools: {id: '#tools', target: '#toolsNav', name: 'Tools', pos: tl},
    tryptor: {id: '#tryptor', target: '#tryptor', name: 'Tryptor', pos: cr},
    status: {id: '#status', target: '#status', name: 'Server Status', pos: cr},
    game: {
        id: '#game',
        target: '#game',
        name: '<a href="http://box2d-js.sourceforge.net/" target="_blank">Box2dJS</a> | ' +
            '<a href="https://www.createjs.com/easeljs/" target="_blanks">EaselJS</a> Sandbox',
        pos: cr
    },
    render: {id: '#render', target: '#render', name: 'JS Render', pos: cr},
    render2: {id: '#render2', target: '#render2', name: 'JS Render 2', pos: cr},
    account: {id: '#account', target: '#accountNav', name: 'Account', pos: tl},
    login: {id: '#login', target: '#login', name: 'Login', pos: cr},
    signup: {id: '#signup', target: '#signup', name: 'Sign Up', pos: cr}
}

const id = pages[page].id;
const name = pages[page].name;
const pos = pages[page].pos;

$('#desc').text(pages[page].name);
$(pages[page].id).addClass('active');
Object.keys(pages).forEach(page => createPopup(pages[page]));

$('#tools').dropdown({transition: 'drop', on: 'hover'});
$('#account').dropdown({transition: 'drop', on: 'hover'});

function createPopup(p) {
    let name = p.name
    let pos = p.pos;
    let target = p.target != null ? p.target : p.id;
    console.log(target);
    $(target).popup({
        html: name,
        position: pos,
        target: target,
        jitter: 5,
        preserve: true,
        hoverable: true,
        variation: 'inverted flowing',
        transition: 'swing up',
        duration: 242,
        delay: {
            show: 242,
            hide: 242
        },
        onShow: function () {
            return screen.availWidth >= 600;
        }
    });
}

function isMobile() {

}

function disableStatus() {
    $('#status').hide();
    $('#statusLoading').css('display', 'flex')
}

function showLogin() {
    $('#loginModal').modal('toggle');
}

function showSignup() {
    $('#signupModal').modal('toggle');
}

// class pageInfo {
//     constructor(key, id, name, pos) {
//         this.key = key;
//         this.id = id;
//         this.name = name;
//         this.pos = pos;
//         console.log(this.key + " :{id: " + this.id + ", name: " + this.name + ", pos: " + this.pos + "},");
//     }
// }