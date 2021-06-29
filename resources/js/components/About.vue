<template>
    <div class="card">
        <div class="card-header">About Page</div>

        <div class="card-body">
            {{ message }}
        </div>
    </div>
</template>
​
<script>
  export default {
        data() {
            return {
                message: 'hola vue'
            }
        },
  };
</script>