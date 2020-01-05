<template>
    <div class="container">
        <div class="element-header row align-items-center">
            <div class="col-md-auto mr-auto">
                <h2>All Users</h2>
            </div>
        </div>
        <div class="element-body">
            <div class="row component-boxes">
                <div class="col-12">
                    <div class="component-box box-white">
                        <div class="component-box-inner">
                            <div class="component-box-profile">
                                <div class="user-profile-layout">
                                    <div class="responsive">
                                        <div class="row mt-2 mb-2">

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full name</th>
                                                    <th>email</th>
                                                    <th>Created</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <app-user v-for="(user, index) in users"
                                                          :index="index"
                                                          :user="user"
                                                          :key="user.id"
                                                          @removeUser="removeUser"
                                                ></app-user>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import appUser from './TableRow';

    export default {
        data() {
            return {
                users: [],
            };
        },
        computed: {},
        methods: {
            fetchUsers() {
                axios
                    .get('/users')
                    .then(response => (this.users = response.data));
                console.log(this.users);
            },
            removeUser(index) {
                this.users.splice(index, 1);
            }
        },
        components: {
            appUser
        },
        created() {
            this.fetchUsers();
        }
    }
</script>
