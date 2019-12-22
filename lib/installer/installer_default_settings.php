<?php
$default_settings = array(
	"transferperlevel"=>25,
	"maxtransferout"=>25,
	"charset"=>"utf-8",
	"transferreceive"=>3,
	"borrowperlevel"=>20,
	"allowgoldtransfer"=>0,
	"mintransferlev"=>3,
	"instantexp"=>false,
	"allowclans"=>false,
	"LOGINTIMEOUT"=>900,
	"goldtostartclan"=>10000,
	"gemstostartclan"=>15,
	"beta"=>0,
	"betaperplayer"=>1,
	"villagename"=>LOCATION_FIELDS,
	"gameoffsetseconds"=>0,
	"daysperday"=>4,
	"serverlanguages"=>"en,English,fr,FranÁais,dk,Danish,de,Deutsch,es,EspaÒol,it,Italian",
	"expiretrashacct"=>1,
	"expirenewacct"=>10,
	"expireoldacct"=>45,
	"gameadminemail"=>"postmaster@localhost.com",
	"allowcreation"=>1,
	"spaceinname"=>0,
	"blockdupeemail"=>0,
	"requireemail"=>0,
	"requirevalidemail"=>0,
	"defaultsuperuser"=>0,
	"newplayerstartgold"=>50,
	"maxrestartgold"=>300,
	"maxrestartgems"=>10,
	"forestchance"=>15,
	"multifightdk"=>10,
	"multichance"=>25,
	"multibasemin"=>2,
	"multibasemax"=>3,
	"multislummin"=>0,
	"multislummax"=>1,
	"multithrillmin"=>1,
	"multithrillmax"=>2,
	"multisuimin"=>2,
	"multisuimax"=>4,
	"allowpackofmonsters"=>true,
	"gardenchance"=>0,
	"deathoverlord"=>'`$Ramius',
	"homecurtime"=>1,
	"homenewdaytime"=>1,
	"homenewestplayer"=>1,
	"newestplayer"=>"",
	"OnlineCountLast"=>0,
	"OnlineCount"=>0,
	"maxonline"=>0,
	"loginbanner"=>"*BETA* This is a BETA of this website, things are likely to change now and again, as it is under active development *BETA*",
	"homeskinselect"=>1,
	"defaultskin"=>"jade.htm",
	"innname"=>LOCATION_INN,
	"barkeep"=>"`tCedrik",
	"impressum"=>"",
	"companionsallowed"=>1,
	"soap"=>1,
	"clanregistrar"=>"`%Karissa",
	"maxcolors"=>10,
	"postinglimit"=>1,
	"game_epoch"=>gmdate("Y-m-d 00:00:00 O",strtotime("-30 days")),
	"usedatacache"=>0,
	"show_notices"=>0,
	"notify_on_warn"=>0,
	"notify_on_error"=>0,
	"notify_address"=>"",
	"notify_every"=>30,
	"last_char_expire"=>"0000-00-00 00:00:00",
	"maxattacks"=>4,
	"autofight"=>0,
	"autofightfull"=>0,
	"suicide"=>0,
	"suicidedk"=>10,
	"dropmingold"=>0,
	"forestgemchance"=>25,
	"instantexp"=>false,
	"addexp"=>5,
	"forestexploss"=>10,
	"disablebonuses"=>1,
	"gravechance"=>0,
	"pvp"=>1,
	"allowspecialswitch"=>true,
	"innchance"=>0,
	"bard"=>"`^Seth",
	"barmaid"=>"`%Violet",
	"innfee"=>"5%",
	"inboxlimit"=>50,
	"oldmail"=>14,
	"onlyunreadmails"=>true,
	"mailsizelimit"=>1024,
	"expirecontent"=>180,
	"lastdboptimize"=>date("y-m-d h:i:s"),
	"paypalcurrency"=>"USD",
	"logdnet"=>0,
	"serverurl"=>"http://".$_SERVER['SERVER_NAME'].($_SERVER['SERVER_PORT'] == 80?"":":".$_SERVER['SERVER_PORT']).dirname($_SERVER['REQUEST_URI']),
	"defaultlanguage"=>"en",
	"serverdesc"=>"Another LoGD Server",
	"logdnetserver"=>"http://logdnet.logd.com/",
	"paypalemail"=>"",
	"paypaltext"=>"legend of the green dragon site donation from",
	"paypalcountry-code"=>"us",
	"emailpetitions"=>0,
	"multimaster"=>1,
	"pvpimmunity"=>5,
	"pvpminexp"=>1500,
	"pvpdeflose"=>5,
	"pvpattgain"=>10,
	"pvpattlose"=>10,
	"pvpdefgain"=>10,
	"curltimeout"=>5,
	"pvptimeout"=>600,
	"allowoddadminrenames"=>0,
	"dictionary"=>"/usr/share/dict/words",
	"enabletranslation"=>true,
	"collecttexts"=>false,
	"cachetranslations"=>0,
	"tl_maxallowed"=>0,
	"permacollect"=>0,
	"maxlistsize"=>100,
	"refereraward"=>25,
	"referminlevel"=>4,
	"superuseryommessage"=>"Asking an admin for gems, gold, weapons, armor, or anything else which you have not earned will not be honored.  If you are experiencing problems with the game, please use the 'Petition for Help' link instead of contacting an admin directly.",
	"officermoderate"=>0,
	"motditems"=>5,
	"turns"=>10,
	"maxinterest"=>10,
	"mininterest"=>1,
	"pvpday"=>3,
	"fightsforinterest"=>4,
	"maxgoldforinterest"=>100000,
	"resurrectionturns"=>-6,
	"gravefightsperday"=>10,
	"newdaycron"=>0,
	"newdaySemaphore"=>"0000-00-00 00:00:00",
	"selfdelete"=>0,
	"allowfeed"=>0,
	"displaymasternews"=>1,
	"companionslevelup"=>1,
	"edittitles"=>1,
	"automaster"=>1,
	"villagechance"=>0,
	"enablecompanions"=>true,
);
