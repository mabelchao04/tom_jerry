<template>
    <div class="container">
        <h2>Animals Page</h2>
        <form @submit.prevent="addAnimal" class="mb-2">
            <div class="form-group">
                <input type="text" class="form-control mb-2" placeholder="Title" v-model="animal.name">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control mb-2" placeholder="Description" v-model="animal.description"></textarea>
            </div>
            <button type="submit" class="btn btn-light btn-block">Save</button>
        </form>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchAnimals(pagination.prev_page_url)">Previous</a></li>

                <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>

                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchAnimals(pagination.next_page_url)">Next</a></li>
            </ul>
        </nav>
        <div class="card card-body mb-2" v-for="animal in animals" v-bind:key="animal.id">
            <h3>{{ animal.name }}</h3>
            <p>{{ animal.description }}</p>
            <hr>
            <button @click="editAnimal(animal)" class="btn btn-warning mb-2">EDIT</button>
            <button @click="deleteAnimal(animal.id)" class="btn btn-danger">DELETE</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                animals: [],
                animal: {
                    id: '',
                    name: '',
                    description: ''
                },
                animal_id: '',
                pagination: {},
                edit : false
            }
        },

        created() {
            this.fetchAnimals();
        },

        methods: {
            fetchAnimals(page_url) {
                let vm = this;
                page_url = page_url || '/api/animals'
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.animals = res.data;
                        vm.makePagination(res);
                    })
                    .catch(err => console.log(err));
            },
            makePagination(res) {
                let pagination = {
                    current_page: res.current_page,
                    last_page: res.last_page,
                    next_page_url: res.next_page_url,
                    prev_page_url: res.prev_page_url
                }

                this.pagination = pagination;
            },
            deleteAnimal(id) {
                if(confirm('Are You Sure?')) {
                    fetch(`api/animals/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert('Animal Removed!');
                        this.fetchAnimals();
                    })
                    .catch(err => console.log(err));
                }
            },
            addAnimal() {
                if(this.edit === false) {
                    //Add
                    fetch('api/animals', {
                        method: 'post',
                        body: JSON.stringify(this.animal),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.animal.name = '';
                        this.animal.description = '';
                        alert('Animal Added!');
                        this.fetchAnimals();
                    })
                    .catch(err => console.log(err));
                } else {
                    //Update
                    fetch(`api/animals/${this.animal.id}`, {
                        method: 'put',
                        body: JSON.stringify(this.animal),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.animal.name = '';
                        this.animal.description = '';
                        alert('Animal Updated!');
                        this.fetchAnimals();
                    })
                    .catch(err => console.log(err));
                }
            },
            editAnimal(animal) {
                this.edit = true;
                this.animal.id = animal.id;
                this.animal.animal_id = animal.id;
                this.animal.name = animal.name;
                this.animal.description = animal.description;
            }
        }
    }
</script>