<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" v-for="user in users">
                    <div class="panel-heading">
                        <input type="text" v-model="user.name">
                    </div>
                    <div class="panel-body">
                        <p> @{{ user.username }}</p>
                        <p> @{{ user.email }}</p>
                        <p> @{{ user.address.street }}</p>
                        <p> @{{ user.address.zipcode }}</p>
                        <p> @{{ user.address.city }}</p>
                        <div  class="btn btn-primary" @click="save(user)">Modifier</div>
                        <div type="button" class="btn btn-danger" @click="destroy(user)">Supprimer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                users:[]
            }
        },
        mounted() {
            console.log('Component ready.')
            this.$user = this.$resource('users{/id}');
            this.$user.query().then((response) => {
                this.users = response.data;
              }, (response) => {
                console.log('Error',response)
              });
        },
        methods: {
            save(user){
               console.log(user.name)
               this.$user.update({id: user.id},{ name: user.name}).then((response) => {
                console.log('Success',response)
              }, (response) => {
                console.log('Error',response)
              });
            },
            destroy(user){
                 this.$user.remove({id: user.id}).then((response) => {
                this.users=this.users.filter(u => u !== user)
              }, (response) => {
                console.log('Error',response)
              });
            }
        }
    }
</script>
