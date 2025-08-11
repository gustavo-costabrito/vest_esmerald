// Modal toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    // Get modal elements
    const cartModal = document.getElementById('cart-modal');
    const wishlistModal = document.getElementById('wishlist-modal');
    const loginModal = document.getElementById('login-modal');
    const registerModal = document.getElementById('register-modal');

    // Get buttons that open modals
    const cartBtn = document.getElementById('cart-btn');
    const wishlistBtn = document.getElementById('wishlist-btn');
    const loginBtn = document.getElementById('login-btn');
    const registerBtn = document.getElementById('register-btn');
    const showRegister = document.getElementById('show-register');
    const showLogin = document.getElementById('show-login');

    // Get close buttons
    const closeCart = document.getElementById('close-cart');
    const closeWishlist = document.getElementById('close-wishlist');
    const closeLogin = document.getElementById('close-login');
    const closeRegister = document.getElementById('close-register');

    // Open modals
    cartBtn.onclick = function () {
        cartModal.style.display = 'flex';
    }

    wishlistBtn.onclick = function () {
        wishlistModal.style.display = 'flex';
    }

    loginBtn.onclick = function () {
        loginModal.style.display = 'flex';
    }

    registerBtn.onclick = function () {
        registerModal.style.display = 'flex';
    }

    showRegister.onclick = function (e) {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'flex';
    }

    showLogin.onclick = function (e) {
        e.preventDefault();
        registerModal.style.display = 'none';
        loginModal.style.display = 'flex';
    }

    // Close modals
    closeCart.onclick = function () {
        cartModal.style.display = 'none';
    }

    closeWishlist.onclick = function () {
        wishlistModal.style.display = 'none';
    }

    closeLogin.onclick = function () {
        loginModal.style.display = 'none';
    }

    closeRegister.onclick = function () {
        registerModal.style.display = 'none';
    }

    // Close when clicking outside modal content
    window.onclick = function (event) {
        if (event.target == cartModal) {
            cartModal.style.display = 'none';
        }
        if (event.target == wishlistModal) {
            wishlistModal.style.display = 'none';
        }
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        }
        if (event.target == registerModal) {
            registerModal.style.display = 'none';
        }
    }

    // Form submissions (prevent default for demo)
    document.getElementById('login-form').onsubmit = function (e) {
        e.preventDefault();
        alert('Login realizado com sucesso!');
        loginModal.style.display = 'none';
    }

    document.getElementById('register-form').onsubmit = function (e) {
        e.preventDefault();
        alert('Cadastro realizado com sucesso!');
        registerModal.style.display = 'none';
    }
});