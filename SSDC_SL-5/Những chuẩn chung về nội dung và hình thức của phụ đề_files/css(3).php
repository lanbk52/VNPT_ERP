@charset "UTF-8";
/* CSS Document */

/**
* Custom CSS by Forumthemes.com
*/

/************************************************************************/
*{ -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }

#forums *, #wgo *, #forumbits * {
	-moz-border-radius: 0 !important;
	-webkit-border-radius: 0 !important;
}
.wgo_block {
	margin:0;
}
#fb_headerbox {
	padding-right:5px;
}
.cvb_facebook {
padding-top:2px;
}
.navbar {
	-moz-border-radius-bottomleft: 0 !important;
	-moz-border-radius-bottomright: 0 !important;
	-webkit-border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important;
}
.announcements {
	margin-top:10px;
}
.highlight {
	background-image:none;
}
.navlinksBox {
	text-align: center;
	color: #3a3a3a;
	font-size: 11px;
        font-weight:700;
        margin-top: 8px;
        margin-bottom: 0;
        width:100%;
        clear:both;
}
.navlinksBoxWrap {
	padding: 10px 0;
}
.bodyWrap {
	background:#fff;
	margin:0 2px;	
}
.body_wrapper {
	padding:0 0 10px;
	margin:0;
}
.above_body {
	padding:0;
	margin:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border-top:0;
}
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
}
.formsubmit label {
	color:#3E3E3E;
}
.memberBox .toplinks ul.isuser .popupbody li {
	color:#3E3E3E;
}
.loginLeft #fb_loginbtn {position:relative;top:4px;}
.toplinks #fb_loginbtn {position:relative;top:2px;}
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
}
#memberlist #searchstats {color:#fff;}

.popupbody li > a,
.popupbody li > label {
	background:#fff;
}
.block .searchlisthead, .block .searchlisthead a {
color:#fff;
}
.forumdescription {
padding-top:3px;
}

/* Misc Resets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
img {
	border:0;
}
.verticalAlign {
	vertical-align:middle;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
html[xmlns] .clearfix {
	display: block;
}
* html .clearfix {
	height: 1%;
}
.lastPostIMG {
	position:relative;
	top:2px;
}

/* Top Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#topBar {
	font-size:11px;	
	color:#eaeaea;
	padding:0 10px;

}
.topBarRight {
	padding:0;
	position:relative;
}
.topWelcome {
float:left;
}
.memberBox {
	float:right;
	line-height:38px;
}
.memberBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.memberBox li {
	float:left;
	margin:0;	
	padding:0 3px;
}
.loginInput {
	background:#fff;
	border:1px solid #afc1d2;
	width:107px;
	height:19px;
	line-height:19px;
	color:#9e9e9e;
	font-size:11px;
	padding:0 3px;
	margin:0;
	float:left;
}
.inputPad input {
	margin-top:10px;
}
.inputSubmit input {

	margin:9px 8px 0 0;

}
.rememberMe {
	
}
.memberBox .rememberMe {
	font-size: 11px;
}
.memberBox .rememberMe input {
	vertical-align: baseline;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}
.memberBox a:link, .memberBox a:visited {
	color:#425863;
}
.memberBox a:hover {
	color:#2c8bbe;
}
.loginTxt {
	padding-left:9px;
}
.notreg {
	background:url(/regSplit.gif) no-repeat right;
	padding-right:13px;
	font-weight:700;
}

.loginLeft {
float:left;
}


/* Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.doc_header {
	position:relative;
}
.headerLeft {
	height:407px;
}
.headerRight {
	height:407px;
	position:relative;
}
#logo {
	float:left;
}
.bannerBox {
	background:url(/bannerBox.gif) no-repeat top left;
	width:468px;
	height:60px;
	position:absolute;
	top:12px;
	right:38px;
}


/* Content
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#contentMain {
	background:#fff url(/contentBG.gif) repeat-x top left;
	padding:0;
	padding-left:0;
	padding-right:0;
}

/* Footer Navigation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.footerNav {
	/*background:url(/footerNav.gif) repeat-x top left;*/
	height:49px;
	line-height:49px;
	font-size:14px;
}
.footerNav ul {
	list-style:none;
	padding:0;
	margin:0;
}
.footerNav li {
	float:left;
	padding:0 15px;	
}

.backTop {
	background:url(/topArrow.gif) no-repeat left;
	font-size:11px;
	padding:0;
	float:right;
	color:#0c5d88;
}
.footerNav a.link.backTop, .footerNav a:visited.backTop {
	color:#0c5d88;
}
.footerNav a:hover.backTop {
	color:#ec7500;
}
.skinSelect {
	float:right;
	padding:5px 0 0 0;
}

/* Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerMain {
	background:url(/footerBG.gif) repeat-x top left;
	height:102px;
	color:#4d5153;
	line-height:18px;
}
#footerMain a:link, #footerMain a:visited {
	color:#ec7500;
}
#footerMain a:hover {
	color:#000;
}
.copyright {
	float:left;
	padding:16px 0 0 0;
}
.footerLogo {
	float:right;
}

/* Global Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchBox {
	position:absolute;
	top:-67px;
	right:10px;
}

#searchBox .searchBox_container {
	float:left;
	display:block;
	padding-top:1px;
	padding-right:0;
}
#searchBox .searchBox_button {
	float:left;
	display:block;
	padding-top:1px;
}
#searchBox .searchBox_advanced_search {
	position:absolute;
	top:39px;
	right:0;
}
#searchBox .searchBox_advanced_search a:link, #searchBox .searchBox_advanced_search a:visited {
	color:#e3f0f7;
}

/* Navbar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.navbar {
	/*background: none   ;*/
	position:relative;
	/*height:;*/
	font:   11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	color:#2d404c;
	width:100%;
	padding:0;
	margin:0;
}
/*.navbarLeft {
	background: none   ;
	height:;
}
.navbarRight {
	background: none   ;
	height:;
}*/
#navtabs li.selected ul.floatcontainer {
	margin-top:3px;
}
#navtabs li.selected ul.floatcontainer a:link, #navtabs li.selected ul.floatcontainer a:visited {
	line-height:27px;
	height:27px;
}
.navbar a { color:#2d404c; }
.navbar a:hover { color:#61a20a; }

.navtabs ul li:first-child {
	margin-left:38px;
}
.navtabs {
	padding-left:0;
}
.navtabs ul {
	position:absolute;
	/*top:37px;*/
	left:0px;
	width:100%;
/* This is to fix RTL menu issue under Opera */
        direction:ltr;
}
.navtabs li {
	float:left;
}
.navtabs li li {
	background:none;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}
.navtabs li a {
	height:37px;
	line-height:37px;
}
/*.navtabs li a.navtab {
	display:block;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color:#2d404c;
	font:  bold 13px arial, helvetica, sans-serif;
	text-decoration:none;
	line-height:34px;
	height:34px;
	padding:2px 10px 0 10px;
}
.navtabs li a.navtab:hover {
	background:#2988b9 url(images/styles/CreativeCreature/style/navBG.gif) repeat center top;
	color:#61a20a;
}
.navtabs li.selected {
	color:#61a20a;
	height:37px;
}
.navtabs li.selected a.navtab {
	color:#61a20a;
	position:relative;
	top:-px;
	padding-top:px;
	z-index:10;
}*/
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	line-height:27px;
}
.navtabs li.selected li {
	padding:0 5px;
}
.navtabs li.selected li li {
	padding:0 2px;
}
.navtabs li.selected li a {
	/*color:;*/
	font-weight:400;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height:27px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#2d404c;
}

.navbar_advanced_search li a:hover {
	color:#61a20a;
	text-decoration:underline;
}

.navtabs li.selected li a:hover {
	color:;
	text-decoration:underline;
}

.navtabs li.selected .popupbody li > a {
	padding:0pxpx 10px;
	text-indent: 0;
	color: ;
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid px transparent;
	_border: none;
	background:transparent url(images/styles/CreativeCreature/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/styles/CreativeCreature/misc/arrow.gif');
	/*color:;*/
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active,
.navtabs li.selected li a:hover.popupctrl {
	color:#fff;
}

/* Breadcrumb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/*.breadcrumb {
	background: none   ;
	height:;
	color:;
	margin-bottom:12px;
}
.bcLeft {
	background: none   ;
	height:;
}
.bcRight {
	background: none   ;
	height:/* Invalid math expression */;
	padding:   ;
}
*/
.breadcrumb .navbit > a, .breadcrumb .lastnavbit span {
	border:1px solid transparent;
}
.breadcrumb .navbit a:link, .breadcrumb .navbit a:visited {
	font-weight:700;
}
.breadcrumb .navbit a:hover {
	background:;
	color:;
	border:1px solid transparent;
}

/* tcat Bars (Title Bars for Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.tcatBar {
	/*background: url(images/styles/SKINNAME/style/tcatBG.gif) repeat-x left top;*/
	float: left;
	/*color: #2D404C;*/
	height:38px;
	clear:both;
	margin-top: 8px;
	position:relative;
}
.tcatLeft {
	/*background: url(images/styles/SKINNAME/style/tcatLeft.gif) no-repeat left top;*/
	height:38px;
}
.tcatRight {
	/*background: url(images/styles/SKINNAME/style/tcatRight.gif) no-repeat right top;*/
	height:38px;
}
.tcatBar .forumtitle {
	font-weight:700;
}
.tcatBar .tcatDesc {
	font-size:11px;
	font-weight:400;
}
.tcatBar h2 {
	padding-left:16px;
	font:   bold 13px arial, helvetica, sans-serif;
	line-height:38px;
	float:left;
}
/*.tcatBar a:link, .tcatBar a:visited {
	color:#2D404C;
}*/
.tcatBar .tcatCollapse {
	position:absolute;
	top:10px;
	right:10px;
}
/* tcat Thread List Controls - Forumdisplay */
.tcat_threadlist_controls {
	float:right;
	padding-right:8px;
}
.forumdisplaypopups, #forumdisplaypopups {
	clear:both;
}
.tcat_threadlist_controls h6 {
	height:38px;
	line-height:38px;
	padding:0;
	display:block;
	font-size:10pt;
}
.forumdisplaypopups a.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a.popupctrl,
.postlist_popups h6 a.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a.popupctrl {
	background:none;
	display:block;
	_display:38px;
	height:38px;
	line-height:38px;
	font-family:arial, helvetica, sans-serif;
	font-weight:bold;
	font-size:12px;
	font-weight:700;
	color:#2D404C;
	padding:0 10px;
	border: 0;
	float: left;
	clear: right;
}
.forumdisplaypopups a:hover.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a:hover.popupctrl,
.postlist_popups h6 a:hover.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a:hover.popupctrl {
	border: 0;
	/*color:#2D404C;*/
	text-decoration:underline;
}
#postlist_popups a, .postlist_popups a {
	/*color: #2D404C;*/
	_border: none;
}
#postlist_popups a:hover, .postlist_popups a:hover {
	/*color: #2D404C;*/
	text-decoration:underline;
}
#postlist_popups .popupmenu:hover a.popupctrl, #postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active, 

.postlist_popups .popupmenu:hover a.popupctrl, .postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
}

#postlist_popups ul li {
	color: #3E3E3E;
}
#postlist_popups ul li a, .postlist_popups ul li a {
	color: #3E3E3E;
	_border: none;
}

#postlist_popups ul li a:hover, .postlist_popups ul li a:hover {
	color: #3E3E3E;
	text-decoration:underline;
}

#forumdisplaypopups ul a, .forumdisplaypopups ul a {
	color:#3E3E3E;
}

/* Thead Bars (Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.thead_bar .theadrow {
	/*background:#070707 url(images/styles/SKINNAME/style/theadBG.gif) repeat-x left top;*/
	display:block;
	width: 100%;
	float: left;
	position:relative;
	font:  normal 11px arial, helvetica, sans-serif;
	/*border:  ;*/
	color:;
	line-height:26px;
}
.thead_bar .padding {
	padding-left:12px;
}
.thead_bar .forumhead span.forumlastpost {
	width: 23%;
}
.thead_bar .theadrow .forumdata  {
	float: left;
}
.thead_bar {
	float: left;
	position:relative;
	display:block;
}
.thead_bar .forumhead .forumtitle {
	width: 76%;
}
.thead_bar .foruminfo {
	width: 53%;
	min-width: 30%;
	float: left;
	clear: right;
}
.thead_bar .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}
.thead_bar .forumstats, .thead_bar .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 16%;
	margin-right: 2%;
}
.thead_bar .foruminfo .forumdata .datacontainer {
	float: left;
	width: 86%;
	padding:0;
	padding-left: 83px;
}
.thead_bar .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}
.thead_bar .forumactionlink {
	display:block;
	width:18px;
	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;
}
.thead_bar .forumstats li, .thead_bar .forumstats_2 li{
	font-size: 12pxpx;
	text-align: right;
	padding-right: 20px;
	display:block;
}
.thead_bar .forumlastpost {
	display:block;
	float: left;
	clear: right;
}
.thead_bar .theadrow .forumlastpost {
	width: 22%;
}
.forumbitBody {
	padding-right:2px;
	z-index:1;
	clear:both;
}
#post {
	z-index:1;
}
.threadlist {
	margin-top:0;
}
#threadlist .threadlisthead {
	background:#070707 url(images/styles/SKINNAME/style/theadBG.gif) repeat-x left top;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	border:  ;
	border-top:0;
	color:;
	padding:4px 0px 4px 0px;
	font:  normal 11px arial, helvetica, sans-serif;
	margin: 0;
}
#threadlist .threadlisthead a, #threadlist .threadlisthead a:hover {
	color:;
}
.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	/*background:#070707 url(images/styles/SKINNAME/style/theadBG.gif) repeat-x left top;/*
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color:;
	margin: -1px -1px 0;
	font:  normal 11px arial, helvetica, sans-serif;
	padding:4px 0px 4px 0px;
	/*border:  ;*/
	border-top:0;
}
#posts .posthead a:link, #posts .posthead a:visited {
	color:;
}
#posts .posthead a:hover {
	color:;
}
#posts .posthead .time, #posts .nodecontrols {
	color:;
}

/* Postbit CSS (Center Userinfo, Userinfo boxed stats wrap)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#postlist .userinfo {
	padding-top:10px;
}
.username_container {
	padding:2px 0;
	text-align:center;
}
.username_container .username strong {
	font:  normal 16pt arial, helvetica, sans-serif;
}
.usertitle, .rank {
	text-align:center;
}
.usercenter {
	padding-top:5px;
	text-align:center;
}
.post_field {
	background:#fff none   ;
	color:#414141;
	border:1px solid #b9c4cd;
	padding:3px 3px 3px 10px;
	margin-top: 2px;
	text-align:left;
}
.post_field strong {
	color:;
}
.post_field dt {
	color:rgb(3, 108, 155);
	font-weight:700;
}
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 0;
}
.bbcode_container .bbcode_quote_container {
	background:none;
}

.forum_info_block, .forum_info_form {
	background:none;
}
.postfoot {
	border-top: 1px solid #b9cdd7;
}
.postfootWrap {
	border-right: 1px solid #b9cdd7;
}
#thread_info a.collapse {
	position: absolute;
	top: 9px;
}

/*************************************************/
/* TOP MEMBER BAR*/
.toplinks .notifications a.popupctrl {	
       -webkit-border-radius: 5px;
-moz-border-radius: 5px;
       border-radius: 5px;
       color:#fff;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications 

a.popupctrl.active, .toplinks ul.isuser li a:hover {
	-moz-border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
}
#toplinks, .toplinks {
	text-align:left;
	line-height:20px;
}

/* Bottom Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.bottomBar {
	/*background: none   ;*/
	height:;
	font-size:0;
	clear:both;
}
.bottomBarLeft {
	/*background: none   ;*/
	height:;
	font-size:0;
}
.bottomBarRight {
	/*background: none   ;*/
	height:;
	font-size:0;
}

/* CMS & Blog CSS
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
h1.header, h2.header { 
	text-transform:capitalize; 
}

/* Forum Home
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.forumrow .forumtitle a:link, .forumrow .forumtitle a:visited {
	/*color:;*/
	font:   16px arial, helvetica, sans-serif;
}
.forumrow .forumtitle a:hover{
	color:;
}
.forumrow .lastposttitle a:link, .forumrow .lastposttitle a:visited {
	color:;
	font-weight:700;
}
.forumrow .lastposttitle a:hover{
	color:;
}
#forums .lastpostby a.username {
	color:;
}
#forums .lastpostby a.username:hover {
	color:;
}
.forumdescription {
	color:;
}
#notices .restore {
	/*background:#ffefb6 none   ;
	border:1px solid #ebd27b;
	color:#3c3a22;*/
	line-height:16px;
	padding:8px 10px 8px 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}


/* Advanced Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchtypeswitcher {
	border-bottom:4px solid ;
}
#searchtypeswitcher li a {
	background-color:;
	color:#FFF;
}

#searchtypeswitcher li.selected a {
	background-color:;
}

#searchtypeswitcher li a:hover {
	background-color:;
}

/* vBulletin Groups
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
li.sgicon .maincol, #sidebar li.sgicon .maincol,#thumbnails li {
	background: #fff none   ;
}
#sidebar li.sgicon .maincol .textcontrol {
	color: #424242;
}
#content .grouplist .blockrow > li, #content .grouplist .blockrow > ol, #content .grouplist .blockrow > div {
	background: #f5f9fb none   ;
	border: 1px solid #b9cdd7;
}
#pictures .blockbody .blockrow, #group_discussion_inlinemod_form .blockbody .blockrow {
	border: 1px solid #b9cdd7;
}
.toolsmenu {
	background: #dcedf7 url(images/misc/blog/top-highlight.png) repeat-x left top;
	_background-image: none;
	border: 1px solid #afd5e9;
}
.toolsmenu div {
	border-top:none;
	color: #424242;
}
.toolsmenu h1 a {
	color: #424242;
}
.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	color: #424242;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup 

.popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	color: #424242;
}
dl.blogbit, tr.blogbit,
dl.blogcatbit, tr.blogcatbit {
	background: #fff none   ;
}