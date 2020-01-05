<template>
    <tr>
        <td>{{ index + 1 }}</td>
        <td>{{ user.name }}</td>
        <td v-if="user.email">
            <a :href="'mailto:'+user.email">
                {{ user.email }}
            </a>
        </td>
        <td>{{ user.created_at }}</td>
        <td>
            <span class="float-right">
                <a href="javascript:void(0)" @click="edit()">
                    edit
                </a>
                <span> | </span>
                <a href="javascript:void(0)"
                   @click="destroy(user.id)">delete
                </a>
            </span>
        </td>
    </tr>
</template>

<script>

    export default {
        props: ['user', 'index', ],
        computed: {
        },
        methods: {
            edit() {
                this.$router.push({
                    name: 'user.edit',
                    params: {
                        user_id: this.user.id
                    }
                })
            },
            destroy(id) {
                if (!window.confirm("delete?")) {
                    return false;
                }else{
                    this.$toastr.s("deleted");
                    this.$emit('removeUser', this.index);
                }

                /*
                UserService.deleteUser(id).then(res => {
                    this.$toastr.s(this.$t("deleted"));
                    this.$emit('removeUser', this.index);
                }).catch(error => {
                    console.log(error.response.data)
                    this.$toastr.e(this.$t(error.response.data));
                });
                *
                 */
            }
        }
    }
</script>
