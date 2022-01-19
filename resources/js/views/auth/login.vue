<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form method="POST" @submit.prevent="submit">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value=""  autocomplete="email" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"  autocomplete="current-password">

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Logar
                                    </button>

                                    <a class="btn btn-link" href="">
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
export default {
    name: "Home",
    data(){
        return{
            form:{
                email: 'caiossxdgamer@gmail.com',
                password: 'caisosxd123ss',
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
