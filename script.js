
function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover").textContent = `${Math.round(
    value * 100
  )}%`;
}


// document.write(showCount);
function showCount(encodded_array,len){
// document.write(encodded_array[2]);
    
const gaugeElement = document.querySelectorAll(".gauge");
// document.write(len);
for(var i=0; i<len;i++){
    
    // document.write(encodded_array[1]);
    setGaugeValue(gaugeElement[i],encodded_array[i+1] / 10);
}
// document.write("asdf");

}
