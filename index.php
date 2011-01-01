<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!--[if IE 6 ]> <html lang="en-us" dir="ltr" class="ie6" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 7 ]> <html lang="en-us" dir="ltr" class="ie7" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 8 ]> <html lang="en-us" dir="ltr" class="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]--> 
<!--[if IE 9 ]> <html lang="en-us" dir="ltr" class="ie9" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->   
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-us" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
    <head>
        <title>How Many Googles?</title>
        <style type="text/css">
            .outer {
                text-align: center;
                top: 50%;
                left: 50%;
                margin: -110px 0 0 -323px;
                position: absolute;
            }
            h1, form, input, span, select, option {
                font-size: 36px;
                line-height: 40px;
                padding: 2px;
                font-family: "trebuchet ms", arial, helvetica, sans-serif;
            }
            select {
                border-width: 0;
                padding: 0;
                border-bottom: 2px solid #ccc;
                background-color: #fff;
                font-weight: bold;
            }
            form {
                margin-bottom: 30px;
            }
            form input, form span {
                border-width: 0;
                border-bottom: 2px solid #ccc;
                display: inline-block;
                width: 50px;
                text-align: center;
            }
            .ie6 input, .ie6 span {
                zoom: 1;
                display: inline;
            }
            #submit {
                width: auto;
                border: 2px solid #ccc;
                padding: 2px 10px;
                margin-left: 20px;
            }
        </style>
        <script type="text/javascript">//<![CDATA[
            
            window.onload = function () {

                var numbs   = /[1-9][0-9]*/,
                    form    = document.getElementsByTagName('form')[0],
                    inputs  = form.getElementsByTagName('input'),
                    total   = form.getElementsByTagName('span')[0],
                    select  = form.getElementsByTagName('select')[0],
                    link    = document.getElementById('link');

                inputs[0].onkeyup = inputs[1].onkeyup = function () {
                    if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                        total.innerHTML = parseInt(inputs[0].value, 10) * parseInt(inputs[1].value, 10);
                        total.style.display = '';
                    }
                    else {
                        total.style.display = 'none';
                    }
                };

                form.onsubmit = function (e, vanity) {
                    e = e || window.event;
                    e.preventDefault && e.preventDefault();
                    e.returnValue = false;
                    if (numbs.test(inputs[0].value) && numbs.test(inputs[1].value)) {
                        vanity = '/' + select.options[select.selectedIndex].value + '/' + inputs[0].value + 'x' + inputs[1].value;
                        link.innerHTML = 'Link: ' + '<a href="' + vanity + '">' + vanity + '</a>';
                    }
                    return false;
                };

                inputs[0].onkeyup();

            };

        //]></script>
    </head>

    <body>
        <div class="outer">
            <form action="google.php" method="get">
                <h1>How many <select name="s"><option value="bings">Bings</option><option value="googles">Googles</option><option value="yahoos">Yahoos</option></select> would you like?</h1>
                <input type="text" name="x" size="2" /> by <input type="text" name="y" size="2" /> = <span>:(</span> <input id="submit" type="submit" value="Do it!" />
            </form>
            <span id="link"></span>
        </div>
    </body>
</html>
