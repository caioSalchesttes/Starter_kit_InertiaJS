<template>
    <div>
        <h4 class="mt-0">ENTRAR</h4>
        <form class="form-horizontal m-t-30 mt-4" @submit.prevent="submit">
            <div class="mb-3">
                <label >Email</label>
                <input type="email" class="form-control" :class="{'is-invalid': errors.email}" placeholder="Email" v-model="form.email" autofocus>
                <ul v-if="errors.email" class="parsley-errors-list filled"  aria-hidden="false">
                    <li class="parsley-required">{{errors.email}}</li>
                </ul>
                {{form.email}}
            </div>
            <div class="mb-3">
                <a href="" class="text-muted float-end"><small>Esqueceu sua senha?</small></a>
                <label >Senha</label>
                <input type="password" v-model="form.password" class="form-control parsley-error" :class="{'is-invalid': errors.email}" placeholder="Senha">
            {{form.password}}
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
import Layout from "./Layout";
import { Inertia } from '@inertiajs/inertia'
export default {
    name: "login",
    layout: (h, page) => h(Layout, () => child),
    layout: Layout,
    components: {
        Layout,
    },
    props: {
        errors: Object,
    },
    data(){
        return{
            form:{
                email: null,
                password: null,
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
