document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting traditionally
  
      // Get the entered email and password
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
  
      // Simple authentication logic (replace with your own authentication logic)
      if (email === 'user@example.com' && password === 'password123') {
        // Create an authentication cookie (change the values as needed)
        document.cookie = 'authenticated=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
  
        // Redirect the user to a different page after successful login
        window.location.href = 'google-maps.php';
      } else {
        alert('Invalid email or password. Please try again.');
      }
    });
  });
  