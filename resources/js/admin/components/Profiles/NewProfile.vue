<template>
    <div class="container bg-white medium-margin-top">
        <div class="row page-introduction-row">
            <div class="col-12 admin-page-title">New Profile</div>
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

                    <div class="col-12">
                        <div class="my-8">
                            <image-uploader
                                    :preview="true"
                                    :className="['fileinput', { 'fileinput--loaded': hasImage }]"
                                    capture="environment"
                                    :debug="1"
                                    doNotResize="gif"
                                    :autoRotate="true"
                                    outputFormat="verbose"
                                    @input="setImage"
                            >
                                <label for="fileInput" slot="upload-label">
                                    <figure>
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="32"
                                                height="32"
                                                viewBox="0 0 32 32"
                                        >
                                            <path
                                                    class="path1"
                                                    d="M9.5 19c0 3.59 2.91 6.5 6.5 6.5s6.5-2.91 6.5-6.5-2.91-6.5-6.5-6.5-6.5 2.91-6.5 6.5zM30 8h-7c-0.5-2-1-4-3-4h-8c-2 0-2.5 2-3 4h-7c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM16 27.875c-4.902 0-8.875-3.973-8.875-8.875s3.973-8.875 8.875-8.875c4.902 0 8.875 3.973 8.875 8.875s-3.973 8.875-8.875 8.875zM30 14h-4v-2h4v2z"
                                            ></path>
                                        </svg>
                                    </figure>
                                    <span class="upload-caption">{{
            hasImage ? "Replace" : "Click to upload"
          }}</span>
                                </label>
                            </image-uploader>
                        </div>
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
                    country: 'KEN',
                    profile_pic: null
                },
                hasImage: false,
            }
        },
        methods: {
            create: function() {
                var vm = this;

                axios.post('/admin/v1/profiles',this.profile)
                    .then(function (response) {
                        vm.$router.push({ name: 'profiles'})
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error.response);
                    })
            },
            setImage: function(output) {
                this.hasImage = true;
                this.profile.profile_pic = output;
            }
        }
    }
</script>

<style>
    #fileInput {
        display: none;
    }
    h1,
    h2 {
        font-weight: normal;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        display: inline-block;
        margin: 0 10px;
    }
    a {
        color: #42b983;
    }
    .my-8 {
        margin-top: 4rem;
        margin-bottom: 4rem;
    }
</style>
