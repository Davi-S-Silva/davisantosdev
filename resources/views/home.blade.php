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
                        <li>Bootstrap</li>
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
                @for ($i = 0; $i < 9; $i++)
                <li class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <figure>
                            <img src="{{asset('/imagens/projetos/3d/personagem.jpg')}}" alt="#" srcset="">
                        </figure>
                        <figcaption>3d</figcaption>
                    </a>
                </li>
                @endfor  
            </ul>
        </div>
        <div id="Contatos">
            <h2>Contatos</h2>
            <p>
                Entre em contato comigo, estou disponivel para conversarmos, seja para falarmos sobre conhecimentos, 
                <br>trabalhos freelancer ou em alguma empresa. 
            </p>
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">WhatsApp</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Linkedin</a></li>
            </ul>
        </div>
    </section>
@endsection
