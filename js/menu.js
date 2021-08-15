const page = window.location.pathname.split('/').pop().split('.').shift();
const title = page.charAt(0).toUpperCase() + page.slice(1);
const tl = 'top left';
const cr = 'right center';
const pages = {
    home: {id: '#home', name: 'Home', pos: tl},
    discord: {id: '#discord', name: 'Discord', pos: tl},
    videos: {id: '#videos', name: 'Videos', pos: tl},
    help: {id: '#help', name: 'FAQ', pos: tl},
    about: {id: '#about', name: 'About Us', pos: tl},
    download: {id: '#download', name: 'Downloads', pos: tl},
    tools: {id: '#tools', name: 'Tools', pos: tl},
    tryptor: {id: '#tryptor', name: 'Tryptor', pos: cr},
    status: {id: '#status', name: 'Server Status', pos: cr},
    game: {id: '#game', name: 'Game', pos: cr},
    render: {id: '#render', name: 'JS Render', pos: cr},
    render2: {id: '#render2', name: 'JS Render 2', pos: cr},
    account: {id: '#account', name: 'Account', pos: tl},
    login: {id: '#login', name: 'Login', pos: cr},
    signup: {id: '#signup', name: 'Sign Up', pos: cr}
}
const id = pages[page].id;
const name = pages[page].name;
const pos = pages[page].pos;

$('#desc').text(pages[page].name);
$(pages[page].id).addClass('active');
Object.keys(pages).forEach(page => createPopup(pages[page]));

$('#tools').dropdown({transition: 'drop', on: 'hover'});
$('#account').dropdown({transition: 'drop', on: 'hover' });

function createPopup(p) {
    let id = p.id;
    let name = p.name
    let pos = p.pos;
    $(id).popup({
        content: name,
        position: pos,
        inline: true,
        hoverable: true,
        variation: 'inverted',
        delay: {
            show: 500,
            hide: 0
        }
    });
}

function disableStatus() {
    $('#status').hide();
    $('#statusLoading').css('display', 'flex')
}

function showLogin() {
    $('#login').modal('toggle');
}

function showSignup() {
    $('#signup').modal('toggle');
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