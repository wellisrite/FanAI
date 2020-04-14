<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/faavicon.png">

    <title>Artificial Intelligence</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('Assets')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('Assets')?>/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url('Assets')?>/css/fan.css" rel="stylesheet">
    <!--external css-->
    <!-- <link href="<?php echo base_url('Assets')?>/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->

    <!-- alertify css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/alertify.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/alertify.rtl.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/semantic.rtl.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/bootstrap.rtl.min.css" />
    <!-- Master css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/master.css" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('Assets')?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('Assets')?>/css/style-responsive.css" rel="stylesheet" />
  </head>

  <body>
  <section id="container" align="center">
    <div class="panel-body">
        <form id="asem" class="form-horizontal tasi-form" action="#" method="POST">
          <h1>AI Kipas Angin</h1><br>
          <main class="fan__container">
              <input class="fan__input" id="fan-rotate" type="checkbox"/>
            <input class="fan__input" id="fan-power" type="checkbox"/>
            <div class="fan flexy__center">
              <div class="fan__hub flexy__center">
                <div class="fan__blade"></div>
                <div class="fan__blade"></div>
                <div class="fan__blade"></div>
                <div class="fan__blade"></div>
                <div class="fan__blade"></div>
                <div class="fan__blade"></div>
              </div>
              <div class="fan__shield">
                <div class="fan__shield__wires"></div>
                <div class="fan__shield__wires"></div>
              </div>
            </div>
            <div class="fan__base">
              <div class="fan__base__arm"></div>
              <div class="fan__base__foot"></div>
            </div>
            <div class="fan__actions">
              <label class="fan__actions__button" for="fan-power"></label>
            </div>
          </main>
          <div class="container">
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Ucapan</label>
                <div class="col-sm-10">
                    <input type="text" id="ucapan" name="ucapan" class="form-control" placeholder="Masukan Kalimat">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" id="buttonsubmit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
        <div class="container" id="bantuan">
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Nyalain kipas ?</label>
              <div class="col-sm-10">
                  <input type="radio" id="keputusan" name="keputusan" class="form-control" value="1"><label for="">Ya</label>
                  <input type="radio" id="keputusan" name="keputusan" class="form-control" value="0"><label for="">Tidak</label>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
              <button type="submit" id="bantuansubmit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
    </section>
    <script src="<?php echo base_url('Assets')?>/js/jquery-3.3.1.min.js"></script>
    <!-- pnotify CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/pnotify.custom.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets')?>/css/animate.css" />
    <!-- pnotify script -->
    <script src="<?php echo base_url('Assets')?>/js/pnotify.custom.min.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('Assets')?>/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url('Assets')?>/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url('Assets')?>/js/count.js"></script>
    <!--custom switch-->

   <script class="include" type="text/javascript" src="<?php echo base_url('Assets');?>/js/jquery.dcjqaccordion.2.7.js"></script>
   <!--script for this page-->
   <script src="<?php echo base_url('Assets')?>/js/form-component.js"></script>
   <script src="<?php echo base_url('Assets')?>/js/master.js"></script>
   <script>
   $(document).ready(function(){
     $("#bantuan").hide();
     $("#asem").submit(function(e){
       return false;
    });
    $("#bantuansubmit").click(function(){
      if($('#keputusan:checked').is(":checked")){
        var keputusan=$('#keputusan:checked').val();
        var ucapan=$("#ucapan").val();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(sposition);
        } else {
            alert("gak bisa browsernya cupu");
        }
        function sposition(position){
          getAddress(position.coords.latitude,position.coords.longitude);
        }
        function getAddress (latitude, longitude) {
                // $.get('http://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true')
                //   .done(function( data ) {
                //     address=data.results[1]['formatted_address'];
                //     //console.log(address);
                //     //console.log(address.split(","));
                //     kota=address.split(",");
                    $.get('http://api.openweathermap.org/data/2.5/weather?q=Semarang&appid=949b8cd6971e5970f39595f9a3d08002&units=metric')
                    .done(function(data){
                        //console.log(data);
                        savettemperature(data.main);
                  //   });
                  });
          function savettemperature(test){
            $.post( "<?php echo base_url("main/naivebayesbantuan");?>", { ucapan: ucapan,suhu:test.temp,keputusan:keputusan})
        .done(function(data){
          new PNotify({
              title: 'Thank you!',
              text: data,
              type: 'success',
              addclass : 'pnotify-center',
              delay: 2000,
              buttons: {
                  sticker: false
              },
              animate: {
                  animate: true,
                  in_class: 'wobble',
                  // flipInX
                  out_class: 'flipOutX'
              },
              mobile: {
                styling: false
              }
          });
        });
        $("#buttonsubmit").prop("disabled",false);
        $("#ucapan").prop("disabled",false);
        $("#bantuan").fadeOut(3000);
        }
      }
      }else{
        alert("belom");
      }
    });
       $("#buttonsubmit").click(function(){
         var ucapan=$("#ucapan").val();
         if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(sposition);
         } else {
             alert("gak bisa browsernya cupu");
         }
         function sposition(position){
           getAddress(position.coords.latitude,position.coords.longitude);
         }
         function getAddress (latitude, longitude) {
                 // $.get('http://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true')
                 //   .done(function( data ) {
                 //     address=data.results[1]['formatted_address'];
                 //     //console.log(address);
                 //     //console.log(address.split(","));
                 //     kota=address.split(",");
                     $.get('http://api.openweathermap.org/data/2.5/weather?q=Semarang&appid=949b8cd6971e5970f39595f9a3d08002&units=metric')
                     .done(function(data){
                         //console.log(data);
                         savettemperature(data.main);
                     });
           function savettemperature(test){
             $.post( "<?php echo base_url("main/naivebayes");?>", { ucapan: ucapan,suhu:test.temp})
               .done(function( data ) {
                 if(ucapan!=""){
                   if(data==1){
                     new PNotify({
                         title: 'Panas ya',
                         text: "Minta dihidupin kipas yaaa",
                         type: 'success',
                         addclass : 'pnotify-center',
                         delay: 2000,
                         buttons: {
                             sticker: false
                         },
                         animate: {
                             animate: true,
                             in_class: 'wobble',
                             // flipInX
                             out_class: 'flipOutX'
                         },
                         mobile: {
                           styling: false
                         }
                     });
                     $("#fan-power").attr("checked","checked");
                     $("#fan-rotate").attr("checked","checked");
                   }
                   else if(data==0){
                     new PNotify({
                         title: 'Dingin kali',
                         text: "Kipasnya matiin aja ya",
                         type: 'success',
                         addclass : 'pnotify-center',
                         delay: 2000,
                         buttons: {
                             sticker: false
                         },
                         animate: {
                             animate: true,
                             in_class: 'wobble',
                             // flipInX
                             out_class: 'flipOutX'
                         },
                         mobile: {
                           styling: false
                         }
                     });
                     $("#fan-power").attr("checked",false);
                     $("#fan-rotate").attr("checked",false);
                   }
                   else{
                     new PNotify({
                         title: 'Bantuin ya',
                         text: "Tolong ajarin Ai ini ya!",
                         type: 'success',
                         addclass : 'pnotify-center',
                         delay: 2000,
                         buttons: {
                             sticker: false
                         },
                         animate: {
                             animate: true,
                             in_class: 'wobble',
                             // flipInX
                             out_class: 'flipOutX'
                         },
                         mobile: {
                           styling: false
                         }
                     });
                     $("#ucapan").prop("disabled",true);
                     $("#buttonsubmit").prop("disabled",true);
                     $("#bantuan").fadeIn(3000);
                 //alert(data);
                }
               }else{
                 new PNotify({
                     title: 'Warning',
                     text: "Di isi dulu ya ucapanya",
                     type: 'warning',
                     addclass : 'pnotify-center',
                     delay: 2000,
                     buttons: {
                         sticker: false
                     },
                     animate: {
                         animate: true,
                         in_class: 'wobble',
                         // flipInX
                         out_class: 'flipOutX'
                     },
                     mobile: {
                       styling: false
                     }
                 });
                 // alert(data);
               }
               });
           }
         }

       });
   });
   </script>
