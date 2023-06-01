<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'foxchannels.com.tr',
  'creator_name' => 'kvanc',
  'creation_date' => '2019-06-01',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'tr',
  'max_day' => '49',
  'episodeOption' => '1',
  'url1' => 'https://www.foxchannels.com.tr/yayinakisi/##channel##/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => 'Ymd',
  'show' => '<section class="row day" data-magellan-destination="day##urldate1##.*?(?:<li class="acilia-schedule-event)(.*?)(?:<\\/li>).*?<\\/section>',
  'start' => 'data-datetime-timestamp="(\\d*)"',
  'start_format' => 'unix',
  'stop' => 'data-end-timestamp="(\\d*)"',
  'stop_format' => 'unix',
  'title' => '<div class="large-8 medium-8 small-8 column"><h3 >(.*?)<\\/h3>',
  'subtitle' => '<div class="large-8 medium-8 small-12 column description left"><h4>(.*?)\\,\\s*Sez',
  'desc' => '<p>(.*?)<\\/p>',
  'season' => '<div class="large-8 medium-8 small-12 column description left"><h4>.*?\\,\\s*Sezon\\s*(\\d*)\\s*\\|',
  'episode' => '<div class="large-8 medium-8 small-12 column description left"><h4>.*?\\|\\s*Bölüm\\s*(\\d*)\\s',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#fx|foxcrime',
  'ccchannel_name' => '||#set#FX|FOXCRIME',
);
?>