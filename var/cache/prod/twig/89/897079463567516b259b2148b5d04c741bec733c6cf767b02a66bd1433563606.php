<?php

/* ::questionario.html.twig */
class __TwigTemplate_5e099d431b12de76a96db693571d4c48a8d35af099216a390683e825cbb02a62 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
    <head>
        <title>Formulário Qualidade Imagem</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=1024, initial-scale=1\">

        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "materialize/css/materialize.min.css\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "assets/themes/bars-square.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "assets/css/examples.css\">

        <!-- Fonts -->
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Source+Code+Pro\" rel=\"stylesheet\" type=\"text/css\">

    </head>

    <body>
        <div class=\"row\">

            <h5 class=\"center-align\">Questionário</h5>

        </div>
        <div class=\"container\" style=\"width: 100%\">
            <div class='row'>
                <div class=\"card-panel indigo darken-4\" style=\"height: 600px\">
                    ";
        // line 34
        $context["counter"] = 1;
        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perguntas"]) ? $context["perguntas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pergunta"]) {
            // line 36
            echo "
                        <div class=\"col s6\">
                            <div class=\"box box-blue box-example-square\">
                                <div class=\"box-header\" id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "idPergunta", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "descricaoPergunta", array()), "html", null, true);
            echo "</div>
                                <div class=\"box-body\">
                                    <select id=\"example";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "\"  class=\"rating\" name=\"rating[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "idPergunta", array()), "html", null, true);
            echo "]\" autocomplete=\"off\" style=\"display: none;\">
                                        <option value=\"\"></option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        ";
            // line 52
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 53
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pergunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                </div>

                <a class=\"waves-effect waves-light btn\" onclick=\"salvarQuestionario()\">Salvar</a>

            </div>

        </div>


    </body>
</html>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "assets/js/jquery.barrating.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : null), "html", null, true);
        echo "materialize/js/materialize.min.js\"></script>
<script type=\"text/javascript\">
                    var jsonRespostas = {};
                    \$(function () {
                        \$('#example1').barrating('show', {
                            theme: 'bars-square',
                            onSelect: function (value, text, event) {
                                if (typeof (event) !== 'undefined') {
                                    // rating was selected by a user
                                    console.log(event.target);
                                    jsonRespostas.primeira = value;
                                    console.log(jsonRespostas);
                                } else {
                                    // rating was selected programmatically
                                    // by calling `set` method
                                }
                            }
                        });
                        \$('#example2').barrating({
                            theme: 'bars-square',
                            onSelect: function (value, text, event) {
                                if (typeof (event) !== 'undefined') {
                                    // rating was selected by a user
                                    console.log(event.target);
                                    jsonRespostas.segunda = value;
                                    console.log(jsonRespostas);
                                } else {
                                    // rating was selected programmatically
                                    // by calling `set` method
                                }
                            }

                        });
                        \$('#example3').barrating({
                            theme: 'bars-square',
                            onSelect: function (value, text, event) {
                                if (typeof (event) !== 'undefined') {
                                    // rating was selected by a user
                                    console.log(event.target);
                                    jsonRespostas.terceira = value;
                                    console.log(jsonRespostas);
                                } else {
                                    // rating was selected programmatically
                                    // by calling `set` method
                                }
                            }


                        });
                        \$('#example4').barrating({
                            theme: 'bars-square',
                            onSelect: function (value, text, event) {
                                if (typeof (event) !== 'undefined') {
                                    // rating was selected by a user
                                    console.log(event.target);
                                    jsonRespostas['primeira'] = value;
                                    console.log(jsonRespostas);
                                } else {
                                    // rating was selected programmatically
                                    // by calling `set` method
                                }
                            }


                        });
                        \$('#example5').barrating({
                            theme: 'bars-square',
                            onSelect: function (value, text, event) {
                                if (typeof (event) !== 'undefined') {
                                    // rating was selected by a user
                                    console.log(event.target);
                                    jsonRespostas.quinta = value;
                                    console.log(jsonRespostas);
                                } else {
                                    // rating was selected programmatically
                                    // by calling `set` method
                                }
                            }


                        });
                    });


                    function salvarQuestionario() {

                        var arraySelected = {};
                        \$(\"select.rating\").each(function (i, sel) {
                            console.log(\$(\"select.rating\").attr('name'));
                            var name = \$(sel).attr('name');
                             var key = name.match(/\\[(\\d+)\\]/)[1];
                            var selectedVal = \$(sel).val();
                            
                            arraySelected[key] = (selectedVal);
                        });
                        console.log(JSON.stringify(arraySelected));
                        \$.ajax({
                            type: 'post',
                            data: JSON.stringify(jsonRespostas),
                            contentType: 'application/json',
                            dataType: 'json',
                            url: 'salvarQuestionario',
                            cache: false,
                            processData: false,
                            async: false,
                            success: function (response) {
                                console.log(response);
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(errorThrown);
                            }

                        });
                        return false;
                    }
</script>
";
    }

    public function getTemplateName()
    {
        return "::questionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  125 => 68,  109 => 54,  103 => 53,  101 => 52,  85 => 41,  78 => 39,  73 => 36,  68 => 35,  66 => 34,  46 => 17,  42 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::questionario.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app/Resources\\views/questionario.html.twig");
    }
}
