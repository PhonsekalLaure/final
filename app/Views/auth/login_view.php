<style>
    /* Full-page background image */
    body {
        background: url(<?= base_url('public/assets/images/loginbg.png') ?>) no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', sans-serif;
    }

    /* Glassmorphism card */
    .glass-card {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.25);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 40px 30px;
        width: 350px;
        text-align: center;
        color: #fff;
        margin: 0 auto; /* center horizontally */
        box-sizing: border-box;
    }

    .glass-card input {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        border-radius: 10px;
        padding: 10px;
        color: #fff;
    }

    .glass-card input::placeholder {
        color: #eee;
    }

    .glass-card button {
        background-color: #1f7a3f;
        border: none;
        border-radius: 10px;
        padding: 10px;
        width: 100%;
        color: #fff;
        font-weight: bold;
    }

    .glass-card button:hover {
        background-color: #145a2a;
    }

    /* Footer */
    footer {
        margin: 50px auto 0; /* center horizontally */
        padding: 5px;
        backdrop-filter: blur(10px);
        background: rgba(255,255,255,0.15);
        border-radius: 15px;
        border: 1px solid rgba(255,255,255,0.2);
        color: #fff;
        text-align: center;
        width: auto;
        max-width: 90%;
    }

    a {
        color: #00bfff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .glass-card {
            width: 70%;
            padding: 24px 18px;
        }
        footer { width: 92%; }
    }
</style>

<div class="glass-card">
    <img src="https://img.icons8.com/ios-filled/100/ffffff/user.png" width="80" alt="User Icon"/>
    <h2 class="mt-2">Login</h2>
    <form>
        <input type="text" class="form-control my-2" placeholder="Username" required>
        <input type="password" class="form-control my-2" placeholder="Password" required>
        <div class="form-check text-start my-2">
            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
            <label class="form-check-label" for="rememberMe" style="color:#fff;">Remember me</label>
        </div>
        <button type="submit">Login</button>
        <p class="mt-2"><a href="#">Forgot password?</a></p>
    </form>
</div>