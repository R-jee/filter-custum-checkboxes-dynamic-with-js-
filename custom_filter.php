<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
    .page-breadcrumbs {
        display: none !important;
    }

    .row.cls-spacer {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .spl-demo-page .post h3 {
        line-height: normal;
        font-size: 1rem;
        margin: .75rem .33rem;
        letter-spacing: normal;
        margin-bottom: 0;
        min-height: 70px;
        display: block;
    }

    .row.cls-spacer.end-secline {
        border-top: 1px solid #e9e9e9;
    }

    .cls-spacer.end-secline .post h3 {
        font-size: 14px;
        min-height: 60px;
    }

    .cls-spacer.end-secline .post.box {
        min-height: 240px;
        margin-bottom: 30px;
    }

    .bg-page-nws h2 {
        color: #fff;
        font-family: Open Sans Condensed, sans-serif;
        font-size: 40px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 12px;
        position: relative;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, .35);
        text-transform: uppercase;
    }

    .bg-page-nws .txt-orange {
        font-size: 22px;
        line-height: normal;
        text-transform: uppercase;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .15);
    }

    .bg-page-nws .button {
        font-family: Open Sans Condensed, sans-serif;
    }

    .spl-main-page {
        background-color: #014690;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .bg-page-nws {
        display: flex;
        width: 100%;
        max-width: 1200px;
        margin-right: auto;
        margin-left: auto;
        min-height: 480px;
        align-items: center;
    }

    .bg-page-nws .bg-page-nws-inner {
        display: block;
        max-width: 640px;
        width: 100%;
        padding: 0 15px;
    }

    .txt-orange {
        color: #f50;
    }

    .filter_rc_nws h4 {
        display: block;
        color: #505050;
        margin-top: 25px;
        font-size: 18px;
        line-height: normal;
        margin-bottom: 15px;
    }

    .filter_rc_nws ul {
        display: block;
        margin: 0;
        padding: 0;
    }

    .filter_rc_nws {
        display: block;
        padding-left: 12px;
    }

    .filter_rc_nws ul li {
        display: block;
        list-style: none;
        margin-left: 2px;
        line-height: normal;
        font-size: 15px;
        position: relative;
        margin-bottom: 8px;
        cursor: pointer;
    }

    .filter_rc_nws ul li input {
        margin-right: 8px;
    }

    .filter_rc_nws ul li input {
        margin-right: 0;
        margin-bottom: 0;
        position: absolute;
        left: 0;
        right: 0;
        display: block;
        top: 0;
        bottom: 0;
        width: 100%;
        opacity: 0;
        cursor: pointer;
        height: 100%;
    }

    .filter_rc_nws ul li::before {
        content: "";
        display: inline-block;
        width: 15px;
        height: 15px;
        background: transparent;
        margin-right: 8px;
        line-height: normal;
        border-radius: 2px;
        border: 2px solid #505050;
        position: relative;
        top: 2px;
    }

    .filter_rc_nws ul li.activefilter::after {
        content: "";
        display: block;
        background: #ff5500;
        width: 8px;
        height: 8px;
        position: absolute;
        top: 7px;
        left: 3.5px;
    }

    @media screen and (max-width:900px) {
        .row.cls-spacer.end-secline {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column-reverse;
        }

        .row.cls-spacer .small-9.columns {
            width: 100%;
        }

        .row.cls-spacer .small-3.columns {
            width: 100%;
        }

        .filter_rc_nws {
            display: block;
            padding-left: 15px;
            margin-bottom: 40px;
        }
    }

    @media screen and (max-width:480px) {
        .bg-page-nws h2 {
            font-size: 25px;
        }
    }
</style>

<body>

    <section class="post-archive-content spl-demo-page">
        <div class="row cls-spacer">
            <div class="small-12 columns">
                <div class="row">
                    <div class="small-12 medium-4 columns end">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/beyond-the-quoted-price-of-the-barrel-total-cost-of-ownership/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Cost-of-Ownership2.jpg">
                                <h3>Beyond the Quoted Price of the Barrel: Total Cost of Ownership</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/eliminating-pinking-optimized-screw-design-solves-discoloration-challenges/">
                                <img src="https://xaloy.com/wp-content/uploads/2022/04/Banner-Eliminating-Discoloration-Throughput-Challenges-scaled.jpg">
                                <h3>Eliminating Pinking: Optimized Screw Design Solves Discoloration Challenges</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/increasing-throughput-and-decreasing-scrap-rate-to-5/">
                                <img src="https://xaloy.com/wp-content/uploads/2022/04/Xaloy-Banner-Increasing-Throughput-Decreasing-Scrap-Rate-scaled.jpg">
                                <h3>Increasing Throughput and Decreasing Scrap Rate to 5%</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cls-spacer end-secline">
            <div class="small-9 columns">
                <div class="row">
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/eliminating-shot-to-shot-inconsistencies/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Shot-to-Shot6-scaled.jpg">
                                <h3>Eliminating Shot-to-Shot Inconsistencies</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/reducing-screw-recovery-time/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Screw-Recovery-Time4-scaled.jpg">
                                <h3>Reducing Screw Recovery Time</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/enhancing-melt-quality-to-reduce-scrap-rate/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Melt-Quality6-scaled.jpg">
                                <h3>Enhancing Melt Quality to Reduce Scrap Rate</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/reducing-scrap-rates/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Reducing-Scrap-Rates5-scaled.jpg">
                                <h3>Reducing Scrap Rates</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/extending-the-working-life-of-extrusion-screws/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Life-of-Extrusion-Screws4-scaled.jpg">
                                <h3>Extending the Working Life of Extrusion Screws</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/extending-the-working-life-of-injection-screws/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Life-of-Injection-Screws7-scaled.jpg">
                                <h3>Extending the Working Life of Injection Screws</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/increasing-production-rates/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/06/Xaloy-Banner-Increasing-Production-Rates7-scaled.jpg">
                                <h3>Increasing Production Rates</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-application-notes="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/producing-premium-injection-molded-medical-products/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Medical-Injection2-1-scaled.jpg">
                                <h3>Solutions for Medical Injection Applications</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-application-notes="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/solutions-for-medical-tubing-applications/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Medical-Tubing2-1-scaled.jpg">
                                <h3>Solutions for Medical Tubing Applications</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-application-notes="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/solutions-for-extrusion-packaging-applications/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Packaging-Extrusion2-scaled.jpg">
                                <h3>Solutions for Extrusion Packaging Applications</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-application-notes="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/solutions-for-injection-molding-packaging-applications/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Packaging-Injection2-scaled.jpg">
                                <h3>Solutions for Injection Molding Packaging Applications</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/optimizing-barrel-temperatures/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Barrel-Temperatures2-scaled.jpg">
                                <h3>Optimizing Barrel Temperatures</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/beyond-the-quoted-price-of-the-barrel-total-cost-of-ownership/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Cost-of-Ownership2.jpg">
                                <h3>Beyond the Quoted Price of the Barrel: Total Cost of Ownership</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/selecting-the-right-heat-treatment/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Heat-Treatments2-scaled.jpg">
                                <h3>Selecting the Right Heat Treatment</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/selecting-the-right-screw-material/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Screw-Materials2.jpg">
                                <h3>Selecting the Right Screw Material</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/reduce-splay-defects-in-your-injection-molded-parts/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Splay2.jpg">
                                <h3>Reduce Splay Defects in Your Injection Molded Parts</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/selecting-the-right-barrel-materials/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Barrel-Materials2.jpg">
                                <h3>Selecting the Right Barrel Materials</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-processing-essentials="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/upsizing-or-downsizing-your-injection-molding-unit/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/07/Xaloy-Banner-Upsizing-or-Downsizing2-scaled.jpg">
                                <h3>Upsizing or Downsizing Your Injection Molding Unit</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-news="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/xaloy-plant-in-pulaski-takes-on-new-life/">
                                <img src="">
                                <h3>Xaloy Plant in Pulaski Takes on New Life</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/increasing-plasticizing-rate/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/08/Xaloy-Banner-Chicago-Mold2.jpg">
                                <h3>Increasing Plasticizing Rate</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/producing-splay-free-products/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/08/Xaloy-Banner-Legrand2.jpg">
                                <h3>Producing Splay Free Products</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/cutting-scrap-rate-by-enhancing-melt-quality/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/08/Xaloy-Banner-Melt-Quality-Medical2.jpg">
                                <h3>Cutting Scrap Rate by Enhancing Melt Quality</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/decreasing-scrap-rate-to-1/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/08/Xaloy-Banner-Yanfeng2.jpg">
                                <h3>Decreasing Scrap Rate to 1%</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-news="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/xaloy-covid-19-measures-honoured/">
                                <img src="">
                                <h3>Xaloy COVID-19 Measures Honoured</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/reduce-rejection-rate-to-5/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/12/Xaloy-Banner-Alcon-scaled.jpg">
                                <h3>Reduce Rejection Rate To 5%</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/reduce-defect-rate-to-0/">
                                <img src="https://xaloy.com/wp-content/uploads/2021/12/Xaloy-Banner-Bullard4-scaled.jpg">
                                <h3>Reduce Defect Rate To 0%</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-news="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/xaloy-revamps-commercial-organization/">
                                <img src="">
                                <h3>Xaloy Revamps Commercial Organization</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/increasing-throughput-and-decreasing-scrap-rate-to-5/">
                                <img src="https://xaloy.com/wp-content/uploads/2022/04/Xaloy-Banner-Increasing-Throughput-Decreasing-Scrap-Rate-scaled.jpg">
                                <h3>Increasing Throughput and Decreasing Scrap Rate to 5%</h3>
                            </a>
                        </div>
                    </div>
                    <div class="small-12 medium-4 columns end filter-items-nws" data-cat-success-stories="true" style="display: block;">
                        <div class="post box box-border box-rounded">
                            <a href="https://xaloy.com/eliminating-pinking-optimized-screw-design-solves-discoloration-challenges/">
                                <img src="https://xaloy.com/wp-content/uploads/2022/04/Banner-Eliminating-Discoloration-Throughput-Challenges-scaled.jpg">
                                <h3>Eliminating Pinking: Optimized Screw Design Solves Discoloration Challenges</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="filter_rc_nws">
                    <h2>Filter Resources</h2>
                    <h4>Categories</h4>
                    <ul>
                        <li class="" data-cat="application-notes"><input type="checkbox" name="filter_nws" value="application-notes">Application Notes</li>
                        <li class="" data-cat="news"><input type="checkbox" name="filter_nws" value="news">News</li>
                        <li class="" data-cat="processing-essentials"><input type="checkbox" name="filter_nws" value="processing-essentials">Processing Essentials</li>
                        <li class="" data-cat="success-stories"><input type="checkbox" name="filter_nws" value="success-stories">Success Stories</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        jQuery(document).ready(function() {
            jQuery(".filter_rc_nws ul li").click(function() {
                jQuery(this).toggleClass("activefilter");
            });

            //  NWS- filter checked box function work ----


            var checked_boxes = jQuery(".filter_rc_nws ul li").length;
            setInterval(() => {
                if (jQuery('.filter_rc_nws ul li input:checked').length == 0) {
                    jQuery(".post-archive-content .filter-items-nws").css('display', 'block');
                }
            }, 1000);
            for (let index = 0; index < checked_boxes; index++) {
                var check_uniq_id = null;
                var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');

                jQuery(".filter_rc_nws ul li[data-cat='" + check_uniq_id + "'] input").on("click", function() {

                    if (jQuery(".filter_rc_nws ul li[data-cat='" + check_uniq_id + "'] input").is(":checked")) {
                        jQuery(".post-archive-content .filter-items-nws[data-cat-" + check_uniq_id + "='true']").css('display', 'block');
                    } else if (jQuery(".filter_rc_nws ul li[data-cat='" + check_uniq_id + "'] input").is(":not(:checked)")) {
                        jQuery(".post-archive-content .filter-items-nws[data-cat-" + check_uniq_id + "='true']").css('display', 'none');
                    }
                    for (let index = 0; index < checked_boxes; index++) {
                        var check_uniq_id = null;
                        var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
                        if (jQuery(".filter_rc_nws ul li[data-cat='" + check_uniq_id + "'] input").is(":checked")) {
                            jQuery(".post-archive-content .filter-items-nws[data-cat-" + check_uniq_id + "='true']").css('display', 'block');
                        } else if (jQuery(".filter_rc_nws ul li[data-cat='" + check_uniq_id + "'] input").is(":not(:checked)")) {
                            jQuery(".post-archive-content .filter-items-nws[data-cat-" + check_uniq_id + "='true']").css('display', 'none');
                        }
                    }
                });
            }


        });
    </script>

</body>


</html>
