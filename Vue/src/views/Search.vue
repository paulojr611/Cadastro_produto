<template>
    <main>
        <container>
            <div class="col glass">
                <div>
                    <h1>Busca por Id</h1>
                    <uil-search size="150px" class="logo" />
                    <div class="row">
                        <div class="col-12 mt-3">
                            <b-form-input type="number" v-model="id" max="99999" min="0" placeholder="ID">
                            </b-form-input>
                        </div>
                        <div class="col-12 mt-3" style="margin-bottom:10px;">
                            <b-button @click="validaAntesBuscar" block variant="primary">
                                Salvar
                            </b-button>
                        </div>
                    </div>
                </div>
            </div>
        </container>
    </main>
</template>
<script>
import { UilSearch } from '@iconscout/vue-unicons';

export default {
    name: "BuscaId",
    components: {
        UilSearch
    }, methods: {
        validaAntesBuscar() {
            if (this.id == undefined || this.id == "") {
                this.mostrarToast("danger", "Insira um ID válido.", "Campo inválido.");
            }
            else {
                this.mostrarToast("success", "Infelizmente, por falta de tempo não consegui implementar essa função", "Busca realizada.");
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
    }
};
</script>
<style scoped>
main {
    justify-content: center;
    align-items: center;
    text-align: center;
}
</style>