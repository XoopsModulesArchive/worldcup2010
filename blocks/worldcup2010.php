<?php
if(!defined('XOOPS_ROOT_PATH')){
	exit();
}

function fifa_latestnews_show(){

global $xoopsModuleConfig;
$worldcup_lang = xoops_getModuleOption('worldcup_lang', 'worldcup2010');

$block['fifa_latestnews']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNDA*MzA1ODUmcHQ9MTI3NjM*MDQ*MzcwMCZwPTExMjQxMjEmZD1sYXRlc3RuZXdzX2VuJmc9MiZvPWZjMjQz/YzE5NWIzODRhZTY5ZGMxOGYyMjMzNjFkN2RkJm9mPTA=.gif\" />
<object classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" ALIGN=\"top\"  height=\"400\" id=\"WFHost\"> 
<param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/newsreader/images/image_'.$worldcup_lang.'.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/newsreader/images/button.png&URL=http://www.fifa.com/flash/widgets/newsreader/app.swf?lang='.$worldcup_lang.'\" />
<param name=\"wmode\" value=\"transparent\"/>
<param name=\"allowScriptAccess\" value=\"always\" />
<param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> 
<embed name = \"WFHost\" id = \"WFHost\" ALIGN=\"top\" width = \"300\" height = \"400\" src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/newsreader/images/image_'.$worldcup_lang.'.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/newsreader/images/button.png&URL=http://www.fifa.com/flash/widgets/newsreader/app.swf?lang=$worldcup_lang\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />
</object>";

return $block;
}

function southafrica_show(){

$block['southafrica']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNDY1MTU5MjgmcHQ9MTI3NjM*NjUzMzAwMCZwPTExMjQxMjEmZD1md2NfZSZnPTImbz1mYzI*M2MxOTViMzg*/YWU2OWRjMThmMjIzMzYxZDdkZCZvZj*w.gif\" /><object  classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" height=\"400\" align=\"top\" id=\"WFHost\"> <param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldcup/images/image_e.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldcup/images/button.png&URL=http://www.fifa.com/flash/widgets/worldcup/main.swf%3Fteam%3Dalg%26lang%3En\" /><param name=\"wmode\" value=\"transparent\"/><param name=\"allowScriptAccess\" value=\"always\" /><param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> <embed name = \"WFHost\" id = \"WFHost\" width = \"300\" height = \"400\" src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldcup/images/image_e.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldcup/images/button.png&URL=http://www.fifa.com/flash/widgets/worldcup/main.swf%3Fteam%3Dalg%26lang%3En\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" /></object>";

return $block;
}

function worldcup_show(){

$block['worldcup']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNDc1NDk1MTgmcHQ9MTI3NjM*NzU1NTQyMCZwPTExMjQxMjEmZD1md2NwbGF5ZXJzX2VuJmc9MiZvPWZjMjQz/YzE5NWIzODRhZTY5ZGMxOGYyMjMzNjFkN2RkJm9mPTA=.gif\" /><object  classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" height=\"400\" align=\"top\" id=\"WFHost\"> <param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/players/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/players/images/button.png&URL=http://www.fifa.com/flash/widgets/players/app.swf%3Fteamcode%3DALG%26idplayer%3D315883%26lang%3En\" /><param name=\"wmode\" value=\"transparent\"/><param name=\"allowScriptAccess\" value=\"always\" /><param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> <embed name = \"WFHost\" id = \"WFHost\" width = \"300\" height = \"400\" src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/players/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/players/images/button.png&URL=http://www.fifa.com/flash/widgets/players/app.swf%3Fteamcode%3DALG%26idplayer%3D315883%26lang%3En\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" /></object>";

return $block;
}

function worldcup_photos_show(){

$block=array();

$block['worldcup_photos']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNDc5MTg3MzAmcHQ9MTI3NjM*NzkzOTA4OCZwPTExMjQxMjEmZD1sYXRlc3RwaG9*b3NfZW4mZz*yJm89ZmMy/NDNjMTk1YjM4NGFlNjlkYzE4ZjIyMzM2MWQ3ZGQmb2Y9MA==.gif\" /><object classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" height=\"400\" align=\"top\" id=\"WFHost\"> <param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/photogallery/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/photogallery/images/button.png&URL=http://www.fifa.com/flash/widgets/photogallery/app.swf?lang=en\" /><param name=\"wmode\" value=\"transparent\"/><param name=\"allowScriptAccess\" value=\"always\" /><param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> <embed name = \"WFHost\" id = \"WFHost\" width = \"300\" height = \"400\" align=\"top\"  src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/photogallery/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/photogallery/images/button.png&URL=http://www.fifa.com/flash/widgets/photogallery/app.swf?lang=en\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" /></object>";

return $block;
}

function fifa_ranking_show(){

$block['fifa_ranking']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNTI1MzYzMTEmcHQ9MTI3NjM1MjUzOTQ4NiZwPTExMjQxMjEmZD13b3JsZHJhbmtpbmdfZW4mZz*yJm89ZmMy/NDNjMTk1YjM4NGFlNjlkYzE4ZjIyMzM2MWQ3ZGQmb2Y9MA==.gif\" /><object  classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" height=\"400\" align=\"top\" id=\"WFHost\"> <param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldranking/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldranking/images/button.png&URL=http://www.fifa.com/flash/widgets/worldranking/app.swf%3FteamId%3Dalg%26lang%3Den\" /><param name=\"wmode\" value=\"transparent\"/><param name=\"allowScriptAccess\" value=\"always\" /><param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> <embed name = \"WFHost\" id = \"WFHost\" width = \"300\" height = \"400\" src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldranking/images/image_en.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldranking/images/button.png&URL=http://www.fifa.com/flash/widgets/worldranking/app.swf%3FteamId%3Dalg%26lang%3Den\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" /></object>";

return $block;
}

function world_leagues_show(){

$block['world_leagues']= "<img style=\"visibility:hidden;width:0px;height:0px;\" border=0 width=0 height=0 src=\"http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNzYzNTIyODc5MTAmcHQ9MTI3NjM1MjI5MDgwNyZwPTExMjQxMjEmZD13b3JsZGxlYWd1ZXNfZSZnPTImbz1mYzI*/M2MxOTViMzg*YWU2OWRjMThmMjIzMzYxZDdkZCZvZj*w.gif\" /><object  classid=clsid:d27cdb6e-ae6d-11cf-96b8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0 width=\"300\" height=\"400\" align=\"top\" id=\"WFHost\"> <param name = \"FlashVars\" value = \"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldmatchcentre/images/image_e.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldmatchcentre/images/button.png&URL=http://www.fifa.com/flash/widgets/worldmatchcentre/app.swf%3FleagueCode%3Dalg%26lang%3De\" /><param name=\"wmode\" value=\"transparent\"/><param name=\"allowScriptAccess\" value=\"always\" /><param name = \"movie\" value = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf /> <embed name = \"WFHost\" id = \"WFHost\" width = \"300\" height = \"400\" src = http://cdn.gigya.com/wildfire/swf/WildfireHost3.swf 	flashvars=\"Partner=1124121&theme=New Classic&widgetW=300&widgetH=400&widgetX=0&widgetY=0&stickyType=&WFBtnX=0&WFBtnY=0&defaultPreviewURL=http://www.fifa.com/flash/widgets/worldmatchcentre/images/image_e.png&useFacebookMystuff=false&buttonURL=http://www.fifa.com/flash/widgets/worldmatchcentre/images/button.png&URL=http://www.fifa.com/flash/widgets/worldmatchcentre/app.swf%3FleagueCode%3Dalg%26lang%3De\" AllowScriptAccess=\"always\" quality=\"high\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" /></object>";

return $block;
}

?>