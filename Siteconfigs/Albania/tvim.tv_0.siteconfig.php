<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvim.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-04-26',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'sq',
  'max_day' => '4',
  'url1' => 'https://mobile-api.tvim.tv/script/program_epg?date=##urldate1##&prog=##channel##&server_time=true&islastepg=true',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'content_type1' => 'application/json',
  'host_header1' => 'mobile-api.tvim.tv',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'd.m.Y',
  'show' => '({"id":.*?})',
  'start' => '"from":(\\d+)',
  'start_format' => 'unix',
  'stop' => '"end":(\\d+)',
  'stop_format' => 'unix',
  'title' => '"title":"(.*?)",',
  'desc' => '"desc":"(.*?)","',
  'channel_logo' => '||#add#https://mobile-api.tvim.tv/images/channels/150x80px/##channel##.png',
  'ccurl1' => 'https://mobile-api.tvim.tv/script/epg/category_channels?category=all&filter=playable',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'application/json',
  'ccXMLHttpRequest1' => 'on',
  'ccchannel_block' => '(,"name":".*?})',
  'ccchannel_id' => '"epg_id":"(.*?)",',
  'ccchannel_name' => '"name":"(.*?)",',
);
?>