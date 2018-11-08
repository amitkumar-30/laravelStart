<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <not-found v-if="!(this.$gate.isAdmin())"></not-found>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
