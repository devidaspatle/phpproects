var swfobject=function(){function x(){if(!v){try{var a=d.getElementsByTagName("body")[0].appendChild(d.createElement("span"));a.parentNode.removeChild(a)}catch(b){return}v=!0;for(var a=A.length,c=0;c<a;c++)A[c]()}}function O(a){v?a():A[A.length]=a}function P(a){if(typeof p.addEventListener!=k)p.addEventListener("load",a,!1);else if(typeof d.addEventListener!=k)d.addEventListener("load",a,!1);else if(typeof p.attachEvent!=k)X(p,"onload",a);else if("function"==typeof p.onload){var b=p.onload;p.onload=
function(){b();a()}}else p.onload=a}function Y(){var a=d.getElementsByTagName("body")[0],b=d.createElement(u);b.setAttribute("type",B);var c=a.appendChild(b);if(c){var f=0;(function(){if(typeof c.GetVariable!=k){var g=c.GetVariable("$version");g&&(g=g.split(" ")[1].split(","),e.pv=[parseInt(g[0],10),parseInt(g[1],10),parseInt(g[2],10)])}else if(10>f){f++;setTimeout(arguments.callee,10);return}a.removeChild(b);c=null;G()})()}else G()}function G(){var a=s.length;if(0<a)for(var b=0;b<a;b++){var c=s[b].id,
f=s[b].callbackFn,g={success:!1,id:c};if(0<e.pv[0]){var d=q(c);if(d)if(!C(s[b].swfVersion)||e.wk&&312>e.wk)if(s[b].expressInstall&&H()){g={};g.data=s[b].expressInstall;g.width=d.getAttribute("width")||"0";g.height=d.getAttribute("height")||"0";d.getAttribute("class")&&(g.styleclass=d.getAttribute("class"));d.getAttribute("align")&&(g.align=d.getAttribute("align"));for(var h={},d=d.getElementsByTagName("param"),l=d.length,m=0;m<l;m++)"movie"!=d[m].getAttribute("name").toLowerCase()&&(h[d[m].getAttribute("name")]=
d[m].getAttribute("value"));I(g,h,c,f)}else Z(d),f&&f(g);else w(c,!0),f&&(g.success=!0,g.ref=J(c),f(g))}else w(c,!0),f&&((c=J(c))&&typeof c.SetVariable!=k&&(g.success=!0,g.ref=c),f(g))}}function J(a){var b=null;(a=q(a))&&"OBJECT"==a.nodeName&&(typeof a.SetVariable!=k?b=a:(a=a.getElementsByTagName(u)[0])&&(b=a));return b}function H(){return!D&&C("6.0.65")&&(e.win||e.mac)&&!(e.wk&&312>e.wk)}function I(a,b,c,f){D=!0;K=f||null;Q={success:!1,id:c};var g=q(c);if(g){"OBJECT"==g.nodeName?(z=L(g),E=null):
(z=g,E=c);a.id=R;if(typeof a.width==k||!/%$/.test(a.width)&&310>parseInt(a.width,10))a.width="310";if(typeof a.height==k||!/%$/.test(a.height)&&137>parseInt(a.height,10))a.height="137";d.title=d.title.slice(0,47)+" - Flash Player Installation";f=e.ie&&e.win?"ActiveX":"PlugIn";f="MMredirectURL="+p.location.toString().replace(/&/g,"%26")+"&MMplayerType="+f+"&MMdoctitle="+d.title;b.flashvars=typeof b.flashvars!=k?b.flashvars+("&"+f):f;e.ie&&(e.win&&4!=g.readyState)&&(f=d.createElement("div"),c+="SWFObjectNew",
f.setAttribute("id",c),g.parentNode.insertBefore(f,g),g.style.display="none",function(){4==g.readyState?g.parentNode.removeChild(g):setTimeout(arguments.callee,10)}());M(a,b,c)}}function Z(a){if(e.ie&&e.win&&4!=a.readyState){var b=d.createElement("div");a.parentNode.insertBefore(b,a);b.parentNode.replaceChild(L(a),b);a.style.display="none";(function(){4==a.readyState?a.parentNode.removeChild(a):setTimeout(arguments.callee,10)})()}else a.parentNode.replaceChild(L(a),a)}function L(a){var b=d.createElement("div");
if(e.win&&e.ie)b.innerHTML=a.innerHTML;else if(a=a.getElementsByTagName(u)[0])if(a=a.childNodes)for(var c=a.length,f=0;f<c;f++)1==a[f].nodeType&&"PARAM"==a[f].nodeName||8==a[f].nodeType||b.appendChild(a[f].cloneNode(!0));return b}function M(a,b,c){var f,g=q(c);if(e.wk&&312>e.wk)return f;if(g)if(typeof a.id==k&&(a.id=c),e.ie&&e.win){var r="",h;for(h in a)a[h]!=Object.prototype[h]&&("data"==h.toLowerCase()?b.movie=a[h]:"styleclass"==h.toLowerCase()?r+=' class="'+a[h]+'"':"classid"!=h.toLowerCase()&&
(r+=" "+h+'="'+a[h]+'"'));h="";for(var l in b)b[l]!=Object.prototype[l]&&(h+='<param name="'+l+'" value="'+b[l]+'" />');g.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+r+">"+h+"</object>";F[F.length]=a.id;f=q(a.id)}else{l=d.createElement(u);l.setAttribute("type",B);for(var m in a)a[m]!=Object.prototype[m]&&("styleclass"==m.toLowerCase()?l.setAttribute("class",a[m]):"classid"!=m.toLowerCase()&&l.setAttribute(m,a[m]));for(r in b)b[r]!=Object.prototype[r]&&"movie"!=r.toLowerCase()&&
(a=l,h=r,m=b[r],c=d.createElement("param"),c.setAttribute("name",h),c.setAttribute("value",m),a.appendChild(c));g.parentNode.replaceChild(l,g);f=l}return f}function S(a){var b=q(a);b&&"OBJECT"==b.nodeName&&(e.ie&&e.win?(b.style.display="none",function(){if(4==b.readyState){var c=q(a);if(c){for(var f in c)"function"==typeof c[f]&&(c[f]=null);c.parentNode.removeChild(c)}}else setTimeout(arguments.callee,10)}()):b.parentNode.removeChild(b))}function q(a){var b=null;try{b=d.getElementById(a)}catch(c){}return b}
function X(a,b,c){a.attachEvent(b,c);y[y.length]=[a,b,c]}function C(a){var b=e.pv;a=a.split(".");a[0]=parseInt(a[0],10);a[1]=parseInt(a[1],10)||0;a[2]=parseInt(a[2],10)||0;return b[0]>a[0]||b[0]==a[0]&&b[1]>a[1]||b[0]==a[0]&&b[1]==a[1]&&b[2]>=a[2]?!0:!1}function T(a,b,c,f){if(!e.ie||!e.mac){var g=d.getElementsByTagName("head")[0];g&&(c=c&&"string"==typeof c?c:"screen",f&&(N=n=null),n&&N==c||(f=d.createElement("style"),f.setAttribute("type","text/css"),f.setAttribute("media",c),n=g.appendChild(f),
e.ie&&(e.win&&typeof d.styleSheets!=k&&0<d.styleSheets.length)&&(n=d.styleSheets[d.styleSheets.length-1]),N=c),e.ie&&e.win?n&&typeof n.addRule==u&&n.addRule(a,b):n&&typeof d.createTextNode!=k&&n.appendChild(d.createTextNode(a+" {"+b+"}")))}}function w(a,b){if(U){var c=b?"visible":"hidden";v&&q(a)?q(a).style.visibility=c:T("#"+a,"visibility:"+c)}}function V(a){return null!=/[\\\"<>\.;]/.exec(a)&&typeof encodeURIComponent!=k?encodeURIComponent(a):a}var k="undefined",u="object",B="application/x-shockwave-flash",
R="SWFObjectExprInst",p=window,d=document,t=navigator,W=!1,A=[function(){W?Y():G()}],s=[],F=[],y=[],z,E,K,Q,v=!1,D=!1,n,N,U=!0,e=function(){var a=typeof d.getElementById!=k&&typeof d.getElementsByTagName!=k&&typeof d.createElement!=k,b=t.userAgent.toLowerCase(),c=t.platform.toLowerCase(),f=c?/win/.test(c):/win/.test(b),c=c?/mac/.test(c):/mac/.test(b),b=/webkit/.test(b)?parseFloat(b.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):!1,g=!+"\v1",e=[0,0,0],h=null;if(typeof t.plugins!=k&&typeof t.plugins["Shockwave Flash"]==
u)!(h=t.plugins["Shockwave Flash"].description)||typeof t.mimeTypes!=k&&t.mimeTypes[B]&&!t.mimeTypes[B].enabledPlugin||(W=!0,g=!1,h=h.replace(/^.*\s+(\S+\s+\S+$)/,"$1"),e[0]=parseInt(h.replace(/^(.*)\..*$/,"$1"),10),e[1]=parseInt(h.replace(/^.*\.(.*)\s.*$/,"$1"),10),e[2]=/[a-zA-Z]/.test(h)?parseInt(h.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0);else if(typeof p.ActiveXObject!=k)try{var l=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");l&&(h=l.GetVariable("$version"))&&(g=!0,h=h.split(" ")[1].split(","),
e=[parseInt(h[0],10),parseInt(h[1],10),parseInt(h[2],10)])}catch(m){}return{w3:a,pv:e,wk:b,ie:g,win:f,mac:c}}();(function(){e.w3&&((typeof d.readyState!=k&&"complete"==d.readyState||typeof d.readyState==k&&(d.getElementsByTagName("body")[0]||d.body))&&x(),v||(typeof d.addEventListener!=k&&d.addEventListener("DOMContentLoaded",x,!1),e.ie&&e.win&&(d.attachEvent("onreadystatechange",function(){"complete"==d.readyState&&(d.detachEvent("onreadystatechange",arguments.callee),x())}),p==top&&function(){if(!v){try{d.documentElement.doScroll("left")}catch(a){setTimeout(arguments.callee,
0);return}x()}}()),e.wk&&function(){v||(/loaded|complete/.test(d.readyState)?x():setTimeout(arguments.callee,0))}(),P(x)))})();(function(){e.ie&&e.win&&window.attachEvent("onunload",function(){for(var a=y.length,b=0;b<a;b++)y[b][0].detachEvent(y[b][1],y[b][2]);a=F.length;for(b=0;b<a;b++)S(F[b]);for(var c in e)e[c]=null;e=null;for(var f in swfobject)swfobject[f]=null;swfobject=null})})();return{registerObject:function(a,b,c,f){if(e.w3&&a&&b){var d={};d.id=a;d.swfVersion=b;d.expressInstall=c;d.callbackFn=
f;s[s.length]=d;w(a,!1)}else f&&f({success:!1,id:a})},getObjectById:function(a){if(e.w3)return J(a)},embedSWF:function(a,b,c,d,g,r,h,l,m,p){var q={success:!1,id:b};e.w3&&!(e.wk&&312>e.wk)&&a&&b&&c&&d&&g?(w(b,!1),O(function(){c+="";d+="";var e={};if(m&&typeof m===u)for(var n in m)e[n]=m[n];e.data=a;e.width=c;e.height=d;n={};if(l&&typeof l===u)for(var s in l)n[s]=l[s];if(h&&typeof h===u)for(var t in h)n.flashvars=typeof n.flashvars!=k?n.flashvars+("&"+t+"="+h[t]):t+"="+h[t];if(C(g))s=M(e,n,b),e.id==
b&&w(b,!0),q.success=!0,q.ref=s;else{if(r&&H()){e.data=r;I(e,n,b,p);return}w(b,!0)}p&&p(q)})):p&&p(q)},switchOffAutoHideShow:function(){U=!1},ua:e,getFlashPlayerVersion:function(){return{major:e.pv[0],minor:e.pv[1],release:e.pv[2]}},hasFlashPlayerVersion:C,createSWF:function(a,b,c){if(e.w3)return M(a,b,c)},showExpressInstall:function(a,b,c,d){e.w3&&H()&&I(a,b,c,d)},removeSWF:function(a){e.w3&&S(a)},createCSS:function(a,b,c,d){e.w3&&T(a,b,c,d)},addDomLoadEvent:O,addLoadEvent:P,getQueryParamValue:function(a){var b=
d.location.search||d.location.hash;if(b){/\?/.test(b)&&(b=b.split("?")[1]);if(null==a)return V(b);for(var b=b.split("&"),c=0;c<b.length;c++)if(b[c].substring(0,b[c].indexOf("="))==a)return V(b[c].substring(b[c].indexOf("=")+1))}return""},expressInstallCallback:function(){if(D){var a=q(R);a&&z&&(a.parentNode.replaceChild(z,a),E&&(w(E,!0),e.ie&&e.win&&(z.style.display="block")),K&&K(Q));D=!1}}}}();
