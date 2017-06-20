<template>
    <div class="form-group">
        <label for="password">Password:</label>
        
        <div class="input-group col-sm-4">
            <input type="text" v-if="show" class="form-control" v-model="password" placeholder="Password">
            <input type="password" v-else id="password" class="form-control" v-model="password" placeholder="Password">
            
            <span class="input-group-btn">
                <button class="btn btn-default" @click="toggle()">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <button class="btn btn-primary" @click="save()">Save</button>
            </span>
        </div>
    </div>
</template>

<script>
    
    export default {
        
        props: ["value"],
        
        data() {
            return {
                password: "",
                show: false,
            }
        },
        
        created() {
            this.password = this.value;
        },
        
        methods: {
            toggle() {
                this.show = !this.show;
            },
            
            save() {
                let url = document.URL + "/password";

                axios.patch(url, {password: this.password});
            }
        }
    }
    
</script>