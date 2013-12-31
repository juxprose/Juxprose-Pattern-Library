<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Juxprose Pattern Library</title>
   
    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Typekit -->
    <script type="text/javascript">
      (function() {
        var config = {
          kitId: 'gbi0qtc',
          scriptTimeout: 3000
        };
        var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
      })();
    </script>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Flexslider -->
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
  </head>
  <body>

    <div class="wrapper">
      <h1 class="site-title">Juxprose Pattern Library</h1>
      <h2 class="site-subtitle">Style Guide for: Juxprose / <a href="http://www.juxprose.com">www.juxprose.com</a></h2>
      <?php
      $files = array();
      $handle=opendir('patterns');
      while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
      endwhile;
      sort($files);
      foreach ($files as $file):
        echo '<div class="pattern block">';
        echo '<div class="display entry-content">';
        include('patterns/'.$file);
        echo '</div>';
        echo '<div class="source">';
        echo '<textarea rows="6" cols="30">';
        echo htmlspecialchars(file_get_contents('patterns/'.$file));
        echo '</textarea>';
        echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
        echo '</div>';
        echo '</div>';
      endforeach;
      ?>
    </div>

    <!-- Scripts -->
    <script src="assets/js/global-ck.js"></script>
    <script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    jQuery(window).load(function() {         
      jQuery('#basic-slider').flexslider({
        controlNav: false
      });
    });
    </script>   


  </body>
</html>