
<!DOCTYPE html>
<html class="no-touch" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(){this.v="1.2.3",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",t=>{this.persisted=t.persisted}),window.addEventListener("DOMContentLoaded",()=>{this._preconnect3rdParties()}),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}_addUserInteractionListener(t){if(document.hidden){t._triggerListener();return}this.triggerEvents.forEach(e=>window.addEventListener(e,t.userEventHandler,{passive:!0})),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler)}_removeUserInteractionListener(){this.triggerEvents.forEach(t=>window.removeEventListener(t,this.userEventHandler,{passive:!0})),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"onclick","rocket-onclick"),this._pendingClickStarted())}_onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this._pendingClickFinished()}_onTouchEnd(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(t){t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this._pendingClickFinished()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach(t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))})}_waitForPendingClicks(){return new Promise(t=>{this._isClickPending?this._pendingClickFinished=t:t()})}_pendingClickStarted(){this._isClickPending=!0}_pendingClickFinished(){this._isClickPending=!1}_renameDOMAttribute(t,e,r){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(r,event.target.getAttribute(e)),event.target.removeAttribute(e))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(e=>{if(e.hasAttribute("src")){let r=new URL(e.src).origin;r!==location.origin&&t.push({src:r,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}}),t=[...new Map(t.map(t=>[JSON.stringify(t),t])).values()],this._batchInjectResourceHints(t,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(this),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._waitForPendingClicks().then(()=>{this._replayClicks()}),this._emptyTrash()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)})}async _transformScript(t){return new Promise((await this._littleBreath(),navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)?e=>{let r=document.createElement("script");[...t.attributes].forEach(t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),r.setAttribute(e,t.nodeValue))}),t.text&&(r.text=t.text),r.hasAttribute("src")?(r.addEventListener("load",e),r.addEventListener("error",e)):(r.text=t.text,e());try{t.parentNode.replaceChild(r,t)}catch(i){e()}}:async e=>{function r(){t.setAttribute("data-rocket-status","failed"),e()}try{let i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");t.text,i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",function r(){t.setAttribute("data-rocket-status","executed"),e()}),t.addEventListener("error",r),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}catch(s){r()}})}async _loadScriptsFromList(t){let e=t.shift();return e&&e.isConnected?(await this._transformScript(e),this._loadScriptsFromList(t)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(t,e){var r=document.createDocumentFragment();t.forEach(t=>{let i=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(i){let n=document.createElement("link");n.href=i,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),r.appendChild(n),this.trash.push(n)}}),document.head.appendChild(r)}_delayEventListeners(t){let e={};function r(t,r){!function t(r){!e[r]&&(e[r]={originalFunctions:{add:r.addEventListener,remove:r.removeEventListener},eventsToRewrite:[]},r.addEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.add.apply(r,arguments)},r.removeEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.remove.apply(r,arguments)});function i(t){return e[r].eventsToRewrite.indexOf(t)>=0?"rocket-"+t:t}}(t),e[t].eventsToRewrite.push(r)}function i(t,e){let r=t[e];Object.defineProperty(t,e,{get:()=>r||function(){},set(i){t["rocket"+e]=r=i}})}r(document,"DOMContentLoaded"),r(window,"DOMContentLoaded"),r(window,"load"),r(window,"pageshow"),r(document,"readystatechange"),i(document,"onreadystatechange"),i(window,"onload"),i(window,"onpageshow")}_delayJQueryReady(t){let e;function r(r){if(r&&r.fn&&!t.allJQueries.includes(r)){r.fn.ready=r.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(r):document.addEventListener("rocket-DOMContentLoaded",()=>e.bind(document)(r)),r([])};let i=r.fn.on;r.fn.on=r.fn.init.prototype.on=function(){if(this[0]===window){function t(t){return t.split(" ").map(t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=t(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach(e=>{let r=arguments[0][e];delete arguments[0][e],arguments[0][t(e)]=r})}return i.apply(this,arguments),this},t.allJQueries.push(r)}e=r}r(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){r(t)}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach(t=>t(window).trigger("rocket-jquery-load")),await this._littleBreath();let t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let r=document.currentScript;r||console.error("WPRocket unable to document.write this: "+e);let i=document.createRange(),n=r.parentElement,s=t.get(r);void 0===s&&(s=r.nextSibling,t.set(r,s));let a=document.createDocumentFragment();i.setStart(a,0),a.appendChild(i.createContextualFragment(e)),n.insertBefore(a,s)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise(t=>setTimeout(t)):new Promise(t=>requestAnimationFrame(t))}_emptyTrash(){this.trash.forEach(t=>t.remove())}static run(){let t=new RocketLazyLoadScripts;t._addUserInteractionListener(t)}}RocketLazyLoadScripts.run();</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<style type="text/css" id="nab-alternative-loader-style"></style>
<script type="text/javascript" id="nelio-ab-testing-kickoff" src="https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/nelio-ab-testing/assets/dist/js/kickoff.js?version=30ff803df82d6805611046ae0cdb7e53" data-cfasync="false"></script>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer>
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];

	const gtm4wp_scrollerscript_debugmode         = false;
	const gtm4wp_scrollerscript_callbacktime      = 100;
	const gtm4wp_scrollerscript_readerlocation    = 150;
	const gtm4wp_scrollerscript_contentelementid  = "content";
	const gtm4wp_scrollerscript_scannertime       = 60;
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com --><script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="nelio-ab-testing-alternative-loader-before" data-cfasync="false">/* <![CDATA[ nelio-ab-testing-alternative-loader-before */window.nabPreloadConfig = [{"type":"scope","scope":["https:\/\/myscholly.com\/30days\/"],"altCount":2},{"type":"scope","scope":["https:\/\/myscholly.com\/finfreedom\/"],"altCount":2},{"type":"scope","scope":["https:\/\/myscholly.com\/stim\/"],"altCount":2}];/* ]]> */</script>
<script type="text/javascript" id="nelio-ab-testing-alternative-loader" src="https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/nelio-ab-testing/assets/dist/js/alternative-loader-fake.js?version=e6f73eb676be7e956852f8e9fa88db68" data-cfasync="false"></script>
<script type="text/javascript" id="nelio-ab-testing-main" src="https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/nelio-ab-testing/assets/dist/js/main.js?version=a7cba51e982b4b8e5f95524274e4f42c" data-cfasync="false"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="nelio-ab-testing-main-after" data-cfasync="false">/* <![CDATA[ nelio-ab-testing-main-after */
		window.nabAddSingleAction( "main-init-available", function() { nab.init( {"alternativePostIds":[91720],"experiments":{"88448":{"alternatives":[{"postId":87826,"postType":"page"},{"name":"30 Days of Giving - Iteration 2","postId":88449}],"goals":[{"id":0,"conversionActions":[{"type":"nab\/form-submission","attributes":{"formType":"nab_gravity_form","formId":2}},{"type":"nab\/form-submission","attributes":{"formType":"nab_gravity_form","formId":60}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_92"}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_2"}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_67"}}]}],"segments":[],"type":"nab\/page"},"87710":{"alternatives":[{"postId":87485,"postType":"page"},{"name":"Financial Freedom - 2nd Variation","postId":87711}],"goals":[{"id":0,"conversionActions":[{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_84"}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_2"}}]}],"segments":[],"type":"nab\/page"},"88646":{"alternatives":[{"postId":86478,"postType":"page"},{"name":"Stimulus - Iteration 2 - V2","postId":88653}],"goals":[{"id":0,"conversionActions":[{"type":"nab\/form-submission","attributes":{"formType":"nab_gravity_form","formId":2}},{"type":"nab\/form-submission","attributes":{"formType":"nab_gravity_form","formId":60}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_60"}},{"type":"nab\/click","attributes":{"mode":"css","value":"#gform_submit_button_95"}}]}],"segments":[],"type":"nab\/page"}},"heatmapTracking":[],"optimizeXPath":true,"gdprCookie":false,"participationChance":100,"siteId":"13e848d3-071a-4fb5-a326-d23cda2e8280","throttle":{"global":0,"woocommerce":5},"timezone":"+00:00","trackingUrl":"https:\/\/api.nelioabtesting.com\/v1\/site\/13e848d3-071a-4fb5-a326-d23cda2e8280\/event","useSendBeacon":true} ); } );
		window.nabAddSingleAction( "main-ready", function() { nab.view( [] ); } );
/* ]]> */</script>

	<!-- This site is optimized with the Yoast SEO plugin v20.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Raising The Next Generation Of Leaders- JAPS Scholarship</title><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;display=swap" /></noscript>
	<meta name="description" content="JAP helps students like you win life-changing scholarships. Start matching with scholarships based on your unique background and accomplishments!" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta name="description" content="Raising The Next Generation Of Leaders- JAPS Scholarship." />

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Scholarship opportunities for students -JAPS Scholarship" />
<meta property="og:description" content="Raising The Next Generation Of Leaders- JAPS Scholarship." />
<meta property="og:site_name" content="JAPSchorlarship" />
<meta property="article:modified_time" content="2023-11-15T00:11:45+00:00" />
<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://myscholly.com/","url":"https://myscholly.com/","name":"Scholly - #1 College Scholarship App - Win Free Money for College - Scholly","isPartOf":{"@id":"https://myscholly.com/#website"},"datePublished":"2022-10-24T11:06:20+00:00","dateModified":"2024-02-01T12:51:12+00:00","description":"Scholly helps students like you win life-changing scholarships. Start matching with scholarships based on your unique background and accomplishments!","breadcrumb":{"@id":"https://myscholly.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://myscholly.com/"]}]},{"@type":"BreadcrumbList","@id":"https://myscholly.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://myscholly.com/#website","url":"https://myscholly.com/","name":"Scholly","description":"Scholarship Search Tool and College Scholarship Finder App","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://myscholly.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//stats.wp.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//d67gbjf2ukphr.cloudfront.net' />
<link rel='dns-prefetch' href='//c0.wp.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link href='https://d67gbjf2ukphr.cloudfront.net' rel='preconnect' />

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='jetpack-videopress-video-block-view-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-videopress/build/block-editor/blocks/video/view.css?minify=false&#038;ver=34ae973733627b74a14e' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='https://c0.wp.com/c/6.2.2/wp-includes/css/classic-themes.min.css' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='contact-form-7-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7' type='text/css' media='all' />

<link rel='stylesheet' id='uncode-style-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/css/style-core.css' type='text/css' media='all' />
<style id='uncode-style-inline-css' type='text/css'>
.style-transparent-bg { background-color:transparent; }.btn-transparent { color:#ffffff !important; background-color:transparent !important; border-color:transparent !important; }.btn-transparent:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-transparent:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-transparent:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:transparent !important;}.btn-transparent.btn-flat:not(.btn-hover-nobg):hover, .btn-transparent.btn-flat:not(.btn-hover-nobg):focus, .btn-transparent.btn-flat:active { background-color:transparent !important; border-color:transparent !important;}.btn-transparent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-transparent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-transparent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:transparent !important; }.btn-transparent.btn-outline { background-color:transparent !important; border-color:transparent !important; }.btn-transparent.btn-outline:not(.btn-text-skin) { color:transparent !important; }.btn-transparent.btn-outline:not(.btn-hover-nobg):hover, .btn-transparent.btn-outline:not(.btn-hover-nobg):focus, btn-transparent.btn-outline:active { background-color:transparent !important; border-color:transparent !important; }.btn-transparent.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-transparent.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-transparent.btn-outline:active { color:#ffffff !important; }.style-light .btn-transparent.btn-text-skin.btn-outline, .style-light .btn-transparent.btn-text-skin:not(.btn-outline):hover, .style-light .btn-transparent.btn-text-skin:not(.btn-outline):focus, .style-light .btn-transparent.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-transparent.btn-text-skin.btn-outline:hover, .style-light .btn-transparent.btn-text-skin.btn-outline:focus, .style-light .btn-transparent.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-transparent.btn-text-skin.btn-outline, .style-light .style-dark .btn-transparent.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-transparent.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-transparent.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-transparent.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-transparent.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-transparent.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-transparent-color { color:transparent !important; fill:transparent !important; }.border-transparent-color { border-color:transparent !important; }.tmb-overlay-gradient-top .style-transparent-bg { background-color:transparent !important; }.tmb-overlay-gradient-bottom .style-transparent-bg:not(.tmb-term-evidence) { background-color:transparent !important; }.style-color-jevc-bg { background-color:#000000; }.btn-color-jevc { color:#ffffff !important; background-color:#000000 !important; border-color:#000000 !important; }.btn-color-jevc:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-jevc:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-jevc:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#000000 !important;}.btn-color-jevc.btn-flat:not(.btn-hover-nobg):hover, .btn-color-jevc.btn-flat:not(.btn-hover-nobg):focus, .btn-color-jevc.btn-flat:active { background-color:#000000 !important; border-color:#000000 !important;}.btn-color-jevc:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-jevc:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-jevc:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#000000 !important; }.btn-color-jevc.btn-outline { background-color:transparent !important; border-color:#000000 !important; }.btn-color-jevc.btn-outline:not(.btn-text-skin) { color:#000000 !important; }.btn-color-jevc.btn-outline:not(.btn-hover-nobg):hover, .btn-color-jevc.btn-outline:not(.btn-hover-nobg):focus, btn-color-jevc.btn-outline:active { background-color:#000000 !important; border-color:#000000 !important; }.btn-color-jevc.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-jevc.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-jevc.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-jevc.btn-text-skin.btn-outline, .style-light .btn-color-jevc.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-jevc.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-jevc.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-jevc.btn-text-skin.btn-outline:hover, .style-light .btn-color-jevc.btn-text-skin.btn-outline:focus, .style-light .btn-color-jevc.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-jevc.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-jevc.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-jevc.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-jevc.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-jevc.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-jevc.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-jevc.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-jevc-color { color:#000000 !important; fill:#000000 !important; }.border-color-jevc-color { border-color:#000000 !important; }.tmb-overlay-gradient-top .style-color-jevc-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-jevc-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #000000 0%, rgba(0, 0, 0, 0) 50%) !important;}.style-color-nhtu-bg { background-color:#101213; }.btn-color-nhtu { color:#ffffff !important; background-color:#101213 !important; border-color:#101213 !important; }.btn-color-nhtu:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-nhtu:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-nhtu:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#101213 !important;}.btn-color-nhtu.btn-flat:not(.btn-hover-nobg):hover, .btn-color-nhtu.btn-flat:not(.btn-hover-nobg):focus, .btn-color-nhtu.btn-flat:active { background-color:#030506 !important; border-color:#030506 !important;}.btn-color-nhtu:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-nhtu:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-nhtu:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#101213 !important; }.btn-color-nhtu.btn-outline { background-color:transparent !important; border-color:#101213 !important; }.btn-color-nhtu.btn-outline:not(.btn-text-skin) { color:#101213 !important; }.btn-color-nhtu.btn-outline:not(.btn-hover-nobg):hover, .btn-color-nhtu.btn-outline:not(.btn-hover-nobg):focus, btn-color-nhtu.btn-outline:active { background-color:#101213 !important; border-color:#101213 !important; }.btn-color-nhtu.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-nhtu.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-nhtu.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-nhtu.btn-text-skin.btn-outline, .style-light .btn-color-nhtu.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-nhtu.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-nhtu.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-nhtu.btn-text-skin.btn-outline:hover, .style-light .btn-color-nhtu.btn-text-skin.btn-outline:focus, .style-light .btn-color-nhtu.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-nhtu.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-nhtu.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-nhtu.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-nhtu.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-nhtu.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-nhtu.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-nhtu.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-nhtu-color { color:#101213 !important; fill:#101213 !important; }.border-color-nhtu-color { border-color:#101213 !important; }.tmb-overlay-gradient-top .style-color-nhtu-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #101213 0%, rgba(16, 18, 19, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-nhtu-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #101213 0%, rgba(16, 18, 19, 0) 50%) !important;}.style-color-wayh-bg { background-color:#141618; }.btn-color-wayh { color:#ffffff !important; background-color:#141618 !important; border-color:#141618 !important; }.btn-color-wayh:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-wayh:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-wayh:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#141618 !important;}.btn-color-wayh.btn-flat:not(.btn-hover-nobg):hover, .btn-color-wayh.btn-flat:not(.btn-hover-nobg):focus, .btn-color-wayh.btn-flat:active { background-color:#07090b !important; border-color:#07090b !important;}.btn-color-wayh:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-wayh:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-wayh:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#141618 !important; }.btn-color-wayh.btn-outline { background-color:transparent !important; border-color:#141618 !important; }.btn-color-wayh.btn-outline:not(.btn-text-skin) { color:#141618 !important; }.btn-color-wayh.btn-outline:not(.btn-hover-nobg):hover, .btn-color-wayh.btn-outline:not(.btn-hover-nobg):focus, btn-color-wayh.btn-outline:active { background-color:#141618 !important; border-color:#141618 !important; }.btn-color-wayh.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-wayh.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-wayh.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-wayh.btn-text-skin.btn-outline, .style-light .btn-color-wayh.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-wayh.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-wayh.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-wayh.btn-text-skin.btn-outline:hover, .style-light .btn-color-wayh.btn-text-skin.btn-outline:focus, .style-light .btn-color-wayh.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-wayh.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-wayh.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-wayh.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-wayh.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-wayh.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-wayh.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-wayh.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-wayh-color { color:#141618 !important; fill:#141618 !important; }.border-color-wayh-color { border-color:#141618 !important; }.tmb-overlay-gradient-top .style-color-wayh-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #141618 0%, rgba(20, 22, 24, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-wayh-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #141618 0%, rgba(20, 22, 24, 0) 50%) !important;}.style-color-rgdb-bg { background-color:#1b1d1f; }.btn-color-rgdb { color:#ffffff !important; background-color:#1b1d1f !important; border-color:#1b1d1f !important; }.btn-color-rgdb:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-rgdb:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-rgdb:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#1b1d1f !important;}.btn-color-rgdb.btn-flat:not(.btn-hover-nobg):hover, .btn-color-rgdb.btn-flat:not(.btn-hover-nobg):focus, .btn-color-rgdb.btn-flat:active { background-color:#0e1012 !important; border-color:#0e1012 !important;}.btn-color-rgdb:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-rgdb:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-rgdb:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#1b1d1f !important; }.btn-color-rgdb.btn-outline { background-color:transparent !important; border-color:#1b1d1f !important; }.btn-color-rgdb.btn-outline:not(.btn-text-skin) { color:#1b1d1f !important; }.btn-color-rgdb.btn-outline:not(.btn-hover-nobg):hover, .btn-color-rgdb.btn-outline:not(.btn-hover-nobg):focus, btn-color-rgdb.btn-outline:active { background-color:#1b1d1f !important; border-color:#1b1d1f !important; }.btn-color-rgdb.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-rgdb.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-rgdb.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-rgdb.btn-text-skin.btn-outline, .style-light .btn-color-rgdb.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-rgdb.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-rgdb.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-rgdb.btn-text-skin.btn-outline:hover, .style-light .btn-color-rgdb.btn-text-skin.btn-outline:focus, .style-light .btn-color-rgdb.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-rgdb.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-rgdb.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-rgdb.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-rgdb.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-rgdb.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-rgdb.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-rgdb.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-rgdb-color { color:#1b1d1f !important; fill:#1b1d1f !important; }.border-color-rgdb-color { border-color:#1b1d1f !important; }.tmb-overlay-gradient-top .style-color-rgdb-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #1b1d1f 0%, rgba(27, 29, 31, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-rgdb-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #1b1d1f 0%, rgba(27, 29, 31, 0) 50%) !important;}.style-color-prif-bg { background-color:#303133; }.btn-color-prif { color:#ffffff !important; background-color:#303133 !important; border-color:#303133 !important; }.btn-color-prif:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-prif:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-prif:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#303133 !important;}.btn-color-prif.btn-flat:not(.btn-hover-nobg):hover, .btn-color-prif.btn-flat:not(.btn-hover-nobg):focus, .btn-color-prif.btn-flat:active { background-color:#232426 !important; border-color:#232426 !important;}.btn-color-prif:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-prif:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-prif:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#303133 !important; }.btn-color-prif.btn-outline { background-color:transparent !important; border-color:#303133 !important; }.btn-color-prif.btn-outline:not(.btn-text-skin) { color:#303133 !important; }.btn-color-prif.btn-outline:not(.btn-hover-nobg):hover, .btn-color-prif.btn-outline:not(.btn-hover-nobg):focus, btn-color-prif.btn-outline:active { background-color:#303133 !important; border-color:#303133 !important; }.btn-color-prif.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-prif.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-prif.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-prif.btn-text-skin.btn-outline, .style-light .btn-color-prif.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-prif.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-prif.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-prif.btn-text-skin.btn-outline:hover, .style-light .btn-color-prif.btn-text-skin.btn-outline:focus, .style-light .btn-color-prif.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-prif.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-prif.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-prif.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-prif.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-prif.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-prif.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-prif.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-prif-color { color:#303133 !important; fill:#303133 !important; }.border-color-prif-color { border-color:#303133 !important; }.tmb-overlay-gradient-top .style-color-prif-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #303133 0%, rgba(48, 49, 51, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-prif-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #303133 0%, rgba(48, 49, 51, 0) 50%) !important;}.style-color-xsdn-bg { background-color:#ffffff; }.btn-color-xsdn { color:#ffffff !important; background-color:#ffffff !important; border-color:#ffffff !important; }.btn-color-xsdn:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-xsdn:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-xsdn:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#ffffff !important;}.btn-color-xsdn.btn-flat:not(.btn-hover-nobg):hover, .btn-color-xsdn.btn-flat:not(.btn-hover-nobg):focus, .btn-color-xsdn.btn-flat:active { background-color:#f2f2f2 !important; border-color:#f2f2f2 !important;}.btn-color-xsdn:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-xsdn:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-xsdn:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#ffffff !important; }.btn-color-xsdn.btn-outline { background-color:transparent !important; border-color:#ffffff !important; }.btn-color-xsdn.btn-outline:not(.btn-text-skin) { color:#ffffff !important; }.btn-color-xsdn.btn-outline:not(.btn-hover-nobg):hover, .btn-color-xsdn.btn-outline:not(.btn-hover-nobg):focus, btn-color-xsdn.btn-outline:active { background-color:#ffffff !important; border-color:#ffffff !important; }.btn-color-xsdn.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-xsdn.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-xsdn.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-xsdn.btn-text-skin.btn-outline, .style-light .btn-color-xsdn.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-xsdn.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-xsdn.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-xsdn.btn-text-skin.btn-outline:hover, .style-light .btn-color-xsdn.btn-text-skin.btn-outline:focus, .style-light .btn-color-xsdn.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-xsdn.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-xsdn.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-xsdn.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-xsdn.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-xsdn.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-xsdn.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-xsdn.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-xsdn-color { color:#ffffff !important; fill:#ffffff !important; }.border-color-xsdn-color { border-color:#ffffff !important; }.tmb-overlay-gradient-top .style-color-xsdn-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #ffffff 0%, rgba(255, 255, 255, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-xsdn-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #ffffff 0%, rgba(255, 255, 255, 0) 50%) !important;}.style-color-lxmt-bg { background-color:#f7f7f7; }.btn-color-lxmt { color:#ffffff !important; background-color:#f7f7f7 !important; border-color:#f7f7f7 !important; }.btn-color-lxmt:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-lxmt:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-lxmt:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#f7f7f7 !important;}.btn-color-lxmt.btn-flat:not(.btn-hover-nobg):hover, .btn-color-lxmt.btn-flat:not(.btn-hover-nobg):focus, .btn-color-lxmt.btn-flat:active { background-color:#eaeaea !important; border-color:#eaeaea !important;}.btn-color-lxmt:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-lxmt:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-lxmt:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#f7f7f7 !important; }.btn-color-lxmt.btn-outline { background-color:transparent !important; border-color:#f7f7f7 !important; }.btn-color-lxmt.btn-outline:not(.btn-text-skin) { color:#f7f7f7 !important; }.btn-color-lxmt.btn-outline:not(.btn-hover-nobg):hover, .btn-color-lxmt.btn-outline:not(.btn-hover-nobg):focus, btn-color-lxmt.btn-outline:active { background-color:#f7f7f7 !important; border-color:#f7f7f7 !important; }.btn-color-lxmt.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-lxmt.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-lxmt.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-lxmt.btn-text-skin.btn-outline, .style-light .btn-color-lxmt.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-lxmt.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-lxmt.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-lxmt.btn-text-skin.btn-outline:hover, .style-light .btn-color-lxmt.btn-text-skin.btn-outline:focus, .style-light .btn-color-lxmt.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-lxmt.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-lxmt.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-lxmt.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-lxmt.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-lxmt.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-lxmt.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-lxmt.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-lxmt-color { color:#f7f7f7 !important; fill:#f7f7f7 !important; }.border-color-lxmt-color { border-color:#f7f7f7 !important; }.tmb-overlay-gradient-top .style-color-lxmt-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #f7f7f7 0%, rgba(247, 247, 247, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-lxmt-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #f7f7f7 0%, rgba(247, 247, 247, 0) 50%) !important;}.style-color-gyho-bg { background-color:#eaeaea; }.btn-color-gyho { color:#ffffff !important; background-color:#eaeaea !important; border-color:#eaeaea !important; }.btn-color-gyho:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-gyho:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-gyho:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#eaeaea !important;}.btn-color-gyho.btn-flat:not(.btn-hover-nobg):hover, .btn-color-gyho.btn-flat:not(.btn-hover-nobg):focus, .btn-color-gyho.btn-flat:active { background-color:#dddddd !important; border-color:#dddddd !important;}.btn-color-gyho:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-gyho:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-gyho:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#eaeaea !important; }.btn-color-gyho.btn-outline { background-color:transparent !important; border-color:#eaeaea !important; }.btn-color-gyho.btn-outline:not(.btn-text-skin) { color:#eaeaea !important; }.btn-color-gyho.btn-outline:not(.btn-hover-nobg):hover, .btn-color-gyho.btn-outline:not(.btn-hover-nobg):focus, btn-color-gyho.btn-outline:active { background-color:#eaeaea !important; border-color:#eaeaea !important; }.btn-color-gyho.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-gyho.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-gyho.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-gyho.btn-text-skin.btn-outline, .style-light .btn-color-gyho.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-gyho.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-gyho.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-gyho.btn-text-skin.btn-outline:hover, .style-light .btn-color-gyho.btn-text-skin.btn-outline:focus, .style-light .btn-color-gyho.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-gyho.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-gyho.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-gyho.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-gyho.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-gyho.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-gyho.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-gyho.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-gyho-color { color:#eaeaea !important; fill:#eaeaea !important; }.border-color-gyho-color { border-color:#eaeaea !important; }.tmb-overlay-gradient-top .style-color-gyho-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #eaeaea 0%, rgba(234, 234, 234, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-gyho-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #eaeaea 0%, rgba(234, 234, 234, 0) 50%) !important;}.style-color-uydo-bg { background-color:#dddddd; }.btn-color-uydo { color:#ffffff !important; background-color:#dddddd !important; border-color:#dddddd !important; }.btn-color-uydo:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-uydo:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-uydo:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#dddddd !important;}.btn-color-uydo.btn-flat:not(.btn-hover-nobg):hover, .btn-color-uydo.btn-flat:not(.btn-hover-nobg):focus, .btn-color-uydo.btn-flat:active { background-color:#d0d0d0 !important; border-color:#d0d0d0 !important;}.btn-color-uydo:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-uydo:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-uydo:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#dddddd !important; }.btn-color-uydo.btn-outline { background-color:transparent !important; border-color:#dddddd !important; }.btn-color-uydo.btn-outline:not(.btn-text-skin) { color:#dddddd !important; }.btn-color-uydo.btn-outline:not(.btn-hover-nobg):hover, .btn-color-uydo.btn-outline:not(.btn-hover-nobg):focus, btn-color-uydo.btn-outline:active { background-color:#dddddd !important; border-color:#dddddd !important; }.btn-color-uydo.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-uydo.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-uydo.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-uydo.btn-text-skin.btn-outline, .style-light .btn-color-uydo.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-uydo.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-uydo.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-uydo.btn-text-skin.btn-outline:hover, .style-light .btn-color-uydo.btn-text-skin.btn-outline:focus, .style-light .btn-color-uydo.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-uydo.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-uydo.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-uydo.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-uydo.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-uydo.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-uydo.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-uydo.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-uydo-color { color:#dddddd !important; fill:#dddddd !important; }.border-color-uydo-color { border-color:#dddddd !important; }.tmb-overlay-gradient-top .style-color-uydo-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #dddddd 0%, rgba(221, 221, 221, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-uydo-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #dddddd 0%, rgba(221, 221, 221, 0) 50%) !important;}.style-color-wvjs-bg { background-color:#777777; }.btn-color-wvjs { color:#ffffff !important; background-color:#777777 !important; border-color:#777777 !important; }.btn-color-wvjs:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-wvjs:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-wvjs:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#777777 !important;}.btn-color-wvjs.btn-flat:not(.btn-hover-nobg):hover, .btn-color-wvjs.btn-flat:not(.btn-hover-nobg):focus, .btn-color-wvjs.btn-flat:active { background-color:#6a6a6a !important; border-color:#6a6a6a !important;}.btn-color-wvjs:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-wvjs:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-wvjs:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#777777 !important; }.btn-color-wvjs.btn-outline { background-color:transparent !important; border-color:#777777 !important; }.btn-color-wvjs.btn-outline:not(.btn-text-skin) { color:#777777 !important; }.btn-color-wvjs.btn-outline:not(.btn-hover-nobg):hover, .btn-color-wvjs.btn-outline:not(.btn-hover-nobg):focus, btn-color-wvjs.btn-outline:active { background-color:#777777 !important; border-color:#777777 !important; }.btn-color-wvjs.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-wvjs.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-wvjs.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-wvjs.btn-text-skin.btn-outline, .style-light .btn-color-wvjs.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-wvjs.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-wvjs.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-wvjs.btn-text-skin.btn-outline:hover, .style-light .btn-color-wvjs.btn-text-skin.btn-outline:focus, .style-light .btn-color-wvjs.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-wvjs.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-wvjs.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-wvjs.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-wvjs.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-wvjs.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-wvjs.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-wvjs.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-wvjs-color { color:#777777 !important; fill:#777777 !important; }.border-color-wvjs-color { border-color:#777777 !important; }.tmb-overlay-gradient-top .style-color-wvjs-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #777777 0%, rgba(119, 119, 119, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-wvjs-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #777777 0%, rgba(119, 119, 119, 0) 50%) !important;}.style-color-vyce-bg { background-color:#0cb4ce; }.btn-color-vyce { color:#ffffff !important; background-color:#0cb4ce !important; border-color:#0cb4ce !important; }.btn-color-vyce:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-vyce:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-vyce:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#0cb4ce !important;}.btn-color-vyce.btn-flat:not(.btn-hover-nobg):hover, .btn-color-vyce.btn-flat:not(.btn-hover-nobg):focus, .btn-color-vyce.btn-flat:active { background-color:#00a7c1 !important; border-color:#00a7c1 !important;}.btn-color-vyce:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-vyce:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-vyce:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#0cb4ce !important; }.btn-color-vyce.btn-outline { background-color:transparent !important; border-color:#0cb4ce !important; }.btn-color-vyce.btn-outline:not(.btn-text-skin) { color:#0cb4ce !important; }.btn-color-vyce.btn-outline:not(.btn-hover-nobg):hover, .btn-color-vyce.btn-outline:not(.btn-hover-nobg):focus, btn-color-vyce.btn-outline:active { background-color:#0cb4ce !important; border-color:#0cb4ce !important; }.btn-color-vyce.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-vyce.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-vyce.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-vyce.btn-text-skin.btn-outline, .style-light .btn-color-vyce.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-vyce.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-vyce.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-vyce.btn-text-skin.btn-outline:hover, .style-light .btn-color-vyce.btn-text-skin.btn-outline:focus, .style-light .btn-color-vyce.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-vyce.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-vyce.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-vyce.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-vyce.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-vyce.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-vyce.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-vyce.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-vyce-color { color:#0cb4ce !important; fill:#0cb4ce !important; }.border-color-vyce-color { border-color:#0cb4ce !important; }.tmb-overlay-gradient-top .style-color-vyce-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #0cb4ce 0%, rgba(12, 180, 206, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-vyce-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #0cb4ce 0%, rgba(12, 180, 206, 0) 50%) !important;}.style-color-210407-bg { background-color:#006cff; }.btn-color-210407 { color:#ffffff !important; background-color:#006cff !important; border-color:#006cff !important; }.btn-color-210407:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-210407:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-210407:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#006cff !important;}.btn-color-210407.btn-flat:not(.btn-hover-nobg):hover, .btn-color-210407.btn-flat:not(.btn-hover-nobg):focus, .btn-color-210407.btn-flat:active { background-color:#005ff2 !important; border-color:#005ff2 !important;}.btn-color-210407:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-210407:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-210407:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#006cff !important; }.btn-color-210407.btn-outline { background-color:transparent !important; border-color:#006cff !important; }.btn-color-210407.btn-outline:not(.btn-text-skin) { color:#006cff !important; }.btn-color-210407.btn-outline:not(.btn-hover-nobg):hover, .btn-color-210407.btn-outline:not(.btn-hover-nobg):focus, btn-color-210407.btn-outline:active { background-color:#006cff !important; border-color:#006cff !important; }.btn-color-210407.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-210407.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-210407.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-210407.btn-text-skin.btn-outline, .style-light .btn-color-210407.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-210407.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-210407.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-210407.btn-text-skin.btn-outline:hover, .style-light .btn-color-210407.btn-text-skin.btn-outline:focus, .style-light .btn-color-210407.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-210407.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-210407.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-210407.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-210407.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-210407.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-210407.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-210407.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-210407-color { color:#006cff !important; fill:#006cff !important; }.border-color-210407-color { border-color:#006cff !important; }.tmb-overlay-gradient-top .style-color-210407-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #006cff 0%, rgba(0, 108, 255, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-210407-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #006cff 0%, rgba(0, 108, 255, 0) 50%) !important;}.style-color-482803-bg { background-color:#6442ff; }.btn-color-482803 { color:#ffffff !important; background-color:#6442ff !important; border-color:#6442ff !important; }.btn-color-482803:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-482803:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-482803:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#6442ff !important;}.btn-color-482803.btn-flat:not(.btn-hover-nobg):hover, .btn-color-482803.btn-flat:not(.btn-hover-nobg):focus, .btn-color-482803.btn-flat:active { background-color:#5735f2 !important; border-color:#5735f2 !important;}.btn-color-482803:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-482803:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-482803:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#6442ff !important; }.btn-color-482803.btn-outline { background-color:transparent !important; border-color:#6442ff !important; }.btn-color-482803.btn-outline:not(.btn-text-skin) { color:#6442ff !important; }.btn-color-482803.btn-outline:not(.btn-hover-nobg):hover, .btn-color-482803.btn-outline:not(.btn-hover-nobg):focus, btn-color-482803.btn-outline:active { background-color:#6442ff !important; border-color:#6442ff !important; }.btn-color-482803.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-482803.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-482803.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-482803.btn-text-skin.btn-outline, .style-light .btn-color-482803.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-482803.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-482803.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-482803.btn-text-skin.btn-outline:hover, .style-light .btn-color-482803.btn-text-skin.btn-outline:focus, .style-light .btn-color-482803.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-482803.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-482803.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-482803.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-482803.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-482803.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-482803.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-482803.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-482803-color { color:#6442ff !important; fill:#6442ff !important; }.border-color-482803-color { border-color:#6442ff !important; }.tmb-overlay-gradient-top .style-color-482803-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #6442ff 0%, rgba(100, 66, 255, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-482803-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #6442ff 0%, rgba(100, 66, 255, 0) 50%) !important;}.style-color-742106-bg { background-color:#43cb83; }.btn-color-742106 { color:#ffffff !important; background-color:#43cb83 !important; border-color:#43cb83 !important; }.btn-color-742106:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-742106:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-742106:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#43cb83 !important;}.btn-color-742106.btn-flat:not(.btn-hover-nobg):hover, .btn-color-742106.btn-flat:not(.btn-hover-nobg):focus, .btn-color-742106.btn-flat:active { background-color:#36be76 !important; border-color:#36be76 !important;}.btn-color-742106:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-742106:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-742106:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#43cb83 !important; }.btn-color-742106.btn-outline { background-color:transparent !important; border-color:#43cb83 !important; }.btn-color-742106.btn-outline:not(.btn-text-skin) { color:#43cb83 !important; }.btn-color-742106.btn-outline:not(.btn-hover-nobg):hover, .btn-color-742106.btn-outline:not(.btn-hover-nobg):focus, btn-color-742106.btn-outline:active { background-color:#43cb83 !important; border-color:#43cb83 !important; }.btn-color-742106.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-742106.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-742106.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-742106.btn-text-skin.btn-outline, .style-light .btn-color-742106.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-742106.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-742106.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-742106.btn-text-skin.btn-outline:hover, .style-light .btn-color-742106.btn-text-skin.btn-outline:focus, .style-light .btn-color-742106.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-742106.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-742106.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-742106.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-742106.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-742106.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-742106.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-742106.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-742106-color { color:#43cb83 !important; fill:#43cb83 !important; }.border-color-742106-color { border-color:#43cb83 !important; }.tmb-overlay-gradient-top .style-color-742106-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #43cb83 0%, rgba(67, 203, 131, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-742106-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #43cb83 0%, rgba(67, 203, 131, 0) 50%) !important;}.style-color-632047-bg { background-color:#c92228; }.btn-color-632047 { color:#ffffff !important; background-color:#c92228 !important; border-color:#c92228 !important; }.btn-color-632047:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-632047:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-632047:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#c92228 !important;}.btn-color-632047.btn-flat:not(.btn-hover-nobg):hover, .btn-color-632047.btn-flat:not(.btn-hover-nobg):focus, .btn-color-632047.btn-flat:active { background-color:#bc151b !important; border-color:#bc151b !important;}.btn-color-632047:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-632047:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-632047:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#c92228 !important; }.btn-color-632047.btn-outline { background-color:transparent !important; border-color:#c92228 !important; }.btn-color-632047.btn-outline:not(.btn-text-skin) { color:#c92228 !important; }.btn-color-632047.btn-outline:not(.btn-hover-nobg):hover, .btn-color-632047.btn-outline:not(.btn-hover-nobg):focus, btn-color-632047.btn-outline:active { background-color:#c92228 !important; border-color:#c92228 !important; }.btn-color-632047.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-632047.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-632047.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-632047.btn-text-skin.btn-outline, .style-light .btn-color-632047.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-632047.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-632047.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-632047.btn-text-skin.btn-outline:hover, .style-light .btn-color-632047.btn-text-skin.btn-outline:focus, .style-light .btn-color-632047.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-632047.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-632047.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-632047.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-632047.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-632047.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-632047.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-632047.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-632047-color { color:#c92228 !important; fill:#c92228 !important; }.border-color-632047-color { border-color:#c92228 !important; }.tmb-overlay-gradient-top .style-color-632047-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #c92228 0%, rgba(201, 34, 40, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-632047-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #c92228 0%, rgba(201, 34, 40, 0) 50%) !important;}.style-color-149363-bg { background-color:#e9168c; }.btn-color-149363 { color:#ffffff !important; background-color:#e9168c !important; border-color:#e9168c !important; }.btn-color-149363:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-149363:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-149363:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#e9168c !important;}.btn-color-149363.btn-flat:not(.btn-hover-nobg):hover, .btn-color-149363.btn-flat:not(.btn-hover-nobg):focus, .btn-color-149363.btn-flat:active { background-color:#dc097f !important; border-color:#dc097f !important;}.btn-color-149363:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-149363:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-149363:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#e9168c !important; }.btn-color-149363.btn-outline { background-color:transparent !important; border-color:#e9168c !important; }.btn-color-149363.btn-outline:not(.btn-text-skin) { color:#e9168c !important; }.btn-color-149363.btn-outline:not(.btn-hover-nobg):hover, .btn-color-149363.btn-outline:not(.btn-hover-nobg):focus, btn-color-149363.btn-outline:active { background-color:#e9168c !important; border-color:#e9168c !important; }.btn-color-149363.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-149363.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-149363.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-149363.btn-text-skin.btn-outline, .style-light .btn-color-149363.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-149363.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-149363.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-149363.btn-text-skin.btn-outline:hover, .style-light .btn-color-149363.btn-text-skin.btn-outline:focus, .style-light .btn-color-149363.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-149363.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-149363.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-149363.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-149363.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-149363.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-149363.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-149363.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-149363-color { color:#e9168c !important; fill:#e9168c !important; }.border-color-149363-color { border-color:#e9168c !important; }.tmb-overlay-gradient-top .style-color-149363-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #e9168c 0%, rgba(233, 22, 140, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-149363-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #e9168c 0%, rgba(233, 22, 140, 0) 50%) !important;}.style-color-202097-bg { background-color:#ffea01; }.btn-color-202097 { color:#ffffff !important; background-color:#ffea01 !important; border-color:#ffea01 !important; }.btn-color-202097:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-202097:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-202097:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#ffea01 !important;}.btn-color-202097.btn-flat:not(.btn-hover-nobg):hover, .btn-color-202097.btn-flat:not(.btn-hover-nobg):focus, .btn-color-202097.btn-flat:active { background-color:#f2dd00 !important; border-color:#f2dd00 !important;}.btn-color-202097:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-202097:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-202097:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#ffea01 !important; }.btn-color-202097.btn-outline { background-color:transparent !important; border-color:#ffea01 !important; }.btn-color-202097.btn-outline:not(.btn-text-skin) { color:#ffea01 !important; }.btn-color-202097.btn-outline:not(.btn-hover-nobg):hover, .btn-color-202097.btn-outline:not(.btn-hover-nobg):focus, btn-color-202097.btn-outline:active { background-color:#ffea01 !important; border-color:#ffea01 !important; }.btn-color-202097.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-202097.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-202097.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-202097.btn-text-skin.btn-outline, .style-light .btn-color-202097.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-202097.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-202097.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-202097.btn-text-skin.btn-outline:hover, .style-light .btn-color-202097.btn-text-skin.btn-outline:focus, .style-light .btn-color-202097.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-202097.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-202097.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-202097.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-202097.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-202097.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-202097.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-202097.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-202097-color { color:#ffea01 !important; fill:#ffea01 !important; }.border-color-202097-color { border-color:#ffea01 !important; }.tmb-overlay-gradient-top .style-color-202097-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #ffea01 0%, rgba(255, 234, 1, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-202097-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #ffea01 0%, rgba(255, 234, 1, 0) 50%) !important;}.style-color-143410-bg { background-color:#b4975a; }.btn-color-143410 { color:#ffffff !important; background-color:#b4975a !important; border-color:#b4975a !important; }.btn-color-143410:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-143410:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-143410:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#b4975a !important;}.btn-color-143410.btn-flat:not(.btn-hover-nobg):hover, .btn-color-143410.btn-flat:not(.btn-hover-nobg):focus, .btn-color-143410.btn-flat:active { background-color:#a78a4d !important; border-color:#a78a4d !important;}.btn-color-143410:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-143410:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-143410:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#b4975a !important; }.btn-color-143410.btn-outline { background-color:transparent !important; border-color:#b4975a !important; }.btn-color-143410.btn-outline:not(.btn-text-skin) { color:#b4975a !important; }.btn-color-143410.btn-outline:not(.btn-hover-nobg):hover, .btn-color-143410.btn-outline:not(.btn-hover-nobg):focus, btn-color-143410.btn-outline:active { background-color:#b4975a !important; border-color:#b4975a !important; }.btn-color-143410.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-143410.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-143410.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-143410.btn-text-skin.btn-outline, .style-light .btn-color-143410.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-143410.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-143410.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-143410.btn-text-skin.btn-outline:hover, .style-light .btn-color-143410.btn-text-skin.btn-outline:focus, .style-light .btn-color-143410.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-143410.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-143410.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-143410.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-143410.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-143410.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-143410.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-143410.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-143410-color { color:#b4975a !important; fill:#b4975a !important; }.border-color-143410-color { border-color:#b4975a !important; }.tmb-overlay-gradient-top .style-color-143410-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #b4975a 0%, rgba(180, 151, 90, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-143410-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #b4975a 0%, rgba(180, 151, 90, 0) 50%) !important;}.style-color-143431-bg { background:radial-gradient(circle at left top , rgb(12, 180, 206) , rgb(0, 108, 255) 100%); }.btn-color-143431 { color:#ffffff !important; background:radial-gradient(circle at left top , rgb(12, 180, 206) , rgb(0, 108, 255) 100%);border-image:radial-gradient(circle at left top , rgb(12, 180, 206) , rgb(0, 108, 255) 100%);}.text-color-143431-color > * { color:rgb(12, 180, 206) !important; }.text-color-143431-color:before { color:rgb(12, 180, 206); }.text-color-143431-color > * { -webkit-text-fill-color:transparent !important; -webkit-background-clip:text !important; background:radial-gradient(circle at left top , rgb(12, 180, 206) , rgb(0, 108, 255) 100%); }.style-color-105898-bg { background:radial-gradient(circle at left top , rgb(12, 180, 206) 9% , rgb(0, 108, 255) 48% , rgb(100, 66, 255) 91%); }.btn-color-105898 { color:#ffffff !important; background:radial-gradient(circle at left top , rgb(12, 180, 206) 9% , rgb(0, 108, 255) 48% , rgb(100, 66, 255) 91%);border-image:radial-gradient(circle at left top , rgb(12, 180, 206) 9% , rgb(0, 108, 255) 48% , rgb(100, 66, 255) 91%);}.text-color-105898-color > * { color:rgb(12, 180, 206) !important; }.text-color-105898-color:before { color:rgb(12, 180, 206); }.text-color-105898-color > * { -webkit-text-fill-color:transparent !important; -webkit-background-clip:text !important; background:radial-gradient(circle at left top , rgb(12, 180, 206) 9% , rgb(0, 108, 255) 48% , rgb(100, 66, 255) 91%); }.style-color-188981-bg { background-color:#3259f1; }.btn-color-188981 { color:#ffffff !important; background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-color-188981:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-188981:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-188981:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#3259f1 !important;}.btn-color-188981.btn-flat:not(.btn-hover-nobg):hover, .btn-color-188981.btn-flat:not(.btn-hover-nobg):focus, .btn-color-188981.btn-flat:active { background-color:#254ce4 !important; border-color:#254ce4 !important;}.btn-color-188981:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-188981:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-188981:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#3259f1 !important; }.btn-color-188981.btn-outline { background-color:transparent !important; border-color:#3259f1 !important; }.btn-color-188981.btn-outline:not(.btn-text-skin) { color:#3259f1 !important; }.btn-color-188981.btn-outline:not(.btn-hover-nobg):hover, .btn-color-188981.btn-outline:not(.btn-hover-nobg):focus, btn-color-188981.btn-outline:active { background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-color-188981.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-188981.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-188981.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-188981.btn-text-skin.btn-outline, .style-light .btn-color-188981.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-188981.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-188981.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-188981.btn-text-skin.btn-outline:hover, .style-light .btn-color-188981.btn-text-skin.btn-outline:focus, .style-light .btn-color-188981.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-188981.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-188981.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-188981.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-188981.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-188981.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-188981.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-188981.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-188981-color { color:#3259f1 !important; fill:#3259f1 !important; }.border-color-188981-color { border-color:#3259f1 !important; }.tmb-overlay-gradient-top .style-color-188981-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-188981-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.style-color-124112-bg { background-color:#ffea9d; }.btn-color-124112 { color:#ffffff !important; background-color:#ffea9d !important; border-color:#ffea9d !important; }.btn-color-124112:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-124112:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-124112:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#ffea9d !important;}.btn-color-124112.btn-flat:not(.btn-hover-nobg):hover, .btn-color-124112.btn-flat:not(.btn-hover-nobg):focus, .btn-color-124112.btn-flat:active { background-color:#f2dd90 !important; border-color:#f2dd90 !important;}.btn-color-124112:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-124112:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-124112:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#ffea9d !important; }.btn-color-124112.btn-outline { background-color:transparent !important; border-color:#ffea9d !important; }.btn-color-124112.btn-outline:not(.btn-text-skin) { color:#ffea9d !important; }.btn-color-124112.btn-outline:not(.btn-hover-nobg):hover, .btn-color-124112.btn-outline:not(.btn-hover-nobg):focus, btn-color-124112.btn-outline:active { background-color:#ffea9d !important; border-color:#ffea9d !important; }.btn-color-124112.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-124112.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-124112.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-124112.btn-text-skin.btn-outline, .style-light .btn-color-124112.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-124112.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-124112.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-124112.btn-text-skin.btn-outline:hover, .style-light .btn-color-124112.btn-text-skin.btn-outline:focus, .style-light .btn-color-124112.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-124112.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-124112.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-124112.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-124112.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-124112.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-124112.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-124112.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-124112-color { color:#ffea9d !important; fill:#ffea9d !important; }.border-color-124112-color { border-color:#ffea9d !important; }.tmb-overlay-gradient-top .style-color-124112-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #ffea9d 0%, rgba(255, 234, 157, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-124112-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #ffea9d 0%, rgba(255, 234, 157, 0) 50%) !important;}.style-color-157288-bg { background-color:#e5e0f7; }.btn-color-157288 { color:#ffffff !important; background-color:#e5e0f7 !important; border-color:#e5e0f7 !important; }.btn-color-157288:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-157288:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-157288:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#e5e0f7 !important;}.btn-color-157288.btn-flat:not(.btn-hover-nobg):hover, .btn-color-157288.btn-flat:not(.btn-hover-nobg):focus, .btn-color-157288.btn-flat:active { background-color:#d8d3ea !important; border-color:#d8d3ea !important;}.btn-color-157288:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-157288:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-157288:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#e5e0f7 !important; }.btn-color-157288.btn-outline { background-color:transparent !important; border-color:#e5e0f7 !important; }.btn-color-157288.btn-outline:not(.btn-text-skin) { color:#e5e0f7 !important; }.btn-color-157288.btn-outline:not(.btn-hover-nobg):hover, .btn-color-157288.btn-outline:not(.btn-hover-nobg):focus, btn-color-157288.btn-outline:active { background-color:#e5e0f7 !important; border-color:#e5e0f7 !important; }.btn-color-157288.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-157288.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-157288.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-157288.btn-text-skin.btn-outline, .style-light .btn-color-157288.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-157288.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-157288.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-157288.btn-text-skin.btn-outline:hover, .style-light .btn-color-157288.btn-text-skin.btn-outline:focus, .style-light .btn-color-157288.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-157288.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-157288.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-157288.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-157288.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-157288.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-157288.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-157288.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-157288-color { color:#e5e0f7 !important; fill:#e5e0f7 !important; }.border-color-157288-color { border-color:#e5e0f7 !important; }.tmb-overlay-gradient-top .style-color-157288-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #e5e0f7 0%, rgba(229, 224, 247, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-157288-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #e5e0f7 0%, rgba(229, 224, 247, 0) 50%) !important;}.style-color-194238-bg { background-color:#e0edf9; }.btn-color-194238 { color:#ffffff !important; background-color:#e0edf9 !important; border-color:#e0edf9 !important; }.btn-color-194238:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-194238:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-194238:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#e0edf9 !important;}.btn-color-194238.btn-flat:not(.btn-hover-nobg):hover, .btn-color-194238.btn-flat:not(.btn-hover-nobg):focus, .btn-color-194238.btn-flat:active { background-color:#d3e0ec !important; border-color:#d3e0ec !important;}.btn-color-194238:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-194238:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-194238:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#e0edf9 !important; }.btn-color-194238.btn-outline { background-color:transparent !important; border-color:#e0edf9 !important; }.btn-color-194238.btn-outline:not(.btn-text-skin) { color:#e0edf9 !important; }.btn-color-194238.btn-outline:not(.btn-hover-nobg):hover, .btn-color-194238.btn-outline:not(.btn-hover-nobg):focus, btn-color-194238.btn-outline:active { background-color:#e0edf9 !important; border-color:#e0edf9 !important; }.btn-color-194238.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-194238.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-194238.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-194238.btn-text-skin.btn-outline, .style-light .btn-color-194238.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-194238.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-194238.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-194238.btn-text-skin.btn-outline:hover, .style-light .btn-color-194238.btn-text-skin.btn-outline:focus, .style-light .btn-color-194238.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-194238.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-194238.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-194238.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-194238.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-194238.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-194238.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-194238.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-194238-color { color:#e0edf9 !important; fill:#e0edf9 !important; }.border-color-194238-color { border-color:#e0edf9 !important; }.tmb-overlay-gradient-top .style-color-194238-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #e0edf9 0%, rgba(224, 237, 249, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-194238-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #e0edf9 0%, rgba(224, 237, 249, 0) 50%) !important;}.style-color-127557-bg { background-color:#fafafa; }.btn-color-127557 { color:#ffffff !important; background-color:#fafafa !important; border-color:#fafafa !important; }.btn-color-127557:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-127557:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-127557:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#fafafa !important;}.btn-color-127557.btn-flat:not(.btn-hover-nobg):hover, .btn-color-127557.btn-flat:not(.btn-hover-nobg):focus, .btn-color-127557.btn-flat:active { background-color:#ededed !important; border-color:#ededed !important;}.btn-color-127557:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-127557:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-127557:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#fafafa !important; }.btn-color-127557.btn-outline { background-color:transparent !important; border-color:#fafafa !important; }.btn-color-127557.btn-outline:not(.btn-text-skin) { color:#fafafa !important; }.btn-color-127557.btn-outline:not(.btn-hover-nobg):hover, .btn-color-127557.btn-outline:not(.btn-hover-nobg):focus, btn-color-127557.btn-outline:active { background-color:#fafafa !important; border-color:#fafafa !important; }.btn-color-127557.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-127557.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-127557.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-127557.btn-text-skin.btn-outline, .style-light .btn-color-127557.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-127557.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-127557.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-127557.btn-text-skin.btn-outline:hover, .style-light .btn-color-127557.btn-text-skin.btn-outline:focus, .style-light .btn-color-127557.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-127557.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-127557.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-127557.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-127557.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-127557.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-127557.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-127557.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-127557-color { color:#fafafa !important; fill:#fafafa !important; }.border-color-127557-color { border-color:#fafafa !important; }.tmb-overlay-gradient-top .style-color-127557-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #fafafa 0%, rgba(250, 250, 250, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-127557-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #fafafa 0%, rgba(250, 250, 250, 0) 50%) !important;}.style-color-445956-bg { background-color:#ff0000; }.btn-color-445956 { color:#ffffff !important; background-color:#ff0000 !important; border-color:#ff0000 !important; }.btn-color-445956:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-445956:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-445956:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#ff0000 !important;}.btn-color-445956.btn-flat:not(.btn-hover-nobg):hover, .btn-color-445956.btn-flat:not(.btn-hover-nobg):focus, .btn-color-445956.btn-flat:active { background-color:#f20000 !important; border-color:#f20000 !important;}.btn-color-445956:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-445956:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-445956:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#ff0000 !important; }.btn-color-445956.btn-outline { background-color:transparent !important; border-color:#ff0000 !important; }.btn-color-445956.btn-outline:not(.btn-text-skin) { color:#ff0000 !important; }.btn-color-445956.btn-outline:not(.btn-hover-nobg):hover, .btn-color-445956.btn-outline:not(.btn-hover-nobg):focus, btn-color-445956.btn-outline:active { background-color:#ff0000 !important; border-color:#ff0000 !important; }.btn-color-445956.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-445956.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-445956.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-445956.btn-text-skin.btn-outline, .style-light .btn-color-445956.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-445956.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-445956.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-445956.btn-text-skin.btn-outline:hover, .style-light .btn-color-445956.btn-text-skin.btn-outline:focus, .style-light .btn-color-445956.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-445956.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-445956.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-445956.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-445956.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-445956.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-445956.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-445956.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-445956-color { color:#ff0000 !important; fill:#ff0000 !important; }.border-color-445956-color { border-color:#ff0000 !important; }.tmb-overlay-gradient-top .style-color-445956-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #ff0000 0%, rgba(255, 0, 0, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-445956-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #ff0000 0%, rgba(255, 0, 0, 0) 50%) !important;}.style-color-175530-bg { background-color:#3259f1; }.btn-color-175530 { color:#ffffff !important; background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-color-175530:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-175530:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-175530:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#3259f1 !important;}.btn-color-175530.btn-flat:not(.btn-hover-nobg):hover, .btn-color-175530.btn-flat:not(.btn-hover-nobg):focus, .btn-color-175530.btn-flat:active { background-color:#254ce4 !important; border-color:#254ce4 !important;}.btn-color-175530:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-175530:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-175530:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#3259f1 !important; }.btn-color-175530.btn-outline { background-color:transparent !important; border-color:#3259f1 !important; }.btn-color-175530.btn-outline:not(.btn-text-skin) { color:#3259f1 !important; }.btn-color-175530.btn-outline:not(.btn-hover-nobg):hover, .btn-color-175530.btn-outline:not(.btn-hover-nobg):focus, btn-color-175530.btn-outline:active { background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-color-175530.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-175530.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-175530.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-175530.btn-text-skin.btn-outline, .style-light .btn-color-175530.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-175530.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-175530.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-175530.btn-text-skin.btn-outline:hover, .style-light .btn-color-175530.btn-text-skin.btn-outline:focus, .style-light .btn-color-175530.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-175530.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-175530.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-175530.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-175530.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-175530.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-175530.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-175530.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-175530-color { color:#3259f1 !important; fill:#3259f1 !important; }.border-color-175530-color { border-color:#3259f1 !important; }.tmb-overlay-gradient-top .style-color-175530-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-175530-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.style-color-187162-bg { background-color:#0e153b; }.btn-color-187162 { color:#ffffff !important; background-color:#0e153b !important; border-color:#0e153b !important; }.btn-color-187162:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-187162:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-187162:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#0e153b !important;}.btn-color-187162.btn-flat:not(.btn-hover-nobg):hover, .btn-color-187162.btn-flat:not(.btn-hover-nobg):focus, .btn-color-187162.btn-flat:active { background-color:#01082e !important; border-color:#01082e !important;}.btn-color-187162:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-187162:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-187162:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#0e153b !important; }.btn-color-187162.btn-outline { background-color:transparent !important; border-color:#0e153b !important; }.btn-color-187162.btn-outline:not(.btn-text-skin) { color:#0e153b !important; }.btn-color-187162.btn-outline:not(.btn-hover-nobg):hover, .btn-color-187162.btn-outline:not(.btn-hover-nobg):focus, btn-color-187162.btn-outline:active { background-color:#0e153b !important; border-color:#0e153b !important; }.btn-color-187162.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-187162.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-187162.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-187162.btn-text-skin.btn-outline, .style-light .btn-color-187162.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-187162.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-187162.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-187162.btn-text-skin.btn-outline:hover, .style-light .btn-color-187162.btn-text-skin.btn-outline:focus, .style-light .btn-color-187162.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-187162.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-187162.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-187162.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-187162.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-187162.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-187162.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-187162.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-187162-color { color:#0e153b !important; fill:#0e153b !important; }.border-color-187162-color { border-color:#0e153b !important; }.tmb-overlay-gradient-top .style-color-187162-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #0e153b 0%, rgba(14, 21, 59, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-187162-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #0e153b 0%, rgba(14, 21, 59, 0) 50%) !important;}.style-color-945462-bg { background-color:#f6faff; }.btn-color-945462 { color:#ffffff !important; background-color:#f6faff !important; border-color:#f6faff !important; }.btn-color-945462:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-945462:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-945462:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#f6faff !important;}.btn-color-945462.btn-flat:not(.btn-hover-nobg):hover, .btn-color-945462.btn-flat:not(.btn-hover-nobg):focus, .btn-color-945462.btn-flat:active { background-color:#e9edf2 !important; border-color:#e9edf2 !important;}.btn-color-945462:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-945462:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-945462:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#f6faff !important; }.btn-color-945462.btn-outline { background-color:transparent !important; border-color:#f6faff !important; }.btn-color-945462.btn-outline:not(.btn-text-skin) { color:#f6faff !important; }.btn-color-945462.btn-outline:not(.btn-hover-nobg):hover, .btn-color-945462.btn-outline:not(.btn-hover-nobg):focus, btn-color-945462.btn-outline:active { background-color:#f6faff !important; border-color:#f6faff !important; }.btn-color-945462.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-945462.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-945462.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-945462.btn-text-skin.btn-outline, .style-light .btn-color-945462.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-945462.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-945462.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-945462.btn-text-skin.btn-outline:hover, .style-light .btn-color-945462.btn-text-skin.btn-outline:focus, .style-light .btn-color-945462.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-945462.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-945462.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-945462.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-945462.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-945462.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-945462.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-945462.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-945462-color { color:#f6faff !important; fill:#f6faff !important; }.border-color-945462-color { border-color:#f6faff !important; }.tmb-overlay-gradient-top .style-color-945462-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #f6faff 0%, rgba(246, 250, 255, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-945462-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #f6faff 0%, rgba(246, 250, 255, 0) 50%) !important;}.style-color-270839-bg { background-color:#ff0000; }.btn-color-270839 { color:#ffffff !important; background-color:#ff0000 !important; border-color:#ff0000 !important; }.btn-color-270839:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-270839:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-270839:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#ff0000 !important;}.btn-color-270839.btn-flat:not(.btn-hover-nobg):hover, .btn-color-270839.btn-flat:not(.btn-hover-nobg):focus, .btn-color-270839.btn-flat:active { background-color:#f20000 !important; border-color:#f20000 !important;}.btn-color-270839:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-270839:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-270839:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#ff0000 !important; }.btn-color-270839.btn-outline { background-color:transparent !important; border-color:#ff0000 !important; }.btn-color-270839.btn-outline:not(.btn-text-skin) { color:#ff0000 !important; }.btn-color-270839.btn-outline:not(.btn-hover-nobg):hover, .btn-color-270839.btn-outline:not(.btn-hover-nobg):focus, btn-color-270839.btn-outline:active { background-color:#ff0000 !important; border-color:#ff0000 !important; }.btn-color-270839.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-270839.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-270839.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-270839.btn-text-skin.btn-outline, .style-light .btn-color-270839.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-270839.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-270839.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-270839.btn-text-skin.btn-outline:hover, .style-light .btn-color-270839.btn-text-skin.btn-outline:focus, .style-light .btn-color-270839.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-270839.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-270839.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-270839.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-270839.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-270839.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-270839.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-270839.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-270839-color { color:#ff0000 !important; fill:#ff0000 !important; }.border-color-270839-color { border-color:#ff0000 !important; }.tmb-overlay-gradient-top .style-color-270839-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #ff0000 0%, rgba(255, 0, 0, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-270839-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #ff0000 0%, rgba(255, 0, 0, 0) 50%) !important;}.style-color-199791-bg { background-color:#313131; }.btn-color-199791 { color:#ffffff !important; background-color:#313131 !important; border-color:#313131 !important; }.btn-color-199791:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-199791:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-199791:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#313131 !important;}.btn-color-199791.btn-flat:not(.btn-hover-nobg):hover, .btn-color-199791.btn-flat:not(.btn-hover-nobg):focus, .btn-color-199791.btn-flat:active { background-color:#242424 !important; border-color:#242424 !important;}.btn-color-199791:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-199791:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-199791:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#313131 !important; }.btn-color-199791.btn-outline { background-color:transparent !important; border-color:#313131 !important; }.btn-color-199791.btn-outline:not(.btn-text-skin) { color:#313131 !important; }.btn-color-199791.btn-outline:not(.btn-hover-nobg):hover, .btn-color-199791.btn-outline:not(.btn-hover-nobg):focus, btn-color-199791.btn-outline:active { background-color:#313131 !important; border-color:#313131 !important; }.btn-color-199791.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-199791.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-199791.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-199791.btn-text-skin.btn-outline, .style-light .btn-color-199791.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-199791.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-199791.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-199791.btn-text-skin.btn-outline:hover, .style-light .btn-color-199791.btn-text-skin.btn-outline:focus, .style-light .btn-color-199791.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-199791.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-199791.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-199791.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-199791.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-199791.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-199791.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-199791.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-199791-color { color:#313131 !important; fill:#313131 !important; }.border-color-199791-color { border-color:#313131 !important; }.tmb-overlay-gradient-top .style-color-199791-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #313131 0%, rgba(49, 49, 49, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-199791-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #313131 0%, rgba(49, 49, 49, 0) 50%) !important;}.style-#f5f6fa-bg { background-color:#f5f6fa; }.btn-#f5f6fa { color:#ffffff !important; background-color:#f5f6fa !important; border-color:#f5f6fa !important; }.btn-#f5f6fa:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-#f5f6fa:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-#f5f6fa:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#f5f6fa !important;}.btn-#f5f6fa.btn-flat:not(.btn-hover-nobg):hover, .btn-#f5f6fa.btn-flat:not(.btn-hover-nobg):focus, .btn-#f5f6fa.btn-flat:active { background-color:#e8e9ed !important; border-color:#e8e9ed !important;}.btn-#f5f6fa:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-#f5f6fa:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-#f5f6fa:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#f5f6fa !important; }.btn-#f5f6fa.btn-outline { background-color:transparent !important; border-color:#f5f6fa !important; }.btn-#f5f6fa.btn-outline:not(.btn-text-skin) { color:#f5f6fa !important; }.btn-#f5f6fa.btn-outline:not(.btn-hover-nobg):hover, .btn-#f5f6fa.btn-outline:not(.btn-hover-nobg):focus, btn-#f5f6fa.btn-outline:active { background-color:#f5f6fa !important; border-color:#f5f6fa !important; }.btn-#f5f6fa.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-#f5f6fa.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-#f5f6fa.btn-outline:active { color:#ffffff !important; }.style-light .btn-#f5f6fa.btn-text-skin.btn-outline, .style-light .btn-#f5f6fa.btn-text-skin:not(.btn-outline):hover, .style-light .btn-#f5f6fa.btn-text-skin:not(.btn-outline):focus, .style-light .btn-#f5f6fa.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-#f5f6fa.btn-text-skin.btn-outline:hover, .style-light .btn-#f5f6fa.btn-text-skin.btn-outline:focus, .style-light .btn-#f5f6fa.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-#f5f6fa.btn-text-skin.btn-outline, .style-light .style-dark .btn-#f5f6fa.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-#f5f6fa.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-#f5f6fa.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-#f5f6fa.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-#f5f6fa.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-#f5f6fa.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-#f5f6fa-color { color:#f5f6fa !important; fill:#f5f6fa !important; }.border-#f5f6fa-color { border-color:#f5f6fa !important; }.tmb-overlay-gradient-top .style-#f5f6fa-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #f5f6fa 0%, rgba(245, 246, 250, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-#f5f6fa-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #f5f6fa 0%, rgba(245, 246, 250, 0) 50%) !important;}.style-color-834173-bg { background-color:#f5f6fa; }.btn-color-834173 { color:#ffffff !important; background-color:#f5f6fa !important; border-color:#f5f6fa !important; }.btn-color-834173:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-color-834173:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-color-834173:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#f5f6fa !important;}.btn-color-834173.btn-flat:not(.btn-hover-nobg):hover, .btn-color-834173.btn-flat:not(.btn-hover-nobg):focus, .btn-color-834173.btn-flat:active { background-color:#e8e9ed !important; border-color:#e8e9ed !important;}.btn-color-834173:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-color-834173:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-color-834173:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#f5f6fa !important; }.btn-color-834173.btn-outline { background-color:transparent !important; border-color:#f5f6fa !important; }.btn-color-834173.btn-outline:not(.btn-text-skin) { color:#f5f6fa !important; }.btn-color-834173.btn-outline:not(.btn-hover-nobg):hover, .btn-color-834173.btn-outline:not(.btn-hover-nobg):focus, btn-color-834173.btn-outline:active { background-color:#f5f6fa !important; border-color:#f5f6fa !important; }.btn-color-834173.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-color-834173.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-color-834173.btn-outline:active { color:#ffffff !important; }.style-light .btn-color-834173.btn-text-skin.btn-outline, .style-light .btn-color-834173.btn-text-skin:not(.btn-outline):hover, .style-light .btn-color-834173.btn-text-skin:not(.btn-outline):focus, .style-light .btn-color-834173.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-color-834173.btn-text-skin.btn-outline:hover, .style-light .btn-color-834173.btn-text-skin.btn-outline:focus, .style-light .btn-color-834173.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-color-834173.btn-text-skin.btn-outline, .style-light .style-dark .btn-color-834173.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-color-834173.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-color-834173.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-color-834173.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-color-834173.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-color-834173.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-color-834173-color { color:#f5f6fa !important; fill:#f5f6fa !important; }.border-color-834173-color { border-color:#f5f6fa !important; }.tmb-overlay-gradient-top .style-color-834173-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #f5f6fa 0%, rgba(245, 246, 250, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-color-834173-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #f5f6fa 0%, rgba(245, 246, 250, 0) 50%) !important;}.style-accent-bg { background-color:#3259f1; }.btn-accent { color:#ffffff !important; background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-accent:not(.btn-hover-nobg):not(.icon-animated):hover, .btn-accent:not(.btn-hover-nobg):not(.icon-animated):focus, .btn-accent:not(.btn-hover-nobg):not(.icon-animated):active { background-color:transparent !important; border-color:#3259f1 !important;}.btn-accent.btn-flat:not(.btn-hover-nobg):hover, .btn-accent.btn-flat:not(.btn-hover-nobg):focus, .btn-accent.btn-flat:active { background-color:#254ce4 !important; border-color:#254ce4 !important;}.btn-accent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover, .btn-accent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):focus, .btn-accent:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):active { color:#3259f1 !important; }.btn-accent.btn-outline { background-color:transparent !important; border-color:#3259f1 !important; }.btn-accent.btn-outline:not(.btn-text-skin) { color:#3259f1 !important; }.btn-accent.btn-outline:not(.btn-hover-nobg):hover, .btn-accent.btn-outline:not(.btn-hover-nobg):focus, btn-accent.btn-outline:active { background-color:#3259f1 !important; border-color:#3259f1 !important; }.btn-accent.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):hover, .btn-accent.btn-outline:not(.btn-hover-nobg):not(.btn-text-skin):not(.icon-animated):focus, btn-accent.btn-outline:active { color:#ffffff !important; }.style-light .btn-accent.btn-text-skin.btn-outline, .style-light .btn-accent.btn-text-skin:not(.btn-outline):hover, .style-light .btn-accent.btn-text-skin:not(.btn-outline):focus, .style-light .btn-accent.btn-text-skin:not(.btn-outline):active { color:#303133 !important; }.style-light .btn-accent.btn-text-skin.btn-outline:hover, .style-light .btn-accent.btn-text-skin.btn-outline:focus, .style-light .btn-accent.btn-text-skin.btn-outline:active { color:#ffffff !important; }.style-light .style-dark .btn-accent.btn-text-skin.btn-outline, .style-light .style-dark .btn-accent.btn-text-skin:not(.btn-outline):hover, .style-light .style-dark .btn-accent.btn-text-skin:not(.btn-outline):focus, .style-light .style-dark .btn-accent.btn-text-skin:not(.btn-outline):active { color:#ffffff !important; }.style-light .style-dark .btn-accent.btn-text-skin.btn-outline:hover, .style-light .style-dark .btn-accent.btn-text-skin.btn-outline:focus, .style-light .style-dark .btn-accent.btn-text-skin.btn-outline:active { color:#303133 !important; }.text-accent-color { color:#3259f1 !important; fill:#3259f1 !important; }.border-accent-color { border-color:#3259f1 !important; }.tmb-overlay-gradient-top .style-accent-bg { background-color:transparent !important; background-image:linear-gradient(to bottom, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.tmb-overlay-gradient-bottom .style-accent-bg:not(.tmb-term-evidence) { background-color:transparent !important; background-image:linear-gradient(to top, #3259f1 0%, rgba(50, 89, 241, 0) 50%) !important;}.style-light-bg { background-color:#ffffff; }.border-light-bg { border-color:#ffffff; }.style-dark-bg { background-color:#141618; }.border-dark-bg { border-color:#141618; }.btn-white.btn-outline:hover, .btn-white.btn-outline:focus, .btn-white.btn-outline:active { color:#333333 !important; }.font-460423 { font-family:Poppins !important; }.btn-custom-typo.font-460423 { font-family:Poppins !important; }.font-135944 { font-family:Poppins !important; }.btn-custom-typo.font-135944 { font-family:Poppins !important; }.font-116703 { font-family:Poppins !important; }.btn-custom-typo.font-116703 { font-family:Poppins !important; }.font-917563 { font-family:Poppins !important; }.btn-custom-typo.font-917563 { font-family:Poppins !important; }.fontsize-160000 { font-size:12px; }.fontsize-155944 { font-size:50px; }@media (max-width:959px) { .fontsize-155944 { font-size:33.333333333333px; }}@media (max-width:320px) { .fontsize-155944 { font-size:28px; }}.fontsize-338686 { font-size:75px; }@media (max-width:959px) { .fontsize-338686 { font-size:50px; }}@media (max-width:569px) { .fontsize-338686 { font-size:35px; }}@media (max-width:320px) { .fontsize-338686 { font-size:28px; }}.fontsize-445851 { font-size:100px; }@media (max-width:959px) { .fontsize-445851 { font-size:66.666666666667px; }}@media (max-width:569px) { .fontsize-445851 { font-size:35px; }}@media (max-width:320px) { .fontsize-445851 { font-size:28px; }}.fontsize-739966 { font-size:125px; }@media (max-width:959px) { .fontsize-739966 { font-size:83.333333333333px; }}@media (max-width:569px) { .fontsize-739966 { font-size:35px; }}@media (max-width:320px) { .fontsize-739966 { font-size:28px; }}.fontsize-160206 { font-size:150px; }@media (max-width:959px) { .fontsize-160206 { font-size:100px; }}@media (max-width:569px) { .fontsize-160206 { font-size:35px; }}@media (max-width:320px) { .fontsize-160206 { font-size:28px; }}.fontheight-524109 { line-height:1.75; }.fontheight-357766 { line-height:1.5; }.fontheight-179065 { line-height:1; }.fontheight-161249 { line-height:.85; }.fontheight-578034 { line-height:.5; }.fontspace-781688 { letter-spacing:-0.02em !important; }.fontspace-111509 { letter-spacing:-0.05em !important; }.fontspace-210350 { letter-spacing:.2em !important; }.fontspace-135905 { letter-spacing:.5em !important; }.fontspace-238483 { letter-spacing:1em !important; }.fontspace-210067 { letter-spacing:2em !important; }body,p,li,dt,dd,dl,address,label,pre,code { font-size:18px; }.text-lead, .text-lead > * { font-size:18px; }.module-text-lead,.module-text-lead > *,.module-text-lead p,.module-text-lead li,.module-text-lead dt,.module-text-lead dd,.module-text-lead dl,.module-text-lead address,.module-text-lead label,.module-text-lead small,.uncode-wc-module.text-lead pre,.module-text-lead code { font-size:18px; }@media (max-width:1499px) { .uncode-slider .text-lead > * { font-size:16px; } }@media (max-width:959px) { .uncode-slider .text-lead > * { font-size:13px; } }.text-small, .text-small > * { font-size:13px; }.module-text-small,.module-text-small > *,.module-text-small p,.module-text-small li,.module-text-small dt,.module-text-small dd,.module-text-small dl,.module-text-small address,.module-text-small label,.module-text-small small,.uncode-wc-module.text-small pre,.module-text-small code { font-size:13px; }@media (max-width:1499px) { .uncode-slider .text-small > * { font-size:11.555555555556px; } }@media (max-width:959px) { .uncode-slider .text-small > * { font-size:9.3888888888889px; } }h1:not([class*="fontsize-"]),.h1:not([class*="fontsize-"]) { font-size:36px; }@media (max-width:959px) { h1:not([class*="fontsize-"]),.h1:not([class*="fontsize-"]) { font-size:24px; }}h2:not([class*="fontsize-"]),.h2:not([class*="fontsize-"]) { font-size:29px; }h3:not([class*="fontsize-"]),.h3:not([class*="fontsize-"]) { font-size:24px; }h4:not([class*="fontsize-"]),.h4:not([class*="fontsize-"]) { font-size:20px; }h5:not([class*="fontsize-"]),.h5:not([class*="fontsize-"]) { font-size:17px; }h6:not([class*="fontsize-"]),.h6:not([class*="fontsize-"]) { font-size:14px; }body {font-weight:400;font-family:Poppins;}::selection {background:#3259f1;color:#ffffff !important;}::-moz-selection {background:#3259f1;color:#ffffff !important;}.font-ui-fixed,.post-info,.widget-container .widget-title,#comments .comments-title,#respond .comments-title,#comments #reply-title,#respond #reply-title,.uncode-share h6 {font-family:Poppins;font-weight:600;letter-spacing:.05em;text-transform:uppercase;font-size:12px;}.font-ui,#main-logo .text-logo,.comment-content .comment-reply-link span,.comment-content .comment-reply-link {font-family:Poppins;font-weight:600;letter-spacing:.05em;text-transform:uppercase;}.filter-menu,.grid-filters ul.menu-smart a:not(.social-menu-link),.grid-filters .mobile-toggle-trigger:not(.social-menu-link),.grid-filters .extra-filters-wrapper .menu-smart > li > a:not(.social-menu-link),.isotope-filters .uncode-woocommerce-sorting__link,.isotope-filters .uncode-woocommerce-toggle-widgetized-cb__link {font-family:Poppins;font-weight:600;letter-spacing:.05em;text-transform:uppercase;font-size:11px;}.style-light {color:#777777;}.style-dark {color:#ffffff;}hr.separator-break {width:90px;border-top-width:2px;}hr.separator-break.separator-accent {border-color:#3259f1 !important;}.style-dark .body-color,.style-light .style-dark .body-color {color:#ffffff;}.style-light .body-color,.style-dark .style-light .body-color {color:#777777;}.style-dark .body-color-light,.style-light .style-dark .body-color-light {color:#ffffff;}.style-light .body-color-light,.style-dark .style-light .body-color-light {color:#a9a9a9;}.style-dark .link,.style-light .style-dark .link,.style-dark a,.style-light .style-dark a,.style-dark input[type=checkbox]:checked:before,.style-light .style-dark input[type=checkbox]:checked:before {color:#ffffff;}.style-light .link,.style-dark .style-light .link,.style-light a,.style-dark .style-light a,.style-light input[type=checkbox]:checked:before,.style-dark .style-light input[type=checkbox]:checked:before {color:#303133;}.style-dark .link-hover,.style-light .style-dark .link-hover,.style-dark a:not(.btn-text-skin):hover,.style-light .style-dark a:not(.btn-text-skin):hover,.style-dark a:not(.btn-text-skin):focus,.style-light .style-dark a:not(.btn-text-skin):focus,.style-dark a.active,.style-light .style-dark a.active,.style-dark .tmb .t-entry-text .t-entry-title a:hover,.style-light .style-dark .tmb .t-entry-text .t-entry-title a:hover,.style-dark .tmb .t-entry-text .t-entry-title a:focus,.style-light .style-dark .tmb .t-entry-text .t-entry-title a:focus,.style-dark .tmb-content-under.tmb .t-entry p.t-entry-author a:hover span,.style-light .style-dark .tmb-content-under.tmb .t-entry p.t-entry-author a:hover span,.style-dark .tmb-content-lateral.tmb .t-entry p.t-entry-author a:hover span,.style-light .style-dark .tmb-content-lateral.tmb .t-entry p.t-entry-author a:hover span,.style-dark .tmb .t-entry p.t-entry-comments .extras a:hover i,.style-light .style-dark .tmb .t-entry p.t-entry-comments .extras a:hover i,.style-dark .tmb .t-entry p.t-entry-comments .extras a.active i,.style-light .style-dark .tmb .t-entry p.t-entry-comments .extras a.active i,.style-dark .tmb .t-entry p.t-entry-comments .extras a:focus i,.style-light .style-dark .tmb .t-entry p.t-entry-comments .extras a:focus i,.style-dark .drop-hover-accent.uncode-post-titles .tmb:hover .t-entry-title *,.style-light .style-dark .drop-hover-accent.uncode-post-titles .tmb:hover .t-entry-title *,.style-dark .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:hover,.style-light .style-dark .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:hover,.style-dark .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:hover,.style-light .style-dark .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:hover,.style-dark .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:focus,.style-light .style-dark .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:focus,.style-dark .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:focus,.style-light .style-dark .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:focus,.style-dark .widget_nav_menu li.active > a,.style-light .style-dark .widget_nav_menu li.active > a,.style-dark div[class*=sharer-].share-button label:hover,.style-light .style-dark div[class*=sharer-].share-button label:hover,.style-dark div[class*=sharer-].share-button label:focus,.style-light .style-dark div[class*=sharer-].share-button label:focus {color:#3259f1;}.style-light .link-hover,.style-dark .style-light .link-hover,.style-light a:not(.btn-text-skin):hover,.style-dark .style-light a:not(.btn-text-skin):hover,.style-light a:not(.btn-text-skin):focus,.style-dark .style-light a:not(.btn-text-skin):focus,.style-light a.active,.style-dark .style-light a.active,.style-light .tmb .t-entry-text .t-entry-title a:hover,.style-dark .style-light .tmb .t-entry-text .t-entry-title a:hover,.style-light .tmb .t-entry-text .t-entry-title a:focus,.style-dark .style-light .tmb .t-entry-text .t-entry-title a:focus,.style-light .tmb-content-under.tmb .t-entry p.t-entry-author a:hover span,.style-dark .style-light .tmb-content-under.tmb .t-entry p.t-entry-author a:hover span,.style-light .tmb-content-lateral.tmb .t-entry p.t-entry-author a:hover span,.style-dark .style-light .tmb-content-lateral.tmb .t-entry p.t-entry-author a:hover span,.style-light .tmb .t-entry p.t-entry-comments .extras a:hover i,.style-dark .style-light .tmb .t-entry p.t-entry-comments .extras a:hover i,.style-light .tmb .t-entry p.t-entry-comments .extras a.active i,.style-dark .style-light .tmb .t-entry p.t-entry-comments .extras a.active i,.style-light .tmb .t-entry p.t-entry-comments .extras a:focus i,.style-dark .style-light .tmb .t-entry p.t-entry-comments .extras a:focus i,.style-light .drop-hover-accent.uncode-post-titles .tmb:hover .t-entry-title *,.style-dark .style-light .drop-hover-accent.uncode-post-titles .tmb:hover .t-entry-title *,.style-light .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:hover,.style-dark .style-light .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:hover,.style-light .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:hover,.style-dark .style-light .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:hover,.style-light .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:focus,.style-dark .style-light .tmb.tmb-table .t-inside-post-table a.t-entry-table-typography:focus,.style-light .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:focus,.style-dark .style-light .tmb.tmb-table .t-inside-post-table .t-entry-table-typography a:focus,.style-light .widget_nav_menu li.active > a,.style-dark .style-light .widget_nav_menu li.active > a,.style-light div[class*=sharer-].share-button label:hover,.style-dark .style-light div[class*=sharer-].share-button label:hover,.style-light div[class*=sharer-].share-button label:focus,.style-dark .style-light div[class*=sharer-].share-button label:focus {color:#3259f1;}.style-dark .text-stroke,.style-light .style-dark .text-stroke {color:transparent;-webkit-text-stroke:1px #ffffff;text-stroke:1px #ffffff;}.style-light .text-stroke,.style-dark .style-light .text-stroke {color:transparent;-webkit-text-stroke:1px #303133;text-stroke:1px #303133;}.style-dark .link-bg,.style-light .style-dark .link-bg {background-color:#3259f1;}.style-light .link-bg,.style-dark .style-light .link-bg {background-color:#3259f1;}.style-dark .text-default-color,.style-light .style-dark .text-default-color {color:#ffffff;}.style-light .text-default-color,.style-dark .style-light .text-default-color {color:#303133;}.color-accent-border,blockquote {border-color:#3259f1;}.color-accent-background,mark,.mejs-controls .mejs-time-rail .mejs-time-loaded {background-color:#3259f1;}.color-accent-background-all,.btn-hover-accent span.btn-gradient-el:hover {background:#3259f1;}.color-accent-color,body.textual-accent-color .post-content > div p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn),body.textual-accent-color .post-content > div ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn),body.textual-accent-color .post-content > div dt a:not(.btn),body.textual-accent-color .post-content > div dd a:not(.btn),body.textual-accent-color .post-content > div dl a:not(.btn),body.textual-accent-color .post-content > div address a:not(.btn),body.textual-accent-color .post-content > div label a:not(.btn),body.textual-accent-color .post-content > div small a:not(.btn),body.textual-accent-color .row-container .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn),body.textual-accent-color .row-container .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn),body.textual-accent-color .row-container .post-content dt a:not(.btn),body.textual-accent-color .row-container .post-content dd a:not(.btn),body.textual-accent-color .row-container .post-content dl a:not(.btn),body.textual-accent-color .row-container .post-content address a:not(.btn),body.textual-accent-color .row-container .post-content label a:not(.btn),body.textual-accent-color .row-container .post-content small a:not(.btn),.btn-hover-accent:hover,.btn-gradient-underline.btn-hover-accent:hover:before,.nav-tabs > li.active > a,.panel-title.active > a,.panel-title.active > a span:after,.plan-accent.plan .plan-title > h3,.plan-accent.plan .plan-price .price,.wpcf7 .wpcf7-mail-sent-ok,.wpcf7 .wpcf7-validation-errors,.wpcf7 span.wpcf7-not-valid-tip {color:#3259f1 !important;}.color-accent-darker,body.textual-accent-color .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a.active:not(.btn),body.textual-accent-color .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a.active:not(.btn),body.textual-accent-color .post-content dt a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content dt a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content dt a.active:not(.btn),body.textual-accent-color .post-content dd a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content dd a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content dd a.active:not(.btn),body.textual-accent-color .post-content dl a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content dl a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content dl a.active:not(.btn),body.textual-accent-color .post-content address a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content address a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content address a.active:not(.btn),body.textual-accent-color .post-content label a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content label a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content label a.active:not(.btn),body.textual-accent-color .post-content small a:not(.btn-text-skin):hover:not(.btn),body.textual-accent-color .post-content small a:not(.btn-text-skin):focus:not(.btn),body.textual-accent-color .post-content small a.active:not(.btn) {color:#1940d8 !important;}.headings-style,h1,h2,h3,h4,h5,h6,.heading-text > p,.tmb .t-entry .t-entry-cat,.tmb .t-entry .t-entry-title,.tmb .t-entry .t-entry-table-typography,:not(.enhanced-atc).tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a,.vc_pie_chart .vc_pie_chart_value,ul.dwls_search_results .daves-wordpress-live-search_title .search-title {letter-spacing:0.00em;font-weight:500;font-family:Poppins;}.style-dark .headings-color,.style-light .style-dark .headings-color,.style-dark .detail-container .detail-label,.style-light .style-dark .detail-container .detail-label,.style-dark h1,.style-light .style-dark h1,.style-dark h2,.style-light .style-dark h2,.style-dark h3,.style-light .style-dark h3,.style-dark h4,.style-light .style-dark h4,.style-dark h5,.style-light .style-dark h5,.style-dark h6,.style-light .style-dark h6,.style-dark .heading-text > p,.style-light .style-dark .heading-text > p,.style-dark p b,.style-light .style-dark p b,.style-dark p strong,.style-light .style-dark p strong,.style-dark dl dt,.style-light .style-dark dl dt,.style-dark dl.variation dt,.style-light .style-dark dl.variation dt,.style-dark dl.variation dd,.style-light .style-dark dl.variation dd,.style-dark blockquote p,.style-light .style-dark blockquote p,.style-dark table thead,.style-light .style-dark table thead,.style-dark form p,.style-light .style-dark form p,.style-dark .panel-title > a > span:after,.style-light .style-dark .panel-title > a > span:after,.style-dark .plan .plan-price .price,.style-light .style-dark .plan .plan-price .price,.style-dark .detail-label,.style-light .style-dark .detail-label,.style-dark .header-wrapper .header-scrolldown i,.style-light .style-dark .header-wrapper .header-scrolldown i,.style-dark .header-wrapper .header-content-inner blockquote.pullquote p:first-child,.style-light .style-dark .header-wrapper .header-content-inner blockquote.pullquote p:first-child,.style-dark .header-main-container .post-info,.style-light .style-dark .header-main-container .post-info,.style-dark .header-main-container .post-info a,.style-light .style-dark .header-main-container .post-info a,.style-dark .widget-container.widget_top_rated_products li:before,.style-light .style-dark .widget-container.widget_top_rated_products li:before,.style-dark .widget-container.widget_recent_reviews li:before,.style-light .style-dark .widget-container.widget_recent_reviews li:before,.style-dark .widget-container.widget_latest_tweets_widget .tweet-text:before,.style-light .style-dark .widget-container.widget_latest_tweets_widget .tweet-text:before,.style-dark .widget-container.widget_latest_tweets .tweet-text:before,.style-light .style-dark .widget-container.widget_latest_tweets .tweet-text:before,.style-dark .comment-content .comment-author a,.style-light .style-dark .comment-content .comment-author a,.style-dark .comment-content .comment-author span,.style-light .style-dark .comment-content .comment-author span,.style-dark div[class*=sharer-].share-button label,.style-light .style-dark div[class*=sharer-].share-button label,.style-dark .share-button.share-inline .social.top li,.style-light .style-dark .share-button.share-inline .social.top li,.style-dark .vc_progress_bar .vc_progress_label,.style-light .style-dark .vc_progress_bar .vc_progress_label,.style-dark .vc_pie_chart .vc_pie_chart_value,.style-light .style-dark .vc_pie_chart .vc_pie_chart_value,.style-dark .counter,.style-light .style-dark .counter,.style-dark .counter-suffix,.style-light .style-dark .counter-suffix,.style-dark .counter-prefix,.style-light .style-dark .counter-prefix,.style-dark .countdown,.style-light .style-dark .countdown,.style-dark ul.dwls_search_results .daves-wordpress-live-search_title .search-title,.style-light .style-dark ul.dwls_search_results .daves-wordpress-live-search_title .search-title,.style-dark ul.dwls_search_results .daves-wordpress-live-search_author,.style-light .style-dark ul.dwls_search_results .daves-wordpress-live-search_author {color:#ffffff;}.style-light .headings-color,.style-dark .style-light .headings-color,.style-light .detail-container .detail-label,.style-dark .style-light .detail-container .detail-label,.style-light h1,.style-dark .style-light h1,.style-light h2,.style-dark .style-light h2,.style-light h3,.style-dark .style-light h3,.style-light h4,.style-dark .style-light h4,.style-light h5,.style-dark .style-light h5,.style-light h6,.style-dark .style-light h6,.style-light .heading-text > p,.style-dark .style-light .heading-text > p,.style-light p b,.style-dark .style-light p b,.style-light p strong,.style-dark .style-light p strong,.style-light dl dt,.style-dark .style-light dl dt,.style-light dl.variation dt,.style-dark .style-light dl.variation dt,.style-light dl.variation dd,.style-dark .style-light dl.variation dd,.style-light blockquote p,.style-dark .style-light blockquote p,.style-light table thead,.style-dark .style-light table thead,.style-light form p,.style-dark .style-light form p,.style-light .panel-title > a > span:after,.style-dark .style-light .panel-title > a > span:after,.style-light .plan .plan-price .price,.style-dark .style-light .plan .plan-price .price,.style-light .detail-label,.style-dark .style-light .detail-label,.style-light .header-wrapper .header-scrolldown i,.style-dark .style-light .header-wrapper .header-scrolldown i,.style-light .header-wrapper .header-content-inner blockquote.pullquote p:first-child,.style-dark .style-light .header-wrapper .header-content-inner blockquote.pullquote p:first-child,.style-light .header-main-container .post-info,.style-dark .style-light .header-main-container .post-info,.style-light .header-main-container .post-info a,.style-dark .style-light .header-main-container .post-info a,.style-light .widget-container.widget_top_rated_products li:before,.style-dark .style-light .widget-container.widget_top_rated_products li:before,.style-light .widget-container.widget_recent_reviews li:before,.style-dark .style-light .widget-container.widget_recent_reviews li:before,.style-light .widget-container.widget_latest_tweets_widget .tweet-text:before,.style-dark .style-light .widget-container.widget_latest_tweets_widget .tweet-text:before,.style-light .widget-container.widget_latest_tweets .tweet-text:before,.style-dark .style-light .widget-container.widget_latest_tweets .tweet-text:before,.style-light .comment-content .comment-author a,.style-dark .style-light .comment-content .comment-author a,.style-light .comment-content .comment-author span,.style-dark .style-light .comment-content .comment-author span,.style-light div[class*=sharer-].share-button label,.style-dark .style-light div[class*=sharer-].share-button label,.style-light .share-button.share-inline .social.top li,.style-dark .style-light .share-button.share-inline .social.top li,.style-light .vc_progress_bar .vc_progress_label,.style-dark .style-light .vc_progress_bar .vc_progress_label,.style-light .vc_pie_chart .vc_pie_chart_value,.style-dark .style-light .vc_pie_chart .vc_pie_chart_value,.style-light .counter,.style-dark .style-light .counter,.style-light .counter-suffix,.style-dark .style-light .counter-suffix,.style-light .counter-prefix,.style-dark .style-light .counter-prefix,.style-light .countdown,.style-dark .style-light .countdown,.style-light ul.dwls_search_results .daves-wordpress-live-search_title .search-title,.style-dark .style-light ul.dwls_search_results .daves-wordpress-live-search_title .search-title,.style-light ul.dwls_search_results .daves-wordpress-live-search_author,.style-dark .style-light ul.dwls_search_results .daves-wordpress-live-search_author {color:#303133;}.style-dark .headings-bg,.style-light .style-dark .headings-bg,.style-dark input[type=radio]:checked:before,.style-light .style-dark input[type=radio]:checked:before {background-color:#ffffff;}.style-light .headings-bg,.style-dark .style-light .headings-bg,.style-light input[type=radio]:checked:before,.style-dark .style-light input[type=radio]:checked:before {background-color:#303133;}.buttons-style,input[type="submit"]:not(.btn-custom-typo):not(.btn-inherit),input[type="reset"]:not(.btn-custom-typo):not(.btn-inherit),input[type="button"]:not(.btn-custom-typo):not(.btn-inherit),button[type="submit"]:not(.btn-custom-typo):not(.btn-inherit),.btn:not(.btn-custom-typo):not(.btn-inherit),.btn-link:not(.btn-custom-typo):not(.btn-inherit),.tab-container:not(.default-typography) .nav-tabs,.uncode-accordion:not(.default-typography) .panel-title > a > span,.enhanced-atc.tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a,.search_footer {font-weight:400 !important;font-family: !important;letter-spacing:0.1em;text-transform:capitalize;}.btn-inherit {font-family:inherit !important;letter-spacing:0.1em;text-transform:capitalize;}.btn-inherit:not([class*="font-weight-"]) {font-weight:400 !important;}.tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a.default-typography {font-weight:500 !important;font-family:inherit !important;letter-spacing:inherit !important;}.buttons-weight {font-weight:400 !important;}.serif-family,.post-content .post-media blockquote.pullquote p:first-child,.tmb-entry-title-serif.tmb .t-entry .t-entry-title,.tmb-entry-title-serif.tmb .t-entry .t-entry-table-typography,.isotope-system .isotope-container .tmb .regular-text .pullquote p:first-child,.isotope-system .isotope-container .tmb .fluid-object.tweet .twitter-footer span {font-family:Georgia, "Times New Roman", Times, serif;}.ui-br-w,input:focus,textarea:focus,select:focus,input[type="submit"],input[type="reset"],input[type="button"],button[type="submit"] {border-width:1px;}.style-dark .ui-br,.style-light .style-dark .ui-br,.style-dark hr,.style-light .style-dark hr,.style-dark pre,.style-light .style-dark pre,.style-dark table,.style-light .style-dark table,.style-dark table td,.style-light .style-dark table td,.style-dark table th,.style-light .style-dark table th,.style-dark input,.style-light .style-dark input,.style-dark textarea,.style-light .style-dark textarea,.style-dark select,.style-light .style-dark select,.style-dark .seldiv,.style-light .style-dark .seldiv,.style-dark .select2-choice,.style-light .style-dark .select2-choice,.style-dark .select2-selection--single,.style-light .style-dark .select2-selection--single,.style-dark fieldset,.style-light .style-dark fieldset,.style-dark .seldiv:before,.style-light .style-dark .seldiv:before,.style-dark .tab-container .nav-tabs,.style-light .style-dark .tab-container .nav-tabs,.style-dark .nav-tabs > li.active > a,.style-light .style-dark .nav-tabs > li.active > a,.style-dark .border-100 .tab-content::before,.style-light .style-dark .border-100 .tab-content::before,.style-dark .vertical-tab-menu .nav-tabs,.style-light .style-dark .vertical-tab-menu .nav-tabs,.style-dark .tab-content.vertical,.style-light .style-dark .tab-content.vertical,.style-dark .panel,.style-light .style-dark .panel,.style-dark .panel-group .panel-heading + .panel-collapse .panel-body,.style-light .style-dark .panel-group .panel-heading + .panel-collapse .panel-body,.style-dark .divider:before,.style-light .style-dark .divider:before,.style-dark .divider:after,.style-light .style-dark .divider:after,.style-dark .plan,.style-light .style-dark .plan,.style-dark .plan .plan-title,.style-light .style-dark .plan .plan-title,.style-dark .plan .item-list > li,.style-light .style-dark .plan .item-list > li,.style-dark .plan .plan-button,.style-light .style-dark .plan .plan-button,.style-dark .uncode-single-media-wrapper.img-thumbnail:not(.single-advanced),.style-light .style-dark .uncode-single-media-wrapper.img-thumbnail:not(.single-advanced),.style-dark .post-share,.style-light .style-dark .post-share,.style-dark .post-tag-share-container,.style-light .style-dark .post-tag-share-container,.style-dark .widget-container .widget-title,.style-light .style-dark .widget-container .widget-title,.style-dark .widget-container.widget_calendar #wp-calendar caption,.style-light .style-dark .widget-container.widget_calendar #wp-calendar caption,.style-dark .widget-container.widget_calendar .wp-calendar-nav,.style-light .style-dark .widget-container.widget_calendar .wp-calendar-nav,.style-dark .widget-collapse-content:after,.style-light .style-dark .widget-collapse-content:after,.style-dark #comments .comment-list .comments-list:first-child,.style-light .style-dark #comments .comment-list .comments-list:first-child,.style-dark #respond .comment-list .comments-list:first-child,.style-light .style-dark #respond .comment-list .comments-list:first-child,.style-dark #comments .comments-list .comment-content,.style-light .style-dark #comments .comments-list .comment-content,.style-dark #respond .comments-list .comment-content,.style-light .style-dark #respond .comments-list .comment-content,.style-dark ul.dwls_search_results,.style-light .style-dark ul.dwls_search_results,.style-dark ul.dwls_search_results li,.style-light .style-dark ul.dwls_search_results li,.style-dark .widget-container .tagcloud a,.style-light .style-dark .widget-container .tagcloud a {border-color:rgba(255, 255, 255, 0.25);}.style-light .ui-br,.style-dark .style-light .ui-br,.style-light hr,.style-dark .style-light hr,.style-light pre,.style-dark .style-light pre,.style-light table,.style-dark .style-light table,.style-light table td,.style-dark .style-light table td,.style-light table th,.style-dark .style-light table th,.style-light input,.style-dark .style-light input,.style-light textarea,.style-dark .style-light textarea,.style-light select,.style-dark .style-light select,.style-light .seldiv,.style-dark .style-light .seldiv,.style-light .select2-choice,.style-dark .style-light .select2-choice,.style-light .select2-selection--single,.style-dark .style-light .select2-selection--single,.style-light fieldset,.style-dark .style-light fieldset,.style-light .seldiv:before,.style-dark .style-light .seldiv:before,.style-light .tab-container .nav-tabs,.style-dark .style-light .tab-container .nav-tabs,.style-light .nav-tabs > li.active > a,.style-dark .style-light .nav-tabs > li.active > a,.style-light .border-100 .tab-content::before,.style-dark .style-light .border-100 .tab-content::before,.style-light .vertical-tab-menu .nav-tabs,.style-dark .style-light .vertical-tab-menu .nav-tabs,.style-light .tab-content.vertical,.style-dark .style-light .tab-content.vertical,.style-light .panel,.style-dark .style-light .panel,.style-light .panel-group .panel-heading + .panel-collapse .panel-body,.style-dark .style-light .panel-group .panel-heading + .panel-collapse .panel-body,.style-light .divider:before,.style-dark .style-light .divider:before,.style-light .divider:after,.style-dark .style-light .divider:after,.style-light .plan,.style-dark .style-light .plan,.style-light .plan .plan-title,.style-dark .style-light .plan .plan-title,.style-light .plan .item-list > li,.style-dark .style-light .plan .item-list > li,.style-light .plan .plan-button,.style-dark .style-light .plan .plan-button,.style-light .uncode-single-media-wrapper.img-thumbnail:not(.single-advanced),.style-dark .style-light .uncode-single-media-wrapper.img-thumbnail:not(.single-advanced),.style-light .post-share,.style-dark .style-light .post-share,.style-light .post-tag-share-container,.style-dark .style-light .post-tag-share-container,.style-light .widget-container .widget-title,.style-dark .style-light .widget-container .widget-title,.style-light .widget-container.widget_calendar #wp-calendar caption,.style-dark .style-light .widget-container.widget_calendar #wp-calendar caption,.style-light .widget-container.widget_calendar .wp-calendar-nav,.style-dark .style-light .widget-container.widget_calendar .wp-calendar-nav,.style-light .widget-collapse-content:after,.style-dark .style-light .widget-collapse-content:after,.style-light #comments .comment-list .comments-list:first-child,.style-dark .style-light #comments .comment-list .comments-list:first-child,.style-light #respond .comment-list .comments-list:first-child,.style-dark .style-light #respond .comment-list .comments-list:first-child,.style-light #comments .comments-list .comment-content,.style-dark .style-light #comments .comments-list .comment-content,.style-light #respond .comments-list .comment-content,.style-dark .style-light #respond .comments-list .comment-content,.style-light ul.dwls_search_results,.style-dark .style-light ul.dwls_search_results,.style-light ul.dwls_search_results li,.style-dark .style-light ul.dwls_search_results li,.style-light .widget-container .tagcloud a,.style-dark .style-light .widget-container .tagcloud a {border-color:#eaeaea;}.style-light input[type=radio],.style-dark .style-light input[type=radio] {border-color:#eaeaea;}.style-dark input[type=radio],.style-light .style-dark input[type=radio] {border-color:rgba(255, 255, 255, 0.5);}.ui-br-accent,.nav-tabs > li.active > a,.tabs-left > li.active > a {border-color:#3259f1 !important;}.style-dark .ui-br-break,.style-light .style-dark .ui-br-break,.style-dark hr.separator-break,.style-light .style-dark hr.separator-break {border-color:#ffffff;}.style-light .ui-br-break,.style-dark .style-light .ui-br-break,.style-light hr.separator-break,.style-dark .style-light hr.separator-break {border-color:#eaeaea;}.style-dark .ui-br-headings,.style-light .style-dark .ui-br-headings,.style-dark .header-content hr,.style-light .style-dark .header-content hr {border-color:#ffffff;}.style-light .ui-br-headings,.style-dark .style-light .ui-br-headings,.style-light .header-content hr,.style-dark .style-light .header-content hr {border-color:#303133;}.input-background .style-dark .input-underline .ui-br-underline,.input-background .input-underline .style-dark .ui-br-underline,.input-background .style-light .style-dark .input-underline .ui-br-underline,.input-background .style-light .input-underline .style-dark .ui-br-underline,.input-background .style-dark .input-underline input[type="text"],.input-background .input-underline .style-dark input[type="text"],.input-background .style-light .style-dark .input-underline input[type="text"],.input-background .style-light .input-underline .style-dark input[type="text"],.input-background .style-dark .input-underline input[type="email"],.input-background .input-underline .style-dark input[type="email"],.input-background .style-light .style-dark .input-underline input[type="email"],.input-background .style-light .input-underline .style-dark input[type="email"],.input-background .style-dark .input-underline input[type="number"],.input-background .input-underline .style-dark input[type="number"],.input-background .style-light .style-dark .input-underline input[type="number"],.input-background .style-light .input-underline .style-dark input[type="number"],.input-background .style-dark .input-underline input[type="url"],.input-background .input-underline .style-dark input[type="url"],.input-background .style-light .style-dark .input-underline input[type="url"],.input-background .style-light .input-underline .style-dark input[type="url"],.input-background .style-dark .input-underline input[type="tel"],.input-background .input-underline .style-dark input[type="tel"],.input-background .style-light .style-dark .input-underline input[type="tel"],.input-background .style-light .input-underline .style-dark input[type="tel"],.input-background .style-dark .input-underline input[type="search"],.input-background .input-underline .style-dark input[type="search"],.input-background .style-light .style-dark .input-underline input[type="search"],.input-background .style-light .input-underline .style-dark input[type="search"],.input-background .style-dark .input-underline input[type="password"],.input-background .input-underline .style-dark input[type="password"],.input-background .style-light .style-dark .input-underline input[type="password"],.input-background .style-light .input-underline .style-dark input[type="password"],.input-background .style-dark .input-underline input[type="date"],.input-background .input-underline .style-dark input[type="date"],.input-background .style-light .style-dark .input-underline input[type="date"],.input-background .style-light .input-underline .style-dark input[type="date"],.input-background .style-dark .input-underline textarea,.input-background .input-underline .style-dark textarea,.input-background .style-light .style-dark .input-underline textarea,.input-background .style-light .input-underline .style-dark textarea,.input-background .style-dark .input-underline select,.input-background .input-underline .style-dark select,.input-background .style-light .style-dark .input-underline select,.input-background .style-light .input-underline .style-dark select,.input-background .style-dark .input-underline .select2-selection--single,.input-background .input-underline .style-dark .select2-selection--single,.input-background .style-light .style-dark .input-underline .select2-selection--single,.input-background .style-light .input-underline .style-dark .select2-selection--single {border-bottom:1px solid rgba(255, 255, 255, 0.25);}.input-background .style-light .input-underline .ui-br-underline,.input-background .input-underline .style-light .ui-br-underline,.input-background .style-dark .style-light .input-underline .ui-br-underline,.input-background .style-dark .input-underline .style-light .ui-br-underline,.input-background .style-light .input-underline input[type="text"],.input-background .input-underline .style-light input[type="text"],.input-background .style-dark .style-light .input-underline input[type="text"],.input-background .style-dark .input-underline .style-light input[type="text"],.input-background .style-light .input-underline input[type="email"],.input-background .input-underline .style-light input[type="email"],.input-background .style-dark .style-light .input-underline input[type="email"],.input-background .style-dark .input-underline .style-light input[type="email"],.input-background .style-light .input-underline input[type="number"],.input-background .input-underline .style-light input[type="number"],.input-background .style-dark .style-light .input-underline input[type="number"],.input-background .style-dark .input-underline .style-light input[type="number"],.input-background .style-light .input-underline input[type="url"],.input-background .input-underline .style-light input[type="url"],.input-background .style-dark .style-light .input-underline input[type="url"],.input-background .style-dark .input-underline .style-light input[type="url"],.input-background .style-light .input-underline input[type="tel"],.input-background .input-underline .style-light input[type="tel"],.input-background .style-dark .style-light .input-underline input[type="tel"],.input-background .style-dark .input-underline .style-light input[type="tel"],.input-background .style-light .input-underline input[type="search"],.input-background .input-underline .style-light input[type="search"],.input-background .style-dark .style-light .input-underline input[type="search"],.input-background .style-dark .input-underline .style-light input[type="search"],.input-background .style-light .input-underline input[type="password"],.input-background .input-underline .style-light input[type="password"],.input-background .style-dark .style-light .input-underline input[type="password"],.input-background .style-dark .input-underline .style-light input[type="password"],.input-background .style-light .input-underline input[type="date"],.input-background .input-underline .style-light input[type="date"],.input-background .style-dark .style-light .input-underline input[type="date"],.input-background .style-dark .input-underline .style-light input[type="date"],.input-background .style-light .input-underline textarea,.input-background .input-underline .style-light textarea,.input-background .style-dark .style-light .input-underline textarea,.input-background .style-dark .input-underline .style-light textarea,.input-background .style-light .input-underline select,.input-background .input-underline .style-light select,.input-background .style-dark .style-light .input-underline select,.input-background .style-dark .input-underline .style-light select,.input-background .style-light .input-underline .select2-selection--single,.input-background .input-underline .style-light .select2-selection--single,.input-background .style-dark .style-light .input-underline .select2-selection--single,.input-background .style-dark .input-underline .style-light .select2-selection--single {border-bottom:1px solid #eaeaea;}.style-dark .ui-br-darker,.style-light .style-dark .ui-br-darker {border-color:#ffffff;}.style-light .ui-br-darker,.style-dark .style-light .ui-br-darker {border-color:#777777;}.style-dark .ui-bg,.style-light .style-dark .ui-bg,.style-dark code,.style-light .style-dark code,.style-dark kbd,.style-light .style-dark kbd,.style-dark pre,.style-light .style-dark pre,.style-dark samp,.style-light .style-dark samp,.style-dark input[type="submit"],.style-light .style-dark input[type="submit"],.style-dark input[type="reset"],.style-light .style-dark input[type="reset"],.style-dark input[type="button"],.style-light .style-dark input[type="button"],.style-dark button[type="submit"],.style-light .style-dark button[type="submit"],.style-dark .divider .divider-icon,.style-light .style-dark .divider .divider-icon {background-color:#191b1e;}.style-light .ui-bg,.style-dark .style-light .ui-bg,.style-light code,.style-dark .style-light code,.style-light kbd,.style-dark .style-light kbd,.style-light pre,.style-dark .style-light pre,.style-light samp,.style-dark .style-light samp,.style-light input[type="submit"],.style-dark .style-light input[type="submit"],.style-light input[type="reset"],.style-dark .style-light input[type="reset"],.style-light input[type="button"],.style-dark .style-light input[type="button"],.style-light button[type="submit"],.style-dark .style-light button[type="submit"],.style-light .divider .divider-icon,.style-dark .style-light .divider .divider-icon {background-color:#f7f7f7;}.style-dark .ui-bg-alpha,.style-light .style-dark .ui-bg-alpha,.style-dark .plan,.style-light .style-dark .plan {background-color:rgba(26, 27, 28, 0.5);}.style-light .ui-bg-alpha,.style-dark .style-light .ui-bg-alpha,.style-light .plan,.style-dark .style-light .plan {background-color:#ffffff;}.style-dark .ui-bg-alpha-pricing-tables,.style-light .style-dark .ui-bg-alpha-pricing-tables {background-color:rgba(20, 22, 24, 0.5);}.style-light .ui-bg-alpha-pricing-tables,.style-dark .style-light .ui-bg-alpha-pricing-tables {background-color:#ffffff;}.style-dark .ui-bg-alpha-progress-bar,.style-light .style-dark .ui-bg-alpha-progress-bar,.style-dark .vc_progress_bar .vc_single_bar:not(.style-override),.style-light .style-dark .vc_progress_bar .vc_single_bar:not(.style-override) {background-color:rgba(255, 255, 255, 0.2);}.style-light .ui-bg-alpha-progress-bar,.style-dark .style-light .ui-bg-alpha-progress-bar,.style-light .vc_progress_bar .vc_single_bar:not(.style-override),.style-dark .style-light .vc_progress_bar .vc_single_bar:not(.style-override) {background-color:rgba(119, 119, 119, 0.1);}.style-dark .ui-text-alpha-progress-bar,.style-light .style-dark .ui-text-alpha-progress-bar,.style-dark .vc_pie_chart_back,.style-light .style-dark .vc_pie_chart_back {color:rgba(255, 255, 255, 0.2);}.style-light .ui-text-alpha-progress-bar,.style-dark .style-light .ui-text-alpha-progress-bar,.style-light .vc_pie_chart_back,.style-dark .style-light .vc_pie_chart_back {color:rgba(119, 119, 119, 0.1);}.style-dark .ui-bg-dots,.style-light .style-dark .ui-bg-dots,.style-dark .owl-dots-outside .owl-dots .owl-dot span,.style-light .style-dark .owl-dots-outside .owl-dots .owl-dot span {background-color:rgba(247, 247, 247, 0.75);}.style-light .ui-bg-dots,.style-dark .style-light .ui-bg-dots,.style-light .owl-dots-outside .owl-dots .owl-dot span,.style-dark .style-light .owl-dots-outside .owl-dots .owl-dot span {background-color:rgba(25, 27, 30, 0.25);}.style-dark .ui-link,.style-light .style-dark .ui-link,.style-dark .nav-tabs > li > a,.style-light .style-dark .nav-tabs > li > a,.style-dark .panel-title > a,.style-light .style-dark .panel-title > a,.style-dark .widget-container a,.style-light .style-dark .widget-container a {color:#ffffff;}.style-dark .ui-link:hover,.style-light .style-dark .ui-link:hover,.style-dark .ui-link:focus,.style-light .style-dark .ui-link:focus,.style-dark .nav-tabs > li > a:hover,.style-light .style-dark .nav-tabs > li > a:hover,.style-dark .nav-tabs > li > a:focus,.style-light .style-dark .nav-tabs > li > a:focus,.style-dark .panel-title > a:hover,.style-light .style-dark .panel-title > a:hover,.style-dark .panel-title > a:focus,.style-light .style-dark .panel-title > a:focus,.style-dark .widget-container a:hover,.style-light .style-dark .widget-container a:hover,.style-dark .widget-container a:focus,.style-light .style-dark .widget-container a:focus {color:#3259f1;}.style-light .ui-link,.style-dark .style-light .ui-link,.style-light .nav-tabs > li > a,.style-dark .style-light .nav-tabs > li > a,.style-light .panel-title > a,.style-dark .style-light .panel-title > a,.style-light .widget-container a,.style-dark .style-light .widget-container a {color:#303133;}.style-light .ui-link:hover,.style-dark .style-light .ui-link:hover,.style-light .ui-link:focus,.style-dark .style-light .ui-link:focus,.style-light .nav-tabs > li > a:hover,.style-dark .style-light .nav-tabs > li > a:hover,.style-light .nav-tabs > li > a:focus,.style-dark .style-light .nav-tabs > li > a:focus,.style-light .panel-title > a:hover,.style-dark .style-light .panel-title > a:hover,.style-light .panel-title > a:focus,.style-dark .style-light .panel-title > a:focus,.style-light .widget-container a:hover,.style-dark .style-light .widget-container a:hover,.style-light .widget-container a:focus,.style-dark .style-light .widget-container a:focus {color:#3259f1;}.style-dark .ui-text,.style-light .style-dark .ui-text,.style-dark .breadcrumb,.style-light .style-dark .breadcrumb,.style-dark .post-info,.style-light .style-dark .post-info {color:rgba(255,255,255,0.65);}.style-light .ui-text,.style-dark .style-light .ui-text,.style-light .breadcrumb,.style-dark .style-light .breadcrumb,.style-light .post-info,.style-dark .style-light .post-info {color:rgba(119,119,119,0.65);}.style-dark .ui-link-text,.style-light .style-dark .ui-link-text,.style-dark .breadcrumb > li a,.style-light .style-dark .breadcrumb > li a,.style-dark .post-info a,.style-light .style-dark .post-info a {color:rgba(255,255,255,0.65);}.style-dark .ui-link-text:hover,.style-light .style-dark .ui-link-text:hover,.style-dark .ui-link-text:focus,.style-light .style-dark .ui-link-text:focus,.style-dark .breadcrumb > li a:hover,.style-light .style-dark .breadcrumb > li a:hover,.style-dark .breadcrumb > li a:focus,.style-light .style-dark .breadcrumb > li a:focus,.style-dark .post-info a:hover,.style-light .style-dark .post-info a:hover,.style-dark .post-info a:focus,.style-light .style-dark .post-info a:focus {color:#3259f1;}.style-light .ui-link-text,.style-dark .style-light .ui-link-text,.style-light .breadcrumb > li a,.style-dark .style-light .breadcrumb > li a,.style-light .post-info a,.style-dark .style-light .post-info a {color:rgba(119,119,119,0.65);}.style-light .ui-link-text:hover,.style-dark .style-light .ui-link-text:hover,.style-light .ui-link-text:focus,.style-dark .style-light .ui-link-text:focus,.style-light .breadcrumb > li a:hover,.style-dark .style-light .breadcrumb > li a:hover,.style-light .breadcrumb > li a:focus,.style-dark .style-light .breadcrumb > li a:focus,.style-light .post-info a:hover,.style-dark .style-light .post-info a:hover,.style-light .post-info a:focus,.style-dark .style-light .post-info a:focus {color:#3259f1;}.style-dark .ui-inverted,.style-light .style-dark .ui-inverted {color:#191b1e;background-color:#f7f7f7;}.style-light .ui-inverted,.style-dark .style-light .ui-inverted {color:#f7f7f7;background-color:#191b1e;}.style-dark .btn-social,.style-light .style-dark .btn-social {color:#ffffff !important;}.style-light .btn-social,.style-dark .style-light .btn-social {color:#777777 !important;}@media (min-width:960px) {.overlay.style-light-bg {background-color:rgba(255, 255, 255, 0.95) !important;}.overlay.style-dark-bg {background-color:rgba(20, 22, 24, 0.95) !important;}}.style-dark input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']):focus,.style-dark textarea:focus,.style-light .style-dark input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']):focus,.style-light .style-dark textarea:focus {border-color:#3259f1;}.style-light input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']):focus,.style-light textarea:focus,.style-dark .style-light input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']):focus,.style-dark .style-light textarea:focus {border-color:#3259f1;}.style-dark .ui-form-placeholder,.style-light .style-dark .ui-form-placeholder {color:#ffffff;text-transform:capitalize;}.style-light .ui-form-placeholder,.style-dark .style-light .ui-form-placeholder {color:#a9a9a9;text-transform:capitalize;}.shadow-inset-form,input,textarea,select,.seldiv,.select2-choice,.select2-selection--single {box-shadow:inset 0 2px 1px rgba(0, 0, 0, 0.025);}.style-dark .uncode-live-search input.form-xl,.style-light .style-dark .uncode-live-search input.form-xl {box-shadow:0px 0px 0px 6px rgba(0, 0, 0, 0.2);}.style-light .uncode-live-search input.form-xl,.style-dark .style-light .uncode-live-search input.form-xl {box-shadow:0px 0px 0px 6px rgba(255, 255, 255, 0.2);}.input-background .style-dark input[type="text"],.input-background .style-light .style-dark input[type="text"],.input-background .style-dark input[type="email"],.input-background .style-light .style-dark input[type="email"],.input-background .style-dark input[type="number"],.input-background .style-light .style-dark input[type="number"],.input-background .style-dark input[type="url"],.input-background .style-light .style-dark input[type="url"],.input-background .style-dark input[type="tel"],.input-background .style-light .style-dark input[type="tel"],.input-background .style-dark input[type="search"],.input-background .style-light .style-dark input[type="search"],.input-background .style-dark input[type="password"],.input-background .style-light .style-dark input[type="password"],.input-background .style-dark input[type="date"],.input-background .style-light .style-dark input[type="date"],.input-background .style-dark textarea,.input-background .style-light .style-dark textarea,.input-background .style-dark select,.input-background .style-light .style-dark select,.input-background .style-dark .select2-selection--single,.input-background .style-light .style-dark .select2-selection--single {background-color:rgba(0, 0, 0, 0.15) !important;}.input-background .style-light input[type="text"],.input-background .style-dark .style-light input[type="text"],.input-background .style-light input[type="email"],.input-background .style-dark .style-light input[type="email"],.input-background .style-light input[type="number"],.input-background .style-dark .style-light input[type="number"],.input-background .style-light input[type="url"],.input-background .style-dark .style-light input[type="url"],.input-background .style-light input[type="tel"],.input-background .style-dark .style-light input[type="tel"],.input-background .style-light input[type="search"],.input-background .style-dark .style-light input[type="search"],.input-background .style-light input[type="password"],.input-background .style-dark .style-light input[type="password"],.input-background .style-light input[type="date"],.input-background .style-dark .style-light input[type="date"],.input-background .style-light textarea,.input-background .style-dark .style-light textarea,.input-background .style-light select,.input-background .style-dark .style-light select,.input-background .style-light .select2-selection--single,.input-background .style-dark .style-light .select2-selection--single {background-color:#f7f7f7 !important;}.style-dark .input-background input[type="text"],.style-light .style-dark .input-background input[type="text"],.style-dark .input-background input[type="email"],.style-light .style-dark .input-background input[type="email"],.style-dark .input-background input[type="number"],.style-light .style-dark .input-background input[type="number"],.style-dark .input-background input[type="url"],.style-light .style-dark .input-background input[type="url"],.style-dark .input-background input[type="tel"],.style-light .style-dark .input-background input[type="tel"],.style-dark .input-background input[type="search"],.style-light .style-dark .input-background input[type="search"],.style-dark .input-background input[type="password"],.style-light .style-dark .input-background input[type="password"],.style-dark .input-background input[type="date"],.style-light .style-dark .input-background input[type="date"],.style-dark .input-background textarea,.style-light .style-dark .input-background textarea,.style-dark .input-background select,.style-light .style-dark .input-background select,.style-dark .input-background .select2-selection--single,.style-light .style-dark .input-background .select2-selection--single {background-color:rgba(0, 0, 0, 0.15) !important;}.style-light .input-background input[type="text"],.style-dark .style-light .input-background input[type="text"],.style-light .input-background input[type="email"],.style-dark .style-light .input-background input[type="email"],.style-light .input-background input[type="number"],.style-dark .style-light .input-background input[type="number"],.style-light .input-background input[type="url"],.style-dark .style-light .input-background input[type="url"],.style-light .input-background input[type="tel"],.style-dark .style-light .input-background input[type="tel"],.style-light .input-background input[type="search"],.style-dark .style-light .input-background input[type="search"],.style-light .input-background input[type="password"],.style-dark .style-light .input-background input[type="password"],.style-light .input-background input[type="date"],.style-dark .style-light .input-background input[type="date"],.style-light .input-background textarea,.style-dark .style-light .input-background textarea,.style-light .input-background select,.style-dark .style-light .input-background select,.style-light .input-background .select2-selection--single,.style-dark .style-light .input-background .select2-selection--single {background-color:#f7f7f7 !important;}.ui-transition-normal,input,button,select,textarea,.img-thumbnail {transition:color 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86), background-color 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86), border-color 400ms cubic-bezier(0.785, 0.135, 0.15, 0.86);}.ui-transition-slow {transition:color 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86), background-color 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86), border-color 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86);}.ui-transition-fast,.main-wrapper a,.tmb-content-under.tmb .t-entry p.t-entry-author a:hover span,.tmb-content-lateral.tmb .t-entry p.t-entry-author a:hover span {transition:color 200ms cubic-bezier(0.785, 0.135, 0.15, 0.86), background-color 200ms cubic-bezier(0.785, 0.135, 0.15, 0.86), border-color 200ms cubic-bezier(0.785, 0.135, 0.15, 0.86);}.submenu-light ul.uncode-cart-dropdown a,.submenu-light ul.uncode-cart-dropdown span {color:#777777 !important;}.submenu-dark ul.uncode-cart-dropdown a,.submenu-dark ul.uncode-cart-dropdown span {color:#ffffff !important;}.headings-style-woo {font-size:17px;line-height:1.2;margin:27px 0 0;}.row-breadcrumb.row-breadcrumb-light .breadcrumb-title {color:rgba(119,119,119,0.65);}.row-breadcrumb.row-breadcrumb-dark .breadcrumb-title {color:rgba(255,255,255,0.65);}.row-navigation.row-navigation-light {outline-color:#eaeaea;background-color:#f7f7f7;}.row-navigation.row-navigation-light .btn-disable-hover {color:rgba(119,119,119,0.65);}.row-navigation.row-navigation-dark {outline-color:#303133;background-color:#191b1e;}.row-navigation.row-navigation-dark .btn-disable-hover {color:rgba(255,255,255,0.65);}.style-dark .wp-caption-text,.style-light .style-dark .wp-caption-text {color:#ffffff;}.style-light .wp-caption-text,.style-dark .style-light .wp-caption-text {color:#777777;}.btn-form-border-style,input,textarea,select,.seldiv,.select2-choice,.select2-selection--single,input[type="submit"],input[type="reset"],input[type="button"],button[type="submit"],.seldiv:before,.btn,.btn-link,.btn:not(.btn-custom-typo),.btn-link:not(.btn-custom-typo),.panel-title > a > span,.divider .divider-icon,.overlay input,.search_footer {border-width:1px;}.style-dark .icon-automatic-video .icon-automatic-video-inner-bg,.style-light .style-dark .icon-automatic-video .icon-automatic-video-inner-bg {background-color:#303133;}.style-dark .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg,.style-light .style-dark .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg {box-shadow:0 0 0 0.25em #ffffff;}.style-dark .icon-box:hover .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg,.style-light .style-dark .icon-box:hover .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg {box-shadow:0 0 0 0.5em #ffffff;}.style-light .icon-automatic-video .icon-automatic-video-inner-bg,.style-dark .style-light .icon-automatic-video .icon-automatic-video-inner-bg {background-color:#ffffff;}.style-light .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg,.style-dark .style-light .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg {box-shadow:0 0 0 0.25em #303133;}.style-light .icon-box:hover .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg,.style-dark .style-light .icon-box:hover .icon-automatic-video.btn-shadow .icon-automatic-video-outer-bg {box-shadow:0 0 0 0.5em #303133;}.style-light ::-webkit-input-placeholder,.style-dark .style-light ::-webkit-input-placeholder {color:#a9a9a9;}.style-light ::-moz-placeholder,.style-dark .style-light ::-moz-placeholder {color:#a9a9a9;}.style-light :-ms-input-placeholder,.style-dark .style-light :-ms-input-placeholder {color:#a9a9a9;}.style-light :-moz-placeholder,.style-dark .style-light :-moz-placeholder {color:#a9a9a9;}.style-light :placeholder,.style-dark .style-light :placeholder {color:#a9a9a9;}.style-light .select2-selection__placeholder,.style-dark .style-light .select2-selection__placeholder {color:#a9a9a9;}.style-dark ::-webkit-input-placeholder,.style-light .style-dark ::-webkit-input-placeholder {color:#ffffff;}.style-dark ::-moz-placeholder,.style-light .style-dark ::-moz-placeholder {color:#ffffff;}.style-dark :-ms-input-placeholder,.style-light .style-dark :-ms-input-placeholder {color:#ffffff;}.style-dark :-moz-placeholder,.style-light .style-dark :-moz-placeholder {color:#ffffff;}.style-dark :placeholder,.style-light .style-dark :placeholder {color:#ffffff;}.style-dark .select2-selection__placeholder,.style-light .style-dark .select2-selection__placeholder {color:#ffffff;}.uncode-noconsent-gdpr-text {font-weight:400;font-family:Poppins;}.lg-dropdown {font-family:Poppins;}@media (min-width:960px) {#uncode-custom-cursor.basic-style span:first-child,#uncode-custom-cursor-pilot.basic-style span:first-child,#uncode-custom-cursor.async-style span:first-child,#uncode-custom-cursor-pilot.async-style span:first-child {background-color:#303133;}body:not(.disable-hover) [data-cursor="pointer"]#uncode-custom-cursor.basic-style span:first-child,body:not(.disable-hover) [data-cursor="pointer"]#uncode-custom-cursor-pilot.basic-style span:first-child,body:not(.disable-hover) [data-cursor="pointer"]#uncode-custom-cursor.async-style span:first-child,body:not(.disable-hover) [data-cursor="pointer"]#uncode-custom-cursor-pilot.async-style span:first-child {background-color:#3259f1;}#uncode-custom-cursor.accent-style span:first-child,#uncode-custom-cursor-pilot.accent-style span:first-child {background-color:#3259f1;}#uncode-custom-cursor.diff-style span:first-child,#uncode-custom-cursor-pilot.diff-style span:first-child {background-color:#ffffff;}body:not(.disable-hover) [data-cursor^="icon-"]#uncode-custom-cursor span:first-child {background-color:#303133;}body:not(.disable-hover) [data-cursor^="icon-"]#uncode-custom-cursor::after {color:#ffffff;}body:not(.disable-hover) [data-cursor="icon-light"]#uncode-custom-cursor span:first-child {background-color:#ffffff;box-shadow:0px 0px 30px rgba(0, 0, 0, 0.075);}body:not(.disable-hover) [data-cursor="icon-light"]#uncode-custom-cursor::after {color:#303133;}body:not(.disable-hover) [data-cursor="icon-accent"]#uncode-custom-cursor span:first-child {background-color:#3259f1;}body:not(.disable-hover) [data-cursor="icon-accent"]#uncode-custom-cursor::after {color:#ffffff;}body:not(.disable-hover) [data-cursor="icon-diff"]#uncode-custom-cursor span:first-child {background-color:#ffffff;}#uncode-custom-cursor-pilot.async-style > span:first-child {background-color:#3259f1;}}input[type="submit"],input[type="reset"],input[type="button"],button[type="submit"] {font-size:12px;padding:13px 31px;}.btn,.btn-link {font-size:12px;}.btn {padding:13px 31px !important;}.btn-link {padding:0 !important;}.btn-sm {font-size:10px !important;;padding:11px 26px !important;}.btn-lg {font-size:15px !important;;padding:16px 39px !important;}.btn-xl {font-size:18px !important;;padding:19px 47px !important;}.widget-container button,.widget-container .btn {padding:5px 15px !important;}.btn-dark {color:#ffffff !important;background-color:#000000 !important;border-color:#000000 !important;}.btn-dark:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-dark.active {color:#000000 !important;background-color:transparent !important;border-color:#000000 !important;}.btn-dark.btn-outline {color:#000000 !important;background-color:transparent !important;border-color:#000000 !important;}.btn-dark.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-dark.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#000000 !important;border-color:#000000 !important;}.btn-dark.btn-flat:hover {color:#ffffff !important;background-color:#000000 !important;border-color:#000000 !important;}.btn-light {color:#000000 !important;background-color:#ffffff !important;border-color:#ffffff !important;}.btn-light:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-light.active {color:#ffffff !important;background-color:transparent !important;border-color:#ffffff !important;}.btn-light.btn-outline {color:#ffffff !important;background-color:transparent !important;border-color:#ffffff !important;}.btn-light.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-light.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#000000 !important;background-color:#ffffff !important;border-color:#ffffff !important;}.btn-light.btn-flat:hover {color:#000000 !important;background-color:#f2f2f2 !important;border-color:#f2f2f2 !important;}.btn-success {color:#ffffff !important;background-color:#28de72 !important;border-color:#28de72 !important;}.btn-success:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-success.active {color:#28de72 !important;background-color:transparent !important;border-color:#28de72 !important;}.btn-success.btn-outline {color:#28de72 !important;background-color:transparent !important;border-color:#28de72 !important;}.btn-success.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-success.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#28de72 !important;border-color:#28de72 !important;}.btn-info {color:#ffffff !important;background-color:#3259f1 !important;border-color:#3259f1 !important;}.btn-info:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-info.active {color:#3259f1 !important;background-color:transparent !important;border-color:#3259f1 !important;}.btn-info.btn-outline {color:#3259f1 !important;background-color:transparent !important;border-color:#3259f1 !important;}.btn-info.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-info.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#3259f1 !important;border-color:#3259f1 !important;}.btn-warning {color:#ffffff !important;background-color:#ffc42e !important;border-color:#ffc42e !important;}.btn-warning:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-warning.active {color:#ffc42e !important;background-color:transparent !important;border-color:#ffc42e !important;}.btn-warning.btn-outline {color:#ffc42e !important;background-color:transparent !important;border-color:#ffc42e !important;}.btn-warning.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-warning.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#ffc42e !important;border-color:#ffc42e !important;}.btn-danger {color:#ffffff !important;background-color:#ff3100 !important;border-color:#ff3100 !important;}.btn-danger:not(.btn-hover-nobg):not(.icon-animated):hover,.btn-danger.active {color:#ff3100 !important;background-color:transparent !important;border-color:#ff3100 !important;}.btn-danger.btn-outline {color:#ff3100 !important;background-color:transparent !important;border-color:#ff3100 !important;}.btn-danger.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.btn-danger.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#ff3100 !important;border-color:#ff3100 !important;}.style-light .btn-default,.style-dark .style-light .btn-default,.tmb-light .t-entry-text .btn-default,.style-dark .tmb-light .t-entry-text .btn-default,.tmb-dark .t-overlay-inner .btn-default {color:#ffffff !important;background-color:#303133 !important;border-color:#303133 !important;}.style-light .btn-default:not(.btn-hover-nobg):not(.icon-animated):not(.btn-flat):hover,.style-dark .style-light .btn-default:not(.btn-hover-nobg):not(.icon-animated):not(.btn-flat):hover,.tmb-light .t-entry-text .btn-default:not(.btn-hover-nobg):not(.icon-animated):not(.btn-flat):hover,.style-dark .tmb-light .t-entry-text .btn-default:not(.btn-hover-nobg):not(.icon-animated):not(.btn-flat):hover,.tmb-dark .t-overlay-inner .btn-default:not(.btn-hover-nobg):not(.icon-animated):not(.btn-flat):hover,.style-light .btn-default.active,.style-dark .style-light .btn-default.active,.tmb-light .t-entry-text .btn-default.active,.style-dark .tmb-light .t-entry-text .btn-default.active,.tmb-dark .t-overlay-inner .btn-default.active {color:#303133 !important;background-color:transparent !important;border-color:#303133 !important;}.style-light .btn-default.btn-outline,.style-dark .style-light .btn-default.btn-outline,.tmb-light .t-entry-text .btn-default.btn-outline,.style-dark .tmb-light .t-entry-text .btn-default.btn-outline,.tmb-dark .t-overlay-inner .btn-default.btn-outline {color:#303133 !important;background-color:transparent !important;border-color:#303133 !important;}.style-light .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-dark .style-light .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.tmb-light .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-dark .tmb-light .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.tmb-dark .t-overlay-inner .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-light .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.style-dark .style-light .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.tmb-light .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.style-dark .tmb-light .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.tmb-dark .t-overlay-inner .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#ffffff !important;background-color:#303133 !important;border-color:#303133 !important;}.style-light .btn-default.btn-flat:hover,.style-dark .style-light .btn-default.btn-flat:hover,.tmb-light .t-entry-text .btn-default.btn-flat:hover,.style-dark .tmb-light .t-entry-text .btn-default.btn-flat:hover,.tmb-dark .t-overlay-inner .btn-default.btn-flat:hover {color:#ffffff !important;background-color:#232426 !important;border-color:#232426 !important;}.style-dark .btn-default,.style-light .style-dark .btn-default,.tmb-dark .t-entry-text .btn-default,.style-light .tmb-dark .t-entry-text .btn-default,.tmb-light .t-overlay-inner .btn-default {color:#303133 !important;background-color:#ffffff !important;border-color:#ffffff !important;}.style-dark .btn-default:not(.btn-hover-nobg):not(.icon-animated):hover,.style-light .style-dark .btn-default:not(.btn-hover-nobg):not(.icon-animated):hover,.tmb-dark .t-entry-text .btn-default:not(.btn-hover-nobg):not(.icon-animated):hover,.style-light .tmb-dark .t-entry-text .btn-default:not(.btn-hover-nobg):not(.icon-animated):hover,.tmb-light .t-overlay-inner .btn-default:not(.btn-hover-nobg):not(.icon-animated):hover,.style-dark .btn-default.active,.style-light .style-dark .btn-default.active,.tmb-dark .t-entry-text .btn-default.active,.style-light .tmb-dark .t-entry-text .btn-default.active,.tmb-light .t-overlay-inner .btn-default.active {color:#ffffff !important;background-color:transparent !important;border-color:#ffffff !important;}.style-dark .btn-default.btn-outline,.style-light .style-dark .btn-default.btn-outline,.tmb-dark .t-entry-text .btn-default.btn-outline,.style-light .tmb-dark .t-entry-text .btn-default.btn-outline,.tmb-light .t-overlay-inner .btn-default.btn-outline {color:#ffffff !important;background-color:transparent !important;border-color:#ffffff !important;}.style-dark .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-light .style-dark .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.tmb-dark .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-light .tmb-dark .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.tmb-light .t-overlay-inner .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video):hover,.style-dark .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.style-light .style-dark .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.tmb-dark .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.style-light .tmb-dark .t-entry-text .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active,.tmb-light .t-overlay-inner .btn-default.btn-outline:not(.icon-animated):not(.icon-automatic-video).active {color:#303133 !important;background-color:#ffffff !important;border-color:#ffffff !important;}.style-dark .btn-default.btn-flat:hover,.style-light .style-dark .btn-default.btn-flat:hover,.tmb-dark .t-entry-text .btn-default.btn-flat:hover,.style-light .tmb-dark .t-entry-text .btn-default.btn-flat:hover,.tmb-light .t-overlay-inner .btn-default.btn-flat:hover {color:#303133 !important;background-color:#f2f2f2 !important;border-color:#f2f2f2 !important;}#uncode_sidecart.style-light .btn-default.wc-forward:first-child {color:#303133 !important;}#uncode_sidecart.style-light .btn-default.wc-forward:first-child:hover {color:#777777 !important;}#uncode_sidecart.style-dark .btn-default.wc-forward:first-child {color:#ffffff !important;}#uncode_sidecart.style-dark .btn-default.wc-forward:first-child:hover {color:#cccccc !important;}.font-family-menu,.menu-container:not(.isotope-filters) ul.menu-smart,.menu-container:not(.isotope-filters) ul.menu-smart a:not(.social-menu-link):not(.vc_control-btn),.burger-label {font-family:Poppins;}@media (max-width:959px) {.menu-primary ul.menu-smart a {font-family:Poppins;font-weight:400;}}.font-size-menu,.menu-container:not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link),.menu-container:not(.vmenu-container):not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link):not(.vc_control-btn),.menu-smart > li > a > div > div > div.btn,.burger-label {font-size:12px;}@media (min-width:960px) {.font-size-menu,.menu-container:not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link),.menu-container:not(.vmenu-container):not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link):not(.vc_control-btn),.menu-smart > li > a > div > div > div.btn,.burger-label {font-size:15px;}.font-size-submenu,.menu-horizontal ul ul a,.vmenu-container ul ul a {font-size:15px;}}@media (max-width:959px) {.font-size-menu-mobile,.menu-container:not(.isotope-filters) ul.menu-smart a:not(.social-menu-link):not(.vc_control-btn) {font-size:12px !important;}}.font-weight-menu,.menu-container:not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link),.menu-container:not(.isotope-filters) ul.menu-smart li.dropdown > a,.menu-container:not(.isotope-filters) ul.menu-smart li.mega-menu > a,.menu-container:not(.vmenu-container):not(.isotope-filters) ul.menu-smart > li > a:not(.social-menu-link):not(.vc_control-btn),.menu-smart i.fa-dropdown,.vmenu-container a {font-weight:400;letter-spacing:0.05em;}.menu-light.top-menu p {color:#777777;}.menu-light .menu-smart a {color:#777777;}@media (max-width:959px) {.submenu-dark.isotope-filters.menu-light .menu-smart a {color:#777777;}}.menu-light .menu-smart a:hover,.menu-light .menu-smart a:focus {color:#3259f1;}@media (min-width:960px) {.isotope-filters.menu-light .menu-smart a:hover,.isotope-filters.menu-light .menu-smart a:focus {color:rgba(119,119,119,.5);}}.menu-light .mobile-additional-icon {color:black;}@media (min-width:960px) {body:not(.navbar-hover) .menu-desktop-transparent.style-light-override.top-menu p {color:#777777;}body:not(.navbar-hover) .menu-desktop-transparent.style-light-override .menu-smart a {color:#777777;}body:not(.navbar-hover) .menu-desktop-transparent.style-light-override .menu-smart a:hover,body:not(.navbar-hover) .menu-desktop-transparent.style-light-override .menu-smart a:focus {color:#3259f1;}body:not(.navbar-hover) .menu-desktop-transparent.style-light-override .mobile-additional-icon {color:black;}}@media (max-width:959px) {body:not(.open-overlay-menu) .menu-mobile-transparent.style-light-override.top-menu p {color:#777777;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-light-override .menu-smart a {color:#777777;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-light-override .menu-smart a:hover,body:not(.open-overlay-menu) .menu-mobile-transparent.style-light-override .menu-smart a:focus {color:#3259f1;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-light-override .mobile-additional-icon {color:black;}}.menu-dark.top-menu p {color:#ffffff;}.menu-dark a.menu-smart-toggle,.menu-dark .menu-smart a {color:#ffffff;}@media (max-width:959px) {.submenu-light.isotope-filters.menu-dark a.menu-smart-toggle,.submenu-light.isotope-filters.menu-dark .menu-smart a {color:#ffffff;}}.menu-dark a.menu-smart-toggle:hover,.menu-dark .menu-smart a:hover,.menu-dark a.menu-smart-toggle:focus,.menu-dark .menu-smart a:focus {color:#3259f1;}.isotope-filters.menu-dark a.menu-smart-toggle:hover,.isotope-filters.menu-dark .menu-smart a:hover,.isotope-filters.menu-dark a.menu-smart-toggle:focus,.isotope-filters.menu-dark .menu-smart a:focus {color:rgba(255,255,255,.5);}.menu-dark .mobile-additional-icon {color:black;}@media (min-width:960px) {body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override.top-menu p {color:#ffffff;}body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override a.menu-smart-toggle,body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override .menu-smart a {color:#ffffff;}body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override a.menu-smart-toggle:hover,body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override .menu-smart a:hover,body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override a.menu-smart-toggle:focus,body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override .menu-smart a:focus {color:#3259f1;}body:not(.navbar-hover) .menu-desktop-transparent.style-dark-override .mobile-additional-icon {color:black;}}@media (max-width:959px) {body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override.top-menu p {color:#ffffff;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override a.menu-smart-toggle,body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override .menu-smart a {color:#ffffff;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override a.menu-smart-toggle:hover,body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override .menu-smart a:hover,body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override a.menu-smart-toggle:focus,body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override .menu-smart a:focus {color:#3259f1;}body:not(.open-overlay-menu) .menu-mobile-transparent.style-dark-override .mobile-additional-icon {color:black;}}@media (min-width:960px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-horizontal-inner > .nav > .menu-smart > li > a,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a {color:#777777 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-horizontal-inner > .nav > .menu-smart > li > a:focus,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a:focus {color:#3259f1 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .mobile-additional-icon,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .mobile-additional-icon {color:black !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a {color:#ffffff !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:focus,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a:focus {color:#3259f1 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .mobile-additional-icon,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .mobile-additional-icon {color:black !important;}}@media (max-width:959px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a {color:#777777 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:focus,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a:focus {color:#3259f1 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .mobile-additional-icon,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .mobile-additional-icon {color:black !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a {color:#ffffff !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a:hover,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li > a:focus,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .menu-horizontal-inner > .nav > .menu-smart > li > a:focus {color:#3259f1 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .mobile-additional-icon,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .mobile-additional-icon {color:black !important;}}.menu-light .menu-smart > li.active > a,.menu-light .menu-smart > li a.active,.menu-light .menu-smart > li.current-menu-ancestor > a,.menu-light .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1;}.isotope-filters .menu-light .menu-smart > li.active > a,.isotope-filters .menu-light .menu-smart > li a.active,.isotope-filters .menu-light .menu-smart > li.current-menu-ancestor > a,.isotope-filters .menu-light .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:rgba(119,119,119,.5);}.menu-dark .menu-smart > li.active > a,.menu-dark .menu-smart > li a.active,.menu-dark .menu-smart > li.current-menu-ancestor > a,.menu-dark .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1;}.isotope-filters .menu-dark .menu-smart > li.active > a,.isotope-filters .menu-dark .menu-smart > li a.active,.isotope-filters .menu-dark .menu-smart > li.current-menu-ancestor > a,.isotope-filters .menu-dark .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:rgba(255,255,255,.5);}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.active > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li a.active,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-parent > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-ancestor > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1 !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.active > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li a.active,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-parent > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-ancestor > a,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-horizontal-inner > .nav > .menu-smart > li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1 !important;}.submenu-light .menu-smart ul a {color:#777777;}@media (min-width:960px) {.submenu-light .menu-sub-enhanced .menu-smart ul a {color:rgba(119,119,119,.65);}.submenu-light .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:hover,.submenu-light .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:focus {color:#3259f1 !important;background-color:rgba(0, 0, 0, 0.03) !important;}.submenu-light .menu-horizontal.menu-sub-enhanced .menu-smart ul a:hover,.submenu-light .menu-horizontal.menu-sub-enhanced .menu-smart ul a:focus {color:#3259f1 !important;}}.main-container .style-light .menu-advanced ul a {color:#777777;}.main-container .style-light .menu-advanced ul li:not(.menu-item-button) > a:hover,.main-container .style-light .menu-advanced ul li:not(.menu-item-button) > a:focus {color:#3259f1 !important;background-color:rgba(0, 0, 0, 0.03) !important;}.submenu-light .menu-smart.menu-cta-inner ul a {color:#777777;}@media (min-width:960px) {body[class*=vmenu-] .submenu-light .menu-smart.menu-cta-inner ul a:hover,body[class*=vmenu-] .submenu-light .menu-smart.menu-cta-inner ul a:focus {color:#3259f1;background-color:rgba(0, 0, 0, 0.03);}}.submenu-dark .menu-smart ul a {color:#ffffff;}@media (min-width:960px) {.submenu-dark .menu-sub-enhanced .menu-smart ul a {color:rgba(255,255,255,.65);}.submenu-dark .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:hover,.submenu-dark .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:focus {color:#3259f1 !important;background-color:rgba(255, 255, 255, 0.03) !important;}.submenu-dark .menu-horizontal.menu-sub-enhanced .menu-smart ul a:hover,.submenu-dark .menu-horizontal.menu-sub-enhanced .menu-smart ul a:focus {color:#3259f1 !important;}.submenu-dark .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:hover,.submenu-dark .menu-horizontal:not(.menu-sub-enhanced) .menu-smart ul a:focus {color:#3259f1 !important;background-color:rgba(255, 255, 255, 0.03) !important;}}.main-container .style-dark .menu-advanced ul a {color:#ffffff;}.main-container .style-dark .menu-advanced ul li:not(.menu-item-button) > a:hover,.main-container .style-dark .menu-advanced ul li:not(.menu-item-button) > a:focus {color:#3259f1;background-color:rgba(255, 255, 255, 0.03);}.submenu-dark .menu-smart.menu-cta-inner ul a {color:#ffffff;}@media (min-width:960px) {body[class*=vmenu-] .submenu-dark .menu-smart.menu-cta-inner ul a:hover,body[class*=vmenu-] .submenu-dark .menu-smart.menu-cta-inner ul a:focus {color:#3259f1;background-color:rgba(255, 255, 255, 0.03);}}@media (max-width:959px) {.submenu-light:not(.isotope-filters) .menu-smart a {color:#777777;}.submenu-light:not(.isotope-filters) .menu-smart a:hover,.submenu-light:not(.isotope-filters) .menu-smart a:focus {color:#3259f1;}.submenu-dark:not(.isotope-filters) .menu-smart a {color:#ffffff;}.submenu-dark:not(.isotope-filters) .menu-smart a:hover,.submenu-dark:not(.isotope-filters) .menu-smart a:focus {color:#3259f1;}}.submenu-light .menu-smart ul li.current-menu-parent > a,.submenu-light .menu-smart ul li.active > a {color:#3259f1;}@media (min-width:960px) {.submenu-light .menu-horizontal.menu-sub-enhanced .menu-smart ul li.current-menu-parent > a,.submenu-light .menu-horizontal.menu-sub-enhanced .menu-smart ul li.active > a {color:#3259f1 !important;}}.submenu-dark .menu-smart ul li.current-menu-parent > a,.submenu-dark .menu-smart ul li.active > a {color:#3259f1;}@media (min-width:960px) {.submenu-dark .menu-horizontal.menu-sub-enhanced .menu-smart ul li.current-menu-parent > a,.submenu-dark .menu-horizontal.menu-sub-enhanced .menu-smart ul li.active > a {color:#3259f1 !important;}}@media (max-width:959px) {.submenu-light .menu-smart li.active > a,.submenu-light .menu-smart li.current-menu-ancestor > a,.submenu-light .menu-smart li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1;}.submenu-dark .menu-smart li.active > a,.submenu-dark .menu-smart li.current-menu-ancestor > a,.submenu-dark .menu-smart li.current-menu-item:not(.menu-item-type-custom) > a {color:#3259f1;}}@media (min-width:960px) {.submenu-light .menu-horizontal .menu-smart > .mega-menu .mega-menu-inner > li > a {color:#777777;}.submenu-dark .menu-horizontal .menu-smart > .mega-menu .mega-menu-inner > li > a {color:#ffffff;}}@media (max-width:959px) {.submenu-light:not(.isotope-filters) .menu-smart a {color:#777777;}.submenu-dark:not(.isotope-filters) .menu-smart a {color:#ffffff;}}.menu-light .menu-smart,.menu-light .menu-smart li,.submenu-light .menu-smart ul,.menu-smart.submenu-light li ul li,.menu-light .menu-accordion-dividers,.menu-light .menu-borders:not(.needs-after),.menu-light .menu-borders.needs-after::after,.menu-light.vmenu-borders,.menu-light .main-menu-container {border-color:rgba(234,234,234,1);}.menu-dark .menu-smart,.menu-dark .menu-smart li,.submenu-dark .menu-smart ul,.menu-smart.submenu-dark li ul li,.menu-dark .menu-accordion-dividers,.menu-dark .menu-borders:not(.needs-after),.menu-dark .menu-borders.needs-after::after,.menu-dark.vmenu-borders,.menu-dark .main-menu-container {border-color:rgba(255,255,255,0.15);}@media (min-width:960px) {.menu-horizontal.menu-sub-enhanced.submenu-light .menu-smart > .mega-menu .mega-menu-inner,.submenu-light .menu-smart li ul li {border-color:rgba(234,234,234,1);}.menu-horizontal.menu-sub-enhanced.submenu-dark .menu-smart > .mega-menu .mega-menu-inner,.submenu-dark .menu-smart li ul li {border-color:rgba(255,255,255,0.15);}}@media (max-width:959px) {.menu-light .row-brand,.menu-light .row-menu .row-menu-inner {border-bottom-color:rgba(234,234,234,1);}.submenu-light .menu-smart,.submenu-light .menu-smart li {border-color:rgba(234,234,234,1);}.menu-dark .row-brand,.menu-dark .row-menu .row-menu-inner {border-bottom-color:rgba(255,255,255,0.15);}.submenu-dark .menu-smart,.submenu-dark .menu-smart li {border-color:rgba(255,255,255,0.15);}.menu-mobile-transparent .menu-transparent:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open) .row-menu .row-menu-inner {border-color:transparent !important;}}body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .menu-borders.needs-after::after,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .menu-smart,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .menu-smart > li,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-light .navbar-nav-first > *:first-child::after {border-color:rgba(234,234,234,1);}body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .menu-borders.needs-after::after,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .menu-smart,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .menu-smart > li,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity):not(.navbar-hover) .menu-transparent.menu-dark .navbar-nav-first > *:first-child::after {border-color:rgba(255,255,255,0.15);}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-borders.needs-after::after,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-smart,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-smart > li,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-nav-first > *:first-child::after {border-color:rgba(234,234,234,1) !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-borders.needs-after::after,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-smart,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-smart > li,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-nav-first > *:first-child::after {border-color:rgba(255,255,255,0.15) !important;}body:not(.menu-force-opacity) .menu-light .menu-borders.needs-after .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity) .menu-light .menu-borders.needs-after .navbar-nav-first > *:first-child::after {border-color:rgba(234,234,234,1);}body:not(.menu-force-opacity) .menu-dark .menu-borders.needs-after .navbar-nav-last > *:first-child::after,body:not(.menu-force-opacity) .menu-dark .menu-borders.needs-after .navbar-nav-first > *:first-child::after {border-color:rgba(255,255,255,0.15);}body:not(.menu-force-opacity):not(.navbar-hover) .menu-overlay .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover).menu-overlay .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-borders:not(.needs-after),body:not(.menu-force-opacity):not(.navbar-hover) .menu-overlay .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-borders.needs-after::after,body:not(.menu-force-opacity):not(.navbar-hover).menu-overlay .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-borders.needs-after::after {border:none;}@media (min-width:960px) {.submenu-transparent.submenu-light .menu-smart ul,.submenu-transparent.submenu-light .menu-smart li ul li {border-color:rgba(234,234,234,1);}.submenu-transparent.submenu-dark .menu-smart ul,.submenu-transparent.submenu-dark .menu-smart li ul li {border-color:rgba(255,255,255,0.15);}}.main-header .style-light-bg,.menu-wrapper .style-light-bg {background-color:#ffffff;}.main-header .style-dark-bg,.menu-wrapper .style-dark-bg {background-color:#141618;}.submenu-light .menu-horizontal .menu-smart ul,#uncode_sidecart.style-light {background-color:#f7f7f7;}.submenu-dark .menu-horizontal .menu-smart ul,#uncode_sidecart.style-dark {background-color:#1b1d1f;}@media (max-width:959px) {.submenu-light:not(.isotope-filters) .menu-smart,.submenu-light:not(.isotope-filters) .menu-sidebar-inner,.submenu-light:not(.isotope-filters) .main-menu-container {background-color:#f7f7f7;}.submenu-dark:not(.isotope-filters) .menu-smart,.submenu-dark:not(.isotope-filters) .menu-sidebar-inner,.submenu-dark:not(.isotope-filters) .main-menu-container {background-color:#1b1d1f;}}@media (min-width:960px) {body:not(.menu-overlay):not(.hmenu-center):not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-light-original,body:not(.menu-overlay):not(.hmenu-center):not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original.style-light-override {opacity:0;}body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-light-original > *,body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original.style-light-override > * {background:transparent;background-color:rgba(255,255,255,0);}body:not(.menu-overlay):not(.hmenu-center):not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original,body:not(.menu-overlay):not(.hmenu-center):not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-light-original.style-dark-override {opacity:0;}body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original > *,body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent.style-light-original.style-dark-override > * {background:transparent;background-color:rgba(20,22,24,0);}}@media (max-width:959px) {body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent.style-light-original > *,body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original.style-light-override > * {background:transparent;background-color:rgba(255,255,255,0);}body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent.style-dark-original > *,body:not(.menu-force-opacity):not(.navbar-hover) .menu-wrapper:not(.no-header) .menu-transparent:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent.style-light-original.style-dark-override > * {background:transparent;background-color:rgba(20,22,24,0);}}.submenu-light .menu-smart span.scroll-up,.submenu-light .menu-smart span.scroll-down {border-color:rgba(234,234,234,1);background-color:#ffffff;}.submenu-dark .menu-smart span.scroll-up,.submenu-dark .menu-smart span.scroll-down {border-color:rgba(255,255,255,0.15);background-color:#141618;}.submenu-light .menu-smart span.scroll-up-arrow,.submenu-light .menu-smart span.scroll-down-arrow {border-color:transparent transparent rgba(234,234,234,1) transparent !important;}.submenu-dark .menu-smart span.scroll-up-arrow,.submenu-dark .menu-smart span.scroll-down-arrow {border-color:transparent transparent rgba(255,255,255,0.15) transparent !important;}.submenu-light .menu-smart span.scroll-down-arrow {border-color:rgba(234,234,234,1) transparent transparent transparent !important;}.submenu-dark .menu-smart span.scroll-down-arrow {border-color:rgba(255,255,255,0.15) transparent transparent transparent !important;}.mobile-menu-button-dark .lines,.mobile-menu-button-dark .lines:before,.mobile-menu-button-dark .lines:after,.mobile-menu-button-dark .lines > span {background:#ffffff;}.mobile-menu-button-light .lines,.mobile-menu-button-light .lines:before,.mobile-menu-button-light .lines:after,.mobile-menu-button-light .lines > span {background:#777777;}.mobile-menu-button-dark .burger-label {color:#ffffff;}.mobile-menu-button-light .burger-label {color:#777777;}@media (min-width:960px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines:before,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines:after,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines > span,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines:before,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines:after,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines > span {background:#777777;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines:before,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines:after,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .lines > span,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines:before,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines:after,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines > span {background:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck):not(.is_mobile_open).menu-transparent .burger-label,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .burger-label {color:#777777;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck):not(.is_mobile_open).menu-transparent .burger-label,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .burger-label {color:#ffffff;}}@media (max-width:959px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines:before,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines:after,body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines > span,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines:before,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines:after,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .lines > span {background:#777777;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines:before,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines:after,body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .lines > span,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines:before,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines:after,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .lines > span {background:#ffffff;}}@media (max-width:959px) {[class*="menu-dd-shadow-"].menu-horizontal .menu-smart ul,[class*="menu-dd-shadow-"].menu-horizontal .menu-smart li.menu-item > .vc_row {box-shadow:none !important;}}@media (min-width:960px) {.menu-shadows {box-shadow:0 4px 10px -10px rgba(0, 0, 0, 0.6);}body[class*=vmenu-] .menu-shadows {box-shadow:0 0px 7px -1px rgba(0, 0, 0, 0.1);}}body:not(.menu-force-opacity) .menu-primary:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-shadows.force-no-shadows {box-shadow:none;}@media (min-width:960px) {body:not(.menu-force-opacity):not(.menu-scroll-transparency:not(.navbar-hover))[class*=hmenu-] .menu-primary.is_stuck .menu-container {box-shadow:0 4px 10px -10px rgba(0, 0, 0, 0.6);}}@media (max-width:959px) {body:not(.menu-force-opacity):not(.menu-scroll-transparency:not(.navbar-hover)) .menu-primary.is_stuck:not(.menu-mobile-transparent) .menu-container {box-shadow:0 4px 10px -10px rgba(0, 0, 0, 0.6);}}.submenu-light .menu-accordion .menu-smart ul {background-color:#ffffff;}.submenu-dark .menu-accordion .menu-smart ul {background-color:#141618;}.menu-overlay .menu-accordion .menu-smart:not(.menu-cta-inner) ul {background-color:transparent !important;}@media (min-width:960px) {.menu-overlay .menu-dark.submenu-light .menu-smart:not(.menu-cta-inner) ul a {color:#ffffff;}.menu-overlay .menu-dark.submenu-light .menu-smart:not(.menu-cta-inner) ul a:hover,.menu-overlay .menu-dark.submenu-light .menu-smart:not(.menu-cta-inner) ul a:focus {color:#3259f1;}}@media (min-width:960px) {.menu-overlay .menu-light.submenu-dark .menu-smart:not(.menu-cta-inner) ul a {color:#777777;}.menu-overlay .menu-light.submenu-dark .menu-smart:not(.menu-cta-inner) ul a:hover,.menu-overlay .menu-light.submenu-dark .menu-smart:not(.menu-cta-inner) ul a:focus {color:#3259f1;}}.overlay .overlay-bg {opacity:0.949999;}.style-light .navbar-brand .logo-skinnable {color:#3259f1;}.style-light .navbar-brand .logo-skinnable > * {color:#3259f1;}.style-light .navbar-brand .logo-skinnable svg * {fill:#3259f1;}.style-dark .navbar-brand .logo-skinnable {color:#ffffff;}.style-dark .navbar-brand .logo-skinnable > * {color:#ffffff;}.style-dark .navbar-brand .logo-skinnable svg * {fill:#ffffff;}@media (min-width:960px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable {color:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable > *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable > * {color:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable svg *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable svg * {fill:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable {color:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable > *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable > * {color:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable svg *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable svg * {fill:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-dark,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-dark {display:none !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-light,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-light {display:block !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-dark,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-dark {display:block !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-light,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-light {display:none !important;}}@media (max-width:959px) {body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable {color:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable > *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable > * {color:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable svg *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-skinnable svg * {fill:#3259f1;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable {color:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable > *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable > * {color:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-skinnable svg *,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-skinnable svg * {fill:#ffffff;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-dark,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-dark {display:none !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-light,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .navbar-brand .logo-light {display:block !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-dark,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-dark {display:block !important;}body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-mobile-transparent)):not(.is_mobile_open).menu-transparent .navbar-brand .logo-light,html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override .navbar-brand .logo-light {display:none !important;}}.submenu-light .menu-accordion .menu-smart .uncode-cart li {border-color:rgba(234,234,234,1);}.submenu-dark .menu-accordion .menu-smart .uncode-cart li {border-color:rgba(255,255,255,0.15);}.row-inner.col-w-borders > div:not(:first-child) > .uncol.style-light:before {background-color:rgba(234,234,234,1);}.row-inner.col-w-borders > div:not(:first-child) > .uncol.style-dark:before {background-color:rgba(255,255,255,0.15);}.tmb-light.tmb-color-overlay-text,.tmb-light.tmb .t-entry-visual *:not(.add_to_cart_text):not(.view-cart),.tmb-light.tmb .t-entry-visual a:not(.add_to_cart_text):not(.view-cart),.tmb-light.tmb .t-entry-visual .t-entry-title a:not(.add_to_cart_text):not(.view-cart),.tmb-light.tmb .t-entry-visual .t-entry-meta span:not(.add_to_cart_text):not(.view-cart) {color:#ffffff;}.tmb-dark.tmb-color-overlay-text,.tmb-dark.tmb .t-entry-visual *:not(.add_to_cart_text):not(.view-cart),.tmb-dark.tmb .t-entry-visual a:not(.add_to_cart_text):not(.view-cart),.tmb-dark.tmb .t-entry-visual .t-entry-title a:not(.add_to_cart_text):not(.view-cart),.tmb-dark.tmb .t-entry-visual .t-entry-meta span:not(.add_to_cart_text):not(.view-cart) {color:#303133;}.tmb-color-colored-ui,.tmb .t-cat-over a.bordered-cat,.tmb .t-cat-over span.bordered-cat,.tmb a.tmb-term-evidence:not(.bordered-cat),.uncode-info-box a.tmb-term-evidence:not(.bordered-cat),.tmb span.tmb-term-evidence:not(.bordered-cat),.uncode-info-box span.tmb-term-evidence:not(.bordered-cat),.t-cat-over .tmb a.bordered-cat,.t-cat-over .uncode-info-box a.bordered-cat,.t-cat-over .tmb span.bordered-cat,.t-cat-over .uncode-info-box span.bordered-cat {color:#ffffff !important;}.tmb-light.tmb-color-title,.tmb-light.tmb .t-entry-text .t-entry-title a,.tmb-light.tmb .t-entry-text .t-entry-title,.tmb-light.tmb-content-under.tmb .t-entry p.t-entry-meta span,.tmb-light.tmb-content-lateral.tmb .t-entry p.t-entry-meta span,.tmb-light.tmb-content-under.tmb .t-entry p.t-entry-meta a:not(:hover),.tmb-light.tmb-content-lateral.tmb .t-entry p.t-entry-meta a:not(:hover),.tmb-light.tmb .t-entry-nav-label span,.tmb-light.tmb-woocommerce.tmb .t-entry .t-entry-stars .star-rating,.tmb-light.tmb.tmb-table .t-inside-post-table .t-entry-table-typography,.tmb-light.tmb.tmb-table .t-inside-post-table .t-entry-table-typography a {color:#303133;}.tmb-dark.tmb-color-title,.tmb-dark.tmb .t-entry-text .t-entry-title a,.tmb-dark.tmb .t-entry-text .t-entry-title,.tmb-dark.tmb-content-under.tmb .t-entry p.t-entry-meta span,.tmb-dark.tmb-content-lateral.tmb .t-entry p.t-entry-meta span,.tmb-dark.tmb-content-under.tmb .t-entry p.t-entry-meta a:not(:hover),.tmb-dark.tmb-content-lateral.tmb .t-entry p.t-entry-meta a:not(:hover),.tmb-dark.tmb .t-entry-nav-label span,.tmb-dark.tmb-woocommerce.tmb .t-entry .t-entry-stars .star-rating,.tmb-dark.tmb.tmb-table .t-inside-post-table .t-entry-table-typography,.tmb-dark.tmb.tmb-table .t-inside-post-table .t-entry-table-typography a {color:#ffffff;}.tmb-light.tmb-color-text,.tmb-light.tmb .t-entry-text,.tmb-light.tmb .t-entry-text p,.tmb-light.tmb .t-entry p.t-entry-comments .extras a,.tmb-light.tmb-woocommerce.tmb .t-entry .t-entry-category a,.tmb-light.tmb-woocommerce.tmb .t-entry .t-entry-category .cat-comma,.tmb-light.tmb.tmb-table .uncode-post-table-column,.tmb-light.tmb.tmb-table .uncode-post-table-column p:not(.headings-color):not(.t-entry-table-typography) {color:#777777;}.tmb-dark.tmb-color-text,.tmb-dark.tmb .t-entry-text,.tmb-dark.tmb .t-entry-text p,.tmb-dark.tmb .t-entry p.t-entry-comments .extras a,.tmb-dark.tmb-woocommerce.tmb .t-entry .t-entry-category a,.tmb-dark.tmb-woocommerce.tmb .t-entry .t-entry-category .cat-comma,.tmb-dark.tmb.tmb-table .uncode-post-table-column,.tmb-dark.tmb.tmb-table .uncode-post-table-column p:not(.headings-color):not(.t-entry-table-typography) {color:#ffffff;}.tmb-light.tmb-color-hr,.tmb-light.el-text hr.separator-reduced,.tmb-light.tmb .t-entry-visual hr,.tmb-light.tmb .t-entry-text hr,.tmb-light.tmb-table-border.tmb.tmb-table .t-inside,.tmb-light.tmb-table-border-between:not(:last-child).tmb.tmb-table .t-inside,.tmb-light.tmb-table-border-below.tmb.tmb-table .t-inside,.tmb-light.tmb-table-border-both:first-child.tmb.tmb-table .t-inside,.tmb-light.tmb.tmb-table .uncode-post-table-column hr {border-color:#eaeaea;}.tmb-dark.tmb-color-hr,.tmb-dark.el-text hr.separator-reduced,.tmb-dark.tmb .t-entry-visual hr,.tmb-dark.tmb .t-entry-text hr,.tmb-dark.tmb-table-border.tmb.tmb-table .t-inside,.tmb-dark.tmb-table-border-between:not(:last-child).tmb.tmb-table .t-inside,.tmb-dark.tmb-table-border-below.tmb.tmb-table .t-inside,.tmb-dark.tmb-table-border-both:first-child.tmb.tmb-table .t-inside,.tmb-dark.tmb.tmb-table .uncode-post-table-column hr {border-color:rgba(255, 255, 255, 0.25);}.tmb-light.tmb-color-a,.tmb-light.tmb-content-under.tmb .t-entry p.t-entry-author a:not(:hover) span,.tmb-light.tmb-content-lateral.tmb .t-entry p.t-entry-author a:not(:hover) span {color:#303133;}.tmb-dark.tmb-color-a,.tmb-dark.tmb-content-under.tmb .t-entry p.t-entry-author a:not(:hover) span,.tmb-dark.tmb-content-lateral.tmb .t-entry p.t-entry-author a:not(:hover) span {color:#ffffff;}.tmb-light.tmb-color-addcart,.tmb-light.tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a {background-color:#262729;}.tmb-dark.tmb-color-addcart,.tmb-dark.tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a {background-color:#ffffff;}.tmb-light.tmb-color-addcart-half,.tmb-light.tmb .icon-badge > div,.tmb-light.tmb .icon-badge > a {color:#303133 !important;background-color:rgba(255, 255, 255, 0.75);}.tmb-dark.tmb-color-addcart-half,.tmb-dark.tmb .icon-badge > div,.tmb-dark.tmb .icon-badge > a {color:#ffffff !important;background-color:rgba(38, 39, 41, 0.75);}.tmb.tmb-light.tmb-overlay-gradient-bottom .t-entry-visual .t-entry-visual-overlay-in {background-image:linear-gradient(to top, rgba(0, 0, 0, 0.75) 0%, transparent 50%);}.tmb.tmb-dark.tmb-overlay-gradient-bottom .t-entry-visual .t-entry-visual-overlay-in {background-image:linear-gradient(to top, rgba(255, 255, 255, 0.5) 0%, transparent 50%);}.tmb.tmb-light.tmb-overlay-gradient-top .t-entry-visual .t-entry-visual-overlay-in {background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.75) 0%, transparent 50%);}.tmb.tmb-dark.tmb-overlay-gradient-top .t-entry-visual .t-entry-visual-overlay-in {background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, transparent 50%);}.tmb-border-width {border-width:1px;}.tmb-border-reduced-width,.el-text hr.separator-reduced {border-width:2px;}.tmb-with-shadow,.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed.tmb .t-entry-visual,.uncode-single-media-wrapper.tmb-shadow,.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe {box-shadow:0px 5px 15px rgba(0, 0, 0, 0.05);}.tmb-light.tmb-border,.tmb-light.tmb-bordered:not(.tmb-no-bg):not(.tmb-shadowed).tmb > .t-inside,.tmb-light.tmb-bordered.tmb-no-bg.tmb > .t-inside .t-entry-visual {border:1px solid #eaeaea;}.tmb-dark.tmb-border,.tmb-dark.tmb-bordered:not(.tmb-no-bg):not(.tmb-shadowed).tmb > .t-inside,.tmb-dark.tmb-bordered.tmb-no-bg.tmb > .t-inside .t-entry-visual {border:1px solid #7a7d82;}.tmb-light.tmb-border-under {border-color:#eaeaea;}.tmb-dark.tmb-border-under {border-color:#ffffff;}.post-media .tmb-light .regular-text p,.post-media .tmb-light .regular-text a,.post-media .tmb-light .regular-text * {color:#303133;}.post-media .tmb-light .regular-text .pullquote * {color:#303133 !important;}.post-media .tmb-dark .regular-text p,.post-media .tmb-dark .regular-text a,.post-media .tmb-dark .regular-text * {color:#ffffff;}.post-media .tmb-dark .regular-text .pullquote * {color:#ffffff !important;}.body-borders .body-border-shadow {box-shadow:0 0px 14px 0px rgba(0, 0, 0, 0.1);}@media (min-width:960px) {.menu-shadows {box-shadow:0 4px 10px -10px rgba(0, 0, 0, 0.6);}body[class*=vmenu-] .menu-shadows {box-shadow:0 0px 7px -1px rgba(0, 0, 0, 0.1);}}.btn-shadow {box-shadow:0 4px 10px -5px rgba(0, 0, 0, 0.6) !important;}.btn-shadow-sm.btn-shadow {box-shadow:0 4px 18px -4px rgba(0, 0, 0, 0.6) !important;}.btn-shadow-std.btn-shadow {box-shadow:0 8px 30px -6px rgba(0, 0, 0, 0.6) !important;}.btn-shadow-lg.btn-shadow {box-shadow:0 13px 34px -9px rgba(0, 0, 0, 0.6) !important;}.btn-shadow-xl.btn-shadow {box-shadow:0 20px 50px -12px rgba(0, 0, 0, 0.6) !important;}.unshadow-xs,.uncell.unshadow-xs,.uncont.unshadow-xs,.menu-dd-shadow-xs.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-xs.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-xs.menu-horizontal .menu-smart > li.menu-item > .vc_row {box-shadow:0px 5px 15px rgba(0, 0, 0, 0.05);}.unshadow-darker-xs,.menu-dd-shadow-darker-xs.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-darker-xs.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-darker-xs.menu-horizontal .menu-smart > li.menu-item > .vc_row {box-shadow:0px 5px 15px rgba(0, 0, 0, 0.5);}.unshadow-sm,.uncell.unshadow-sm,.uncont.unshadow-sm,.tmb-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-sm.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-sm.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-sm.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-sm.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-sm.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-sm.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-sm.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-sm.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-sm.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 20px 60px -30px rgba(0, 0, 0, 0.45);}.unshadow-darker-sm,.uncell.unshadow-darker-sm,.uncont.unshadow-darker-sm,.tmb-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-darker-sm.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-sm.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-darker-sm.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-sm.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-darker-sm.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-darker-sm.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-darker-sm.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-darker-sm.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-darker-sm.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-darker-sm.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 20px 60px -30px rgba(0, 0, 0, 1);}.unshadow-std,.uncell.unshadow-std,.uncont.unshadow-std,.tmb-shadowed-std.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-std.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-std.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-std.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-std.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-std.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-std.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-std.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-std.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-std.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-std.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 30px 60px -30px rgba(0,0,0,.45);}.unshadow-darker-std,.uncell.unshadow-darker-std,.uncont.unshadow-darker-std,.tmb-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-darker-std.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-std.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-darker-std.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-std.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-darker-std.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-darker-std.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-darker-std.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-darker-std.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-darker-std.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-darker-std.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 30px 60px -30px rgba(0, 0, 0, 1);}.unshadow-lg,.uncell.unshadow-lg,.uncont.unshadow-lg,.tmb-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-lg.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-lg.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-lg.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-lg.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-lg.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-lg.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-lg.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-lg.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-lg.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 55px 80px -40px rgba(0,0,0,.45);}.unshadow-darker-lg,.uncell.unshadow-darker-lg,.uncont.unshadow-darker-lg,.tmb-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-darker-lg.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-lg.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-darker-lg.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-lg.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-darker-lg.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-darker-lg.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-darker-lg.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-darker-lg.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-darker-lg.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-darker-lg.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 55px 80px -40px rgba(0, 0, 0, 1);}.unshadow-xl,.uncell.unshadow-xl,.uncont.unshadow-xl,.tmb-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-xl.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-xl.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-xl.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-xl.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-xl.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-xl.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-xl.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-xl.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-xl.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 70px 100px -40px rgba(0, 0, 0, 0.5);}.unshadow-darker-xl,.uncell.unshadow-darker-xl,.uncont.unshadow-darker-xl,.tmb-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-darker-xl.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-xl.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-darker-xl.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-media-shadowed-darker-xl.tmb-media-shadowed.tmb .t-entry-visual,.tmb-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-darker-xl.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.menu-dd-shadow-darker-xl.menu-horizontal .menu-smart > li.menu-item > ul,.menu-dd-shadow-darker-xl.menu-horizontal .menu-smart > li.menu-item:not(.mega-menu) > ul ul,.menu-dd-shadow-darker-xl.menu-horizontal .menu-smart > li.menu-item > .vc_row,.uncell.tmb-media-shadowed-darker-xl.tmb-media-shadowed.tmb .t-entry-visual,.uncont.tmb-media-shadowed-darker-xl.tmb-media-shadowed.tmb .t-entry-visual {box-shadow:0px 70px 100px -40px rgba(0, 0, 0, 1);}.unshadow-none,.uncell.unshadow-hover-none:hover,.uncont.unshadow-hover-none:hover,.tmb-shadowed-none.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-none.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-media-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).tmb > .t-inside,.tmb-shadowed-none.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-darker-none.tmb-shadowed.tmb-no-bg.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-none.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-shadowed-hover-darker-none.tmb-shadowed.tmb-shadowed-hover.tmb-no-bg:hover.tmb > .t-inside .t-entry-visual,.tmb-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe,.tmb-media-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) img,.tmb-media-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) video,.tmb-media-shadowed-darker-none.tmb-shadowed:not(.tmb-no-bg).t-entry-drop:not(.drop-parent) iframe {box-shadow:none;}.unradius-xs,.img-round-xs.img-round,.img-round-xs.tmb-round,.img-round-xs.img-round > img,.img-round-xs.tmb-round > img,.img-round-xs.img-round > .t-inside,.img-round-xs.tmb-round > .t-inside,.img-round-xs.img-round .t-entry-visual-cont > a,.img-round-xs.tmb-round .t-entry-visual-cont > a,.uncell.unradius-xs,.uncont.unradius-xs,.img-round-xs.img-round.tmb > .t-inside .t-entry-visual,.img-round-xs.img-round.tmb > .t-inside .t-entry-visual-cont {border-radius:2px;background-clip:padding-box;}.unradius-sm,.img-round,.tmb-round,.img-round > .t-inside,.tmb-round > .t-inside,.img-round > img,.tmb-round > img,.img-round .t-entry-visual-cont > a,.tmb-round .t-entry-visual-cont > a,.img-round .t-entry-visual-cont > .dummy,.tmb-round .t-entry-visual-cont > .dummy,.uncell.unradius-sm,.uncont.unradius-sm,.img-round.tmb > .t-inside .t-entry-visual,.img-round.tmb > .t-inside .t-entry-visual-cont {border-radius:4px;background-clip:padding-box;}.unradius-std,.img-round-std.img-round,.img-round-std.tmb-round,.img-round-std.img-round > img,.img-round-std.tmb-round > img,.img-round-std.img-round > .t-inside,.img-round-std.tmb-round > .t-inside,.img-round-std.img-round .t-entry-visual-cont > a,.img-round-std.tmb-round .t-entry-visual-cont > a,.uncell.unradius-std,.uncont.unradius-std,.img-round-std.img-round.tmb > .t-inside .t-entry-visual,.img-round-std.img-round.tmb > .t-inside .t-entry-visual-cont {border-radius:8px;background-clip:padding-box;}.unradius-lg,.img-round-lg.img-round,.img-round-lg.tmb-round,.img-round-lg.img-round > img,.img-round-lg.tmb-round > img,.img-round-lg.img-round > .t-inside,.img-round-lg.tmb-round > .t-inside,.img-round-lg.img-round .t-entry-visual-cont > a,.img-round-lg.tmb-round .t-entry-visual-cont > a,.uncell.unradius-lg,.uncont.unradius-lg,.img-round-lg.img-round.tmb > .t-inside .t-entry-visual,.img-round-lg.img-round.tmb > .t-inside .t-entry-visual-cont {border-radius:12px;background-clip:padding-box;}.unradius-xl,.img-round-xl.img-round,.img-round-xl.tmb-round,.img-round-xl.img-round > img,.img-round-xl.tmb-round > img,.img-round-xl.img-round > .t-inside,.img-round-xl.tmb-round > .t-inside,.img-round-xl.img-round .t-entry-visual-cont > a,.img-round-xl.tmb-round .t-entry-visual-cont > a,.uncell.unradius-xl,.uncont.unradius-xl,.img-round-xl.img-round.tmb > .t-inside .t-entry-visual,.img-round-xl.img-round.tmb > .t-inside .t-entry-visual-cont {border-radius:16px;background-clip:padding-box;}

@media (max-width: 959px) { .navbar-brand > * { height: 35px !important;}}
@media (min-width: 960px) { .limit-width { max-width: 1440px; margin: auto;}}
#changer-back-color { transition: background-color 1000ms cubic-bezier(0.25, 1, 0.5, 1) !important; } #changer-back-color > div { transition: opacity 1000ms cubic-bezier(0.25, 1, 0.5, 1) !important; } body.bg-changer-init.disable-hover .main-wrapper .style-light,  body.bg-changer-init.disable-hover .main-wrapper .style-light h1,  body.bg-changer-init.disable-hover .main-wrapper .style-light h2, body.bg-changer-init.disable-hover .main-wrapper .style-light h3, body.bg-changer-init.disable-hover .main-wrapper .style-light h4, body.bg-changer-init.disable-hover .main-wrapper .style-light h5, body.bg-changer-init.disable-hover .main-wrapper .style-light h6, body.bg-changer-init.disable-hover .main-wrapper .style-light a, body.bg-changer-init.disable-hover .main-wrapper .style-dark, body.bg-changer-init.disable-hover .main-wrapper .style-dark h1, body.bg-changer-init.disable-hover .main-wrapper .style-dark h2, body.bg-changer-init.disable-hover .main-wrapper .style-dark h3, body.bg-changer-init.disable-hover .main-wrapper .style-dark h4, body.bg-changer-init.disable-hover .main-wrapper .style-dark h5, body.bg-changer-init.disable-hover .main-wrapper .style-dark h6, body.bg-changer-init.disable-hover .main-wrapper .style-dark a { transition: color 1000ms cubic-bezier(0.25, 1, 0.5, 1) !important; } body.bg-changer-init.disable-hover .main-wrapper .heading-text-highlight-inner { transition-property: right, background; transition-duration: 1000ms }
::-webkit-input-placeholder { color:#d8d8d8 !important;} :-ms-input-placeholder { color:#d8d8d8 !important;} ::-moz-placeholder { color:#d8d8d8 !important; opacity:1 !important;} :-moz-placeholder { color:#d8d8d8 !important; opacity:1 !important;} .no-scroll { overflow:hidden !important;} #row-unique-0 > .limit-width { max-width:100%;} .footer-last { display:none;} #logo-container-mobile ul#menu-scholly-main-primary-menu-v2 li a { font-style:normal; font-weight:400 !important; font-size:18px !important; line-height:34px !important; align-items:center; text-align:center; letter-spacing:0.75px !important; color:#4E4B66;} .signUpContentD .blockDescription { color:#ffffff !important;} .signUpContentD .blockTitle { color:#ffad29 !important;} .btn-color-188981 { border:none; background-color:transparent !important; color:white !important;} .btn-color-188981:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover { background-color:#2543b5 !important; border:none; color:white !important;} .btn-outline { background-color:white !important; border:none; color:#3259f1 !important;} .btn-outline:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover { background-color:#cfd1de !important; border:none; color:#3259f1 !important;} .btn span { font-family:"Poppins"; font-style:normal; font-weight:500; font-size:14px; line-height:28px; display:flex; align-items:center; text-align:center; letter-spacing:0.75px;} .menu-btn-cell .btn { border-radius:6px !important; padding:6px 12px !important;} .menu-btn-cell .btn:hover { background-color:#2543b5; color:white;} .menu-btn-cell .btn { font-family:"Poppins"; font-style:normal !important; font-weight:500 !important; font-size:14px !important; line-height:28px; display:flex; align-items:center; text-align:center; letter-spacing:0.75px;} body[class*=" hmenu"].hormenu-position-left:not(.hmenu-center-split):not(.hmenu-position-center):not(.rtl) .navbar-nav-first:not(.navbar-cta) > ul > li:last-child > a, body[class*=" hmenu"].hormenu-position-left:not(.hmenu-center-split):not(.hmenu-position-center):not(.rtl) .navbar-nav-first:not(.navbar-cta) > ul > li:only-child > a { padding-right:14px;} @media (max-width:959px) { .menu-light .menu-item-link { height:60px !important;} .menu-horizontal-inner { padding:36px 0px 36px 0px;} .mobile-menu-button-light { background:transparent;} .mobile-menu-button-light .lines, .mobile-menu-button-light .lines:before, .mobile-menu-button-light .lines:after, .mobile-menu-button-light .lines > span { background:white;} body.menu-mobile-centered .main-menu-container .menu-horizontal .menu-horizontal-inner { padding:16px 0px 36px 0px; vertical-align:initial;} .menu-light .menu-smart .menu-item:hover a { color:#777777;} body.menu-mobile-centered .main-menu-container .menu-horizontal .menu-horizontal-inner ul.menu-smart li.menu-item > a, .menu-light .menu-smart a { font-family:"Poppins" !important; font-style:normal !important; font-weight:500 !important; font-size:14px !important; line-height:14px !important; text-align:center; letter-spacing:1px !important; color:#777777;} body.menu-mobile-centered .main-menu-container .menu-horizontal .menu-horizontal-inner ul.menu-smart li.menu-item > a:hover, .menu-light .menu-smart a:hover { background:#77777736; border-radius:6px;} .menu-item-button a, .menu-item-button .menu-btn-table { width:100%;} .menu-item-button span { margin:0 auto;} .btn-outline { background-color:#3259f1 !important; border:none; color:white !important;} .btn-outline:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover { background-color:#2543b5 !important; border:none; color:white !important;} .btn-color-188981 { background-color:white !important; border:none; color:#3259f1 !important; box-shadow:0px 0px 11px rgba(0, 0, 0, 0.08);} .btn-color-188981:not(.btn-flat):not(.btn-hover-nobg):not(.icon-animated):not(.btn-text-skin):hover { background-color:#cfd1de !important; border:none; color:#3259f1 !important;} #main-logo .navbar-brand img { width:49px; object-fit:cover; object-position:0 100%;} body[class*=" hmenu"].hormenu-position-left:not(.hmenu-center-split):not(.hmenu-position-center):not(.rtl) .navbar-nav-first:not(.navbar-cta) > ul > li:last-child > a, body[class*=" hmenu"].hormenu-position-left:not(.hmenu-center-split):not(.hmenu-position-center):not(.rtl) .navbar-nav-first:not(.navbar-cta) > ul > li:only-child > a { padding-right:36px;}} .btn-color-188981 { border:none;} ::-moz-selection { background-color:#ffea9d; color:#000000 !important;} ::selection { background-color:#ffea9d; color:#000000 !important;} .row-navigation.row-navigation-light { outline-color:#ffffff; background-color:#ffffff;} .buttons-style, input[type="submit"], input[type="reset"], input[type="button"], button[type="submit"], .btn:not(.btn-custom-typo), .btn-link:not(.btn-custom-typo), .nav-tabs, .panel-title > a span, .enhanced-atc.tmb-woocommerce.tmb .t-entry-visual .add-to-cart-overlay a, .search_footer, .wc-forward, .wc-forward a { font-weight:600 !important; letter-spacing:0.05em; font-size:16px;} #wpforms-1550 { max-width:900px; margin-left:auto; margin-right:auto;} div.wpforms-container-full .wpforms-form button[type="submit"] { background-color:#fb113f; padding:14px 60px; margin-left:auto; margin-right:auto; border-radius:30px; text-transform:uppercase; color:white;} .wpforms-form .wpforms-head-container, .wpforms-form .wpforms-submit-container { text-align:center;} div.wpforms-container-full .wpforms-form input.wpforms-field-large, div.wpforms-container-full .wpforms-form select.wpforms-field-large, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-large { max-width:100%; border-radius:30px;} div.wpforms-container-full .wpforms-form input.wpforms-field-medium, div.wpforms-container-full .wpforms-form select.wpforms-field-large, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-large { max-width:100%; border-radius:30px;} div.wpforms-container-full .wpforms-form input.wpforms-field-small, div.wpforms-container-full .wpforms-form select.wpforms-field-medium, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-medium { max-width:60%;} div.wpforms-container-full, div.wpforms-container-full .wpforms-form * { border-radius:30px !important;} .gdpr * { color:#fff !important;} body:not(.rtl) .gdpr-privacy-bar .gdpr-preferences { display:none;} .tmb .t-entry p.t-entry-readmore .btn { font-weight:500 !important; text-transform:uppercase; font-size:14px; color:#fb1040;} .tmb .t-entry p.t-entry-readmore .btn:hover { color:#fc7690;} body.hmenu .menu-primary .menu-horizontal .menu-smart > li > a, .navbar-cta ul.menu-smart > li > a { padding-top:7px;} #menu-item-78953 { margin-left:-15px;} @media (max-width:959px) { #menu-item-78953 { margin-left:0;}} .btn { border-radius:60px !important;} .gdpr button { border-radius:30px; padding:9px 40px 9px 40px;} .btn-accent.btn-flat:not(.btn-hover-nobg):hover, .btn-accent.btn-flat:not(.btn-hover-nobg):focus, btn-accent.btn-flat:active { background-color:#fc4367 !important; border-color:#bc1737 !important;} .shadow-inset-form, input, textarea, select, .seldiv, .select2-choice, .select2-selection--single { box-shadow:none; border-radius:24px !important; border:1px solid #9b9b9b !important;} input, textarea, select, .seldiv, .select2-choice, .select2-selection--single { margin:12px 18px 0px 0px !important;} .gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type="submit"], .gform_wrapper .gform_page_footer input.button, .gform_wrapper .gform_page_footer input[type="submit"] { background-color:#fb113f; border:none !important; border-radius:24px; width:300px !important; color:#fff;} body #gform_wrapper_5 .gform_footer.top_label { text-align:center;} body #gform_wrapper_4 .gform_footer.top_label { text-align:center;} body #gform_wrapper_7 .gform_footer.top_label { text-align:center;} body #gform_wrapper_9 .gform_footer.top_label { text-align:center;} body #gform_wrapper_3 .gform_footer.top_label { text-align:center;} body #gform_wrapper_10 .gform_footer.top_label { text-align:center;} .gform_wrapper label.gfield_label, .gform_wrapper legend.gfield_label { letter-spacing:0.5pt; font-weight:300 !important; font-size:18px;} .gform_wrapper .gform_footer input.button:hover { background-color:#fc4367;} .gform_wrapper.gf_browser_chrome select { padding:2px 36px 2px 3px !important;} .fullwidth input.button { width:96% !important;} .fullwidth input[type="submit"] { width:96% !important;} body .gform_wrapper .gform_body .gform_fields .gfield select { height:46px;} .gform_wrapper select { letter-spacing:0.05em !important;} .gform_wrapper.gf_browser_chrome select { padding-left:10px !important;} body .gform_wrapper .gform_body .gform_fields .gfield .name_first label { font-size:18px !important; font-weight:300 !important;} body .gform_wrapper .gform_body .gform_fields .gfield .name_last label { font-size:18px !important; font-weight:300 !important;} body .gform_wrapper .gform_body .gform_fields #field_5_27.gfield .gfield_checkbox li { text-align:center; vertical-align:center;} body .gform_wrapper .gform_body .gform_fields #field_5_27.gfield .gfield_checkbox li input[type="checkbox"] { margin:0px !important; margin-right:25px !important;} body .gform_wrapper .gform_body .gform_fields .gfield .ginput_container_fileupload input { border:none !important;} .gform_wrapper .gform_body .gform_fields #field_5_27.gfield .gfield_checkbox li input[type="checkbox"] { padding:10px; margin-right:5px !important;} .gform_wrapper .gform_body .gform_fields #field_5_27.gfield .gfield_checkbox li { margin-top:30px !important;} .style-light a strong { color:#fb113f !important;} body .gform_wrapper .gform_body .gform_fields #field_10_36.gfield .gfield_radio li { text-align:center; vertical-align:center;} body .gform_wrapper .gform_body .gform_fields #field_10_36.gfield .gfield_radio li input[type="radio"] { margin:10px !important; margin-right:25px !important;} body .gform_wrapper .gform_body .gform_fields .gfield .ginput_container_fileupload input { border:none !important;} .gform_wrapper .gform_body .gform_fields #field_10_36.gfield .gfield_radio li input[type="radio"] { padding:10px; margin-right:5px !important;} .gform_wrapper .gform_body .gform_fields #field_10_35.gfield .gfield_radio li { margin-top:30px !important;} body .gform_wrapper .gform_body .gform_fields #field_10_27.gfield .gfield_checkbox li { text-align:center; vertical-align:center;} body .gform_wrapper .gform_body .gform_fields #field_10_27.gfield .gfield_checkbox li input[type="checkbox"] { margin:0px !important; margin-right:25px !important;} body .gform_wrapper .gform_body .gform_fields .gfield .ginput_container_fileupload input { border:none !important;} .gform_wrapper .gform_body .gform_fields #field_10_27.gfield .gfield_checkbox li input[type="checkbox"] { padding:10px; margin-right:5px !important;} .gform_wrapper .gform_body .gform_fields #field_10_27.gfield .gfield_checkbox li { margin-top:30px !important;} .gform_wrapper ul.gfield_checkbox li input[type="checkbox"] { width:16px !important; height:16px !important;} .scholly-wp-button { background:#3259f1; border-radius:6px !important; color:white; font-family:"Poppins !important"; font-weight:500 !important; font-size:16px; line-height:28px; letter-spacing:0.75px; color:#ffffff; height:44px; width:327px !important; border-radius:6px;} .scholly-wp-button:hover { text-decoration:none !important; background:#2543b5 !important;} a#scholly-button { font-weight:500 !important;} .page-header-default h1 { font-family:"Poppins"; font-style:normal; font-weight:500; font-size:36px; line-height:55px; display:flex; align-items:center; letter-spacing:1px; color:#0e153b !important;} strong { font-weight:700; font-size:19px; color:#192c78 !important;} .copyright p { color:#fff !important;} .header-content-inner h1 { font-size:36px !important; font-family:"Poppins"; font-weight:500; line-height:60px; display:flex; align-items:center; text-align:center; justify-content:center; letter-spacing:0.75px; color:#ffffff;} @media (min-width:768px) { .header-content-inner h1 { font-size:48px !important;}} @media (min-width:1200px) {} .scholly-h1{ font-family:'Poppins'; font-style:normal; font-weight:500; font-size:36px; line-height:44px; color:#0E153B;} body.textual-accent-color .post-content > div ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn) { color:#3259f1 !important;} body.textual-accent-color .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn-text-skin):hover:not(.btn) { color:#3259f1 !important; text-decoration:underline;} body.textual-accent-color .post-content ul:not(.menu-smart):not(.nav-tabs):not(.pagination) a:not(.btn-text-skin):focus:not(.btn) { color:#3259f1 !important; text-decoration:underline;} body:not(.menu-force-opacity):not(.navbar-hover) .style-dark-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open).menu-transparent .menu-smart > li { border-color:#fb113f !important;} body.textual-accent-color .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn-text-skin):hover:not(.btn) { color:#3259f1 !important; text-decoration-line:underline;} body.textual-accent-color .row-container .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn):hover { color:#3259f1 !important; text-decoration:underline;} ul#subcategories-ul { list-style-type:none; display:flex; flex-wrap:nowrap; gap:6px; justify-content:center;} #subcategories-container { overflow-y:scroll;} ul#subcategories-ul li { background:#F4F4F4; border-radius:13px; display:flex; flex-direction:row; justify-content:center; align-items:center; padding:4px 16px; min-width:fit-content;} #subcategories-container { -ms-overflow-style:none; scrollbar-width:none;} #subcategories-container::-webkit-scrollbar { display:none;} @media screen and (min-width:768px) { ul#subcategories-ul { flex-wrap:wrap;}} article p, ul, table { color:#0e153b;} #custom_html-2 #main-content-container h1 { font-family:"Poppins" !important; font-style:normal; font-weight:500; font-size:34px; line-height:28px; color:#ffffff !important; text-align:center;} #custom_html-2 #scholly-font { text-align:center; font-weight:300; font-size:28px; line-height:30px; letter-spacing:1px; color:#ffffff; margin-top:0;} #custom_html-2 #get-started-button { display:flex; flex-direction:row; justify-content:center; align-items:center; padding:10px 0px; width:218px !important; height:40px; background:#fb113f; border-radius:56px; text-transform:uppercase; font-family:"Lato"; font-style:normal; font-weight:500; font-size:16px; line-height:28px; letter-spacing:0.75px; color:#ffffff;} #leftThing2 { color:#000;} .col-widgets-sidebar .widget-container .widget-title { text-transform:capitalize;} #categories-2 ul { margin-left:20px;} .row.row-parent.style-light.limit-width { padding:0 !important;} .row-container.row-navigation.row-navigation-light { height:fit-content;} .post-nav-cards-wrapper { display:block; font-family:"Poppins"; font-style:normal;} .post-nav-cards-container { display:flex; flex-direction:column; align-items:flex-start; padding:0px; width:792px; flex:none; order:1; flex-grow:0;} .nav-card-container { cursor:pointer; display:flex; flex-direction:column; padding:0px; isolation:isolate; width:380px; height:366px; filter:drop-shadow(0px 3px 18px rgba(17, 17, 17, 0.14)); flex:none; order:0; flex-grow:0; text-align:left !important; scale:0.85;} .nav-card-poster { background-size:cover; background-repeat:no-repeat; width:380px; height:220px; left:0.5px; top:-0.38px; background-color:#ddd; border-radius:13px 13px 0px 0px; flex:none; order:1; flex-grow:0; z-index:2;} .nav-card-content-wrapper { display:flex; flex-direction:column; align-items:center; padding:20px; gap:10px; width:380px; height:146px; background:#ffffff; border-radius:0px 0px 13px 13px; flex:none; order:2; align-self:stretch; flex-grow:0; box-sizing:border-box; z-index:1;} .nav-card-title-container { width:340px; font-weight:400; font-size:18px; line-height:24px; letter-spacing:1px; color:#000000; overflow:hidden;} .nav-card-title-container > p { margin:0 !important; width:340px; height:72px; line-height:24px; font-family:"Poppins" !important;} #you-may-also-like { width:379px; height:34px; font-weight:500; font-size:28px; line-height:34px; display:flex; justify-content:center; margin:40px 0; align-items:center; letter-spacing:1px; color:#0e153b; flex:none; order:0; flex-grow:0; scale:0.85; margin:0;} .read-more-link { width:340px; height:24px; font-weight:500; font-size:18px; line-height:24px; display:flex; align-items:center; letter-spacing:1px; color:#3259f1 !important; flex:none; order:1; align-self:stretch; flex-grow:0; text-decoration:none;} .read-more-link:hover { color:#3259f1 !important; text-decoration:underline !important;} .search-container-inner i.fa { position:absolute; left:0.55em !important; top:40% !important; margin-top:-9px; color:#A0A3BD; right:unset !important; font-size:25px;} input.search-field.form-fluid.no-livesearch { padding-left:42px;} @media screen and (min-width:420px) { .nav-card-container { scale:1;} #you-may-also-like { scale:1;} .post-nav-cards-wrapper { margin:0 25px;} #you-may-also-like { margin:20px 0;} .post-nav-cards-container { gap:32px;}} @media screen and (min-width:768px) { .row.row-parent.un-sidebar-layout.col-std-gutter.double-top-padding.no-bottom-padding { padding:48px 48px 0;} .post-nav-cards-container { margin-top:40px !important;} .post-nav-cards-wrapper { padding:0 48px; max-width:1220px; margin:auto;} .row.row-parent.un-sidebar-layout.col-std-gutter.double-top-padding.no-bottom-padding { max-width:1220px !important;} .col-lg-4.col-widgets-sidebar { padding-top:32px !important;}} @media screen and (min-width:1024px) { .post-nav-cards-container { flex-direction:row;} #you-may-also-like { justify-content:start;} .row-container.row-navigation.row-navigation-light { height:unset;} .row.row-parent.style-light.limit-width { padding:unset;} aside#custom_html-2 { margin-top:32px;}} #row-unique-1 > .limit-width { max-width:1220px !important;} input.search-field.form-fluid.no-livesearch { color:#000;} #holder9 { display:flex; justify-content:center;} input#leftThing2::placeholder { font-family:'Poppins'; font-style:normal; font-weight:400; font-size:14px; line-height:28px; display:flex; align-items:center; letter-spacing:0.75px; color:#4E4B66 !important;} #leftThing1 { font-family:Poppins; font-size:14px; font-weight:400; line-height:28px; letter-spacing:0.75px; text-align:left; border-radius:6px !important; z-index:1; margin:0 -10px 0 0px !important; padding:10px 15px; height:44px; max-width:190px;} input#leftThing2::placeholder { font-family:'Poppins'; font-style:normal; font-weight:400; font-size:14px; line-height:28px; display:flex; align-items:center; letter-spacing:0.75px; color:#4E4B66 !important;} #rightThingButton { background:#3259f1; border-radius:6px; font-family:Poppins; font-size:16px; font-weight:500; line-height:28px; letter-spacing:0.75px; text-align:center; color:white; height:44px; z-index:2;} #rightThing995 { z-index:2;} .blockDescription { width:270px; height:32px; font-family:"Poppins"; font-style:normal; font-weight:400; font-size:12px; line-height:130%; text-align:center; color:#ffffff; margin-bottom:20px; z-index:1;} .blockTitle { width:150px; height:26px; font-family:"Poppins"; font-style:normal; font-weight:400; font-size:20px; line-height:130%; display:flex; align-items:center; color:#ffad29; z-index:1; margin-top:0;} .signUpBlock { width:100%; height:220px; background:#0e153b; border-radius:0 ;} .signUpBlock .limit-width { padding:0 !important; max-width:100%;} .blobRightM { position:absolute !important; right:0; width:70px; top:-35px;} .blobLeftM { position:absolute !important; left:0; top:0;} .signUpContent { display:flex; flex-direction:column; align-items:center;} @media screen and (min-width:768px) { .signUpBlock { width:100%; height:220px; background:#0e153b; max-width:580px; overflow:hidden; margin:20px auto; border-radius:13px;} .site-footer .signUpBlock { max-width:580px !important; border-radius:12px; overflow:hidden; margin:20px auto;}} #holder9 { display:flex; justify-content:center; width:327px;} #leftThing3 { font-family:Poppins; font-size:14px; font-weight:400; line-height:28px; letter-spacing:0.75px; text-align:left; border-radius:6px !important; z-index:1; margin:0 -10px 0 0px !important; padding:10px 15px; height:44px; width:240px;} #rightThingButton { background:#3259f1; border-radius:6px; font-family:Poppins; font-size:16px; font-weight:500; line-height:28px; letter-spacing:0.75px; text-align:center; color:white; height:44px; z-index:2; width:120px;} #rightThing995 { z-index:2;} .blockDescription { width:270px; height:32px; font-family:"Poppins"; font-style:normal; font-weight:400; font-size:12px; line-height:130%; text-align:center; color:#ffffff; margin-bottom:20px;} .blockTitle { width:150px; height:26px; font-family:"Poppins"; font-style:normal; font-weight:400; font-size:20px; line-height:130%; display:flex; align-items:center; color:#ffad29;} .signUpBlock .limit-width { padding:0 !important; max-width:100%;} .blobRightT { position:absolute !important; right:0; width:145px; top:-35px;} .blobLeftT { position:absolute !important; left:0; top:0;} .signUpContent { display:flex; flex-direction:column; align-items:center;} @media screen and (min-width:1024px) { #holder9 { width:565px;}} #search-2 > form > div > input::placeholder { font-family:'Poppins'; font-style:normal; font-weight:400; font-size:14px; line-height:28px; display:flex; align-items:center; letter-spacing:0.75px; color:#A0A3BD !important;} .isotope-container.isotope-layout.style-masonry.isotope-infinite.grid-infinite.isotope-infinite-button.grid-infinite-button.un-isotope-init { margin:auto; max-width:1204px;} .isotope-container.isotope-layout.style-masonry.isotope-infinite.grid-infinite.isotope-infinite-button.grid-infinite-button.un-isotope-init { width:calc(100% - 15px);} .t-entry-excerpt { display:none !important;} @media (min-width:960px){ body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override:not(.is_stuck:not(.menu-desktop-transparent)):not(.is_mobile_open) .menu-horizontal-inner > .nav > .menu-smart > li > a, html.overlay-open body:not(.menu-force-opacity):not(.navbar-hover) .style-light-override .menu-horizontal-inner > .nav > .menu-smart > li > a { color:#ffffff !important;}} .mobile-menu-button-light .lines, .mobile-menu-button-light .lines:before, .mobile-menu-button-light .lines:after, .mobile-menu-button-light .lines > span { background:white !important;} div#logo-container-mobile { display:flex; align-items:center; height:auto;} div#main-logo { margin:0;} div#search-on-nav { width:200px;} @media (min-width:425px){ div#search-on-nav { width:100%; max-width:unset;} div#mobile-search-wrapper { width:75%;}} @media (min-width:960px){ div#mobile-search-wrapper { display:none;} .menu-smart > li > a { padding:0px 14px 0px 14px !important;}} input.search-field.form-fluid.no-livesearch { margin:0 !important;} div#search-on-nav { position:relative; left:-10px;} .search-no-results .post-wrapper { display:table; table-layout:fixed; width:100%; height:100%; padding:36px 36px 100px; max-width:1400px; margin:auto; justify-content:center;} .modal{ z-index:999900 !important;} #offer-redirect-modal { z-index:999999 !important;} @media (min-width:959px) { body.menu-mobile-centered .main-menu-container .menu-horizontal .menu-horizontal-inner ul.menu-smart li.menu-item > a { background:transparent !important; color:white !important;}} @media (min-width:959px) { .menu-light .menu-smart .menu-item-link a{ color:#4E4B66;}}
</style>
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='uncode-style-single-media-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/css/style-single-media.css?ver=all' type='text/css' media='all' />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='uncode-style-utils-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/css/style-utils.css?ver=all' type='text/css' media='all' />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='uncode-icons-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/css/uncode-icons.css' type='text/css' media='all' />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='child-style-css' href='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode-child/style.css' type='text/css' media='all' />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id='jetpack_css-css' href='https://c0.wp.com/p/jetpack/12.2.1/css/jetpack.css' type='text/css' media='all' />
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/duracelltomi-google-tag-manager/js/analytics-talk-content-tracking.js?ver=1.16.2' id='gtm4wp-scroll-tracking-js'></script>
<script type='text/javascript' id='uncode-init-js-extra'>
/* <![CDATA[ */
var SiteParameters = {"days":"days","hours":"hours","minutes":"minutes","seconds":"seconds","constant_scroll":"on","scroll_speed":"2","parallax_factor":"0.25","loading":"Loading\u2026","slide_name":"slide","slide_footer":"footer","ajax_url":"https:\/\/myscholly.com\/wp-admin\/admin-ajax.php","nonce_adaptive_images":"6225451d30","nonce_srcset_async":"5382738ecf","enable_debug":"","block_mobile_videos":"","is_frontend_editor":"","main_width":["1440","px"],"mobile_parallax_allowed":"","wireframes_plugin_active":"","sticky_elements":"off","lazyload_type":"rocket","resize_quality":"70","register_metadata":"","bg_changer_time":"1000","update_wc_fragments":"1","optimize_shortpixel_image":"","custom_cursor_selector":"[href], .trigger-overlay, .owl-next, .owl-prev, .owl-dot, input[type=\"submit\"], button[type=\"submit\"], a[class^=\"ilightbox\"], .ilightbox-thumbnail, .ilightbox-prev, .ilightbox-next, .overlay-close, .unmodal-close, .qty-inset > span, .share-button li, .uncode-post-titles .tmb.tmb-click-area, .btn-link, .tmb-click-row .t-inside, .lg-outer button, .lg-thumb img","mobile_parallax_animation":"","lbox_enhanced":"","native_media_player":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/init.min.js' id='uncode-init-js'></script>
<link rel="https://api.w.org/" href="https://myscholly.com/wp-json/" /><link rel="alternate" type="application/json" href="https://myscholly.com/wp-json/wp/v2/pages/91720" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://myscholly.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://d67gbjf2ukphr.cloudfront.net/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.2.2" />
<link rel='shortlink' href='https://myscholly.com/' />
<link rel="alternate" type="application/json+oembed" href="https://myscholly.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmyscholly.com%2F" />

	<style>img#wpstats{display:none}</style>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<!-- GTM Container placement set to automatic -->
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">
	var dataLayer_content = {"pagePostType":"frontpage","pagePostType2":"single-page","pagePostAuthor":"David Kuharchuk","pagePostDate":"October 24, 2022","pagePostDateYear":"2022","pagePostDateMonth":"10","pagePostDateDay":"24","pagePostDateDayName":"Monday","pagePostDateHour":"11","pagePostDateMinute":"06","pagePostDateIso":"2022-10-24T11:06:20+00:00","pagePostDateUnix":1666609580};
	dataLayer.push( dataLayer_content );
</script>
<script type="rocketlazyloadscript" data-cfasync="false">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBQ86FS');
</script>



          <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager for WordPress by gtm4wp.com --><!-- OneTrust Cookies Consent Notice start for myscholly.com -->

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">function OptanonWrapper() { }</script>
<!-- OneTrust Cookies Consent Notice end for myscholly.com --><link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-270x270.png" />

<link rel="icon" type="image/x-icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg">

<link rel="stylesheet" type="text/css" id="wp-custom-css" href="https://myscholly.com/?custom-css=1098b1a8a5" /><style type="text/css" data-type="vc_custom-css">#row-unique-1 > .limit-width {

    max-width: 100%;
}

#row-unique-11 > .limit-width {

    max-width: 100%;
    padding: 36px 0;
}


.post-body h2 {
      font-family: 'Poppins';
font-style: normal;
font-weight: 600 !important;
font-size: 32px !important;
line-height: 44px !important;
letter-spacing: 0.75px;
color: #0E153B !important;

}


@media (max-width: 800px) {

.post-body h2 {
      font-family: 'Poppins';
font-style: normal;
font-weight: 500 !important;
font-size: 27px !important;
line-height: 35px !important;
letter-spacing: 0.75px;
color: #0E153B !important;
text-align: center;
margin-top: 0;
}


}

.wp-image-92011{
    z-index: 1;
}

.slider{
z-index:1 !important;
}




  @media (min-width: 768px) and (max-width: 1024px) {
/*     .girlImage {
      background-image: none !important;
    } */
  }

  @media (max-width: 768px) {
    .girlImage {
      background-size: 415px !important;
    }

    .earnImage {
      background-size: 295px !important;
    }

    #title {
      font-family: inherit;
      font-style: normal;
      font-weight: 600;
      font-size: 32px;
      line-height: 130%;
      display: flex;
      align-items: center;
      letter-spacing: 0.75px;
      color: #F7F7F7;
      margin-top: 10px
    }



    .mobileShadow {
      position: absolute;
      border: 1px solid transparent;
      left: 0;
      right: 0;
      bottom: 136px;
      box-shadow: 0px -2px 4px 0px rgba(0, 0, 0, 0.77);
    }

    #mediaPress {
      display: none !important
    }

    #biggerBox {
      grid-template-columns: repeat(5, 1fr) !important;
    }

    #pageHolder {
      position: absolute;
      bottom: 20px;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
    }

    #carouselHolder92 {
      position: absolute;
      bottom: 15px;
      width: 330px !important;
      left: 0;
      right: 0;
      margin: 20px auto 50px; !important;
    }

    #earnButton {
      position: absolute;
      bottom: 15px;
      left: 0;
      right: 0;
      margin: 50px auto !important;
    }

    #nextButton {
      padding: 20px 10px !important;
      margin-top: 50px;
    }

    #actualStars {
      scale: 0.8
    }

    #backButton {
      padding: 20px 10px !important;
      margin-top: 50px;
    }
  }

  #description {
      display: none;


    }

  #contentBoxWrapper {
    margin-left: -36px;
    margin-top: -36px;
    margin-right: -36px;
    background-color: #2C4AF5;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  #contentBox {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(1, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: scroll;
    height: 520px;
    background-position: right;
    max-width: 1440px;
    flex: 1;
  }

  .earnImage {
        background-size: 630px;
    background-image: url(https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2022/10/Artboard-3@3x-1.png)
  }

  .girlImage {
    background-size: 910px;

  }

@media (min-width: 1200px) {
   #description {
   max-width: 80% !important;

    }

}

  @media (min-width: 768px) {
    #title {
      font-family: inherit;
      font-style: normal;
      font-weight: 600;
      font-size: 50px;
      line-height: 57px;
      display: flex;
      align-items: center;
      letter-spacing: 0.75px;
      color: #F7F7F7;
      word-break: break-word;
    }

    #description {
      font-family: inherit;
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 25px;
      display: flex;
      align-items: center;
      letter-spacing: 0.75px;
      color: #FFFFFF;
        max-width: 50%;

    }
  }

  #mediaPress {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 0;
    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.2);
    margin-left: -36px;
    margin-right: -36px;
  }

  .mediaPressImage {
    padding: 0 20px
  }

  .invisible {
    visibility: hidden
  }

  .displayNone {
    display: none !important
  }

  #biggerBox {
    grid-area: 1;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(12, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
  }

  #leftPeak {
    grid-area: 3 / 1 / 13 / 4;
    box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.1);
    border-radius: 25px;
    z-index: -2;
    margin-left: 50px
  }

  #rightPeak {
    grid-area: 3 / 10 / 13 / 13;
    box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.1);
    border-radius: 25px;
    z-index: -2;
    margin-right: 50px
  }

  #innerBox {
    grid-area: 1 / 2 / 13 / 12;
    padding-right: 10px;
    padding-left: 10px;
    border-radius: 25px;
    max-width: 550px;
    margin-top: 60px;
  }

  #pageHolder {
    grid-area: 12 / 4 / 13 / 10;
  }

  #nextButton {
    position: absolute;
    right: 0px;
    background-color: rgba(220, 220, 220, 0.2);
    padding: 40px 20px;
    top: calc(50% - 30px);
    cursor: pointer;
    display: flex;
    cursor: pointer;
    transform: rotate(180deg);
  }


  #backButton {
    position: absolute;
    left: 0px;
    background-color: rgba(220, 220, 220, 0.2);
    padding: 40px 20px;
    top: calc(50% - 30px);
    cursor: pointer;
    display: flex;
  }
/*
  #backButton:hover {
    background-color: rgba(220, 220, 220, 0.8);
  } */

  #mediaPress {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 0;
    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.2);
    margin-left: -36px;
    margin-right: -36px;
  }

  #contentHeader {
    grid-area: 4 / 4 / 9 / 10;
    margin-bottom: 20px;
    color: gray;
    font-size: 20px
  }

  #stars {
    grid-area: 10 / 4 / 11 / 10;
    text-align: center;
    max-width: 300px;
    padding-bottom: 20px;
    margin-left: auto;
    margin-right: auto
  }

  #pageHolder {
    min-width: 100px;
  }

  #page1 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: transparent;
    border: 1px solid white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px;
    cursor: pointer
  }

  #page2 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: transparent;
    border: 1px solid white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px;
    cursor: pointer
  }

  #page3 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px
  }

  #page4 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px
  }

  #page5 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px
  }

  #page6 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px
  }

  #page7 {
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 100%;
    margin-left: 7px;
    margin-right: 7px
  }

  .selected {
    background-color: white !important;
  }

  #actualStars {
    display: inline-block;
  }

  @media (max-width: 768px) {
    #innerBox {
      min-width: 140%;
      margin-left: -20%;
    }
  }


  #video1 {
        position: relative;
        padding-bottom: 56.25%;
     height: 285px;
        overflow: hidden;
    }

    #video1 iframe {
        background: #000;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (max-width: 1023px) {
         #video1{
            padding-bottom: 0;
            height: 284px;
        }

    }

     @media (max-width: 1023px) {
        #title {max-width: 90%;}

    }


    #mediaPress {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 50px 0;
  box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.2);
  margin-left: -36px;
  margin-right: -36px;
}
/*   NEW CODE   */

#carousel-container > div {
  padding: 0 !important;
}
.carousel {
  position: relative;
  width: 100%;
  height: 520px;
  overflow: hidden;
}
.slide {
  position: absolute;
  width: 100%;
  height: 520px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: left;
  color: #fff;
  font-size: 24px;
}
.slide h1 {
  font-family: Poppins;
  font-size: 32px;
  font-weight: 600;
  line-height: 42px;
  letter-spacing: 0.75px;
  text-align: left;
  margin: 0;
  color: #fff;
}

#two-k {
  font-size: 38px;
}
#slider2-description {
  /* display: none !important; */
}

#description-3 {
  display: none;
}
.description > p {
  font-family: Poppins;
  font-size: 16px;
  font-weight: 400;
  line-height: 21px;
  letter-spacing: 0px;
  text-align: left;
  color: #fff;
}
.button-container {
  height: 150px;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  width: 100%;
  padding: 30px 0px;
}
#button-container-1 {
  background-color: #192c78;
}
#button-container-2 {
  background: #3259f1;
  box-shadow: 0px -4px 4px 2px rgba(0, 0, 0, 0.25);
}

#button-container-3 {
  background: #162057;
  box-shadow: 0px -4px 4px 2px rgba(0, 0, 0, 0.25);
}
#prevButton,
#nextButton {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 8px;
  cursor: pointer;
  background-color: transparent;
  color: #fff;
  border: none;
  padding: 0px;
}
#prevButton {
  left: 0px;
}
#nextButton {
  right: 0px;
}

.page-indicator {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 20px;

  justify-content: center;
  width: 100%;
  padding: 20px 0;
}

.pageClass {
  width: 12px;
  height: 12px;
  border: 2px solid #fff;
  border-radius: 50%;
  cursor: pointer;
}
.pageClass.selected {
  background-color: #fff;
  border: 2px solid #fff;
}
#slider1 {
  background-color: #192c78;
  background-image: url(https://stage.myscholly.com/wp-content/uploads/2024/01/Web-Hero-Mobile-1.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

#slider2 {
  background-color: #2c4af5;
  background-image: url(https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2022/10/persona_1-1.png);
  background-repeat: no-repeat;
  background-position: center 70%;
  background-size: 70%;
}

#slider3 {
  background-color: #162057;
  background-image: url(https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2022/10/Artboard-3@3x-1.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}
.content-box {
  display: flex;
  align-self: flex-start;
  flex-direction: column;
  justify-content: space-between;
  height: 530px;
  width: 100%;
}
.content-wrapper {
  padding: 36px;
}
.button {
  background: #3259f1;
  border-radius: 6px;
  color: white;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 28px;
  letter-spacing: 0.75px;
  color: #ffffff;
  height: 44px;
  width: 327px;
  border-radius: 5px;
}


#carouselHolder92 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: 1fr;
  grid-column-gap: 0;
  grid-row-gap: 0;
  width: 360px !important;
  height: 48px !important;
  margin-bottom: 50px;
  margin-top: 20px;
}

#carouselLeftThing992 {
  grid-area: 1 / 1 / 2 / 2;
  background-color: #f2f2f2;
  width: 130% !important;
  padding-right: 60px;
  border: 0 solid red !important;
  margin: 0 !important;
  height: 48px !important;
  color: #000;
}

#carouselLeftThing992::placeholder {
  color: #787878 !important;
  opacity: 1 !important;
}

#carouselRightThing992 {
  grid-area: 1 / 2 / 2 / 3;
  width: 100% !important;
  margin-left: -50px !important;
  height: 48px !important;
}

#carouselStartedButton {
  background-color: #fb113f;
  height: 40px;
  width: 100% !important;
  color: white;
  border-radius: 24px !important;
  visibility: visible;
  height: 48px !important;
}
div#email-field-container {
  display: flex;
  width: 332px;
  flex-direction: column;
  font-size: 18px !important;
}

div#email-field-container button {
  font-size: 18px !important;
}

#earnButton {
  margin: 10px 0;
}

      #slider2 .content-wrapper {
    max-width: 452px;
}

/*=================* TABLET *===============*/
@media (min-width: 768px) {
  #media-container {
    margin-top: 0 !important;
    display: block;
  }

  .description {
    display: block;
  }

  .content-wrapper {
    padding: 36px;
    max-width: 600px;
  }
  .slide h1 {
    color: var(--White, #fff);
    font-feature-settings: "clig" off, "liga" off;
    font-family: Poppins;
    font-size: 44px;
    font-style: normal;
    font-weight: 600;
    line-height: 110%; /* 55px */
    letter-spacing: 0.75px;
    max-width: 450px;
  }

  #slider1 {
    background-color: #192c78;
    background-image: url(https://stage.myscholly.com/wp-content/uploads/2024/01/Hero-2K-Tablet-v1-2.png);
    background-repeat: no-repeat;
    background-position: center right;
    background-size: unset;
  }

  #slider2 {
     background-color: #192c78;

    background-image: url(https://stage.myscholly.com/wp-content/uploads/2024/01/persona_1-1.png);
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: unset;
  }
  #slider3 {
        background-color: #192c78;

    background-image: url(https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2022/10/Artboard-3@3x-1.png);
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: 70%;
  }
  .content-box {
    display: flex;
    align-self: flex-start;
    flex-direction: column;
    justify-content: space-between;
    height: auto;
    width: 100%;
  }
  .button-container {
    height: 100px;
    display: flex;
    justify-content: left;
    align-items: flex-start;
    width: 100%;
    padding: 0 36px;
  }
  #two-k {
    font-size: 50px;
  }
  #button-container-1,
  #button-container-2,
  #button-container-3 {
    background-color: unset;
    box-shadow: unset;
  }

  .content-box {
    margin: auto;
    padding: 30px;
  }
  .page-indicator {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 20px;
    max-width: 1200px;
    margin: 0 36px;
    justify-content: flex-start;
    width: 100%;
    padding: 30px;
  }

  #slider1 > div > div.content-wrapper > div > div > p {
    color: #fff;
    font-feature-settings: "clig" off, "liga" off;
    font-family: Poppins;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: 130%; /* 31.2px */
    letter-spacing: 0.75px;
  }

}
/*=================* TABLET ENDS *===============*/

/*=================* SMALL DESKTOP *===============*/
@media (min-width: 1024px) {
  .content-box {
    max-width: 1200px;
  }
  #slider2-description {
  display: block !important;
}

  .content-wrapper {
    max-width: 610px;
  }

  #slider1 {
    background-color: #192c78;
    background-image: url(https://stage.myscholly.com/wp-content/uploads/2024/01/Hero-2k-Desktop-1.png);
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: contain;
  }

  #slider2 .decsription p {
    display: block;
  }

  #description-3 {
    display: block;
  }

  #slider2 {
    background-color: #2c4af5;
    background-image: url(https://stage.myscholly.com/wp-content/uploads/2024/01/persona_1-1-1.png);
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: unset;
  }

  #slider3 {
    background-size: unset;
  }

  #two-k {
  font-size: 60px;
}

  .slide h1 {
    color: var(--White, #fff);
    font-feature-settings: "clig" off, "liga" off;
    font-family: Poppins;
    font-size: 44px;
    font-style: normal;
    font-weight: 600;
    line-height: 110%; /* 55px */
    letter-spacing: 0.75px;
    max-width: unset;
  }
}
.wpb_raw_code.wpb_content_element.wpb_raw_html.header-carousel {
    margin: 0 !important;
}
/*=================* SMALL DESKTOP ENDS *===============*/

div#input-container {
    display: flex;
    flex-direction: row;
}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

</head>
<body class="home page-template-default page page-id-91720  style-color-xsdn-bg group-blog hormenu-position-left megamenu-full-submenu hmenu hmenu-position-left header-full-width main-center-align menu-mobile-transparent textual-accent-color menu-mobile-centered menu-has-cta mobile-parallax-not-allowed ilb-no-bounce unreg qw-body-scroll-disabled menu-sticky-fix wpb-js-composer js-comp-ver-6.13.0 vc_responsive" data-border="0">
		<div id="vh_layout_help"></div>
        <style>
            /* Styles for the preloader */
            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1000;
            }

            .preloader-icon {
                border: 8px solid #f3f3f3;
                border-top: 8px solid #3498db;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>

<div id="preloader">
    <div class="preloader-icon"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            // Hide the preloader after 3 seconds
            document.getElementById("preloader").style.display = "none";
        }, 2000); // Adjust the duration in milliseconds
    });
</script>


<!-- GTM Container placement set to automatic -->
<!-- Google Tag Manager (noscript) -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBQ86FS" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><div class="body-borders" data-border="0"><div class="top-border body-border-shadow"></div><div class="right-border body-border-shadow"></div><div class="bottom-border body-border-shadow"></div><div class="left-border body-border-shadow"></div><div class="top-border style-light-bg"></div><div class="right-border style-light-bg"></div><div class="bottom-border style-light-bg"></div><div class="left-border style-light-bg"></div></div>	<div class="box-wrapper">
		<div class="box-container">
		<script type="text/javascript" id="initBox">UNCODE.initBox();</script>
		<div class="menu-wrapper menu-sticky">

      <header id="masthead" class="navbar menu-primary menu-light submenu-light menu-transparent menu-add-padding style-light-original menu-absolute menu-with-logo">
        <div class="menu-container style-color-xsdn-bg menu-no-borders">
          <div class="row-menu"  style=" background:white;
color:black;"  >
            <div class="row-menu-inner"  style=" background:white;
color:black;">
              <div id="logo-container-mobile" class="col-lg-0 logo-container middle" >
                <div id="main-logo" class="navbar-header style-light" >



                    <a href="/" class="navbar-brand" data-minheight="15"><div class="logo-image main-logo  logo-light" data-maxheight="38" style="height: 38px;">
                        <img decoding="async" src="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" alt="logo" width="145" height="41" class="img-responsive" data-lazy-src="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" />

                        <noscript><img decoding="async" src="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" alt="logo" width="145" height="41" class="img-responsive" /></noscript></div><div class="logo-image main-logo  logo-dark" data-maxheight="38" style="height: 38px;display:none;"><img decoding="async" src="hhttps://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" alt="logo" width="111" height="33" class="img-responsive" class="img-responsive" /></noscript></div></a>



                </div>
                <style>
    /* Style for hamburger menu icon */
    .hamburger-icon {
        width: 30px;
        height: 20px;
        position: relative;
        cursor: pointer;
        display: inline-block;
    }

    .hamburger-icon .line {
        width: 100%;
        height: 3px;
        background-color: black; /* Color of the lines */
        position: absolute;
        transition: transform 0.3s ease;
    }

    .hamburger-icon .line.middle {
        top: 50%;
        transform: translateY(-50%);
    }

    .hamburger-icon .line.bottom {
        bottom: 0;
    }
</style>

                <div class="mmb-container"><div class="mobile-additional-icons"></div><div class="mobile-menu-button mobile-menu-button-light lines-button">

                    <!--<span class="lines">yyyyy<span>-->

                        <div class="hamburger-icon" onclick="toggleMenu()">
    <div class="line top"></div>
    <div class="line middle"></div>
    <div class="line bottom"></div>
</div>
                    </div></div>
              </div>


              <style>
  @media (max-width: 768px) {
  .menu-primary-inner,
  .menu-cta-inner {
    text-align: center !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
  }

  .menu-item {
    margin-bottom: 10px !important; /* Adjust spacing between menu items */
  }
}


              </style>
              <div class="col-lg-12 main-menu-container middle">
                <div class="menu-horizontal">
                  <div class="menu-horizontal-inner">
                    <div class="nav navbar-nav navbar-main navbar-nav-first">


                        <ul id="menu-scholly-main-primary-menu-v2" class="menu-primary-inner menu-smart sm">
                            <li style="color:black; !important" id="menu-item-92371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92371 menu-item-link"><a style="color:black ! important;" title="Scholarships" href="/">Home<i class="fa fa-angle-right fa-dropdown"></i></a></li>

   <li id="menu-item-92371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92371 menu-item-link"><a style="color:black ! important;"  title="Scholarships" href="/about/jap">About<i class="fa fa-angle-right fa-dropdown"></i></a></li>
<!--<li id="menu-item-94372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94372 menu-item-link"><a title="$2K Scholarship" href="/about">About<i class="fa fa-angle-right fa-dropdown"></i></a></li>-->
<li id="menu-item-91960" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91960 menu-item-link"><a style="color:black ! important;"  title="Offers" href="/scheme">Programs<i class="fa fa-angle-right fa-dropdown"></i></a></li>



<li id="menu-item-91962" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91962 menu-item-link"><a style="color:black ! important;"  title="Testimonials" href="/partnerships">Partnerships<i class="fa fa-angle-right fa-dropdown"></i></a></li>

<li id="menu-item-91962" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91962 menu-item-link"><a style="color:black ! important;"  title="blogs" href="/blogs">Blogs<i class="fa fa-angle-right fa-dropdown"></i></a></li>




</ul></div><div class="nav navbar-nav navbar-cta navbar-nav-last"><ul id="menu-cta" class="menu-cta-inner menu-smart sm">
    
    <li id="menu-item-78953" class="btn-color-188981 btn-circle menu-item menu-item-type-custom menu-item-object-custom menu-item-78953 menu-item-link"><a title="Login" href="/login" style="color:black ! important;" >Login<i class="fa fa-angle-right fa-dropdown"></i></a></li>
    
    
    
    
<li id="menu-item-78952">

    <a href="/register">
            <button style="margin-top:2rem;background: #309B32; border-radius: 5px;
"  id='button100' class='buttonStep2Mobile buttonStepMobile'>Create Free Account</button>
        </a>

    </li>
</ul>







</div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

<style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 @codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

.light-theme {

  /**
   * light theme colors
   */

  --background-primary: hsl(0, 0%, 100%);
  --background-secondary: hsl(0, 0%, 97%);

  --action-primary: hsl(214, 32%, 91%);
  --action-secondary: hsl(210, 38%, 95%);

  --foreground-primary: hsl(218, 23%, 23%);
  --foreground-secondary: hsl(216, 15%, 52%);
  --foreground-tertiary: hsl(214, 20%, 69%);

  --accent: hsl(229, 76%, 66%);

}

.dark-theme {

  /**
   * dark theme colors
   */

  --background-primary: hsl(218, 23%, 23%);
  --background-secondary: hsl(220, 26%, 14%);

  --action-primary: hsl(216, 15%, 52%);
  --action-secondary: hsl(218, 23%, 23%);

  --foreground-primary: hsl(210, 38%, 95%);
  --foreground-secondary: hsl(211, 25%, 84%);
  --foreground-tertiary: hsl(214, 20%, 69%);

  --accent: hsl(229, 76%, 66%);

}



/*-----------------------------------*\
  #BASE STYLE
\*-----------------------------------*/

.h1,
.h2,
.h3,
.h4 {
  display: block;
  color: var(--foreground-primary);
}

.h1 {
  font-size: var(--fs-1);
  font-weight: 900;
}

.h2 {
  font-size: var(--fs-2);
  font-weight: 700;
}

.h3 {
  font-size: var(--fs-3);
  font-weight: 700;
}

.h4 {
  font-size: var(--fs-4);
  font-weight: 700;
}

.text-sm { font-size: var(--fs-4); }

.text-tiny { font-size: var(--fs-5); }





/*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/

.container {
  margin-inline: auto;
  margin: auto; /* fallback for margin-inline */
  padding: 0 15px;
}

.btn {
  min-width: 10rem;
  border-radius: 100px;
}

.btn-primary {
  background: var(--accent);
  color: var(--white);
  padding: 0.6875rem 1.1875rem;
}

/*.btn-primary:hover {*/
/*  background: var(--foreground-secondary);*/
/*  color: var(--action-primary);*/
/*}*/

.btn-secondary {
  background: var(--action-secondary);
  color: var(--foreground-secondary);
  padding: 0.5rem 1rem;
  border: 3px solid var(--foreground-tertiary);
}

/* .btn-secondary:hover { border-color: var(--accent); }
 */




/*-----------------------------------*\
  #Extra style for dark theme
\*-----------------------------------*/
/*
.dark-theme .btn-primary:hover { color: var(--background-primary); } */

.dark-theme .blog-topic {
  background: var(--action-primary);
  color: var(--foreground-secondary);
}

.dark-theme .blog-topic:hover {
  background: var(--foreground-primary);
  color: var(--action-primary);
}

.dark-theme .load-more:hover { color: var(--white); }

.dark-theme .aside .h2 { color: var(--foreground-primary); }




/*-----------------------------------*\
  #HEADER
\*-----------------------------------*/

.theme-btn-mobile,
.nav-menu-btn,
.nav-close-btn {
  background: var(--action-secondary);
  color: var(--foreground-tertiary);
  width:  40px;
  height: 40px;
  display:         flex;
  justify-content: center;
  align-items:     center;
  border-radius: 50%;
  font-size: 25px;
}

:is(.theme-btn-mobile,
.nav-menu-btn,
.nav-close-btn):hover {
  background: var(--accent);
  color: var(--white);
}

.theme-btn-mobile ion-icon { display: none; }

.theme-btn-mobile.light .sun,
.theme-btn-mobile.dark .moon { display: block; }

.mobile-nav {
  position: fixed;
  inset: 0;
  background: var(--background-primary);
  padding: 70px 20px;
  overflow: auto;
  overscroll-behavior: contain;
  transform: translateX(100%);
  visibility: hidden;
  transition: 0.5s cubic-bezier(1, 0, 0.30, 0.70);
  z-index: 10;
}

.mobile-nav.active {
  transform: translateX(0);
  visibility: visible;
}

.nav-close-btn {
  position: absolute;
  top:   20px;
  right: 20px;
}

.mobile-nav .wrapper {
  padding-bottom: 1.25rem;
  margin-bottom:  1.25rem;
  border-bottom: 1px solid var(--action-primary);
}

.mobile-nav .nav-title { margin-bottom: 1rem; }

.mobile-nav .nav-item { margin-bottom: 0.5rem; }

.mobile-nav .nav-link {
  font-size: var(--fs-3);
  color: var(--foreground-secondary);
}

.mobile-nav .nav-link:hover { color: var(--accent); }




/*-----------------------------------*\
  #ASIDE
\*-----------------------------------*/

.aside { display: none; }





/*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

footer { background: var(--background-primary); width:100%;}

footer .container {
  padding: var(--py) 15px;
  display: grid;
  grid-template-columns: 1fr;
  gap: 30px;
}

footer .wrapper { text-align: center; }

.footer-logo { margin-bottom: 10px; }

.footer-text {
  color: var(--foreground-secondary);
  max-width: 300px;
  margin-inline: auto;
  margin: auto; /* fallback for margin-inline */
}

.footer-title {
  color: var(--foreground-primary);
  font-weight: 700;
  margin-bottom: 0.4rem;
}

.footer-link { color: var(--foreground-secondary); }

.footer-link:hover { color: var(--accent); }

.copyright {
  color: var(--foreground-secondary);
  font-size: var(--fs-4);
  text-align: center;
  padding: 1rem;
  border-top: 1px solid var(--action-primary);
}

.copyright a {
  color: var(--accent);
  font-weight: 500;
}

.copyright a:hover { text-decoration: underline; }





/*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

/**
 * responsive for larger than 550px screen
 */

@media (min-width: 550px) {

  :root {

    /**
     * typography
     */

    --fs-base: 0.90rem;

  }




  /**
   * FOOTER
   */

  footer .container {
    padding: var(--py) 30px;
    grid-template-columns: 2fr 1fr 1fr;
  }

  footer .wrapper { text-align: left; }

  .footer-text { margin: 0; }

}





/**
 * responsive for larger than 768px screen
 */

@media (min-width: 768px) {

  /**
   * REUSED STYLE
   */

  .container { max-width: 800px; }

}





/**
 * responsive for larger than 1024px screen
 */

@media (min-width: 1024px) {

  :root {

    /**
     * typography
     */

    --fs-base: 1rem;
    --fs-1: 3rem;

  }



  /**
   * REUSED STYLE
   */

  .container { max-width: 1150px; }



  /**
   * HEADER
   */

  /**
   * FOOTER
   */

  .footer-title { font-size: 1.125rem; }

  .footer-link { margin-bottom: 0.3rem; }

}
</style>


  <footer style="background: #001F3F; color: white; padding-top:5rem;padding-left:3rem;padding-right:3rem;"
>

    <div class="container">

      <div class="wrapper">

        <a href="#" style="color:white;font-weight:600;" class="footer-logo">
         <h3 style="padding-bottom:3rem;">JAP Scholarship</h3>

        </a>

        <p class="footer-text">
          +234-7030825753

      <a style="color:white;" href="mailto:support@japscholarship.org">support@japscholarship.org</a>

  <br>
        1968 S. Coast Hwy, Laguna Beach, California
        <br>
    USA
        </p>

      </div>


      <div class="wrapper">

        <p class="footer-title">Quick Links</p>

        <ul>


          <li>
           <a style="color:white;"  href="/blogs" class="footer-link">Blogs</a>
          </li>

          <li>
            <a style="color:white;"  href="schemes" class="footer-link">Programs</a>
          </li>

        </ul>

      </div>



      <div class="wrapper">

        <p class="footer-title">Quick Links</p>

        <ul>

          <li>
            <a style="color:white;"  href="/contact-us" class="footer-link">Contact  Us</a>
          </li>

          <li>
            <a style="color:white;"  href="/faqs" class="footer-link">FAQS</a>
          </li>

          <li>
            <a style="color:white;"  href="/rules" class="footer-link">Terms</a>
          </li>

        </ul>

      </div>

      <div class="wrapper">

        <p class="footer-title">Legal Stuff</p>

        <ul>

          <li>
            <a style="color:white;"  href="/privacy" class="footer-link">Privacy Notice</a>
          </li>

          <li>
            <a style="color:white;" href="/partnerships" class="footer-link">Partnerships</a>
          </li>



        </ul>

      </div>



    </div>

    <p class="copyright">
      &copy; Copyright 2024 <a href="/">JAP Scholarships</a>
    </p>

  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.min.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>                         </div><!-- main container -->
    </div><!-- main wrapper -->
                </div><!-- box container -->
        </div><!-- box wrapper -->
<div class="style-light footer-scroll-top"><a href="#" class="scroll-top"><i class="fa fa-angle-up fa-stack btn-default btn-hover-nobg"></i></a></div>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">    jQuery(document).ready(function($){
$(".mobile-menu-button").click(function () {
if ($("body").hasClass("open-overlay-menu")) {
    $("body").toggleClass("no-scroll");
}
})
});

jQuery(document).ready(function ($) {
$("#script-row-unique-4").after(
'<div class="wpb_raw_code wpb_content_element wpb_raw_html" style="height: 1px;width:1px"><div class="wpb_wrapper"><style>.style-light a:not(.btn-text-skin):hover {color: #3259f1 !important;text-decoration-line: underline;}body.textual-accent-color .row-container .post-content p:not(.entry-small):not(.panel-title):not(.t-entry-member-social) a:not(.btn):hover {color: #3259f1 !important;}div#main-content-container h1,h3 {font-family: "Poppins" !important;}div#main-content-container h3 {font-family: "Poppins" !important;}</style></div></div>');
});
jQuery(document).ready(function ($) {
$("#search-2 input").attr("placeholder","Search Blog");
$("#leftThing1").attr("placeholder","Email *");
   $("#leftThing2").attr("placeholder","Email *");
       $("#leftThing3").attr("placeholder","Email *");

 $('#post-92855 .t-entry-text').click(function() {
const cardLink = $(this).closest('div').find('a').attr('href')
window.location= cardLink;
return false;
});
});

jQuery(document).ready(function($) {
$("#script-row-unique-4").after(
`<div class="wpb_raw_code wpb_content_element wpb_raw_html "><div class="wpb_wrapper "> <style >.style - light a: not(.btn - text - skin): hover {color: #3259f1 !important;text-decoration-line: underline;}body.textual-accent-color.row-container.post-contentp:not(.entry-small):not(.panel-title):not(.t-entry-member-social)a:not(.btn):hover {color: # 3259 f1!important;}body.textual - accent - color.post - contentp: not(.entry - small): not(.panel - title): not(.t - entry - member - social)a: not(.btn - text - skin): hover: not(.btn) {color: #3259f1 !important;text-decoration-line: underline;}div# main - content - container h1,h3 {font - family: "Poppins"!important;}div #main - content - container h3 {font - family: "Poppins"!important;}body.textual - accent - color.post - contentp: not(.entry - small): not(.panel - title): not(.t - entry - member - social)a: not(.btn - text - skin): hover: not(.btn) {color: #3259f1 !important;text-decoration-line: underline;}</style></div></div>`)});

jQuery(document).ready(function($) {
if ($('body').hasClass('search') || $('body').hasClass('single-post') || $('body').hasClass('category') || $('body').hasClass('page-id-1567')) {
var $newDiv = $('<div id="mobile-search-wrapper">');

$newDiv.html('<div id="mobile-search-container"><form action="https://myscholly.com/" method="get"><div id="search-on-nav" class="search-container-inner"><input type="search" class="search-field form-fluid no-livesearch" placeholder="Search…" value="" name="s" title="Search for:"><i class="fa fa-search3"></i></div></form></div>');

$('#main-logo').after($newDiv);
}
});
</script><script type="text/html" id="wpb-modifications"> window.wpbCustomElement = 1; </script><script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/myscholly.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.16.2' id='gtm4wp-form-move-tracker-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/global.min.js' id='uncode-global-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/utils.min.js' id='uncode-utils-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/menuSystem.min.js' id='uncode-menuSystem-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/disableHoverScroll.min.js' id='uncode-disableHoverScroll-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/animations.min.js' id='uncode-animations-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/tapHover.min.js' id='uncode-tapHover-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/preventDoubleTransition.min.js' id='uncode-preventDoubleTransition-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/printScreen.min.js' id='uncode-printScreen-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.waypoints.min.js' id='jquery-waypoints-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.smartmenus.min.js' id='jquery-smartmenus-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.easing.min.js' id='jquery-easing-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.mousewheel.min.js' id='jquery-mousewheel-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.sticky-kit.min.js' id='jquery-sticky-kit-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/stickyElements.min.js' id='uncode-stickyElements-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/transition.min.js' id='transition-js'></script>
<script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/app-loader.min.js' id='uncode-app-js'></script>
<script defer type='text/javascript' src='https://stats.wp.com/e-202409.js' id='jetpack-stats-js'></script>
<script type='text/javascript' id='jetpack-stats-js-after'>
_stq = window._stq || [];
_stq.push([ "view", {v:'ext',blog:'197692862',post:'91720',tz:'0',srv:'myscholly.com',j:'1:12.2.1'} ]);
_stq.push([ "clickTrackerInit", "197692862", "91720" ]);
</script>
<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
        <script src="https://cdn.userway.org/widget.js?account=PZa9u9ExIk"></script>

</body>
</html>

{{--

            <footer id="colophon" class="site-footer">
                <div data-parent="true" class="vc_row style-color-199791-bg row-container" id="row-unique-28"><div class="row no-top-padding no-bottom-padding no-h-padding limit-width row-parent"><div class="wpb_row row-inner"><div class="wpb_column pos-top pos-center align_left column_parent col-lg-12 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
    <div class="wpb_wrapper">
    <div id="footer-wrapper">
    <div id="footer-container">
    <div id="content-wrapper">
    <div id="left-column-content">
    <div id="logo-container">
    <a href="/" style="color:white;">
    Jabs Scholarships
    </noscript></a>
    </div>
    <div id="footer-menu-container">
    <ul class="footer-menu">
    <li> <a href="">About Us</a></li>

    <li><a href="/careers">Careers</a></li>
    <li><a href="/schemes"> Schemes</a></li>
    <li><a class="terms1" href="/contact-us">Contact Us</a></li>
    </ul>
    <ul class="footer-menu">
    <li><a href="/faqs">FAQ</a></li>
    <li><a class="terms1" href="">Terms of Service</a></li>
    <li> <a href="/testimonials">Testimonials</a></li>
    <li><a href="/privacy">Please go through our Privacy</a></li>
    </ul>
    </div>
    <div id="copyright">&copy;  <span id="year"></span> Jabs All rights reserved</div>
    </div>
    <div id="right-column-content">
    <div class="uncode-vc-social footerSocial icons-lead">
    <div class="social-icon icon-box icon-box-top icon-inline"><a href="" target="_blank"><i class="fa fa-social-facebook"></i></a></div>
    <div class="social-icon icon-box icon-box-top icon-inline"><a href="" target="_blank"><i class="fa fa-instagram"></i></a></div>
    <div class="social-icon icon-box icon-box-top icon-inline"><a href="" target="_blank"><i class="fa fa-social-twitter"></i></a></div>
    </div>

    <div id="app-store-container">

    </div>

    </a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script type="rocketlazyloadscript">

    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("year").innerHTML = year;

    </script>
    </div>
    </div>
    </div></div></div></div></div><script id="script-row-unique-28" data-row="script-row-unique-28" type="text/javascript" class="vc_controls">UNCODE.initRow(document.getElementById("row-unique-28"));</script></div></div></div><div data-parent="true" class="vc_row row-container" id="row-unique-29"><div class="row no-top-padding no-bottom-padding no-h-padding limit-width row-parent"><div class="wpb_row row-inner"><div class="wpb_column pos-top pos-center align_left column_parent col-lg-12 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont">
    <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
    <div class="wpb_wrapper">
    <style>
    #year{
    padding:0 5px;
    }
    #footer-wrapper {
    background: #313131;
    padding: 46px;
    }
    #footer-container {
    max-width: 1400px;
    margin: auto;
    }
    #content-wrapper {
    display: flex;
    gap: 30px;
    flex-direction: column;
    color: #fff !important;
    }

    #left-column-content {
    display: flex;
    flex-direction: column;
    gap: 30px;
    }

    #footer-menu-container {
    display: flex;
    gap: 25px;
    }

    .footer-menu {
    list-style-type: none;
    padding: 0 ;
    margin: 0;
    flex-grow: 1;
    flex-basis: 0;
    }

    .footer-menu li {
    padding: 10px 0;
    }
    #footer-menu-container .footer-menu li a {
    color: #fff !important;
    line-height: 1.4;
    }
    .footer-menu a {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 600;
    font-size: 13px;
    line-height: 108%;
    /* identical to box height, or 14px */
    display: flex;
    align-items: center;
    color: #fff !important ;
    text-decoration: none;
    }

    .footer-menu a:hover {
    color: #fff !important ;
    text-decoration: underline;
    }

    #app-store-container {
    display: flex;
    gap: 10px;
    }
    #copyright {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 108%;
    /* identical to box height, or 14px */

    display: flex;
    align-items: center;
    }

    .uncode-vc-social.icons-lead .social-icon i {
    font-size: 34px;
    color: #fff;
    }

    div#right-column-content {
    display: flex;
    flex-direction: column;

    gap: 20px;
    }
    /*=========== *  TABLET  * =========== */
    @media screen and (min-width: 768px) {
    #footer-wrapper {
    padding: 46px;
    }

    #content-wrapper {
    display: flex;
    gap: 30px;
    flex-direction: row;
    justify-content: space-between;
    }
    div#right-column-content {

    align-items: end;

    }

    .footer-menu {
    list-style-type: none;
    padding: 0 35px 0 0;
    margin: 0;
    }
    }
    /*=========== *  / TABLET  * ========== */

    /*=========== *  DESKTOP  * =========== */
    @media screen and (min-width: 1400px) {
    #footer-wrapper {
    padding: 46px;
    }

    #footer-menu-container {
    display: flex;
    flex-direction: column;
    gap: unset
    }
    .footer-menu {
    display: flex;
    gap: 20px;
    }

    #left-column-content {
    gap: 10px;
    }
    .footer-menu li {
    padding: 5px 0;
    }
    }
    /*=========== *  / DESKTOP  * ========== */


    .post-content ul:not(.no-list) {
    list-style: disc;
    padding: 0 !important;
    list-style-type: none;
    padding: none !important;
    }

    .uncode-vc-social.footerSocial.icons-lead {
    display: flex !important;
    gap: 20px;
    }
    </style>
    </div>
    </div>
    </div></div></div></div></div><script id="script-row-unique-29" data-row="script-row-unique-29" type="text/javascript" class="vc_controls">UNCODE.initRow(document.getElementById("row-unique-29"));</script></div></div></div>						</footer>





                                                        </div><!-- main container -->
    </div><!-- main wrapper -->
                </div><!-- box container -->
        </div><!-- box wrapper -->
    <div class="style-light footer-scroll-top"><a href="#" class="scroll-top"><i class="fa fa-angle-up fa-stack btn-default btn-hover-nobg"></i></a></div>
    <script type="text/html" id="wpb-modifications"> window.wpbCustomElement = 1; </script><script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7' id='swv-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/myscholly.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7' id='contact-form-7-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.16.2' id='gtm4wp-form-move-tracker-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/global.min.js' id='uncode-global-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/utils.min.js' id='uncode-utils-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/menuSystem.min.js' id='uncode-menuSystem-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/disableHoverScroll.min.js' id='uncode-disableHoverScroll-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/animations.min.js' id='uncode-animations-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/tapHover.min.js' id='uncode-tapHover-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/preventDoubleTransition.min.js' id='uncode-preventDoubleTransition-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/printScreen.min.js' id='uncode-printScreen-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.waypoints.min.js' id='jquery-waypoints-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.smartmenus.min.js' id='jquery-smartmenus-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.easing.min.js' id='jquery-easing-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.mousewheel.min.js' id='jquery-mousewheel-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/jquery.sticky-kit.min.js' id='jquery-sticky-kit-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/stickyElements.min.js' id='uncode-stickyElements-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/lib/transition.min.js' id='transition-js'></script>
    <script type='text/javascript' src='https://d67gbjf2ukphr.cloudfront.net/wp-content/themes/uncode/library/js/app-loader.min.js' id='uncode-app-js'></script>
    <script defer type='text/javascript' src='https://stats.wp.com/e-202409.js' id='jetpack-stats-js'></script>
    <script type='text/javascript' id='jetpack-stats-js-after'>
    _stq = window._stq || [];
    _stq.push([ "view", {v:'ext',blog:'197692862',post:'91720',tz:'0',srv:'myscholly.com',j:'1:12.2.1'} ]);
    _stq.push([ "clickTrackerInit", "197692862", "91720" ]);
    </script>
    <script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
    if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
    images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
    if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://d67gbjf2ukphr.cloudfront.net/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script type="text/javascript" src="/_Incapsula_Resource?SWJIYLWA=719d34d31c8e3a6e6fffd425f7e032f3&ns=1&cb=737699374" async></script></body>
    </html>

    <!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1708906839 -->





 --}}
