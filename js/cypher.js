// let script = document.createElement('script');
// script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
// script.type = 'text/javascript';
// document.getElementsByTagName('head')[0].appendChild(script);

/**
 * Gets the user text inputs from Tryptor and creates arrayBuffers with them
 * @return {String} finalText = Computed text
 * @param {boolean} encode = true - encode, false - decode
 */
const setup = function(encode) {
  let key = document.getElementById('key').value;
  let text = document.getElementById('input').value;
  let keyStore = [key.length];
  let textStore = [text.length];
  let compute = [text.length];
  let bufferText = '';
  let finalText = '';

  for (let i = 0; i < key.length; i++) {
    keyStore[i] = key.charCodeAt(i);
  }
  for (let i = 0; i < text.length; i++) {
    textStore[i] = text.charCodeAt(i);
  }
  if (encode) {
    for (let i = 0; i < textStore.length; i++) {
      for (let j = 0; j < key.length; j++) {
        compute[i] = textStore[i] + keyStore[j] + j * i;
      }
    }
  } else {
    for (let i = 0; i < textStore.length; i++) {
      for (let j = 0; j < key.length; j++) {
        compute[i] = textStore[i] - keyStore[j] - j * i;
      }
    }
  }
  for (let i = 0; i < compute.length; i++) {
    bufferText = String.fromCharCode(compute[i]);
    finalText += bufferText;
  }
  return finalText;
};

function canRun() {
  const key = $('#key').val().length;
  const input = $('#input').val().length;
  return (key > 0) && (input > 0);

}

function encode() {
  if (!canRun()) {

  }
  let fillText = document.getElementById('output');
  fillText.value = setup(true);
  fillText.select();
  document.execCommand('copy');
}

function decode() {
  let fillText = document.getElementById('output');
  fillText.value = setup(false);
  fillText.select();
  document.execCommand('copy');
}

function getProjectName() {
  return $('#projectName').val();
}

function SaveAsFile(t, f, m) {
  try {
    let b = new Blob([t], {type: m});
    saveAs(b, f);
  }
  catch (e) {
    window.open('data:' + m + ',' + encodeURIComponent(t), '_blank', '');
  }
}

function saveFile() {
  const text = document.getElementById('output').value;

  SaveAsFile(text, getProjectName(), 'text/plain;charset=utf-16');
}

function loadFile() {
  let file = document.getElementById('fileUpload').files[0];
  let reader = new FileReader();
  reader.onload = function(e) {
    let textArea = document.getElementById('crypt');
    textArea.value = e.target.result;
  };
  reader.readAsText(file);
}

function loadKey() {
  let file = document.getElementById('keyUpload').files[0];
  let reader = new FileReader();
  reader.onload = function(e) {
    let textArea = document.getElementById('key');
    textArea.value = e.target.result;
  };
  reader.readAsText(file);
}

function allCharacterKey(keyLength) {
  let text = '';
  let possible = '';
  for (let j = 33; j < 127; j++) {
    possible += String.fromCharCode(j);
  }
  for (let i = 0; i < keyLength; i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  document.getElementById('key').value = text;
}

//todo key types
function createKey() {
  const keyLength = document.getElementById('keyLength').value;
  const keyType = $('#keyType').find(':selected').text();
  console.log(keyType);
  switch (keyType) {
    default:
      allCharacterKey(keyLength);
  }

}

function reset() {
  document.getElementById('key').value = '';
  document.getElementById('input').value = '';
  document.getElementById('output').value = '';
  document.getElementById('key').type = 'password';
  document.getElementById('keyToggle').classList.replace('on', 'off');

}

function saveKeyAsFile() {
  let textToWrite = document.getElementById('key').value;
  let textFileAsBlob = new Blob([textToWrite], {type: 'text/plain'});

  let fileName = prompt('Key File Name?');
  let fileExtension = '.key';
  const fileNameToSaveAs = fileName + fileExtension;

  let downloadLink = document.createElement('a');

  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = 'Download File';
  downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  // if (window.webkitURL != null) {
  //     downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  // } else {
  //     downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
  //     //downloadLink.onclick = downloadLink.
  //     downloadLink.remove();
  //     document.body.appendChild(downloadLink);
  // }
  downloadLink.click();
}

function togglePassword() {
  let icon = document.getElementById('keyToggle').classList;
  let keyInput = document.getElementById('key').type;
  if (icon.contains('off')) {
    icon.replace('off', 'on');
  } else {
    icon.replace('on', 'off');
  }
  if (keyInput === 'password') {
    document.getElementById('key').type = 'text';
  } else {
    document.getElementById('key').type = 'password';
  }
}

function showInfo() {
}

function showSettings() {

}

function validateSettings() {
  if ($('#projectName').val()) {

  }
}

function validateFileName(fileName) {
  fileName.replace(/[<>:"/|?*]/g, '');
  return fileName;
}

//Theme Control
function initPage() {
  let parallax = localStorage.getItem('parallaxKey');
  if (parallax) {
    changeCSS('#parallax', parallax);
  }
}

//todo make themes modular and allow user to add more
function changeTheme(option, color) {

  let cssFile = 'css/style.css';
  if (option === 1) {
    cssFile = 'css/styleLight.css';
    localStorage.setItem('themeColor', '#041013');
  } else if (option === 0) {
    cssFile = 'css/style.css';
    localStorage.setItem('themeColor', '#b1bed6');
  } else if (option === 2) {
    localStorage.setItem('themeKey', null);
    localStorage.setItem('themeColor', null);
    location.reload();
  } else {
    return;
  }
  localStorage.setItem('themeFile', cssFile);
  localStorage.setItem('themeColor', null);
  changeThemeFile(cssFile);
}

function changeThemeFile(cssFile) {
  let oldLink = document.getElementById('themeStyle');
  let newLink = document.createElement('link');
  newLink.setAttribute('id', 'themeStyle');
  newLink.setAttribute('rel', 'stylesheet');
  newLink.setAttribute('type', 'text/css');
  newLink.setAttribute('href', cssFile);
  document.getElementsByTagName('head')
  .item(0)
  .replaceChild(newLink, oldLink);
}

