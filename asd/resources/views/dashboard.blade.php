<x-app-layout>
    <style>
        /* Panel de Colores */
    :root{
        --primary-color: #2359ee;
        --panel-color: rgb(71, 71, 71);
        --text-color: rgb(224, 214, 214);
        --black-light-color: #070606;
        --border-color: #e6e5e5;
        --toggle-color: #DDD;
        --box1-color: #4DA3FF;
        --box2-color: #e2b240;
        --box3-color: #a66cdd;
        --box4-color: #46b871;
        --box5-color: #5680db;
        --box6-color: #dd6c7f;
        --title-icon-color: #6a6f74;
        --title-icon-color-invert: #6a6f74;
        --number-color: rgb(111, 162, 240);
    }
        /* Fin Panel de Colores */

        /* Dashboard */
    .dashboard{
        position: relative;
        background-color: var(--panel-color);
        min-height: 10vh;
        padding: 10px 14px;
        transition: var(--tran-05);
    }

    .dash-content .title{
        display: flex;
        align-items: center;
        margin: 20px 0 20px 0;
        color: #4DA3FF;
        margin-left: 30px;
    }
    .dash-content .title:hover{
        color: white;
    }

    .dash-content .title i{
        height: 35px;
        width: 35px;
        background-color: var(--primary-color);
        border-radius: 6px;
        color: var(--title-icon-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--text-color);
    }
    .dash-content .title .text{
        font-size: 24px;
        font-weight: 500;
        color: var(--text-color);
        margin-left: 10px;

    }

        /* Panel de Tablas */

    .dash-content .boxes{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 15px;
        margin-left: 50px;
        margin-right: 50px;
    }
    .dash-content .boxes .box{
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 12px;
        width: calc(100% / 3 - 10px);
        padding: 15px;
        background-color: var(--box1-color);
        transition: var(--tran-05);
    }
    .boxes .box i{
        font-size: 35px;
        color: var(--text-color);
    }
    .boxes .box .text{
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: var(--text-color);
    }
    .boxes .box .number{
        font-size: 40px;
        font-weight: 500;
        color: var(--text-color);
    }
    .boxes .box.box2{
        background-color: var(--box2-color);
    }
    .boxes .box.box3{
        background-color: var(--box3-color);
    }
    .boxes .box.box4{
        background-color: var(--box4-color);
    }
    .boxes .box.box5{
        background-color: var(--box5-color);
    }
    .boxes .box.box6{
        background-color: var(--box6-color);
    }
    .boxes .box.box1:hover{
        background: white;
    }
    .boxes .box.box2:hover{
        background: white;
    }
    .boxes .box.box3:hover{
        background: white;
    }
    .boxes .box.box4:hover{
        background: white;
    }
    .boxes .box.box5:hover{
        background: white;
    }
    .boxes .box.box6:hover{
        background: white;
    }
    .boxes .box.box1:hover:hover i,
    .boxes .box.box1:hover .text,
    .boxes .box.box1:hover .number{
        color: var(--box1-color);
    }
    .boxes .box.box2:hover:hover i,
    .boxes .box.box2:hover .text,
    .boxes .box.box2:hover .number{
        color: var(--box2-color);
    }
    .boxes .box.box3:hover:hover i,
    .boxes .box.box3:hover .text,
    .boxes .box.box3:hover .number{
        color: var(--box3-color);
    }
    .boxes .box.box4:hover:hover i,
    .boxes .box.box4:hover .text,
    .boxes .box.box4:hover .number{
        color: var(--box4-color);
    }
    .boxes .box.box5:hover:hover i,
    .boxes .box.box5:hover .text,
    .boxes .box.box5:hover .number{
        color: var(--box5-color);
    }
    .boxes .box.box6:hover:hover i,
    .boxes .box.box6:hover .text,
    .boxes .box.box6:hover .number{
        color: var(--box6-color);
    }
        /* Fin de Panel de Tablas*/

        /* Números Diarios */
    .cardBox{

        width: 100%;
        display: grid;
        grid-gap: 30px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .cardBox .card{

        background: var(--border-color);
        padding: 30px;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        color: var(--border-color);
        width: 300px;
    }
    .cardBox .card .numbers{

        font-weight: 500;
        font-size: 2.5em;
        color: var(--number-color);
    }
    .cardBox .card .cardName{
        color: var(--title-icon-color-invert);
        font-size: 1.1em;
        margin-top: 5px;
    }
    .cardBox .card .iconBx{
        font-size: 3.5em;
        color: var(--title-icon-color-invert);
    }
    .cardBox .card:hover{
        background: var(--box1-color);

    }
    .cardBox .card:hover .numbers,
    .cardBox .card:hover .cardName,
    .cardBox .card:hover .iconBx{
        color: var(--text-color)
    }
        /* Fin de Números Diarios */
        /* menu */
    html{
        scroll-behavior: smooth;
    }

    section[id]{
        scroll-margin-top: 250px;
    }
    .nav{

        display: flex;
        justify-content: center;
        overflow: hidden;
    }
    .topnav-fixed{
        display: flex;
        justify-content: center;
        position: fixed;
        z-index: 800;
        top: 0px;
        width: 98.5%;
        max-width: 800;
    }
    .topnav{
        background:rgb(111, 162, 240);
        overflow: hidden;
        display: flex;
        justify-content: center;

        color: #ffffff;
        margin-top: 20px;
        border-radius: 15px;
    }
    .dash-content .ti{
        display: flex;
        justify-content: center;
        color: #ffffff;
        font-size: 24px;
        font-weight: 500;
        margin-top: 23px;
    }

    .dash-content .ti:hover{
        border-color: rgb(102, 102, 102);
    }
        /* Fin del menu */
        /* Charts JS */
    .graphbox{
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-gap: 30px;
        min-height: 200px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .graphbox .box{
        background: rgb(238, 232, 232);
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        color: rgb(31, 25, 25);
        display: flex;
        width: 310px;
        height: 300px;
    }
    .graphbox .box1{
        background: rgb(238, 232, 232);
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        color: rgb(31, 25, 25);
        display: flex;
        width: 520px;
        height: 300px;
    }
    .graphbox .box2{
        background: rgb(238, 232, 232);
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        color: rgb(31, 25, 25);
        display: flex;
        width: 300px;
        height: 300px;
    }
    .graphbox .box3{
        background: rgb(238, 232, 232);
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        color: rgb(31, 25, 25);
        display: flex;
        width: 300px;
        height: 300px;
    }
    </style>
    <section class="dashboard z-1">
        <div class="dash-content">
            <div class="topnav">
                <div class="nav flex gap-4 justify-center mb-8">
                    <div class="ti border-b-4">
                        <a href="#tablas">Panel de Tablas</a>
                    </div>
                    <div class=" ti border-b-4">
                        <a href="#numeros">Números Diarios</a>
                    </div>
                    <div class="ti border-b-4">
                        <a href="#graficos">Gráficos</a>
                    </div>
                </div>
            </div>
            <section class="tablas" id="tablas">
                <div class="title">
                    <i class="fa-solid fa-table"></i>
                    <span class="text">Panel de Tablas</span>
                </div>
                <div class="boxes">
                    <a href="{{route('usuarios')}}" class="box box1">
                        <i class="fa-solid fa-users-line"></i>
                        <div class="text">Usuarios</div>
                        <div class="number">2</div>
                    </a>
                    <a href="" class="box box2">
                        <i class="fa-solid fa-address-card"></i>
                        <span class="text">Postulaciones</span>
                        <span class="number">3</span>
                    </a>
                    <a href="" class="box box3">
                        <i class="fa-solid fa-briefcase"></i>
                        <span class="text">Trabajos</span>
                        <span class="number">4</span>
                    </a>
                </div>
                <div class="boxes">
                    <a href="" class="box box4">
                        <i class="fa-solid fa-building"></i>
                        <div class="text">Empresas</div>
                        <div class="number">5</div>
                    </a>
                    <a href="" class="box box5">
                        <i class="fa-sharp fa-solid fa-building-columns"></i>
                        <span class="text">Instituciones</span>
                        <span class="number">7</span>
                    </a>
                    <a href="" class="box box6">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span class="text">Egresados</span>
                        <span class="number">8</span>
                    </a>
                </div>
            </section>
            <section class="numeros" id="numeros">
                <div class="title">
                    <i class="fa-solid fa-hashtag"></i>
                    <span class="text">Números Diarios</span>
                </div>
                {{-- boxes --}}
                <div class="cardBox">
                    {{-- card1 --}}
                    <div class="card card1">
                        <div>
                            <div class="numbers">12</div>
                            <div class="cardName">Postulaciones</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                    </div>
                    {{-- card2 --}}
                    <div class="card">
                        <div>
                            <div class="numbers">134</div>
                            <div class="cardName">Trabajos</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                    </div>
                    {{-- card3 --}}
                    <div class="card">
                        <div>
                            <div class="numbers">104</div>
                            <div class="cardName">Empresas</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-building"></i>
                        </div>
                    </div>
                    {{-- card4 --}}
                    <div class="card">
                        <div>
                            <div class="numbers">124</div>
                            <div class="cardName">Instituciones</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-sharp fa-solid fa-building-columns"></i>
                        </div>
                    </div>
                    {{-- card5 --}}
                    <div class="card">
                        <div>
                            <div class="numbers">124</div>
                            <div class="cardName">Egresados</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                    </div>
                </div>
            </section>
            <section class="graficos" id="graficos">
                <div class="title">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="text">Gráficos</span>
                </div>
                <div class="graphbox">
                    <div class="box">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="box1">
                        <canvas id="scatter1Chart"></canvas>
                    </div>
                    <div class="box2">
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div class="box3">
                        <canvas id="radar"></canvas>
                    </div>
                </div>
            </section>
        </div>
    </section>
        {{-- Menu --}}
    <script>
        $(document).ready(function(){
            var altura = $('.nav').offset().top;

            $(window).on('scroll', function(){
                if ( $(window).scrollTop() > altura ) {
                    $('.topnav').addClass('topnav-fixed');
                } else {
                    $('.topnav').removeClass('topnav-fixed');
                }
            });
        });
    </script>
        {{-- Fin del Menu --}}

        {{-- Links --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>
        {{-- Charts --}}
    <script>
        //chart 1
        const ctxx = document.getElementById('myChart');
        new Chart(ctxx, {
        type: 'polarArea',
        data: {
            labels: ['Usuarios','Postulaciones','Trabajos','Empresas','Instituciones','Egresados'],
            datasets: [{
            label: '# of Votes',
            data: [4, 4, 2, 3, 4, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
        });
        //chart 2
        const ctxxx = document.getElementById('pieChart');
        new Chart(ctxxx, {
        type: 'pie',
        data: {
            labels: ['Usuarios','Postulaciones','Trabajos','Empresas','Instituciones','Egresados'],
            datasets: [{
            label: '# of Votes',
            data: [4, 4, 2, 3, 4, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
            hoverOffset: 1
            }]
        },
        options: {
            responsive: true,

        }
        });
        //chart 3
        const ctxxxx = document.getElementById('scatter1Chart');
        new Chart(ctxxxx, {
        data: {
            labels: ['Usuarios','Postulaciones','Trabajos','Empresas','Instituciones','Egresados'],
            datasets: [{
            type: 'bar',
            label: 'Tablas',
            data: [4, 4, 2, 3, 4, 5],
            backgroundColor: [

                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            },{
            type: 'line',
            label: 'Linea',
            data: [4, 4, 2, 3, 4, 5],
            backgroundColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderColor: [
                'rgb(75, 192, 192)',
            ],
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
        });
        //chart 4
        const ctxxxxxxx = document.getElementById('radar');
        new Chart(ctxxxxxxx, {
        type: 'radar',
        data: {
            labels: ['Usuarios','Postulaciones','Trabajos','Empresas','Instituciones','Egresados'],
            datasets: [{
            label: 'Radar',
            data: [4, 4, 2, 3, 4, 5],
            fill: true,
            backgroundColor: [
                'rgba(75, 192, 192, 1)',

            ],

            pointBackgroundColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        },
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        }
        });
    </script>
</x-app-layout>
