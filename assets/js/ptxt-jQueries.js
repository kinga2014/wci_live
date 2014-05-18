/**
 * @author king paulo aquino
 */
function clear_cache() { localStorage.clickcount = 0; localStorage.cho = ""; }
function cleanHistory(url)
{
  	var Backlen = history.length;   
  	history.go(-Backlen);
  	clear_cache();
  	Redirect(url);
}
 
function Redirect (url) {
    var ua        = navigator.userAgent.toLowerCase(),
        isIE      = ua.indexOf('msie') !== -1,
        version   = parseInt(ua.substr(4, 2), 10);

    // IE8 and lower
    if (isIE && version < 9) {
        var link = document.createElement('a');
        link.href = url;
        document.body.appendChild(link);
        link.click();
    }

    // All other browsers
    else { 
    	window.location.href = url; 
    }
}

function Numerics(e, id, IsMoney) {
    var keynum;
    var keychar;
    if (window.event) { keynum = e.keyCode; } //IE
    if (e.which) { keynum = e.which; } //Netscape/Firefox/Opera 
    
    if(keynum == 32) {
    	return false;
    }
    
    
    if ((keynum == 8 || keynum == 9 || keynum == 46 || (keynum >= 35 && keynum <= 40) || (event.keyCode >= 96 && event.keyCode <= 105))) return true;
    
    if (keynum == 110 || keynum == 190) {
		if (IsMoney) {
			var checkdot = document.getElementById(id).value;
		    var i = 0;
		    for (i = 0; i < checkdot.length; i++) {
		        if (checkdot[i] == '.') return false;
		    }
		    if (checkdot.length == 0) document.getElementById(id).value = '0';
		    return true;
		}
    }
    keychar = String.fromCharCode(keynum);
    return !isNaN(keychar);
}

function MessageCounter(val, counterId) {
    var len = val.value.length;
    if (len > 200) {
      val.value = val.value.substring(0, 200);
    } else {
      $('#'+counterId).text(200 - len);
    }
 };
 
function Reload() {
	location.reload();
} 

function do_ptxt_worx(type, url, data, loader, results) {
	$(document).ready(function(){
		$.ajax({
			type: type,
			url: url,
			data: data,
			cache: false,
			beforeSend: function () { 
				$(loader).show();
			},
			success: function(result) { 
				$(results).html(result);
			}
		});
	});
}















