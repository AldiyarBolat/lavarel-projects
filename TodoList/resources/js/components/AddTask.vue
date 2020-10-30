<template>
    <div class="container">
        <div id="add" class="input-group mb-3">
            <input type="text" v-model="inputText" class="form-control" placeholder="Type task...">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" @click="addTask">Add</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['userId', 'follows'],

    mounted() {
        console.log('Component mounted.')
    },

    data: function() {
        return {
            inputText: '',
        }
    },

    methods: {
        addTask(){
            const body = { inputText: this.inputText };
            axios.post('/task', body)
                .then(response => {
                    window.location = '/';
                })
                .catch(err => {
                    if (err.response.status == 401){
                        window.location = '/login';
                    }
                    alert(err);
                })
        }
    },
}
</script>
