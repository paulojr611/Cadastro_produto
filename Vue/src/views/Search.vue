<template>
    <main>
        <container>
            <div class="col glass">
                <div>
                    <h1>Busca por Id {{ this.$route.params.usuario }} </h1>
                    <uil-search size="150px" class="logo" />
                    <div class="row">
                        <div class="col-12 mt-3">
                            <b-form-input type="number" v-model="id" max="99999" min="0" placeholder="ID">
                            </b-form-input>
                        </div>
                        <div class="col-12 mt-3" style="margin-bottom:10px;">
                            <b-button @click="validaAntesBuscar" block variant="primary">Buscar</b-button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table class="table table-borderless glass">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Editar</th>
                    </tr>
                </table>
            </div>
            <div>
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
            </div>
        </container>
    </main>
</template>

<script>
import { UilPen, UilSearch } from '@iconscout/vue-unicons';

export default {
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
    name: "BuscaId",
    components: {
        UilPen,
        UilSearch

    },
    methods: {

        procura() {
            //var data = {id: this.id}
            //var data = 1
            this.$http.get(`tom/1`).then((response) => {
                this.produtos = response.data
            })
        },

        validaAntesBuscar() {
            if (this.id == undefined || this.id == "") {
                this.mostrarToast("danger", "Insira um ID válido.", "Campo inválido.");
            }
            else {
                this.procura();
            }
        },
        mostrarToast(tipo = null, texto = " ", titulo = " ") {
            this.$bvToast.toast(`${texto}`, {
                title: `${titulo}`,
                autoHideDelay: 3000,
                variant: tipo,
                solid: true
            });
        },
    },



};
</script>
<style scoped>
main {
    justify-content: center;
    align-items: center;
    text-align: center;
}

.glass {
    border: 0px;
    color: var(--color-text-light-blank);
}
</style>