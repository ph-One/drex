<?php

  namespace curl;

  function test(): bool
    {
      return true;
    }

  function get(string $url): string
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "$url");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      return $output;
    }

  function head(string $url)
    {
      $context  = stream_context_create(array('http' =>array('method'=>'GET')));
      $fd = fopen("$url", 'rb', false, $context);
      $output = stream_get_meta_data($fd);
      fclose($fd);
      return $output;
    }

// EOF
