<template>
    <div class="container bg-white medium-margin-top">
        <div class="row page-introduction-row">
            <div class="col-12 admin-page-title">Profiles</div>
        </div>

        <div class="row action_item_row">
            <router-link to="/admin/profiles/new" class="add_new_button">
                New Profile
            </router-link>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="profile in profiles">
                            <td>{{profile.id}}</td>
                            <td>{{profile.first_name}} {{profile.middle_name}} {{profile.last_name}}</td>
                            <td>{{profile.country}}</td>
                            <td><a :href="profile.slug">View</a></td>
                            <td>Edit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                profiles: {}
            }
        },
        mounted() {
            this.fetchProfiles()
        },
        methods: {
            fetchProfiles: function () {
                const vm = this;

                axios.get('/admin/v1/profiles').then(function (res) {
                    console.log(res)
                    vm.profiles = res.data.data
                })
            }
        }
    }
</script>
