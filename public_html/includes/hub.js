var w = window.innerWidth
var h = window.innerHeight
var r = h / w

var rsize = (w * 1327) / (h * 1920)

var insta = document.querySelector('InstaQube')

const tube = document.querySelector('#QubeTube')


const game = document.querySelector('#GameQube')

function initialize() {
  var w = window.innerWidth
  var h = window.innerHeight
  var r = h / w

  var rsize = (w * 1327) / (h * 1920)

  instaQube()
  gameQube()
  qubeTube()
}

function instaQube() {
  var div = document.createElement('div')
  var btn = document.createElement('img')
  btn.src = "assets/FrameUnpressedButton.png"

  btn.style.position = 'absolute'
  btn.style.left = 53 + "%"
  btn.style.top = (rsize * 12 + "%")
  btn.style.width = 23.5 + "%"

  var logo = document.createElement('img')
  logo.src = "assets/InstaQube.svg"

  logo.style.position = 'absolute'
  logo.style.left = 60 + "%"
  logo.style.top = (rsize * 23.5 + "%")
  logo.style.width = 9.4 + "%"
  logo.style.cursor = "pointer"

  div.appendChild(btn)
  div.appendChild(logo)

  div.addEventListener('mouseover', pressBtn)
  div.addEventListener('mouseout', releaseBtn)
  div.addEventListener('click', instaClick)

  document.body.appendChild(div)
}

function gameQube() {
  var div = document.createElement('div')
  var btn = document.createElement('img')
  btn.src = "assets/FrameUnpressedButton.png"

  btn.style.position = 'absolute'
  btn.style.left = 24.5 + "%"
  btn.style.top = (rsize * 12 + "%")
  btn.style.width = 23.5 + "%"

  var logo = document.createElement('img')
  logo.src = "assets/GameQube.svg"

  logo.style.position = 'absolute'
  logo.style.left = 31.7 + "%"
  logo.style.top = (rsize * 21.5 + "%")
  logo.style.width = 10 + "%"
  logo.style.cursor = "pointer"

  div.appendChild(btn)
  div.appendChild(logo)

  div.addEventListener('mouseover', pressBtn)
  div.addEventListener('mouseout', releaseBtn)
  div.addEventListener('click', gameClick)

  document.body.appendChild(div)
}

function qubeTube() {
  var div = document.createElement('div')
  var btn = document.createElement('img')
  btn.src = "assets/FrameUnpressedButton.png"

  btn.style.position = 'absolute'
  btn.style.left = 38.60 + "%"
  btn.style.top = (rsize * 47.75 + "%")
  btn.style.width = 23.5 + "%"

  var logo = document.createElement('img')
  logo.src = "assets/QubeTube.svg"

  logo.style.position = 'absolute'
  logo.style.left = 45.5 + "%"
  logo.style.top = (rsize * 58 + "%")
  logo.style.width = 10 + "%"
  logo.style.cursor = "pointer"

  div.appendChild(btn)
  div.appendChild(logo)

  div.addEventListener('mouseover', pressBtn)
  div.addEventListener('mouseout', releaseBtn)
  div.addEventListener('click', tubeClick)

  document.body.appendChild(div)
}

function instaClick() {
  if (document.cookie.indexOf('instaFirst=') === -1) {
  document.cookie = "instaFirst=0; max-age=1800; SameSite=Strict;";
  window.location.href = "instaHint.html";
  } else {
  window.location.href = "qtranslate.php?id=instaqube"
  }
}

function gameClick() {
  if (document.cookie.indexOf('gameFirst=') === -1) {
    document.cookie = "gameFirst=0; max-age=1800; SameSite=Strict;";
    window.location.href = "gameHint.html";
  } else {
    window.location.href = "qtranslate.php?id=gameqube"
  }
}

function tubeClick() {
  if (document.cookie.indexOf('tubeFirst=') === -1) {
  document.cookie = "tubeFirst=0; max-age=1800; SameSite=Strict;";
  window.location.href = "tubeHint.html";
  } else {
  window.location.href = "qtranslate.php?id=qubetube"
  }
}

function pressBtn() {
  this.firstElementChild.src = 'assets/FramePressedButton.png'
}

function releaseBtn() {
  this.firstElementChild.src = 'assets/FrameUnpressedButton.png'
}

initialize()

window.addEventListener("resize", initialize);
