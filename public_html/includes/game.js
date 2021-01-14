var pickedNumbers = [];
var attemptedNumber = 0;
var outOfTheGame = false;
var enemies = ["Qque", "QCheff", "KVV4N7UM", "Qual", "DeusVerum", "Botfree", "Mr. Kevin", "#30593", "General PI", "Rights4Robots", "Quid", "Quelei", "Quousla", "BeepBoop", "QWERTY", "wasda", "MYQUA", "adge-ER", "XXPS", "#12143", "#124554", "#0980", "#3452", "#1633", "TG42W", "f0rum", "ph10gre", "#1"];
var opponent = "";
var isNotKicked = true;

reset();
assignEnemy();
decideBeginner();
setTimeout(kicked, Math.random() * 20000 + 12000);

function decideBeginner() {
  var rN = Math.floor(Math.random() * 2);
  if (rN == 0) {
    placeNumber();
  }
}

function showModal() {
  documentGetById("modal").style.display = "block";
}
  function closeModal() {
    documentGetById("modal").style.display = "none";
  }

function assignEnemy() {
  var rN = Math.floor(Math.random() * enemies.length);
  opponent = enemies[rN];
  document.getElementById("opp").innerHTML = opponent;
}

function checkElement(evt, cellNumber) {
  var char = String.fromCharCode(evt.which);
  if (!(/[1-9]/.test(char))) {
    evt.preventDefault();
  } else if (check(char, cellNumber)) {
    pickedNumbers.push([char, cellNumber]);
    var cellName = "cell-" + cellNumber;
    document.getElementById(cellName).value = char;
    document.getElementById(cellName).style.color = "green";
    document.getElementById(cellName).disabled = true;
    placeNumber();
  } else {
    evt.preventDefault();
  }
}

function chooseNumber() {
  var randomNumber = Math.floor(Math.random() * 9) + 1;
  var randomPlace = Math.floor(Math.random() * 80);
  var arrayUnit = [randomNumber, randomPlace];
  attemptedNumber++;
  if (attemptedNumber > 30) {
    kicked();
    outOfTheGame = true;
  }
  return arrayUnit;
}

function placeNumber() {
  if (!outOfTheGame) {
    var chosenNumber = chooseNumber();
    var failedNumber = false;
    for (i = 0; i < pickedNumbers.length; i++) {
      if (chosenNumber[1] == pickedNumbers[i][1]) {
        failedNumber = true
      }
    }
    if ((check(chosenNumber[0], chosenNumber[1])) && !failedNumber) {
      var cellName = "cell-" + chosenNumber[1];
      document.getElementById(cellName).value = chosenNumber[0];
      document.getElementById(cellName).style.color = "red";
      document.getElementById(cellName).disabled = true;
      pickedNumbers.push(chosenNumber);
    } else {
      placeNumber();
    }
  }
}

function check(input, cellNumber) {
  var isLegit = true;
  for (i = 0; i < pickedNumbers.length; i++) {
    if (input == pickedNumbers[i][0]) {
      for (j = 0; j < 9; j++) {
        if (cellNumber == j + 9 * ((pickedNumbers[i][1] / 9) - pickedNumbers[i][1] / 9 % 1)) {
          isLegit = false;
        } else if (cellNumber == (pickedNumbers[i][1] % 9) + j * 9) {
          isLegit = false;
        }
      }
      for (k = 0; k < 3; k++) {
        for (m = 0; m < 3; m++) {
          if (cellNumber == m + k * 9 + 3 * ((pickedNumbers[i][1] / 3) - pickedNumbers[i][1] / 3 % 1) - 9 * ((pickedNumbers[i][1] / 9) - pickedNumbers[i][1] / 9 % 1) + 27 * ((pickedNumbers[i][1] / 27) - pickedNumbers[i][1] / 27 % 1)) {
            isLegit = false;
          }
        }
      }
    }
  }
  return (isLegit);
}

//Kick user
function kicked() {
  if (isNotKicked) {
    isNotKicked = false;
    for (i = 0; i < 81; i++) {
      var cellName = "cell-" + i;
      document.getElementById(cellName).disabled = true;
    }
    window.location.assign("kicked.php?reason=game")
  }
}

function reset() {
  pickedNumbers = [];
  for (i = 0; i < 81; i++) {
    var cellName = "cell-" + i;
    document.getElementById(cellName).disabled = false;
    document.getElementById(cellName).value = "";
    outOfTheGame = false;
    attemptedNumber = 0;
  }
}

function goBack() {
  	window.location.href = "gameqube.php"
}
