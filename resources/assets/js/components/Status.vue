<template>
    <span v-bind:class="text" >
       {{  message }}
    </span>
</template>
<script>

    export default{
        props: ['message'],
        data(){
            return {
                    text : 'label label-success'
                }

        },
        mounted() {
            if(this.message == 'Published'){
               this.text = 'label label-success'
            }else if(this.message == 'Deleted'){
                this.text = 'label label-danger'
            }else{
                this.text = 'label label-warning'
            }
        }
    }
</script>
