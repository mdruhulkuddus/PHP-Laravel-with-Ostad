// Get the input fields and button
let weightInput = document.getElementById("weightInput");
let heightInput = document.getElementById("heightInput");
let calculateBtn = document.getElementById("calculateBtn");

// Add click event listener to the button
calculateBtn.addEventListener("click", function() {
	// Get the weight and height values from the input fields
	let weight = parseFloat(weightInput.value);
	let height = parseFloat(heightInput.value);

	// Calculate the BMI
	let bmi = weight / (height * height);

	// Display the BMI result on the web page
	let resultDiv = document.getElementById("result");
	resultDiv.innerHTML = "Your BMI is: " + bmi.toFixed(2);
});
