<?php

/* ::evolucaoNeuroPsico.html.twig */
class __TwigTemplate_a25c18dda628806d48ecfdff963cbb6413569158465bb0e13726377cedc9d4ff extends Twig_Template
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
        $__internal_1ed4535c1f712892689547085507200da2afb89164cfa4ca24055ab72f48c378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed4535c1f712892689547085507200da2afb89164cfa4ca24055ab72f48c378->enter($__internal_1ed4535c1f712892689547085507200da2afb89164cfa4ca24055ab72f48c378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::evolucaoNeuroPsico.html.twig"));

        $__internal_cad13418bd2ecc179edd5e8db8d55cb407588d4cb7dae240b7306de483d92cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad13418bd2ecc179edd5e8db8d55cb407588d4cb7dae240b7306de483d92cfa->enter($__internal_cad13418bd2ecc179edd5e8db8d55cb407588d4cb7dae240b7306de483d92cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::evolucaoNeuroPsico.html.twig"));

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
                        <li class=\"tab\"><a class=\"active\"  href=\"#\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "historiafamiliar\">História Familiar</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">
                       
                            <div class=\"row\">
                                <blockquote>
                                    Dados em meses
                                </blockquote>
                                <div class=\"input-field col s3\">

                                    <input id=\"sorrisoSocial\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sorrisoSocial\" >Sorriso Social</label>
                                </div>
                                <div class=\"input-field col s3\">

                                    <input id=\"sustentouCabeca\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sustentouCabeca\">Sustentou Cabeca</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"sustentouSemApoio\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sustentouSemApoio\">Sustentou Sem Apoio</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"ficouEmPe\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ficouEmPe\">Ficou Em Pé</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"engatinhou\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"engatinhou\">Engatinhou</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"andou\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"andou\">Andou</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"sons\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sons\">Sons</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"palavras\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"palavras\">Palavras</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"frases\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"frases\">Frases</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"controleEsfincteriano\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"controleEsfincteriano\">Controle Esfincteriano</label>
                                </div>

                            </div>
                        
                          <div class=\"divider\"></div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"entrouEscola\" />
                                        <label class=\"black-text\" for=\"entrouEscola\">Entrou na escola?</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s8 opcaoEscolaridade \" style=\"display: none\">
                                    <select>
                                        <optgroup label=\"Fundamental\">
                                            <option value=\"1\">1 ano</option>
                                            <option value=\"2\">2 ano</option>
                                        </optgroup>
                                        <optgroup label=\"Médio\">
                                            <option value=\"3\">1 ano</option>
                                            <option value=\"4\">2 ano</option>
                                        </optgroup>
                                    </select>
                                    <label>Série atual</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"repetencias\" />
                                        <label class=\"black-text\" for=\"repetencias\">Repetências?</label>
                                    </p>
                                </div>

                                <div class=\"input-field col s6 divQtdRepetencias\" style=\"display: none\">
                                    <input id=\"qtdRepetencias\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"qtdRepetencias\">Numero de repetências</label>
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


        </center>


    </main>

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    <script type='text/javascript'>
        \$(document).on('change', '#entrouEscola', function () {
            if (this.checked) {
                \$('.opcaoEscolaridade').show();
            } else {
                \$('.opcaoEscolaridade').hide();
            }
        });

        \$(document).ready(function () {
            \$('select').material_select();
        });

        \$(document).on('change', '#repetencias', function () {
            if (this.checked) {
                \$('.divQtdRepetencias').show();
            } else {
                \$('.divQtdRepetencias').hide();
            }
        });


    </script>
</body>

</html>
";
        
        $__internal_1ed4535c1f712892689547085507200da2afb89164cfa4ca24055ab72f48c378->leave($__internal_1ed4535c1f712892689547085507200da2afb89164cfa4ca24055ab72f48c378_prof);

        
        $__internal_cad13418bd2ecc179edd5e8db8d55cb407588d4cb7dae240b7306de483d92cfa->leave($__internal_cad13418bd2ecc179edd5e8db8d55cb407588d4cb7dae240b7306de483d92cfa_prof);

    }

    public function getTemplateName()
    {
        return "::evolucaoNeuroPsico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 42,  69 => 40,  65 => 39,  25 => 1,);
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
                        <li class=\"tab\"><a class=\"active\"  href=\"#\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}historiafamiliar\">História Familiar</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">
                       
                            <div class=\"row\">
                                <blockquote>
                                    Dados em meses
                                </blockquote>
                                <div class=\"input-field col s3\">

                                    <input id=\"sorrisoSocial\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sorrisoSocial\" >Sorriso Social</label>
                                </div>
                                <div class=\"input-field col s3\">

                                    <input id=\"sustentouCabeca\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sustentouCabeca\">Sustentou Cabeca</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"sustentouSemApoio\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sustentouSemApoio\">Sustentou Sem Apoio</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"ficouEmPe\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ficouEmPe\">Ficou Em Pé</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"engatinhou\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"engatinhou\">Engatinhou</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"andou\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"andou\">Andou</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"sons\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"sons\">Sons</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"palavras\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"palavras\">Palavras</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"frases\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"frases\">Frases</label>
                                </div>
                                <div class=\"input-field col s3\">
                                    <input id=\"controleEsfincteriano\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"controleEsfincteriano\">Controle Esfincteriano</label>
                                </div>

                            </div>
                        
                          <div class=\"divider\"></div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"entrouEscola\" />
                                        <label class=\"black-text\" for=\"entrouEscola\">Entrou na escola?</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s8 opcaoEscolaridade \" style=\"display: none\">
                                    <select>
                                        <optgroup label=\"Fundamental\">
                                            <option value=\"1\">1 ano</option>
                                            <option value=\"2\">2 ano</option>
                                        </optgroup>
                                        <optgroup label=\"Médio\">
                                            <option value=\"3\">1 ano</option>
                                            <option value=\"4\">2 ano</option>
                                        </optgroup>
                                    </select>
                                    <label>Série atual</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"repetencias\" />
                                        <label class=\"black-text\" for=\"repetencias\">Repetências?</label>
                                    </p>
                                </div>

                                <div class=\"input-field col s6 divQtdRepetencias\" style=\"display: none\">
                                    <input id=\"qtdRepetencias\" type=\"number\" class=\"validate\">
                                    <label class=\"black-text\" for=\"qtdRepetencias\">Numero de repetências</label>
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


        </center>


    </main>

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../materialize/js/materialize.min.js\"></script>
    <script type=\"text/javascript\" src=\"../assets/js/identificacao.js\"></script>
    <script type='text/javascript'>
        \$(document).on('change', '#entrouEscola', function () {
            if (this.checked) {
                \$('.opcaoEscolaridade').show();
            } else {
                \$('.opcaoEscolaridade').hide();
            }
        });

        \$(document).ready(function () {
            \$('select').material_select();
        });

        \$(document).on('change', '#repetencias', function () {
            if (this.checked) {
                \$('.divQtdRepetencias').show();
            } else {
                \$('.divQtdRepetencias').hide();
            }
        });


    </script>
</body>

</html>
", "::evolucaoNeuroPsico.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app/Resources\\views/evolucaoNeuroPsico.html.twig");
    }
}
