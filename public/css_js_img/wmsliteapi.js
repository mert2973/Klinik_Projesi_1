function WMSSessionConfig(){}function push(a){WmsLite.push(a),setTimeout(function(){WmsLite.updateClientDebugStore(a)},1)}function getPrd(){return WmsLite.prd}function getWmsConfig(){return WM_C}function getUserName(){return WmsLite.uname}function getNickName(){return WmsLite.nname}function getZuid(){return WmsLite.zuid}function getUserId(){return WmsLite.uid}function getSid(){return WmsLite.sid}function getRawSid(){return WmsLite.rsid}function isReconnecting(){return WmsLite.reconnecting}function disablewms(){WmsLite.disable()}function isdisablewms(){return WmsLite.disablewms}function goOffline(){}function getWmsContacts(){return{}}function updateWmsContacts(){}function WmsLite(){}function getWMSOAuthCredentials(){return{token:_WMSOAUTHTOKEN,orgscope:_WMSOAUTHORGSCOPE,userscope:_WMSOAUTHUSERSCOPE,oprscope:_WMSOAUTHOPRSCOPE}}function isLongPollingForced(){return _WMS_LP}function _getAuthType(){return WmsLite.authtype}function getAuthToken(){return _WMSAUTHTOKEN}function getAuthScope(){return _WMSAUTHSCOPE}function getZAID(){return _WMSZAID}function nocachefix(){return"&nocache="+(new Date).getTime()}function WmsliteImpl(){}WMSSessionConfig.CHAT=1,WMSSessionConfig.CHAT_PRESENCE=2,WMSSessionConfig.PRESENCE_PERSONAL=4,WMSSessionConfig.PRESENCE_ORG=8,WMSSessionConfig.LOADBALANCED=16,WMSSessionConfig.MP=32,WMSSessionConfig.CROSS_PRD=64,WMSSessionConfig.MULTI_DISPATCH=128,WMSSessionConfig.REUSE_SESSION=256;var WM_TICKET="IAMAGENTTICKET",WM_D="zoho.com",WM_SAMED=!1,WM_FD=!1,WM_C="15",_WMSCONT="wms",wms_op=navigator.userAgent.indexOf("Opera")!=-1,wms_sf=navigator.userAgent.indexOf("Safari")!=-1,wms_ie=!wms_op&&/msie/i.test(navigator.userAgent),lfromstatic=!1,wmsjsversion="v60",_WMS_NODOMAINCHANGE=!1,_WMSSST=!1,_RETRYREGINTERVAL=1e4,iswmsframemonitorrunning=!1,iswmsframeloaded=!1,retryregistertimer=null,_WMSAUTHTOKEN,_WMSAUTHSCOPE,_WMSZAID,wmsdebuginfo,_WMS_RETRY_COUNT=0,wmsUserConfig={},_WMS_LP="false",_WMSOAUTHTOKEN,_WMSOAUTHORGSCOPE,_WMSOAUTHUSERSCOPE,_WMSOAUTHOPRSCOPE;(function(){var a=[];WmsLite.updateClientDebugStore=function(b){a.length>=1e3&&a.shift(),b.timestamp=(new Date).getTime(),a.push(b)},WmsLite.getClientDebugStore=function(){return a}})(),WmsLite.jsstaticdomain="js.zohostatic.com",WmsLite.bsettings={},WmsLite.getDebugInfo=function(){return wmsdebuginfo},WmsLite.updateDebugInfo=function(a){wmsdebuginfo=a},WmsLite.setOAuthCredentials=function(a,b,c,d){_WMSOAUTHTOKEN=a,_WMSOAUTHORGSCOPE=b||_WMSOAUTHORGSCOPE,_WMSOAUTHUSERSCOPE=c||_WMSOAUTHUSERSCOPE,_WMSOAUTHOPRSCOPE=d||_WMSOAUTHOPRSCOPE,typeof WmsLite.updateOAuthCredInBridge=="function"&&WmsLite.updateOAuthCredInBridge()},WmsLite.init=function(){function a(a){var b=JSON.parse(a.data),c=b.opr,d=b.params;c==="push"?push.apply(null,d):c==="serverup"?WmsLite.serverup.apply(null,d):c==="serverdown"?WmsLite.serverdown.apply(null,d):c==="updateDebugInfo"?WmsLite.updateDebugInfo.apply(null,d):c==="disablewms"&&disablewms()}return function(){_WMS_NODOMAINCHANGE||!wms_op&&!WM_SAMED&&(!wms_ie||wms_ie&&WM_FD)&&(document.domain=WM_D);if(typeof document.querySelector!="undefined"){var b=document.querySelector('script[src*="wmslite"]');b&&!b.getAttribute("isdev")&&(WmsLite.jsstaticdomain=b.src.split("/")[2])}this.lastconnect=-1,this.disablewms=!1,WmsLite.offline=!1,WmsLite.initcountdown=!0,WmsLite.isCrossOriginAllowed()&&(WmsLite.triggerbind=function(){var a={opr:"triggerbind",params:{zuid:WmsLite.zuid,rawsid:WmsLite.rsid,sid:WmsLite.sid}};WmsLite.pconnectframe.contentWindow.postMessage(JSON.stringify(a),"*")},window.removeEventListener("message",a),window.addEventListener("message",a))}}(),WmsLite.isCrossOriginAllowed=function(){if(WmsLite.crossoriginallowed&&this.zuid.charAt(0)==="$")return!0},WmsLite.allowCrossOrigin=function(a){WmsLite.crossoriginallowed=!0,WmsLite.hosturl=a},WmsLite.reconnect=function(a,b,c){c!=null&&c==1&&(this.reconnecting=!1);if(this.reconnecting==1)return;this.reconnecting=!0,this.retry==undefined&&(this.retry=0),this.retry++,setTimeout(function(){WmsLite.registerWms(WmsLite.prd,WmsLite.zuid,WmsLite.uname,null,!0,!0)},a),this.serverdown()},WmsLite.registerZuid=function(a,b,c,d){this.registerWms(a,b,c,null,d)},WmsLite.setIamTicketName=function(a){WM_TICKET=a},WmsLite.setConfig=function(a){WM_C=a},WmsLite.setDomain=function(a){WM_D=a},WmsLite.useSameDomain=function(){WM_SAMED=!0},WmsLite.forceDomainChange=function(){WM_FD=!0},WmsLite.setNoDomainChange=function(){_WMS_NODOMAINCHANGE=!0},WmsLite.registerAnnon=function(a,b,c,d){WmsLite.authtype=4,WmsLite.register(a,b,c,d)},WmsLite.register=function(a,b,c,d,e,f,g){function k(){_WMSAUTHTOKEN=e,_WMSAUTHSCOPE=f,_WMSZAID=g,_WMSAUTHTOKEN&&_WMSAUTHSCOPE&&(WmsLite.authtype=1),_WMSAUTHTOKEN&&_WMSZAID&&(WmsLite.authtype=8),_WMSZAID&&WmsLite.tokenpairauth&&(WmsLite.authtype=10),_WMSOAUTHTOKEN&&(WmsLite.authtype=9),WmsLite.registerWms(a,b,null,c,d)}if(typeof JSON=="undefined"){var h=document.createElement("script"),i=window.location.protocol,j=i==="https:"?wmsjsversion+"_https":wmsjsversion;h.type="text/javascript",h.src=i+"//"+this.jsstaticdomain+"/ichat/"+j+"/js/json2.min.js",document.body.appendChild(h),WmsLite.attachonload.call(h,k)}else k()},WmsLite.attachonload=function(a){typeof this.readyState!="undefined"?this.onreadystatechange=function(){(this.readyState=="loaded"||this.readyState=="complete")&&a.call(this)}:this.onload=function(){a.call(this)}},WmsLite.registerWms=function(a,b,c,d,e,f){this.prd=a,this.uname=c!=null&&c!=undefined?c:"",this.zuid=b!=null&&b!=undefined?b:"",WmsLite.authtype===undefined&&WmsLite.enableTokenPairAuth(),typeof this.nname=="undefined"&&(this.nname=d!=null&&d!=undefined?d:""),f==undefined&&this.init(e!=undefined?e:!1),this.pconnectframe=document.getElementById("pconnect");if(!this.pconnectframe){var g=document.createElement("iframe");g.name="wmspconnect",g.id="pconnect",g.style.display="none",document.body.appendChild(g),this.pconnectframe=document.getElementById("pconnect")}if((new Date).getTime()-this.lastconnect>1e4){this.lastconnect=(new Date).getTime();var h=this.zuid!=""?this.zuid:this.uname;_WMS_RETRY_COUNT++;var i="/"+_WMSCONT+"/pconnect.sas?settings=true&prd="+this.prd+"&uname="+h+"&samedomain="+WM_SAMED+nocachefix()+"&config="+WM_C+"&wmscont="+_WMSCONT+"&nodomainchange="+_WMS_NODOMAINCHANGE+"&retrycount="+_WMS_RETRY_COUNT+"&tabid="+window.getWmsTabId();lfromstatic&&(i+="&staticdomain="+WmsLite.jsstaticdomain+"&staticversion="+wmsjsversion),_WMSSST&&(i+="&sst=true"),WmsLite.tokenpairauth&&(i+="&tokenpair=true"),WmsLite.crossoriginallowed&&(i+="&crossorigin=true"),WmsLite.hosturl&&(i=WmsLite.hosturl+i),WmsLite.frameorigin&&(i+="&frameorigin="+WmsLite.frameorigin),this.pconnectframe.src=i,WmsLite.scheduleWMSFrameMonitor()}},WmsLite.scheduleWMSFrameMonitor=function(){iswmsframemonitorrunning||(iswmsframemonitorrunning=!0,clearTimeout(retryregistertimer),retryregistertimer=setTimeout(function(){WmsLite.registerMonitor()},_RETRYREGINTERVAL*6))},WmsLite.registerMonitor=function(){WmsLite.offline=!0,WmsLite.isReuseSession()?WmsLite.retryRegister():WmsLite.initReconnect()},WmsLite.retryRegister=function(){WmsLite.isReuseSession()?(op||!top.WmsLite.offline)&&WmsLite.reconnect(0,"Retry Register",!0):WmsLite.reconnect(0,"Retry Register",!0),clearTimeout(retryregistertimer),retryregistertimer=setTimeout(function(){WmsLite.registerMonitor()},_RETRYREGINTERVAL)},WmsLite.initReconnect=function(a,b){WmsLite.offline=!0;var c=WmsLite.initcountdown?!0:!1;WmsLite.initcountdown=!1,iswmsframeloaded===!1?WmsLite.reconnectTimer(c,WmsLite.retryRegister,a,b):WmsLite.reconnectTimer(c,WmsLite.triggerbind,a,b)},WmsLite.retryConnection=function(){iswmsframemonitorrunning?WmsLite.forceRegister():WmsLite.forceReconnect()},WmsLite.forceRegister=function(){WmsLite.initcountdown=!0,WmsLite.retryRegister()},WmsLite.forceReconnect=function(){WmsLite.initcountdown=!0,WmsLite.triggerbind()},WmsLite.reconnectTimer=function(){function c(a,b){return a=+a,b=+b,Math.floor(Math.random()*(b-a+1)+a)}var a=[30,60,90,120,300],b=0;return function(d,e,f,g){d?(b=0,a[0]=c(5,30)):b<a.length-1&&b++;var h=a[b];f&&(g=g||f,h=c(f,g)),WmsLite.countDown(h,e)}}();var wmsCountDownTimer;WmsLite.countDown=function(a,b){function c(){setTimeout(function(){typeof WmsliteImpl.reconnectionCountDown=="function"&&WmsliteImpl.reconnectionCountDown(a)},1);if(a===0){clearTimeout(wmsCountDownTimer),b();return}a--,wmsCountDownTimer=setTimeout(c,1e3)}clearTimeout(wmsCountDownTimer),c()},WmsLite.isReuseSession=function(){return(WM_C&WMSSessionConfig.REUSE_SESSION)==WMSSessionConfig.REUSE_SESSION},WmsLite.clearWMSFrameMonitor=function(a){clearTimeout(retryregistertimer),WmsLite.initcountdown=!0,iswmsframemonitorrunning=!1,a&&(WmsLite.offline=!1)},WmsLite.setWmsContext=function(a){_WMSCONT=a},WmsLite.disable=function(){this.disablewms=!0,this.abortBind(),this.clearWMSFrameMonitor()},WmsLite.push=function(a){if(a.mtype==0){var b=a.msg;this.uid=b.uid,this.nname=b.nname,this.sid=b.sid,this.rsid=b.rsid,this.zuid=b.zuid,this.retry=0,this.reconnecting=!1,WmsLite.clearWMSFrameMonitor(!0),iswmsframeloaded=!0,this.serverup(a.msg)}else if(a.mtype==-1){var c=a.msg||{},d;if(c&&c.instruction){var e=c.instruction.split("-");d=e[0]}d===undefined&&this.reconnect(10,"psdown",!0)}else if(a.mtype==-2){this.disable(),c=a.msg;try{WmsliteImpl.handleLogout(c.reason)}catch(f){}}else if(a.mtype==-7)try{WmsliteImpl.handleServiceMessage(a.msg)}catch(f){}else if(a.mtype==-5){c=a.msg,this.disable();try{WmsliteImpl.handleAccountDisabled(c.reason),WmsliteImpl.handleAuthFailure()}catch(f){}}else if(a.mtype==-16)iswmsframeloaded=!0,WmsLite.clearWMSFrameMonitor();else if(a.mtype==-12||a.mtype==-17){iswmsframeloaded=!1,WmsLite.scheduleWMSFrameMonitor();try{WmsliteImpl.handleAuthFailure()}catch(f){}}else if(a.mtype==-10){wmsUserConfig.infomsgid=a.msg.id,wmsUserConfig.infomsgprd=a.prd;try{a.msg.msg!==""?WmsliteImpl.showAnnouncement(a.msg.msg,a.msg.type,a.msg.id):WmsliteImpl.hideAnnouncement()}catch(f){}}else if(a.mtype==38)if(a.msg&&a.msg.module==="updatewmssettings"&&a.msg.data&&a.msg.data.disann){WmsLite.bsettings.disann=a.msg.data.disann;if(wmsUserConfig.infomsg&&WmsLite.isAnnBlocked()===!0)try{WmsliteImpl.hideAnnouncement()}catch(f){}}else try{WmsliteImpl.handleMessage(a.mtype,a.msg)}catch(f){setTimeout(function(){throw f},1)}else if(a.mtype==800){var g=a.msg,h=g.opr;h=="pubsub.ulist"?(PubSubApi.addUsers(g.pskey,g.psid,g.ulist),PubSubImpl.handleUserList(g.pskey,g.ulist)):h=="pubsub.usersubscribed"?(PubSubApi.addUsers(g.pskey,g.psid,g.ulist),PubSubImpl.handleUserIn(g.pskey,g.ulist)):h=="pubsub.userunsubscribed"?(PubSubApi.removeUsers(g.pskey,g.psid,g.ulist),PubSubImpl.handleUserOut(g.pskey,g.ulist)):h=="pubsub.message"&&PubSubImpl.handleMessage(g.pskey,g.msg)}else if(a.mtype==43){var i=a.msg;typeof AcsApi!="undefined"&&AcsApi.handlePush(i.type,i.data)}else{try{WmsliteImpl.handleMessage(a.mtype,a.msg)}catch(f){setTimeout(function(){throw f},1)}a.mtype==-3&&typeof AcsApi!="undefined"&&AcsApi.handleServerUP()}},WmsLite.serverup=function(a){WmsLite.initcountdown=!0,clearTimeout(wmsCountDownTimer),setTimeout(function(){try{WmsliteImpl.serverup(a),typeof AcsApi!="undefined"&&AcsApi.handleServerUP()}catch(b){}},100)},WmsLite.serverdown=function(a,b){a?(clearTimeout(retryregistertimer),WmsLite.initReconnect(a,b)):iswmsframemonitorrunning||WmsLite.initReconnect(),setTimeout(function(){try{WmsliteImpl.serverdown()}catch(a){}},100)},WmsLite.setJSStaticDomain=function(a){WmsLite.jsstaticdomain=a},WmsLite.enableSST=function(){},WmsLite.enableTokenPairAuth=function(){this.tokenpairauth=!0,this.authtype=10},WmsLite.setAuthType=function(a){this.authtype=a},WmsLite.setUserConfig=function(a){wmsUserConfig=a},WmsLite.isAnnBlocked=function(){var a=WmsLite.bsettings.disann,b=wmsUserConfig.infomsgid;return a&&(a[WmsLite.prd]||a.All)&&b?a[WmsLite.prd]===b||a.All===b:!1},WmsLite.setBarSettingsValue=function(a){WmsLite.bsettings=a;if(wmsUserConfig.infomsg&&WmsLite.isAnnBlocked()===!1)try{typeof WmsliteImpl!="undefined"&&WmsliteImpl.showAnnouncement&&WmsliteImpl.showAnnouncement(wmsUserConfig.infomsg,wmsUserConfig.infomsgtype,wmsUserConfig.infomsgid)}catch(b){}},WmsLite.setChatCSRFParamName=function(a){WmsLite._CHATCSRFPARAMNAME=a},WmsLite.setChatCSRFCookieName=function(a){WmsLite._CHATCSRFCOOKIENAME=a},WmsLite.clearAnnouncement=function(a){function b(){var a=document.cookie,b=a.indexOf(WmsLite._CHATCSRFCOOKIENAME),c=a.indexOf("=",b)+1;return a.substring(c,a.indexOf("; ",c))}var c="/_chat/updwmssettings.do",d="property=bchatsettings&key=disann&value="+wmsUserConfig.infomsgid+"&prd="+wmsUserConfig.infomsgprd;d+="&"+WmsLite._CHATCSRFPARAMNAME+"="+b()+nocachefix();var e=new XMLHttpRequest;e.onreadystatechange=a,e.open("POST",c),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8"),e.send(d)},WmsLite.setFrameOrigin=function(a){WmsLite.frameorigin=a||window.location.origin},WmsLite.useLongPolling=function(){_WMS_LP="true"},function(){var a=(new Date).getTime()+"_"+Math.floor(Math.random()*1e4);window.getWmsTabId=function(){return WmsLite.zuid+"_"+WmsLite.prd+"_"+a}}();var wmsjsversion="Jun_25_2019_3";WmsliteImpl.serverdown=function(){},WmsliteImpl.serverup=function(){},WmsliteImpl.handleLogout=function(a){},WmsliteImpl.handleMessage=function(a,b){},WmsliteImpl.handleAccountDisabled=function(a){},WmsliteImpl.handleServiceMessage=function(a){},WmsliteImpl.reconnectionCountDown=function(a){},WmsliteImpl.showAnnouncement=function(a,b,c){},WmsliteImpl.hideAnnouncement=function(){},WmsliteImpl.handleAuthFailure=function(){};var lfromstatic=!0;
