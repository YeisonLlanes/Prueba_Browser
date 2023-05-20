function consulta(opcion){
    var id = opcion.value
    var datos;
    $("#openweathermap-widget-15").remove();
    $("#Mapa").remove();
    $.ajax({
        type:"POST",
        url:'../Controller/info.php',
        data: {id:id},
        success :   function(result) {

            var obj = JSON.parse(result);
//            $("#resultado").append(result);
            var html = '<div id="openweathermap-widget-15"></div><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];'+
            'window.myWidgetParam.push({id: 15,cityid: \''+obj["id"]+'\',appid: \'7371bb585afa68745b00c85afc7dee8f\',units: \'metric\',containerid: \'openweathermap-widget-15\',  });'+  
            '(function() {var script = document.createElement(\'script\');script.async = true;'+
            'script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";'+
            'var s = document.getElementsByTagName(\'script\')[0];s.parentNode.insertBefore(script, s);  })();'+
        '</script>'+
        '<div id="Mapa"><br><br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d254508.51141489705!2d'+obj["coord"]["lon"]+'!3d'+obj["coord"]["lat"]+'!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1684612033822!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>';
            $("#resultado").append(html);
            
        }
   });
   

}
