<template>
    <main>
        <div class="wrapper">
            <div class="content-page">
                <div class="content">
                    <navbar/>
                    <topbar/>
                    <div class="container-fluid">
                        <slot/>
                    </div>
                </div>
           <Footer/>
            </div>
        </div>
    </main>
</template>

<script>
import Navbar from "./navbar";
import Topbar from "./topbar";
import Footer from "./footer";

export default {
    components: {
        Topbar,
        Navbar,
        Footer,
    }
}
</script>
