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

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item" v-bind:class="{ disabled:disablePrevious }">
                            <a class="page-link" @click="previousPage()">Previous</a>
                        </li>
                        <li class="page-item" v-bind:class="{ disabled:disableNext }">
                            <a class="page-link" @click="nextPage()">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>
<script>
    /**
     * @todo Reduce code duplication
     */
    export default {
        data() {
            return {
                profiles: {},
                current_page: 1,
                last_page: null,
                next_page_url: null,
                prev_page_url: null,
                total: 0
            }
        },
        mounted() {
            this.fetchProfiles()
        },
        methods: {
            fetchProfiles: function () {
                const vm = this;

                axios.get('/admin/v1/profiles').then(function (res) {
                    vm.profiles = res.data.data;
                    vm.next_page_url = res.data.next_page_url;
                    vm.last_page = res.data.last_page;
                    vm.current_page = res.data.current_page;
                    vm.total = res.data.total;
                })
            },
            nextPage: function () {
                const vm = this;

                axios.get(this.next_page_url).then(function (res) {
                    vm.profiles = res.data.data;
                    vm.next_page_url = res.data.next_page_url;
                    vm.last_page = res.data.last_page;
                    vm.current_page = res.data.current_page;
                    vm.prev_page_url = res.data.prev_page_url;
                })
            },
            previousPage: function () {
                const vm = this;

                axios.get(this.prev_page_url).then(function (res) {
                    vm.profiles = res.data.data;
                    vm.next_page_url = res.data.next_page_url;
                    vm.last_page = res.data.last_page;
                    vm.current_page = res.data.current_page;
                    vm.prev_page_url = res.data.prev_page_url;
                })
            }
        },
        computed: {
            disablePrevious: function () {
                return this.current_page === 1;
            },
            disableNext: function () {
                return this.current_page === this.last_page;
            }
        }
    }
</script>
