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
            <li>{{ __('realisations.title3')}}</li>
          </ol>
        </div>
      </div>
    </section>
      <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <div class="container">
              <div class="row">
                  <div class="pt-lg-0 col-sm-12 col-md-9">
                      <div class="p-5 info-box">
                          <div class="section-title">
                              <h1><B><span style="color: #566885;">{{ __('realisations.title3')}}</span></B></h1>
                          </div>
                          <h1 class="p-3 pb-5" style="color: #566885;">
                              {{ __('realisations.content3')}}
                          <div class="entry-img p-5">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_3/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                          <div class="text-start">
                            <h1 class="p-3">{{ __('realisations.problematic')}}</h1>
                              <h3 class="p-4">
                                  L’industrie minière est un secteur d’activité stratégique, en permanence sous pression et très contraignant. Ce secteur est face à l’exploitation des gisements de ressources minérales de plus en plus profonds, de qualité mitigée avec des teneurs de plus en plus faibles. Ces gisements sont difficiles à exploiter et posent de réels challenges en termes de rentabilité et de compétitivité.  Une innovation du procédé et modification dans la chaîne de traitement de minerai est nécessaire afin de pouvoir extraire la matière première marocaine de manière intelligente et efficiente.
                              </h3>
                              <div class="entry-img text-center pb-3">
                                  <img src="<?php echo url('/'); ?>/img/realisations/these_3/2.jpg" alt="" class="img-fluid h-auto">
                              </div>
                              <h1 class="p-3">Objectifs</h1>
                              <h3 class="p-4">
                                  Valorisation des ressources minérales à faible teneur par la mise en œuvre d’une technologie de tri.
                              </h3>
                              <div class="entry-img text-center pb-3">
                                  <img src="<?php echo url('/'); ?>/img/realisations/these_3/3.jpg" alt="" class="img-fluid h-auto">
                              </div>
                              <h1 class="p-3">{{ __('realisations.addedvalue')}}</h1>
                              <h3 class="p-4">
                                  <ul>
                                    <li>
                                        <b>Rendre les gisements à faible teneur économiquement exploitable.</b>
                                    </li>
                                    <li>
                                        <b>Améliorer l’efficacité de l’usine.</b>
                                    </li>
                                    <li>
                                        <b>Rejeter le stérile dans une phase avancée, ce qui permettra de réduire le besoin de traitement des résidus et de protéger l’environnement.</b>
                                    </li>
                                    <li>
                                          <b>Économiser en énergie, eau et réactifs.</b>
                                    </li>
                                    <li>
                                        <b>Abaisser la teneur de coupure.</b>
                                    </li>
                                    <li>
                                        <b>Éliminer la variabilité des teneurs.</b>
                                    </li>
                                  </ul>
                                </h3>
                            </div>
                        </div>
                      </div>
                  <div class="col-sm-12 col-md-3 p-5">
                      <div class="member">
                          <h2 class="pb-5">{{ __('realisations.team')}}</h2>
                          <div class="member-info">
                              <h4>personne 1</h4>
                              <span>rôle</span>
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
