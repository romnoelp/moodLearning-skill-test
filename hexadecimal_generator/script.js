// Generate a random hex color
function getRandomColor() {
  const randomColor = Math.floor(Math.random() * 16777215).toString(16);
  return "#" + randomColor.padStart(6, "0");
}

// Calls the color generator, grabs the <body> element from the DOM
// Accesses its backgroundColor prop, then sets the newColor value to it
function changeBackgroundColor() {
  const newColor = getRandomColor();
  document.body.style.backgroundColor = newColor;
  console.log("New color:", newColor); // log the hex value
}

// Invoke the color changing function when the onPress event of the button is called
const colorButton = document.getElementById('colorButton');
colorButton.addEventListener('click', changeBackgroundColor);
