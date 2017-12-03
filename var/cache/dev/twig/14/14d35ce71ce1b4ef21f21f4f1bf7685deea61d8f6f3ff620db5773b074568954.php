<?php

/* historiaGestaNeo.html.twig */
class __TwigTemplate_8449b5eca93d09219650ae4d5e42e3ff16bee2dbbbb486e93163afcad1851ed4 extends Twig_Template
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
        $__internal_7fdf48b50cb83f360b5524826695eb9a436df7da90be60b9dd62025156dd0ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdf48b50cb83f360b5524826695eb9a436df7da90be60b9dd62025156dd0ac2->enter($__internal_7fdf48b50cb83f360b5524826695eb9a436df7da90be60b9dd62025156dd0ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historiaGestaNeo.html.twig"));

        $__internal_50bb4d5e0f227ba07f168b3dffac1fc5510d15dfc184af846cdaaa8982a8d772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bb4d5e0f227ba07f168b3dffac1fc5510d15dfc184af846cdaaa8982a8d772->enter($__internal_50bb4d5e0f227ba07f168b3dffac1fc5510d15dfc184af846cdaaa8982a8d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historiaGestaNeo.html.twig"));

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
        // line 40
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "identificacao\">Identificação</a></li>
                        <li class=\"tab\"><a class=\"active\" href=\"#test2\">Historia Gestacional e Neonatal</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "neuropsico\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "historiafamiliar\">História Familiar</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "exameFisico\">Exame Físico</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "exames\">Exames</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">

                            <div class=\"input-field col s3\">

                                <input id=\"Gesta\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"Gesta\" >Gesta</label>
                            </div>
                            <div class=\"input-field col s3\">

                                <input id=\"Para\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"Para\">Para</label>
                            </div>
                            <div class=\"input-field col s3\">
                                <input id=\"qtdCesaria\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"qtdCesaria\">Cesaria</label>
                            </div>
                            <div class=\"input-field col s3\">
                                <input id=\"abortoEspontaneo\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"abortoEspontaneo\">Aborto espontaneo</label>
                            </div>

                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s3\">
                                <input id=\"abortoProvocado\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"abortoProvocado\">Aborto provocado</label>
                            </div>

                            <div class=\"input-field col s3\">
                                <input id=\"gestaEctopica\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"gestaEctopica\">Gestação Ectopica</label>
                            </div>
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"preNatal\" />
                                    <label class=\"black-text\" for=\"preNatal\">Realizou Pré Natal?</label>
                                </p>
                            </div>
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"examesPreNatal\" />
                                    <label class=\"black-text\" for=\"examesPreNatal\">Fez Exames Pré Natal?</label>
                                </p>
                            </div>


                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"ameacaAborto\" />
                                    <label class=\"black-text\" for=\"ameacaAborto\">Teve Ameaças de Aborto?</label>
                                </p>
                            </div>
                            <div class=\"input-field col s4\">
                                <input id=\"numeroAmeacasAborto\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"numeroAmeacasAborto\">Numero de ameaças de aborto</label>
                            </div> 
                            <div class=\"col s5\">
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"primeiroMesAB\" />
                                        <label class=\"black-text\" for=\"primeiroMesAB\">Primeiro mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"segundoMesAB\" />
                                        <label class=\"black-text\" for=\"segundoMesAB\">Segundo mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"terceiroMesAB\" />
                                        <label class=\"black-text\" for=\"terceiroMesAB\">Terceiro mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"quartoMesAB\" />
                                        <label class=\"black-text\" for=\"quartoMesAB\">Quarto mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"QuintoMesAB\" />
                                        <label class=\"black-text\" for=\"QuintoMesAB\">Quinto mês    </label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"naoSeiMesAB\" />
                                        <label class=\"black-text\" for=\"naoSeiMesAB\">Não sei</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row listaDoencaAgudaCronica\">

                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"doencasAgCro\" />
                                    <label class=\"black-text\" for=\"doencasAgCro\">Doenças Agudas ou crônicas</label>
                                </p>
                            </div>
                            <div class=\"input-field col s6 inputDoencaAgudaCronica\" >
                                <input id=\"dsDoencaAgCro\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"dsDoencaAgCro\">Nome Doença Aguda ou Crônica</label>                                   
                            </div>
                            <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addNomeDoencaAgudaCronica();\">
                                <i class=\"material-icons\">add</i>
                            </a>
                        </div>
                        <div class=\"row\">

                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"usoMedicamento\" />
                                    <label class=\"black-text\" for=\"usoMedicamento\">Fez uso de Medicamento durante a gestação?</label>
                                </p>
                            </div>
                        </div>



                        <div class=\"row\">
                            <div class=\"listaMedicamento \" style=\"display: none;\">
                                <div class=\"medicamento\">
                                    <div class=\"row  teal lighten-4\">
                                        <div class=\"input-field col s5\">
                                            <i class=\"material-icons prefix\">textsms</i>
                                            <input type=\"text\" id=\"autocomplete-input\" class=\"autocomplete\">
                                            <label class=\"black-text\" for=\"autocomplete-input\">Nome do medicamento</label>

                                        </div>

                                        <div class=\"input-field col s5\" >
                                            <input id=\"medicamentoDescricao\" type=\"text\" class=\"validate\">
                                            <label class=\"black-text\" for=\"medicamentoDescricao\">Forma de uso e posologia</label>                                   
                                        </div>

                                        <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addMedicamento();\">
                                            <i class=\"material-icons\">add</i>
                                        </a>
                                    </div>

                                    <div class=\"row mesesUsoMedicamento  teal lighten-4\" style=\"display: none;\">
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"primeiroMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"primeiroMesMedicamentoGestacaoUso\">Primeiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"segundoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"segundoMesMedicamentoGestacaoUso\">Segundo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"terceiroMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"terceiroMesMedicamentoGestacaoUso\">Terceiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quartoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"quartoMesMedicamentoGestacaoUso\">Quarto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quintoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"quintoMesMedicamentoGestacaoUso\">Quinto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"sextoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"sextoMesMedicamentoGestacaoUso\">Sexto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"setimoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"setimoMesMedicamentoGestacaoUso\">Sétimo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"oitavoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"oitavoMesMedicamentoGestacaoUso\">Oitavo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"nonoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"nonoMesMedicamentoGestacaoUso\">Nono mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"naoSeiMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"naoSeiMesMedicamentoGestacaoUso\">Não sei</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <p>
                                    <input type=\"checkbox\" id=\"usoDrogasIlicitas\" />
                                    <label class=\"black-text\" for=\"usoDrogasIlicitas\">Uso de Drogas Ilícitas</label>
                                </p>
                            </div> 
                        </div>
                        <div class=\"row\">
                            <div class=\"listaDroga\" style=\"display: none;\">
                                <div class=\"droga\">
                                    <div class=\"row  teal lighten-4\">
                                        <div class=\"input-field col s5\">
                                            <i class=\"material-icons prefix\">textsms</i>
                                            <input type=\"text\" id=\"autocomplete-input\" class=\"autocomplete\">
                                            <label class=\"black-text\" for=\"autocomplete-input\">Nome da droga</label>

                                        </div>

                                        <div class=\"input-field col s5\" >
                                            <input id=\"drogaDescricao\" type=\"text\" class=\"validate\">
                                            <label class=\"black-text\" for=\"drogaDescricao\">Forma de uso e quantidade</label>                                   
                                        </div>

                                        <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addDroga();\">
                                            <i class=\"material-icons\">add</i>
                                        </a>
                                    </div>
                                    <div class=\"row mesesUsoDroga  teal lighten-4\" style=\"display: none;\">
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"primeiroMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"primeiroMesDrogaUso\">Primeiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"segundoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"segundoMesDrogaUso\">Segundo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"terceiroMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"terceiroMesDrogaUso\">Terceiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quartoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"quartoMesDrogaUso\">Quarto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quintoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"quintoMesDrogaUso\">Quinto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"sextoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"sextoMesDrogaUso\">Sexto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"setimoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"setimoMesDrogaUso\">Sétimo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"oitavoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"oitavoMesDrogaUso\">Oitavo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"nonoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"nonoMesDrogaUso\">Nono mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"naoSeiMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"naoSeiMesDrogaUso\">Não sei</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"fumo\" />
                                    <label class=\"black-text\" for=\"fumo\">Fumante</label>
                                </p>
                            </div>

                            <div class=\"input-field col s4 descricaoFumo\" style=\"display: none\">

                                <input type=\"text\" id=\"descricaoFumo\" class=\"validate\">
                                <label class=\"black-text\" for=\"descricaoFumo\">Descricao do uso do fumo</label>

                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"alcool\" />
                                    <label class=\"black-text\" for=\"alcool\">Uso de Alcool</label>
                                </p>
                            </div>
                            <div class=\"input-field col s4 descricaoAlcool\" style=\"display: none\">

                                <input type=\"text\" id=\"descricaoAlcool\" class=\"validate\">
                                <label class=\"black-text\" for=\"descricaoAlcool\">Descricao do uso do alcool</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"ultrasonografias\" />
                                    <label class=\"black-text\" for=\"ultrasonografias\">Realizou ultrasonografias</label>
                                </p>
                            </div>

                        </div>
                        <div class=\"row listaUltrassonografias\" style=\"display: none\">
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"rastreioPrimeiroTrimestre\" />
                                        <label class=\"black-text\" for=\"rastreioPrimeiroTrimestre\">Rastreio de Primeiro Trimestre</label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"rastreioPrimeiroTrimestreQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"rastreioPrimeiroTrimestreAlterado\" />
                                        <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoRastreioPrimeiroTrimestre\" style=\"display: none\" >
                                    <textarea id=\"rastreioPrimeiroTrimestreDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreDsAlterado\">Descricao da alteracao</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoObstetricaTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoObstetricaTrimestre\">Ecografia Obstetrica </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoObstetricaQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoObstetricaQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoObstetricaAlterado\" />
                                        <label class=\"black-text\" for=\"ecoObstetricaAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoObstetrica\" style=\"display: none\" >

                                    <textarea  id=\"ecoObstetricaDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecoObstetricaDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoMorfologicaTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoMorfologicaTrimestre\">Ecografia Morfologica </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoMorfologicaQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoMorfologicaQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoMorfologicaAlterado\" />
                                        <label class=\"black-text\" for=\"ecoMorfologicaAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoMorfologica\" style=\"display: none\"  >

                                    <textarea  id=\"ecoMorfologicaDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecoMorfologicaDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecocardioFetalTrimestre\" />
                                        <label class=\"black-text\" for=\"ecocardioFetalTrimestre\">Ecocardiografia Fetal </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecocardioFetalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecocardioFetalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecocardioFetalAlterado\" />
                                        <label class=\"black-text\" for=\"ecocardioFetalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoCardioFetal\"  style=\"display: none\"  >

                                    <textarea id=\"ecocardioFetalDsAlterado\"class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecocardioFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"resMagFetalTrimestre\" />
                                        <label class=\"black-text\" for=\"resMagFetalTrimestre\">Ressonancia Magnetica Fetal </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"resMagFetalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"resMagFetalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"resMagFetalAlterado\" />
                                        <label class=\"black-text\" for=\"resMagFetalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoResMagFetal\" style=\"display: none\"  >

                                    <textarea  id=\"resMagFetalDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"resMagFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoTridimensionalTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoTridimensionalTrimestre\">Ecografia Tridimensional </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoTridimensionalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoTridimensionalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoTridimensionalAlterado\" />
                                        <label class=\"black-text\" for=\"ecoTridimensionalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoTridimensional\"style=\"display: none\"  >

                                    <textarea  id=\"ecocardioFetalDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecocardioFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                        </div>  
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <p> Local do parto: </p>
                                <input class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"santaCasa\" />
                                <label for=\"santaCasa\" class=\"black-text\">Santa Casa</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"outroPoa\" />
                                <label for=\"outroPoa\" class=\"black-text\">Outro Hospital de Porto Alegre</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"regiaoMetro\" />
                                <label for=\"regiaoMetro\" class=\"black-text\">Hospital Região Metropoliana</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"interior\" />
                                <label for=\"interior\" class=\"black-text\">Hospital do Interior</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"outroEstado\" />
                                <label for=\"outroEstado\" class=\"black-text\">Hospital de Outro Estado</label>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s7\">
                                <p> Duração da gestação: </p>
                                <input class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"menor37\" />
                                <label for=\"menor37\" class=\"black-text\">menos de 37 semanas</label>
                                <input  class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"entre37_41\" />
                                <label for=\"entre37_41\" class=\"black-text\">37 ou menor ou igual a 41</label>
                                <input  class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"maior41\" />
                                <label for=\"maior41\" class=\"black-text\">mais que 41 semanas</label>
                            </div> 
                            <div class=\"col s5\">
                                <p> Tipo de parto: </p>
                                <input class=\"with-gap\"  name=\"tipoPartoGroup\" type=\"radio\" id=\"normal\" />
                                <label for=\"normal\" class=\"black-text\">Normal</label>
                                <input  class=\"with-gap\"  name=\"tipoPartoGroup\" type=\"radio\" id=\"cesaria\" />
                                <label for=\"cesaria\" class=\"black-text\">Cesária</label>
                                <div id=\"cesariaDiv\" style=\"display: none\">
                                    <input type=\"text\" id=\"motivoCesaria\" class=\"validate\">
                                    <label class=\"black-text\" for=\"motivoCesaria\">Motivo da cesaria</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s3\">
                                <p> Apresentação: </p>
                                <input class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"cefalica\" />
                                <label for=\"cefalica\" class=\"black-text\">Cefálica</label>
                                <input  class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"pelvica\" />
                                <label for=\"pelvica\" class=\"black-text\">Pelvica</label>
                                <input  class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"transversa\" />
                                <label for=\"transversa\" class=\"black-text\">Transversa</label>
                            </div> 
                            <div class=\"col s9\">

                                <div class=\"input-field col s2\">

                                    <input id=\"peso\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"peso\" >Peso</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"altura\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"altura\" >Altura</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"pc\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"pc\" >Pc</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"pt\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"pt\" >Pt</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"apgar1\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"apgar1\" >Apgar1</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"apgar5\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"apgar5\" >Apgar5</label>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class=\"input-field col s3\">
                                <input id=\"permanenciaMaternidade\" type=\"number\" step=\"0.01\" class=\"validate\">
                                <label class=\"black-text\" for=\"permanenciaMaternidade\" >Permanencia na maternidade</label>

                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"naoSeiPermanenciaMaternidade\" />
                                    <label class=\"black-text\" for=\"naoSeiPermanenciaMaternidade\">Não sei</label>
                                </p>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"testePezinho\" />
                                    <label class=\"black-text\" for=\"testePezinho\">Teste do pezinho</label>
                                </p>
                            </div>

                            <div class=\"col s2 alteracaoTestePezinho\" style=\"display: none\">
                                <p>
                                    <input type=\"checkbox\" id=\"alteracaoTestePezinhoCheck\">
                                    <label class=\"black-text\" for=\"alteracaoTestePezinhoCheck\">Alterado</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsAlteracaoTestePezinho\" style=\"display: none\">

                                <input type=\"text\" id=\"DescAlteracaoTesteDoPezinho\" class=\"validate\">
                                <label class=\"black-text\" for=\"DescAlteracaoTesteDoPezinho\">Descrição da alteração do teste do pezinho</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"testeOrelhinha\" />
                                    <label class=\"black-text\" for=\"testeOrelhinha\">Teste da orelhinha</label>
                                </p>
                            </div>

                            <div class=\"col s2 alteracaoTesteOrelhinha\" style=\"display: none\">
                                <p>
                                    <input type=\"checkbox\" id=\"alteracaoTesteOrelhinhaCheck\">
                                    <label class=\"black-text\" for=\"alteracaoTesteOrelhinhaCheck\">Alterado</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsAlteracaoTesteOrelhinha\" style=\"display: none\">

                                <input type=\"text\" id=\"DescAlteracaoTesteOrelhinha\" class=\"validate\">
                                <label class=\"black-text\" for=\"DescAlteracaoTesteOrelhinha\">Descrição da alteração do teste da orelhinha</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"intercorrencias\" />
                                    <label class=\"black-text\" for=\"intercorrencias\">Intercorrências</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsIntercorrencias\" style=\"display: none\">

                                <input type=\"text\" id=\"descIntercorrencias\" class=\"validate\">
                                <label class=\"black-text\" for=\"descIntercorrencias\">Descrição das intercorrências</label>

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
        \$(document).ready(function () {
            \$('input.autocomplete').autocomplete({
                data: {
                    \"paracetamol\": null,
                    \"dipirona\": null,
                    \"tamiflu\": 'http://placehold.it/250x250'
                },
                limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                onAutocomplete: function (val) {
                    // Callback function when value is autcompleted.
                },
                minLength: 2, // The minimum length of the input for the autocomplete to start. Default: 1.
            });
        });

        function addMedicamento() {
            var inputLocal = document.getElementsByClassName(\"medicamento\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaMedicamento\")[0].appendChild(clone);
        }
        function addDroga() {
            var inputLocal = document.getElementsByClassName(\"droga\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaDroga\")[0].appendChild(clone);
        }

        function addNomeDoencaAgudaCronica() {
            var inputLocal = document.getElementsByClassName(\"inputDoencaAgudaCronica\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaDoencaAgudaCronica\")[0].appendChild(clone);
        }
        \$(document).on('change', '#usoMedicamento', function () {
            if (this.checked) {
                \$('.listaMedicamento').show();
                \$('.mesesUsoMedicamento').show();

            } else {
                \$('.listaMedicamento').hide();
                \$('.mesesUsoMedicamento').hide();
            }

        });

        \$(document).on('change', '#usoDrogasIlicitas', function () {
            if (this.checked) {
                \$('.listaDroga').show();
                \$('.mesesUsoDroga').show();

            } else {
                \$('.listaDroga').hide();
                \$('.mesesUsoDroga').hide();
            }

        });
        \$(document).on('change', '#fumo', function () {
            if (this.checked) {
                \$('.descricaoFumo').show();
            } else {
                \$('.descricaoFumo').hide();
            }
        });
        \$(document).on('change', '#alcool', function () {
            if (this.checked) {
                \$('.descricaoAlcool').show();
            } else {
                \$('.descricaoAlcool').hide();
            }
        });
        \$(document).on('change', '#ultrasonografias', function () {
            if (this.checked) {
                \$('.listaUltrassonografias').show();
            } else {
                \$('.listaUltrassonografias').hide();
            }
        });
        \$('#rastreioPrimeiroTrimestreDsAlterado').trigger('autoresize');

        \$(document).on('change', '#cesaria', function () {
            if (this.checked) {
                \$('#cesariaDiv').show();


            } else {
                \$('#cesariaDiv').hide();

            }

        });

        \$(document).on('change', '#testePezinho', function () {
            if (this.checked) {
                \$('.alteracaoTestePezinho').show();
            } else {
                \$('.alteracaoTestePezinho').hide();
            }
        });
        \$(document).on('change', '#alteracaoTestePezinhoCheck', function () {
            if (this.checked) {
                \$('.dsAlteracaoTestePezinho').show();
            } else {
                \$('.dsAlteracaoTestePezinho').hide();
            }
        });


        \$(document).on('change', '#testeOrelhinha', function () {
            if (this.checked) {
                \$('.alteracaoTesteOrelhinha').show();
            } else {
                \$('.alteracaoTesteOrelhinha').hide();
            }
        });
        \$(document).on('change', '#alteracaoTesteOrelhinhaCheck', function () {
            if (this.checked) {
                \$('.dsAlteracaoTesteOrelhinha').show();
            } else {
                \$('.dsAlteracaoTesteOrelhinha').hide();
            }
        });

        \$(document).on('change', '#intercorrencias', function () {
            if (this.checked) {
                \$('.dsIntercorrencias').show();
            } else {
                \$('.dsIntercorrencias').hide();
            }
        });

        \$(document).on('change', '#rastreioPrimeiroTrimestreAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoRastreioPrimeiroTrimestre').show();
            } else {
                \$('.dsAlteracaoRastreioPrimeiroTrimestre').hide();
            }
        });

        \$(document).on('change', '#ecoObstetricaAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoObstetrica').show();
            } else {
                \$('.dsAlteracaoEcoObstetrica').hide();
            }
        });

        \$(document).on('change', '#ecocardioFetalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoCardioFetal').show();
            } else {
                \$('.dsAlteracaoEcoCardioFetal').hide();
            }
        });

        \$(document).on('change', '#resMagFetalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoResMagFetal').show();
            } else {
                \$('.dsAlteracaoResMagFetal').hide();
            }
        });

        \$(document).on('change', '#ecoMorfologicaAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoMorfologica').show();
            } else {
                \$('.dsAlteracaoEcoMorfologica').hide();
            }
        });

        \$(document).on('change', '#ecoTridimensionalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoTridimensional').show();
            } else {
                \$('.dsAlteracaoEcoTridimensional').hide();
            }
        });
    </script>
</body>

</html>
";
        
        $__internal_7fdf48b50cb83f360b5524826695eb9a436df7da90be60b9dd62025156dd0ac2->leave($__internal_7fdf48b50cb83f360b5524826695eb9a436df7da90be60b9dd62025156dd0ac2_prof);

        
        $__internal_50bb4d5e0f227ba07f168b3dffac1fc5510d15dfc184af846cdaaa8982a8d772->leave($__internal_50bb4d5e0f227ba07f168b3dffac1fc5510d15dfc184af846cdaaa8982a8d772_prof);

    }

    public function getTemplateName()
    {
        return "historiaGestaNeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  79 => 44,  75 => 43,  71 => 42,  66 => 40,  25 => 1,);
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
                        <li class=\"tab\"><a class=\"active\" href=\"#test2\">Historia Gestacional e Neonatal</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}neuropsico\">Evolução Neuropsicomotora</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}historiafamiliar\">História Familiar</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}exameFisico\">Exame Físico</a></li>
                        <li class=\"tab\"><a target=\"_self\" href=\"{{web_dir}}exames\">Exames</a></li>
                    </ul>
                </div>
            </nav>

            <div class=\"container\" id=\"teste1\">

                <div class=\"z-depth-1 grey lighten-4 row\" >

                    <form class=\"col s12\">

                        <div class=\"row\">

                            <div class=\"input-field col s3\">

                                <input id=\"Gesta\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"Gesta\" >Gesta</label>
                            </div>
                            <div class=\"input-field col s3\">

                                <input id=\"Para\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"Para\">Para</label>
                            </div>
                            <div class=\"input-field col s3\">
                                <input id=\"qtdCesaria\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"qtdCesaria\">Cesaria</label>
                            </div>
                            <div class=\"input-field col s3\">
                                <input id=\"abortoEspontaneo\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"abortoEspontaneo\">Aborto espontaneo</label>
                            </div>

                        </div>

                        <div class=\"row\">
                            <div class=\"input-field col s3\">
                                <input id=\"abortoProvocado\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"abortoProvocado\">Aborto provocado</label>
                            </div>

                            <div class=\"input-field col s3\">
                                <input id=\"gestaEctopica\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"gestaEctopica\">Gestação Ectopica</label>
                            </div>
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"preNatal\" />
                                    <label class=\"black-text\" for=\"preNatal\">Realizou Pré Natal?</label>
                                </p>
                            </div>
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"examesPreNatal\" />
                                    <label class=\"black-text\" for=\"examesPreNatal\">Fez Exames Pré Natal?</label>
                                </p>
                            </div>


                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"ameacaAborto\" />
                                    <label class=\"black-text\" for=\"ameacaAborto\">Teve Ameaças de Aborto?</label>
                                </p>
                            </div>
                            <div class=\"input-field col s4\">
                                <input id=\"numeroAmeacasAborto\" type=\"number\" class=\"validate\">
                                <label class=\"black-text\" for=\"numeroAmeacasAborto\">Numero de ameaças de aborto</label>
                            </div> 
                            <div class=\"col s5\">
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"primeiroMesAB\" />
                                        <label class=\"black-text\" for=\"primeiroMesAB\">Primeiro mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"segundoMesAB\" />
                                        <label class=\"black-text\" for=\"segundoMesAB\">Segundo mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"terceiroMesAB\" />
                                        <label class=\"black-text\" for=\"terceiroMesAB\">Terceiro mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"quartoMesAB\" />
                                        <label class=\"black-text\" for=\"quartoMesAB\">Quarto mês</label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"QuintoMesAB\" />
                                        <label class=\"black-text\" for=\"QuintoMesAB\">Quinto mês    </label>
                                    </p>
                                </div>
                                <div class=\"col\">
                                    <p>
                                        <input type=\"checkbox\" id=\"naoSeiMesAB\" />
                                        <label class=\"black-text\" for=\"naoSeiMesAB\">Não sei</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row listaDoencaAgudaCronica\">

                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"doencasAgCro\" />
                                    <label class=\"black-text\" for=\"doencasAgCro\">Doenças Agudas ou crônicas</label>
                                </p>
                            </div>
                            <div class=\"input-field col s6 inputDoencaAgudaCronica\" >
                                <input id=\"dsDoencaAgCro\" type=\"text\" class=\"validate\">
                                <label class=\"black-text\" for=\"dsDoencaAgCro\">Nome Doença Aguda ou Crônica</label>                                   
                            </div>
                            <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addNomeDoencaAgudaCronica();\">
                                <i class=\"material-icons\">add</i>
                            </a>
                        </div>
                        <div class=\"row\">

                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"usoMedicamento\" />
                                    <label class=\"black-text\" for=\"usoMedicamento\">Fez uso de Medicamento durante a gestação?</label>
                                </p>
                            </div>
                        </div>



                        <div class=\"row\">
                            <div class=\"listaMedicamento \" style=\"display: none;\">
                                <div class=\"medicamento\">
                                    <div class=\"row  teal lighten-4\">
                                        <div class=\"input-field col s5\">
                                            <i class=\"material-icons prefix\">textsms</i>
                                            <input type=\"text\" id=\"autocomplete-input\" class=\"autocomplete\">
                                            <label class=\"black-text\" for=\"autocomplete-input\">Nome do medicamento</label>

                                        </div>

                                        <div class=\"input-field col s5\" >
                                            <input id=\"medicamentoDescricao\" type=\"text\" class=\"validate\">
                                            <label class=\"black-text\" for=\"medicamentoDescricao\">Forma de uso e posologia</label>                                   
                                        </div>

                                        <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addMedicamento();\">
                                            <i class=\"material-icons\">add</i>
                                        </a>
                                    </div>

                                    <div class=\"row mesesUsoMedicamento  teal lighten-4\" style=\"display: none;\">
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"primeiroMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"primeiroMesMedicamentoGestacaoUso\">Primeiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"segundoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"segundoMesMedicamentoGestacaoUso\">Segundo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"terceiroMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"terceiroMesMedicamentoGestacaoUso\">Terceiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quartoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"quartoMesMedicamentoGestacaoUso\">Quarto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quintoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"quintoMesMedicamentoGestacaoUso\">Quinto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"sextoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"sextoMesMedicamentoGestacaoUso\">Sexto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"setimoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"setimoMesMedicamentoGestacaoUso\">Sétimo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"oitavoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"oitavoMesMedicamentoGestacaoUso\">Oitavo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"nonoMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"nonoMesMedicamentoGestacaoUso\">Nono mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"naoSeiMesMedicamentoGestacaoUso\" />
                                                <label class=\"black-text\" for=\"naoSeiMesMedicamentoGestacaoUso\">Não sei</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <p>
                                    <input type=\"checkbox\" id=\"usoDrogasIlicitas\" />
                                    <label class=\"black-text\" for=\"usoDrogasIlicitas\">Uso de Drogas Ilícitas</label>
                                </p>
                            </div> 
                        </div>
                        <div class=\"row\">
                            <div class=\"listaDroga\" style=\"display: none;\">
                                <div class=\"droga\">
                                    <div class=\"row  teal lighten-4\">
                                        <div class=\"input-field col s5\">
                                            <i class=\"material-icons prefix\">textsms</i>
                                            <input type=\"text\" id=\"autocomplete-input\" class=\"autocomplete\">
                                            <label class=\"black-text\" for=\"autocomplete-input\">Nome da droga</label>

                                        </div>

                                        <div class=\"input-field col s5\" >
                                            <input id=\"drogaDescricao\" type=\"text\" class=\"validate\">
                                            <label class=\"black-text\" for=\"drogaDescricao\">Forma de uso e quantidade</label>                                   
                                        </div>

                                        <a class=\"btn-floating btn-flat waves-effect waves-light teal right-align\" onclick=\"addDroga();\">
                                            <i class=\"material-icons\">add</i>
                                        </a>
                                    </div>
                                    <div class=\"row mesesUsoDroga  teal lighten-4\" style=\"display: none;\">
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"primeiroMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"primeiroMesDrogaUso\">Primeiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"segundoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"segundoMesDrogaUso\">Segundo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"terceiroMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"terceiroMesDrogaUso\">Terceiro mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quartoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"quartoMesDrogaUso\">Quarto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"quintoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"quintoMesDrogaUso\">Quinto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"sextoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"sextoMesDrogaUso\">Sexto mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"setimoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"setimoMesDrogaUso\">Sétimo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"oitavoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"oitavoMesDrogaUso\">Oitavo mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"nonoMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"nonoMesDrogaUso\">Nono mês</label>
                                            </p>
                                        </div>
                                        <div class=\"col s2\">
                                            <p>
                                                <input type=\"checkbox\" id=\"naoSeiMesDrogaUso\" />
                                                <label class=\"black-text\" for=\"naoSeiMesDrogaUso\">Não sei</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"fumo\" />
                                    <label class=\"black-text\" for=\"fumo\">Fumante</label>
                                </p>
                            </div>

                            <div class=\"input-field col s4 descricaoFumo\" style=\"display: none\">

                                <input type=\"text\" id=\"descricaoFumo\" class=\"validate\">
                                <label class=\"black-text\" for=\"descricaoFumo\">Descricao do uso do fumo</label>

                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"alcool\" />
                                    <label class=\"black-text\" for=\"alcool\">Uso de Alcool</label>
                                </p>
                            </div>
                            <div class=\"input-field col s4 descricaoAlcool\" style=\"display: none\">

                                <input type=\"text\" id=\"descricaoAlcool\" class=\"validate\">
                                <label class=\"black-text\" for=\"descricaoAlcool\">Descricao do uso do alcool</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s4\">
                                <p>
                                    <input type=\"checkbox\" id=\"ultrasonografias\" />
                                    <label class=\"black-text\" for=\"ultrasonografias\">Realizou ultrasonografias</label>
                                </p>
                            </div>

                        </div>
                        <div class=\"row listaUltrassonografias\" style=\"display: none\">
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"rastreioPrimeiroTrimestre\" />
                                        <label class=\"black-text\" for=\"rastreioPrimeiroTrimestre\">Rastreio de Primeiro Trimestre</label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"rastreioPrimeiroTrimestreQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"rastreioPrimeiroTrimestreAlterado\" />
                                        <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoRastreioPrimeiroTrimestre\" style=\"display: none\" >
                                    <textarea id=\"rastreioPrimeiroTrimestreDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"rastreioPrimeiroTrimestreDsAlterado\">Descricao da alteracao</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoObstetricaTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoObstetricaTrimestre\">Ecografia Obstetrica </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoObstetricaQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoObstetricaQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoObstetricaAlterado\" />
                                        <label class=\"black-text\" for=\"ecoObstetricaAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoObstetrica\" style=\"display: none\" >

                                    <textarea  id=\"ecoObstetricaDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecoObstetricaDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoMorfologicaTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoMorfologicaTrimestre\">Ecografia Morfologica </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoMorfologicaQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoMorfologicaQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoMorfologicaAlterado\" />
                                        <label class=\"black-text\" for=\"ecoMorfologicaAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoMorfologica\" style=\"display: none\"  >

                                    <textarea  id=\"ecoMorfologicaDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecoMorfologicaDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecocardioFetalTrimestre\" />
                                        <label class=\"black-text\" for=\"ecocardioFetalTrimestre\">Ecocardiografia Fetal </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecocardioFetalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecocardioFetalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecocardioFetalAlterado\" />
                                        <label class=\"black-text\" for=\"ecocardioFetalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoCardioFetal\"  style=\"display: none\"  >

                                    <textarea id=\"ecocardioFetalDsAlterado\"class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecocardioFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"resMagFetalTrimestre\" />
                                        <label class=\"black-text\" for=\"resMagFetalTrimestre\">Ressonancia Magnetica Fetal </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"resMagFetalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"resMagFetalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"resMagFetalAlterado\" />
                                        <label class=\"black-text\" for=\"resMagFetalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoResMagFetal\" style=\"display: none\"  >

                                    <textarea  id=\"resMagFetalDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"resMagFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoTridimensionalTrimestre\" />
                                        <label class=\"black-text\" for=\"ecoTridimensionalTrimestre\">Ecografia Tridimensional </label>
                                    </p>
                                </div>

                                <div class=\"input-field col s4\" >

                                    <input type=\"number\" id=\"ecoTridimensionalQuantidade\" class=\"validate\">
                                    <label class=\"black-text\" for=\"ecoTridimensionalQuantidade\">Numero de vezes que realizou</label>

                                </div>

                                <div class=\"col s4\">
                                    <p>
                                        <input type=\"checkbox\" id=\"ecoTridimensionalAlterado\" />
                                        <label class=\"black-text\" for=\"ecoTridimensionalAlterado\">Resultado Alterado</label>
                                    </p>
                                </div>
                                <div class=\"input-field col s12 dsAlteracaoEcoTridimensional\"style=\"display: none\"  >

                                    <textarea  id=\"ecocardioFetalDsAlterado\" class=\"materialize-textarea\"></textarea>
                                    <label class=\"black-text\" for=\"ecocardioFetalDsAlterado\">Descricao da alteracao</label>

                                </div>
                            </div>
                        </div>  
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <p> Local do parto: </p>
                                <input class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"santaCasa\" />
                                <label for=\"santaCasa\" class=\"black-text\">Santa Casa</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"outroPoa\" />
                                <label for=\"outroPoa\" class=\"black-text\">Outro Hospital de Porto Alegre</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"regiaoMetro\" />
                                <label for=\"regiaoMetro\" class=\"black-text\">Hospital Região Metropoliana</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"interior\" />
                                <label for=\"interior\" class=\"black-text\">Hospital do Interior</label>
                                <input  class=\"with-gap\"  name=\"localPartolGroup\" type=\"radio\" id=\"outroEstado\" />
                                <label for=\"outroEstado\" class=\"black-text\">Hospital de Outro Estado</label>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s7\">
                                <p> Duração da gestação: </p>
                                <input class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"menor37\" />
                                <label for=\"menor37\" class=\"black-text\">menos de 37 semanas</label>
                                <input  class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"entre37_41\" />
                                <label for=\"entre37_41\" class=\"black-text\">37 ou menor ou igual a 41</label>
                                <input  class=\"with-gap\"  name=\"semanasGestaGroup\" type=\"radio\" id=\"maior41\" />
                                <label for=\"maior41\" class=\"black-text\">mais que 41 semanas</label>
                            </div> 
                            <div class=\"col s5\">
                                <p> Tipo de parto: </p>
                                <input class=\"with-gap\"  name=\"tipoPartoGroup\" type=\"radio\" id=\"normal\" />
                                <label for=\"normal\" class=\"black-text\">Normal</label>
                                <input  class=\"with-gap\"  name=\"tipoPartoGroup\" type=\"radio\" id=\"cesaria\" />
                                <label for=\"cesaria\" class=\"black-text\">Cesária</label>
                                <div id=\"cesariaDiv\" style=\"display: none\">
                                    <input type=\"text\" id=\"motivoCesaria\" class=\"validate\">
                                    <label class=\"black-text\" for=\"motivoCesaria\">Motivo da cesaria</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">
                            <div class=\"col s3\">
                                <p> Apresentação: </p>
                                <input class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"cefalica\" />
                                <label for=\"cefalica\" class=\"black-text\">Cefálica</label>
                                <input  class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"pelvica\" />
                                <label for=\"pelvica\" class=\"black-text\">Pelvica</label>
                                <input  class=\"with-gap\"  name=\"apresentacaoGroup\" type=\"radio\" id=\"transversa\" />
                                <label for=\"transversa\" class=\"black-text\">Transversa</label>
                            </div> 
                            <div class=\"col s9\">

                                <div class=\"input-field col s2\">

                                    <input id=\"peso\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"peso\" >Peso</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"altura\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"altura\" >Altura</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"pc\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"pc\" >Pc</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"pt\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"pt\" >Pt</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"apgar1\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"apgar1\" >Apgar1</label>
                                </div>
                                <div class=\"input-field col s2\">

                                    <input id=\"apgar5\" type=\"number\" step=\"0.01\" class=\"validate\">
                                    <label class=\"black-text\" for=\"apgar5\" >Apgar5</label>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class=\"input-field col s3\">
                                <input id=\"permanenciaMaternidade\" type=\"number\" step=\"0.01\" class=\"validate\">
                                <label class=\"black-text\" for=\"permanenciaMaternidade\" >Permanencia na maternidade</label>

                            </div>
                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"naoSeiPermanenciaMaternidade\" />
                                    <label class=\"black-text\" for=\"naoSeiPermanenciaMaternidade\">Não sei</label>
                                </p>
                            </div>
                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"testePezinho\" />
                                    <label class=\"black-text\" for=\"testePezinho\">Teste do pezinho</label>
                                </p>
                            </div>

                            <div class=\"col s2 alteracaoTestePezinho\" style=\"display: none\">
                                <p>
                                    <input type=\"checkbox\" id=\"alteracaoTestePezinhoCheck\">
                                    <label class=\"black-text\" for=\"alteracaoTestePezinhoCheck\">Alterado</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsAlteracaoTestePezinho\" style=\"display: none\">

                                <input type=\"text\" id=\"DescAlteracaoTesteDoPezinho\" class=\"validate\">
                                <label class=\"black-text\" for=\"DescAlteracaoTesteDoPezinho\">Descrição da alteração do teste do pezinho</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s2\">
                                <p>
                                    <input type=\"checkbox\" id=\"testeOrelhinha\" />
                                    <label class=\"black-text\" for=\"testeOrelhinha\">Teste da orelhinha</label>
                                </p>
                            </div>

                            <div class=\"col s2 alteracaoTesteOrelhinha\" style=\"display: none\">
                                <p>
                                    <input type=\"checkbox\" id=\"alteracaoTesteOrelhinhaCheck\">
                                    <label class=\"black-text\" for=\"alteracaoTesteOrelhinhaCheck\">Alterado</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsAlteracaoTesteOrelhinha\" style=\"display: none\">

                                <input type=\"text\" id=\"DescAlteracaoTesteOrelhinha\" class=\"validate\">
                                <label class=\"black-text\" for=\"DescAlteracaoTesteOrelhinha\">Descrição da alteração do teste da orelhinha</label>

                            </div>

                        </div>
                        <div class=\"divider\"></div>
                        <div class=\"row\">

                            <div class=\"col s3\">
                                <p>
                                    <input type=\"checkbox\" id=\"intercorrencias\" />
                                    <label class=\"black-text\" for=\"intercorrencias\">Intercorrências</label>
                                </p>
                            </div>
                            <div class=\"input-field col s8 dsIntercorrencias\" style=\"display: none\">

                                <input type=\"text\" id=\"descIntercorrencias\" class=\"validate\">
                                <label class=\"black-text\" for=\"descIntercorrencias\">Descrição das intercorrências</label>

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
        \$(document).ready(function () {
            \$('input.autocomplete').autocomplete({
                data: {
                    \"paracetamol\": null,
                    \"dipirona\": null,
                    \"tamiflu\": 'http://placehold.it/250x250'
                },
                limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                onAutocomplete: function (val) {
                    // Callback function when value is autcompleted.
                },
                minLength: 2, // The minimum length of the input for the autocomplete to start. Default: 1.
            });
        });

        function addMedicamento() {
            var inputLocal = document.getElementsByClassName(\"medicamento\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaMedicamento\")[0].appendChild(clone);
        }
        function addDroga() {
            var inputLocal = document.getElementsByClassName(\"droga\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaDroga\")[0].appendChild(clone);
        }

        function addNomeDoencaAgudaCronica() {
            var inputLocal = document.getElementsByClassName(\"inputDoencaAgudaCronica\")[0];
            var clone = inputLocal.cloneNode(true);
            document.getElementsByClassName(\"listaDoencaAgudaCronica\")[0].appendChild(clone);
        }
        \$(document).on('change', '#usoMedicamento', function () {
            if (this.checked) {
                \$('.listaMedicamento').show();
                \$('.mesesUsoMedicamento').show();

            } else {
                \$('.listaMedicamento').hide();
                \$('.mesesUsoMedicamento').hide();
            }

        });

        \$(document).on('change', '#usoDrogasIlicitas', function () {
            if (this.checked) {
                \$('.listaDroga').show();
                \$('.mesesUsoDroga').show();

            } else {
                \$('.listaDroga').hide();
                \$('.mesesUsoDroga').hide();
            }

        });
        \$(document).on('change', '#fumo', function () {
            if (this.checked) {
                \$('.descricaoFumo').show();
            } else {
                \$('.descricaoFumo').hide();
            }
        });
        \$(document).on('change', '#alcool', function () {
            if (this.checked) {
                \$('.descricaoAlcool').show();
            } else {
                \$('.descricaoAlcool').hide();
            }
        });
        \$(document).on('change', '#ultrasonografias', function () {
            if (this.checked) {
                \$('.listaUltrassonografias').show();
            } else {
                \$('.listaUltrassonografias').hide();
            }
        });
        \$('#rastreioPrimeiroTrimestreDsAlterado').trigger('autoresize');

        \$(document).on('change', '#cesaria', function () {
            if (this.checked) {
                \$('#cesariaDiv').show();


            } else {
                \$('#cesariaDiv').hide();

            }

        });

        \$(document).on('change', '#testePezinho', function () {
            if (this.checked) {
                \$('.alteracaoTestePezinho').show();
            } else {
                \$('.alteracaoTestePezinho').hide();
            }
        });
        \$(document).on('change', '#alteracaoTestePezinhoCheck', function () {
            if (this.checked) {
                \$('.dsAlteracaoTestePezinho').show();
            } else {
                \$('.dsAlteracaoTestePezinho').hide();
            }
        });


        \$(document).on('change', '#testeOrelhinha', function () {
            if (this.checked) {
                \$('.alteracaoTesteOrelhinha').show();
            } else {
                \$('.alteracaoTesteOrelhinha').hide();
            }
        });
        \$(document).on('change', '#alteracaoTesteOrelhinhaCheck', function () {
            if (this.checked) {
                \$('.dsAlteracaoTesteOrelhinha').show();
            } else {
                \$('.dsAlteracaoTesteOrelhinha').hide();
            }
        });

        \$(document).on('change', '#intercorrencias', function () {
            if (this.checked) {
                \$('.dsIntercorrencias').show();
            } else {
                \$('.dsIntercorrencias').hide();
            }
        });

        \$(document).on('change', '#rastreioPrimeiroTrimestreAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoRastreioPrimeiroTrimestre').show();
            } else {
                \$('.dsAlteracaoRastreioPrimeiroTrimestre').hide();
            }
        });

        \$(document).on('change', '#ecoObstetricaAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoObstetrica').show();
            } else {
                \$('.dsAlteracaoEcoObstetrica').hide();
            }
        });

        \$(document).on('change', '#ecocardioFetalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoCardioFetal').show();
            } else {
                \$('.dsAlteracaoEcoCardioFetal').hide();
            }
        });

        \$(document).on('change', '#resMagFetalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoResMagFetal').show();
            } else {
                \$('.dsAlteracaoResMagFetal').hide();
            }
        });

        \$(document).on('change', '#ecoMorfologicaAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoMorfologica').show();
            } else {
                \$('.dsAlteracaoEcoMorfologica').hide();
            }
        });

        \$(document).on('change', '#ecoTridimensionalAlterado', function () {
            if (this.checked) {
                \$('.dsAlteracaoEcoTridimensional').show();
            } else {
                \$('.dsAlteracaoEcoTridimensional').hide();
            }
        });
    </script>
</body>

</html>
", "historiaGestaNeo.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\historiaGestaNeo.html.twig");
    }
}
