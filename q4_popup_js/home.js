function showdate() {
  const date = new Date();
  document.getElementById("textboxdate").value = date.toLocaleDateString();
}
function calculateFactorial() {
  const n = prompt("Enter a number:");
  let factorial = 1;
  for (let i = 1; i <= n; i++) {
    factorial *= i;
  }
  alert(`The factorial of ${n} is ${factorial}`);
}
function generateMultiplicationTable() {
  const n = prompt("Enter a number:");
  let table = "";
  for (let i = 1; i <= 10; i++) {
    table += `${n} x ${i} = ${n * i}\n`;
  }
  alert(table);
}