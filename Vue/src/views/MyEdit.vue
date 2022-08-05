<template>
    <main>
        <container>
            <div class="row cards">
                <div class="row">
                    <div class="col glass">
                        <div>
                            <h1>Editar usuário {{ this.$route.params.usuario }}</h1>
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <b-form-input v-model="codigo" placeholder="Código" type="text" min="1"
                                            max="99"></b-form-input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <b-form-input v-model="nome" placeholder="Nome"></b-form-input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <b-form-input type="number" max="99999" min="1" v-model="valor"
                                            placeholder="Valor"></b-form-input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <b-form-input type="number" max="99999" min="0" v-model="estoque"
                                            placeholder="Estoque"></b-form-input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <b-form-input v-model="cidade" placeholder="Cidade"></b-form-input>
                                    </div>
                                </div>



                                <div class="row mt-3" style="align-content: center;
                                    justify-content: center;
                                    align-items: center;
                                    margin-bottom:10px;">
                                    <div class=" col-10">
                                        <b-button @click="validaAntesEditar" block variant="primary">Salvar</b-button>
                                        <b-button @click="excluir" block variant="danger">Excluir</b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </container>
    </main>
</template>

<script>
export default {
    data() {
        return {
            codigo: "",
            nome: "",
            valor: "",
            estoque: "",
            cidade: ""
        };
    },

    methods: {

        Editar() {
            var data = { codigo: this.codigo, nome: this.nome, valor: this.valor, estoque: this.estoque, cidade: this.cidade }

            this.$http.post(`Editar/${this.$route.params.parametro}`, data) 
           

                setTimeout(() => {
                    this.$router.push("/Mylist")
                }, 1000)
            
        },
        validaAntesEditar() {
            var data = { codigo: this.codigo, nome: this.nome, valor: this.valor, estoque: this.estoque, cidade: this.cidade }

            if (data.codigo == undefined || data.nome == undefined || data.valor == undefined || data.estoque == undefined) {
                console.log(data);
                this.mostrarToast("danger", "Insira valor válido.", "Campo inválido.");
            }
            else {
                this.Editar();
                this.mostrarToast("success", "Atualizado com sucesso.", "Put realizado.");
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

        excluir() {
            this.$http.delete(`Deletar/${this.$route.params.parametro}`)
            
                setTimeout(() => {
                    this.$router.push("/Mylist")
                }, 1000)
            
        },
    },
};
</script>

<style scoped>
</style>