window.addEventListener('load', function() {
  var doorBtn = document.getElementById('door-btn');
  var doorStatus = document.getElementById('door-status');
  var isOpened = false;

  doorBtn.addEventListener('click', function() {
    if (!isOpened) {
      isOpened = true;
      doorBtn.classList.add('opened');
      doorStatus.innerHTML = 'Dörren är öppen';

      var countdown = 15;
      var countdownInterval = setInterval(function() {
        countdown--;
        if (countdown > 0) {
          doorStatus.innerHTML = 'Stänger om ' + countdown + ' sekunder';
        } else {
          clearInterval(countdownInterval);
          isOpened = false;
          doorBtn.classList.remove('opened');
          doorStatus.innerHTML = '';
        }
      }, 1000);
      
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "update_door_status.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("door_status=open");
    }
  });
});