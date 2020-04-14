<!DOCTYPE html>
<html>
<head>
  <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
      .aboutimg{
    width:100%;
    height:350px!important;
  }
  
<style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
</style>

<!-- Search Form -->
<form id="labnol" method="post" action="">
  <div class="speech">
    <input type="text" name="speech" id="transcript1" placeholder="Speak" />
    <img onclick="startDictation('transcript1')" src="//i.imgur.com/cHidSVu.gif" />

    <hr>

     <input type="text" name="speech" id="transcript2" placeholder="Speak" />
    <img onclick="startDictation('transcript2')" src="//i.imgur.com/cHidSVu.gif" />

    <hr>

     <input type="text" name="speech" id="transcript3" placeholder="Speak" />
    <img onclick="startDictation('transcript3')" src="//i.imgur.com/cHidSVu.gif" />
  </div>
</form>

<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation(speechID) {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById(speechID).value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

</head>
</html>