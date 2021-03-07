<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new post</div>

                    <div class="card-body">
                        <p id="success"></p>
                        <form @submit.prevent="addNewPost">
                            <input type="text" name="title" v-model="newPost">
                            <input type="submit" value="Submit">
                        </form>
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
              newPost: ''
            }
        },
        methods: {
            addNewPost(){

                axios.post('/post')
                .then((response)=>{

                $('#success').html(response.data.message)

                })
            }
        }
    }
</script>