<template>
    <div class="container">
        <div id="add" class="input-group mb-3">
            <li class="list-group-item" style="width: 800px">{{ this.text }}</li>
            <button class="btn btn-primary ml-4 mt-2"
                    style="width: 100px; height: 35px"
                    v-text="statusText"
                    @click="changeStatus"></button>
            <button class="btn btn-primary ml-4 mt-2"
                    style="width: 100px; height: 35px; background-color: red;"
                    @click="deleteTask">Delete</button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['id', 'text', 'done'],

    methods: {
        deleteTask(){
            axios.post('/task/' + this.id)
                .then(response => {
                    window.location = '/';
                })
                .catch(err => {
                    alert(err)
                    if (err.response.status == 401){
                        window.location = '/login';
                    }
                })
        },
        changeStatus(){
            axios.post('/task/' + this.id, {
                _method: 'put'
                })
                .then(response => {
                    window.location = '/';
                })
                .catch(err => {
                    alert(err)
                    if (err.response.status == 401){
                        window.location = '/login';
                    }
                })
        }
    },

    computed: {
        statusText() {
            return this.done == "0" ? 'To Do' : 'Done';
        }
    }
}
</script>
