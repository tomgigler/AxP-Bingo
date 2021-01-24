function shuffle(array) {
  var i = array.length,
  j = 0,
  temp;

  while (i--) {
    j = Math.floor(Math.random() * (i+1));

    // swap randomly chosen element with current element
    temp = array[i];
    array[i] = array[j];
    array[j] = temp;
  }
  return array;
}

function make_card(){
  var shuffled_values = shuffle(values)
  var cells = document.getElementsByTagName('td')
  for(var i = 0; i < cells.length; i++) {
    if(i != 12){
      var cell = cells[i]
      cell.innerHTML = shuffled_values[i]
      cell.onclick = function(event) {
        e = event.srcElement
        if(e.className=='selected'){
          e.className=''
        } else {
          e.className='selected'
        }
      }
    }
  }
}

window.onload = function() {
  make_card()
}
