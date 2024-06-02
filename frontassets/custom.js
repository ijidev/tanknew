const
  range = document.getElementById('range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);


// document.onreadystatechange = function() {
//   if (document.readyState !== "complete") {
//       document.querySelector(
//         "body").style.visibility = "hidden";
//       document.querySelector(
//         "#loader").style.visibility = "visible";
//   } else {
//       document.querySelector(
//         "#loader").style.display = "none";
//       document.querySelector(
//         "body").style.visibility = "visible";
//   }
// }


let currentIndex = 0;

function rotateProducts() {
    const products = document.querySelectorAll('.product');
    const spinner = document.getElementById('spinner');

    spinner.style.transform = `rotate(${currentIndex * -60}deg)`;

    currentIndex = (currentIndex + 1) % products.length;
}

setInterval(rotateProducts, 1000);