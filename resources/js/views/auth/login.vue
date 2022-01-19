<template>
    <div>
        <h4 class="mt-0">ENTRAR</h4>
        <form class="form-horizontal m-t-30 mt-4" @submit.prevent="submit">
            <div class="mb-3">
                <label >Email</label>
                <input type="email" class="form-control" :class="{'is-invalid': errors.email}" placeholder="Email" id="email"  name="email" value="" autofocus>
                <ul v-if="errors.email" class="parsley-errors-list filled"  aria-hidden="false">
                    <li class="parsley-required">{{errors.email}}</li>
                </ul>
            </div>
            <div class="mb-3">
                <a href="" class="text-muted float-end"><small>Esqueceu sua senha?</small></a>
                <label >Senha</label>
                <input type="password" class="form-control parsley-error" :class="{'is-invalid': errors.email}" placeholder="Senha" id="password" name="password" autocomplete="current-password">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                    <label class="form-check-label" for="checkbox-signin">Lembre de mim</label>
                </div>
            </div>
            <div class="d-grid mb-0 text-center">
                <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Entrar </button>
            </div>
        </form>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
export default {
    name: "Home",
    props: {
        errors: Object,
    },
    data(){
        return{
            form:{
                email: 'caiossxdgamer@gmail.com',
                password: 'caisosxd123s',
            }
        }
    },
    methods:{
        submit(){
            Inertia.post('/login', this.form)
        }
    }
}
</script>

<style scoped>

</style>
