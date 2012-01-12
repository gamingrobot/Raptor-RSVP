  var food = document.getElementById('food');
  var dessert = document.getElementById('dessert');               
  
  function toggle(switchElement) {
        if (switchElement.value == 'y')
                food.style.visibility = 'visible';
				dessert.style.visibility = 'visible';
        else
                food.style.visibility = 'hidden';  
				dessert.style.visibility = 'hidden';               
  }