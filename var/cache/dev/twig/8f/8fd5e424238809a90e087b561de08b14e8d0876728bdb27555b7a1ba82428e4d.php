<?php

/* ::historiaFamiliar.html.twig */
class __TwigTemplate_2947c4a12052e713f0f6db65a24180f2a796eb6b7c2069ab40ac3916623c378f extends Twig_Template
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
        $__internal_863c92df41eeef270a38c26c1986e7cc015954613e9d0d0d992a751137692e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863c92df41eeef270a38c26c1986e7cc015954613e9d0d0d992a751137692e2c->enter($__internal_863c92df41eeef270a38c26c1986e7cc015954613e9d0d0d992a751137692e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::historiaFamiliar.html.twig"));

        $__internal_01f7ce811cd9320da71e9e9039e1bb8e1a9dfb8dc121d00b549444f0dabf0010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f7ce811cd9320da71e9e9039e1bb8e1a9dfb8dc121d00b549444f0dabf0010->enter($__internal_01f7ce811cd9320da71e9e9039e1bb8e1a9dfb8dc121d00b549444f0dabf0010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::historiaFamiliar.html.twig"));

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
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "exameFisico\">Exame Físico</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "exames\">Exames</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">

                            <div class=\"input-field col s2\">

                                <input id=\"idadeMaterna\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"idadeMaterna\" >Idade Materna</label>
                            </div>
                            <div class=\"input-field col s2\">

                                <input id=\"idadePaterna\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"idadePaterna\" >Idade Paterna</label>
                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"cosanguinidade\" />
                                    <label class=\"black-text\" for=\"cosanguinidade\">cosanguinidade</label>
                                </p>
                            </div>
                            <div class=\"col s6\">
                                <p> Grau de cosanguinidade: </p>
                                <input class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau1\" />
                                <label for=\"grau1\" class=\"black-text\">1º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau2\" />
                                <label for=\"grau2\" class=\"black-text\">2º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau3\" />
                                <label for=\"grau3\" class=\"black-text\">3º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"outroGrau\" />
                                <label for=\"outroGrau\" class=\"black-text\">Outro grau</label>
                                <div class=\" col s3 divOutroGrau\" style=\"display: none\">
                                    <div class=\"input-field col s3\">
                                        <input id=\"dsOutroGrau\" type=\"text\" class=\"validate\">
                                        <label class=\"black-text\" for=\"dsOutroGrau\" >Informe o grau</label>
                                    </div>
                                    <div class=\"input-field col s3\">
                                        <input id=\"descricaoCosanguinidade\" type=\"text\" class=\"validate\">
                                        <label class=\"black-text\" for=\"descricaoCosanguinidade\" >Descrição da cosanguinidade</label>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6 \" >
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
                                <label>Escolaridade materna</label>
                            </div>

                            <div class=\"input-field col s6\">
                                <input id=\"ocupacaoMaterna\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"ocupacaoMaterna\" >Ocupação materna</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\" >
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
                                <label>Escolaridade paterna</label>
                            </div>

                            <div class=\"input-field col s6\">
                                <input id=\"ocupacaoPaterna\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"ocupacaoPaterna\" >Ocupação paterna</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                <input id=\"qtdIrmaos\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"qtdIrmaos\" >Quantidade de irmãos</label>
                            </div>
                            <a class=\"waves-effect waves-light btn\" onclick=\"addIrmao();\">
                                Adicionar Irmão
                            </a>
                        </div>
                        <div class=\"listaIrmaos\">
                            <div class=\"irmaos\">
                                <div class=\"row  teal lighten-4\">
                                    <div class=\"col s2\">
                                        <p>
                                            <input type=\"checkbox\" id=\"irmaoSaudavel\" />
                                            <label class=\"black-text\" for=\"irmaoSaudavel\">Irmão saudável</label>
                                        </p>
                                    </div>

                                    <div class=\"col s3\">

                                        <p> Sexo: </p>
                                        <input class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"fem\" />
                                        <label for=\"fem\" class=\"black-text\">Feminino</label>
                                        <input  class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"mas\" />
                                        <label for=\"mas\" class=\"black-text\">Masculino</label>
                                    </div>
                                    <div class=\"input-field col s1\">
                                        <input id=\"idadeIrmao\" type=\"number\" class=\"validate\">
                                        <label class=\"black-text\" for=\"idadeIrmao\" >Idade</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <select>
                                            <option value=\"\" disabled selected>Parentesco</option>
                                            <option value=\"1\">mesmo pai</option>
                                            <option value=\"2\">mesma mãe</option>
                                            <option value=\"3\">mesmo pai e mãe</option>
                                            <option value=\"3\">adotivo</option>
                                        </select>
                                        <label>Grau de parentesco</label>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"recorrenciaFamiliar\" />
                                    <label class=\"black-text\" for=\"recorrenciaFamiliar\">Recorrência Familiar</label>
                                </p>
                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"recorrenciaFamiliarGenetica\" />
                                    <label class=\"black-text\" for=\"recorrenciaFamiliarGenetica\">Recorrência Familiar Genética</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8\" id=\"descricaoRecorrenciaFamiliarGenetica\" style=\"display: none\">
                                <input id=\"dsRecorrenciaFamiliarGenetica\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"dsRecorrenciaFamiliarGenetica\" >Descrição da Recorrência familiar Genética</label>
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
        
        $__internal_863c92df41eeef270a38c26c1986e7cc015954613e9d0d0d992a751137692e2c->leave($__internal_863c92df41eeef270a38c26c1986e7cc015954613e9d0d0d992a751137692e2c_prof);

        
        $__internal_01f7ce811cd9320da71e9e9039e1bb8e1a9dfb8dc121d00b549444f0dabf0010->leave($__internal_01f7ce811cd9320da71e9e9039e1bb8e1a9dfb8dc121d00b549444f0dabf0010_prof);

    }

    public function getTemplateName()
    {
        return "::historiaFamiliar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  78 => 43,  73 => 41,  69 => 40,  65 => 39,  25 => 1,);
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
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}exameFisico\">Exame Físico</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}exames\">Exames</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">

                            <div class=\"input-field col s2\">

                                <input id=\"idadeMaterna\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"idadeMaterna\" >Idade Materna</label>
                            </div>
                            <div class=\"input-field col s2\">

                                <input id=\"idadePaterna\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"idadePaterna\" >Idade Paterna</label>
                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"cosanguinidade\" />
                                    <label class=\"black-text\" for=\"cosanguinidade\">cosanguinidade</label>
                                </p>
                            </div>
                            <div class=\"col s6\">
                                <p> Grau de cosanguinidade: </p>
                                <input class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau1\" />
                                <label for=\"grau1\" class=\"black-text\">1º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau2\" />
                                <label for=\"grau2\" class=\"black-text\">2º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"grau3\" />
                                <label for=\"grau3\" class=\"black-text\">3º grau</label>
                                <input  class=\"with-gap\"  name=\"grauCosanguinidadeGroup\" type=\"radio\" id=\"outroGrau\" />
                                <label for=\"outroGrau\" class=\"black-text\">Outro grau</label>
                                <div class=\" col s3 divOutroGrau\" style=\"display: none\">
                                    <div class=\"input-field col s3\">
                                        <input id=\"dsOutroGrau\" type=\"text\" class=\"validate\">
                                        <label class=\"black-text\" for=\"dsOutroGrau\" >Informe o grau</label>
                                    </div>
                                    <div class=\"input-field col s3\">
                                        <input id=\"descricaoCosanguinidade\" type=\"text\" class=\"validate\">
                                        <label class=\"black-text\" for=\"descricaoCosanguinidade\" >Descrição da cosanguinidade</label>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6 \" >
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
                                <label>Escolaridade materna</label>
                            </div>

                            <div class=\"input-field col s6\">
                                <input id=\"ocupacaoMaterna\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"ocupacaoMaterna\" >Ocupação materna</label>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s6\" >
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
                                <label>Escolaridade paterna</label>
                            </div>

                            <div class=\"input-field col s6\">
                                <input id=\"ocupacaoPaterna\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"ocupacaoPaterna\" >Ocupação paterna</label>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                <input id=\"qtdIrmaos\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"qtdIrmaos\" >Quantidade de irmãos</label>
                            </div>
                            <a class=\"waves-effect waves-light btn\" onclick=\"addIrmao();\">
                                Adicionar Irmão
                            </a>
                        </div>
                        <div class=\"listaIrmaos\">
                            <div class=\"irmaos\">
                                <div class=\"row  teal lighten-4\">
                                    <div class=\"col s2\">
                                        <p>
                                            <input type=\"checkbox\" id=\"irmaoSaudavel\" />
                                            <label class=\"black-text\" for=\"irmaoSaudavel\">Irmão saudável</label>
                                        </p>
                                    </div>

                                    <div class=\"col s3\">

                                        <p> Sexo: </p>
                                        <input class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"fem\" />
                                        <label for=\"fem\" class=\"black-text\">Feminino</label>
                                        <input  class=\"with-gap\"  name=\"sexo\" type=\"radio\" id=\"mas\" />
                                        <label for=\"mas\" class=\"black-text\">Masculino</label>
                                    </div>
                                    <div class=\"input-field col s1\">
                                        <input id=\"idadeIrmao\" type=\"number\" class=\"validate\">
                                        <label class=\"black-text\" for=\"idadeIrmao\" >Idade</label>
                                    </div>
                                    <div class=\"input-field col s6\">
                                        <select>
                                            <option value=\"\" disabled selected>Parentesco</option>
                                            <option value=\"1\">mesmo pai</option>
                                            <option value=\"2\">mesma mãe</option>
                                            <option value=\"3\">mesmo pai e mãe</option>
                                            <option value=\"3\">adotivo</option>
                                        </select>
                                        <label>Grau de parentesco</label>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"recorrenciaFamiliar\" />
                                    <label class=\"black-text\" for=\"recorrenciaFamiliar\">Recorrência Familiar</label>
                                </p>
                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"recorrenciaFamiliarGenetica\" />
                                    <label class=\"black-text\" for=\"recorrenciaFamiliarGenetica\">Recorrência Familiar Genética</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8\" id=\"descricaoRecorrenciaFamiliarGenetica\" style=\"display: none\">
                                <input id=\"dsRecorrenciaFamiliarGenetica\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"dsRecorrenciaFamiliarGenetica\" >Descrição da Recorrência familiar Genética</label>
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
", "::historiaFamiliar.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app/Resources\\views/historiaFamiliar.html.twig");
    }
}
