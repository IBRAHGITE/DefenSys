<?php
function Redirect($url)
{
  if (!headers_sent()) {
    $redirect_url = $_SERVER['HTTP_HOST'] . '/' . $url;
    exit(header('Location:' . $redirect_url));
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="' . $url . '";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
    echo '</noscript>';
    exit;
  }
}