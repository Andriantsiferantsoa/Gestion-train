$(document).ready(function(){
   $(".details_e").click(function(){
   	$.getJSON("http://192.168.1.1/courrier_local/archive/get_entrant/" + $(this).attr('id'), function(data, status){
        $("#exp").html(data.expeditaire);
        $("#num").html(data.id);
        $("#dest").html(data.destinataire);
        $("#objet").html(data.objet);
        $("#date_e").html(data.date_envoi);
        $("#date_r").html(data.date_reception);
        $("#sujet").html(data.sujet);
        $("#myModal").modal();
        $("#pdf_e").attr('href', $("#pdf_entrant").html() +'/' +data.id);
    });
   });

   $(".voir_e").click(function(){
    $.getJSON("http://192.168.1.1/courrier_local/archive/get_entrant/" + $(this).attr('id'), function(data, status){
        $("#exp").html(data.expeditaire);
        $("#num").html(data.id);
        $("#dest").html(data.destinataire);
        $("#objet").html(data.objet);
        $("#date_e").html(data.date_envoi);
        $("#date_r").html(data.date_reception);
        $("#sujet").html(data.sujet);
        $("#myModal2").modal();
    });
   });


   $(".details_s").click(function(){
   	$.getJSON("http://192.168.1.1/courrier_local/archive/get_sortant/" + $(this).attr('id'), function(data, status){
        $("#exp1").html(data.expeditaire);
        $("#num1").html(data.id);
        $("#dest1").html(data.destinataire);
        $("#objet1").html(data.objet);
        $("#date_e1").html(data.date_envoi);
        $("#date_r1").html(data.date_reception);
        $("#sujet1").html(data.sujet);
        $("#myModal1").modal();
        $("#pdf_s").attr('href', $("#pdf_sortant").html() +'/' +data.id);
    });
   });

   $(".suppr_entrant").click(function(){
        var id = $(this).attr('id');
        var base = $("#btn").attr('href');
        $("#btn").attr('href', base+id);
        $("#myModal").modal();
   });

   $(".suppr_user").click(function(){
        var href = $(this).attr('href');
        $("#btn").attr('href', href);
        $("#myModal").modal();
   });

   $(".suppr_sortant").click(function(){
        var id = $(this).attr('id');
        var base = $("#btn").attr('href');
        $("#btn").attr('href', base+id);
        $("#myModal").modal();
   });

   $(".valide").click(function(){
        var id = $(this).attr('id');
        var base = $("#btn").attr('href');
        $("#btn").attr('href', base+id);
        $("#myModal").modal();
   });

   $(".valide1").click(function(){
        $.getJSON("http://192.168.1.1/courrier_local/sortant/get_sortant/" + $(this).attr('id'), function(data, status){
        $("#exp").html(data.expeditaire);
        $("#num").html(data.id);
        $("#dest").html(data.destinataire);
        $("#objet").html(data.objet);
        $("#date_e").html(data.date_envoi);
        $("#sujet").html(data.sujet);
        $("#myModal2").modal();
    });
   });

   $(".envoi").click(function(){
        var id = $(this).attr('id');
        var base = $("#btn1").attr('href');
        $("#btn1").attr('href', base+id);
        $("#myModal3").modal();
   });


   $(".voir_s").click(function(){
    $.getJSON("http://192.168.1.1/courrier_local/archive/get_sortant/" + $(this).attr('id'), function(data, status){
        $("#exp").html(data.expeditaire);
        $("#num").html(data.id);
        $("#dest").html(data.destinataire);
        $("#objet").html(data.objet);
        $("#date_e").html(data.date_envoi);
        $("#sujet").html(data.sujet);
        $("#myModal2").modal();
    });
   });


   $("#open_histo").click(function(){
    $.getJSON("http://192.168.1.1/courrier_local/sortant/ajax_historique/", function(data, status){
        $("#histo_content").html("");
        for (var i = data.length - 1; i >= 0; i--) {
            var text = '<div class="alert alert-info">'+
              '<button class="close" data-dismiss="alert">×</button>'+
              data[i].dateAction +' :'+ data[i].action +'</div>';
            $("#histo_content").append(text);
        }
        $("#histo").modal();
    });
   });

   $(".corbeille").click(function(){
    $("#btn_corb").attr('href', $(this).attr('href'));
    $("#modal_corbeille").modal();
   });

   $(".btn_reset").click(function(){
    $.get($(this).attr('href'), function(data, status){

    });
    $(this).parent().parent().remove();
   });

   $(".btn_remove").click(function(){
    if(confirm('Voulez-vous vraiment supprimer définitivement ?') == false) return;
    else
    {
      $.get($(this).attr('href'), function(data, status){

    });
    $(this).parent().parent().remove();
    }
   });


   

});