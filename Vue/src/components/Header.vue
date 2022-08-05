<template>
    <header>
        <nav class="container">
            <a href="/">
                <h3>Sistema de Gerenciamento</h3>
            </a>

            <a href="/MyList">
                <uil-list-ul size="55px" class="logo" />
            </a>
        </nav>
    </header>
</template>

<script>
import { UilListUl } from '@iconscout/vue-unicons';

export default {
    name: 'HeaderHome',
    components: {
        UilListUl,
    }
}
</script>

<style scoped>
header {
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;

    background: rgb(72, 12, 168, 0.50);
    background: linear-gradient(90deg, rgba(72, 12, 168, 1) 0%, rgba(86, 11, 173, 1) 35%, rgba(114, 9, 183, 1) 100%);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(44, 7, 53, 0.23);
}

a {
    text-decoration: none;
    color: var(--color-text-light);
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
</style>