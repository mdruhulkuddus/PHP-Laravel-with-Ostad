function gradeCalculator(grade) {
    if (typeof grade !== 'number' || grade < 0 || grade > 100) {
      return "Error: Please enter a valid numerical grade between 0 and 100.";
    } else if (grade >= 90) {
      return "A";
    } else if (grade >= 80) {
      return "B";
    } else if (grade >= 70) {
      return "C";
    } else if (grade >= 60) {
      return "D";
    } else {
      return "F";
    }
  }
  
let grade = 60;
console.log(gradeCalculator(grade)); // Output: D
