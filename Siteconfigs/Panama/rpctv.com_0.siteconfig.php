<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'rpctv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-13',
  'rev_no' => 'R0',
  'timezone' => 'America/Panama',
  'culture' => 'es',
  'max_day' => '3.1',
  'url1' => 'https://www.telemetro.com/parrilla',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.rpctv.com',
  'show' => '(<article class="programming-grid.*?<\\/article>)',
  'start' => 'show-schedule">(.*?)<\\/small>||#replace#(<.*?>)||',
  'start_format' => 'h#iA',
  'title' => 'show-name">(.*?)<\\/',
  'showicon' => 'src-property="(.*?)"',
  'channel_logo' => '||#add#https://www.rpctv.com/css-custom/314/images/logo-314.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#rpctv',
  'ccchannel_name' => '||#set#RPC TV',
);
?>