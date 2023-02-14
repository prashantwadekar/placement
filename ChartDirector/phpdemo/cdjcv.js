//Copyright 2021 Advanced Software Engineering Ltd
ase_0="7.0.0";ase_1=navigator.userAgent.toLowerCase();ase_2=(ase_1.indexOf('gecko')!=-1&&ase_1.indexOf('safari')==-1);ase_3=(ase_1.indexOf('konqueror')!=-1);ase_4=(ase_1.indexOf('chrome')!=-1);ase_5=(ase_1.indexOf('safari')!=-1)&&!ase_4;ase_6=(ase_1.indexOf('opera')!=-1);ase_7=(ase_1.indexOf('msie')!=-1&&!ase_6&&(ase_1.indexOf('webtv')==-1));ase_8=ase_1.indexOf('trident/')!=-1;function ase_9(){return(new RegExp("msie ([0-9]{1,}[\.0-9]{0,})").exec(ase_1)!=null)?parseFloat(RegExp.$1):6.0;}
function ase_a(id){if((typeof id=="string")&&(id.length==0))return null;return document.getElementById(id);}
function ase_b(e){if(e&&e.preventDefault)e.preventDefault();}
function ase_c(s){return s.replace(/^\s+|\s+$/g,'');}
function ase_d(a,b,c){return(b<a)?a:((b>c)?c:b);}
function ase_e(a,b,c){return(a<c)?((a<=b)&&(b<=c)):((a>=b)&&(b>=c));}
function ase_f(a){return(a>0)?1:((a<0)?-1:0);}
function ase_g(a){return typeof a=="undefined";}
function ase_h(){return new Date().getTime();}
function ase_i(lf){var d=document;var de=d.documentElement;return((de&&de[lf])||d.body[lf]);}
function ase_j(e,li,lf,lj,lk){if(e&&(typeof(e[lj])!='undefined'))return e[lj];if(window.event)return window.event[li]+ase_i(lf);if(e)return e[li]+window[lk];else return null;}
function ase_k(ll){return ase_7?document.body[ll]+document.documentElement[ll]:0 }
function ase_l(){return(typeof window.pageXOffset=='number')?window.pageXOffset:ase_i("scrollLeft");}
function ase_m(){return(typeof window.pageYOffset=='number')?window.pageYOffset:ase_i("scrollTop");}
function ase_n(w){var d=document;var de=d.documentElement;var u="inner"+w;var v="client"+w;if(typeof(window[u])=='number')return de?Math.min(de[v],window[u]):window[u];else return de[v];}
function ase_o(){return ase_n("Width");}
function ase_p(){return ase_n("Height");}
function ase_q(e){return ase_j(e,"clientX","scrollLeft","pageX","scrollX")-ase_k("clientLeft");}
function ase_r(e){return ase_j(e,"clientY","scrollTop","pageY","scrollY")-ase_k("clientTop");}
function ase_s(e){if(ase_7&&window.event)return window.event.button;else return(e.which==3)?2:e.which;}
function ase_t(e){return(e.touches.length>1);}
function ase_u(lp,lq){return lp?lp[lq]+ase_u(lp.offsetParent,lq):0;}
function ase_v(lp,lq){if((!ase_6)&&lp&&(lp!=document.body)&&(lp!=document.documentElement))return lp[lq]+ase_v(lp.parentNode,lq);else return 0;}
function ase_w(lp){if(lp.getBoundingClientRect)return lp.getBoundingClientRect().left+ase_i("scrollLeft")-ase_k("clientLeft");else return ase_u(lp,"offsetLeft")-ase_v(lp,"scrollLeft")+(lp.offsetWidth-lp.clientWidth)/2;}
function ase_x(lp){if(lp.getBoundingClientRect)return lp.getBoundingClientRect().top+ase_i("scrollTop")-ase_k("clientTop");else return ase_u(lp,"offsetTop")-ase_v(lp,"scrollTop")+(lp.offsetHeight-lp.clientHeight)/2;}
function ase_y(lr,id){return function(e){lr.call(ase_a(id)||window.event.srcElement||window.event.target,e)};}
function ase_z(lp,ls,lr,lt){if(!(ls instanceof Array))ls=[ls];for(var i=0;i<ls.length;++i){if(lp.addEventListener)lp.addEventListener(ls[i],lr,lt);else lp.attachEvent("on"+ls[i],ase_y(lr,lp.id));}
}
function ase_01(lp,ls,lr,lt){if(lp.removeEventListener)lp.removeEventListener(ls,lr,lt);else lp.detachEvent("on"+ls,lr);}
function ase_11(lv,lw){return lv+((lv.indexOf('?')!=-1)?'&':'?')+lw;}
function ase_21(lx,ly,lz){var re=new RegExp(ly,'g');return lx.replace(re,lz);}
function ase_31(l11){var l21=document.scripts;if(((!l21)||(!l21.length))&&document.getElementsByTagName)l21=document.getElementsByTagName("script");if(l21){for(var i=0;i<l21.length;++i){var l31=l21[i].src;if(!l31)continue;var l41=l31.indexOf(l11);if(l41!=-1)return l31.substring(0,l41);}
}
return "";}
function ase_41(c){if((((c>>24)&0xff)==0xff)&&((c&0xffffff)==0))return null;var l51=(c&0x00ffffff).toString(16);if(l51.length<6)l51="000000".substring(l51.length)+l51;return "#"+l51;}
function ase_51(lp,c){c=ase_c(c);var l61=0;if((c.length==9)&&(c.charAt(0)=='#')){l61=parseInt(c.substring(1,3),16);c='#'+c.substring(3);if(isNaN(l61))l61=0;if(l61==255)c="";}
l61=100-l61*100.0/255;var s=lp.style;s.opacity=l61/100.0;s.filter="alpha(opacity="+l61+")";s.backgroundColor=c;}
function ase_61(l71,l81,l91){var la1=l71.length-1;var lb1=0;while(lb1<=la1){var lc1=Math.floor((lb1+la1)/2);var ld1=l91(l71[lc1],l81);if(ld1>0){la1=lc1-1;}else if(ld1<0){lb1=lc1+1;}else{return lc1;}
}
return~lb1;}
function ase_71(le1,lf1,lg1){if(!le1)return;if(!lg1)lg1=lf1;if(typeof le1.ll6=="undefined")le1.lm6=le1.ll6=1;if((lg1==le1.lm6)&&(lf1==le1.ll6))return;var lh1=le1.getElementsByTagName("area");for(var i=0;i<lh1.length;i++){var li1=lh1[i];if(!li1.coords)continue;if(!li1.l16){var lj1=li1.coords.split(",");for(var j=0;j<lj1.length;++j)lj1[j]=parseInt(lj1[j]);li1.l16=lj1;}
var lj1=li1.l16.slice(0);for(var j=0;j<lj1.length;++j)lj1[j]=Math.round(lj1[j]*((j%2==0)?lf1:lg1));li1.coords=lj1.join(",");}
le1.ll6=lf1;le1.lm6=lg1;}
function ase_81(lp){lp.ontouchstart=ase_91;lp.ontouchmove=ase_a1;lp.ontouchcancel=lp.ontouchend=ase_b1;}
function ase_c1(ll1,id){for(var i=0;i<ll1.length;++i){var l51=ll1[i];if(l51.identifier==id)return l51;}
return null;}
function ase_91(e){if(ase_t(e))return;ase_b(e);e=e.changedTouches[0];this.lx6=e.identifier;this.le6=ase_h();this.lz5=e.pageX;this.l06=e.pageY;this.l26=parseFloat(this.style.left);this.l36=parseFloat(this.style.top);}
function ase_a1(e){e=ase_c1(e.changedTouches,this.lx6);if(!e)return;var lm1=this.lz5-e.pageX;var ln1=this.l06-e.pageY;this.style.left=(this.l26-lm1)+"px";this.style.top=(this.l36-ln1)+"px";}
function ase_b1(e){if(!ase_c1(e.changedTouches,this.lx6))return;this.lx6=null;this.ld6=ase_h();if(this.le6&&(this.ld6-this.le6<300))this.style.visibility='hidden';}
ase_d1=function(lp,e){var e1=e.changedTouches[0];if(e.type=="touchstart"){var lp1=ase_h();var lq1=(lp1-lp.le6<_jcv.doubleTouchTimer)&&(lp.ld6>lp.le6);lp.le6=lp1;lp.lf6=e1.pageX;lp.lg6=e1.pageY;return lq1?"doubletap":null;}
if(e.type=="touchend"){var lp1=ase_h();lp.ld6=lp1;if((lp.ld6-lp.le6<=_jcv.tapTimer)&&(Math.abs(e1.pageX-lp.lf6)<_jcvp.lj)&&(Math.abs(e1.pageY-lp.lg6)<_jcvp.lj))return "tap";}
return null;}
function ase_e1(lr1,ls1,lt1){var lu1=lr1.indexOf(ls1);var lv1=lr1.indexOf(lt1);if((lu1<0)||(lv1<=lu1))return '';else return lr1.substring(lu1+ls1.length,lv1);}
function ase_f1(lr1,lw1){var l41=lr1.indexOf(lw1);return(l41>=0)?lr1.substring(0,l41):lr1;}
function ase_g1(lr1,lw1){var l41=lr1.indexOf(lw1);return(l41>=0)?lr1.substring(l41+1,lr1.length):"";}
function ase_h1(v){return ase_21(ase_21(v,'&','&amp;'),'"','&#34;');}
function ase_i1(){if(typeof XMLHttpRequest!='undefined')return new XMLHttpRequest();
/*@cc_on
@if(@_jscript_version>=5)
try{return new ActiveXObject("Msxml2.XMLHTTP");}catch(e){}
try{return new ActiveXObject("Microsoft.XMLHTTP");}catch(e){}
@end
@*/
}
function ase_j1(lv,lx1,ly1){var r=ase_i1();if(r){window.ase_k1=false;if(!window.ase_l1){window.ase_l1=function(){window.ase_k1=true;};ase_z(window,'beforeunload',window.ase_l1);}
r.onreadystatechange=function(){if(r.readyState==4){var status=-9999;try{status=r.status;}catch(e){};if(status==-9999)return;if((r.status==200)||(r.status==304))lx1(r.responseText);else if(ly1){if(r.status==0){if(!window.ase_k1)ly1(600,"Unable to connect to server");}
else ly1(r.status,r.responseText);}
window.setTimeout(function(){r.onreadystatechange=function(){};r.abort();},1);}
}
if((lv.length<1000)||(ase_6&&!r.setRequestHeader)){r.open('GET',lv,true);r.send(null);}
else {r.open('POST',ase_f1(lv,"?"),true);r.setRequestHeader("Content-Type","application/x-www-form-urlencoded");r.send(ase_g1(lv,"?"));}
}
return r;}
function _jcv(v){this.l21=v.id;v.lt2=v.useMap;this.l62=v.style.cursor;this.l82();this.lw7(this.l21);this.lo={};var l12=v.id+"_JsChartViewerState";this.lb2=ase_a(l12);if(!this.lb2){var p=v.parentNode||v.parentElement;var s=this.lb2=document.createElement("HIDDEN");s.id=s.name=l12;s.value=this.lr1();p.insertBefore(s,v);}
else {this.decodeState(this.lb2.value);this.lu8();}
this.l92();if(!ase_7)this.li1(this.ld2());if(this.ln)this.partialUpdate();}
_jcvp=_jcv.prototype;_jcv.lj2=function(l42){var l52=window.cdjcv_path;if(typeof l52=="undefined")l52=ase_31("cdjcv.js");else if((l52.length>0)&&("/=".indexOf(l52.charAt(l52.length-1))==-1))l52+='/';return l52+l42;}
_jcv.addEventListener=ase_z;_jcv.removeEventListener=ase_01;_jcv.Horizontal=0;_jcv.Vertical=1;_jcv.HorizontalVertical=2;_jcv.Default=0;_jcv.Scroll=2;_jcv.ZoomIn=3;_jcv.ZoomOut=4;_jcv.ReverseScroll=5;_jcv.BottomLeft=1;_jcv.Bottom=2;_jcv.BottomCenter=2;_jcv.BottomRight=3;_jcv.Left=4;_jcv.Center=5;_jcv.Right=6;_jcv.TopLeft=7;_jcv.Top=8;_jcv.TopCenter=8;_jcv.TopRight=9;_jcv.ll5=_jcv.Center;_jcv.lk5=100;_jcv.lm5=0;_jcv.Transparent=0xff000000;_jcv.msgContainer='<div style="font:bold 8pt Verdana;padding:3px 8px 3px 8px;border:1px solid #000000;background-color:#FFCCCC;color:#000000">%msg</div>';_jcv.okButton='<center>[<a href="javascript:%closeScript"> OK </a>]</center>';_jcv.xButton='[<a href="javascript:%closeScript"> X </a>]';_jcv.shortErrorMsg='Error %errCode accessing server'+_jcv.okButton;_jcv.serverErrorMsg=_jcv.xButton+'<div style="font:bold 15pt Arial;">Error %errCode accessing server</div><hr>%errMsg';_jcv.updatingMsg='<div style="padding:0px 8px 0px 6px;background-color:#FFFFCC;color:#000000;border:1px solid #000000"><table><tr><td><img src="'+_jcv.lj2('wait.gif')+'"></td><td style="font:bold 8pt Verdana;">Updating</td></tr></table></div>';_jcv.l02=new Array("l0","l1","l2","l3","l4","l5","l6","l7","l8","l9","la","lb","lc","ld","le","lf","lg","lh","li","lj","lk","ll","lm","ln","lo","lp","lq","lr","ls","lt","lu","lv","lw","lx","ly","lz");_jcv.doubleTouchTimer=300;_jcv.tapTimer=200;_jcv.moveConfirmTimer=300;_jcv.mouseHoldTimer=1000;_jcv.li7="_jcv_tdcliprect";_jcv.lj7="_jcv_tdrect";_jcv.l78=function(lp){var lp1=ase_h();var lq1=((lp1-lp.le6<_jcv.doubleTouchTimer)&&(lp1-lp.ld6<_jcv.doubleTouchTimer)&&(lp.ld6>lp.le6));lp.le6=lp1;return lq1;}
_jcv.la8=function(lp){if(lp.lt6&&(Math.abs(ase_h()-lp.lt6)<_jcv.mouseHoldTimer))return true;lp.lt6=0;return false;}
_jcv.l88=function(lp){lp.lt6=ase_h();}
_jcv.get=function(id){var imgObj=ase_a(id);if(!imgObj)return null;if(!imgObj._jcv)imgObj._jcv=new _jcv(imgObj);return imgObj._jcv;}
_jcvp.getId=function(){return this.l21;}
_jcvp.la2=function(){return ase_a(this.l21);}
_jcvp.l08=function(l72){var id=this.getId();return(function(e){_jcv.get(id)[l72](e);});}
_jcvp.l82=function(){this.la2().lf1=function(e,id){if(_jcv.la8(this._jcv))return;var l51;l51=this._jcv["onImg"+id](e);if(this["_jcvOn"+id+"Chain"])l51=this["_jcvOn"+id+"Chain"](e);return l51;};this.la2()._jcvOnMouseMoveChain=this.la2().onmousemove;this.la2()._jcvOnMouseUpChain=this.la2().onmouseup;this.la2()._jcvOnMouseDownChain=this.la2().onmousedown;this.la2()._jcvOnMouseOutChain=this.la2().onmouseout;var l82=this.l21;this.la2().onmousemove=function(e){return ase_a(l82).lf1(e,"MouseMove");}
this.la2().onmousedown=function(e){return ase_a(l82).lf1(e,"MouseDown");}
this.la2().onmouseup=function(e){return ase_a(l82).lf1(e,"MouseUp");}
this.la2().onmouseout=function(e){return ase_a(l82).lf1(e,"MouseOut");}
}
_jcvp.setDisableTouch=function(b){this.lu7=b;}
_jcvp.lr7=function(e,id){if(ase_t(e))return;var et=e.type.toLowerCase();this.l55(this,et+"chart",e);var la2=this.isMouseOnPlotArea();if(la2)this.l55(this,et+"plotarea",e);var lb2=ase_d1(this,e);if(lb2){this.l55(this,lb2+"chart",e);if(la2)this.l55(this,lb2+"plotarea",e);}
if(this.lu7)return;switch(this.la){case _jcv.ZoomIn:case _jcv.ZoomOut:if((lb2=="tap")&&la2)this.l58(e);break;case _jcv.Scroll:case _jcv.ReverseScroll:switch(et){case "touchstart":if(la2)this.lj6(e);case "touchmove":this.lh6(e);break;case "touchend":this.li6(e);break;}
break;}
}
_jcvp.lj6=function(e){if((this.ls6!=null)&&(e.touches.length!=1))return;ase_b(e);if(this.l32)return;var e1=e.changedTouches[0];this.ls6=e1.identifier;this.lp5=0;this.lq5=0;this.ly6=e1.pageX;this.lz6=e1.pageY;}
_jcvp.lh6=function(e){var e1=ase_c1(e.changedTouches,this.ls6);if(!e1)return;ase_b(e);this.lp5=this.lf7(this.lp5+e1.pageX-this.ly6);this.lq5=this.lg7(this.lq5+e1.pageY-this.lz6);this.ly6=e1.pageX;this.lz6=e1.pageY;var c=this.ln2(_jcv.li7);var s=c.style;if(!c.lh8){c.lh8=true;s.pointerEvents="none";s.overflow="hidden";s.backgroundColor="";s.visibility="visible";}
s.left=this.l33(this.l0)+"px";s.top=this.l43(this.l1)+"px";s.width=this.l23(this.l2)+"px";s.height=this.l13(this.l3)+"px";s.display="";var t=this.ln2(_jcv.lj7);s=t.style;if(!t.lh8){t.lh8=true;s.visibility="visible";s.backgroundColor="";s.borderStyle="solid";c.appendChild(t);}
s.borderWidth=(this.getSelectionBorderWidth())+"px";s.borderColor=this.getSelectionBorderColor();s.width=(this.l23(this.l2)-t.offsetWidth+t.clientWidth)+"px";s.height=(this.l13(this.l3)-t.offsetHeight+t.clientHeight)+"px";s.left=this.lp5+"px";s.top=this.lq5+"px";}
_jcvp.li6=function(e){var e1=ase_c1(e.changedTouches,this.ls6);if(e1||(e.touches.length==0)){var c=this.lc4(_jcv.li7);if(c)c.style.display="none";this.ls6=null;}
if(!e1)return;ase_b(e);if(this.l32)return;var ld2=this.lr6()?1:-1;this.lo1(this.lb,this.l6*this.l63(this.lp5*ld2)/this.l2,this.l6,this.l7*this.l53(this.lq5*ld2)/this.l3,this.l7);}
_jcvp.l58=function(e){var mX=this.getPlotAreaMouseX();var mY=this.getPlotAreaMouseY();switch(this.la){case _jcv.ZoomIn:this.zoomAt(mX,mY,this.ld);break;case _jcv.ZoomOut:this.zoomAt(mX,mY,this.le);break;default:return;}
ase_b(e);}
_jcvp.lw7=function(id){if(this.la2().addEventListener){var l82=this.l21;var lg2=function(e){_jcv.get(l82).lr7(e,id);};var lh2=["touchstart","touchmove","touchend","touchcancel"];for(var i=0;i<lh2.length;++i)ase_a(id).addEventListener(lh2[i],lg2,true);}
}
_jcvp.l73=function(x){return this.l63(x-ase_w(this.la2()));}
_jcvp.l83=function(y){return this.l53(y-ase_x(this.la2()));}
_jcvp.l63=function(w){this.lh5();var lp=this.la2();if(this.l01&&lp.clientWidth)return w*this.l01/lp.clientWidth;return w;}
_jcvp.l53=function(h){this.lh5();var lp=this.la2();if(this.l11&&lp.clientHeight)return h*this.l11/lp.clientHeight;return h;}
_jcvp.l33=function(x){return this.l23(x)+ase_w(this.la2());}
_jcvp.l43=function(y){return this.l13(y)+ase_x(this.la2());}
_jcvp.l23=function(w){this.lh5();var lp=this.la2();if(this.l01&&lp.clientWidth)return w*lp.clientWidth/this.l01;return w;}
_jcvp.l13=function(h){this.lh5();var lp=this.la2();if(this.l11&&lp.clientHeight)return h*lp.clientHeight/this.l11;return h;}
_jcvp.toCssW=_jcvp.l23;_jcvp.toCssH=_jcvp.l13;_jcvp.toChartW=_jcvp.l63;_jcvp.toChartH=_jcvp.l53;_jcvp.xShiftInsideChart=function(lp){var ll2=this.la2();var lm1=ase_w(ll2)-ase_w(lp);var lm2=ll2.offsetWidth-lp.offsetWidth;var ln2=Math.max(0,lm1)+Math.min(0,lm1+lm2);if(ln2!=0)lp.style.left=parseFloat(lp.style.left)+ln2+"px";}
_jcvp.lh5=function(){if(!this.l01){if(this.lv){this.l01=this.lv;this.l11=this.lw;}
else {var lp=this.la2();if(lp.naturalWidth){this.l01=lp.naturalWidth;this.l11=lp.naturalHeight;}
else {var lo2=new Image();lo2.src=lp.src;this.l01=lo2.width;this.l11=lo2.height;}
}
}
}
_jcvp.setCustomAttr=function(k,v){this.lo[k]=v;this.lv2();}
_jcvp.getCustomAttr=function(k){return this.lo[k];}
_jcvp.getValueAtViewPort=function(id,lq2,lr2){var ls2=parseFloat(this.getCustomAttr(id+"_min"));var lt2=parseFloat(this.getCustomAttr(id+"_max"));if(!lr2)return ls2+(lt2-ls2)*lq2;else return ls2*Math.pow(lt2/ls2,lq2);}
_jcvp.getViewPortAtValue=function(id,lu2,lr2){var ls2=parseFloat(this.getCustomAttr(id+"_min"));var lt2=parseFloat(this.getCustomAttr(id+"_max"));if(!lr2)return(lu2-ls2)/(lt2-ls2);else return Math.log(lu2/ls2)/Math.log(lt2/ls2);}
_jcvp.l4=0;_jcvp.l5=0;_jcvp.l6=1;_jcvp.l7=1;_jcvp.setViewPortLeft=function(x){this.l4=x;this.lv2();}
_jcvp.getViewPortLeft=function(){return this.l4;}
_jcvp.setViewPortTop=function(y){this.l5=y;this.lv2();}
_jcvp.getViewPortTop=function(){return this.l5;}
_jcvp.setViewPortWidth=function(w){this.l6=w;this.lv2();}
_jcvp.getViewPortWidth=function(){return this.l6;}
_jcvp.setViewPortHeight=function(h){this.l7=h;this.lv2();}
_jcvp.getViewPortHeight=function(){return this.l7;}
_jcvp.l0=-1;_jcvp.l1=-1;_jcvp.l2=-1;_jcvp.l3=-1;_jcvp.l05=false;_jcvp.lu8=function(){this.l15();this.lx8();}
_jcvp.l15=function(){this.l01=0;this.l11=0;if((!this.l05)&&(this.l2>0))return;var lv2=1E308;var lw2=lv2;var lx2=-lv2;var ly2=lx2;for(var i=0;i<this.getChartCount();++i){var c=this.getChart(i);var p=c.getPlotArea();lv2=Math.min(p.getLeftX()+c.getAbsOffsetX(),lv2);lw2=Math.min(p.getTopY()+c.getAbsOffsetY(),lw2);lx2=Math.max(p.getRightX()+c.getAbsOffsetX(),lx2);ly2=Math.max(p.getBottomY()+c.getAbsOffsetY(),ly2);}
var lz2=(lv2<=lx2);this.l0=lz2?lv2:-1;this.l1=lz2?lw2:-1;this.l2=lz2?lx2-lv2:-1;this.l3=lz2?ly2-lw2:-1;this.l05=lz2;}
_jcvp.lx8=function(){for(var i=0;i<this.getChartCount();++i){var c=this.getChart(i);for(var j=0;j<c.getLayerCount();++j){var l03=c.getLayerByZ(j);var l13=l03.lu3.zMap;if(l13&&!(l13.l19||l13.lw8)){var ll2=l13.l19=new Image();ll2.lv8=l13;ll2.onload=function(){var l23=this.lv8.lw8=document.createElement('canvas');l23.width=ll2.width;l23.height=ll2.height;l23.getContext('2d').drawImage(ll2,0,0);delete this.lv8.l19;delete this.lv8;};ll2.src="data:image/png;base64,"+l13.map;}
}
}
}
_jcvp.lh1=function(x,y){x=this.l73(x);y=this.l83(y);return(this.l0<=x)&&(x<=this.l0+this.l2)&&(this.l1<=y)&&(y<=this.l1+this.l3);}
_jcvp.msgBox=function(l33,l43){var m=this.lj1;if(!m&&l33){var d=document;m=d.createElement("DIV");m.style.position='absolute';m.style.visibility='hidden';d.body.appendChild(m);if(m)this.lj1=m;}
if(m){window.clearTimeout(m.lk1);var s=m.style;if(l33){if(l43)m.lk1=window.setTimeout(function(){s.visibility='hidden';},Math.abs(l43));if(l43<0)l33+=_jcv.okButton;if(l33.substring(0,4).toLowerCase()!="<div")l33=ase_21(_jcv.msgContainer,'%msg',l33);var l63="_jcv.get('"+this.l21+"').msgBox();";m.innerHTML=ase_21(l33,'%closeScript',l63);s.visibility='visible';s.left=this.l33(Math.max(0,this.l0+(this.l2-this.l63(m.offsetWidth))/2))+"px";s.top=this.l43(Math.max(0,this.l1+(this.l3-this.l53(m.offsetHeight))/2))+"px";}
else {s.visibility='hidden';}
}
}
_jcvp.l8=2;_jcvp.l9="#000000";_jcvp.setSelectionBorderWidth=function(w){this.l8=w;this.lv2();}
_jcvp.getSelectionBorderWidth=function(){return this.l8;}
_jcvp.setSelectionBorderColor=function(c){this.l9=c;this.lv2();}
_jcvp.getSelectionBorderColor=function(){return this.l9;}
_jcvp.lc4=function(id){return ase_a(this.getId()+"_"+id);}
_jcvp.ln2=function(id){id=this.getId()+"_"+id;var l51=ase_a(id);if(!l51){var d=document;l51=d.createElement("DIV");l51.id=id;var s=l51.style;s.position="absolute";s.visibility="hidden";s.backgroundColor="#000000";s.width="1px";s.height="1px";s.cursor=this.la2().style.cursor;d.body.appendChild(l51);if(l51.clientHeight!=1)l51.innerHTML="<img width='1px' height='1px' />";if(!this.lt4)this.lt4=[];this.lt4.push(id);}
return l51;}
_jcvp.l12=function(x,y,l73,l83){var l93=this.ln2("leftLine").style;var la3=this.ln2("rightLine").style;var lb3=this.ln2("topLine").style;var lc3=this.ln2("bottomLine").style;l93.left=lb3.left=lc3.left=x+"px";l93.top=la3.top=lb3.top=y+"px";lb3.width=lc3.width=l73+"px";lc3.top=(y+l83-this.l8+1)+"px";l93.height=la3.height=l83+"px";la3.left=(x+l73-this.l8+1)+"px";l93.width=la3.width=lb3.height=lc3.height=this.l8+"px";[l93,la3,lb3,lc3].forEach(function(ld3){ld3.backgroundColor=this.l9;ld3.pointerEvents="none";});}
_jcvp.l22=function(b){var le3=["leftLine","rightLine","topLine","bottomLine"];for(var i=0;i<le3.length;++i){var lp=this.lc4(le3[i]);if(lp)lp.style.visibility=b?"visible":"hidden";}
}
_jcvp.onToolTipMouseMove=function(e){if(_jcv.la8(this))return;var a=e.target;var t=a.title;if((!a.ly8)&&t&&(t.substr(0,6).toLowerCase()=="<*cdml")){var ab=["<*","{:","*>",":}","&","&amp;","<","&lt;",">","&gt;","{:","<",":}",">"];for(var i=0;i<ab.length;i+=2)t=t.replace(new RegExp(ab[i].replace(/[.*+?^${}()|[\]\\]/g,'\\$&'),'g'),ab[i+1]);var p=t.indexOf('>');if(p!=-1){a.title="";a.ly8=t.substr(p+1);if(p>10){var lg3=document.createElement("a");lg3.innerHTML="<div "+t.substr(5,p);lg3=lg3.firstChild;a.lz8=lg3&&lg3.className;a.l09=lg3&&lg3.style.cssText;}
}
}
t=a.ly8;if(t){var lh3=a.getAttribute("dynamic");if(lh3){var c=this.getChart();if(!c)return;for(var i=0;i<c.getLayerCount();++i){var l03=c.getLayerByZ(i);if(l03.lu3.zMapId==lh3){var px=this.getChartMouseX();var py=this.getChartMouseY();var z=l03.getZAtPixel(px,py);if(isNaN(z)){this.hideObj("_tooltip_");return;}
var x=c.getXValue(px);var y=c.getYValue(py,l03.lx4.getAxis(l03.lu3.yAxis));t=t.replace(new RegExp("[{]([^|}]*)\\|?([^}]*)?[}]",'g'),function(ll3,lm3,ln3){var l51=Function("return (function(x,y,z) { return "+lm3+" })")()(x,y,z);return c.l74(ln3,l51);});break;}
}
}
this.showToolTip(t,a.l09,a.lz8);}
if(a!=this.la6);{this.la6=a;this.l45(this,"mouseoverhotspot",e);}
this.l45(this,"mousemovehotspot",e);}
_jcvp.onToolTipMouseOut=function(e){if(_jcv.la8(this))return;this.hideObj("_tooltip_");this.la6=null;this.l45(this,"mouseouthotspot",e);}
_jcvp.showToolTip=function(lo3,lp3,lq3){if((!lp3)&&(!lq3))lp3="padding:3px 5px;color:#000000;font:11px sans-serif;background:#F0F0F0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:1px solid #808080;";if(lq3)lp3=(lp3?lp3+";":"")+"class:"+lq3;var lr3=0;var ls3=24;var lt3=this.getChartMouseX()+this.l63(lr3);var lu3=this.getChartMouseY()+this.l53(ls3);var lv3=_jcv.TopLeft;if(isNaN(lt3)||isNaN(lu3))return;var t=this.showTextBox("_tooltip_",null,null,lv3,lo3,lp3);var lw3=t.offsetWidth;var lx3=t.offsetHeight;var ly3=this.l33(lt3);var lz3=this.l43(lu3);var l04=ase_l();var l14=l04+ase_o()-2;var l24=ase_m();var l34=l24+ase_p()-2;if(ly3>l14-lw3)t.style.left=Math.max(l04,l14-lw3)+"px";else t.style.left=ly3+"px";if(lz3>l34-lx3)t.style.top=Math.max(l24,lz3-ls3-lx3-4)+"px";else t.style.top=lz3+"px";t.style.visibility="visible";return t;}
_jcvp.initToolTipHandler=function(){this.setAutoResizeImageMap();var le1=_jcv.l42(this.la2());if((!le1)||le1.lb7)return;le1.lb7=1;var l44=this.l08("onToolTipMouseMove");var l54=this.l08("onToolTipMouseOut");ase_z(le1,"mousemove",l44,false);ase_z(le1,"mouseout",l54,false);}
_jcvp.la=_jcv.Default;_jcvp.lb=_jcv.Horizontal;_jcvp.lc=_jcv.Horizontal;_jcvp.ld=2;_jcvp.le=0.5;_jcvp.lf=0.01;_jcvp.lg=1;_jcvp.lh=0.01;_jcvp.li=1;_jcvp.getMouseUsage=function(){return this.la;}
_jcvp.setMouseUsage=function(l64){this.la=l64;this.lv2();}
_jcvp.getScrollDirection=function(){return this.lb;}
_jcvp.setScrollDirection=function(l74){this.lb=l74;this.lv2();}
_jcvp.getZoomDirection=function(){return this.lc;}
_jcvp.setZoomDirection=function(l74){this.lc=l74;this.lv2();}
_jcvp.getZoomInRatio=function(){return this.ld;}
_jcvp.setZoomInRatio=function(lq2){if(lq2>0)this.ld=lq2;this.lv2();}
_jcvp.getZoomOutRatio=function(){return this.le;}
_jcvp.setZoomOutRatio=function(lq2){if(lq2>0)this.le=lq2;this.lv2();}
_jcvp.getZoomInWidthLimit=function(){return this.lf;}
_jcvp.setZoomInWidthLimit=function(lq2){this.lf=lq2;this.lv2();}
_jcvp.getZoomOutWidthLimit=function(){return this.lg;}
_jcvp.setZoomOutWidthLimit=function(lq2){this.lg=lq2;this.lv2();}
_jcvp.getZoomInHeightLimit=function(){return this.lh;}
_jcvp.setZoomInHeightLimit=function(lq2){this.lh=lq2;this.lv2();}
_jcvp.getZoomOutHeightLimit=function(){return this.li;}
_jcvp.setZoomOutHeightLimit=function(lq2){this.li=lq2;this.lv2();}
_jcvp.ls1=function(){return((this.lc!=_jcv.Vertical)&&(this.l6>this.lf))||((this.lc!=_jcv.Horizontal)&&(this.l7>this.lh));}
_jcvp.lt1=function(){return((this.lc!=_jcv.Vertical)&&(this.l6<this.lg))||((this.lc!=_jcv.Horizontal)&&(this.l7<this.li));}
_jcvp.l93=-1;_jcvp.la3=-1;_jcvp.lj=5;_jcvp.getMinimumDrag=function(){return this.lj;}
_jcvp.setMinimumDrag=function(l84){this.lj=l84;this.lv2();}
_jcvp.ll1=function(e,d){return this.li8(ase_q(e)-this.l93,ase_r(e)-this.la3,d,this.lj);}
_jcvp.li8=function(l94,la4,d,lb4){l94=Math.abs(l94);la4=Math.abs(la4);switch(d){case _jcv.Horizontal:return l94>=lb4;case _jcv.Vertical:return la4>=lb4;default:return(l94>=lb4)||(la4>=lb4);}
}
_jcvp.onImgMouseDown=function(e){if(this.ld4){window.clearTimeout(this.lk4);this.ld4=false;}
this.lx3("chartmousedown",e);this.lx3("mousedownchart",e);if(this.l32)return;if(this.lh1(ase_q(e),ase_r(e))&&(ase_s(e)==1)){if((this.la!=_jcv.Default)&&((!ase_7)||(ase_9()<9)))ase_b(e);this.lu2(true);this.l31(e);}
}
_jcvp.onImgMouseMove=function(e){if(this.ld4){window.clearTimeout(this.lk4);this.ld4=false;}
this.l71(e);var lc4=this.lt3;this.lt3=this.lh1(ase_q(e),ase_r(e));if(this.lt3)this.l51(e);else if(lc4)this.lc1(e);if(this.l32)return;this.lq3=this.li2||this.lt3;if(this.lq3&&this.li2){if(this.l25||(ase_q(e)!=this.l93)||(ase_r(e)!=this.la3)){this.l25=true;if((this.la!=_jcv.Default)&&this.la2().useMap)this.la2().useMap=null;this.l41(e);}
}
this.li1(this.lg1(e));return this.la==_jcv.Default;}
_jcvp.onImgMouseUp=function(e){this.lx3("chartmouseup",e);this.lx3("mouseupchart",e);if(this.l32)return;if(this.li2&&(ase_s(e)==1)){this.lu2(false);this.l61(e);}
if(!this.l32)this.li1(this.lg1(e));}
_jcvp.onImgMouseOut=function(e){if(!this.ld4){var id=this.l21;var x=this.l73(ase_q(e));var y=this.l83(ase_r(e));this.lk4=window.setTimeout(function(){_jcv.get(id).l91(e,x,y)},1);this.ld4=true;}
}
_jcvp.l91=function(e,x,y){if(this.lt3){this.lt3=false;this.lc1(e);}
this.l81(e);}
_jcvp.lu2=function(b){var imgObj=this.la2();if(b){if(((this.la==_jcv.ZoomIn)||(this.la==_jcv.ZoomOut))&&imgObj.useMap)imgObj.useMap=null;if(imgObj.setCapture&&!ase_2)imgObj.setCapture();else {if(!window._jcvOnMouseUpChain)window._jcvOnMouseUpChain=window.onmouseup;if(!window._jcvOnMouseMoveChain)window._jcvOnMouseMoveChain=window.onmousemove;window.onmouseup=imgObj.onmouseup;window.onmousemove=imgObj.onmousemove;}
}
else {if(imgObj.useMap!=imgObj.lt2)imgObj.useMap=imgObj.lt2;if(imgObj.setCapture&&!ase_2)imgObj.releaseCapture();else {window.onmouseup=window._jcvOnMouseUpChain;window.onmousemove=window._jcvOnMouseMoveChain;window._jcvOnMouseUpChain=null;window._jcvOnMouseMoveChain=null;}
}
this.li2=b;this.l25=false;}
_jcvp.setZoomInCursor=function(ld4){this.lk=ld4;this.lv2();}
_jcvp.getZoomInCursor=function(){return this.lk;}
_jcvp.setZoomOutCursor=function(ld4){this.ll=ld4;this.lv2();}
_jcvp.getZoomOutCursor=function(){return this.ll;}
_jcvp.setNoZoomCursor=function(ld4){this.lq=ld4;this.lv2();}
_jcvp.getNoZoomCursor=function(){return this.lq;}
_jcvp.setScrollCursor=function(ld4){this.lm=ld4;this.lv2();}
_jcvp.getScrollCursor=function(){return this.lm;}
_jcvp.lu4=function(c,x,y){return "url('"+_jcv.lj2(c)+"'), auto";}
_jcvp.ld2=function(){switch(this.la){case _jcv.ZoomIn:if(this.ls1()){if(this.lk)return this.lk;else if(ase_4||ase_5)return "-webkit-zoom-in";else if(ase_2&&!ase_8)return "-moz-zoom-in";else return this.lu4('zoomin.cur');}
else return this.lq?this.lq:"";case _jcv.ZoomOut:if(this.lt1()){if(this.ll)return this.ll;else if(ase_4||ase_5)return "-webkit-zoom-out";else if(ase_2&&!ase_8)return "-moz-zoom-out";else return this.lu4('zoomout.cur');}
else return this.lq?this.lq:"";default:return "";}
}
_jcvp.lg1=function(e){if(this.l32)return "wait";if(this.lh2){if(this.lm)return this.lm;if(!e&&!window.event)return "";switch(this.lb){case _jcv.Horizontal:return(ase_q(e)>=this.l93)?"e-resize":"w-resize";case _jcv.Vertical:return(ase_r(e)>=this.la3)?"s-resize":"n-resize";default:return "move";}
}
if(this.lq3)return this.ld2();else return "";}
_jcvp.li1=function(le4){if(le4!=this.l62){this.l62=le4;this.la2().style.cursor=new String(le4);if(this.lt4){for(var i=0;i<this.lt4.length;++i){var lp=ase_a(this.lt4[i]);if(lp)lp.style.cursor=new String(le4);}
}
}
}
_jcvp.lx3=function(lf4,e){this.l07(ase_q(e),ase_r(e));this.applyHandlers(lf4,e);}
_jcvp.l07=function(x,y){this.l04=this.l73(x);this.l14=this.l83(y);if(this.lu6()){this.l24=Math.max(this.l0,Math.min(this.l04,this.l0+this.l2));this.l34=Math.max(this.l1,Math.min(this.l14,this.l1+this.l3));}
}
_jcvp.getChartMouseX=function(){return this.l04;}
_jcvp.getChartMouseY=function(){return this.l14;}
_jcvp.getPlotAreaMouseX=function(){var l51=this.l24;return ase_g(l51)?this.l0+this.l2:l51;}
_jcvp.getPlotAreaMouseY=function(){var l51=this.l34;return ase_g(l51)?this.l1+this.l3:l51;}
_jcvp.lm4=16;_jcvp.ln4=16;_jcvp.lo4=16;_jcvp.ll4=16;_jcvp.setPlotAreaMouseMargin=function(lg4,lh4,li4,lj4){if(arguments.length==1)lh4=li4=lj4=lg4;this.lm4=lg4;this.ln4=lh4;this.lo4=li4;this.ll4=lj4;}
_jcvp.setPlotAreaMouseMargin2=_jcvp.setPlotAreaMouseMargin;_jcvp.lu6=function(){var lw2=this.l1-this.lo4;var ly2=this.l1+this.l3+this.ll4;var lv2=this.l0-this.lm4;var lx2=this.l0+this.l2+this.ln4;var x=this.getChartMouseX();var y=this.getChartMouseY();var lk4=(y>=lw2)&&(y<=ly2);var ll4=(x>=lv2)&&(x<=lx2);return lk4&&ll4;}
_jcvp.l71=function(e){this.lx3("mousemovechart",e);if(this.lu6())this.la1(e);else this.lb1(e);}
_jcvp.l81=function(e){this.lb1(e);this.applyHandlers("mouseoutchart",e);}
_jcvp.la1=function(e){this.lr3=true;this.applyHandlers("mousemoveplotarea",e);}
_jcvp.lb1=function(e){if(this.lr3){this.lr3=false;this.applyHandlers("mouseoutplotarea",e);}
}
_jcvp.isMouseOnPlotArea=function(){return this.lu6();}
_jcvp.li4=function(id,lm4){var l51=this.lc4(id);var ln4=id=="_tooltip_";if(!l51){l51=this.ln2(id);if(!lm4)this.lb4(l51,ln4);}
if(!ln4)this.lb8(id);return l51;}
_jcvp.lb8=function(id){if(!this.ld3)this.ld3=[];for(var i=0;i<this.ld3.length;++i){if(this.ld3[i]==id)return;}
this.ld3.push(id);}
_jcvp.lb4=function(lp,lo4){lp.onmousedown=this.la2().onmousedown;lp.onmousemove=this.la2().onmousemove;lp.onmouseout=this.la2().onmouseout;lp.onmouseover=this.la2().onmousemove;if(!lo4){lp.style.pointerEvents="none";this.lw7(lp.id);}
}
_jcvp.drawHLine=function(id,y,x1,x2,lr4){if(x1>x2){var ls4=x1;x1=x2;x2=ls4;}
return this.ll3(id,y,x1,x2,lr4);}
_jcvp.ll3=function(id,y,x1,x2,lr4){var lt4=x2-x1+1;var lp=this.li4(id);var s=lp.style;if((lt4<=0)||!lr4)s.visibility="hidden";else {s.width=this.l23(lt4)+"px";s.height="0px";if(lr4!="[unchanged]")s.borderTop=lr4;s.backgroundColor="";s.left=this.l33(x1)+"px";s.top=(this.l43(y)-Math.floor(lp.clientTop/2))+"px";s.visibility="visible";}
return lp;}
_jcvp.drawVLine=function(id,x,y1,y2,lr4){if(y1>y2){var ls4=y1;y1=y2;y2=ls4;}
return this.lm3(id,x,y1,y2,lr4);}
_jcvp.lm3=function(id,x,y1,y2,lr4){var lt4=y2-y1+1;var lp=this.li4(id);var s=lp.style;if((lt4<=0)||!lr4)s.visibility="hidden";else {s.width="0px";s.height=this.l13(lt4)+"px";if(lr4!="[unchanged]")s.borderLeft=lr4;s.backgroundColor="";s.left=(this.l33(x)-Math.floor(lp.clientLeft/2))+"px";s.top=this.l43(y1)+"px";s.visibility="visible";}
return lp;}
_jcvp.showCrossHair=function(x,y,lr4,lg4,lh4,li4,lj4,lw4){if(!lr4)lr4="1px dotted black";if(!lg4)lg4=0;if(!lh4)lh4=0;if(!li4)li4=0;if(!lj4)lj4=0;if(ase_g(lw4))lw4=5;var lx4=this.l0+1-lg4;var ly4=lx4+this.l2-1+lh4;var lz4=this.l1+1-li4;var l05=lz4+this.l3-1+lj4;x=Math.max(this.l0,Math.min(this.l0+this.l2,x));y=Math.max(this.l1,Math.min(this.l1+this.l3,y));if(lw4){this.ll3("hLeftLine",y,lx4,Math.min(ly4,x-lw4),lr4);this.ll3("hRightLine",y,Math.max(lx4,x+lw4),ly4,lr4);this.lm3("vTopLine",x,lz4,Math.min(l05,y-lw4),lr4);this.lm3("vBottomLine",x,Math.max(lz4,y+lw4),l05,lr4);}
else {this.ll3("hLeftLine",y,lx4,ly4,lr4);this.ll3("hRightLine",0,0,0,null);this.lm3("vTopLine",x,lz4,l05,lr4);this.lm3("vBottomLine",0,0,0,null);}
}
_jcvp.hideCrossHair=function(){var le3=["hLeftLine","hRightLine","vTopLine","vBottomLine"];for(var i=0;i<le3.length;++i)this.hideObj(le3[i]);}
_jcvp.lp4=function(x,l73,l15,l25){if(l15)return x-Math.floor(l73/2);else if(l25)return x-l73;else return x;}
_jcv.lf4=function(l35){return(l35==_jcv.Top)||(l35==_jcv.Center)||(l35==_jcv.Bottom);}
_jcv.lg4=function(l35){return(l35==_jcv.TopRight)||(l35==_jcv.Right)||(l35==_jcv.BottomRight);}
_jcv.lh4=function(l35){return(l35==_jcv.Left)||(l35==_jcv.Center)||(l35==_jcv.Right);}
_jcv.le4=function(l35){return(l35==_jcv.Bottom)||(l35==_jcv.BottomLeft)||(l35==_jcv.BottomRight);}
_jcv.setStyle=function(s){var l45=s.split(';');var l55=[];for(var i=0;i<l45.length;++i){var av=ase_c(l45[i]);var l41=av.indexOf(":");if(l41==-1)continue;var l75=ase_c(av.substring(0,l41)).split('-');for(var j=1;j<l75.length;++j)l75[j]=l75[j].charAt(0).toUpperCase()+l75[j].substring(1);var a=l75.join('');if(a){var v=ase_c(av.substring(l41+1));if(a.toLowerCase()=="class")this.className=v;else l55.push(a,v);}
}
for(var j=0;j<l55.length;j+=2)this.style[l55[j]]=l55[j+1];}
_jcvp.ln7=function(id,x,y,l35,lr1,l85,l95){this.removeAutoHide(id);var la5=this.lc4(id);var lp=this.li4(id,l95);lp.setStyle=_jcv.setStyle;var s=lp.style;if(!la5)lp.setStyle("background-color:;width:;height:;left:0px;top:0px;");else if(id=="_tooltip_"){s=lp.style="position:absolute;visibility:hidden;";s.cursor=this.la2().style.cursor;}
if((lr1.length>=5)&&(lr1.substring(0,4).toLowerCase()=="<img")&&(lr1.indexOf(">")==lr1.length-1))s.lineHeight="0px";if(l85)lp.setStyle(l85);if(lr1!="[unchanged]")lp.innerHTML=lr1;if(null==x)s.visibility="hidden";else {s.visibility="visible";s.left=this.lp4(this.l33(x),lp.offsetWidth,_jcv.lf4(l35),_jcv.lg4(l35))+"px";s.top=this.lp4(this.l43(y),lp.offsetHeight,_jcv.lh4(l35),_jcv.le4(l35))+"px";}
return lp;}
_jcvp.showTextBox=function(id,x,y,l35,lr1,l85){return this.ln7(id,x,y,l35,lr1,l85,false);}
_jcvp.showClickableTextBox=function(id,x,y,l35,lr1,l85){return this.ln7(id,x,y,l35,lr1,l85,true);}
_jcvp.hideObj=function(id,lb5){this.l77(id);if((!lb5)&&(id.toLowerCase()=="all")){var lc5=this.ld3;if(lc5){for(var i=0;i<lc5.length;++i)this.hideObj(lc5[i],1);}
}
else if(id.toLowerCase()=="crosshair"){this.hideCrossHair();}
else {var lp=this.lc4(id);if(lp)lp.style.visibility="hidden";}
}
_jcvp.isVisible=function(id){var lp=this.lc4(id);return(lp&&(lp.style.visibility=="visible"));}
_jcvp.l77=function(id){if(this.l35){var ld5=this.l35[id];if(ld5){window.clearTimeout(ld5);delete this.l35[id];}
}
}
_jcvp.le5=function(id,l43,le5){this.l77(id);if((!l43)||(l43<0)){if(!l43)this.hideObj(id);return;}
if(!this.l35)this.l35={};var lf5=this;this.l35[id]=window.setTimeout(function(){lf5.lv7(id,l43)},le5||l43);}
_jcvp.lv7=function(id,l43){var lp=this.lc4(id);if(lp&&lp.le6){var lp1=ase_h();var lg5=lp1-((lp.le6>(lp.ld6||0))?lp1:lp.ld6);if(lg5<l43)return this.le5(id,l43,l43-lg5);}
this.hideObj(id);}
_jcvp.l65=function(){if(!this.lv6){this.ll7();var id=this.l21;this.lv6=function(){_jcv.get(id).lg5();};this.lw6=window.setInterval(this.lv6,_jcv.moveConfirmTimer);ase_z(window,"resize",this.lv6,false);ase_z(this.la2(),"move",this.lv6,false);ase_z(this.la2(),"resize",this.lv6,false);}
}
_jcvp.lf5=function(){if(this.lv6){window.clearInterval(this.lw6);ase_01(window,"resize",this.lv6,false);ase_01(this.la2(),"move",this.lv6,false);ase_01(this.la2(),"resize",this.lv6,false);this.lv6=null;}
}
_jcvp.lg5=function(){var lp=this.la2();if((this.lv5!=ase_w(lp))||(this.lw5!=ase_x(lp))||(this.lu5!=lp.clientWidth)||(this.lt5!=lp.clientHeight)){this.ll7();this.applyHandlers("chartmove");}
}
_jcvp.ll7=function(){var lp=this.la2();this.lv5=ase_w(lp);this.lw5=ase_x(lp);this.lu5=lp.clientWidth;this.lt5=lp.clientHeight;}
_jcvp.lh7=function(lf1,lg1){ase_71(_jcv.l42(this.la2()),lf1?lf1:this.l23(1),lg1?lg1:this.l13(1));}
_jcvp.lq7=function(){this.lh7();this.hideObj("_tooltip_");}
_jcvp.setAutoResizeImageMap=function(b){if(ase_g(b))b=true;if(b){if(this.l85)return;this.l85=this.attachHandler(["ChartMove","Now"],this.lq7);}
else {if(this.l85)this.detachHandler(this.l85);this.l85=null;}
}
_jcvp.setAutoHide=function(id,lh5){if(lh5 instanceof Array){for(var i=0;i<lh5.length;++i)this.setAutoHide(id,lh5[i]);return;}
if(id.toLowerCase()=="all")id="all";lh5=lh5.toLowerCase();if(!this.ly3)this.ly3={};if(!this.ly3[lh5])this.ly3[lh5]={};this.ly3[lh5][id]=1;}
_jcvp.removeAutoHide=function(id,lh5){if(lh5 instanceof Array){for(var i=0;i<lh5.length;++i)this.removeAutoHide(id,lh5[i]);return;}
if(this.ly3){var li5=this.ly3[lh5];if(li5)delete li5[id];}
this.l77(id);}
_jcvp.lw3=function(lh5){if(this.ly3){var li5=this.ly3[lh5];if(li5){if(li5["all"])this.hideObj("all");else {for(var id in li5)this.hideObj(id);}
this.ly3[lh5]={};}
}
}
_jcv.lr4=function(a,id){if((!a)||(!a.length))return null;if(!id)id=0;var lj5=typeof id=="number";var l51=lj5?a[id]:_jcv.ls4(a,id);if(!l51)l51=lj5?_jcv.ls4(a,id):a[id];return l51;}
_jcv.ls4=function(a,id){for(var i=0;i<a.length;++i){var lp=a[i];if(lp&&(lp.id==id))return lp;}
return null;}
_jcv.lj3=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];_jcv.lk3=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];_jcv.li3=["am","pm"];_jcv.l94=function(s,c,n){return(s.indexOf(c)!=-1)?s.replace(new RegExp(c+c,'g'),(n<10)?"0"+n:n).replace(new RegExp(c,'g'),n):s;}
_jcv.ly4=function(s,c,r){return(s.indexOf(c)!=-1)?s.replace(new RegExp(c,'g'),r):s;}
_jcvp.htmlRect=function(w,h,ll5,lm5){lm5=lm5?"border:"+lm5+";":"";ll5=ll5?"background-color:"+ll5+";":"";var lv=(ase_7&&(ase_9()<8))?_jcv.lj2('spacer.gif'):'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==';return "<img width='"+w+"px' height='"+h+"px' src='"+lv+"' style='max-width:none;max-height:none;pointer-events:none;"+lm5+ll5+"' />";}
_jcvp.getChart=function(id){var ln5=window[this.l21+"_chartModel"];if(!ln5)return null;var lo5=(ln5.charts||id);if(lo5)ln5=_jcv.lr4(ln5.charts,id);if(!ln5)return null;if(!ln5.obj)ln5.obj=lo5?new _jcvxyc(ln5.x,ln5.y,ln5.c,this):new _jcvxyc(0,0,ln5,this);return ln5.obj;}
_jcvp.getChartByZ=_jcvp.getChart;_jcvp.getChartCount=function(id){var l51=0;while(this.getChart(l51))++l51;return l51;}
_jcv.lz3=function(a,b){if(a==null)return(b==null)?0:-1;else return(b==null)?1:(a-b);}
function _jcvxyc(lp5,lq5,ln5,lr5){this.offsetX=lp5;this.offsetY=lq5;this.data=ln5;this.lz4=lr5;}
_jcvxycp=_jcvxyc.prototype;_jcvxycp.getAbsOffsetX=function(){return this.offsetX;}
_jcvxycp.getAbsOffsetY=function(){return this.offsetY;}
_jcvxycp.getPlotArea=function(){if(!this.pa)this.pa=new _jcvpa(this.data.plotarea);return this.pa;}
_jcvxycp.getLayer=function(i){if(!this.lv3){this.lv3={};var l03=null;for(var j=0;j<this.data.layers.length;++j){var lt5=this.data.layers[j];this.lv3[lt5.id]=j;}
}
var lu5=this.lv3[i];return this.lj4((lu5==null)?null:this.data.layers[lu5]);}
_jcvxycp.getLayerByZ=function(i){return this.lj4(_jcv.lr4(this.data.layers,i));}
_jcvxycp.lj4=function(ln5){if(!ln5)return null;if(!ln5.obj)ln5.obj=new _jcvl(this,ln5);return ln5.obj;}
_jcvxycp.getLayerCount=function(){var lv5=this.data.layers;return lv5?lv5.length:0;}
_jcvxycp.getNearestXValue=function(lt3){var l51=null;var lw5=null;var lx5=this.xAxis();var l03=null;for(var i=0;l03=this.getLayer(i);++i){var ly5=l03.getNearestXValue(lt3);if(ly5==null)continue;var lz5=Math.abs(lx5.ln3(ly5)-lt3);if((lw5==null)||(lw5>lz5)){l51=ly5;lw5=lz5;}
}
return l51;}
_jcvxycp.getAxis=function(i){var ln5=_jcv.lr4(this.data.axes,i);if(!ln5)return null;if(!ln5.obj)ln5.obj=new _jcva(this,ln5);return ln5.obj;}
_jcvxycp.xAxis=function(){return this.getAxis(0);}
_jcvxycp.xAxis2=function(){return this.getAxis(1);}
_jcvxycp.yAxis=function(){return this.getAxis(2);}
_jcvxycp.yAxis2=function(){return this.getAxis(3);}
_jcvxycp.getXCoor=function(v){return this.xAxis().lo3(v);}
_jcvxycp.getYCoor=function(v,lx5){if(!lx5)lx5=this.yAxis();return lx5.lo3(v);}
_jcvxycp.getXValue=function(lt3){return this.xAxis().lp3(lt3);}
_jcvxycp.getYValue=function(lu3,lx5){if(!lx5)lx5=this.yAxis();return lx5.lp3(lu3);}
_jcvxycp.setNumberFormat=function(l06,l16,l26){l06=l06||"~";l16=l16||"~";l26=l26||"~";this.data.lh3=l06.substring(0,1)+l16.substring(0,1)+l26.substring(0,1);}
_jcvxycp.setMonthNames=function(l36){this.data.lf3=l36;}
_jcvxycp.setWeekDayNames=function(l36){this.data.lg3=l36;}
_jcvxycp.setAMPM=function(am,pm){this.data.le3=[am,pm];}
_jcvxycp.l84=function(l66,d){if(d==null)return;if(!d.getMonth)d=_jcv.NTime(d);var l76=this.data.lf3||_jcv.lj3;var l86=this.data.lg3||_jcv.lk3;var l96=this.data.le3||_jcv.li3;var f=l66.replace(/mmm/g,'#p').replace(/M/g,'#M').replace(/w/g,'#w').replace(/a/g,'#a');for(var i=0;(i<4)&&(f.indexOf('y')!=-1);++i)f=f.replace(new RegExp("yyyy".substring(0,4-i),'g'),(i!=3)?new String(d.getFullYear()).substring(i,4):d.getFullYear());f=_jcv.l94(f,'m',d.getMonth()+1);f=_jcv.l94(f,'d',d.getDate());f=_jcv.l94(f,'h',(f.indexOf('a')!=-1)?(d.getHours()+11)%12+1:d.getHours());f=_jcv.l94(f,'n',d.getMinutes());f=_jcv.l94(f,'s',d.getSeconds());for(var j=0;(j<3)&&(f.indexOf('f')!=-1);++j)f=f.replace(new RegExp("fff".substring(0,3-j),'g'),new String(d.getMilliseconds()+1000).substring(1,4-j));for(var k=0;(k<3)&&(f.indexOf('#M')!=-1);++k)f=f.replace(new RegExp("#M#M#M".substring(0,6-2*k),'g'),l76[d.getMonth()].toUpperCase().substring(0,3-k));f=_jcv.ly4(f,"#p",l76[d.getMonth()]);f=_jcv.ly4(f,"#w",l86[d.getDay()]);f=_jcv.ly4(f,"#a",l96[(d.getHours()>=12)?1:0]);return f;}
_jcvxycp.lq4=function(c,lb6){if(!c||(c=='?'))c=lb6;return(c=='~')?"":c;}
_jcvxycp.la4=function(l66,d){if(d==null)return null;var lc6=this.data.lh3||"~.-";var re=(/^([eEgGpP]?)(\d*)(.?)(.?)(.?)(.?)/).exec(l66);var ld6=re[1];var le6=re[2]?parseInt(re[2]):-1;var l06=this.lq4(re[3],lc6.charAt(0));var l16=this.lq4(re[4],lc6.charAt(1));var l26=this.lq4(re[5],lc6.charAt(2));var lf6=this.lq4(re[6],"");var lg6=false;var lh6=0;var li6=d<0;if(li6)d=-d;if(ld6!=""){lh6=(d>0)?Math.floor(Math.log(d)/Math.LN10):0;if((ld6=='g')||(ld6=='G')){lg6=true;var lj6=(le6<0)?4:le6;if((lh6>=lj6)||(lh6<-3)){ld6=(ld6=='g')?'e':'E';--le6;}
else {if(lh6>=0)le6=lj6-1-lh6;else le6=Math.max(4,le6);}
}
if((ld6=='e')||(ld6=='E')){d/=Math.pow(10,lh6);if(le6<0)le6=3;}
if((ld6=='p')||(ld6=='P')){lg6=true;if(le6<0)le6=3;le6=Math.max(0,Math.min(le6,le6-lh6));}
}
var lk6=Math.floor(d);var ll6=d-lk6;if(ll6>0.999999999999){ll6=0;++lk6;}
else if(ll6<0.000000000001){ll6=0;}
else {if((le6<0)&&(lk6>=100000000*ll6))le6=0;if(le6>=0)d+=Math.pow(10,-le6)*0.5;else d+=0.0000005;if(lk6!=Math.floor(d)){lk6=Math.floor(d);ll6=0;}
}
if((lk6==10)&&((ld6=='e')||(ld6=='E'))){++lh6;lk6=1;ll6/=10;}
if((lk6==0)&&(ll6==0))li6=false;var lm6=lf6+lk6;for(var ln6=lm6.length-3;ln6>((0!=lf6)?0:1);ln6-=3)lm6=lm6.substring(0,ln6)+l06+lm6.substring(ln6);if(((le6>0)&&(!lg6||(ll6>0)))||((le6<0)&&(ll6>0))){var lo6=(le6>0)?le6:6;var lp6=Math.round(Math.pow(10,lo6));var lq6=new String(Math.round(ll6*lp6)%lp6);while(lq6.length<lo6)lq6='0'+lq6;if((le6<0)||lg6)lq6=lq6.replace(/0*$/,'');if(lq6.length>0)lm6+=(l16==""?'.':l16)+lq6;}
if(li6&&lm6.match(/[1-9]/))lm6=l26+lm6;if((ld6=='e')||(ld6=='E'))lm6+=ld6+(((lh6>=0)&&!lg6)?'+':'')+lh6;return lm6;}
_jcvxycp.l74=function(l66,d){if(!l66)l66="";var lr6=l66?l66.charAt(0):'\0';if(("eEgGpP".indexOf(lr6)==-1)&&(((lr6>='A')&&(lr6<='Z'))||((lr6>='a')&&(lr6<='z'))))return this.l84(l66,d);else return this.la4(l66,d);}
_jcvxycp.formatValue=function(lu2,l66){if((!l66)||(l66.indexOf('{')==-1))return this.l74(l66,lu2);else {var lf5=this;return l66.replace(new RegExp("[{]value\\|?([^}]*)?[}]",'g'),function(ll3,p1){return lf5.l74(p1,lu2);});}
}
function _jcvpa(ln5){this.data=ln5;}
_jcvpap=_jcvpa.prototype;_jcvpap.getLeftX=function(){return this.data.x;}
_jcvpap.getTopY=function(){return this.data.y;}
_jcvpap.getWidth=function(){return this.data.w;}
_jcvpap.getHeight=function(){return this.data.h;}
_jcvpap.getRightX=function(){return this.getLeftX()+this.getWidth();}
_jcvpap.getBottomY=function(){return this.getTopY()+this.getHeight();}
function _jcva(lu6,ln5){this.lx4=lu6;this.data=ln5;}
_jcvap=_jcva.prototype;_jcvap.getX=function(){return this.data.x;}
_jcvap.getY=function(){return this.data.y;}
_jcvap.getLength=function(){return this.data.l;}
_jcvap.getAlignment=function(){return this.data.dir;}
_jcvap.lp3=function(lw6){if(lw6==null)return null;var lq2=(lw6-this.data.minC)/(this.data.maxC-this.data.minC);if(this.data.st!=4)return lq2*(this.data.maxV-this.data.minV)+this.data.minV;else return Math.pow(this.data.maxV/this.data.minV,lq2)*this.data.minV;}
_jcvap.ln3=function(lu2){if(lu2==null)return null;if(lu2.getFullYear)lu2=_jcv.CTime(lu2);if(this.data.st!=4)return(lu2-this.data.minV)/(this.data.maxV-this.data.minV)*(this.data.maxC-this.data.minC)+this.data.minC;else return Math.log(lu2/this.data.minV)/Math.log(this.data.maxV/this.data.minV)*(this.data.maxC-this.data.minC)+this.data.minC;}
_jcvap.lo3=function(lu2){var l51=this.ln3(lu2);return(l51==null)?null:Math.round(l51);}
_jcvap.getMinValue=function(){return this.data.minV;}
_jcvap.getMaxValue=function(){return this.data.maxV;}
_jcvap.getLabel=function(v){var lx6=this.data.labels[v];return lx6?lx6[0]:null;}
_jcvap.getFormattedLabel=function(v,l66){var ly6=this.data.labels[v];if(ly6){if((v=ly6[1])==null)return ly6[0];}
if(!l66&&(v!=null)&&(v>=56770934400)&&(v<=69393715200))l66=(v%86400==0)?"mmm dd, yyyy":"mmm dd, yyyy hh:nn:ss";return this.lx4.formatValue(v,l66);}
function _jcvl(lu6,lt5){this.lx4=lu6;this.lu3=lt5;}
_jcvlp=_jcvl.prototype;_jcvlp.getDataSet=function(i){var ln5=this.lu3.dataSets[i];if(!ln5)return null;if(!ln5.obj){ln5.i=i;ln5.obj=new _jcvd(this,ln5);}
return ln5.obj;}
_jcvlp.getDataSetById=function(id){var l07=this.lu3.dataSets;for(var i=0;i<l07.length;++i){if(l07[i].id==id)return this.getDataSet(i);}
return null;}
_jcvlp.getDataSetByZ=function(i){return this.getDataSet(this.lu3.dataSets.length-i-1);}
_jcvlp.getDataSetCount=function(){var l07=this.lu3.dataSets;return l07?l07.length:0;}
_jcvlp.getXPosition=function(i){if(this.lu3.xValues)return this.lu3.xValues[i];if((this.lu3.minX!=null)&&(this.lu3.maxX!=null)){if(this.lu3.dss==1)return(i==0)?(this.lu3.maxX+this.lu3.minX)/2:null;else return((this.lu3.maxX-this.lu3.minX)*i)/(this.lu3.dss-1)+this.lu3.minX;}
return i;}
_jcvlp.getXCoor=function(){if(!this.lu3.lw4){var l17=0;for(var j=0;j<this.lu3.dataSets.length;++j)l17=Math.max(l17,this.lu3.dataSets[j].data.length);var lx5=this.lx4.xAxis();var ls2=Math.min(lx5.getMinValue(),lx5.getMaxValue());var lt2=Math.max(lx5.getMinValue(),lx5.getMaxValue());var l27=[];for(var i=0;i<l17;++i){var l37=this.getXPosition(i);if((l37==null)||(l37>lt2)||(l37<ls2))l27[i]=null;else l27[i]=lx5.ln3(l37);}
this.lu3.lw4=l27;}
return this.lu3.lw4;}
_jcvlp.getNearestXIndex=function(ly){var l27=this.getXCoor();if((ly==null)||!l27||!l27.length)return null;var l47=this.lu3.lv4;if(l27!=this.lu3.l44){l47=[];for(var i=0;i<l27.length;++i)l47[i]=i;l47.sort(function(a,b){return _jcv.lz3(l27[a],l27[b]);});this.lu3.lv4=l47;this.lu3.l44=l27;}
var l51=ase_61(l47,ly,function(a,b){return _jcv.lz3(l27[a],b);});if(l51>=0)return l47[l51];l51=~l51;if(l51>=l47.length)return l47[l47.length-1];if(l51==0)return l47[0];var l57=l47[l51-1];var l67=l47[l51];if((l27[l57]==null)||(ly-l27[l57]>l27[l67]-ly))return l67;else return l57;}
_jcvlp.getNearestXValue=function(ly){var l51=this.getNearestXIndex(ly);return(l51!=null)?this.getXPosition(l51):null;}
_jcvlp.getXIndexOf=function(l37,l77){if(!l77)l77=0;var l51=this.getNearestXIndex(this.lx4.xAxis().ln3(l37));return((l51==null)||(Math.abs(this.getXPosition(l51)-l37)>l77))?null:l51;}
_jcvlp.lt8=function(l13,x,y){var l87=l13.lw8.getContext('2d').getImageData(0,y,x+1,1).data;var l97=[];var la7=0;for(var i=0;i<=x;++i){var j=i*4;var v=((l87[j]*256)+l87[j+1])*256+l87[j+2];if(v>0x7fffff)v-=0x1000000;l97[i]=la7+=v;}
la7=0;for(var j=0;j<=x;++j)la7+=l97[j];return(la7==l13.n)?NaN:(la7*l13.m+l13.c);}
_jcvlp.getZAtPixel=function(x,y){var l13=this.lu3.zMap;if(!l13||!l13.lw8)return NaN;var l23=l13.lw8;var p=this.lx4.getPlotArea();x-=p.getLeftX();y-=p.getTopY();if(!(ase_e(0,x,l23.width-1)&&ase_e(0,y,l23.height-1)))return NaN;var iX=Math.floor(x);var iY=Math.floor(y);var dx=x-iX;var dy=y-iY;var lf7=this.lt8(l13,iX,iY);var lg7=(dx<=0)?0:this.lt8(l13,iX+1,iY);var lh7=(dy<=0)?0:this.lt8(l13,iX,iY+1);var li7=((dx<=0)||(dy<=0))?0:this.lt8(l13,iX+1,iY+1);var n=[0,1,2,3];var z=[lf7,lg7,lh7,li7];var lj7=0;for(var i=0;i<z.length;++i){if(!isNaN(z[i])){z[lj7]=z[i];n[lj7++]=n[i];}
}
if(lj7==4)return dx*dy*(lf7-lh7-lg7+li7)+dx*(lg7-lf7)+dy*(lh7-lf7)+lf7;if(lj7==3){var x0=n[0]%2;var x1=n[1]%2;var x2=n[2]%2;var y0=n[0]/2;var y1=n[1]/2;var y2=n[2]/2;var lm7=(y1-y2)*(x0-x2)+(x2-x1)*(y0-y2);var w0=((y1-y2)*(dx-x2)+(x2-x1)*(dy-y2))/lm7;var w1=((y2-y0)*(dx-x2)+(x0-x2)*(dy-y2))/lm7;var w2=1-w0-w1;if((w0<0)||(w1<0)||(w2<0))return NaN;else return w0*z[0]+w1*z[1]+w2*z[2];}
if(lj7==2){if((n[0]==0)&&(n[1]==1))return z[0]+dx*(z[1]-z[0]);if((n[0]==0)&&(n[1]==2))return z[0]+dy*(z[1]-z[0]);}
if((lj7==1)&&(n[0]==0))return z[0];return NaN;}
function _jcvd(lu6,ln5){this.lx4=lu6;this.data=ln5;}
_jcvdp=_jcvd.prototype;_jcvdp.getDataName=function(){return this.data.id;}
_jcvdp.getDataSetNo=function(){return this.data.i;}
_jcvdp.getDataGroup=function(){return this.data.g;}
_jcvdp.getDataColor=function(){return ase_41(this.data.color);}
_jcvdp.getUseYAxis=function(){return this.lx4.lx4.getAxis(this.data.axis);}
_jcvdp.getValue=function(i){return((i>=0)&&(i<this.data.data.length))?this.data.data[i]:null;}
_jcvdp.getPosition=function(i){var lu2=this.getValue(i);if(lu2==null)return null;var lr7=this.getDataSetNo();var ls7=this.getDataGroup();switch(this.lx4.lu3.dcm){case 1:for(var j=lr7-1;(j>=0)&&(this.lx4.getDataSet(j).getDataGroup()==ls7);--j){var v=this.lx4.getDataSet(j).getValue(i);if((v!=null)&&((lu2>=0)^(v<0)))lu2+=v;}
return lu2;case 4:lu2=Math.abs(lu2);var lt7=1;for(var k=lr7-1;(k>=0)&&(this.lx4.getDataSet(k).getDataGroup()==ls7);--k){var v=this.lx4.getDataSet(k).getValue(i);if(v!=null){++lt7;lu2+=Math.abs(v);}
}
var lu7=lu2;var lv7=lt7;for(var n=lr7+1;(n<this.lx4.getDataSetCount())&&(this.lx4.getDataSet(n).getDataGroup()==ls7);++n){var v=this.lx4.getDataSet(n).getValue(i);if(v!=null){++lv7;lu7+=Math.abs(v);}
}
return(lu7<=0)?(lt7*100/lv7):(lu2*100/lu7);default:return lu2;}
}
_jcvdp.getValueCount=function(){return this.data.data.length;}
_jcv.NTime=function(dt){var t=Math.floor(dt);var ms=Math.min(999,Math.floor(Math.round((dt-t)*100000)/100));var s=t%60;t=(t-s)/60;var n=t%60;t=(t-n)/60;var h=t%24;t=(t-h)/24;var y=Math.floor(t/365.2425)+1;t-=_jcv.l64(y);if(_jcv.ls3(y)){if(t>=366){++y;t-=366;}
}
else {if(t>=365){++y;t-=365;}
}
for(var m=1;m<12;++m){if(t<_jcv.l54(y,m+1))break;}
var d=t-_jcv.l54(y,m)+1;return new Date(y,m-1,d,h,n,s,ms);}
_jcv.ls3=function(y){return((y%400==0)||((y%4==0)&&(y%100!=0)));}
_jcv.l64=function(y){--y;return y*365+Math.floor(y/4)-Math.floor(y/100)+Math.floor(y/400);}
_jcv.lc3=[0,31,59,90,120,151,181,212,243,273,304,334];_jcv.l54=function(ly7,lz7){var l51=_jcv.lc3[lz7-1];if((lz7>2)&&_jcv.ls3(ly7))++l51;return l51;}
_jcv.CTime=function(d){return _jcv.chartTime(d.getFullYear(),d.getMonth()+1,d.getDate(),d.getHours(),d.getMinutes(),d.getSeconds()+d.getMilliseconds()/1000.0);}
_jcv.chartTime=function(y,m,d,h,n,s){return(_jcv.l64(y)+_jcv.l54(y,m)+d-1)*86400+(h||0)*3600+(n||0)*60+(s||0);}
_jcvp.l31=function(e){this.l93=ase_q(e);this.la3=ase_r(e);}
_jcvp.l41=function(e){var eX=ase_q(e);var eY=ase_r(e);if(this.la==_jcv.ZoomIn){var d=this.lc;var l28=this.ls1()&&this.ll1(e,d);if(l28){var ls2=Math.min(eX,this.l93);var l38=Math.min(eY,this.la3);var l94=Math.abs(eX-this.l93);var la4=Math.abs(eY-this.la3);switch(d){case _jcv.Horizontal:this.l12(ls2,this.l43(this.l1),l94,this.l13(this.l3));break;case _jcv.Vertical:this.l12(this.l33(this.l0),l38,this.l23(this.l2),la4);break;default:this.l12(ls2,l38,l94,la4);break;}
}
this.l22(l28);}
else if((this.la==_jcv.Scroll)||(this.la==_jcv.ReverseScroll)){var d=this.lb;if(this.lh2||this.ll1(e,d)){this.lh2=true;var lp5=this.lf7(eX-this.l93);var lq5=this.lg7(eY-this.la3);this.l12(this.l33(this.l0)+lp5,this.l43(this.l1)+lq5,this.l23(this.l2),this.l13(this.l3));this.l22(true);}
}
}
_jcvp.lr6=function(){return this.la==_jcv.ReverseScroll;}
_jcvp.lf7=function(lp5,l48){if(this.lb==_jcv.Vertical)return 0;if((!l48)&&this.lr6())return-this.lf7(-lp5,true);if((lp5<0)&&(this.l4+this.l6-this.l6*this.l63(lp5)/this.l2>1))lp5=Math.min(0,(this.l4+this.l6-1)*this.l23(this.l2)/this.l6);if((lp5>0)&&(this.l6*this.l63(lp5)/this.l2>this.l4))lp5=Math.max(0,this.l4*this.l23(this.l2)/this.l6);return lp5;}
_jcvp.lg7=function(lq5,l48){if(this.lb==_jcv.Horizontal)return 0;if((!l48)&&this.lr6())return-this.lg7(-lq5,true);if((lq5<0)&&(this.l5+this.l7-this.l7*this.l53(lq5)/this.l3>1))lq5=Math.min(0,(this.l5+this.l7-1)*this.l13(this.l3)/this.l7);if((lq5>0)&&(this.l7*this.l53(lq5)/this.l3>this.l5))lq5=Math.max(0,this.l5*this.l13(this.l3)/this.l7);return lq5;}
_jcvp.l61=function(e){this.l22(false);switch(this.la){case _jcv.ZoomIn:if(this.ls1()){if(this.ll1(e,this.lc))this.lv1(e);else this.lx1(e,this.ld);}
break;case _jcv.ZoomOut:if(this.lt1())this.lx1(e,this.le);break;default:if(this.lh2)this.lw1(e);break;}
this.lh2=false;}
_jcvp.l51=function(e){}
_jcvp.lc1=function(e){}
_jcvp.lx1=function(e,l58){var eX=ase_q(e);var eY=ase_r(e);var l68=this.l6/l58;var l78=this.l7/l58;this.lo1(this.lc,(this.l73(eX)-this.l0)*this.l6/this.l2-l68/2,l68,(this.l83(eY)-this.l1)*this.l7/this.l3-l78/2,l78);}
_jcvp.lw1=function(e){var eX=ase_q(e);var eY=ase_r(e);var ld2=this.lr6()?-1:1;var lp5=(this.l93-eX)*ld2;var lq5=(this.la3-eY)*ld2;this.lo1(this.lb,this.l6*this.l63(lp5)/this.l2,this.l6,this.l7*this.l53(lq5)/this.l3,this.l7);}
_jcvp.lv1=function(e){var eX=ase_q(e);var eY=ase_r(e);var l68=this.l6*this.l63(Math.abs(this.l93-eX))/this.l2;var l78=this.l7*this.l53(Math.abs(this.la3-eY))/this.l3;this.lo1(this.lc,this.l6*(this.l73(Math.min(this.l93,eX))-this.l0)/this.l2,l68,this.l7*(this.l83(Math.min(this.la3,eY))-this.l1)/this.l3,l78);}
_jcvp.lo1=function(d,lm1,l88,ln1,l98){var la8=this.l4;var lb8=this.l5;var l68=this.l6;var l78=this.l7;if((((l88<this.l6)&&(this.l6<this.lf))||(d==_jcv.Vertical))&&(((l98<this.l7)&&(this.l7<this.lh))||(d==_jcv.Horizontal)))return;if(d!=_jcv.Vertical){if(l88!=this.l6){l68=Math.max(this.lf,Math.min(l88,this.lg));lm1-=(l68-l88)/2;}
la8=Math.max(0,Math.min(this.l4+lm1,1-l68));}
if(d!=_jcv.Horizontal){if(l98!=this.l7){l78=Math.max(this.lh,Math.min(l98,this.li));ln1-=(l78-l98)/2;}
lb8=Math.max(0,Math.min(this.l5+ln1,1-l78));}
if((la8!=this.l4)||(lb8!=this.l5)||(l68!=this.l6)||(l78!=this.l7)){this.ly2=this.l4;this.lz2=this.l5;this.l03=this.l6;this.lx2=this.l7;this.l4=la8;this.l5=lb8;this.l6=l68;this.l7=l78;this.raiseViewPortChangedEvent();}
}
_jcvp.zoomAt=function(x,y,l58){var lc8=(x-this.l0)/this.l2;var ld8=(y-this.l1)/this.l3;var rx=(this.lc!=_jcv.Vertical)?1/l58:1;var ry=(this.lc!=_jcv.Horizontal)?1/l58:1;var l68=Math.max(this.lf,this.l6*rx);var lm1=lc8*(this.l6-l68);var l78=Math.max(this.lh,this.l7*ry);var ln1=ld8*(this.l7-l78);this.lo1(this.lc,lm1,l68,ln1,l78);}
_jcvp.raiseViewPortChangedEvent=function(){this.lp=1;this.lv2();this.applyHandlers("viewportchanged");if(this.onViewPortChanged&&(this.l52("viewportchanged").length==0))this.onViewPortChanged();this.lp=0;}
_jcvp.l52=function(lh5){var id=(lh5+"events").toLowerCase();if(!this[id])this[id]=[];return this[id];}
_jcvp.attachHandler=function(lh5,f){if(lh5 instanceof Array){var l51=[];for(var i=0;i<lh5.length;++i)l51[i]=this.attachHandler(lh5[i],f);return l51;}
var lg8=lh5.toLowerCase();if(lg8=="now"){this.l57="now";f.call(this);this.l57=null;}
else {if(lg8=="chartmove")this.l65();if((lg8.length>7)&&(lg8.substr(lg8.length-7,7)=="hotspot"))this.initToolTipHandler();var a=this.l52(lh5);a.push(f);return lh5+":"+(a.length-1);}
}
_jcvp.detachHandler=function(lf4){if(lf4 instanceof Array){for(var i=0;i<lf4.length;++i)this.detachHandler(lf4[i]);return;}
var ab=lf4.split(':');var a=this.l52(ab[0]);a[parseInt(ab[1])]=null;if(ab[0].toLowerCase()=="chartmove"){for(var i=0;i<a.length;++i)if(a[i])return;this.lf5();}
}
_jcvp.l45=function(lp,lh5,lh8){this.lw3(lh5);this.l57=lh5;var l51=false;var a=this.l52(lh5);for(var i=0;i<a.length;++i){this.lb3=a[i];if(a[i])l51|=a[i].call(lp,lh8);}
this.l57=null;return l51;}
_jcvp.l55=function(lp,lh5,e){var li8=e.changedTouches[0];this.l07(ase_q(li8),ase_r(li8));this.lk6=e.type;this.l45(lp,lh5,e);this.lk6=null;}
_jcvp.isTouchEvent=function(){return this.lk6;}
_jcvp.preventDefault=function(e){if(e&&e.preventDefault)e.preventDefault();if(this.lk6)_jcv.l88(this);}
_jcvp.applyHandlers=function(lh5,lh8){return this.l45(this,lh5,lh8);}
_jcvp.getCurrentEvent=function(){return this.l57;}
_jcvp.isInEvent=function(ls){if(!(ls instanceof Array))ls=[ls];for(var i=0;i<ls.length;++i){var lh5=ls[i];if(lh5&&(lh5.toLowerCase()==this.l57))return true;}
return false;}
_jcvp.partialUpdateAsAttachment=function(lj8,ly){this.partialUpdate(lj8,ly||"hidden");}
_jcvp.partialUpdate=function(lj8,lk8){if(this.l32)return;_jcv.lu1(this.la2());this.applyHandlers("preupdate");this.lv2();var lw="cdPartialUpdate="+this.l21+"&cdCacheDefeat="+ase_h();if(lk8)lw+="&cdAttachment=1";if(lj8)lw+="&"+lj8;lw+="&"+this.lb2.name+"="+ase_21(escape(this.lb2.value),'\\+','%2B');var lv=ase_11(ase_a(this.l21+"_callBackURL").value,lw);if(lk8){switch(lk8){case "_self":location=lv;break;case "hidden":var id=this.l21+"_loader_frame";var ll8=ase_a(id);if(!ll8){ll8=document.createElement("IFRAME");ll8.id=id;var s=ll8.style;s.position="absolute";s.left="0px";s.top="0px";s.display="none";s.visibility="hidden";document.body.appendChild(ll8);}
ll8.src=lv;break;default:window.open(lv,lk8);}
return;}
var lm8=this.updatingMsg;if(ase_g(lm8))lm8=_jcv.updatingMsg;if(lm8&&(lm8!="none"))this.msgBox(lm8);this.ln=1;var lr5=this;this.l32=ase_j1(lv,function(t){lr5.ll2(t)},function(ln8,lo8){lr5.le1(ln8,lo8);});}
_jcvp.ll2=function(lr1){var lp8=ase_e1(lr1,"<!--CD_SCRIPT "," CD_SCRIPT-->");if(lp8){var lq8=ase_e1(lr1,"<!--CD_MAP "," CD_MAP-->");var imgObj=this.la2();var imgBuffer=(this.ln1=(this.doubleBuffering?new Image():null))||imgObj;if(imgObj.useMap)imgObj.useMap=null;imgObj.loadImageMap=function(){window.setTimeout(function(){_jcv.putMap(imgObj,lq8);},100);};imgBuffer.onload=function(){imgObj._jcv.onPartialLoad(true);}
imgBuffer.onerror=imgBuffer.onabort=function(l33){imgObj._jcv.le1(999,"Error loading image '"+this.src+"'["+l33+"]");}
var ls8=window.onerror;window.onerror=function(l33){imgObj._jcv.le1(801,"Error interpretating partial update result ["+l33+"] <div style='margin:20px;background:#dddddd'><xmp>"+lp8+"</xmp></div>")};eval(lp8);window.onerror=ls8;if(ase_2)this.lv2();}
else this.le1(800,"Partial update returns invalid data <div style='margin:20px;background:#dddddd'><xmp>"+lr1+"</xmp></div>");}
_jcvp.ld1=function(lt8){var imgObj=this.la2();var imgBuffer=this.ln1||imgObj;if(imgBuffer)imgBuffer.onerror=imgBuffer.onabort=imgBuffer.onload='';imgObj.onUpdateCompleted='';this.l32=false;this.li1(this.lg1());if(lt8){this.ly2=this.l4;this.lx2=this.l7;this.lz2=this.l5;this.l03=this.l6;if(imgObj!=imgBuffer){imgObj.src=imgBuffer.src;imgObj.style.width=imgBuffer.style.width;imgObj.style.height=imgBuffer.style.height;}
imgObj.loadImageMap();}
else {imgObj.useMap=imgObj.lt2;if(this.l03||this.lx2){this.l4=this.ly2;this.l7=this.lx2;this.l5=this.lz2;this.l6=this.l03;this.lv2();}
}
imgObj.loadImageMap='';}
_jcvp.onPartialLoad=function(lt8){if(this.la2().onUpdateCompleted)this.la2().onUpdateCompleted();else this.msgBox();this.ld1(lt8);window[this.getId()+"_chartModel"]=window[this.getId()+"_pending_chartModel"];this.lu8();this.applyHandlers("postupdate");}
_jcvp.le1=function(ln8,lo8){this.ld1(false);this.msgBox();this.errCode=ln8;this.errMsg=lo8;if(!this.applyHandlers("updateerror")){var lu8=this.serverErrorMsg;if(!lu8)lu8=_jcv.serverErrorMsg;if(lu8&&(lu8!="none"))this.msgBox(ase_21(ase_21(lu8,'%errCode',ln8),'%errMsg',lo8));}
this.errCode=null;this.errMsg=null;}
_jcvp.isUpdating=function(){return(this.l32||this.lm2)?true:false;}
_jcvp.abortUpdate=function(){if(this.l32){var r=this.l32;this.l32=null;r.onreadystatechange=function(){};r.abort();}
if(this.lm2){var lm6=this.lm2;this.lm2=null;lm6.onerror=lm6.onabort=lm6.onload=null;lm6.src=null;}
}
_jcvp.streamUpdate=function(lv8,lj8){var lp1=ase_h();if(!lv8)lv8=60;var lm6=this.lm2;if(lm6){if(lv8*1000>=lp1-lm6.lm1)return false;lm6.src=null;lm6.onerror=lm6.onabort=lm6.onload=null;}
if(!this.lk2){this.lk2=this.la2().src;if(this.lk2.substring(0,5)=="data:")this.lk2=ase_a(this.l21+"_callBackURL").value;}
this.lm2=lm6=this.la2();lm6.lm1=lp1;var lr5=this;lm6.onload=function(){var imgObj=lr5.la2();if(imgObj.useMap)imgObj.useMap=null;var b=lr5.lm2;if(imgObj!=b)imgObj.src=b.src;b.onabort();}
lm6.onerror=lm6.onabort=function(){var b=lr5.lm2;if(b)b.onload=b.onabort=b.onerror=null;lr5.lm2=null;}
var lw="cdDirectStream="+this.l21+"&cdCacheDefeat="+lp1;if(lj8)lw+="&"+lj8;lm6.src=ase_11(this.lk2,lw);return true;}
_jcvp.lq1=function(a,v){return a+((typeof v!="number")?"**":"*")+v;}
_jcvp.lp1=function(av){var l41=av.indexOf("*");if(l41==-1)return null;var a=av.substring(0,l41);var v=av.substring(l41+1,av.length);if(v.charAt(0)=="*")v=v.substring(1,v.length);else v=parseFloat(v);return{"attr":a,"value":v};}
_jcvp.lr1=function(){var l51="";for(var i=0;i<_jcv.l02.length;++i){var a=_jcv.l02[i];var v=null;if((a=="lo")&&this.lo){for(var lq in this.lo)v=((v==null)?"":v+"\x1f")+this.lq1(lq,this.lo[lq]);}
else v=this[a];if((typeof v!="undefined")&&(null!=v))l51+=(l51?"\x1e":"")+this.lq1(i,v);}
return l51;}
_jcvp.decodeState=function(s){var lw8=s.split("\x1e");for(var i=0;i<lw8.length;++i){var av=this.lp1(lw8[i]);if(!av)continue;var a=_jcv.l02[parseInt(av.attr)];if(a=="lo"){var lx8=av.value.split("\x1f");for(var i2=0;i2<lx8.length;++i2){var lz8=this.lp1(lx8[i2]);if(!lz8)continue;this.lo[lz8.attr]=lz8.value;}
}
else this[a]=av.value;}
this.lp=0;}
_jcvp.lv2=function(){if(this.lb2)this.lb2.value=this.lr1();}
_jcvp.l92=function(){if((!ase_7)||(ase_9()>=9)){var imgObj=this.la2();var m=_jcv.l42(imgObj);if(m){m.onmousedown=imgObj.onmousedown;m.onmousemove=imgObj.onmousemove;m.onmouseout=imgObj.onmouseout;}
}
}
_jcv.l42=function(imgObj){var l09=imgObj.lt2;if(!l09)l09=imgObj.useMap;if(!l09)return null;var l41=l09.indexOf('#');if(l41>=0)l09=l09.substring(l41+1);var l51=ase_a(l09);if(!l51){l51=document.getElementsByName(l09);l51=l51?l51[0]:null;}
return l51;}
_jcv.loadMap=function(imgObj,lv){if(!imgObj.lt2)imgObj.lt2=imgObj.useMap;_jcv.lu1(imgObj);imgObj.lc2=ase_j1(lv,function(t){_jcv.putMap(imgObj,ase_e1(t,"<!--CD_MAP "," CD_MAP-->"));},function(ln8,lo8){_jcv.onLoadMapError(ln8,lo8);}
);}
_jcv.loadPendingMap=function(){if(!window._jcvPendingMap)return;for(var a in window._jcvPendingMap){var lp=ase_a(a);if(lp){var lv=window._jcvPendingMap[a];window._jcvPendingMap[a]=null;if(lv)_jcv.loadMap(lp,lv);}
}
}
_jcv.lu1=function(imgObj){if(imgObj.lc2){imgObj.lc2.abort();imgObj.lc2=null;}
}
_jcv.onLoadMapError=function(ln8,lo8){}
_jcv.putMap=function(imgObj,l19){var m=_jcv.l42(imgObj);if(!m&&l19){var l09='map_'+imgObj.id;imgObj.useMap=imgObj.lt2='#'+l09;var d=document;m=d.createElement("MAP");m.id=m.name=l09;d.body.appendChild(m);if(imgObj._jcv)imgObj._jcv.l92();}
if(m){m.innerHTML=l19;m.ll6=m.lm6=1;if(imgObj.useMap!=imgObj.lt2)imgObj.useMap=imgObj.lt2;var lr5=_jcv.get(imgObj.id);if(lr5&&lr5.l85)lr5.lq7();}
imgObj.lc2=null;}
_jcv.canSupportPartialUpdate=function(){return(window.XMLHttpRequest||ase_i1());}
_jcv.getVersion=function(){return ase_0;}
_jcv.ls8=function(){var l29=document.getElementsByTagName("input");for(var i=0;i<l29.length;i++){var h=l29[i];if((h.type=="hidden")&&h.id){var v=_jcv.get(h.id.substring(0,h.id.indexOf("_JsChartViewerState")));if(v){var imgObj=v.la2();if(imgObj&&(imgObj.useMap||imgObj.lt2))v.setAutoResizeImageMap();}
}
}
}
_jcv.initChart=function(id){var lp=_jcv.get(id);if(lp)lp.initToolTipHandler();}
function _jvpc(id){this.lf8=id;this.le8=null;this.ld8=null;this.li5=4;this.lj5=8;this.lb5=_jcv.lm5;var lp=this.lz7("root");var l39=["maskTop","maskBottom","maskLeft","maskRight","pad","sel"];var i=0;for(i=0;i<l39.length;++i){if(this.lz7(l39[i]))continue;var l49=document.createElement("DIV");l49.id=this.lg8(l39[i]);var s=l49.style;s.position="absolute";if(i>3)s.visibility="hidden";l49.innerHTML="<img style='display:none' />";lp.appendChild(l49);}
var l59=["MouseDown","MouseMove","MouseUp","TouchStart","TouchMove","TouchEnd"];for(i=0;i<l59.length;++i){var lg2="on"+l59[i];lp[lg2.toLowerCase()]=_jvpc.l67(id,_jvpcp[lg2],lg2.substring(2,7).toLowerCase());}
this.lm8=this.ll8=this.ln8=this.lk8=true;var a=this.lt7=[];a[_jcv.Left]="w-resize";a[_jcv.Right]="e-resize";a[_jcv.Top]="n-resize";a[_jcv.Bottom]="s-resize";a[_jcv.ll5]=null;a[_jcv.TopLeft]="nw-resize";a[_jcv.TopRight]="ne-resize";a[_jcv.BottomLeft]="sw-resize";a[_jcv.BottomRight]="se-resize";a[0]="default";a[-1]="wait";_jcv.get(id).attachHandler("PostUpdate",_jvpc.l67(this.lf8,_jvpcp.lr8));this.lr8();this.l75();}
_jvpc.get=function(id){var lp=ase_a(id);if(!lp)return null;if(!lp._jvpc)lp._jvpc=new _jvpc(id);return lp._jvpc;}
_jvpcp=_jvpc.prototype;_jvpcp.lr8=function(){var cv=_jcv.get(this.lf8);cv.lh5();var l89=["l01","l11","l0","l1","l2","l3"];for(i=0;i<l89.length;++i)this[l89[i]]=cv[l89[i]];if(++this.l2>0)++this.l3;else {this.l0=this.l1=0;this.l2=this.l01;this.l3=this.l11;}
this.onViewPortChanged();}
_jvpcp.getViewer=function(){return _jcv.get(this.le8);}
_jvpcp.setViewer=function(lr5){var l99=this.getViewer();if(l99)l99.detachHandler(this.ld8);if(null==lr5)this.le8=this.ld8=null;else {this.le8=lr5.getId();this.ld8=lr5.attachHandler("PostUpdate",_jvpc.l67(this.lf8,_jvpcp.onViewPortChanged));this.onViewPortChanged();this.lz7("pad").style.visibility="visible";}
}
_jvpcp.setDragBorderToResize=function(b){this.ll8=b;}
_jvpcp.getDragBorderToResize=function(){return this.ll8;}
_jvpcp.setDragInsideToMove=function(b){this.lm8=b;}
_jvpcp.getDragInsideToMove=function(){return this.lm8;}
_jvpcp.setDragOutsideToSelect=function(b){this.ln8=b;}
_jvpcp.getDragOutsideToSelect=function(){return this.ln8;}
_jvpcp.setClickToCenter=function(b){this.lk8=b;}
_jvpcp.getClickToCenter=function(){return this.lk8;}
_jvpcp.setMouseMargin=function(la9,lb9){this.li5=la9;this.lj5=lb9;}
_jvpcp.setViewPortExternalColor=function(ll5){this.lp8=ll5;}
_jvpcp.getViewPortExternalColor=function(){return this.lp8;}
_jvpcp.setViewPortBorderStyle=function(lc9){this.lo8=lc9;}
_jvpcp.getViewPortBorderStyle=function(){return this.lo8;}
_jvpcp.setSelectionBorderStyle=function(lc9){this.lq8=lc9;}
_jvpcp.getSelectionBorderStyle=function(){return this.lq8;}
_jvpcp.lg8=function(id){id=id?("_"+id):"";return this.lf8+id;}
_jvpcp.lz7=function(id){return ase_a(this.lg8(id));}
_jvpcp.l28=function(lp,lx4,lz4,ly4,l05){lx4=Math.round(lx4);lz4=Math.round(lz4);ly4=Math.round(ly4);l05=Math.round(l05);if(!lp.id)lp=this.lz7(lp);width=Math.max(0,ly4-lx4);height=Math.max(0,l05-lz4);var s=lp.style;if(s.width==''){s.width=lp.offsetWidth+"px";s.height=lp.offsetHeight+"px";}
s.width=Math.max(0,(width-lp.offsetWidth+parseInt(s.width)))+"px";s.height=Math.max(0,(height-lp.offsetHeight+parseInt(s.height)))+"px";s.left=(lx4+Math.min(0,width-lp.offsetWidth)/2)+"px";s.top=(lz4+Math.min(0,height-lp.offsetHeight)/2)+"px";return lp;}
_jvpcp.l18=function(lp,lx4,lz4,ly4,l05){lp=this.l28(lp,lx4,lz4,ly4,l05);ase_51(lp,this.lj8(this.lp8,"#80ffffff"));}
_jvpcp.lj8=function(a,v){return ase_g(a)?v:a;}
_jvpc.l67=function(id,lr,ld9){return function(e){var lf5=_jvpc.get(id);if("touch"==ld9)_jcv.l88(lf5);if(("mouse"!=ld9)||!_jcv.la8(lf5))return lr.call(lf5,e);};}
_jvpcp.l75=function(){var le9=_jvpc.l67(this.lf8,_jvpcp.l68);window.setInterval(le9,_jcv.moveConfirmTimer);ase_z(window,"resize",le9,false);ase_z(this.lz7("root"),"resize",le9,false);}
_jvpcp.l68=function(){var lp=this.lz7("root");if((this.lm7!=lp.clientWidth)||(this.lk7!=lp.clientHeight))this.onViewPortChanged();this.lm7=lp.clientWidth;this.lk7=lp.clientHeight;}
_jvpcp.lx5=function(x,y,lx4,lz4,ly4,l05){var lf9=x+x-lx4-ly4;var lg9=y+y-lz4-l05;return lf9*lf9+lg9*lg9;}
_jvpcp.ln6=function(x,y,lx4,lz4,ly4,l05){if(ase_e(lx4,x,ly4)&&ase_e(lz4,y,l05))return this.lx5(x,y,lx4,lz4,ly4,l05);else return-1;}
_jvpcp.lq6=function(lh9,li9,x,y,lj9,la9){return ase_e(x-la9,lh9,x+la9)&&ase_e(y-la9*ase_f(lj9),li9,y+lj9);}
_jvpcp.lo6=function(lh9,li9,x,y,x2,y2,la9,lb9){if(la9>lb9)return this.ln6(lh9,li9,x-la9,y-la9,x+la9,y+la9);var lk9=lb9*ase_f(x2-x);var lj9=lb9*ase_f(y2-y);if(this.lq6(lh9,li9,x,y,lj9,la9)||(this.lq6(li9,lh9,y,x,lk9,la9)))return this.lx5(lh9,li9,x,y,x,y);else return-1;}
_jvpcp.lp6=function(l35,x,y,lx4,lz4,ly4,l05){var ll9=this.li5;var lm9=this.lj5;switch(l35){case _jcv.Left:return this.ln6(x,y,lx4-ll9,lz4,lx4+ll9,l05);case _jcv.Right:return this.ln6(x,y,ly4-ll9,lz4,ly4+ll9,l05);case _jcv.Top:return this.ln6(x,y,lx4,lz4-ll9,ly4,lz4+ll9);case _jcv.Bottom:return this.ln6(x,y,lx4,l05-ll9,ly4,l05+ll9);case _jcv.TopLeft:return this.lo6(x,y,lx4,lz4,ly4,l05,ll9,lm9);case _jcv.TopRight:return this.lo6(x,y,ly4,lz4,lx4,l05,ll9,lm9);case _jcv.BottomLeft:return this.lo6(x,y,lx4,l05,ly4,lz4,ll9,lm9);case _jcv.BottomRight:return this.lo6(x,y,ly4,l05,lx4,lz4,ll9,lm9);case _jcv.ll5:return this.ln6(x,y,lx4,lz4,ly4,l05);default:return-1;}
}
_jvpcp.ly5=function(lh9,li9){var ln9=[];var lo9=0;if(this.lm8)ln9[lo9++]=_jcv.ll5;if(this.ll8){switch(this.getViewer().lc){case _jcv.Horizontal:ln9[lo9++]=_jcv.Left;ln9[lo9++]=_jcv.Right;break;case _jcv.Vertical:ln9[lo9++]=_jcv.Top;ln9[lo9++]=_jcv.Bottom;break;case _jcv.HorizontalVertical:ln9[lo9++]=_jcv.Left;ln9[lo9++]=_jcv.Right;ln9[lo9++]=_jcv.Top;ln9[lo9++]=_jcv.Bottom;ln9[lo9++]=_jcv.TopLeft;ln9[lo9++]=_jcv.TopRight;ln9[lo9++]=_jcv.BottomLeft;ln9[lo9++]=_jcv.BottomRight;break;}
}
var lp9=this.lz7("pad");var lx4=lp9.lr5+Math.round((lp9.lo5-lp9.offsetWidth)/2);var lz4=lp9.ls5+Math.round((lp9.ln5-lp9.offsetHeight)/2);var ly4=lx4+lp9.offsetWidth;var l05=lz4+lp9.offsetHeight;var lq9=-1;var lr9=0x7fffffff;for(var i=0;i<lo9;++i){var ls9=this.lp6(ln9[i],lh9,li9,lx4,lz4,ly4,l05);if((ls9>=0)&&(ls9<lr9)){lr9=ls9;lq9=i;}
}
return(lq9>=0)?ln9[lq9]:_jcv.lk5;}
_jvpcp.lg1=function(p){var l51=this.lt7[p];return l51?l51:this.lt7[0];}
_jvpcp.li1=function(lv3,ld4){this.lt7[p]=ld4;}
_jvpcp.l17=function(x){return this.l33(x*this.l2+this.l0);}
_jvpcp.l27=function(y){return this.l43(y*this.l3+this.l1);}
_jvpcp.l37=function(x){return(x-this.l17(0))/(this.l17(1)-this.l17(0));}
_jvpcp.l47=function(y){return(y-this.l27(0))/(this.l27(1)-this.l27(0));}
_jvpcp.l33=function(w){var lp=this.lz7();var l51=(this.l01&&lp.clientWidth)?(w*lp.clientWidth/this.l01):w;return l51+lp.offsetLeft;}
_jvpcp.l43=function(h){var lp=this.lz7();var l51=(this.l11&&lp.clientHeight)?(h*lp.clientHeight/this.l11):h;return l51+lp.offsetTop;}
_jvpcp.onViewPortChanged=function(){this.lz7("root").style.cursor=this.lg1(0);var lr5=this.getViewer();if(lr5)this.le7(lr5.l4,lr5.l5,lr5.l6,lr5.l7);}
_jvpcp.le7=function(lt9,lu9,l73,l83){var lp9=this.lz7("pad");lp9.lr5=this.l17(lt9);lp9.ls5=this.l27(lu9);lp9.lo5=this.l17(lt9+l73)-lp9.lr5;lp9.ln5=this.l27(lu9+l83)-lp9.ls5;this.l38();}
_jvpcp.ls7=function(){var lp9=this.lz7("pad");var lv9=(lp9.lr5==lp9.l66)&&(lp9.lo5==lp9.l56);var lw9=(lp9.ls5==lp9.l76)&&(lp9.ln5==lp9.l46);if(!(lv9&&lw9))this.lc8(lp9.lr5,lp9.ls5,lp9.lo5,lp9.ln5,lv9,lw9);}
_jvpcp.l38=function(){var lr5=this.getViewer();var lp9=this.lz7("pad");var lx9=this.lz7("sel");var ly9=this.l17(0);var lz9=this.l17(1);var l0a=this.l27(0);var l1a=this.l27(1);if(this.ld7()){var l2a=lr5.lc!=_jcv.Vertical;var l3a=lr5.lc!=_jcv.Horizontal;var lx4=Math.min(this.lc5,this.l95);var ly4=Math.max(this.lc5,this.l95);var lz4=Math.min(this.ld5,this.la5);var l05=Math.max(this.ld5,this.la5);if((l2a&&((lx4>lz9)||(ly4<ly9)))||(l3a&&((lz4>l1a)||(l05<l0a)))){lx9.style.visibility="hidden";return;}
lx4=l2a?ase_d(ly9,lx4,lz9):lp9.l66;ly4=l2a?ase_d(ly9,ly4,lz9):(lp9.l66+lp9.l56);lz4=l3a?ase_d(l0a,lz4,l1a):lp9.l76;l05=l3a?ase_d(l0a,l05,l1a):(lp9.l76+lp9.l46);lx9.lr5=lx4;lx9.ls5=lz4;lx9.lo5=ly4-lx4;lx9.ln5=l05-lz4;lx9.style.border=this.lj8(this.lq8,"1px solid gray");this.l28(lx9,lx4,lz4,ly4,l05);lx9.style.visibility="visible";}
else {lx9.style.visibility="hidden";this.lz7("pad").style.border=this.lj8(this.lo8,"1px solid gray");this.l28(lp9,lp9.lr5,lp9.ls5,lp9.lr5+lp9.lo5,lp9.ls5+lp9.ln5);this.l18("maskLeft",ly9,l0a,lp9.lr5,l1a);this.l18("maskRight",lp9.lr5+lp9.lo5,l0a,lz9,l1a);this.l18("maskTop",lp9.lr5,l0a,lp9.lr5+lp9.lo5,lp9.ls5);this.l18("maskBottom",lp9.lr5,lp9.ls5+lp9.ln5,lp9.lr5+lp9.lo5,l1a);}
}
_jvpcp.lc8=function(x,y,w,h,lv9,lw9){var lr5=this.getViewer();var la8=lv9?lr5.l4:this.l37(x);var lb8=lw9?lr5.l5:this.l47(y);var l68=lv9?lr5.l6:(this.l37(x+w)-la8);var l78=lw9?lr5.l7:(this.l47(y+h)-lb8);var l4a=ase_d(lr5.lf,l68,lr5.lg);if(l68!=l4a){la8=ase_d(0,la8+(l68-l4a)/2,1-l4a);l68=l4a;}
var l5a=ase_d(lr5.lh,l78,lr5.li);if(l78!=l5a){lb8=ase_d(0,lb8+(l78-l5a)/2,1-l5a);l78=l5a;}
this.l48(la8,lb8,l68,l78);}
_jvpcp.l48=function(lt9,lu9,l73,l83){var lr5=this.getViewer();lr5.l4=lt9;lr5.l5=lu9;lr5.l6=l73;lr5.l7=l83;lr5.raiseViewPortChangedEvent();}
_jvpcp.lc7=function(){var lr5=this.getViewer();return lr5.li8(this.l95-this.lc5,this.la5-this.ld5,_jcv.HorizontalVertical,lr5.lj);}
_jvpcp.ld7=function(){var lr5=this.getViewer();return(this.lb5==_jcv.lk5)&&this.ln8&&lr5.li8(this.l95-this.lc5,this.la5-this.ld5,lr5.lc,lr5.lj);}
_jvpcp.lu6=function(x,y){var lr5=this.getViewer();if(null==lr5)return false;var lw2=this.l27(0)-lr5.lo4;var ly2=this.l27(1)+lr5.ll4;var lv2=this.l17(0)-lr5.lm4;var lx2=this.l17(1)+lr5.ln4;var lk4=(y>=lw2)&&(y<=ly2);var ll4=(x>=lv2)&&(x<=lx2);return lk4&&ll4;}
_jvpcp.lx7=function(e){var lp=this.lz7("root");return ase_q(e)-ase_w(lp)-lp.clientLeft;}
_jvpcp.ly7=function(e){var lp=this.lz7("root");return ase_r(e)-ase_x(lp)-lp.clientTop;}
_jvpcp.onMouseDown=function(e){var lp=this.lz7("root");var lp9=this.lz7("pad");var lr5=this.getViewer();if((null==lr5)||lr5.l32||(ase_s(e)!=1))return;var mX=this.lx7(e);var mY=this.ly7(e);if(!this.lu6(mX,mY))return;this.l98=true;this.l86=null;this.l96=null;ase_b(e);if(window.onmousemove!=lp.onmousemove){if(lp.setCapture)lp.setCapture();lp.lo7=window.onmousemove;lp.lp7=window.onmouseup;window.onmousemove=lp.onmousemove;window.onmouseup=lp.onmouseup;}
this.lc5=this.l95=mX;this.ld5=this.la5=mY;this.lb5=this.ly5(mX,mY);lp9.l66=lp9.lr5;lp9.l76=lp9.ls5;lp9.l56=lp9.lo5;lp9.l46=lp9.ln5;this.l97=false;this.la7=false;this.l87=false;}
_jvpcp.onMouseMove=function(e){var lp=this.lz7("root");var lp9=this.lz7("pad");var lr5=this.getViewer();if(null==lr5)return;if(lr5.l32){lp.style.cursor=this.lg1(-1);return;}
var mX=this.lx7(e);var mY=this.ly7(e);if(this.l98&&(mX==this.l86)&&(mY==this.l96))return;this.l86=mX;this.l96=mY;var l6a=mX-this.lc5;var l7a=mY-this.ld5;var sd=lr5.lb;var zd=lr5.lc;var ps=lp9.style;lp.style.cursor=this.lg1((this.lb5==_jcv.lm5)?this.ly5(mX,mY):this.lb5);this.l95=mX;this.la5=mY;switch(this.lb5){case _jcv.lm5:break;case _jcv.lk5:if(this.ld7()||this.l97)this.l38();this.l97=this.ld7();break;case _jcv.ll5:if(sd!=_jcv.Vertical)lp9.lr5=ase_d(this.l17(0),lp9.l66+l6a,this.l17(1)-lp9.lo5);if(sd!=_jcv.Horizontal)lp9.ls5=ase_d(this.l27(0),lp9.l76+l7a,this.l27(1)-lp9.ln5);this.l38();this.la7=true;break;default:var lx4=lp9.l66;var lz4=lp9.l76;var ly4=lx4+lp9.l56;var l05=lz4+lp9.l46;if(zd!=_jcv.Vertical){switch(this.lb5){case _jcv.Left:case _jcv.BottomLeft:case _jcv.TopLeft:lx4+=l6a;break;case _jcv.Right:case _jcv.BottomRight:case _jcv.TopRight:ly4+=l6a;break;}
}
if(zd!=_jcv.Horizontal){switch(this.lb5){case _jcv.Top:case _jcv.TopLeft:case _jcv.TopRight:lz4+=l7a;break;case _jcv.Bottom:case _jcv.BottomLeft:case _jcv.BottomRight:l05+=l7a;break;}
}
lx4=ase_d(this.l17(0),lx4,this.l17(1));ly4=ase_d(this.l17(0),ly4,this.l17(1));lz4=ase_d(this.l27(0),lz4,this.l27(1));l05=ase_d(this.l27(0),l05,this.l27(1));lp9.lo5=Math.abs(ly4-lx4);lp9.ln5=Math.abs(l05-lz4);lp9.lr5=Math.min(lx4,ly4);lp9.ls5=Math.min(lz4,l05);this.l38();this.la7=true;break;}
this.l87=this.l87||this.lc7();}
_jvpcp.onMouseUp=function(e){var lp=this.lz7("root");var lr5=this.getViewer();if((null==lr5)||(ase_s(e)!=1)||(!this.l98))return;if(lp.releaseCapture)lp.releaseCapture();window.onmousemove=lp.lo7;window.onmouseup=lp.lp7;this.l98=false;this.lb5=_jcv.lm5;if(this.l97){var lx9=this.lz7("sel");if(lx9.style.visibility!="hidden")this.lc8(lx9.lr5,lx9.ls5,lx9.lo5,lx9.ln5);}
else if(this.la7){this.ls7();}
else if(this.lk8&&!this.l87){var lba=false;var sd=lr5.lb;if(sd!=_jcv.Vertical){var w=lr5.l6;var la8=ase_d(0,this.l37(this.l95)-w/2,1-w);lba=lba||(la8!=lr5.l4);lr5.l4=la8;}
if(sd!=_jcv.Horizontal){var h=lr5.l7;var lb8=ase_d(0,this.l47(this.la5)-h/2,1-h);lba=lba||(lb8!=lr5.l5);lr5.l5=lb8;}
if(lba)lr5.raiseViewPortChangedEvent();}
}
_jvpcp.onTouchStart=function(e){var lp=this.lz7("root");var lp9=this.lz7("pad");var lr5=this.getViewer();if((null==lr5)||lr5.l32||ase_t(e))return;this.lx6=null;var e1=e.changedTouches[0];var mX=this.lx7(e1);var mY=this.ly7(e1);if(!this.lu6(mX,mY))return;var lx4=lp9.lr5+Math.round((lp9.lo5-lp9.offsetWidth)/2);var lz4=lp9.ls5+Math.round((lp9.ln5-lp9.offsetHeight)/2);var ly4=lx4+lp9.offsetWidth;var l05=lz4+lp9.offsetHeight;var lca=9999;var lda=9999;if((mX>=lx4-lca)&&(mX<=ly4+lca)&&(mY>=lz4-lca)&&(mY<=l05+lca)){ase_b(e);this.lx6=e1.identifier;this.lb6=mX;this.lc6=mY;lp9.l66=lp9.lr5;lp9.l76=lp9.ls5;lp9.l56=lp9.lo5;lp9.l46=lp9.ln5;}
}
_jvpcp.onTouchMove=function(e){var lp=this.lz7("root");var lp9=this.lz7("pad");var lr5=this.getViewer();var e1=ase_c1(e.changedTouches,this.lx6);if(!(lr5&&e1))return;ase_b(e);var l6a=this.lx7(e1)-this.lb6;var l7a=this.ly7(e1)-this.lc6;this.lb6+=l6a;this.lc6+=l7a;var sd=lr5.lb;if(sd!=_jcv.Vertical)lp9.lr5=ase_d(this.l17(0),lp9.lr5+l6a,this.l17(1)-lp9.lo5);if(sd!=_jcv.Horizontal)lp9.ls5=ase_d(this.l27(0),lp9.ls5+l7a,this.l27(1)-lp9.ln5);this.l38();}
_jvpcp.onTouchEnd=function(e){var lp=this.lz7("root");var lr5=this.getViewer();var e1=ase_c1(e.changedTouches,this.lx6);if(!(lr5&&e1))return;ase_b(e);this.lx6=null;this.ls7();}
JsChartViewer=_jcv;JsViewPortControl=_jvpc;_jcv.loadPendingMap();_jcv.ls8();