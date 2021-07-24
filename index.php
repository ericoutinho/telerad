<?php get_header(); ?>

<div id="page" class="page">
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="menu-superior">
            <div class="container">
                <a class="navbar-brand" href="<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/logo-telerad-horizontal.svg" style="width:200px;height:auto;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#page">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quemsomos">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Nossos Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <section id="apresentacao" style="margin-top: 63px; display: flex; align-items:strech;">
        <div class="container" style="display: flex; align-items:strech;">
            <div class="row" style="display: flex; align-items:strech;">
                <div class="col-12 col-lg-6 lazzy from-left text-center text-lg-start" style="align-self:center;">
                    <h2 class="mb-4" style="line-height: 2.5rem;">Agilidade, segurança e confidencialidade nos laudos dos seus pacientes</h2>
                    <p class="mb-4" style="font-size: 1.1rem;">A TeleRad é uma empresa experiente e moderna, especializada em serviços de transcrição de laudos de diagnóstico.</p>
                    <p>
                        <a href="#quemsomos" class="botao-mais"><i class="fas fa-plus me-1"></i>Mais informações</a>
                    </p>
                </div>
                <div class="col-12 col-lg-6" style="display:flex; align-self:flex-end; justify-content:center;">
                    <img class="lazzy from-right" src="<?= get_template_directory_uri() ?>/assets/telerad-mulher-notebook-apresentacao.png" style="width:100%;height:auto;" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="quemsomos" style="display:flex;flex-direction:column;justify-content:center;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-start">
                    <h2 class="mb-4 lazzy from-left" style="font-size: 3rem;">Quem Somos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 lazzy from-left delay-1 text-center text-lg-start">
                    <p>A TeleRad é uma empresa com vasta experiência no mercado, e presta serviços para inúmeras clínicas, hospitais e laboratórios no Estado do Espírito Santo.</p>
                    <p>Tem como principal atividade a transcrição e padronização de laudos médicos e pareceres técnicos, oferecendo agilidade e economia para as empresas ligadas ao setor de saúde.</p>
                    <a class="botao-servicos" href="#servicos"><i class="fas fa-search me-1"></i>Conheça nossos serviços</a>
                </div>
            </div>

        </div>
        <img src="<?= get_template_directory_uri(); ?>/assets/separador.svg" style="position:absolute;bottom:-2px;left:0;width:100%;height:auto;">
    </section>

    <section id="servicos" style="position: relative;">
        <div class="container">

            <div class="row mb-4">
                <div class="col text-center lazzy from-left" style="max-width:42rem;margin:0 auto;">
                    <h2 class="mb-4" style="font-size: 3rem;">Nossos serviços</h2>
                    <p>A <strong>TeleRad</strong> presa sempre pela agilidade, mas também desenvolve um serviço pautado na confidencialidade e na total fidelidade na transcrição dos laudos de diagnóstico, entregando um <strong>trabalho de excelência e alta segurança das informações</strong>.</p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <h3 class="lazzy from-right" style="color:#23A7B4;">Saiba como tudo funciona</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="servicos-card lazzy from-bottom delay-1" style="padding:1.75rem; text-align:center;">
                        <img src="<?= get_template_directory_uri() ?>/assets/telerad-servicos-etapa-1.svg" alt="" style="width:100%; height:auto;margin-bottom:2rem;">
                        O médico ou perito faz a análise dos exames do paciente fazendo o <strong>registro em forma de áudio digital</strong>, permitindo mais agilidade.
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="servicos-card lazzy from-bottom delay-2" style="padding:1.75rem; text-align:center;">
                        <img src="<?= get_template_directory_uri() ?>/assets/telerad-servicos-etapa-2.svg" alt="" style="width:100%; height:auto;margin-bottom:2rem;">
                        Nossa central recebe o arquivo de áudio enviado pelo profissional, e faz uma <strong>fiel e detalhada transcrição</strong> em forma de laudo técnico.
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="servicos-card lazzy from-bottom delay-3" style="padding:1.75rem; text-align:center;">
                        <img src="<?= get_template_directory_uri() ?>/assets/telerad-servicos-etapa-3.svg" alt="" style="width:100%; height:auto;margin-bottom:2rem;">
                        O médico ou perito recebem o laudo já transcrito e padronizado, <strong>pronto para ser emitido e entregue ao paciente</strong>, impresso ou digitalmente.
                    </div>
                </div>
            </div>

        </div>
        <img src="<?= get_template_directory_uri(); ?>/assets/separador-contato.svg" alt="" style="position:absolute;bottom:0;left:0;width:100%;height:auto;">
    </section>

    <section id="contato">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6">
                    <h2 class="mb-3 lazzy from-left text-center text-lg-start" style="font-size: 3rem;">Contato</h2>
                    <ul class="lista-contato lazzy from-left delay-1">
                        <li><a href="#" target="_blank"><i class="fas fa-fw fa-envelope me-1"></i>contato@telerad.com.br</a></li>
                        <li><a href="#" target="_blank"><i class="fas fa-fw fa-phone me-1"></i>+55 (27) <span style="font-weight: 700; font-size:1.1rem;">5555-5585</span></a></li>
                        <li class="mb-3"><a href="#" target="_blank"><i class="fab fa-fw fa-lg fa-whatsapp"></i>+55 (27) <span style="font-weight: 700; font-size:1.1rem;">95555-5585</span></a></li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-2x fa-lg fa-instagram me-2"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-2x fa-lg fa-facebook-square me-1"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6">
                    <form id="formulario-mensagem" action="<?= admin_url("admin-ajax.php") ?>" method="POST" class="lazzy from-right border rounded bg-light p-4 shadow-sm" novalidate>
                        <div class="row">
                            <div class="col text-center">
                                <h3>Deixe sua mensagem<i style="color:#23A7B4;" class="fas fa-paper-plane ms-2"></i></h3>
                                <p style="font-size:.9rem;">Envie suas dúvidas, solicite orçamentos ou saiba mais detalhes sobre os serviços que a TeleRad oferece.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group mb-2">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" name="nome" pattern="\d{5,}" id="nome" class="form-control form-control-sm" required>
                                <div class="invalid-feedback" style="font-size:.75rem;">Informe seu nome com sobrenome.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 form-group mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Informe seu melhor e-mail" required>
                                <div class="invalid-feedback" style="font-size:.75rem;">Informe um email válido.</div>
                            </div>
                            <div class="col-12 col-lg-6 form-group mb-2">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control form-control-sm mask-telefone" placeholder="Seu telefone com DDD" required>
                                <div class="form-text" style="font-size: .75rem;">Informe somente os dígitos.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control form-control-sm" name="mensagem" id="mensagem" rows="3" placeholder="Escreva aqui a sua mensagem" required></textarea>
                                <div class="invalid-feedback" style="font-size:.75rem;">Insira aqui a mensagem que deseja enviar.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group text-center">
                                <button name="enviar" type="submit" class="btn btn-primary me-2"><i class="fas fa-check me-1"></i>Enviar</button>
                                <button type="cancel" class="btn btn-secondary"><i class="fas fa-times me-1"></i>Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    TeleRad &bullet; Laudos e Serviços &copy; 2021
                </div>
                <div class="col text-end">
                    <a href="<?= home_url() ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/logo-horizontal-negativo.svg" style="width:200px;height:auto;" alt="">
                    </a>
                </div>
            </div>
        </div>

    </footer>
</div>

<?php get_footer(); ?>