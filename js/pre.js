//analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-69214411-1', 'auto');
ga('send', 'pageview');


//click function
function nocontext(e) {
  var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
  if (clickedTag == "IMG")
    return false;
}
document.oncontextmenu = nocontext;


//language select function
function en () {
   $.ajax({
     url:"php/en.php", //the page containing php script
     type: "POST", //request type
     success:function(result){
      $( "#all" ).load( "php/en.php" );
    }
  });
}

function es () {
   $.ajax({
     url:"php/es.php", //the page containing php script
     type: "POST", //request type
     success:function(result){
      $( "#all" ).load( "php/es.php" );
    }
  });
}
