<template>
    <div>
    <v-toolbar dark class="navdark" style="background-color: #202124">
        <v-toolbar-title class="white--text">
            <h2 name="website" class="d-flex justify-content-center" style="color: white; border: 3px solid; border-radius: 15px; background-color: blue"> PriceCompare </h2>
        </v-toolbar-title>
                <div class="navbar-guest col-md-7" v-if="user_type==3">
                    <div class="row" style="height: 64px">

                    <div class="col-md-2 offset-6">
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
                </div>
                <div class="navbar-user col-md-7" v-else-if="user_type==2">
        <div class="row" style="height: 64px">
        <div  class="col-md-4" id="user">
                        <v-avatar id="user-img"><img :src="img"></v-avatar>
                        <v-btn icon id="user-notifications">
                            <v-icon>fas fa-star </v-icon>
                        </v-btn>
                        <v-btn icon id="user-config">
                            <v-icon>fas fa-cogs</v-icon>
                        </v-btn>
                    </div>
                </div>
                </div>


    </v-toolbar>
    </div>
</template>
<script>
    export default{
        name: 'navbar',
        props: ['img','alerturl','config','user_type']

    }
</script>