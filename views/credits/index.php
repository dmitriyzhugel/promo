<?php

use app\widgets\FooterWidget;
?>
<style type="text/css">
    @media (max-width: 767px) {
        .hidden-xs,
        tr.hidden-xs,
        th.hidden-xs,
        td.hidden-xs {
            display: none !important;
        }
    }
</style>
<div class="main-wrapper blog">
    <!-- BREDCRUMB -->
    <section class="bredcrumb">
        <div class="bg-image text-center" style="background-image: url('/img/bg-bredcrumb.jpg');">
            <h1>Подбор кредита</h1>
        </div>
        <div class="">
            <ul class="pager middle">
                <li>Главная</li>
                <li><a href="javascript:void(0)">Подбор кредита</a></li>
            </ul>
        </div>
    </section>
    <section class="blog-grid blog-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">Сумма:</label>
                                      <input type="number" class="form-control" id="creditSum" aria-describedby="creditSum" placeholder="Введите сумму">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">Срок:</label>
                                      <input type="number" class="form-control" id="creditTerm" aria-describedby="creditTerm" placeholder="Введите срок">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default btn-primary">Подобрать кредит</button>
                            </form>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12">
                            <div class="card card-style2">
                                <div class="promo-video bg-image" style="background-image: url('/img/blog/p3.jpg'); ">
                                    <div class="video-button video-box">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-play play-icon" aria-hidden="true" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="">Admin</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 350</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 30</a>
                                        </li>
                                    </ul>
                                    <a href="blog-singlepost-left-sidebar.html"><h4 class="card-title">Sapien eu sem consectetur amet scelerisque.</h4></a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 blog-sidebar">
                    <h4>Последние обновления</h4>
                    <div class="media-box">
                        <div class="media-icon">
                            <img src="/img/blog/c1.jpg" alt="img" class="img-full">
                        </div>
                        <div class="media-content">
                            <h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
                        </div>
                    </div>
                    <div class="media-box">
                        <div class="media-icon">
                            <img src="/img/blog/c2.jpg" alt="img" class="img-full">
                        </div>
                        <div class="media-content">
                            <h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
                        </div>
                    </div>
                    <div class="media-box">
                        <div class="media-icon">
                            <img src="/img/blog/c3.jpg" alt="img" class="img-full">
                        </div>
                        <div class="media-content">
                            <h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 blog-sidebar">
                    <h4>Может понадобиться</h4>
                    <div class="tags">
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/credit/">Кредитный калькулятор</a>
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/ipoteka/">Ипотечный калькулятор</a>
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/compare/">Сравнение кредитов</a>
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/credits/">Подбор кредита</a>
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/zaim/">Подбор займа</a>
                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/cards/">Кредитные карты</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= FooterWidget::widget();?>
</div>