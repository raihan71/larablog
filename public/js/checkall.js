 $("#checkall").click(function (){
     if ($("#checkall").is(':checked')){
        $(".checkboxes").each(function (){
           $(this).prop("checked", true);
           });
        }else{
           $(".checkboxes").each(function (){
                $(this).prop("checked", false);
           });
        }
 });