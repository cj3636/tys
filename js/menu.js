const page = window.location.pathname.split('/').pop().split('.').shift();
const title = page.charAt(0).toUpperCase() + page.slice(1);
const tl = 'top left';
const cr = 'right center';
const pages = {
    home: {id: '#home', name: 'Home', pos: tl, target: null},
    discord: {id: '#discord', name: 'Discord', pos: tl, target: null},
    videos: {id: '#videos', name: 'Videos', pos: tl, target: null},
    help: {id: '#help', name: 'FAQ', pos: tl, target: null},
    about: {id: '#about', name: 'About Us', pos: tl, target: null},
    download: {id: '#download', name: 'Downloads', pos: tl, target: null},
    tools: {id: '#tools', name: 'Tools', pos: tl, target: '#toolsNav'},
    tryptor: {id: '#tryptor', name: 'Tryptor', pos: cr, target: null},
    status: {id: '#status', name: 'Server Status', pos: cr, target: null},
    game: {id: '#game', name: 'Game', pos: cr, target: null},
    render: {id: '#render', name: 'JS Render', pos: cr, target: null},
    render2: {id: '#render2', name: 'JS Render 2', pos: cr, target: null},
    account: {id: '#account', name: 'Account', pos: tl, target: '#accountNav'},
    login: {id: '#login', name: 'Login', pos: cr, target: null},
    signup: {id: '#signup', name: 'Sign Up', pos: cr, target: null}
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
        content: name,
        position: pos,
        target: target,
        jitter: 100,
        preserve: true,
        variation: 'inverted',
        transition: 'swing up',
        delay: {
            show: 0,
            hide: 0
        }
    });
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

class pageInfo {
    constructor(key, id, name, pos) {
        this.key = key;
        this.id = id;
        this.name = name;
        this.pos = pos;
        console.log(this.key + " :{id: " + this.id + ", name: " + this.name + ", pos: " + this.pos + "},");
    }
}