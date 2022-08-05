<template>
    <main>
        <div class="row botoes">
            <div class="col-3">
                <router-link :to="{ name: 'Register' }">
                    <b-button variant="primary">
                        <uil-plus class="logo" />
                    </b-button>
                </router-link>
            </div>
            <div class="col-3">
                <router-link :to="{ name: 'Search' }">
                    <b-button variant="primary">
                        <uil-search class="logo" />
                    </b-button>
                </router-link>
            </div>
        </div>
        <div>
            <table class="table table-borderless glass">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="produto in produtos" :key="produto.id">
                        <td>{{ produto.codigo }}</td>
                        <td>{{ produto.nome }}</td>
                        <td>{{ produto.valor }}</td>
                        <td>{{ produto.estoque }}</td>
                        <td>{{ produto.cidade }}</td>                     
                        <td>
                            <router-link :to="{ name: 'MyEdit', params: { parametro: produto.id } }">
                                <b-button variant="outline-primary">
                                    <uil-pen class="logo" />
                                </b-button>
                            </router-link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</template>

<script>
import { UilPen, UilSearch, UilPlus } from '@iconscout/vue-unicons';

export default {
    components: {
        UilPen,
        UilSearch,
        UilPlus
    },
    data() {
        return {
            produtos: [],
            codigo: "",
            nome: "",
            valor: "",
            estoque: "",
            cidade: ""
        };
    },
    methods: {
        getProducts() {
            this.$http.get("/busca").then((response) => {
                this.produtos = response.data
            })
        },
    },
    created() {
        this.getProducts()
    }
};

</script>

<style scoped>
main {
    justify-content: flex-start;
    align-items: flex-center;
    text-align: center;
    flex-direction: column;
}

.table {
    width: 100%;
}

.glass {
    border: 0px;
    color: var(--color-text-light-blank);
}

.botoes {
    width: 100%;
    justify-content: center;
    margin-top: 2%;
}
</style>