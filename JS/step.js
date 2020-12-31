$(document).ready(function () {

  /* Forma u koracima */
  var btnNext = document.querySelectorAll(".btn-next");
  var btnPrevious = document.querySelectorAll(".btn-previous");
  var $form = $(".step-form");
  var step = 0;

  var $lists = $form.find(".fld-set");


  var $place = $("#question-number");
  var $current = $("#current-question");

  $place.text($lists.length);
  $currentIntiger = 1;
  $current.text("1");

  $(btnPrevious).on("click", function (e) {
    $currentIntiger--;
    $current.text($currentIntiger);
    e.preventDefault();
    var fldSet = $(this).parent();
    step += 100;
    $form.css("margin-left", step + "%");
  });

  $(btnNext).on("click", function (e) {
    $currentIntiger++;
    $current.text($currentIntiger);
    e.preventDefault();
    step -= 100;
    var fldSet = $(this).parent();
    $form.css("margin-left", step + "%");
  });

  /* Prikaz selektovanog odgovora */
  var $testAnswer = $(".test-answer");
  var $radios = $('input[type="radio"]');
  var $checkbox = $('input[type="checkbox"]');

  $radios.on("change", function (e) {
    var $radio = $(this);
    var $radioId = $radio.attr("id");

    var $parrent = $radio.parent();
    var $labels = $parrent.find("label");

    $labels.each(function (el) {
      $label = $(this);
      $thisData = $label.attr("for");

      if ($radioId == $thisData) {
        $label.addClass("active");
      } else {
        $label.removeClass("active");
      }
    });
    console.log($parrent);
  });

  $checkbox.on("change", function (e) {
      var $checkbox = $(this);
      var $checkId = $checkbox.attr("id");
      console.log($checkId);
      var $parrent = $checkbox.parent();
      var $labels = $parrent.find("label");

      $labels.each(function (el) {
        $label = $(this);
        $thisData = $label.attr("for");

        if ($checkId  == $thisData) {
          $label.toggleClass("active");
        }
      });
    
    });

  



// var btnInit = $('#init');
// console.log( 'Ovo je dugem!!', btnInit)
// btnInit.click(step());

});
