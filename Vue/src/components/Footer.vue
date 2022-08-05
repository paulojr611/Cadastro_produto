<template>
    <footer class="footer">
        <h1> </h1>
    </footer>
</template>

<script>
export default {
    name: 'FooterHome',
}
</script>

<style scoped>
footer {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 60px;

    background: rgb(72, 12, 168, 0.50);
    background: linear-gradient(90deg, rgba(72, 12, 168, 1) 0%, rgba(86, 11, 173, 1) 35%, rgba(114, 9, 183, 1) 100%);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(44, 7, 53, 0.23);
}
</style>