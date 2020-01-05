<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Main Component</div>

                    <div class="card-body">
                        {{ info }}
                    </div>
                    <Users></Users>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Users from './users/Users.vue';

    export default {
        data() {
            return {
                info: null,
                req: ''
            };
        },
        methods: {
        },
        mounted() {
            //this.getAllUsers();
        },
        components: {
            Users
        }
    }
</script>
