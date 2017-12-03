<?php

/* maps.html.twig */
class __TwigTemplate_2237f11ce05c2bd9182c36807c84ab0b2e0bd92b2492afae8873dc83faaee090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37785a5b7a1c8b88d96423106c26ac32149bff81051b7e6f2f6893637b791136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37785a5b7a1c8b88d96423106c26ac32149bff81051b7e6f2f6893637b791136->enter($__internal_37785a5b7a1c8b88d96423106c26ac32149bff81051b7e6f2f6893637b791136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps.html.twig"));

        $__internal_40976baf66739a287fd5436f0b61a58e4c43b6a116a50b32b9d2c3814009a356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40976baf66739a287fd5436f0b61a58e4c43b6a116a50b32b9d2c3814009a356->enter($__internal_40976baf66739a287fd5436f0b61a58e4c43b6a116a50b32b9d2c3814009a356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/img/apple-icon.png\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/img/favicon.png\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/css/material-dashboard.css?v=1.2.0\" rel=\"stylesheet\" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/css/demo.css\" rel=\"stylesheet\" />
    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar\" data-color=\"purple\" data-image=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/img/sidebar-1.jpg\">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    Creative Tim
                </a>
            </div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["link_dir"]) ? $context["link_dir"] : $this->getContext($context, "link_dir")), "html", null, true);
        echo "dashboard\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Painel Principal</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["link_dir"]) ? $context["link_dir"] : $this->getContext($context, "link_dir")), "html", null, true);
        echo "userDashboard\">
                            <i class=\"material-icons\">person</i>
                            <p>Perfil do Usuário</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["link_dir"]) ? $context["link_dir"] : $this->getContext($context, "link_dir")), "html", null, true);
        echo "table.html\">
                            <i class=\"material-icons\">content_paste</i>
                            <p>Sumarização de Dados</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href=\"./typography.html\">
                            <i class=\"material-icons\">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href=\"./icons.html\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li> -->
                    <li>
                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["link_dir"]) ? $context["link_dir"] : $this->getContext($context, "link_dir")), "html", null, true);
        echo "maps\">
                            <i class=\"material-icons\">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"./notifications.html\">
                            <i class=\"material-icons text-gray\">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class=\"active-pro\">
                        <a href=\"upgrade.html\">
                            <i class=\"material-icons\">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <nav class=\"navbar navbar-transparent navbar-absolute\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"> Map </a>
                    </div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"hidden-lg hidden-md\">Dashboard</p>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"hidden-lg hidden-md\">Notifications</p>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"hidden-lg hidden-md\">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <div class=\"form-group  is-empty\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <span class=\"material-input\"></span>
                            </div>
                            <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                <i class=\"material-icons\">search</i>
                                <div class=\"ripple-container\"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div id=\"map\"></div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/jquery-3.2.1.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/material.min.js\" type=\"text/javascript\"></script>
<!--  Charts Plugin -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/chartist.min.js\"></script>
<!--  Dynamic Elements plugin -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/arrive.min.js\"></script>
<!--  PerfectScrollbar Library -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/perfect-scrollbar.jquery.min.js\"></script>
<!--  Notifications Plugin    -->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/bootstrap-notify.js\"></script>
<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!-- Material Dashboard javascript methods -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/material-dashboard.js?v=1.2.0\"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/demo.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        if (\$('.main-panel > .content').length == 0) {
            \$('.main-panel').css('height', '100%');
        }


        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>

</html>";
        
        $__internal_37785a5b7a1c8b88d96423106c26ac32149bff81051b7e6f2f6893637b791136->leave($__internal_37785a5b7a1c8b88d96423106c26ac32149bff81051b7e6f2f6893637b791136_prof);

        
        $__internal_40976baf66739a287fd5436f0b61a58e4c43b6a116a50b32b9d2c3814009a356->leave($__internal_40976baf66739a287fd5436f0b61a58e4c43b6a116a50b32b9d2c3814009a356_prof);

    }

    public function getTemplateName()
    {
        return "maps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 174,  249 => 172,  242 => 168,  237 => 166,  232 => 164,  227 => 162,  222 => 160,  218 => 159,  214 => 158,  122 => 69,  101 => 51,  92 => 45,  83 => 39,  66 => 25,  55 => 17,  50 => 15,  45 => 13,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{web_dir}}dashboard/assets/img/apple-icon.png\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{web_dir}}dashboard/assets/img/favicon.png\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    <!-- Bootstrap core CSS     -->
    <link href=\"{{web_dir}}dashboard/assets/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <!--  Material Dashboard CSS    -->
    <link href=\"{{web_dir}}dashboard/assets/css/material-dashboard.css?v=1.2.0\" rel=\"stylesheet\" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"{{web_dir}}dashboard/assets/css/demo.css\" rel=\"stylesheet\" />
    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar\" data-color=\"purple\" data-image=\"{{web_dir}}dashboard/assets/img/sidebar-1.jpg\">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    Creative Tim
                </a>
            </div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"active\">
                        <a href=\"{{link_dir}}dashboard\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Painel Principal</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{link_dir}}userDashboard\">
                            <i class=\"material-icons\">person</i>
                            <p>Perfil do Usuário</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{link_dir}}table.html\">
                            <i class=\"material-icons\">content_paste</i>
                            <p>Sumarização de Dados</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href=\"./typography.html\">
                            <i class=\"material-icons\">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href=\"./icons.html\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li> -->
                    <li>
                        <a href=\"{{link_dir}}maps\">
                            <i class=\"material-icons\">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"./notifications.html\">
                            <i class=\"material-icons text-gray\">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class=\"active-pro\">
                        <a href=\"upgrade.html\">
                            <i class=\"material-icons\">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <nav class=\"navbar navbar-transparent navbar-absolute\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"> Map </a>
                    </div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"hidden-lg hidden-md\">Dashboard</p>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"hidden-lg hidden-md\">Notifications</p>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"hidden-lg hidden-md\">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <div class=\"form-group  is-empty\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <span class=\"material-input\"></span>
                            </div>
                            <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                <i class=\"material-icons\">search</i>
                                <div class=\"ripple-container\"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div id=\"map\"></div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src=\"{{web_dir}}dashboard/assets/js/jquery-3.2.1.min.js\" type=\"text/javascript\"></script>
<script src=\"{{web_dir}}dashboard/assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"{{web_dir}}dashboard/assets/js/material.min.js\" type=\"text/javascript\"></script>
<!--  Charts Plugin -->
<script src=\"{{web_dir}}dashboard/assets/js/chartist.min.js\"></script>
<!--  Dynamic Elements plugin -->
<script src=\"{{web_dir}}dashboard/assets/js/arrive.min.js\"></script>
<!--  PerfectScrollbar Library -->
<script src=\"{{web_dir}}dashboard/assets/js/perfect-scrollbar.jquery.min.js\"></script>
<!--  Notifications Plugin    -->
<script src=\"{{web_dir}}dashboard/assets/js/bootstrap-notify.js\"></script>
<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!-- Material Dashboard javascript methods -->
<script src=\"{{web_dir}}dashboard/assets/js/material-dashboard.js?v=1.2.0\"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src=\"{{web_dir}}dashboard/assets/js/demo.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        if (\$('.main-panel > .content').length == 0) {
            \$('.main-panel').css('height', '100%');
        }


        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>

</html>", "maps.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\maps.html.twig");
    }
}
