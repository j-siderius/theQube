var cellValues = [];
var bots = ["Qque", "QCheff", "KVV4N7UM", "Qual", "DeusVerum", "Botfree", "Mr. Kevin", "#30593", "General PI", "Rights4Robots", "Quid", "Quelei", "Quousla", "BeepBoop", "QWERTY", "wasda", "MYQUA", "adge-ER", "XXPS", "#12143", "#124554", "#0980", "#3452", "#1633", "TG42W", "f0rum", "ph10gre", "#1"];
assignCellValues();
updateRecord();
makeString();
var update = setInterval(newHighscore,50);

function updateRecord(){
  for(i=0; i<cellValues.length; i++){
    for(j=0; j<cellValues[i].length-1; j++){
      var cellNumber = j*16+i;
      var cellName = "cell-" + cellNumber;
      document.getElementById(cellName).innerHTML = cellValues[i][j][1]+':\n'+ cellValues[i][j][0]+"ms";
    }
  }
}

function assignCellValues(){
  for(i=0; i<16; i++){
    cellValues.push([[x(i),y()], [x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],[x(i),y()],]);
    cellValues[i].sort();
    }
}
function newHighscore(){
  var row = Math.floor(Math.random() * 16);
  var line = Math.floor(Math.random() * 15);
cellValues[row].push([cellValues[row][line][0]-Math.random()*0.00008, bots[Math.floor(Math.random()*bots.length)]]);
cellValues[row].sort();
cellValues[row].pop();
updateRecord();
}

function x(row){
  if(row == 0){
  return Math.random()*0.0006+1.8;
} else if(row == 1){
  return Math.random()*0.0006+0.91;
} else if(row == 2){
  return Math.random()*0.0006+2.75;
} else if(row == 3){
  return Math.random()*0.0006+0.42;
} else if(row == 4){
  return Math.random()*0.0006+2.22;
} else if(row == 5){
  return Math.random()*0.0006+1.34;
} else if(row == 6){
  return Math.random()*0.0006+0.12;
} else if(row == 7){
  return Math.random()*0.0006+4.52;
} else if(row == 8){
  return Math.random()*0.0006+1.17;
} else if(row == 9){
  return Math.random()*0.0006+0.72;
} else if(row == 10){
  return Math.random()*0.0006+0.65;
} else if(row == 11){
  return Math.random()*0.0006+1.04;
} else if(row == 12){
  return Math.random()*0.0006+1.45;
} else if(row == 13){
  return Math.random()*0.0006+5.02;
} else if(row == 14){
  return Math.random()*0.0006+3.73;
} else if(row == 15){
  return Math.random()*0.0006+0.86;
}
}
function y(){
  return bots[Math.floor(Math.random()*bots.length)]
}
function makeString(){
  var str = "sudoQu";
  var result = str.link("/sudokugame.php");
  // document.getElementById("sudoQu").innerHTML = result;
}
