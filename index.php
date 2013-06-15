<?php
$avatar_url = md5(strtolower(trim("bobbyallen.uk@gmail.com")));
$avatar_size = 220;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bobby Allen (ballen/bobsta63)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="I'm Bobby Allen, a software developer from Ipswich, England.">
        <meta name="author" content="">
        <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }

            /* Custom container */
            .container {
                width:860px;
            }
            .akatext {
                margin-bottom: 20px;
                font-size: 19px;
                /* font-weight: 150; */
                line-height: 30px;
            }
            .dropme {
                margin-top: 70px;
            }

        </style>
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>?s=144">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>?s=144">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>?s=72">
        <link rel="apple-touch-icon-precomposed" href="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>">
        <link rel="shortcut icon" href="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>?s=16">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="span4">
                    <header>
                        <h1>Bobby Allen</h1>
                        <div class="akatext"><p><em>aka</em> ballen / bobsta63</p></div>
                        <img height="<?php echo $avatar_size; ?>" class="img-polaroid" src="http://www.gravatar.com/avatar/<?php echo $avatar_url; ?>?s=<?php echo $avatar_size; ?>" width="<?php echo $avatar_size; ?>">
                        <div><p>&nbsp;</p></div>
                        <div class="btn-group">
                            <a href="https://github.com/bobsta63" class="btn btn-small" target="_blank">Follow me<br/><strong>Github</strong></a>
                            <a href="https://twitter.com/bobsta63"  class="btn btn-small" target="_blank">Follow me<br/><strong>Twitter</strong></a>
                            <a href="mailto:ballen@bobbyallen.me"  class="btn btn-small">Contact me<br/><strong>Email</strong></a>
                        </div>

                    </header>
                </div>
                <div class="span8 dropme">
                    <section>
                        <p class="lead">I'm Bobby Allen, a software developer from <a href="http://en.wikipedia.org/wiki/Ipswich" target="_blank">Ipswich</a>, <a href="http://en.wikipedia.org/wiki/United_Kingdom" target="_blank">England</a>.</p>
                        <p class="lead">With over ten years experience, I mainly specialise in <a href="http://www.php.net/" target="_blank">PHP</a> but I'm also fond of and develop with <a href="http://www.python.org/" target="_blank">Python</a> and <a href="http://rubyonrails.org/" target="_blank">Ruby On Rails</a> too!</p>
                        <p class="lead">I am the project leader and head developer of the <a href="http://www.zpanelcp.com/" target="_blank">ZPanel</a> project and with over three million users world-wide, ZPanel is fast becoming the most widely used <a href="http://en.wikipedia.org/wiki/Open-source_software" target="_blank" data-toggle="tooltip" title="Open-source software (OSS) is computer software with its source code made available and licensed with an open-source license in which the copyright holder provides the rights to study, change and distribute the software for free to anyone and for any purpose.">open-source</a> hosting panel in the world!</p>
                        <p class="lead">I also build and work on various other projects in my spare time such as <a href="http://www.bindhub.com/" target="_blank">BindHub.com</a>.</p>

                        <h3>Authored open-source projects</h3>
                        <ul>
                            <li><a href="http://www.zpanelcp.com/" target="_blank" target="_blank">ZPanel</a> - An open-source web hosting control panel for *NIX, BSD and Microsoft Windows written in PHP. </li>
                            <li><a href="http://www.bindhub.com/" target="_blank" target="_blank">BindHub.com</a> - A free dynamic DNS, cloud-hosted service with an easy to integrate RESTful API.</li>
                            <li><a href="https://github.com/bobsta63/ravish" target="_blank">Ravish</a> - A cURL-less HTTP client library for PHP, perfect for RESTful web services!</li>
                            <li><a href="https://github.com/bobsta63/likkle" target="_blank">Likkle</a> - A short URL generation and statistics PHP library for use with the <a href="http://www.lk2.in/" target="_blank">lk2.in</a> web service.</li>
                            <li><a href="https://github.com/bobsta63/gravel" target="_blank">Gravel</a> - A Gravatar.com library enabling developers easy access, display and manipulate user avatars in their applications.</li>
                            <li><a href="https://github.com/bobsta63/distical" target="_blank">Distical</a> - A Lat/Long distance calculation library for PHP.</li>
                            <li>...and a handful of other libraries, API clients and other bits 'n' bobs can be found over on my <a href="https://github.com/bobsta63" target="_blank">GitHub</a> profile!</li>
                        </ul>
                        <h3>Software I use</h3>
                        <ul>
                            <li><strong>Languages</strong> - <a href="http://www.php.net/" target="_blank">PHP</a>, <a href="http://www.python.org/" target="_blank">Python</a> and <a href="http://www.ruby-lang.org/en/" target="_blank">Ruby</a></li>
                            <li><strong>Web Frameworks</strong> - <a href="http://laravel.com/" target="_blank">Laravel</a>, <a href="http://fuelphp.com/" target="_blank">FuelPHP</a> and <a href="http://rubyonrails.org/" target="_blank">Ruby on Rails</a></li>
                            <li><strong>OS</strong> - <a href="http://www.apple.com/osx/" target="_blank">MacOSX</a> <small>(for development)</small>, <a href="#" data-toggle="tooltip" title="I use a mixture of Ubuntu Linux Server and CentOS mainly!">Linux</a> and <a href="http://www.freebsd.org/" target="_blank">FreeBSD</a> <small>(for production hosting)</small></li>
                            <li><strong>IDE</strong> - <a href="http://www.netbeans.org/" target="_blank">NetBeans</a></li>
                            <li><strong>VCS</strong> - <a href="http://git-scm.com/" target="_blank">Git</a>, <a href="http://subversion.apache.org/" target="_blank">Subversion</a> <small>(I prefer Git but am required to use Subversion at work!)</small></li>
                            <li><strong>Other</strong> - <a href="http://jquery.com/" target="_blank">jQuery</a>, <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a>, <a href="http://getcomposer.org/" target="_blank">Composer</a> plus a whole load more!</li>
                        </ul>
                        <h3>Other sites</h3>
                        <ul>
                            <li><a href="http://blog.bobbyallen.me/" target="_blank">My Blog</a> - My personal blog, I mainly post about technical *NIX, hosting and development topics here.</li>
                            <li><a href="http://a320project.bobbyallen.me/" target="_blank">My A320 project</a> - When I'm not coding i'm either building or flying my Airbus A320 home cockpit (flight simulator).</li>
                        </ul>
                    </section>
                </div>
            </div>
            <footer>
                <hr>
                <p>Copyright © 2013 Bobby Allen</p>
            </footer>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('.span8').tooltip({
                selector: "a[data-toggle=tooltip]"
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39380946-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </body>
</html>


