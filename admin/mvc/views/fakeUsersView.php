<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
<link type="text/css" rel="stylesheet" href="https://codeinthedark.pt/admin/static/css/style.css" />
<link rel="stylesheet" type="text/css" href="https://codeinthedark.pt/admin/static/css/font-awesome/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Space+Mono:400,700" rel="stylesheet">
<title>Administration</title>
</head>

<body>


<div class="main-container">

    <div class="main-column-left">

        <!-- Admin logo -->
        <h1 class="main-logo">
            <a href="https://codeinthedark.pt/admin/">
                <img src="https://codeinthedark.pt/admin/static/img/logo.png" alt="Code in the Dark"/>
            </a>
        </h1>

        <br><br>

        <!-- SIDE MENU -->
        <nav class="side-menu">
            <a href="https://codeinthedark.pt/admin/users">
                <i class="fa fa-home"></i> Users
            </a>
            <a href="https://codeinthedark.pt/admin/rounds">
                <i class="fa fa-shopping-cart"></i> Rounds
            </a>
            <a href="https://codeinthedark.pt/admin/wall">
                <i class="fa fa-envelope"></i> Wall Board
            </a>
            <a href="https://codeinthedark.pt/admin/socket">
                <i class="fa fa-plus"></i> Main Controller
            </a>
            <a href="https://codeinthedark.pt/vote">
                <i class="fa fa-star"></i> Vote
            </a>
        </nav>

    </div>

    <div class="main-column-right">

        <div class="top-bar">
            <div class="row">

                <div class="col col4 right text-right">
                    <div class="top-menu">
                        <a href="https://codeinthedark.pt/admin/login/logout">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="admin-content">

<div class="page-header">
    <div class="row">
        <div class="col col6 left">
            <h2 class="page-title">
                Users
            </h2>
        </div>
        <div class="col col6 right text-right">

            <a href="https://codeinthedark.pt/admin/users/create/" class="new-item">
                <i class="fa fa-plus-circle"></i> New
            </a>

            <form action="https://codeinthedark.pt/admin/users/search" method="POST" class="search-form">
                <label>Search</label>
                <input type="text" name="search" required/>
            </form>

        </div>
    </div>

    <div class="users-stats">
        <div>Registos: 70</div>
        <div>Viewers: 47</div>
        <div>Players: 23</div>
        <div>Confirmados: 16</div>
    </div>

</div>


<table class="list-table">
    <tr>
        <th class="text-left">Pic</th>
        <th class="text-left">Name</th>
        <th class="text-left">Email</th>
        <th>Confirmation</th>
        <th>Status</th>
        <th>Winner</th>
        <th>Edit</th>
        <th>Trash</th>
    </tr>


                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/111/">
                    <div class="welcome-pic add-background" height="30px" data-src="111.jpg"></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=anacomh@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/111/">
                    anah					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>anacomh@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/111" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/111" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/111" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/111/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/111" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/112/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=filipepaulo726@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/112/">
                    Filipe Paulo					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>filipepaulo726@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/112" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/112" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/112" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/112/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/112" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/113/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=csofia.ro@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/113/">
                    Carla Oliveira					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>csofia.ro@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/113" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/113" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/113" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/113/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/113" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/114/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=alexisfilipegarcia@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/114/">
                    Alexis Garcia					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>alexisfilipegarcia@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/114" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/114" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/114" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/114/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/114" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/115/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jose.rosario@outsytems.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/115/">
                    José Rosário					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jose.rosario@outsytems.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/115" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/115" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/115" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/115/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/115" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/116/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=garcezfigueiredo@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/116/">
                    António Figueiredo					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>garcezfigueiredo@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/116" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/116" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/116" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/116/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/116" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/117/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=leonardoblecher@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/117/">
                    Leonardo Blecher					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>leonardoblecher@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/117" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/117" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/117" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/117/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/117" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/118/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jmcampos@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/118/">
                    João Campos 					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jmcampos@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/118" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/118" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/118" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/118/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/118" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/119/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jose.rosario@outsystems.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/119/">
                    José Rosário					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jose.rosario@outsystems.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/119" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/119" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/119" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/119/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/119" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/120/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=dinis.carvalho@outsystems.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/120/">
                    Dinis Carvalho					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>dinis.carvalho@outsystems.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/120" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/120" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/120" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/120/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/120" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/121/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=filipe.barroso@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/121/">
                    Filipe Barroso					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>filipe.barroso@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/121" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/121" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/121" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/121/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/121" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/122/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=andre.mendes.peixoto@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/122/">
                    André Peixoto					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>andre.mendes.peixoto@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/122" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/122" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/122" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/122/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/122" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/123/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mario@rasgo.xyz&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/123/">
                    Mario					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mario@rasgo.xyz</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/123" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/123" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/123" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/123/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/123" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/124/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=louis.miguel.05@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/124/">
                    Luis Lota					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>louis.miguel.05@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/124" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/124" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/124" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/124/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/124" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/125/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=tomaspalmeirim@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/125/">
                    Tomas Palmeirim					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>tomaspalmeirim@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/125" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/125" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/125" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/125/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/125" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/126/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jtmporfirio@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/126/">
                    João Porfírio					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jtmporfirio@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/126" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/126" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/126" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/126/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/126" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/127/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=carlossoares.cg@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/127/">
                    Carlos Soares					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>carlossoares.cg@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/127" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/127" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/127" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/127/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/127" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/128/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=anagogomes@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/128/">
                    Ana Gomes					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>anagogomes@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/128" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/128" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/128" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/128/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/128" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/129/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=ricardoglsesteves@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/129/">
                    Ricardo Esteves					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>ricardoglsesteves@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/129" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/129" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/129" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/129/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/129" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/130/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mariotvars@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/130/">
                    Mário Miguel Lopes Tavares					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mariotvars@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/130" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/130" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/130" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/130/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/130" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/131/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=maryycunha@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/131/">
                    Mariana Cunha					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>maryycunha@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/131" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/131" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/131" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/131/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/131" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/132/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=claudiam@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/132/">
                    Cláudia Mendes					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>claudiam@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/132" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/132" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/132" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/132/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/132" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/133/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=marianacosta13@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/133/">
                    Mariana Costa					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>marianacosta13@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/133" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/133" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/133" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/133/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/133" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/134/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=vrclaro@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/134/">
                    Vera Claro					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>vrclaro@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/134" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/134" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/134" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/134/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/134" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/135/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=sofia.pestisca@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/135/">
                    Sofia Petisca					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>sofia.pestisca@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/135" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/135" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/135" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/135/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/135" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/136/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=isabeljardim@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/136/">
                    Isabel Jardim					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>isabeljardim@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/136" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/136" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/136" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/136/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/136" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/137/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=leonardont@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/137/">
                    Leonardo Tomás					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>leonardont@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/137" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/137" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/137" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/137/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/137" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/138/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=joanaineshf@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/138/">
                    Joana Ferreira					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>joanaineshf@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/138" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/138" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/138" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/138/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/138" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/139/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=oinotnarosa@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/139/">
                    Luís Rosa					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>oinotnarosa@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/139" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/139" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/139" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/139/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/139" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/140/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=me@andr3.net&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/140/">
                    André Luís					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>me@andr3.net</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/140" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/140" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/140" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/140/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/140" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/141/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mbriito@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/141/">
                    Isabella Brito					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mbriito@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/141" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/141" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/141" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/141/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/141" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/142/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=daniela_paulo7@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/142/">
                    Daniela					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>daniela_paulo7@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/142" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/142" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/142" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/142/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/142" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/143/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=martapcm_88@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/143/">
                    Marta Pinto Correia Martins					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>martapcm_88@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/143" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/143" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/143" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/143/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/143" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/144/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=josemcarneiro@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/144/">
                    José Carneiro					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>josemcarneiro@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/144" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/144" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/144" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/144/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/144" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/145/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=andrewpereira@sapo.pt&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/145/">
                    Andrew Pereira					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>andrewpereira@sapo.pt</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/145" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/145" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/145" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/145/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/145" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/146/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=inesleitao.design@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/146/">
                    Inês Leitão 					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>inesleitao.design@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/146" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/146" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/146" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/146/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/146" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/147/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=danielams.designer@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/147/">
                    DANIELA SANTOS 					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>danielams.designer@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/147" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/147" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/147" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/147/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/147" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/148/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=Joaoeduardoramos@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/148/">
                    João Eduardo					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>Joaoeduardoramos@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/148" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/148" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/148" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/148/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/148" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/149/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=fragosoalexandra@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/149/">
                    Alexandra Fragoso 					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>fragosoalexandra@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/149" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/149" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/149" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/149/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/149" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/150/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=pmferreira@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/150/">
                    Pedro Ferreira					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>pmferreira@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/150" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/150" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/150" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/150/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/150" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/151/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=heko.esteves@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/151/">
                    Ricardo Esteves 					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>heko.esteves@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/151" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/151" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/151" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/151/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/151" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/152/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jose.alexandre.santos97@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/152/">
                    José Santos					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jose.alexandre.santos97@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/152" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/152" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/152" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/152/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/152" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/153/">
                    <div class="welcome-pic add-background" height="30px" data-src="André Pinto153.png"></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=a.pinix@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/153/">
                    André Pinto					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>a.pinix@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/153" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/153" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/153" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/153/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/153" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/154/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=ricardosilva90@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/154/">
                    Ricardo Silva					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>ricardosilva90@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/154" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/154" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/154" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/154/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/154" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/155/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=b.alexandre.p@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/155/">
                    Bruno Pereira					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>b.alexandre.p@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/155" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/155" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/155" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/155/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/155" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/156/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=nunoaapalma@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/156/">
                    Nuno Palma					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>nunoaapalma@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/confirm/156" class="list-visible">
                    <i class="fa fa-check"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/156" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/156" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/156/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/156" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/157/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=afcsantosdg@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/157/">
                    André Santos					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>afcsantosdg@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/157" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/157" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/157" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/157/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/157" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/158/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=Missym@protonmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/158/">
                    Mafalda Barbosa					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>Missym@protonmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/158" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/158" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/158" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/158/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/158" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/159/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=afcsantosdg@ail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/159/">
                    André Santos					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>afcsantosdg@ail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/159" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/159" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/159" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/159/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/159" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/160/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=danystanislau@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/160/">
                    danielle					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>danystanislau@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/160" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/160" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/160" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/160/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/160" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/161/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=ritasdcosta@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/161/">
                    Rita Costa					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>ritasdcosta@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/161" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/161" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/161" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/161/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/161" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/162/">
                    <div class="welcome-pic add-background" height="30px" data-src="162.jpg"></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jeremybenaim@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/162/">
                    Jeremy Benaim					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jeremybenaim@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/162" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/162" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/162" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/162/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/162" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/168/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=patriciavicentemartins@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/168/">
                    Patricia					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>patriciavicentemartins@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/168" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/168" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/168" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/168/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/168" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/169/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=ines.armada.bras@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/169/">
                    Inês Armada Brás					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>ines.armada.bras@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/169" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/169" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/169" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/169/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/169" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/170/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mclexr@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/170/">
                    Michael Fidelis					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mclexr@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/170" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/170" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/170" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/170/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/170" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/171/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=francomathmagal@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/171/">
                    Matheus Franco					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>francomathmagal@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/171" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/171" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/171" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/171/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/171" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/172/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=pedro.carreira.pc@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/172/">
                    PEDRO CARREIRA					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>pedro.carreira.pc@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/172" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/172" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/172" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/172/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/172" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/173/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=manuel.gomes@pestana.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/173/">
                    Manuel					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>manuel.gomes@pestana.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/173" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/173" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/173" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/173/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/173" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/174/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=kateryna.talashova@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/174/">
                    Kateryna Talashova					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>kateryna.talashova@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/174" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/174" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/174" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/174/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/174" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/175/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mykhailo.purish@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/175/">
                    Mykhailo Purish					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mykhailo.purish@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/175" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/175" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/175" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/175/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/175" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/176/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=luismendoncacastro@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/176/">
                    Luis Castro					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>luismendoncacastro@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/176" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/176" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/176" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/176/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/176" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/177/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=monica.a.moura@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/177/">
                    Monica Moura					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>monica.a.moura@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/177" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/177" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/177" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/177/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/177" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/178/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=nelson.rodrigues@mediaweb.pt&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/178/">
                    Nelson Rodrigues					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>nelson.rodrigues@mediaweb.pt</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/178" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/178" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/178" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/178/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/178" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/179/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=jrmsantos15@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/179/">
                    Joao Santos					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>jrmsantos15@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/179" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/179" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/179" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/179/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/179" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/180/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=pedro_the_2@hotmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/180/">
                    Pedro Cruz					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>pedro_the_2@hotmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/180" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/180" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/180" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/180/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/180" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/181/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=bmoura@live.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/181/">
                    Bianca Nobrega					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>bmoura@live.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/181" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/181" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/181" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/181/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/181" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/182/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=neto.lx@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/182/">
                    Ricardo Neto					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>neto.lx@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/182" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/182" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/182" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/182/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/182" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/183/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=dayz.lx@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/183/">
                    Margarida Neto					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>dayz.lx@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/183" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/183" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/183" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/183/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/183" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/184/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=diniscorreia@mac.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/184/">
                    Dinis Correia					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>diniscorreia@mac.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/184" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/viewer/184" class="list-visible">
                        <i class="fa fa-gamepad"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/184" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/184/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/184" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
                <tr>
            <!-- picture -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/185/">
                    <div class="welcome-pic add-background" height="30px" data-src=""></div>
                </a>

                <script src="https://www.avatarapi.com/js.aspx?email=mhcorreia.ws@gmail.com&size=128"></script>

            </td>
            <!-- registration name -->
            <td class="text-left">
                <a href="https://codeinthedark.pt/admin/users/detail/185/">
                    Maria Helena					</a>
            </td>
            <!-- email -->
            <td class="text-left">
                <p>mhcorreia.ws@gmail.com</p>
            </td>

            <!-- Confirmation -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/noconfirm/185" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>
            <!-- Status (Viewer or Competidor) -->
            <td>
                                        <a href="https://codeinthedark.pt/admin/users/player/185" class="list-invisible">
                        <i class="fa fa-eye"></i>
                    </a>

            </td>

            <!-- Lucky (Drawn) -->
            <td>
                                    <a href="https://codeinthedark.pt/admin/users/drawn/185" class="list-invisible">
                    <i class="fa fa-times"></i>
                </a>
                                </td>

            <!-- Edit-->
            <td>
                <a href="https://codeinthedark.pt/admin/users/detail/185/">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            <!-- Remove -->
            <td>
                <a href="https://codeinthedark.pt/admin/users/trash/185" class="delete-item">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>

    <!--END ROW 1 -->


</table>

        </div>

    </div>

</div>


<script type="application/javascript" src="https://codeinthedark.pt/admin/static/js/jquery3.1.1.js"></script>
<!-- Include and initialize datepicker-->
<link  href="https://codeinthedark.pt/admin/static/js/datepicker/dist/datepicker.css" rel="stylesheet" type="text/css">
<script src="https://codeinthedark.pt/admin/static/js/datepicker/dist/datepicker.js"></script>
<script type="application/javascript" src="https://codeinthedark.pt/admin/static/js/script.js"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"3f72a86513","applicationID":"156098783","transactionName":"NlBTYUMFXERQWhZdCw8aZEdYS1NTXFAMGw0PUVRNHxRaRw==","queueTime":0,"applicationTime":893,"atts":"GhdQFwsfT0o=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
