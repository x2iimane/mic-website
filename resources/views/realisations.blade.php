<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{__('realisations.realizationTitle')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('components.css')

</head>

<body>

    @include('components.nav')

  <main class="pt-5" id="main">

    <!-- ======= Blog Section ======= -->
    <section class="pt-5 breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{__('realisations.realizations')}}</h2>

          <ol>
            <li><a href="/">{{__('realisations.home')}}</a></li>
            <li>{{__('realisations.realizations')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row justify-content-around">

          <div class="col-sm-12 col-md-10 entries">
              <div class="pb-5 mb-2">
                  <h3>
                      <p> Après des années de brainstorming et d’étude d’une vingtaine de problématiques dans la chaîne de production minière. Le comité de pilotage du projet Mine intelligente connectée a donné lieu à sept objectifs qui feront naissance à des réalisations industrielles innovantes, des publications scientifiques au domaine de l’industrie 4.0 
                          et des opportunités pour les jeunes marocains afin de monter en compétences en digitalisation du secteur industrielle au Maroc et en Afrique. </p>
                      
                      <p> Ces réalisations seront pilotées par un ensemble d'équipes d’experts en industrie et 
                          des professeurs chercheurs en informatique et en sciences des 
                          matériaux à travers sept sujets de thèses: 
                        </p>
                  </h3>
              </div>
                <article class="entry">
                      <div class="row">
                          <div class="col-sm-10 col-md-4">
                              <div class="entry-img">
                                  <img src="<?php echo url('/'); ?>/img/realisations/these_1/1.jpg" alt="" class="img-fluid h-auto">
                              </div>
                          </div>
                          <div class="col-sm-10 col-md-8">
                              <h2 class="entry-title px-4">
                                <a href="\realisations\1">{{__('realisations.onlineAnalizer')}}</a>
                              </h2>
                              <div class="entry-content">
                                  <h4>
                                    {{__('realisations.content1')}}
                                  </h4>
                                  <div class="read-more">
                                      <a href="\realisations\1">{{__('realisations.readMore')}}</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_2/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4">
                              <a href="\realisations\2">{{__('realisations.title2')}}</a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                                {{__('realisations.content2')}}
                              </h4>
                              <div class="read-more">
                                  <a href="\realisations\2">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_3/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4">
                              <a href="\realisations\3">{{__('realisations.title3')}}</a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                                 {{__('realisations.content3')}}
                              </h4>
                              <div class="read-more">
                                  <a href="\realisations\3">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_4/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4" style="top : 55%">
                              <a href="\realisations\4">
                                    {{__('realisations.title4')}}
                                </a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                                {{__('realisations.title4')}}
                              </h4>
                              <br>
                              <div class="read-more">
                                  <a href="\realisations\4">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                    </div>
              </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_5/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4" style="top : 55%">
                              <a href="\realisations\5">
                                {{__('realisations.title5')}}
                            </a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                              {{__('realisations.title5')}}
                              </h4>
                              <div class="read-more">
                                  <a href="\realisations\5">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_6/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4" style="top : 55%">
                              <a href="\realisations\6"> {{__('realisations.title6')}}</a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                              {{__('realisations.title6')}}
                              </h4>
                              <br><br>
                              <div class="read-more">
                                  <a href="\realisations\6">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>

              <article class="entry">
                  <div class="row">
                      <div class="col-sm-10 col-md-4">
                          <div class="entry-img">
                              <img src="<?php echo url('/'); ?>/img/realisations/these_7/1.jpg" alt="" class="img-fluid h-auto">
                          </div>
                      </div>
                      <div class="col-sm-10 col-md-8">
                          <h2 class="entry-title px-4" style="top : 55%">
                              <a href="\realisations\7">{{__('realisations.title7')}}</a>
                          </h2>
                          <div class="entry-content">
                              <h4>
                                {{__('realisations.content7')}}
                              </h4>
                              <br><br>
                              <div class="read-more">
                                  <a href="\realisations\7">{{__('realisations.readMore')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>
          </div>
        </div>
      </div>
    </section>
  </main>

    @include('components.footer')

</body>

</html>
