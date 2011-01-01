<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!--[if IE 6 ]> <html lang="en-us" dir="ltr" class="ie6" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 7 ]> <html lang="en-us" dir="ltr" class="ie7" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 8 ]> <html lang="en-us" dir="ltr" class="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 9 ]> <html lang="en-us" dir="ltr" class="ie9" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->   
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-us" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
    <head>
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
            .rounded {
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
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
                zoom: 1;
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
            
            // this is same as DOM ready
            window.onload = function () {

                var numbs   = /[1-9][0-9]?/,
                    form    = document.getElementsByTagName('form')[0],
                    inputs  = form.getElementsByTagName('input'),
                    total   = form.getElementsByTagName('span')[0],
                    select  = form.getElementsByTagName('select')[0],
                    link    = document.getElementById('link');

                form.onkeyup = function () {
                    if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                        total.innerHTML = parseInt(inputs[0].value, 10) * parseInt(inputs[1].value, 10);
                        total.style.display = '';
                        link.style.display = '';
                    }
                    else {
                        total.style.display = 'none';
                        link.style.display = 'none';
                    }
                };

                form.onsubmit = function (e, vanity) {
                    e = e || window.event;
                    e.preventDefault && e.preventDefault();
                    e.returnValue = false;
                    if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                        vanity = select.options[select.selectedIndex].value + '/' + inputs[0].value + 'x' + inputs[1].value;
                        link.innerHTML = 'Link: ' + '<a href="/' + vanity + '">' + window.location.href + vanity + '</a>';
                    }
                    return false;
                };

                form.onkeyup();

            };

        //]></script>
    </head>
    <body class="body">
        <div class="outer rounded">
            <form action="howmany.php" method="get">
                <h1>How many <select name="s"><option value="bing">Bings</option><option value="google">Googles</option><option value="yahoo">Yahoos</option></select> would you like?</h1>
                <input type="text" name="x" size="2" maxlength="2" /> by <input type="text" name="y" size="2" maxlength="2" /> = <span>:(</span> <input id="submit" type="submit" class="rounded" value="Do it!" />
            </form>
            <span id="link" class="rounded"></span>
        </div>
    </body>
</html>
