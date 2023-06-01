<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'zap.co.mz',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-05',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'pt',
  'max_day' => '7',
  'srating_system' => 'IMDB',
  'episodeOption' => '1',
  'keepindexpage' => 'on',
  'url1' => 'http://www.zap.co.mz/_api/channels/##urldate1##/epg.json',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'content_type1' => 'application/json',
  'host_header1' => 'www.zap.co.mz',
  'urldate_format1' => 'Y-n-j',
  'show' => '{"image_uri"\\S+"identifier":"##channel##".*?(?:{"start)(.*?)(?:}).*?\\]',
  'start' => '"start_time":"(.*?)",',
  'start_format' => 'H\\hi',
  'stop' => '"end_time":"(.*?)",',
  'stop_format' => 'H\\hi',
  'title' => '"name":"(.*?)",||#replace#(\\s(?:T|Ep)\\.\\d+.*?)$||',
  'subtitle' => '"subtitle":"(.*?)",',
  'desc' => '"sinopse":"(.*?)","||#replace#(Ano: \\d{4}\\s*)##(IMDB.*?\\d+,\\d+\\/10\\s*)||##',
  'season' => '"name":".*?\\sT\\.(\\d+)',
  'episode' => '"name":".*?\\sEp\\.(\\d+)',
  'channel_logo' => '{"image_uri":"(\\S+)","\\S+"identifier":"##channel##"',
  'production_date' => '"sinopse":".*?Ano: (\\d{4})',
  'star_rating' => 'IMDB.*?(\\d+,\\d+\\/10)',
  'ccurl1' => 'http://www.zap.co.mz/_api/channels/##urldate1##/epg.json',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json, text/plain, */*',
  'cccontent_type1' => 'application/json',
  'cchost_header1' => 'www.zap.co.mz',
  'ccurldate_format1' => 'Y-n-j',
  'ccchannel_block' => '({"image_uri".*?"number")',
  'ccchannel_id' => '"identifier":"(.*?)",',
  'ccchannel_name' => '"name":"(.*?)",',
);
?>