function handleSolution() {
    let inputValue = document.getElementById("inputValue").value;
    document.getElementById("solution").innerHTML = Add(inputValue);
}

function blankSolution() {
    document.getElementById("solution").innerHTML = "";
}