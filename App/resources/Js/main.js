
(function ($) {
    "use strict";


     /*==================================================================
    [ Focus input ]*/
$(".delete").click(function(e){
  e.preventDefault();
  var str2=window.location.pathname;
  let temp=str2.replace("/MK_Market/APP/controllers/Admin/","");
  let myPath=temp+window.location.search;
  $(".testDelete").load($(this).attr('href'),function(rt,st,xmlhttp){
    if(st=='error'){
      alert("error");
    }else{
      $(".ContentDelete").load(myPath+" .ContentDelete",function(rt,st,xmlhttp){
      });
    }
  });
  return;
});
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    });

    $("select.type").on("change", function() {
      if($(this).val()!="fast cashier"){
        $("div.cashier-select").css({display:'none'});
      }else{
        $("div.cashier-select").css({display:'block'});
      }
    });

    var counter=1;

    $(".fa-bell").click(function(){
      $(".red").css('display','none');
    });

    function notification()
    {

      $(".notify .dropdown-menu").load('/MK_Market/Global/notification/notification.php .content-notify',function(rt,st,xmlhttp){
        $(this).html(rt);
        if($(".notify .dropdown-menu").children("li").length > counter){
          counter=$(".notify .dropdown-menu").children("li").length;
          $(".notify .red").css('display','inline-block').text(counter);
        }
      });


    }

    setInterval(notification,5000);

    var k=0;
    $(".fa-eye").click(function(){
       if(k==0){
           $(".pass").attr('type','text');
           $(this).css('color','red');
           k=1;
       } else{
           $(".pass").attr('type','password');
           $(this).css('color','#222');
           k=0;
       }
    });
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {

        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    
    var ok=true;
  $("form .add,form .update").click(function(event) {
    $(".number").each(function() {
      if(! $(this).val().match("[0-9]+")){
          ok=false;
          $(this).css({'border':'1px solid red'}).next(".alert-danger").css('display','none').end().after("<div class='alert alert-danger'>this input field must be number</div>");
      }
      else{
        $(this).next(".alert-danger").css('display','none');
          $(this).css({'border':'1px solid green'});
      }
    });
    if(ok==false){
      event.preventDefault();

    }
  });



})(jQuery);


