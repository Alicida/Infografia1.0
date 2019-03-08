var Log = require("./modules/log");
/* instances */
import $ from "jquery";
window.jQuery = $;
window.$ = $;
var LOG = new Log();
var Preloader = require("./modules/preloader");

import {
    ionRangeSlider
} from "ion-rangeslider";

var App = {
    preloader: null,
    evaluation: null,
    responses: [],
    active: 0,
    init: function() {
        $('html').removeClass('no-js');
        App.preloader = new Preloader("preloader");
        App.addEvents();
        //App.drawChartAge();
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(App.drawChartAge);
    },
    load: function() {
        App.preloader.hide();

    },
    addEvents: function() {
        /* Prevent Default in all links with href === '#' */
        $(document).on("click", "a[href='#']", function(event) {
            event.preventDefault();
        });
        /** Good practice, add toggle class only in 'anchor' or 'button' */
        $(document).on("click", ".toggle", function() {
            var _target = $(this).data("target");
            /**/
            var $target = _target === undefined ? $(this) : $(_target);
            $target.toggleClass('active');
        });

        $(document).on('click', 'button', function(e) {
          e.preventDefault();

          var isValidForm = true;

          if ( !App.isHundred($('input[name^="genders"]')) ){
            alert('La suma de los valores de Género debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="types"]')) ){
            alert('La suma de los valores de Tipo de Conexión debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="tasks"]')) ){
            alert('La suma de los valores de Tareas Principales debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="people"]')) ){
            alert('La suma de los valores de Personas por red debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="ages"]')) ){
            alert('La suma de los valores de Edad de los Usuarios debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="times"]')) ){
            alert('La suma de los valores de Horarios de Conexión debe ser igual a 100');
            isValidForm = false;
          }

          if ( !App.isHundred($('input[name^="providers"]')) ){
            alert('La suma de los valores de Usuarios con Experiencia en internet debe ser igual a 100');
            isValidForm = false;
          }

          if(isValidForm)
            document.getElementById("infographyForm").submit();
        });

        $(window).resize(function(){
        App.drawChartAge();
        });

    },
    setSizes: function(element) {
        var maxH = 0;
        $(element).css("height", "auto");
        $(element).each(function(index, element) {
            maxH = Math.max(maxH, parseInt($(element).height()));
        });
        $(element).height(maxH);
    },
    drawChartAge: function() {
      var data = null;

      $.ajax({
        url: "/ages",
        type: "GET",
        dataType: "json",
        async: false,
        success: function(result){


          data = google.visualization.arrayToDataTable([
            ['Edad', 'Edad aproximada'],
            ['Más de 21', parseInt(result.aftertwenty)],
            ['De 16 a 20 años', parseInt(result.fiveteen)],
            ['De 10 a 15 años', parseInt(result.teen)],
            ['Menos de 10 años', parseInt(result.beforeteen)]
          ]);

        }
      });

      var options = {
        backgroundColor: { fill:'transparent' },
        colors: ['#EC6839', '#954B97', '#5BC500', '#00A9E0'],
        legend: {position: 'none'},
        pieSliceText: "percentage",
        pieSliceTextStyle: {color:'white',fontSize:8},
        height: 357
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);

    },
    isHundred: function (element){
      var sum = 0;
      element.each(function() {
          sum += parseInt(this.value);
      });
      console.log(sum);
      return ((sum == 100) ? true : false);
    }
}

// $(document).ready(App.init());
document.addEventListener("DOMContentLoaded", App.init());
// $(window).on("load", App.load());
window.onload = App.load();
