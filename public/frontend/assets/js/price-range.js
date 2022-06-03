let minValue = document.getElementById("range-min");
let maxValue = document.getElementById("range-max");
let minDisplay = document.getElementById("input-min");
let maxDisplay = document.getElementById("input-max");
let minGap = 0;
let sliderTrack = document.querySelector(".progress");
let sliderMaxValue = document.getElementById("range-max").max;

function minPrice() {
  if (parseInt(maxValue.value) - parseInt(minValue.value) <= minGap) {
    minValue.value = parseInt(maxValue.value) - minGap;
  }
  console.log(minValue.value)
  minDisplay.value = minValue.value;
  fillColor();
}
function maxPrice() {
  if (parseInt(maxValue.value) - parseInt(minValue.value) <= minGap) {
    maxValue.value = parseInt(minValue.value) + minGap;
  }
  maxDisplay.value = maxValue.value;
  fillColor();
}
function fillColor() {
  percent1 = (minValue.value / sliderMaxValue) * 100;
  percent2 = (maxValue.value / sliderMaxValue) * 100;
  sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}