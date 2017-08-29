<h2 style="font-family:furore">Welcome!</h2>
<div align="center">
  <div id="youtube_player"></div>
</div>
<h2 style="font-family:furore">Details</h2>
<span style="font-size:16px">
NorthWest SpeedFest is a Seattle-based speedgaming marathon held to raise money for charity.
 The event will take place over the weekend of October 28 and 29, running nonstop from the morning of 
 the 28th to the evening of the 29th. The event will benefit the Children's Miracle Network Hospitals through the Extra Life movement.
</span>
<br/><br/>
<h2 style="font-family:furore">Venue</h2>
<iframe width="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJzVUsPydAkFQRzCOPU6bPDEE&key=AIzaSyDsybuOo9nR5aZ4H5NN5cvfPs9oukZdSag" allowfullscreen></iframe>
<br/><br/>
<span style="font-size:16px">
The event will be held at Northwest Esports. The address is 1941 1st Ave S, Seattle, WA 98134.
 Northwest Esports, located just south of Seattle, is the first regionally focused competitive and gaming event
 organization in the Pacific Northwest. By rail, the venue is a fifteen minute walk from SODO station.
</span>
<br/><br/>
<img style="width:100%; max-height:500px; border-bottom:1px solid black" src="/img/train.png" />

<script>
  var s = document.createElement('script');
  s.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(s, firstScriptTag);
  var player;
  
  function onYouTubeIframeAPIReady() {
    var width = ($('#container').width() > 800) ? 800 : $('#container').width();
    player = new YT.Player('youtube_player', {
      height: (width / 16) * 9,
      width: width,
      videoId: 'PQsx-L4gX6Q',
      events: {
        'onReady': onPlayerReady
      }
    });
    
    function onPlayerReady(event) {
      event.target.playVideo();
    }
    
    function stopVideo() {
      player.stopVideo();
    }
    
  }
  
  //When window is resized, resize youtube window as well
  $(window).resize(function() {
    var w = $('#container').width();
    var h = (w / 16) * 9;
    if (w > 800) {
      player.setSize(800, (800 / 16) * 9);
    } else {
      player.setSize($('#container').width(), ($('#container').width() / 16) * 9);
    }
  });
  
</script>

</div>