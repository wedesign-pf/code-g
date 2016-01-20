// --------------------------
// Généralités
// --------------------------

/**
 * Get the value of a querystring
 * @param  {String} field The field to get the value of
 * @param  {String} url   The URL to get the value from (optional)
 * @return {String}       The field value
 */
var getQueryString = function ( field, url ) {
    var href = url ? url : window.location.href;
    var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
    var string = reg.exec(href);
    return string ? string[1] : null;
};


$.fn.inView = function(){
    //Window Object
    var win = $(window);
    //Object to Check
    obj = $(this);
    if(obj.length == 0) return false;
    
    //the top Scroll Position in the page
    var scrollPosition = win.scrollTop();
    //the end of the visible area in the page, starting from the scroll position
    var visibleArea = win.scrollTop() + win.height();
    
    var objHeight = 10; // obj.outerHeight()
    //the end of the object to check
    var objEndPos = (obj.offset().top + objHeight);
    return(visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false)
};

/*$(window).scroll(function(){
    if($("#googlsseMap").inView()) {
       loadGoogleMap();
        console.log("XA");
    } else {
        console.log("XB");
    }
});*/


function loadScript(scriptSrc) {
    var script = document.createElement("script");
    script.src = scriptSrc;
    script.type = "text/javascript";
    document.body.appendChild(script);
    //console.log("loadScript: " + scriptSrc);
}



// appel un lien à la place de la page en cours ou dans une nouvelle fenêtre
function goTargetLink(lien,cible) { 
	if(cible=="_self") {
		document.location.href= lien ;
	} else {
		window.open(lien);
	}
}


// met en majuscule la première lettre d'une chaine
function ucwords (str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}

// vérification email
function checkemail(email){
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
	return(reg.test(email));
}

// vérification que des chiffres
function checkchiffres(chaine) { 
	var reg = new RegExp('[^0-9]+', 'g');
	if (reg.test(chaine)) {
		return false
	} else {
	 return true
	}
}


function randomBetween(min,max)  {
    return Math.floor(Math.random()*(max-min+1)+min);
}

// --------------------------
// COOKIES ACCEPT
// --------------------------
(function (factory) {
if (typeof define === 'function' && define.amd) {
// AMD
define(['jquery'], factory);
} else if (typeof exports === 'object') {
// CommonJS
factory(require('jquery'));
} else {
// Browser globals
factory(jQuery);
}
}(function ($) {
var pluses = /\+/g;
function encode(s) {
return config.raw ? s : encodeURIComponent(s);
}
function decode(s) {
return config.raw ? s : decodeURIComponent(s);
}
function stringifyCookieValue(value) {
return encode(config.json ? JSON.stringify(value) : String(value));
}
function parseCookieValue(s) {
if (s.indexOf('"') === 0) {
// This is a quoted cookie as according to RFC2068, unescape...
s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
}
try {
// Replace server-side written pluses with spaces.
// If we can't decode the cookie, ignore it, it's unusable.
// If we can't parse the cookie, ignore it, it's unusable.
s = decodeURIComponent(s.replace(pluses, ' '));
return config.json ? JSON.parse(s) : s;
} catch(e) {}
}
function read(s, converter) {
var value = config.raw ? s : parseCookieValue(s);
return $.isFunction(converter) ? converter(value) : value;
}
var config = $.cookie = function (key, value, options) {
// Write
if (arguments.length > 1 && !$.isFunction(value)) {
options = $.extend({}, config.defaults, options);
if (typeof options.expires === 'number') {
var days = options.expires, t = options.expires = new Date();
t.setTime(+t + days * 864e+5);
}
return (document.cookie = [
encode(key), '=', stringifyCookieValue(value),
options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
options.path ? '; path=' + options.path : '',
options.domain ? '; domain=' + options.domain : '',
options.secure ? '; secure' : ''
].join(''));
}
// Read
var result = key ? undefined : {};
// To prevent the for loop in the first place assign an empty array
// in case there are no cookies at all. Also prevents odd result when
// calling $.cookie().
var cookies = document.cookie ? document.cookie.split('; ') : [];
for (var i = 0, l = cookies.length; i < l; i++) {
var parts = cookies[i].split('=');
var name = decode(parts.shift());
var cookie = parts.join('=');
if (key && key === name) {
// If second argument (value) is a function it's a converter...
result = read(cookie, value);
break;
}
// Prevent storing a cookie that we couldn't decode.
if (!key && (cookie = read(cookie)) !== undefined) {
result[name] = cookie;
}
}
return result;
};
config.defaults = {};
$.removeCookie = function (key, options) {
if ($.cookie(key) === undefined) {
return false;
}
// Must not alter options, thus extending a fresh object...
$.cookie(key, '', $.extend({}, options, { expires: -1 }));
return !$.cookie(key);
};
}));

$(document).ready( function(){
	//$.cookie('cookieAccept', null,{ path: '/' });
	
	// Initialisation Acceptation Cookie
	var cookieokName = 'cookieAccept',
		cookieValue = $.cookie(cookieokName),
		activeClass = 'cookiesOK-active',
		$panel = $(document.getElementById('cookiesOK')),
		$panelClose = $panel.find('.close'),
		$body  = $(document.body);
		
	//console.log(typeof cookieValue);
	//console.log(cookieValue);
		
	function validate () {
		$body.removeClass(activeClass);
		$panel.remove();
		$.cookie(cookieokName, true, { expires: 365, path: '/' });
	}
	
	function activate () {	
		$panel.addClass(activeClass);
		$panelClose.click(validate);
	}

	if (typeof cookieValue === 'undefined' || cookieValue == 'null') { 
		activate();
	}

})