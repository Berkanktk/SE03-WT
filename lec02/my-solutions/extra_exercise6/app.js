let total = 21;

function subtract(n) {
  total -= n;
  document.getElementById('total').innerText = total;
  log('New total: ' + total);
  disableIllegalButtons();
}

function subtractPlayerChoice(choice) {
  log('You subtract ' + choice);
  subtract(choice);
  setButtonsEnabled(false);
  if(total == 1) {
    log('<h2>You won!</h2>');
    document.getElementById('total').innerText += ' - You won!';
    document.getElementById('resetButton').style.display = 'block';
  } else {
    log('Computer is thinking...')
    setTimeout(playComputerTurn, 1000);
  }
}

function playComputerTurn() {
  let choice;

  if (document.getElementById('hardMode').checked) {
    if (total % 4 == 1) {
      choice = 1 + Math.floor(Math.random() * 3);
    } else {
      choice = (total - 1) % 4;
    }
  } else{
    if(total == 2) {
      choice = 1;
    } else if (total == 3) {
      choice = 1 + Math.floor(Math.random() * 2);
    } else {
      choice = 1 + Math.floor(Math.random() * 3);
    }
  }
  
  log('Computer subtracts ' + choice);
  subtract(choice);

  if (total == 1) {
    log('<h2>Computer won!</h2>');
    document.getElementById('total').innerText += ' - Computer won!';
    setButtonsEnabled(false);
    document.getElementById('resetButton').style.display = 'block';
  } else {
    setButtonsEnabled(true);
  }
}

function log(message) {
  document.getElementById('log').innerHTML += '<li>' + message + '</li>'
}

function setButtonsEnabled(enabled) {
  const playerButtons = document.getElementsByClassName('playerButton');
  for (const button of playerButtons) {
    button.disabled = !enabled;
  }

  if (enabled) {
    disableIllegalButtons();
  }
}

function disableIllegalButtons() {
  if (total == 2) {
    document.getElementById('twoButton').disabled = true;
    document.getElementById('threeButton').disabled = true;
  }

  if (total == 3) {
    document.getElementById('threeButton').disabled = true;
  }        
}

function reset() {
  total = 21;
  document.getElementById('total').innerText = total;
  document.getElementById('log').innerHTML = '';
  log('Game starts at 21.');
  log('Take turns subtracting 1, 2, or 3.');
  log('Win by leaving your opponent with 1.');
  setButtonsEnabled(true);
  document.getElementById('resetButton').style.display = 'none';
}