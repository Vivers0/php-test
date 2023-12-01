<template>
    <div>
        <h1>Создание Сотрудника</h1>
        <form @submit.prevent="submitForm" class="mt-5">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nickname</label>
                <div class="col-sm-10">
                    <input v-model="name" type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Имя</label>
                <div class="col-sm-10">
                    <input v-model="lastname" type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Фамилия</label>
                <div class="col-sm-10">
                    <input v-model="firstname" type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Роли</label>
                <div class="col-sm-10">
                    <input v-model="roles" type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">BOD</label>
                <div class="col-sm-10">
                    <input v-model="bod" type="text" name="name" class="form-control">
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>
<script>
export default {
    data: () => ({
        name: "",
        firstname: "",
        lastname: "",
        roles: "",
        bod: ""
    }),
    methods: {
        submitForm() {
            const data = {
                name: this.name,
                firstname: this.firstname,
                lastname: this.lastname,
                roles: this.roles,
                bod: this.bod
            };
            // console.log(data)
            axios.post('/sotrudnik/create', data)
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
</style>