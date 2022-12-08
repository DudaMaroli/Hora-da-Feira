<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Frutas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../../assets/img/logo.png" style="align-items:center;">
        <div class="container px-4 px-lg-5" >
            <a class="navbar-brand" href="../">Hora Da Feira</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"954
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Mais Produtos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="../bebidas/">Bebidas</a></li>
                            <li><a class="dropdown-item" href="../temperos/">Temperos</a></li>
                            <li><a class="dropdown-item active" href="../frutas/">Frutas e Verduras</a></li>
                            <li><a class="dropdown-item" href="../massas/">Massas, Pães e Bolachas</a></li>
                            <li><a class="dropdown-item" href="../doces/">Doces</a></li>
                            <li><a class="dropdown-item" href="../outros/">Outros</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        <input type="text" placeholder="Pesquisar..">
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- ======= Hero======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="2600" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/slides/slide01.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Frutas e Verduras</h2>
                                <p class="animate__animated animate__fadeInUp">Produtos cultivados no campo</p>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/slides/morango.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Frutas e Verduras</h2>
                                <p class="animate__animated animate__fadeInUp">Produtos cultivados no campo</p>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(./assets/slides/verduras.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Frutas e Verduras</h2>
                                <p class="animate__animated animate__fadeInUp">Produtos cultivados no campo</p>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Final do Hero -->
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
                id="lista-produtos">
            <!-- NAO APAGA É IMPORTANTE
                    <div class="col mb-5">
                        <div class="card h-100">
                           <img class="card-img-top" src="./assets/slide/slide3.jpg" alt="..." />
                           <div class="card-body p-4">
                               <div class="text-center">
                                   <h5 class="fw-bolder">Açafrão</h5>
                                   $20,00<br>
                                    Familia Hamerich<br>
                                   Contato: <br>
                                   (49)98867-6740
                               </div>
                           </div>
                        </div>
                    </div> -->
                </div>
        </div>


    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Direitos reservados à Hora Da Feira</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
const familias = [
            {
                nome: "Família Scheibel",
                contato: "(49) 99993-2227",
                produtos: [
                    {
                        nome: "Laranja",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/slide01.jpg"
                    },
                    {
                        nome: "Bergamota",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/slide01.jpg"
                    },
                    {
                        nome: "Beterraba",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Repolho",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                ],
            },
            {
                nome: "Família Turcatel",
                contato: "(49) 98885-2110",
                produtos: [
                    {
                        nome: "Cenoura",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Beterraba",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Limão Taiti",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Pêssego",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Repolho",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Limão",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    }
                ],
            },
            {
                nome: "Família Cereja",
                contato: "(49) 98861-3144",
                produtos: [
                    {
                        nome: "Pêssego",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Brócolis",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                ]
            },
            {
                nome: "Família Leite",
                contato: "(49) 99811-7466",
                produtos: [
                    {
                        nome: "Brócolis",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Alface Crespa",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Alface Americana",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Couve Folha",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Couve Flor",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Cenoura",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Beterraba",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Chicória",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Alho-Poró",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Almeirão Catalonha",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Almeirão Pão de Açúcar",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    }
                ]
            },
            {
                nome: "Família Hamerich",
                contato: "(49) 98867-6740",
                produtos: [
                    {
                        nome: "Repolho",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Tomilho",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Nabo",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Acelga",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                ]
            },
            {
                nome: "Família Scheibel",
                contato: "(49) 99993-xxxx",
                produtos: [
                    {
                        nome: "Laranja",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/slide01.jpg"
                    },
                    {
                        nome: "Bergamota",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/slide01.jpg"
                    },
                    {
                        nome: "Laranja Baia",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/slide01.jpg"
                    },
                    {
                        nome: "Beterraba",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    },
                    {
                        nome: "Limão Taiti",
                        preço: "R$ 5,00",
                        imagem: "./assets/slides/verduras.jpg"
                    }
                ],
            }
        ]

        const listaProdutos = document.querySelector('#lista-produtos');

        familias.map(familia => {
            const { produtos } = familia;

            produtos.map(produto => {
                const produtoHTML = `
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="${produto.imagem}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">${produto.nome}</h5>
                                <!-- Product price-->
                                ${produto.preço}<br>
                                ${familia.nome}<br>
                                Contato:<br>
                                ${familia.contato}
                            </div>
                        </div>
                    </div>
                </div>
                `
                listaProdutos.innerHTML += produtoHTML;
            })
        })

    </script>
</body>

</html>