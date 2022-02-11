<template>
    <div class="card">
        <div class="card-header">About Page</div>

        <div class="card-body">
            <input v-model="message" />
            <textarea v-model="message"></textarea>
            {{ message }}
        </div>
    </div>
</template>
​
<script>
  export default {
        data() {
            return {
                message: 'hola vue 2.0'
            }
        },
  };
</script>