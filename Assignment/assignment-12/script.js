let weightInput = document.getElementById("weightInput");
let heightInput = document.getElementById("heightInput");
let calculateBtn = document.getElementById("calculateBtn");

calculateBtn.addEventListener("click", function() {
	let weight = parseFloat(weightInput.value);
	let height = parseFloat(heightInput.value);

	let bmi = weight / (height * height);

	let resultDiv = document.getElementById("result");
	resultDiv.innerHTML = "Your BMI is: " + bmi.toFixed(2);
});
