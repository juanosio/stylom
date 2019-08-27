$("document").ready(function(){

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      });

      $("#datapersonal").hide();

      $("#next").on("click", function(){
        $("#datausuario").hide();
        $("#datapersonal").fadeIn();
        $("#step1").removeClass("btn-stylom");
        $("#step1").addClass("btn-light")
        $("#step2").addClass("btn-stylom")
        $("#step2").removeClass("btn-light");

      });
      
      $("#back").on("click", function(){
        $("#datausuario").fadeIn();
        $("#datapersonal").hide();
        $("#step2").removeClass("btn-stylom");
        $("#step2").addClass("btn-light")
        $("#step1").addClass("btn-stylom")
        $("#step1").removeClass("btn-light");

      });
    });