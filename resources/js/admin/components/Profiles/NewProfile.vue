<template>
    <div class="container">
        <div class="row">
            <div class="new_item_form">
                <div class="form_title">
                    New Profile
                </div>
                <div class="form_body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" aria-describedby="firstNameHelp" placeholder="Enter first name">
                        <small id="firstNameHelp" class="form-text text-muted">First name of the athlete.</small>
                    </div>

                    <div class="form-group">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" aria-describedby="middleNameHelp" placeholder="Enter middle name">
                        <small id="middleNameHelp" class="form-text text-muted">Middle name of the athlete.</small>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" aria-describedby="lastNameHelp" placeholder="Enter last name">
                        <small id="lastNameHelp" class="form-text text-muted">Last name of the athlete.</small>
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>
