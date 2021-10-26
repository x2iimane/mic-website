<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ __('realisations.realizationTitle')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('components.css')

</head>

<body>

    @include('components.nav')

  <main class="pt-5" id="main">
    <section class="pt-5 breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ __('realisations.realizations')}}</h2>
          <ol>
            <li><a href="/">{{ __('nav.home')}}</a></li>
            <li><a href="/realisations">{{ __('realisations.realizations')}}</a></li>
            <li>{{ __('realisations.onlineAnalizer')}}</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <div class="pt-lg-0 col-sm-12 col-md-9">
                    <div class="p-5 info-box">
                        <div class="section-title p-5">
                            <h1><B><span style="color: #566885;">{{ __('realisations.onlineAnalizer')}}</span></B></h1>
                        </div>
                        <h1 class="p-3 pb-5" style="color: #566885;">
                            {{ __('realisations.content1')}}
                        </h1>
                        <div class="entry-img">
                            <img src="<?php echo url('/'); ?>/img/realisations/these_1/1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-start">
                            <h1 class="p-3">{{ __('realisations.problematic')}}</h1>
                            <h3 class="p-4">
                                Chaque phase de la production métallurgique nécessite un pilotage à travers des capteurs et des actionneurs. Une des phases les plus compliquées est le processus de la flottation, où on doit assurer la stabilité des concentrations des minerais flottés. Cette procédure de contrôle des concentrations au niveau de la mousse de flottation doit être en temps réel.
                            </h3>
                            <h1 class="p-3">Objectifs</h1>
                            <h3 class="p-4">
                                Notre objective est de trouver une solution utilisable 24 heures sur 24 dans toutes les unités de flottation, moins coûteuse, qui donne des résultats en temps réel et pourraient donner des informations importantes sur la situation des minéraux dans les cellules de flottation ce qui nous donne le pouvoir de prédire et réagir instantanément au changements de la chaîne de productions.
                            </h3>
                            <div class="entry-img text-center pb-3">
                                <img src="<?php echo url('/'); ?>/img/realisations/these_1/2.jpg" alt="" class="img-fluid w-75">
                            </div>
                            <h1 class="p-3">{{ __('realisations.addedvalue')}}</h1>
                            <h3 class="p-4">
                                Notre objective est de trouver une solution utilisable 24 heures sur 24 dans toutes les unités de flottation, moins coûteuse, qui donne des résultats en temps réel et pourraient donner des informations importantes sur la situation des minéraux dans les cellules de flottation ce qui nous donne le pouvoir de prédire et réagir instantanément au changements de la chaîne de productions.
                            </h3>
                            <div class="entry-img text-center pb-3">
                                <img src="<?php echo url('/'); ?>/img/realisations/these_1/3.jpg" alt="" class="img-fluid">
                            </div>
                            <h1 class="p-3">{{ __('realisations.results')}}</h1>
                            <h3 class="p-4">
                                Chaque phase de la production métallurgique nécessite un pilotage à travers des capteurs et des actionneurs. Une des phases les plus compliquées est le processus de la flottation, où on doit assurer la stabilité des concentrations des minerais flottés. Cette procédure de contrôle des concentrations au niveau de la mousse de flottation doit être en temps réel.
                            </h3>
                            <div class="entry-img text-center pb-3">
                                <img src="<?php echo url('/'); ?>/img/realisations/these_1/4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 p-5">
                    <div class="member">
                        <h2 class="pb-5">{{ __('realisations.team')}}</h2>
                        <div class="member-info">
                            <h4>Pr. El Hassan ABDELWAHED</h4>
                            <span>{{ __('realisations.supervisor')}}</span>
                            <span>Professeur, Département informatique, laboratoire LISI, FSSM, UCA Marrakech</span>
                            <h4>Pr. Abdessamad KHALIL</h4>
                            <span>Co-directeur de thèse</span>
                            <span>Professeur en sciences des matériaux à l’ENSMR</span>
                            <h4>Pr. Sara QASSIMI </h4>
                            <span>Co-directeur de thèse</span>
                            <span>ofesseur en Informatique au laboratoire L2SI, FSTG, UCA Marrakech</span>
                            <h4>M. Abdelmalek BOUSSETTA </h4>
                            <span>Encadrant Reminex</span>
                            <span>Directeur du centre des analyses (MANAGEM)</span>
                            <h4>M. Abderrahmane BENHAYOUN </h4>
                            <span>Encadrant Reminex</span>
                            <span>Responsable systèmes informatiques (MANAGEM)</span>
                            <h4>Mme. Oumkeltoum AMAR </h4>
                            <span>Encadrante ingénieur imagerie (MASciR)</span>
                            <h4>Ph.D Ahmed BENDAOUIA </h4>
                            <span>PhD student, Département informatique, laboratoire LISI, FSSM, UCA Marrakech</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>

    @include('components.footer')

</body>

</html>
