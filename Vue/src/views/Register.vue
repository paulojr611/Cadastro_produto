<template>
    <main>
        <div>
            <container>
                <div class="row cards">

                    <div class="row">
                        <div class="col glass">
                            <div>
                                <h1>Cadastro Produto</h1>
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
                                            <b-button @click="validaAntesRegistro" block variant="primary">Salvar
                                            </b-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </container>
        </div>
    </main>
</template>
<script>
import router from '@/routes/router'

export default {
    name: "RegisterProduct",
    methods: {
        addProduto() {
            var data = { codigo: this.codigo, nome: this.nome, valor: this.valor, estoque: this.estoque, cidade: this.cidade }
            this.$http.post("/criar", data).then((response) => {
                console.log(response)
                if (response.request.status === 200) {
                    this.voltaTela();
                    this.mostrarToast("success", "error", "Criação realizada.")
                }

            })
            this.produtos.push(data)
            this.codigo = ""
            this.nome = ""
            this.valor = ""
            this.estoque = ""
            this.cidade = ""
        },
        validaAntesRegistro() {
            var data = { codigo: this.codigo, nome: this.nome, valor: this.valor, estoque: this.estoque, cidade: this.cidade }

            if (data.codigo == undefined || data.nome == undefined || data.valor == undefined || data.estoque == undefined || data.cidade == undefined) {
                this.mostrarToast("danger", "Existem valores vazios ou inválidos.", "Campo inválido.")
            } else {
                this.mostrarToast("success", "Produto registrado com sucesso.", "Criação realizada.")
                this.addProduto();
            }
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
        mostrarToast(tipo = null, texto = " ", titulo = " ") {
            this.$bvToast.toast(`${texto}`, {
                title: `${titulo}`,
                autoHideDelay: 3000,
                variant: tipo,
                solid: true
            });
        },
        voltaTela() {
            router.push('/MyList');
        }
    }
}
</script>
<style scoped>
main {
    justify-content: center;
    align-items: center;
    text-align: center;
}
</style>