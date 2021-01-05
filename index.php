<?php
define('SECURITY', true); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curriculum Gianluca Xxxxx</title>
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body class="A4">
    <section class="sheet">
      <div class="profile">
        <div class="descrizione">
          <h1>
            <i class="fas fa-fw fa-user-circle"></i>
            Profilo
          </h1>

          <div class="content">
            <div>
              Sono un amante dell'informatica e ho maturato anni di esperienza
              in forma indipendente.
            </div>
            <div class="margineprofilo">
              Ho un percorso di studi variegato, in cui alle competenze tecniche
              ho sommato una veduta sociale e internazionale, con il fine di
              avere gli strumenti per approcciare al meglio il mercato globale.
            </div>

            <div class="margineprofilo">
              Abituato a gestire autonomamente le mansioni, sono altrettanto
              entusiasta di lavorare in team e confrontarmi con altre persone.
            </div>
          </div>
        </div>
        <div class="lingue">
          <h1>
            <i class="fas fa-fw fa-head-side-cough"></i>
            Lingue
          </h1>
          <div class="content">
            <table class="tablecenter">
              <tr>
                <td>Italiano</td>
                <td>Madrelingua</td>
              </tr>
              <tr>
                <td>Inglese</td>
                <td>B1</td>
              </tr>
              <tr>
                <td>Spagnolo</td>
                <td>B1</td>
              </tr>
              <tr>
                <td>Francese</td>
                <td>A1</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="patenti">
          <h1>
            <i class="fas fa-fw fa-id-card"></i>
            Patente
          </h1>
          <div class="content">
            <strong>A</strong>
            <span>&</span>
            <strong>B</strong>
            <div>
              <i class="fas fa-fw fa-car"></i>

              Automunito

              <i class="fas fa-fw fa-car"></i>
            </div>
          </div>
        </div>
        <div class="interessi">
          <h1>
            <i class="fas fa-fw fa-puzzle-piece"></i>
            Interessi
          </h1>
          <div class="content">
            <div>
              <i class="fas fa-fw fa-check"></i>
              Arduino
            </div>
            <div>
              <i class="fas fa-fw fa-check"></i>
              Raspberry Pi
            </div>
            <div>
              <i class="fas fa-fw fa-check"></i>
              Cura degli animali
            </div>
            <div>
              <i class="fas fa-fw fa-check"></i>
              Cultura generale
            </div>
          </div>
        </div>
      </div>

      <div class="data">
        <h1 class="name">
          <i class="fas fa-fw fa-user"></i>
          <span>
            Gianluca
            <span class="private">Abcdefg</span>
          </span>
        </h1>
        <h1 class="position">
          <i class="fas fa-fw fa-search-location"></i>
          Full Stack Web Developer
          <i class="fas fa-fw fa-hand-point-left"></i>
        </h1>
        <div class="personaldata">
          <div class="citta">
            <i class="fas fa-fw fa-home"></i>
            <span class="private">Somewhere (IT)</span>
          </div>
          <div class="email">
            <i class="fas fa-fw fa-at"></i>
            <a href="mailto:nospam@gianlu.dev">
              <span class="private">nospam@gianlu.dev</span>
            </a>
          </div>

          <div class="compleanno">
            <i class="fas fa-fw fa-birthday-cake"></i>
            <span class="private">01/01/1900</span>
          </div>
          <div class="sito">
            <i class="fas fa-fw fa-globe"></i>
            <a href="https://gianlu.dev/">
              <span class="private">https://gianlu.dev/</span>
            </a>
          </div>
          <div></div>
          <div class="telefono">
            <i class="fas fa-fw fa-phone"></i>
            <a href="tel:+393456789123">
              +39
              <span class="private">345 6789 123</span>
            </a>
          </div>
        </div>

        <div class="competenze">
          <h1>
            <i class="fas fa-fw fa-robot"></i>
            Competenze Informatiche <button type="button" title="Aggiungi competenza" onclick="window.location.href='aggiungiCompetenze.php'">+</button>
          </h1>
          <div class="tabellacompetenze">
            <table>
                <?php
                include 'competenze.php';
                if (SHOWFULL) { ?>
                <tr>
                <td>Python</td>
                <td>Node.js</td>
                <td>Wordpress</td>
                <td>Linux</td>
              </tr>
              <tr>
                <td>Javascript</td>
                <td>JQuery</td>
                <td>SEO</td>
                <td>Docker</td>
              </tr>
              <tr>
                <td>PHP</td>
                <td>React.js</td>
                <td>MongoDB</td>
                <td>Server & Cloud</td>
              </tr>
              <tr>
                <td>C</td>
                <td>Bootstrap</td>
                <td>MySQL</td>
                <td>Rest Api</td>
              </tr>
              <tr>
                <td>Golang</td>
                <td>CSS3/SCSS</td>
                <td>Redis</td>
                <td>Office Suite</td>
              </tr>
              <tr>
                <td>Bash</td>
                <td>HTML5</td>
                <td>Nginx</td>
                <td>Git</td>
              </tr>
              <?php }
                ?>
            </table>
          </div>
        </div>
        <div class="lavori">
          <h1>
            <i class="fas fa-fw fa-briefcase"></i>
            Esperienze Lavorative
          </h1>
          <div>
            <strong class="datacalendario">Aprile 2013 - Gennaio 2016</strong>
            <br />
            <b>
              Libero Professionista
            </b>
            <br />
            <span class="fa-cogs"></span>
            Sviluppo indipendente di applicativi web
          </div>
          <div>
            <strong class="datacalendario">Maggio 2014 - Giugno 2014</strong>
            <br />
            <b>
              Collaboratore Esterno &nbsp;
              <i class="fas fa-fw fa-map-marker-alt"></i>
              <span class="private">ABC Defghijk</span>
              s.r.l.
            </b>
            <br />
            <span class="fa-cogs"></span>

            Enterprise Automation
          </div>

          <div>
            <strong class="datacalendario">Aprile 2013 - Giugno 2013</strong>
            <br />
            <b>
              Collaboratore Esterno &nbsp;
              <i class="fas fa-fw fa-map-marker-alt"></i>
              <span class="private">ABC Defghijk</span>
              s.r.l.
            </b>
            <br />
            <span class="fa-cogs"></span>

            Datasets & Enterprise Automation
          </div>
          <div>
            <strong class="datacalendario">Marzo 2013 - Aprile 2013</strong>
            <br />
            <b>
              Stage Web Marketing &nbsp;
              <i class="fas fa-fw fa-map-marker-alt"></i>
              <span class="private">ABC Defghijk</span>
              s.r.l.
            </b>
          </div>
        </div>

        <h1>
          <i class="fas fa-fw fa-user-graduate"></i>
          Istruzione e Formazione
        </h1>
        <div class="formazione">
          <div>
            <strong class="datacalendario">Ottobre 2015 - Ottobre 2019</strong>
            <br />
            <b>
              <i class="fas fa-fw fa-map-marker-alt"></i>
              &nbsp; La Sapienza Università di Roma
              <br />
            </b>
            <span class="fa-cogs"></span>

            Laurea Triennale in Cooperazione Internazionale e Sviluppo
          </div>
          <div>
            <strong class="datacalendario">Novembre 2012 - Marzo 2013</strong>
            <br />
            <b>
              <i class="fas fa-fw fa-map-marker-alt"></i>
              &nbsp;
              <span class="private">Abcde, Abcde (XI)</span>
              <br />
            </b>
            <span class="fa-cogs"></span>

            Corso di Web Marketing
          </div>
        </div>
      </div>
      <div class="trattamento">
        <span class="privateauthorization">Autorizzo</span>
        il trattamento dei dati personali contenuti nel mio curriculum vitae in
        base all’art. 13 del D. Lgs. 196/2003 e all’art. 13 del Regolamento UE
        2016/679 relativo alla protezione delle persone fisiche con riguardo al
        trattamento dei dati personali.
        <span class="privatemessage"></span>
      </div>
    </section>
    <script type="text/javascript" src="scripts.js"></script>
  </body>
</html>
