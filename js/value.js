const radioButtons = document.querySelectorAll('input[name="rating"]');
for (const radioButton of radioButtons) { 
radioButton.addEventListener('click',getRating)

}
function getRating() {
    for (const radioButton of radioButtons) {
        if (radioButton.checked) {
            selectedSize = radioButton.value;
            alert(selectedSize);
            break;
        }
    }

}
