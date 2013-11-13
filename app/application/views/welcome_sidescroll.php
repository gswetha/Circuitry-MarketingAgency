<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Website Horizontal Scrolling with jQuery" />
        <meta name="keywords" content="jquery, horizontal, scrolling, scroll, smooth"/>
        <title>Circuitry | Marketing Agency</title>
        <?php include_once($this->config->item('base_path') .'application/views/_header_styles.php'); ?>
    </head>
    <style>
        a{
            color:#fff;
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }
        span.reference{
            position:fixed;
            left:10px;
            bottom:10px;
            font-size:13px;
            font-weight:bold;
        }
        span.reference a{
            color:#fff;
            text-shadow:1px 1px 1px #000;
            padding-right:20px;
        }
        span.reference a:hover{
            color:#ddd;
            text-decoration:none;
        }

    </style>
    <body>
        <!-- <div>
            <span class="reference">
                <a href="http://tympanus.net/codrops/2010/06/02/smooth-vertical-or-horizontal-page-scrolling-with-jquery/">© Codrops</a>
                <a href="index_vertical.html">Vertical Demo</a>
            </span>
        </div> -->

        <div class="section black" id="section1">
            <h2>Section 1</h2>
            <p>
                MY Spectre around me night and day
                Like a wild beast guards my way;
                My Emanation far within
                Weeps incessantly for my sin.
            </p>
            <ul class="nav">
                <li>1</li>
                <li><a href="#section2">2</a></li>
                <li><a href="#section3">3</a></li>
            </ul>
        </div>
        <div class="section white" id="section2">
            <h2>Section 2</h2>
            <p>
                ‘A fathomless and boundless deep,
                There we wander, there we weep;
                On the hungry craving wind
                My Spectre follows thee behind.

            </p>
            <ul class="nav">
                <li><a href="#section1">1</a></li>
                <li>2</li>
                <li><a href="#section3">3</a></li>
            </ul>
        </div>
        <div class="section black" id="section3">
            <h2>Section 3</h2>
            <p>
                ‘He scents thy footsteps in the snow
                Wheresoever thou dost go,
                Thro’ the wintry hail and rain.
                When wilt thou return again?

            </p>
            <ul class="nav">
                <li><a href="#section1">1</a></li>
                <li><a href="#section2">2</a></li>
                <li>3</li>
            </ul>
        </div>
    </body>
</html>