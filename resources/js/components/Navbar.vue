<template>
    <v-toolbar dark class="navdark" style="background-color: #202124">
        <v-toolbar-title class="white--text">
        </v-toolbar-title>
            <div class="row" style="height: 64px">
        <div class="col-md-4" id="user">
        <v-avatar id="user-img"><img src="https://areajugones.sport.es/wp-content/uploads/2018/09/1513003918621pingu-810x400.jpg"></v-avatar>
        <v-btn icon id="user-notifications">
            <v-icon>fas fa-star </v-icon>
        </v-btn>
        <v-btn icon id="user-config">
            <v-icon>fas fa-cogs</v-icon>
        </v-btn>
        </div>
        <div class="col-md-2 offset-1">
       <h2 name="website" class="d-flex justify-content-center" style="color: white; border: 3px solid; border-radius: 15px; background-color: blue"> PriceCompare </h2>
        </div>
        <div class="col-md-2 offset-3 d-flex justify-content-center">
        <v-btn icon>
            <v-icon>home</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>fas fa-user-plus</v-icon>
        </v-btn>
        <v-btn icon>
            <v-icon>fas fa-sign-in-alt</v-icon>
        </v-btn>
        </div>
            </div>
    </v-toolbar>
</template>
<script>
    export default{
        name: 'navbar'

    }
</script>