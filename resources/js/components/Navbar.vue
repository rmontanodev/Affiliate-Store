<template>
    <v-toolbar dark class="navdark" style="background-color: #202124">
        <v-toolbar-title class="white--text">
        </v-toolbar-title>
        <v-avatar><img src="https://areajugones.sport.es/wp-content/uploads/2018/09/1513003918621pingu-810x400.jpg"></v-avatar>
        <v-btn icon>
            <v-icon>fas fa-star </v-icon>
        </v-btn>
        <v-btn icon>
            <v-icon>fas fa-cogs</v-icon>
        </v-btn>
        <v-spacer></v-spacer>
        <v-btn icon>
            <v-icon>home</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>fas fa-user-plus</v-icon>
        </v-btn>
        <v-btn icon>
            <v-icon>fas fa-sign-in-alt</v-icon>
        </v-btn>
    </v-toolbar>
</template>
<script>
    export default{
        name: 'navbar'

    }
</script>