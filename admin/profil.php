<? require_once __DIR__ . '/layout/header.php'; ?>
   
    <section class="container">
       <div class="container--header">
            <a href="">Ant</a>
            <nav>
                <a href="">Projet</a>
                <a href="">Devis / Factures</a>
                <a href="">Se deconnecter</a>
            </nav>
        </div>
        
        <article class="container--bloc-one">
            <h1>Mes projets en cours</h1>
              <div class="container--bloc-one--projects">
                   <div class="container--bloc-one--project">
                        <div class="container--bloc-one--project--img">
                            <img src="http://lorempicsum.com/simpsons/230/140/1" alt="">
                        </div>
                        <div class="container--bloc-one--project--content">
                            <h2>Projet 1</h2>
                            <p>Date de fin du projet : 28/02/2017</p>
                            <p>Avancée du projet : 66%</p>
                            <progress value="66" max="100"></progress>
                        </div>
                        <div><a href="">Voir le projet</a></div>
                    </div>

                    <div class="container--bloc-one--project">
                        <div class="container--bloc-one--project--img">
                            <img src="http://lorempicsum.com/simpsons/230/140/4" alt="">
                        </div>
                        <div class="container--bloc-one--project--content">
                            <h2>Projet 1</h2>
                            <p>Date de fin du projet : 28/02/2017</p>
                            <p>Avancée du projet : 17%</p>
                            <progress value="17" max="100"></progress>
                        </div>
                        <div><a href="">Voir le projet</a></div>
                    </div>
                </div>
        </article>
        
        <article class="container--bloc-two" style="position: relative; width: 575px; height: 260px;">
            <h1>Mon chiffre d'affaires (6 derniers mois)</h1>
            <canvas id="myChart" width="575" height="260" style="position: absolute; top:0; right:0; left:0; bottom:0;"></canvas>
        </article>
        
        <article class="container--bloc-three">
            <h1>Nouveau projets ?</h1>
            <p>Un client vient de vous confier un projet et vous avez accepté  ? 
Préparez-le dès maintenant !</p>
            <a href="">Go</a>
        </article>
        
    </section>
    
    <aside class="sidebar">
       <div class="sidebar--stat-gen">
            <h3>Statistiques Générales</h3>
            <p>20 projets</p>
            <p>15 clients</p>
            <p>25 000€ de C.A</p>
        </div>
        
         <div class="sidebar--stat-month">
            <h3>Statistiques du mois</h3>
            <p>1 projets ajouté</p>
            <p>0 projet terminé</p>
            <p>2 nouveaux clients</p>
            <p>2000€ de C.A</p>
        </div>
    </aside>
    
    
<!--    
  
  
  SCRIPT JS POUR CHART.JS
   
   
   -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>

<? require_once __DIR__ . '/layout/footer.php'; ?>