// Function to store user details in Local Storage
function storeUserDetails(email, password) {
  const userDetails = {
    email: email,
    password: password,
  };
  localStorage.setItem('userDetails', JSON.stringify(userDetails));
}

// Function to get user details from Local Storage
function getUserDetails() {
  const userDetails = localStorage.getItem('userDetails');
  return JSON.parse(userDetails);
}

// Function to clear user details from Local Storage (for logout functionality)
function clearUserDetails() {
  localStorage.removeItem('userDetails');
}

  function validateLoginForm() {
    const email = document.getElementById('exampleInputEmail1').value;
    const password = document.getElementById('exampleInputPassword1').value;
    const errorDiv = document.getElementById('loginError');
    let hasError = false;

    errorDiv.style.display = 'none';
    errorDiv.innerHTML = '';

    if (!email.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please enter your email.</p>';
      document.getElementById('exampleInputEmail1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputEmail1').style.borderColor = '';
    }

    if (!password.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please enter your password.</p>';
      document.getElementById('exampleInputPassword1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputPassword1').style.borderColor = '';
    }

    if (hasError) {
      errorDiv.style.display = 'block';
      return false;
    }

    const userDetails = getUserDetails();
  if (userDetails && email === userDetails.email && password === userDetails.password) {
    alert('Login successful!');
    window.location.href = "/admin/index.php";
    return false;
  } else {
    errorDiv.innerHTML = '<p>Invalid email or password.</p>';
    errorDiv.style.display = 'block';
   
   
    return true;
  }
  }

  function validateRegistrationForm() {
    const username = document.getElementById('exampleInputUsername1').value;
    const email = document.getElementById('exampleInputEmail1').value;
    const password = document.getElementById('exampleInputPassword1').value;
    const confirmPassword = document.getElementById('exampleInputConfirmPassword1').value;
    const errorDiv = document.getElementById('registrationError');
    let hasError = false;

    errorDiv.style.display = 'none';
    errorDiv.innerHTML = '';

    if (!username.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please enter a username.</p>';
      document.getElementById('exampleInputUsername1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputUsername1').style.borderColor = '';
    }

    if (!email.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please enter your email.</p>';
      document.getElementById('exampleInputEmail1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputEmail1').style.borderColor = '';
    }

    if (!password.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please enter a password.</p>';
      document.getElementById('exampleInputPassword1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputPassword1').style.borderColor = '';
    }

    if (!confirmPassword.trim()) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please confirm your password.</p>';
      document.getElementById('exampleInputConfirmPassword1').style.borderColor = 'red';
    } else if (password !== confirmPassword) {
      hasError = true;
      errorDiv.innerHTML += '<p>Passwords do not match.</p>';
      document.getElementById('exampleInputPassword1').style.borderColor = 'red';
      document.getElementById('exampleInputConfirmPassword1').style.borderColor = 'red';
    } else {
      document.getElementById('exampleInputConfirmPassword1').style.borderColor = '';
    }

    if (!document.getElementById('termsCheckbox').checked) {
      hasError = true;
      errorDiv.innerHTML += '<p>Please agree to the Terms & Conditions.</p>';
    }

    if (hasError) {
    errorDiv.style.display = 'block';
    return false;
  }

  window.location.href = './login.html';
  // Registration successful, you can add your registration logic here.
  // For now, we'll just display an alert:
  storeUserDetails(email, password);

  alert('Registration successful!');
  return true;
  }

  // Function to fetch user data from local storage
  function getUsersFromLocalStorage() {
    const usersJSON = localStorage.getItem('userDetails');
    return usersJSON ? JSON.parse(usersJSON) : [];
  }

  // Function to save user data to local storage
  function saveUsersToLocalStorage(userDetails) {
    localStorage.setItem('userDetails', JSON.stringify(userDetails));
  }

  function validateLoginResetForm() {
    const emailInput = document.getElementById('exampleInputEmail1');
    const passwordInput = document.getElementById('exampleInputPassword1');
    const loginErrorDiv = document.getElementById("loginError");

    // Validate email and password
    if (emailInput.trim() === "") {
      loginErrorDiv.innerText = "Email field cannot be empty.";
      loginErrorDiv.style.display = "block";
      return false;
    }

    if (passwordInput.trim() === "") {
      loginErrorDiv.innerText = "Password field cannot be empty.";
      loginErrorDiv.style.display = "block";
      return false;
    }

    // Get existing users from local storage
    let userDetails = getUsersFromLocalStorage();

    // Update user's password if the email exists in the database
    const userIndex = userDetails.findIndex(u => u.email === email);
    if (userIndex !== -1) {
      userDetails[userIndex].password = password;
      // Save updated users to local storage
      saveUsersToLocalStorage(userDetails);
    }

    // Redirect to login page (replace './login.html' with the actual URL)
    window.location.href = './login.html';

    // Prevent form submission since we're redirecting manually
    return false;
  }