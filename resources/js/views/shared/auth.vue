<template>
    <main>
        <div class="auth-fluid">
            <div class="auth-fluid-form-box" >
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">
                        <div class="auth-brand text-center text-lg-start">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo.png" alt="" height="18"></span>
                            </a>
                        </div>
                        <slot/>
                        <footer class="footer footer-alt">
                            <p class="text-muted">Não tem conta? <a href="" class="text-muted ms-1"><b>Criar uma conta</b></a></p>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">Criado com muito amor!</h2>
                    <p>
                        - PAINEL COS
                    </p>
                </div>
            </div>
        </div>


    </main>
</template>

<script>
export default {
}
</script>
