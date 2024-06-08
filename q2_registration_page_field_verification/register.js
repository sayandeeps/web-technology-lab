const form = document.getElementById('registrationForm');
form.addEventListener('submit', (event) => {
  event.preventDefault();

  const firstName = document.getElementById('firstName');
  const password = document.getElementById('password');
  const email = document.getElementById('email');
  const mobile = document.getElementById('mobile');
  const lastName = document.getElementById('lastName');
  const address = document.getElementById('address');

  const errormsg = document.getElementById('errormsg');

  let isValid = true;
  let errorMessage = '';

  if (!/^[a-zA-Z]{6,}$/.test(firstName.value)) {
    errorMessage += 'First Name should contain only alphabets and be at least 6 characters long.';
    isValid = false;
  }
  if (!/^[A-Z0-9+_.-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/.test(email.value)) {
    errorMessage += 'First Name should contain only alphabets and be at least 6 characters long.';
    isValid = false;
  }

  if (password.value.length < 6) {
    errorMessage += 'Password should be at least 6 characters long.';
    isValid = false;
  }

  if (!/^\d{10}$/.test(mobile.value)) {
    errorMessage += 'Mobile Number should contain 10 digits only.';
    isValid = false;
  }

  if (lastName.value.length === 0) {
    errorMessage += 'Last Name cannot be empty.';
    isValid = false;
  }

  if (address.value.length === 0) {
    errorMessage += 'Address cannot be empty.';
    isValid = false;
  }

  if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email.value)) {
    errorMessage += 'Email address is invalid.';
    isValid = false;
  }

  if (!isValid) {
    errormsg.textContent = errorMessage;
  } else {
    form.submit();
    alert("form submitted !!!");
  }
});