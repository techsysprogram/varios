const colorInput = document.getElementById('colorInput');
const alphaRange = document.getElementById('alphaRange');
const colorfulDiv = document.getElementById('colorfulDiv');

function updateColor() {
  const color = colorInput.value;
  const alpha = alphaRange.value;
  
  colorfulDiv.style.backgroundColor = `rgba(${parseInt(color.slice(1, 3), 16)}, ${parseInt(color.slice(3, 5), 16)}, ${parseInt(color.slice(5, 7), 16)}, ${alpha})`;

console.log(colorfulDiv.style.backgroundColor);
}


colorInput.addEventListener('input', updateColor);
alphaRange.addEventListener('input', updateColor);

updateColor(); // Appel initial pour mettre à jour la couleur avec les valeurs par défaut.

