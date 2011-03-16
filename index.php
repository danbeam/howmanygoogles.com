<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!--[if IE 6 ]> <html lang="en-us" dir="ltr" class="ie6" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 7 ]> <html lang="en-us" dir="ltr" class="ie7" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 8 ]> <html lang="en-us" dir="ltr" class="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 9 ]> <html lang="en-us" dir="ltr" class="ie9" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->   
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-us" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>How Many Googles?</title>
        <style type="text/css">
            .body {
                background-color: #ddd;
            }
            .outer {
                text-align: center;
                top: 50%;
                left: 50%;
                margin: -153px -3px -3px -394px;
                width: 782px;
                position: absolute;
                background-color: #eee;
                border: 3px solid #ccc;
            }
            h1, form, input, span, select, option {
                font-size: 36px;
                line-height: 40px;
                padding: 2px;
                font-family: "trebuchet ms", arial, helvetica, sans-serif;
                background-color: transparent;
            }
            select, option {
                border-width: 0;
                padding: 0;
                font-weight: bold;
            }
            form input, form span {
                border-width: 0;
                border-bottom: 4px solid #333;
                display: inline-block;
                width: 50px;
                text-align: center;
            }
            .ie6 input, .ie6 span {
                min-width: 0; /* can't use zoom: 1;, but this also triggers hasLayout */
                display: inline;
            }
            form {
                margin-bottom: 29px;
            }
            #submit {
                color: #fff;
                width: auto;
                margin-left: 20px;
                background-color: #666;
                border: 2px solid #333;
            }
            #link, #submit {
                padding: 2px 10px;
            }
            #link {
                display: block;
                margin-bottom: 29px;
            }
        </style>
        <script type="text/javascript">//<![CDATA[
            
            (function (global) {

                // this is same as DOM ready
                global.onload = function () {

                    var numbs   = /[1-9][0-9]?/,
                        outer   = global.document.getElementsByTagName('div')[0],
                        form    = global.document.getElementsByTagName('form')[0],
                        inputs  = form.getElementsByTagName('input'),
                        total   = form.getElementsByTagName('span')[0],
                        select  = form.getElementsByTagName('select')[0],
                        link    = global.document.getElementById('link');

                    // CSS 2.1 doesn't have a "border-radius" property in it,
                    // so technically this isn't valid CSS
                    outer.style.borderRadius = inputs[2].style.borderRadius = link.style.borderRadius = '10px';

                    form.onkeyup = function () {
                        if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                            total.innerHTML = global.parseInt(inputs[0].value, 10) * global.parseInt(inputs[1].value, 10);
                            total.style.display = '';
                            link.style.display = '';
                        }
                        else {
                            total.style.display = 'none';
                            link.style.display = 'none';
                        }
                    };

                    form.onsubmit = function (e, vanity) {
                        e = e || global.event;
                        if (e.preventDefault) {
                            e.preventDefault();
                        }
                        e.returnValue = false;
                        if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                            vanity = select.options[select.selectedIndex].value + '/' + inputs[0].value + 'x' + inputs[1].value;
                            link.innerHTML = 'Link: ' + '<a href="/' + vanity + '">' + global.location.href + vanity + '</a>';
                        }
                        return false;
                    };

                    form.onkeyup();

                };

            }(this));

        //]]></script>
    </head>
    <body class="body">
        <div class="outer rounded">
            <form action="howmany.php" method="get">
                <h1>How many <select name="s"><option value="b">Bings</option><option value="g" selected="selected">Googles</option><option value="y">Yahoos</option></select> would you like?</h1>
                <input type="text" name="x" size="2" maxlength="2" /> by <input type="text" name="y" size="2" maxlength="2" /> = <span>:(</span> <input id="submit" type="submit" class="rounded" value="Do it!" />
            </form>
            <span id="link" class="rounded"></span>
        </div>
    </body>
</html>
