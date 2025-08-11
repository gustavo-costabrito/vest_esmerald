<header class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">VEST<span>ESMERALD</span></div>
            <div class="user-actions">
                <a href="#" id="login-btn">Login</a>
                <a href="#" id="register-btn">Cadastre-se</a>
                <button class="icon-btn" id="wishlist-btn">
                    <i class="far fa-heart"></i>
                    <span class="badge">2</span>
                </button>
                <button class="icon-btn" id="cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge">3</span>
                </button>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar produtos...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <nav class="nav-categories">
            <a href="#">Masculino</a>
            <a href="#">Feminino</a>
            <a href="#">Infantil</a>
            <a href="#">Esporte</a>
        </nav>
    </div>
</header>

<!-- Carrinho Modal -->
<div class="modal" id="cart-modal">
    <div class="modal-content">
        <span class="close-btn" id="close-cart">&times;</span>
        <h3 class="modal-title">Seu Carrinho</h3>
        <div class="cart-items">
            <div class="cart-item">
                <img src="https://via.placeholder.com/70" alt="Produto">
                <div class="item-details">
                    <div class="item-name">Camiseta Masculina Branca</div>
                    <div class="item-price">R$ 59,90</div>
                    <div class="item-quantity">Quantidade: 1</div>
                    <span class="remove-item">Remover</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="https://via.placeholder.com/70" alt="Produto">
                <div class="item-details">
                    <div class="item-name">Calça Jeans Feminina</div>
                    <div class="item-price">R$ 129,90</div>
                    <div class="item-quantity">Quantidade: 1</div>
                    <span class="remove-item">Remover</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="https://via.placeholder.com/70" alt="Produto">
                <div class="item-details">
                    <div class="item-name">Tênis Esportivo</div>
                    <div class="item-price">R$ 199,90</div>
                    <div class="item-quantity">Quantidade: 1</div>
                    <span class="remove-item">Remover</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="total-price">Total: R$ 389,70</div>
            <button class="checkout-btn">Finalizar Compra</button>
        </div>
    </div>
</div>

<!-- Favoritos Modal -->
<div class="modal" id="wishlist-modal">
    <div class="modal-content">
        <span class="close-btn" id="close-wishlist">&times;</span>
        <h3 class="modal-title">Seus Favoritos</h3>
        <div class="wishlist-items">
            <div class="wishlist-item">
                <img src="https://via.placeholder.com/70" alt="Produto">
                <div class="item-details">
                    <div class="item-name">Blazer Masculino Slim</div>
                    <div class="item-price">R$ 259,90</div>
                    <span class="remove-item">Remover</span>
                </div>
            </div>
            <div class="wishlist-item">
                <img src="https://via.placeholder.com/70" alt="Produto">
                <div class="item-details">
                    <div class="item-name">Vestido Floral Feminino</div>
                    <div class="item-price">R$ 149,90</div>
                    <span class="remove-item">Remover</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="checkout-btn">Ver todos</button>
        </div>
    </div>
</div>
<!-- Login Modal -->
<div class="modal" id="login-modal">
    <div class="modal-content">
        <span class="close-btn" id="close-login">&times;</span>
        <h3 class="modal-title">Login</h3>
        <form id="login-form">
            <div class="form-group">
                <label for="login-email">E-mail</label>
                <input type="email" id="login-email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Senha</label>
                <input type="password" id="login-password" required>
            </div>
            <button type="submit" class="submit-btn">Entrar</button>
            <div class="form-footer">
                Não tem uma conta? <a href="#" id="show-register">Cadastre-se</a>
            </div>
        </form>
    </div>
</div>
<!-- Register Modal -->
<div class="modal" id="register-modal">
    <div class="modal-content">
        <span class="close-btn" id="close-register">&times;</span>
        <h3 class="modal-title">Cadastre-se</h3>
        <form id="register-form">
            <div class="form-group">
                <label for="register-name">Nome Completo</label>
                <input type="text" id="register-name" required>
            </div>
            <div class="form-group">
                <label for="register-email">E-mail</label>
                <input type="email" id="register-email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Senha</label>
                <input type="password" id="register-password" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Telefone principal</label>
                <input type="password" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Telefone secundario*</label>
                <input type="password" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">CEP</label>
                <input type="text" id="cep" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Estado</label>
                <input type="text" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Cidade</label>
                <input type="text" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Bairro</label>
                <input type="text" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Endereco</label>
                <input type="text" id="register-confirm" required>
            </div>
            <div class="form-group">
                <label for="register-confirm">Numero</label>
                <input type="text" id="register-confirm" required>
            </div>
            <button type="submit" class="submit-btn">Cadastrar</button>
            <div class="form-footer">
                Já tem uma conta? <a href="#" id="show-login">Faça login</a>
            </div>
        </form>
    </div>
</div>

<!-- AJAX Cadastro -->
 <script>
    document.getElementById('cep').addEventListener('input', function(){
        let input = {
            'estado': document.getElementById('estado'),
            'cidade': document.getElementById('cidade'),
            'bairro': document.getElementById('bairro'),
            'endereco': document.getElementById('endereco'),
            'numero': document.getElementById('numero'),
        }

        fetch(`https://viacep.com.br/ws/${this.value}/json/`)

        .then(response => response.json())
        .then(data => {
            input['estado'].value = data.uf || 'teste'
        })

        .catch(error => {
            console.error(error)
        })
    })
 </script>