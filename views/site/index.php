<?php
use yii\helpers\Html;
?>



<div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">    </button>
            </div>
            <div class="contact">
                <div class="title center">Request Quote</div>
                <form role="form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control has-error">
                                <span class="error">Please fill Email</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Budget</label>
                                <select class="form-control">
                                    <option>$500-$1000</option>
                                    <option>$1000-$1500</option>
                                    <option>$1500-$2000</option>
                                    <option>$2500-$3000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="comment">Message</label>
                                <textarea class="form-control comment" id="" rows="7"></textarea>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="pull-left">
                            <div class="custom-check">
                                <input type="checkbox" checked value="" id="modal-check1" name="" />
                                <label for="modal-check1"></label>
                                <span>I agree to the terms of use and privacy policy.</span>
                            </div>

                            <div class="custom-check">
                                <input type="checkbox" value="" id="modal-check2" name="" />
                                <label for="modal-check2"></label>
                                <span>I want that you callback me as soon as possible</span>
                            </div>
                        </div>
                        <div class="pull-right protect">
                            <span><img src="images/lock.png" alt="" /></span><label>Your privacy is protected</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="custom-radio col-sm-12">
                            <span>Want to subscribe our news?</span>
                            <input id="modal-yes" type="radio" name="quize" checked value="male">
                            <label for="modal-yes">Yes</label>
                            <input id="modal-no" type="radio" name="quize" value="female">
                            <label for="modal-no">No</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn send-btn" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div id="about" class="about">
    <div id="main-carousel" class="carousel vertical slide" data-ride="carousel">
        <!-- Indicators -->
        <?php if (count($model) >1) {?>
        <ol class="carousel-indicators">
            <?php
            for($i = 0; $i<=count($model)-1; $i++) {
                ?>
                <li data-target="#main-carousel" data-slide-to="<?=$i;?>"></li>
            <?php } ?>
        </ol>
        <?php } ?>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach($model as $value) {
                $itemClass = $i++ == 0 ? "item active" : "item";
                ?>
                <div class="<?=$itemClass?>">
                    <?= Html::img($value['imageFile']) ?>
                <div class="carousel-caption">
                    <div class="carousel-container">
                        <?= Html::tag('p', $value['title']);?>
                        <?= Html::tag('p', $value['caption']);?>
                        <a class="btn" href="">About us</a>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</div>

<section id="services" class="services">
    <img class="center waves" src="images/waves.png" alt="" />
    <div class="title"><span style="color: #000">WE ARE</span> Custom software development company</div>

    <div class="container">
        <div class="row">
            <?php
            foreach ($services as $service ) { ?>
                <div class="col-sm-4">
                    <?= Html::img($service['imageFile'], ['class'=>'img-responsive']) ?>
                    <div class="service">
                        <?= Html::tag('p', $service['title'], ['class'=>'service-title']);?>
                        <?= Html::tag('p', $service['description'], ['class'=>'service-desc']);?>
                    </div>
                </div>
           <?php } ?>
        </div>
    </div>
</section>

<section id="case_studies" class="case_studies">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title center">Our case studies</div>
                <p class="center">
                    Check out some of our IT outsourcing case dedicated to a number<br> of featured projects that we've done.
                    Each item is dedicated to a specific project developed by us for our clients,<br> and it contains some interesting
                    insights on the development process, technologies used and the final results.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="btn-block center">
                <a class="btn" href="">view all</a>
                <a class="btn" href="">contact us</a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="/images/testimonials/img1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/images/testimonials/img1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/images/testimonials/img1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/images/testimonials/img1.png" alt="">
                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="video">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
                    </div>
                    <div class="title">Youtown</div>
                    <div class="desc">Revolutionary Gov 2.0 solution connecting citizens with their local
                        governments and city information through a mobile app that was built by Redwerk for DotGov, Inc.
                    </div>
                    <div class="date desc">4 hours ago - by Max Lysikov</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 left">
                <img class="wave" src="images/waves.png" alt="" />
                <div class="title">Our blog</div>
                <p class="col-sm-9">
                    Still thriller with CES 2016 and not sure which technology events could surprise you more in the
                    upcoming year? We've made a list of top tech...
                </p>
                <div class="clearfix"></div>
                <a class="btn" href="">Read More</a>
            </div>
            <div class="col-sm-7">
                <img class="img-responsive blog-img" src="images/blog-image.png" alt="" />
            </div>
        </div>
    </div>
</section>

<section id="partners" class="partners">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo1.png" alt="" /></div>
            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo2.png" alt="" /></div>
            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo3.png" alt="" /></div>

            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo4.png" alt="" /></div>
            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo5.png" alt="" /></div>
            <div class="col-sm-2 col-xs-4"><img src="images/partners/logo6.png" alt="" /></div>
        </div>
    </div>
</section>

<section id="contact-info" class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 center">
                <span>What are you waiting for?</span>
                <a class="btn" href="">Contact us</a>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <img class="center waves" src="images/waves.png" alt="" />
            <div class="title center">GET IN TOUCH<br> WITH OUR TEAM</div>
        </div>
        <div class="row">
            <form role="form">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control has-error" id="email">
                            <span class="error">Please fill Email</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="budget">Budget</label>
                            <select class="form-control" id="budget">
                                <option>$500-$1000</option>
                                <option>$1000-$1500</option>
                                <option>$1500-$2000</option>
                                <option>$2500-$3000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="comment">Message</label>
                                <textarea class="form-control comment" id="comment" rows="7">
                                </textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="pull-left">
                        <div class="custom-check">
                            <input type="checkbox" checked value="" id="check1" name="" />
                            <label for="check1"></label>
                            <span>I agree to the terms of use and privacy policy.</span>
                        </div>

                        <div class="custom-check">
                            <input type="checkbox" value="" id="check2" name="" />
                            <label for="check2"></label>
                            <span>I want that you callback me as soon as possible</span>
                        </div>
                    </div>
                    <div class="pull-left protect">
                        <span><img src="images/lock.png" alt="" /></span><label>Your privacy is protected</label>
                    </div>
                </div>

                <div class="row">
                    <div class="custom-radio col-md-12 col-xs-12">
                        <span>Want to subscribe our news?</span>
                        <input id="male" type="radio" name="quize" checked value="male">
                        <label for="male">Yes</label>
                        <input id="female" type="radio" name="quize" value="female">
                        <label for="female">No</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn send-btn" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>