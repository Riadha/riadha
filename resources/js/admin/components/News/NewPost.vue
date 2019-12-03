<template>
    <div class="container bg-white medium-margin-top">
        <div class="row page-introduction-row">
            <div class="col-12 admin-page-title">New Post</div>
        </div>

        <div class="row form-wrapper-row">
            <div class="col-12">
                <div class="row bordered-form-group-row">
                    <div class="form-group-label col-12">Personal Details</div>

                    <div class="form-group col-4">
                        <label for="first_name">First Name</label>
                        <input v-model="profile.first_name" type="text" class="form-control" id="first_name" aria-describedby="firstNameHelp" placeholder="Enter first name">
                        <small id="firstNameHelp" class="form-text text-muted">First name of the athlete.</small>
                    </div>
                    <div class="form-group col-4">
                        <label for="middle_name">Middle Name</label>
                        <input v-model="profile.middle_name" type="text" class="form-control" id="middle_name" aria-describedby="middleNameHelp" placeholder="Enter middle name">
                        <small id="middleNameHelp" class="form-text text-muted">Middle name of the athlete.</small>
                    </div>
                    <div class="form-group col-4">
                        <label for="last_name">Last Name</label>
                        <input v-model="profile.last_name" type="text" class="form-control" id="last_name" aria-describedby="lastNameHelp" placeholder="Enter last name">
                        <small id="lastNameHelp" class="form-text text-muted">Last name of the athlete.</small>
                    </div>
                </div>
                <div class="new_item_form">
                    <div class="form_body">

                        <div class="form-group">
                            <label for="athlete_country">Country</label>
                            <select type="text" class="form-control" id="athlete_country" aria-describedby="countrySelectHelp" v-model="profile.country">
                                <option value="KEN">Kenya</option>
                                <option value="UGA">Uganda</option>
                            </select>
                            <small id="countrySelectHelp" class="form-text text-muted">Current country for the athlete</small>
                        </div>

                        <button class="btn btn-primary" @click="create">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
    export default {
        name: 'newprofile',
        data: function () {
            return {
                profile: {
                    first_name: null,
                    middle_name: null,
                    last_name: null,
                    country: 'KEN'
                }
            }
        },
        methods: {
            create: function() {
                axios.post('/admin/v1/profiles',this.profile)
                    .then(function (response) {
                        console.log(response)
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error.response);
                    })
            }
        }
    }
</script>
