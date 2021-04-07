<template>
    <div>
        <h2>Animals</h2>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchAnimals(pagination.prev_page_url)">Previous</a></li>
              <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchAnimals(pagination.next_page_url)">Next</a></li>
            </ul>
        </nav>
        <div class="card card-body mb-2" v-for="animal in animals" v-bind:key="animal.id">
            <h3>{{ animal.name }}</h3>
            <p>{{ animal.description }}</p>
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
                        vm.makePagination(res.meta, res.links);
                    })
                    .catch(err => console.log(err));
            },
            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }

                this.pagination = pagination;
            }
        }
    }
</script>