<template>
    <main>
        <div class="row cards" style="justify-content: space-evenly;">
            <div class="col-12">
                <h2>Tecnologias utilizadas</h2>
                <br>
            </div>

            <div class="row">
                <div class="col glass vuejs">
                    <div>
                        <h1>VueJs</h1>
                        <img src="@/assets/logo.png">
                        <div>
                            <h5><b>Framework Frontend</b></h5>
                            <ul>
                                <li>Utilizado componentização.</li>
                                <li>Utilizado variáveis css cores.</li>
                                <li>Utilizado sistema de rotas desacoplado.</li>
                                <li>Utiliza Bootstrap para auxilio no display.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col glass laravel">
                    <div>
                        <h1>Laravel</h1>
                        <img src="@/assets/laravel-logo.png">
                        <div>
                            <h5><b>Framework Backend</b></h5>
                            <ul>
                                <li>Utilizado para construção do back-end</li>
                                <li>Utilizado comunicação com banco de dados mysql</li>
                                <li>Implementação do REST</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col glass rest">
                    <div>
                        <h1>REST</h1>

                        <img src="@/assets/rest.png">

                        <div>
                            <h5><b>Recursos "REST" criados</b></h5>
                            <ul>
                                <li>GET /products - Lista todos os produtos</li>
                                <li>GET /products/{id} - Busca um produto por id</li>
                                <li>POST /products - Cria um novo produto</li>
                                <li>PUT /products/{id} - Edita um produto</li>
                                <li>DELETE /products/{id} - Deleta um produto</li>
                                <li>GET /cidades - Lista todas as cidades</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
<script>

export default {
    name: "HomePage",
}
</script>
<style>
main {
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100% !important;
}

.container {
    padding: 2px 16px;
    height: 100%;
    width: 100%;
}

ul {
    margin: 10px;
}
</style>