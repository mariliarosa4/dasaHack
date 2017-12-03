<?php

/* exameFisico.twig */
class __TwigTemplate_77be43b1d8a598167ce44b20af6f39166e41f4eee560b3e8527af8393458438f extends Twig_Template
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
        $__internal_b209f80365ba52612ae0c55ea79816571b7acf3040d518eaff4ca7288b9fe36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b209f80365ba52612ae0c55ea79816571b7acf3040d518eaff4ca7288b9fe36b->enter($__internal_b209f80365ba52612ae0c55ea79816571b7acf3040d518eaff4ca7288b9fe36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "exameFisico.twig"));

        $__internal_59e9b5f50c68581f438f6a80f95309c27a3963e8492b6c5796231435d6896e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e9b5f50c68581f438f6a80f95309c27a3963e8492b6c5796231435d6896e10->enter($__internal_59e9b5f50c68581f438f6a80f95309c27a3963e8492b6c5796231435d6896e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "exameFisico.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

    <head>
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/barraProgresso.css\">

    </head>

    <body>

        <main>

            <nav class=\"nav-extended teal lighten-1\">
                <div class=\"nav-wrapper\">
                    <a href=\"#\" class=\"brand-logo right\">Ficha de atendimento de genética clínica</a>
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
                    <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Sobre</a></li>
                        <li><a href=\"#\">Logout</a></li>
                    </ul>
                    <ul class=\"side-nav\" id=\"mobile-demo\">
                        <li><a href=\"#\">X</a></li>
                        <li><a href=\"#\">Y</a></li>
                        <li><a href=\"#\">Z</a></li>
                    </ul>
                </div>
                <div class=\"nav-content\">
                    <ul class=\"tabs tabs-transparent\">
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "identificacao\">Identificação</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "historiaGestaNeo\">Historia Gestacional e Neonatal</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "neuropsico\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a class=\"active\" target=\"_self\" href=\"#\">História Familiar</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">
                        </div>
                        <div class='row'>
                            <div class=\"col s4 offset-s4\">

                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal'>Salvar
                                    <i class=\"material-icons right\">send</i></button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>


        </center>


    </main>

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    <script type='text/javascript'>

        \$(document).on('change', '#outroGrau', function () {
            if (this.checked) {
                \$('.divOutroGrau').show();
            } else {
                \$('.divOutroGrau').hide();
            }
        });
        \$(document).ready(function () {
            \$('select').material_select();
        });
        \$(document).on('change', '#recorrenciaFamiliarGenetica', function () {
            if (this.checked) {
                \$('#descricaoRecorrenciaFamiliarGenetica').show();
            } else {
                \$('#descricaoRecorrenciaFamiliarGenetica').hide();
            }
        });

        function addIrmao() {
            var inputLocal = document.getElementsByClassName(\"irmaos\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaIrmaos\")[0].appendChild(clone);
        }
    </script>
</body>

</html>
";
        
        $__internal_b209f80365ba52612ae0c55ea79816571b7acf3040d518eaff4ca7288b9fe36b->leave($__internal_b209f80365ba52612ae0c55ea79816571b7acf3040d518eaff4ca7288b9fe36b_prof);

        
        $__internal_59e9b5f50c68581f438f6a80f95309c27a3963e8492b6c5796231435d6896e10->leave($__internal_59e9b5f50c68581f438f6a80f95309c27a3963e8492b6c5796231435d6896e10_prof);

    }

    public function getTemplateName()
    {
        return "exameFisico.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  69 => 40,  65 => 39,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>

    <head>
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/barraProgresso.css\">

    </head>

    <body>

        <main>

            <nav class=\"nav-extended teal lighten-1\">
                <div class=\"nav-wrapper\">
                    <a href=\"#\" class=\"brand-logo right\">Ficha de atendimento de genética clínica</a>
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
                    <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Sobre</a></li>
                        <li><a href=\"#\">Logout</a></li>
                    </ul>
                    <ul class=\"side-nav\" id=\"mobile-demo\">
                        <li><a href=\"#\">X</a></li>
                        <li><a href=\"#\">Y</a></li>
                        <li><a href=\"#\">Z</a></li>
                    </ul>
                </div>
                <div class=\"nav-content\">
                    <ul class=\"tabs tabs-transparent\">
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}identificacao\">Identificação</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}historiaGestaNeo\">Historia Gestacional e Neonatal</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}neuropsico\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a class=\"active\" target=\"_self\" href=\"#\">História Familiar</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">
                        </div>
                        <div class='row'>
                            <div class=\"col s4 offset-s4\">

                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal'>Salvar
                                    <i class=\"material-icons right\">send</i></button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>


        </center>


    </main>

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    <script type='text/javascript'>

        \$(document).on('change', '#outroGrau', function () {
            if (this.checked) {
                \$('.divOutroGrau').show();
            } else {
                \$('.divOutroGrau').hide();
            }
        });
        \$(document).ready(function () {
            \$('select').material_select();
        });
        \$(document).on('change', '#recorrenciaFamiliarGenetica', function () {
            if (this.checked) {
                \$('#descricaoRecorrenciaFamiliarGenetica').show();
            } else {
                \$('#descricaoRecorrenciaFamiliarGenetica').hide();
            }
        });

        function addIrmao() {
            var inputLocal = document.getElementsByClassName(\"irmaos\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaIrmaos\")[0].appendChild(clone);
        }
    </script>
</body>

</html>
", "exameFisico.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\exameFisico.twig");
    }
}