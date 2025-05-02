
  <style>
    
    
    .container {
      padding: 2rem;
      width: 80%;
      border: none;
    }
    
    .toggle-nav {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1.5rem;
      border-bottom: 1px solid #e0e0e0;
    }
    
    .toggle-item {
      flex: 1;
      text-align: center;
      padding: 0.7rem;
      cursor: pointer;
      font-weight: bold;
      color: #0033ff3d;
      position: relative;
      background: none;
      border: none;
      outline: none;
    }
    
    .toggle-item.active {
      color: blue;
    }
    
    .toggle-item.active::after {
      content: '';
      position: absolute;
      bottom: -1px;
      left: 0;
      width: 100%;
      height: 3px;
      background-color:blue;
    }
    
    form {
      display: none;
      border: none;
    }
    
    form.active {
      display: block;
    }
    
    .form-group {
      margin-bottom: 1rem;
      border: none;
    }
    
    .form-group label {
      display: block;
      margin-bottom: .5rem;
      border: none;
    }
    
    .form-group input {
      width: 100%;
      padding: .75rem;
      background-color: #ffffff;
      border: 1px solid #727272;
      border-radius: 15px;
      box-sizing: border-box;
      outline: none;
      transition: border-color 0.3s, box-shadow 0.3s;
    }
    
    .form-group input:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 2px rgba(0,123,255,0.1);
    }
    
    button[type="submit"] {
      width: 100%;
      padding: .75rem;
      background-color:orange;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 1.5rem;
      font-weight: bold;
      transition: background-color 0.3s;
    }
    
    button[type="submit"]:hover {
      background-color: rgb(255, 184, 54);
    }
    .link-secondary{
      color:blue;
    }
    .link-secondary:hover{
      color:rgb(100, 100, 100);
    }
  </style>

  @props(['ads'])
    <div class="container">
    <div class="toggle-nav">
      <button id="loginToggle" class="toggle-item active" onclick="showForm('login')">Login</button>
      <button id="signupToggle" class="toggle-item" onclick="showForm('signup')">Sign Up</button>
    </div>
    
    <!-- Login Form -->
    <form id="loginForm" class="active">
      <div class="form-group">
        <label>Email</label>
        <input type="email" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" required>
      </div>
      <button type="submit">Login</button>
      <p class="text-end">
        <a href="/forgot-password" class="link-secondary">Mot de passe oublié ?</a>
      </p>
    </form>
    
    <!-- Signup Form -->
    <form id="signupForm">
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" required>
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" required>
      </div>
      <button type="submit">Sign Up</button>
    </form>
  </div>
  
  <script>
    function showForm(formType) {
      const loginForm = document.getElementById('loginForm');
      const signupForm = document.getElementById('signupForm');
      const loginBtn = document.getElementById('loginToggle');
      const signupBtn = document.getElementById('signupToggle');
      
      if (formType === 'login') {
        loginForm.classList.add('active');
        signupForm.classList.remove('active');
        loginBtn.classList.add('active');
        signupBtn.classList.remove('active');
      } else {
        loginForm.classList.remove('active');
        signupForm.classList.add('active');
        loginBtn.classList.remove('active');
        signupBtn.classList.add('active');
      }
    }
  </script>
