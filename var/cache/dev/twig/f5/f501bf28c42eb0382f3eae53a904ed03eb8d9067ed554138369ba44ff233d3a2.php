<?php

/* questionario.html.twig */
class __TwigTemplate_27d272fb6a60943e3b65c01228f7cceb3fa9be91f96857feec804c2d5500fbb2 extends Twig_Template
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
        $__internal_b4d89a619bab6e019721597c164eeda54c3b69376749b682a78ad95c35b8213b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d89a619bab6e019721597c164eeda54c3b69376749b682a78ad95c35b8213b->enter($__internal_b4d89a619bab6e019721597c164eeda54c3b69376749b682a78ad95c35b8213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questionario.html.twig"));

        $__internal_d66559605f1db2befe711f01fbe8713b14b6b35b67b81bcf84a1c0bcb544abbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66559605f1db2befe711f01fbe8713b14b6b35b67b81bcf84a1c0bcb544abbe->enter($__internal_d66559605f1db2befe711f01fbe8713b14b6b35b67b81bcf84a1c0bcb544abbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questionario.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "materialize/css/materialize.min.css\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "assets/themes/bars-square.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "assets/css/examples.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "assets/css/normalize.min.css\">
        <!-- Fonts -->
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Source+Code+Pro\" rel=\"stylesheet\" type=\"text/css\">

    </head>

    <body>
        <nav>
            <div class=\"nav-wrapper blue \">  <h1 class=\"brand-logo center\">Avaliação da qualidade da imagem</h1></div>
        </nav>
        <div class=\"container\" style=\"width: 100%\">
            <div class='row'>
                <form class=\"form-container\" >
                    <div class=\"card-panel grey lighten-3\" style=\"height: 600px\">
                        ";
        // line 33
        $context["counter"] = 1;
        // line 34
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perguntas"]) ? $context["perguntas"] : $this->getContext($context, "perguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pergunta"]) {
            // line 35
            echo "
                            <div class=\"col s6\">
                                <div class=\"box box-blue box-example-square\">
                                    <div class=\"box-header\" id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "idPergunta", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "descricaoPergunta", array()), "html", null, true);
            echo "</div>
                                    <div class=\"box-body\">
                                        <select id=\"example";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\"  class=\"rating\" name=\"rating[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pergunta"], "idPergunta", array()), "html", null, true);
            echo "]\" autocomplete=\"off\" style=\"display: none;\" required>

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
            // line 51
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 52
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pergunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        <a class=\"waves-effect waves-light btn blue\" onclick=\"salvarQuestionario('";
        echo twig_escape_filter($this->env, (isset($context["acession"]) ? $context["acession"] : $this->getContext($context, "acession")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["link_dir"]) ? $context["link_dir"] : $this->getContext($context, "link_dir")), "html", null, true);
        echo "');\">Salvar</a>

                      <div class=\"mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active\" id=\"carregando\" ></div>

                    </div>

                </form>
            </div>

        </div>


    </body>
</html>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "assets/js/jquery.barrating.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "materialize/js/materialize.min.js\"></script>
<script type=\"text/javascript\">
                            var jsonRespostas = {};
                            \$(function () {
                                \$('#example1').barrating('show', {
                                    theme: 'bars-square',
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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


                            function salvarQuestionario(acession_number, caminho) {

                                if (\$('.form-container')[0].checkValidity()) {
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
                                        data: JSON.stringify(arraySelected),
                                        contentType: 'application/json',
                                        dataType: 'json',
                                        url: '/dasaHack/app_dev.php/salvarQuestionario/' + acession_number + '',
                                        cache: false,
                                        processData: false,
                                        async: false,
                                        success: function (response) {
                                            console.log(response);
                                            Materialize.toast('Avaliação salva com sucesso!', 4000);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(errorThrown);
                                            Materialize.toast('Falha ao salvar avaliação.', 4000)
                                        }

                                    });
                                    return false;
                                } else {
                                    alert(\"Todas as avaliações devem ser preenchidas.\");
                                }
                            }

                            \$(\".waves-effect\").click(function () {
                                \$('#carregando').toggle();

                            });
</script>
";
        
        $__internal_b4d89a619bab6e019721597c164eeda54c3b69376749b682a78ad95c35b8213b->leave($__internal_b4d89a619bab6e019721597c164eeda54c3b69376749b682a78ad95c35b8213b_prof);

        
        $__internal_d66559605f1db2befe711f01fbe8713b14b6b35b67b81bcf84a1c0bcb544abbe->leave($__internal_d66559605f1db2befe711f01fbe8713b14b6b35b67b81bcf84a1c0bcb544abbe_prof);

    }

    public function getTemplateName()
    {
        return "questionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 70,  139 => 69,  117 => 53,  111 => 52,  109 => 51,  93 => 40,  86 => 38,  81 => 35,  76 => 34,  74 => 33,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  37 => 11,  25 => 1,);
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
<html class=\"no-js\" lang=\"\">
    <head>
        <title>Formulário Qualidade Imagem</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=1024, initial-scale=1\">

        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{web_dir}}materialize/css/materialize.min.css\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{web_dir}}assets/themes/bars-square.css\">
        <link rel=\"stylesheet\" href=\"{{web_dir}}assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"{{web_dir}}assets/css/examples.css\">
        <link rel=\"stylesheet\" href=\"{{web_dir}}assets/css/normalize.min.css\">
        <!-- Fonts -->
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Source+Code+Pro\" rel=\"stylesheet\" type=\"text/css\">

    </head>

    <body>
        <nav>
            <div class=\"nav-wrapper blue \">  <h1 class=\"brand-logo center\">Avaliação da qualidade da imagem</h1></div>
        </nav>
        <div class=\"container\" style=\"width: 100%\">
            <div class='row'>
                <form class=\"form-container\" >
                    <div class=\"card-panel grey lighten-3\" style=\"height: 600px\">
                        {% set counter = 1 %}
                        {%for pergunta in perguntas%}

                            <div class=\"col s6\">
                                <div class=\"box box-blue box-example-square\">
                                    <div class=\"box-header\" id=\"{{pergunta.idPergunta}}\">{{pergunta.descricaoPergunta}}</div>
                                    <div class=\"box-body\">
                                        <select id=\"example{{counter}}\"  class=\"rating\" name=\"rating[{{pergunta.idPergunta}}]\" autocomplete=\"off\" style=\"display: none;\" required>

                                            <option value=\"1\">1</option>
                                            <option value=\"2\">2</option>
                                            <option value=\"3\">3</option>
                                            <option value=\"4\">4</option>
                                            <option value=\"5\">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {% set counter = counter + 1 %}
                        {%endfor%}
                        <a class=\"waves-effect waves-light btn blue\" onclick=\"salvarQuestionario('{{acession}}', '{{link_dir}}');\">Salvar</a>

                      <div class=\"mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active\" id=\"carregando\" ></div>

                    </div>

                </form>
            </div>

        </div>


    </body>
</html>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"{{web_dir}}assets/js/jquery.barrating.js\"></script>
<script type=\"text/javascript\" src=\"{{web_dir}}materialize/js/materialize.min.js\"></script>
<script type=\"text/javascript\">
                            var jsonRespostas = {};
                            \$(function () {
                                \$('#example1').barrating('show', {
                                    theme: 'bars-square',
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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
                                    showValues: true,
                                    showSelectedRating: false,
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


                            function salvarQuestionario(acession_number, caminho) {

                                if (\$('.form-container')[0].checkValidity()) {
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
                                        data: JSON.stringify(arraySelected),
                                        contentType: 'application/json',
                                        dataType: 'json',
                                        url: '/dasaHack/app_dev.php/salvarQuestionario/' + acession_number + '',
                                        cache: false,
                                        processData: false,
                                        async: false,
                                        success: function (response) {
                                            console.log(response);
                                            Materialize.toast('Avaliação salva com sucesso!', 4000);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(errorThrown);
                                            Materialize.toast('Falha ao salvar avaliação.', 4000)
                                        }

                                    });
                                    return false;
                                } else {
                                    alert(\"Todas as avaliações devem ser preenchidas.\");
                                }
                            }

                            \$(\".waves-effect\").click(function () {
                                \$('#carregando').toggle();

                            });
</script>
", "questionario.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\questionario.html.twig");
    }
}
