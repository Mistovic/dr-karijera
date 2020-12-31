<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];</script>
    <script src="https://www.chartjs.org/dist/2.7.1/Chart.bundle.js" type="text/javascript"></script>
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <script src="https://www.chartjs.org/samples/latest/utils.js" type="text/javascript"></script>
    <script
        src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/amcharts.js"></script>
    <script
        src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/gauge.js"></script>
    <script
        src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/radar.js"></script>
    <script
        src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/plugins/export/export.min.js"></script>
    <link rel="stylesheet"
        href="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/plugins/export/export.css"
        type="text/css" media="all">
    <script
        src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/amcharts/themes/light.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Test za inostrano poslovanje (Evropa)</title>
    <meta name="keywords" content="skola, matematika, ucenje, studiranje">
    <meta name="description" content="Gimnazija beohgrad">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="https://testovi.doktorzakarijeru.com/application/views/gimnazija/images/favicon.ico"
        type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="Overall feed"
        href="https://testovi.doktorzakarijeru.com/feed">

    <script src="https://testovi.doktorzakarijeru.com/public//javascript/jquery.js" type="text/javascript"></script>

    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/jquery.min.js"
        type="text/javascript"></script>

    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/sitelib.js"
        type="text/javascript"></script>

    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/hoverIntent.js"
        type="text/javascript"></script>
    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/superfish.js"
        type="text/javascript"></script>
    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/jquery.validate.js"
        type="text/javascript"></script>
    <script src="https://testovi.doktorzakarijeru.com/application/views/gimnazija/javascript/jquery.countdown.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('ul.sf-menu').superfish();
        });
    </script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script src="../JS/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../css/testovi.css">
</head>



<body>
    <header id="test-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Test 4 tipa temperamenta</h1>
                </div>

                <div class="col-md-12">
                    <p class="light">
                        <span id="current-question"></span>/<span id="question-number"></span>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main id="test-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="window">
                        <form id="checkform" class="step-form" name="checkform"
                            action="https://testovi.doktorzakarijeru.com/testiranje/test_in_poslovanje_results/eu/kupljeniTestovi"
                            method="post">

                            <?php
                                $file = fopen(__DIR__ . '/4tipa-test.txt', 'r');
                                $i = 1;
                                $j = 1;

                                if (!$file)
                                    die('Test ne postoji i ne moze se otvoriti!');

                                while (($line = fgets($file)) !== false) {

                                        if($line !== "\n" && $j == 1) {
                                            echo '<ul class="fld-set" style="margin-left:0px;text-align:justify">';
                                            echo '<li id="'.$i.'">';
                                            echo '<input type="radio" name="'.$i.'" value="'.$j.'" id="odgovor'.$i.'_'.$j.'">';
                                            echo '<label class="test-answer" for="odgovor'.$i.'_'.$j.'">'.$line.'</label><br>';
                                            $j++;
                                        }
                                        elseif ($line !== "\n" && $j != 1) {
                                            echo '<input type="radio" name="'.$i.'" value="'.$j.'" id="odgovor'.$i.'_'.$j.'">';
                                            echo '<label class="test-answer" for="odgovor'.$i.'_'.$j.'">'.$line.'</label><br>';
                                            $j++;

                                        }
                                        elseif ($line == "\n" && $i == 1) {
                                            echo '<div class="btn-wrap"><a class="btn btn-next">Sledece</a></div>';
                                            echo '</li>';
                                            echo '</ul>';
                                            echo '<!-- Kraj bloka '.$i.' -->';

                                            $j=1;
                                            $i++;
                                        }
                                        else {
                                            echo '<div class="btn-wrap"><a class="btn btn-previous">Prethodno</a><a class="btn btn-next">Sledece</a></div>';
                                            echo '</li>';
                                            echo '</ul>';
                                            echo '<!-- Kraj bloka '.$i.' -->';

                                            $j=1;
                                            $i++;
                                        }

                                }
                         
                                echo '<div class="btn-wrap"><a class="btn btn-previous">Prethodno</a><button class="dugmeButton btn" onclick="ProveraForme()" type="button" name="save">Pošalji</button></div>';
                                echo '</li>';
                                echo '</ul>';
                                echo '<!-- Kraj bloka '.$i.' -->';

                                fclose($file);
                            ?>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../JS/jquery-3.5.1.min.js"></script>
    <script>

        /* Forma u koracima */
        var btnNext = document.querySelectorAll('.btn-next');
        var btnPrevious = document.querySelectorAll('.btn-previous');
        var $form = $('#checkform');
        var step = 0;

        var $lists = $form.find('ul');
        var $place = $('#question-number');
        var $current = $('#current-question');
        $place.text($lists.length);
        $currentIntiger = 1;
        $current.text('1');
        console.log($lists);

        $(btnPrevious).on('click', function (e) {
            $currentIntiger--;
            $current.text($currentIntiger);
            e.preventDefault();
            var fldSet = $(this).parent();
            step += 100;
            $form.css('margin-left', step + '%');
        });

        $(btnNext).on('click', function (e) {
            $currentIntiger++;
            $current.text($currentIntiger);
            e.preventDefault();
            step -= 100;
            var fldSet = $(this).parent();
            $form.css('margin-left', step + '%');
        });

        /* Prikaz selektovanog odgovora */
        var $testAnswer = $('.test-answer');
        var $radios = $('input[type="radio"]');

        $radios.on('change', function (e) {
            var $radio = $(this)
            var $radioId = $radio.attr('id');

            var $parrent = $radio.parent();
            var $labels = $parrent.find('label');

            $labels.each(function(el) {
                $label = $(this);
                $thisData = $label.attr('for');

                if ($radioId == $thisData) {
                    $label.addClass('active')
                } 
                else {
                    $label.removeClass('active')
                }
            });


        });
    </script>


    <script>
        function highlight_row(tr) {
            document.getElementById(tr).style.backgroundColor = 'rgba(255,0,0,0.2)';
        }
        function Unhighlight_row(tr) {
            document.getElementById(tr).style.backgroundColor = 'white';
        }
        function ProveraForme() {
            var countChecked = function () {
                var n = $("input:radio:checked").length;
                if (n == 10) {
                    document.getElementById("checkform").submit();
                } else {
                    for (var i = 1; i < 11; i++) {
                        if ($('input[name=' + i + ']:checked').length > 0) {
                            Unhighlight_row(i);
                        } else {
                            highlight_row(i);
                        }
                    }
                    alert("Niste odgovorili na sva pitanja.");
                    return false;
                }
            };
            countChecked();
        }
    </script>

    <script>

        $(document).ready(function () {
            var $btns = $('.btn');
            $btns.on('click', function (e) {
                var $btn = $(this);
                var $x = e.pageX - $btn.offset().left;
                var $y = e.pageY - $btn.offset().top;
                console.log('X: ', $x, 'Y: ', $y)
                var $elem = document.createElement('span');

                $elem.style.top = $y + 'px';
                $elem.style.left = $x + 'px';
                $elem.style.borderRadius = 50 + "%";
                $btn.append($elem);

                // setTimeout(function () {
                //     $elem.remove();
                // }, 500)


                console.log('Ovo je x', $x, 'ovo je Y', $y)
            });
        })

    </script>
</body>
</html>