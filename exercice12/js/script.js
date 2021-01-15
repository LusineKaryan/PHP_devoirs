$(document).ready(function() {
    $("#click").click(function() {
    
     var lang = $("option:selected");
     var lang_source = $(lang[0]).val();
     var lang_dest = $(lang[1]).val();
    
     var q = $("#source").val();
    
     $.ajax({
    url:'index.php',
    data:"source="+lang_source+"&dest="+lang_dest+"&q="+q,
    type:"GET",
    dataType:"json",
    success:function(html) {
    var val = "";
    if(html['sentences']) {
    val = val + html['sentences'][0]['trans'];
    $("#dest").html(val);
    }
    var val2 = "";
    if(html['dict']) {
    for(var i = 0; i < html['dict'].length; i++) {
    var str = "";
    
    for(var j = 0; j < html['dict'][i]['terms'].length; j++) {
    str += html['dict'][i]['terms'][j] + " | ";
    }
    val2 = val2 + "<br />" + "<strong>"+ html['dict'][i]['pos'] + "</strong>: " + str;
    }
    $("#res").html(val2);
    }
    }
     });
    });
   });