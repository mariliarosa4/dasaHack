<?php

/* identificacao.html.twig */
class __TwigTemplate_a8d8eef7d6ae911a3207cd2b8a6ce165c9b670051499747a6d2f27eaa14c4942 extends Twig_Template
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
        $__internal_7425989317bca4411b2e85264c6b153a00d3af77dacf09ea02cbfcff825b1686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7425989317bca4411b2e85264c6b153a00d3af77dacf09ea02cbfcff825b1686->enter($__internal_7425989317bca4411b2e85264c6b153a00d3af77dacf09ea02cbfcff825b1686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "identificacao.html.twig"));

        $__internal_d55c4ca6dd9c5498e7aad0a8ee4ce1764e7da98c0b2cc246f22b732aad9a2d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55c4ca6dd9c5498e7aad0a8ee4ce1764e7da98c0b2cc246f22b732aad9a2d1b->enter($__internal_d55c4ca6dd9c5498e7aad0a8ee4ce1764e7da98c0b2cc246f22b732aad9a2d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "identificacao.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

    <head>
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/barraProgresso.css\">

    </head>

    <body>

        <main>
            <center>
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
                            <li class=\"tab\"><a class=\"active\" href=\"#\">Identificação</a></li>
                            <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "historiaGestaNeo\" >Historia Gestacional e Neonatal</a></li>
                            <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "neuropsico\">Evolução Neuropsicomotora</a></li>
                            <li class=\"tab\"><a  target=\"_self\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "historiafamiliar\">História Familiar</a></li>
                        </ul>
                    </div>
                </nav>

                <div class=\"container\">

                    <div class=\"z-depth-1 grey lighten-4 row\" >
                        <div class=\"row\">

                            <form class=\"col s12\">
                                <div class=\"row \">
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">person</i>
                                        <input id=\"nomeSobrenome\" type=\"text\" class=\"validate\">
                                        <label for=\"nomeSobrenome\">Iniciais de nome e sobrenome</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">mode_edit</i>
                                        <input id=\"codigoProntuario\" type=\"number\" class=\"validate\">
                                        <label for=\"codigoProntuario\">Codigo prontuario</label>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">date_range</i>
                                        <input type=\"text\" class=\"datepicker\" id=\"dataNascimento\">

                                        <label for=\"dataNascimento\">Data de Nascimento</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">date_range</i>
                                        <input type=\"text\" class=\"datepicker\" id=\"dataAtendimento\">

                                        <label for=\"dataAtendimento\">Data de Atendimento</label>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s7\">
                                        <p> Etnia: </p>
                                        <input class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"euro\" />
                                        <label for=\"euro\" class=\"black-text\">Eurodescendente</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"afro\" />
                                        <label for=\"afro\" class=\"black-text\">afrodescendente</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"Misto\" />
                                        <label for=\"Misto\" class=\"black-text\">Misto</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"Outro\" />
                                        <label for=\"Outro\" class=\"black-text\">Outro</label>
                                    </div>
                                    <div class=\"col s4\">

                                        <p> Sexo: </p>
                                        <input class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"fem\" />
                                        <label for=\"fem\" class=\"black-text\">Feminino</label>
                                        <input  class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"mas\" />
                                        <label for=\"mas\" class=\"black-text\">Masculino</label>
                                    </div>
                                </div>
                                <div class='row'>
                                    

                                    <div class=\"input-field col s12\">
                                        <i class=\"material-icons prefix\">announcement</i>
                                        <input id=\"motivoConsulta\" type=\"text\" class=\"validate\">
                                        <label for=\"motivoConsulta\">Motivo da consulta</label>
                                    </div>

                                </div>
                                <div class='row'>
                                    <div class=\"col s12\">
                                       <p> Local de atendimento:</p>

                                        <input class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"faculdade\" />
                                        <label for=\"faculdade\" class=\"black-text\">Faculdade</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"sAntonio\" />
                                        <label for=\"sAntonio\" class=\"black-text\">Hospital Santo Antonio</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"sClara\" />
                                        <label for=\"sClara\" class=\"black-text\">Hospital Santa Clara</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"outroHospital\" />
                                        <label for=\"outroHospital\" class=\"black-text\">Outro hospital da Santa Casa</label>

                                    </div>


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
                </div>

            </center>


        </main>

        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
        <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    </body>

</html>
";
        
        $__internal_7425989317bca4411b2e85264c6b153a00d3af77dacf09ea02cbfcff825b1686->leave($__internal_7425989317bca4411b2e85264c6b153a00d3af77dacf09ea02cbfcff825b1686_prof);

        
        $__internal_d55c4ca6dd9c5498e7aad0a8ee4ce1764e7da98c0b2cc246f22b732aad9a2d1b->leave($__internal_d55c4ca6dd9c5498e7aad0a8ee4ce1764e7da98c0b2cc246f22b732aad9a2d1b_prof);

    }

    public function getTemplateName()
    {
        return "identificacao.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 43,  71 => 42,  67 => 41,  25 => 1,);
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
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../materialize/css/materialize.min.css\">
        <link rel=\"stylesheet\" type = \"text/css\" href=\"../assets/css/barraProgresso.css\">

    </head>

    <body>

        <main>
            <center>
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
                            <li class=\"tab\"><a class=\"active\" href=\"#\">Identificação</a></li>
                            <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}historiaGestaNeo\" >Historia Gestacional e Neonatal</a></li>
                            <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}neuropsico\">Evolução Neuropsicomotora</a></li>
                            <li class=\"tab\"><a  target=\"_self\" href=\"{{web_dir}}historiafamiliar\">História Familiar</a></li>
                        </ul>
                    </div>
                </nav>

                <div class=\"container\">

                    <div class=\"z-depth-1 grey lighten-4 row\" >
                        <div class=\"row\">

                            <form class=\"col s12\">
                                <div class=\"row \">
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">person</i>
                                        <input id=\"nomeSobrenome\" type=\"text\" class=\"validate\">
                                        <label for=\"nomeSobrenome\">Iniciais de nome e sobrenome</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">mode_edit</i>
                                        <input id=\"codigoProntuario\" type=\"number\" class=\"validate\">
                                        <label for=\"codigoProntuario\">Codigo prontuario</label>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">date_range</i>
                                        <input type=\"text\" class=\"datepicker\" id=\"dataNascimento\">

                                        <label for=\"dataNascimento\">Data de Nascimento</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <i class=\"material-icons prefix\">date_range</i>
                                        <input type=\"text\" class=\"datepicker\" id=\"dataAtendimento\">

                                        <label for=\"dataAtendimento\">Data de Atendimento</label>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s7\">
                                        <p> Etnia: </p>
                                        <input class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"euro\" />
                                        <label for=\"euro\" class=\"black-text\">Eurodescendente</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"afro\" />
                                        <label for=\"afro\" class=\"black-text\">afrodescendente</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"Misto\" />
                                        <label for=\"Misto\" class=\"black-text\">Misto</label>
                                        <input  class=\"with-gap\"  name=\"etniaGroup\" type=\"radio\" id=\"Outro\" />
                                        <label for=\"Outro\" class=\"black-text\">Outro</label>
                                    </div>
                                    <div class=\"col s4\">

                                        <p> Sexo: </p>
                                        <input class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"fem\" />
                                        <label for=\"fem\" class=\"black-text\">Feminino</label>
                                        <input  class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"mas\" />
                                        <label for=\"mas\" class=\"black-text\">Masculino</label>
                                    </div>
                                </div>
                                <div class='row'>
                                    

                                    <div class=\"input-field col s12\">
                                        <i class=\"material-icons prefix\">announcement</i>
                                        <input id=\"motivoConsulta\" type=\"text\" class=\"validate\">
                                        <label for=\"motivoConsulta\">Motivo da consulta</label>
                                    </div>

                                </div>
                                <div class='row'>
                                    <div class=\"col s12\">
                                       <p> Local de atendimento:</p>

                                        <input class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"faculdade\" />
                                        <label for=\"faculdade\" class=\"black-text\">Faculdade</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"sAntonio\" />
                                        <label for=\"sAntonio\" class=\"black-text\">Hospital Santo Antonio</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"sClara\" />
                                        <label for=\"sClara\" class=\"black-text\">Hospital Santa Clara</label>
                                        <input  class=\"with-gap\"  name=\"localAtendimentoGroup\" type=\"radio\" id=\"outroHospital\" />
                                        <label for=\"outroHospital\" class=\"black-text\">Outro hospital da Santa Casa</label>

                                    </div>


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
                </div>

            </center>


        </main>

        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
        <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    </body>

</html>
", "identificacao.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\identificacao.html.twig");
    }
}
