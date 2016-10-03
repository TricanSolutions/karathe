/*!
* Image Multi Upload
* http://codecanyon.net/
*
* Copyright 2010, QuanticaLabs
* You need to buy a license if you want use this script.
* http://codecanyon.net/item/image-multi-upload/119999?ref=quanticalabs
* http://codecanyon.net/wiki/buying/howto-buying/licensing/
*
* Includes Uploadify v2.1.0
* Release Date: August 24, 2009
* Copyright (c) 2009 Ronnie Garcia, Travis Nickels
* Under the MIT licence
* 
* Includes Sizzle.js
* http://sizzlejs.com/
* Copyright 2010, The Dojo Foundation
* Released under the MIT, BSD, and GPL Licenses.
*
*/ 
var swfobject=function(){function C(){if(b){return}try{var e=a.getElementsByTagName("body")[0].appendChild(U("span"));e.parentNode.removeChild(e)}catch(t){return}b=true;var n=c.length;for(var r=0;r<n;r++){c[r]()}}function k(e){if(b){e()}else{c[c.length]=e}}function L(t){if(typeof u.addEventListener!=e){u.addEventListener("load",t,false)}else{if(typeof a.addEventListener!=e){a.addEventListener("load",t,false)}else{if(typeof u.attachEvent!=e){z(u,"onload",t)}else{if(typeof u.onload=="function"){var n=u.onload;u.onload=function(){n();t()}}else{u.onload=t}}}}}function A(){if(l){O()}else{M()}}function O(){var n=a.getElementsByTagName("body")[0];var r=U(t);r.setAttribute("type",i);var s=n.appendChild(r);if(s){var o=0;(function(){if(typeof s.GetVariable!=e){var t=s.GetVariable("$version");if(t){t=t.split(" ")[1].split(",");T.pv=[parseInt(t[0],10),parseInt(t[1],10),parseInt(t[2],10)]}}else{if(o<10){o++;setTimeout(arguments.callee,10);return}}n.removeChild(r);s=null;M()})()}else{M()}}function M(){var t=h.length;if(t>0){for(var n=0;n<t;n++){var r=h[n].id;var i=h[n].callbackFn;var s={success:false,id:r};if(T.pv[0]>0){var o=R(r);if(o){if(W(h[n].swfVersion)&&!(T.wk&&T.wk<312)){V(r,true);if(i){s.success=true;s.ref=_(r);i(s)}}else{if(h[n].expressInstall&&D()){var u={};u.data=h[n].expressInstall;u.width=o.getAttribute("width")||"0";u.height=o.getAttribute("height")||"0";if(o.getAttribute("class")){u.styleclass=o.getAttribute("class")}if(o.getAttribute("align")){u.align=o.getAttribute("align")}var a={};var f=o.getElementsByTagName("param");var l=f.length;for(var c=0;c<l;c++){if(f[c].getAttribute("name").toLowerCase()!="movie"){a[f[c].getAttribute("name")]=f[c].getAttribute("value")}}P(u,a,r,i)}else{H(o);if(i){i(s)}}}}}else{V(r,true);if(i){var p=_(r);if(p&&typeof p.SetVariable!=e){s.success=true;s.ref=p}i(s)}}}}}function _(n){var r=null;var i=R(n);if(i&&i.nodeName=="OBJECT"){if(typeof i.SetVariable!=e){r=i}else{var s=i.getElementsByTagName(t)[0];if(s){r=s}}}return r}function D(){return!w&&W("6.0.65")&&(T.win||T.mac)&&!(T.wk&&T.wk<312)}function P(t,n,r,i){w=true;g=i||null;y={success:false,id:r};var o=R(r);if(o){if(o.nodeName=="OBJECT"){v=B(o);m=null}else{v=o;m=r}t.id=s;if(typeof t.width==e||!/%$/.test(t.width)&&parseInt(t.width,10)<310){t.width="310"}if(typeof t.height==e||!/%$/.test(t.height)&&parseInt(t.height,10)<137){t.height="137"}a.title=a.title.slice(0,47)+" - Flash Player Installation";var f=T.ie&&T.win?"ActiveX":"PlugIn",l="MMredirectURL="+u.location.toString().replace(/&/g,"%26")+"&MMplayerType="+f+"&MMdoctitle="+a.title;if(typeof n.flashvars!=e){n.flashvars+="&"+l}else{n.flashvars=l}if(T.ie&&T.win&&o.readyState!=4){var c=U("div");r+="SWFObjectNew";c.setAttribute("id",r);o.parentNode.insertBefore(c,o);o.style.display="none";(function(){if(o.readyState==4){o.parentNode.removeChild(o)}else{setTimeout(arguments.callee,10)}})()}j(t,n,r)}}function H(e){if(T.ie&&T.win&&e.readyState!=4){var t=U("div");e.parentNode.insertBefore(t,e);t.parentNode.replaceChild(B(e),t);e.style.display="none";(function(){if(e.readyState==4){e.parentNode.removeChild(e)}else{setTimeout(arguments.callee,10)}})()}else{e.parentNode.replaceChild(B(e),e)}}function B(e){var n=U("div");if(T.win&&T.ie){n.innerHTML=e.innerHTML}else{var r=e.getElementsByTagName(t)[0];if(r){var i=r.childNodes;if(i){var s=i.length;for(var o=0;o<s;o++){if(!(i[o].nodeType==1&&i[o].nodeName=="PARAM")&&!(i[o].nodeType==8)){n.appendChild(i[o].cloneNode(true))}}}}}return n}function j(n,r,s){var o,u=R(s);if(T.wk&&T.wk<312){return o}if(u){if(typeof n.id==e){n.id=s}if(T.ie&&T.win){var a="";for(var f in n){if(n[f]!=Object.prototype[f]){if(f.toLowerCase()=="data"){r.movie=n[f]}else{if(f.toLowerCase()=="styleclass"){a+=' class="'+n[f]+'"'}else{if(f.toLowerCase()!="classid"){a+=" "+f+'="'+n[f]+'"'}}}}}var l="";for(var c in r){if(r[c]!=Object.prototype[c]){l+='<param name="'+c+'" value="'+r[c]+'" />'}}u.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+a+">"+l+"</object>";p[p.length]=n.id;o=R(n.id)}else{var h=U(t);h.setAttribute("type",i);for(var d in n){if(n[d]!=Object.prototype[d]){if(d.toLowerCase()=="styleclass"){h.setAttribute("class",n[d])}else{if(d.toLowerCase()!="classid"){h.setAttribute(d,n[d])}}}}for(var v in r){if(r[v]!=Object.prototype[v]&&v.toLowerCase()!="movie"){F(h,v,r[v])}}u.parentNode.replaceChild(h,u);o=h}}return o}function F(e,t,n){var r=U("param");r.setAttribute("name",t);r.setAttribute("value",n);e.appendChild(r)}function I(e){var t=R(e);if(t&&t.nodeName=="OBJECT"){if(T.ie&&T.win){t.style.display="none";(function(){if(t.readyState==4){q(e)}else{setTimeout(arguments.callee,10)}})()}else{t.parentNode.removeChild(t)}}}function q(e){var t=R(e);if(t){for(var n in t){if(typeof t[n]=="function"){t[n]=null}}t.parentNode.removeChild(t)}}function R(e){var t=null;try{t=a.getElementById(e)}catch(n){}return t}function U(e){return a.createElement(e)}function z(e,t,n){e.attachEvent(t,n);d[d.length]=[e,t,n]}function W(e){var t=T.pv,n=e.split(".");n[0]=parseInt(n[0],10);n[1]=parseInt(n[1],10)||0;n[2]=parseInt(n[2],10)||0;return t[0]>n[0]||t[0]==n[0]&&t[1]>n[1]||t[0]==n[0]&&t[1]==n[1]&&t[2]>=n[2]?true:false}function X(n,r,i,s){if(T.ie&&T.mac){return}var o=a.getElementsByTagName("head")[0];if(!o){return}var u=i&&typeof i=="string"?i:"screen";if(s){E=null;S=null}if(!E||S!=u){var f=U("style");f.setAttribute("type","text/css");f.setAttribute("media",u);E=o.appendChild(f);if(T.ie&&T.win&&typeof a.styleSheets!=e&&a.styleSheets.length>0){E=a.styleSheets[a.styleSheets.length-1]}S=u}if(T.ie&&T.win){if(E&&typeof E.addRule==t){E.addRule(n,r)}}else{if(E&&typeof a.createTextNode!=e){E.appendChild(a.createTextNode(n+" {"+r+"}"))}}}function V(e,t){if(!x){return}var n=t?"visible":"hidden";if(b&&R(e)){R(e).style.visibility=n}else{X("#"+e,"visibility:"+n)}}function $(t){var n=/[\\\"<>\.;]/;var r=n.exec(t)!=null;return r&&typeof encodeURIComponent!=e?encodeURIComponent(t):t}var e="undefined",t="object",n="Shockwave Flash",r="ShockwaveFlash.ShockwaveFlash",i="application/x-shockwave-flash",s="SWFObjectExprInst",o="onreadystatechange",u=window,a=document,f=navigator,l=false,c=[A],h=[],p=[],d=[],v,m,g,y,b=false,w=false,E,S,x=true,T=function(){var s=typeof a.getElementById!=e&&typeof a.getElementsByTagName!=e&&typeof a.createElement!=e,o=f.userAgent.toLowerCase(),c=f.platform.toLowerCase(),h=c?/win/.test(c):/win/.test(o),p=c?/mac/.test(c):/mac/.test(o),d=/webkit/.test(o)?parseFloat(o.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,v=!+"1",m=[0,0,0],g=null;if(typeof f.plugins!=e&&typeof f.plugins[n]==t){g=f.plugins[n].description;if(g&&!(typeof f.mimeTypes!=e&&f.mimeTypes[i]&&!f.mimeTypes[i].enabledPlugin)){l=true;v=false;g=g.replace(/^.*\s+(\S+\s+\S+$)/,"$1");m[0]=parseInt(g.replace(/^(.*)\..*$/,"$1"),10);m[1]=parseInt(g.replace(/^.*\.(.*)\s.*$/,"$1"),10);m[2]=/[a-zA-Z]/.test(g)?parseInt(g.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof u.ActiveXObject!=e){try{var y=new ActiveXObject(r);if(y){g=y.GetVariable("$version");if(g){v=true;g=g.split(" ")[1].split(",");m=[parseInt(g[0],10),parseInt(g[1],10),parseInt(g[2],10)]}}}catch(b){}}}return{w3:s,pv:m,wk:d,ie:v,win:h,mac:p}}(),N=function(){if(!T.w3){return}if(typeof a.readyState!=e&&a.readyState=="complete"||typeof a.readyState==e&&(a.getElementsByTagName("body")[0]||a.body)){C()}if(!b){if(typeof a.addEventListener!=e){a.addEventListener("DOMContentLoaded",C,false)}if(T.ie&&T.win){a.attachEvent(o,function(){if(a.readyState=="complete"){a.detachEvent(o,arguments.callee);C()}});if(u==top){(function(){if(b){return}try{a.documentElement.doScroll("left")}catch(e){setTimeout(arguments.callee,0);return}C()})()}}if(T.wk){(function(){if(b){return}if(!/loaded|complete/.test(a.readyState)){setTimeout(arguments.callee,0);return}C()})()}L(C)}}();var J=function(){if(T.ie&&T.win){window.attachEvent("onunload",function(){var e=d.length;for(var t=0;t<e;t++){d[t][0].detachEvent(d[t][1],d[t][2])}var n=p.length;for(var r=0;r<n;r++){I(p[r])}for(var i in T){T[i]=null}T=null;for(var s in swfobject){swfobject[s]=null}swfobject=null})}}();return{registerObject:function(e,t,n,r){if(T.w3&&e&&t){var i={};i.id=e;i.swfVersion=t;i.expressInstall=n;i.callbackFn=r;h[h.length]=i;V(e,false)}else{if(r){r({success:false,id:e})}}},getObjectById:function(e){if(T.w3){return _(e)}},embedSWF:function(n,r,i,s,o,u,a,f,l,c){var h={success:false,id:r};if(T.w3&&!(T.wk&&T.wk<312)&&n&&r&&i&&s&&o){V(r,false);k(function(){i+="";s+="";var p={};if(l&&typeof l===t){for(var d in l){p[d]=l[d]}}p.data=n;p.width=i;p.height=s;var v={};if(f&&typeof f===t){for(var m in f){v[m]=f[m]}}if(a&&typeof a===t){for(var g in a){if(typeof v.flashvars!=e){v.flashvars+="&"+g+"="+a[g]}else{v.flashvars=g+"="+a[g]}}}if(W(o)){var y=j(p,v,r);if(p.id==r){V(r,true)}h.success=true;h.ref=y}else{if(u&&D()){p.data=u;P(p,v,r,c);return}else{V(r,true)}}if(c){c(h)}})}else{if(c){c(h)}}},switchOffAutoHideShow:function(){x=false},ua:T,getFlashPlayerVersion:function(){return{major:T.pv[0],minor:T.pv[1],release:T.pv[2]}},hasFlashPlayerVersion:W,createSWF:function(e,t,n){if(T.w3){return j(e,t,n)}else{return undefined}},showExpressInstall:function(e,t,n,r){if(T.w3&&D()){P(e,t,n,r)}},removeSWF:function(e){if(T.w3){I(e)}},createCSS:function(e,t,n,r){if(T.w3){X(e,t,n,r)}},addDomLoadEvent:k,addLoadEvent:L,getQueryParamValue:function(e){var t=a.location.search||a.location.hash;if(t){if(/\?/.test(t)){t=t.split("?")[1]}if(e==null){return $(t)}var n=t.split("&");for(var r=0;r<n.length;r++){if(n[r].substring(0,n[r].indexOf("="))==e){return $(n[r].substring(n[r].indexOf("=")+1))}}}return""},expressInstallCallback:function(){if(w){var e=R(s);if(e&&v){e.parentNode.replaceChild(v,e);if(m){V(m,true);if(T.ie&&T.win){v.style.display="block"}}if(g){g(y)}}w=false}}}}();if(jQuery){(function(e){e.extend(e.fn,{uploadify:function(t){e(this).each(function(){settings=e.extend({id:e(this).attr("id"),uploader:"uploadify.swf",script:"uploadify.php",expressInstall:null,folder:"",height:30,width:110,cancelImg:"cancel.png",wmode:"opaque",scriptAccess:"sameDomain",fileDataName:"Filedata",method:"POST",queueSizeLimit:999,simUploadLimit:1,queueID:false,displayData:"percentage",onInit:function(){},onSelect:function(){},onQueueFull:function(){},onCheck:function(){},onCancel:function(){},onError:function(){},onProgress:function(){},onComplete:function(){},onAllComplete:function(){}},t);var n=location.pathname;n=n.split("/");n.pop();n=n.join("/")+"/";var r={};r.uploadifyID=settings.id;r.pagepath=n;if(settings.buttonImg){r.buttonImg=escape(settings.buttonImg)}if(settings.buttonText){r.buttonText=escape(settings.buttonText)}if(settings.rollover){r.rollover=true}r.script=settings.script;r.folder=escape(settings.folder);if(settings.scriptData){var i="";for(var s in settings.scriptData){i+="&"+s+"="+settings.scriptData[s]}r.scriptData=escape(i.substr(1))}r.width=settings.width;r.height=settings.height;r.wmode=settings.wmode;r.method=settings.method;r.queueSizeLimit=settings.queueSizeLimit;r.simUploadLimit=settings.simUploadLimit;if(settings.hideButton){r.hideButton=true}if(settings.fileDesc){r.fileDesc=settings.fileDesc}if(settings.fileExt){r.fileExt=settings.fileExt}if(settings.multi){r.multi=true}if(settings.auto){r.auto=true}if(settings.sizeLimit){r.sizeLimit=settings.sizeLimit}if(settings.checkScript){r.checkScript=settings.checkScript}if(settings.fileDataName){r.fileDataName=settings.fileDataName}if(settings.queueID){r.queueID=settings.queueID}if(settings.onInit()!==false){e(this).css("display","none");e(this).after('<div id="'+e(this).attr("id")+'Uploader"></div>');swfobject.embedSWF(settings.uploader,settings.id+"Uploader",settings.width,settings.height,"9.0.24",settings.expressInstall,r,{quality:"high",wmode:settings.wmode,allowScriptAccess:settings.scriptAccess});if(settings.queueID==false){e("#"+e(this).attr("id")+"Uploader").after('<div id="'+e(this).attr("id")+'Queue" class="uploadifyQueue"></div>')}}if(typeof settings.onOpen=="function"){e(this).bind("uploadifyOpen",settings.onOpen)}e(this).bind("uploadifySelect",{action:settings.onSelect,queueID:settings.queueID},function(t,n,r){if(t.data.action(t,n,r)!==false){var i=Math.round(r.size/1024*100)*.01;var s="KB";if(i>1e3){i=Math.round(i*.001*100)*.01;s="MB"}var o=i.toString().split(".");if(o.length>1){i=o[0]+"."+o[1].substr(0,2)}else{i=o[0]}if(r.name.length>20){fileName=r.name.substr(0,20)+"..."}else{fileName=r.name}queue="#"+e(this).attr("id")+"Queue";if(t.data.queueID){queue="#"+t.data.queueID}e(queue).append('<div id="'+e(this).attr("id")+n+'" class="uploadifyQueueItem"><div class="cancel"><a href="javascript:jQuery(\'#'+e(this).attr("id")+"').uploadifyCancel('"+n+'\')"><img src="'+settings.cancelImg+'" border="0" /></a></div><span class="fileName">'+fileName+" ("+i+s+')</span><span class="percentage"></span><div class="uploadifyProgress"><div id="'+e(this).attr("id")+n+'ProgressBar" class="uploadifyProgressBar"><!--Progress Bar--></div></div></div>')}});if(typeof settings.onSelectOnce=="function"){e(this).bind("uploadifySelectOnce",settings.onSelectOnce)}e(this).bind("uploadifyQueueFull",{action:settings.onQueueFull},function(e,t){if(e.data.action(e,t)!==false){alert("The queue is full.  The max size is "+t+".")}});e(this).bind("uploadifyCheckExist",{action:settings.onCheck},function(t,r,i,s,o){var u=new Object;u=i;u.folder=n+s;if(o){for(var f in i){var l=f}}e.post(r,u,function(n){for(var u in n){if(t.data.action(t,r,i,s,o)!==false){var f=confirm("Do you want to replace the file "+n[u]+"?");if(!f){document.getElementById(e(t.target).attr("id")+"Uploader").cancelFileUpload(u,true,true)}}}if(o){document.getElementById(e(t.target).attr("id")+"Uploader").startFileUpload(l,true)}else{document.getElementById(e(t.target).attr("id")+"Uploader").startFileUpload(null,true)}},"json")});e(this).bind("uploadifyCancel",{action:settings.onCancel},function(t,n,r,i,s){if(t.data.action(t,n,r,i,s)!==false){var o=s==true?0:250;e("#"+e(this).attr("id")+n).fadeOut(o,function(){e(this).remove()})}});if(typeof settings.onClearQueue=="function"){e(this).bind("uploadifyClearQueue",settings.onClearQueue)}var o=[];e(this).bind("uploadifyError",{action:settings.onError},function(t,n,r,i){if(t.data.action(t,n,r,i)!==false){var s=new Array(n,r,i);o.push(s);e("#"+e(this).attr("id")+n+" .percentage").text(" - "+i.type+" Error");e("#"+e(this).attr("id")+n).addClass("uploadifyError")}});e(this).bind("uploadifyProgress",{action:settings.onProgress,toDisplay:settings.displayData},function(t,n,r,i){if(t.data.action(t,n,r,i)!==false){e("#"+e(this).attr("id")+n+"ProgressBar").css("width",i.percentage+"%");if(t.data.toDisplay=="percentage"){displayData=" - "+i.percentage+"%"}if(t.data.toDisplay=="speed"){displayData=" - "+i.speed+"KB/s"}if(t.data.toDisplay==null){displayData=" "}e("#"+e(this).attr("id")+n+" .percentage").text(displayData)}});e(this).bind("uploadifyComplete",{action:settings.onComplete},function(t,n,r,i,s){if(t.data.action(t,n,r,unescape(i),s)!==false){e("#"+e(this).attr("id")+n+" .percentage").text(" - Completed");e("#"+e(this).attr("id")+n).fadeOut(250,function(){e(this).remove()})}});if(typeof settings.onAllComplete=="function"){e(this).bind("uploadifyAllComplete",{action:settings.onAllComplete},function(e,t){if(e.data.action(e,t)!==false){o=[]}})}})},uploadifySettings:function(t,n,r){var i=false;e(this).each(function(){if(t=="scriptData"&&n!=null){if(r){var s=n}else{var s=e.extend(settings.scriptData,n)}var o="";for(var u in s){o+="&"+u+"="+escape(s[u])}n=o.substr(1)}i=document.getElementById(e(this).attr("id")+"Uploader").updateSettings(t,n)});if(n==null){if(t=="scriptData"){var s=unescape(i).split("&");var o=new Object;for(var u=0;u<s.length;u++){var f=s[u].split("=");o[f[0]]=f[1]}i=o}return i}},uploadifyUpload:function(t){e(this).each(function(){document.getElementById(e(this).attr("id")+"Uploader").startFileUpload(t,false)})},uploadifyCancel:function(t){e(this).each(function(){document.getElementById(e(this).attr("id")+"Uploader").cancelFileUpload(t,true,false)})},uploadifyClearQueue:function(){e(this).each(function(){document.getElementById(e(this).attr("id")+"Uploader").clearFileUploadQueue(false)})}})})(jQuery)}jQuery(document).ready(function($){function roundNumber(e,t){var n=Math.round(Math.round(e*Math.pow(10,t+1))/Math.pow(10,1))/Math.pow(10,t);return n}function updateUploadifySettings(uploader){if(typeof uploader.attr("data")!="undefined"){var uploadifySettings=uploader.uploadifySettings("scriptData");var customData=eval("({"+uploader.attr("data")+"})");var data="";for(var name in customData){data+="'"+name+"':";if(customData[name].substr(0,9)=="selector:")data+="'"+$(customData[name].substr(9).toString()).val()+"',";else data+="'"+customData[name]+"',"}data=data.substr(0,data.length-1);data=eval("({"+data+"})");uploader.uploadifySettings("scriptData",$.extend(uploadifySettings,data))}}function preventSubmit(e){e.preventDefault()}function submitForm(e){e.preventDefault();var t=e.data.uploader;updateUploadifySettings(t);var n;if(typeof t.attr("queueId")!="undefined")n=$("#"+t.attr("queueId"));else n=$("#"+t.attr("id")+"Queue");if(n.children().length>0){var r=t.uploadifySettings("scriptData");var i=$(this).serializeArray();var s={};for(var o=0;o<i.length;o++)s[i[o].name]=escape(i[o].value);t.uploadifySettings("scriptData",$.extend(r,s));if(typeof t.attr("ajaxLoaderId")!="undefined")$("#"+t.attr("ajaxLoaderId")).css("display","inline");$(this).bind("submit",preventSubmit);t.uploadifyUpload()}else{if(typeof t.attr("ajax")!="undefined"&&t.attr("ajax")=="true"){var u=$(this).serializeArray();var a=$(this).attr("action");var f=$(this).attr("method");var l=$(this);if(typeof t.attr("ajaxLoaderId")!="undefined")$("#"+t.attr("ajaxLoaderId")).css("display","inline");$.ajax({url:a,data:u,type:f,async:false,success:function(e){if(typeof t.attr("ajaxInfoId")!="undefined"){$("#"+t.attr("ajaxInfoId")).html("");$("#"+t.attr("ajaxInfoId")).html(e).css("display","block")}l[0].reset();$("[name='IMUFiles[]']").remove();if(typeof t.attr("queueId")!="undefined")$("#"+t.attr("queueId")).html("");else $("#"+t.attr("id")+"Queue").html("");if(typeof t.attr("ajaxLoaderId")!="undefined")$("#"+t.attr("ajaxLoaderId")).css("display","none");l.one("submit",{uploader:t},submitForm)}})}else $(this).submit()}}$(".IMU").each(function(index){var self=$(this);self.attr("id","IMU"+index);if(typeof self.attr("startOn")!="undefined"){if(self.attr("startOn")=="manually"){self.after("<input type='button' value='"+(typeof self.attr("buttonCaption")=="undefined"?"":self.attr("buttonCaption"))+"' id='IMU"+index+"start' class='uploadButton' />");$("#IMU"+index+"start").click(function(){updateUploadifySettings(self);self.uploadifyUpload()})}else if(self.attr("startOn").substr(0,8)=="onSubmit")$("#"+self.attr("startOn").substr(9)).one("submit",{uploader:self},submitForm)}var fileExt="";if(typeof self.attr("fileExt")!="undefined"){var fileExtSplit=self.attr("fileExt").split(",");for(var i=0;i<fileExtSplit.length;i++){fileExt+="*."+fileExtSplit[i];if(i+1<fileExtSplit.length)fileExt+=";"}}var fileDesc="";if(typeof self.attr("fileDesc")!="undefined")fileDesc=self.attr("fileDesc");var buttonImg="";if(typeof self.attr("button")!="undefined")buttonImg=self.attr("button");var bwidth=120;if(typeof self.attr("bwidth")!="undefined")bwidth=self.attr("bwidth");var bheight=30;if(typeof self.attr("bheight")!="undefined")bheight=self.attr("bheight");var buttonText="SELECT FILES";if(typeof self.attr("buttonText")!="undefined")buttonText=self.attr("buttonText");var customQueueId="";if(typeof self.attr("queueId")!="undefined")customQueueId=self.attr("queueId");var maxSize="";if(typeof self.attr("maxSize")!="undefined")maxSize=self.attr("maxSize");var uploadScript="upload.php";if(typeof self.attr("uploadScript")!="undefined")uploadScript=self.attr("uploadScript");var wmode="transparent";if(typeof self.attr("wmode")!="undefined")wmode=self.attr("wmode");var filesLimit=999;if(typeof self.attr("filesLimit")!="undefined")filesLimit=self.attr("filesLimit");var sessionId="";if(typeof self.attr("sessionId")!="undefined")sessionId=self.attr("sessionId");var ajax="false";if(typeof self.attr("ajax")!="undefined")ajax=self.attr("ajax");var method="post";if(typeof self.attr("method")!="undefined")method=self.attr("method");var scriptData="'action':'upload', 'path':'"+self.attr("path")+"', 'PHPSESSID':'"+sessionId+"'";if(typeof self.attr("thumbnails")!="undefined")scriptData+=", 'thumbnails':'"+self.attr("thumbnails")+"'";if(typeof self.attr("thumbnailsFolders")!="undefined")scriptData+=", 'thumbnailsFolders':'"+self.attr("thumbnailsFolders")+"'";if(typeof self.attr("thumbnailsCrop")!="undefined")scriptData+=", 'thumbnailsCrop':'"+self.attr("thumbnailsCrop")+"'";self.uploadify({uploader:"js/upload.swf",script:uploadScript,scriptData:eval("({"+scriptData+"})"),queueID:customQueueId,cancelImg:"close.png",displayData:self.attr("onprogress")=="speed"?"speed":"percentage",fileExt:fileExt,fileDesc:fileDesc,method:method,buttonImg:buttonImg,buttonText:buttonText,wmode:wmode,width:bwidth,height:bheight,sizeLimit:maxSize,hideButton:self.attr("hideButton")=="true"?true:false,auto:self.attr("startOn")=="auto"?true:false,multi:self.attr("multi")=="true"?true:false,queueSizeLimit:filesLimit,onSelect:function(e,t,n){if(self.attr("multi")!="true")if($("#"+t).html()!="")if(customQueueId!="")$("#"+customQueueId).html("");else $("#"+self.attr("id")+"Queue").html("")},onSelectOnce:function(e,t){if(self.attr("startOn")=="auto")updateUploadifySettings(self)},onComplete:function(e,t,n,r,i){var s=$.parseJSON(r);if(typeof s.error!="undefined"){$("#"+self.attr("id")+t).html(s.error);return false}else{if(self.attr("startOn").substr(0,8)=="onSubmit")$("#"+self.attr("startOn").substr(9)).append("<input type='hidden' name='IMUFiles[]' value='"+s.filename.replace("'","%27")+"' />");if(self.attr("afterUpload")=="link"||self.attr("afterUpload")=="filename"||self.attr("afterUpload")=="image"||self.attr("afterUpload")=="none"){$("#"+self.attr("id")+t+" .uploadifyProgress").animate({opacity:0},500,function(){$(this).remove()});$("#"+self.attr("id")+t).html((self.attr("allowRemove")=="true"?"<div class='cancel'><input class='button_cancel' name='removeFile' filename='"+s.filename.replace("'","%27")+"' type='button'></div>":"")+(self.attr("afterUpload")=="link"||self.attr("afterUpload")=="image"?"<a href='"+s.path+s.filename.replace("'","%27")+"' target='_blank'>":"")+(self.attr("afterUpload")=="image"&&(s.extension.toLowerCase()=="jpg"||s.extension.toLowerCase()=="jpeg"||s.extension.toLowerCase()=="bmp"||s.extension.toLowerCase()=="png"||s.extension.toLowerCase()=="tiff"||s.extension.toLowerCase()=="gif")?"<img class='uploadedImage' src='"+s.path+s.filename.replace("'","%27")+"' />":self.attr("afterUpload")!="none"?"<span class='fileName'>"+n.name+"</span>":"")+(self.attr("afterUpload")=="link"||self.attr("afterUpload")=="image"?"</a>":""));if(typeof self.attr("thumbnailsAfterUpload")!="undefined"){var o=self.attr("thumbnailsAfterUpload").split(",");var u=new Array;if(typeof self.attr("thumbnailsFolders")!="undefined")u=self.attr("thumbnailsFolders").split(",");for(var a=0;a<o.length;a++){display=$.trim(o[a]);folder=$.trim(u[a])==""?self.attr("path"):$.trim(u[a]);if(display!="filename"&&display!="image"&&display!="link")$("#"+self.attr("id")+t).append("<span class='afterUploadThumbnail'>"+display+"</span>");else $("#"+self.attr("id")+t).append("<span class='afterUploadThumbnail'>"+(display=="link"||display=="image"?"<a href='"+folder+s.thumbnails[a].replace("'","%27")+"' target='_blank'>":"")+(display=="image"&&(s.extension.toLowerCase()=="jpg"||s.extension.toLowerCase()=="jpeg"||s.extension.toLowerCase()=="bmp"||s.extension.toLowerCase()=="png"||s.extension.toLowerCase()=="tiff"||s.extension.toLowerCase()=="gif")?"<img class='uploadedThumbnail' src='"+folder+s.thumbnails[a].replace("'","%27")+"' />":"<span class='fileName'>"+"thumb"+a+"_"+n.name+"</span>")+(display=="link"||display=="image"?"</a>":"")+"</span>")}}return false}}},onAllComplete:function(e,t){if(typeof self.attr("afterUpload")!="undefined"&&self.attr("afterUpload")!="link"&&self.attr("afterUpload")!="filename"&&self.attr("afterUpload")!="image"&&self.attr("afterUpload")!="none"){var n=self.attr("afterUpload");n=n.replace("IMUfilesUploaded",t.filesUploaded);n=n.replace("IMUerrors",t.errors);n=n.replace("IMUtotalSizeB",t.allBytesLoaded);n=n.replace("IMUtotalSizeKB",roundNumber(t.allBytesLoaded/1024,2));n=n.replace("IMUtotalSizeMB",roundNumber(t.allBytesLoaded/1024/1024,2));n=n.replace("IMUtotalSizeGB",roundNumber(t.allBytesLoaded/1024/1024/1024,2));n=n.replace("IMUspeedB",roundNumber(Math.round(t.speed*1024),2));n=n.replace("IMUspeedKB",roundNumber(Math.round(t.speed),2));n=n.replace("IMUspeedMB",roundNumber(Math.round(t.speed/1024),2));n=n.replace("IMUspeedGB",roundNumber(Math.round(t.speed/1024/1024),2));$("#"+self.attr("id")+"Queue").html(n)}if(self.attr("startOn").substr(0,8)=="onSubmit"){var r=$("#"+self.attr("startOn").substr(9));r.unbind("submit",preventSubmit);if(ajax=="true"){var t=r.serializeArray();var i=r.attr("action");var s=r.attr("method");if(typeof self.attr("ajaxLoaderId")!="undefined")$("#"+self.attr("ajaxLoaderId")).css("display","inline");$.ajax({url:i,data:t,type:s,async:false,success:function(e){if(typeof self.attr("ajaxInfoId")!="undefined"){$("#"+self.attr("ajaxInfoId")).html("");$("#"+self.attr("ajaxInfoId")).html(e).css("display","block")}r[0].reset();$("[name='IMUFiles[]']").remove();if(typeof self.attr("queueId")!="undefined")$("#"+self.attr("queueId")).html("");else $("#"+self.attr("id")+"Queue").html("");if(typeof self.attr("ajaxLoaderId")!="undefined")$("#"+self.attr("ajaxLoaderId")).css("display","none");r.one("submit",{uploader:self},submitForm)}})}else r.submit()}},onError:function(e,t,n,r){}});if(self.attr("allowRemove")=="true"){$("#"+(customQueueId!=""?customQueueId:self.attr("id")+"Queue")+" [name=removeFile]").live("click",function(){var selfRemove=$(this);if(typeof self.attr("removeData")!="undefined"){var customRemoveData=eval("({"+self.attr("removeData")+"})");var data="";for(var name in customRemoveData){data+="'"+name+"':";if(customRemoveData[name].substr(0,9)=="selector:")data+="'"+$(customRemoveData[name].substr(9).toString()).val()+"',";else data+="'"+customRemoveData[name]+"',"}data=data.substr(0,data.length-1);data=eval("({"+data+"})")}$.ajax({url:uploadScript,data:"action=remove&filename="+selfRemove.attr("fileName")+(typeof data!="undefined"?"&"+$.param(data):""),type:"POST",async:false,success:function(e){if(e!="")alert(e);else selfRemove.parent().parent().animate({opacity:0},500,function(){$(this).remove()})}})})}})})