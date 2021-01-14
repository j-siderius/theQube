document.addEventListener('DOMContentLoaded', () => {
  //card options
  const cardArray = [{
      img: 'img1.jpg',
      answer: true,
      state: false
    },
    {
      img: 'img2.jpg',
      answer: true,
      state: false
    },
    {
      img: 'img3.jpg',
      answer: true,
      state: false
    },
    {
      img: 'img4.jpg',
      answer: false,
      state: false
    },
    {
      img: 'img5.jpg',
      answer: false,
      state: false
    },
    {
      img: 'img6.jpg',
      answer: false,
      state: false
    },
    {
      img: 'img7.jpg',
      answer: false,
      state: false
    },
    {
      img: 'img8.jpg',
      answer: false,
      state: false
    },
    {
      img: 'img9.jpg',
      answer: false,
      state: false
    }
  ]

  cardArray.sort(() => 0.5 - Math.random())

  const grid = document.querySelector('.grid')
  const buttonSubmit = document.querySelector('.Sbutton')
  var w = document.body.clientWidth
  var testLength = 9
  var random = getRandomInt(8) //change number depending on amount of sets
  var location = 'captcha/dogs/'

  //create random grid
  function createBoard() {
    selectSet()

    document.getElementById('question').innerHTML = question

    for (let i = 0; i < testLength; i++) {
      var card = document.createElement('img')
      card.setAttribute('src', location + cardArray[i].img) // set img
      card.setAttribute('data-id', i) // set ID
      card.setAttribute('answer', cardArray[i].answer) // set state?
      card.width = w * .08
      card.addEventListener('click', selectCard)
      grid.appendChild(card)
    }

    var button = document.createElement('button')
    button.innerHTML = "Submit"
    buttonSubmit.appendChild(button)
    button.addEventListener("click", checkAnswer)
    button.classList.add("buttonSubmit");

    var fail = getCookie("fails");
    if (fail == 1) {
      document.getElementById("failHint").style.display = "block";
    }

  }

  //get specific cookie
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  //check answer
  function checkAnswer() {
    var correct = 1

    for (let i = 0; i < testLength && i < cardArray.length; i++) {
      if (cardArray[i].state !== cardArray[i].answer) {
        correct = 0
      }
    }

    if (correct === 1) {
      //captcha correct > reload
      document.cookie = "fails=1; max-age=1800; SameSite=Strict;";
      window.location.reload()
    } else {
      //captcha incorrect > succes
      document.cookie = "fails=0; max-age=0; SameSite=Strict;";
      document.cookie = "robot=1; max-age=1800; SameSite=Strict;";
      window.location.assign("translate.html")
    }
  }

  //toggle card
  function selectCard() {
    var cardId = this.getAttribute('data-id')
    var invState = (cardArray[cardId].state) // retrieve state
    invState = !invState

    if (invState === true) {
      this.style.opacity = '0.5'
    } else if (invState === false) {
      this.style.opacity = '1'
    }
    cardArray[cardId].state = invState
    console.log(invState + ', ' + cardArray[cardId].state + ', ' + cardId)
  }

  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }

  function selectSet() {
    if (random === 0) {
      location = 'captcha/dogs/'
      question = 'Select all images of dogs'
    } else if (random === 1) {
      location = 'captcha/cars/'
      question = 'Select all images of cars'
    } else if (random === 2) {
      location = 'captcha/planets/'
      question = 'Select all images of planets'
    } else if (random === 3) {
      location = 'captcha/trafficlights/'
      question = 'Select all images of traffic lights'
    } else if (random === 4) {
      location = 'captcha/mountains/'
      question = 'Select all images of mountains'
    } else if (random === 5) {
      location = 'captcha/bunnies/'
      question = 'Select all images of bunnies'
    } else if (random === 6) {
      location = 'captcha/bikes/'
      question = 'Select all images of bicycles'
    } else if (random === 7) {
      location = 'captcha/stars/'
      question = 'Select all images of stars'
    } else {
      location = 'captcha/dogs/'
      question = 'Select all images of dogs'
    }



  }


  createBoard()
})
