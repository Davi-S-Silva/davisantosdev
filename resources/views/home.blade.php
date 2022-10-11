@extends('main')
@section('home')
    <section id="SobreMim" class="col-12">
        <figure>
            <img src="{{ asset('/imagens/avatar.png') }}" alt="">
        </figure>
        <article>
            <p>Olá, meu nome é</p>
            <h1>Davi Santos</h1>
            <p>Desenvolvedor front-end, programador e graduando em engenharia de software. <br>
                Técnico de computação gráfica, webdesign e desenvolvedor de games indie. <br>
                Apaixonado por essa área que cresce cada dia mais. Estou disposto a ingressar <br>
                em equipes com novas propostas e ideias inovadoras.
            </p>
            <a href="https://www.linkedin.com/in/davisantosdev/" target="_blank">Saiba mais...</a>
        </article>
    </section>
    <section id="Topicos">
        <div id="Habilidades">
            <h2>Habilidades</h2>
            <div>
                <div>
                    <h3>Programação</h3>
                    <ul>
                        <li>Php</li>
                        <li>Html5</li>
                        <li>Css3</li>
                        <li>Javascript</li>
                        <li>Jquery</li>
                        <li>Nodes.js</li>
                        <li>Mysql</li>
                        <li>C#</li>
                        <li>Laravel</li>
                        <li>React</li>
                        <li>Angular</li>
                    </ul>
                </div>
                <div>
                    <h3>CG e Games</h3>
                    <ul>
                        <li>Unity</li>
                        <li>Blender</li>
                        <li>Zbrush</li>
                        <li>Photoshop</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="Trabalhos" class="col-12">
            <h2>Trabalhos</h2>
            <ul class="col-12">
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="" alt="#" srcset="">
                        </figure>
                    </a>
                </li>
            </ul>
        </div>
        <div id="Contatos">
            <h2>Contatos</h2>
        </div>

    </section>
@endsection
