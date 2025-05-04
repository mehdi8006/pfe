<style>
    .container {
        max-width: 450px;
        margin: 0 auto;
        padding: 2rem;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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
        padding: 1rem;
        cursor: pointer;
        font-weight: 600;
        color: #9ca3af;
        position: relative;
        background: none;
        border: none;
        outline: none;
        transition: color 0.3s;
    }
    
    .toggle-item.active {
        color: #ea580c;
    }
    
    .toggle-item.active::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #ea580c;
    }
    
    form {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }
    
    form.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }
    
    .form-group {
        margin-bottom: 1.25rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #374151;
        font-size: 0.95rem;
    }
    
    .form-group input {
        width: 100%;
        padding: 0.75rem 1rem;
        background-color: #f9fafb;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        box-sizing: border-box;
        outline: none;
        transition: all 0.3s;
        font-size: 0.95rem;
    }
    
    .form-group input:focus {
        border-color: #ea580c;
        box-shadow: 0 0 0 3px rgba(234, 88, 12, 0.1);
        background-color: white;
    }
    
    button[type="submit"] {
        width: 100%;
        padding: 0.875rem;
        background-color: #ea580c;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 0.5rem;
        font-weight: 600;
        font-size: 1rem;
        transition: background-color 0.3s;
    }
    
    button[type="submit"]:hover {
        background-color: #d9480f;
    }
    
    .link-secondary {
        color: #ea580c;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
    }
    
    .link-secondary:hover {
        color: #d9480f;
        text-decoration: underline;
    }
    
    .text-end {
        text-align: right;
        margin-top: 1rem;
    }
    
    @media (max-width: 640px) {
        .container {
            padding: 1.5rem;
            margin: 0 1rem;
        }
    }
</style>

@props(['title' => 'Connexion/Inscription'])

<div class="container">
    <div class="toggle-nav">
        <button id="loginToggle" class="toggle-item active" onclick="showForm('login')">Se connecter</button>
        <button id="signupToggle" class="toggle-item" onclick="showForm('signup')">S'inscrire</button>
    </div>
    
    <!-- Login Form -->
    <form id="loginForm" class="active" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Se connecter</button>
        <p class="text-end">
            <a href="{{ route('password.request') }}" class="link-secondary">Mot de passe oublié ?</a>
        </p>
    </form>
    
    <!-- Signup Form -->
    <form id="signupForm" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label>Nom complet</label>
            <input type="text" name="name" required value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div class="form-group">
            <label>Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">S'inscrire</button>
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