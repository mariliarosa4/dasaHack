<?php

/* dashboard.html.twig */
class __TwigTemplate_ea018f8b4454b09c86ba1e03b8e8f4525f629976ce5890b8055dd5e130bde5ef extends Twig_Template
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
        $__internal_3aed92511e3ec9729879e5440b4ffe2170450b3c326764b25c834099fbb1ab08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aed92511e3ec9729879e5440b4ffe2170450b3c326764b25c834099fbb1ab08->enter($__internal_3aed92511e3ec9729879e5440b4ffe2170450b3c326764b25c834099fbb1ab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_29f4bddb3a3a6311ae45ce70f190c65efab218edf982a1b22a302ab6bc34f5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f4bddb3a3a6311ae45ce70f190c65efab218edf982a1b22a302ab6bc34f5b0->enter($__internal_29f4bddb3a3a6311ae45ce70f190c65efab218edf982a1b22a302ab6bc34f5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

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
    <title>Painel Principal - Equipe Phoenix</title>
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
        <div class=\"sidebar\" data-color=\"blue\" data-image=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/img/sidebar-1.jpg\">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class=\"logo\">
                <a href=\"http://www.phoenix-dasa.com\" class=\"simple-text\">
                    Phoenix Dasa
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
                   ";
        // line 80
        echo "                    <!-- <li class=\"active-pro\">
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
                        <a class=\"navbar-brand\" href=\"#\"> Painel Principal </a>
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
                                        <a href=\"#\">Michel Martins respondeu seu email</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Você tem 5 novas tarefas</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Andrew compartilhou 'avaliacao_20171203.csv' com você!</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Outra notificação</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Outra notificação</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"hidden-lg hidden-md\">Perfil</p>
                                </a>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <div class=\"form-group  is-empty\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Procurar\">
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
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"green\">
                                    <i class=\"material-icons\">high_quality</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Qualidade Média da Imagem</p>
                                    <h3 class=\"title\">4,7
                                        <!-- <small>média</small> -->
                                    </h3>
                                    <small>score</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons text-success\">favorite</i> Nossos profissionais são incríveis!
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"orange\">
                                    <i class=\"material-icons\">explicit</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Dosagem Média de Radiação</p>
                                    <h3 class=\"title\">8,32</h3>
                                    <small>mGy</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">battery_charging_full</i> Miligray (mGy)
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"purple\">
                                    <i class=\"material-icons\">power_settings_new</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Ajuste fino</p>
                                    <h3 class=\"title\">75</h3>
                                    <small>mA</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">power_settings_new</i> Miliampère (mA)
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"blue\">
                                    <i class=\"material-icons\">battery_charging_full</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Calibração Média</p>
                                    <h3 class=\"title\">70</h3>
                                    <small>kVp</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">battery_charging_full</i> Calibração da tensão (kVp)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"green\">
                                    <div class=\"ct-chart\" id=\"dailySalesChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Qualidade Média Semanal</h4>
                                    <p class=\"category\">
                                        <span class=\"text-success\"><i class=\"fa fa-long-arrow-up\"></i> 55% </span> aumentou nos últimos 3 dias.</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> atualizado há 6 min
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"orange\">
                                    <div class=\"ct-chart\" id=\"emailsSubscriptionChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Avaliações Enviadas</h4>
                                    <p class=\"category\">Desempenho da última submissão</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> submetido há 2 dias
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"red\">
                                    <div class=\"ct-chart\" id=\"completedTasksChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Exames de Imagens Concluídos</h4>
                                    <p class=\"category\">Desempenho da última submissão</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> submetido há 2 dias
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card card-nav-tabs\">
                                <div class=\"card-header\" data-background-color=\"purple\">
                                    <div class=\"nav-tabs-navigation\">
                                        <div class=\"nav-tabs-wrapper\">
                                            <span class=\"nav-tabs-title\">Tarefas:</span>
                                            <ul class=\"nav nav-tabs\" data-tabs=\"tabs\">
                                                <li class=\"active\">
                                                    <a href=\"#profile\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">bug_report</i> Discordantes
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                                <li class=\"\">
                                                    <a href=\"#messages\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">code</i> Desenvolvedores
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                                <li class=\"\">
                                                    <a href=\"#settings\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">cloud</i> Servidores
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-content\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"profile\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"tab-pane\" id=\"messages\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"tab-pane\" id=\"settings\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-header\" data-background-color=\"orange\">
                                    <h4 class=\"title\">Ranking - Unidades</h4>
                                    <p class=\"category\">Avaliações de qualidade - 3 de dezembro, 2017</p>
                                </div>
                                <div class=\"card-content table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead class=\"text-warning\">
                                            <th>ID</th>
                                            <th>Unidade</th>
                                            <th>Enviados</th>
                                            <th>Localidade</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lavoisier, Guarulhos - Vila Galvão</td>
                                                <td>2810</td>
                                                <td>São Paulo, SP</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pasteur, Samambaia Sul</td>
                                                <td>2344</td>
                                                <td>Brasília, DF</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Cedic Cedilab, CPA Brasil</td>
                                                <td>1975</td>
                                                <td>Cuiabá, MT</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Bronstein, Seropédica</td>
                                                <td>1883</td>
                                                <td>Rio de Janeiro, RJ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <nav class=\"pull-left\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    Inicial
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Startup
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class=\"copyright pull-right\">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href=\"http://www.phoenix-dasa.com\">Phoenix Dasa</a>, criado para a melhor gestão hospitalar
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src=\"";
        // line 586
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/jquery-3.2.1.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 587
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 588
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/material.min.js\" type=\"text/javascript\"></script>
<!--  Charts Plugin -->
<script src=\"";
        // line 590
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/chartist.min.js\"></script>
<!--  Dynamic Elements plugin -->
<script src=\"";
        // line 592
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/arrive.min.js\"></script>
<!--  PerfectScrollbar Library -->
<script src=\"";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/perfect-scrollbar.jquery.min.js\"></script>
<!--  Notifications Plugin    -->
<script src=\"";
        // line 596
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/bootstrap-notify.js\"></script>
<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!-- Material Dashboard javascript methods -->
<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/material-dashboard.js?v=1.2.0\"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "dashboard/assets/js/demo.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>";
        
        $__internal_3aed92511e3ec9729879e5440b4ffe2170450b3c326764b25c834099fbb1ab08->leave($__internal_3aed92511e3ec9729879e5440b4ffe2170450b3c326764b25c834099fbb1ab08_prof);

        
        $__internal_29f4bddb3a3a6311ae45ce70f190c65efab218edf982a1b22a302ab6bc34f5b0->leave($__internal_29f4bddb3a3a6311ae45ce70f190c65efab218edf982a1b22a302ab6bc34f5b0_prof);

    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 602,  673 => 600,  666 => 596,  661 => 594,  656 => 592,  651 => 590,  646 => 588,  642 => 587,  638 => 586,  130 => 80,  122 => 69,  101 => 51,  92 => 45,  83 => 39,  66 => 25,  55 => 17,  50 => 15,  45 => 13,  36 => 7,  32 => 6,  25 => 1,);
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
    <title>Painel Principal - Equipe Phoenix</title>
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
        <div class=\"sidebar\" data-color=\"blue\" data-image=\"{{web_dir}}dashboard/assets/img/sidebar-1.jpg\">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class=\"logo\">
                <a href=\"http://www.phoenix-dasa.com\" class=\"simple-text\">
                    Phoenix Dasa
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
                   {# <li>
                        <a href=\"./notifications.html\">
                            <i class=\"material-icons text-gray\">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>#}
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
                        <a class=\"navbar-brand\" href=\"#\"> Painel Principal </a>
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
                                        <a href=\"#\">Michel Martins respondeu seu email</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Você tem 5 novas tarefas</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Andrew compartilhou 'avaliacao_20171203.csv' com você!</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Outra notificação</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Outra notificação</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"hidden-lg hidden-md\">Perfil</p>
                                </a>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <div class=\"form-group  is-empty\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Procurar\">
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
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"green\">
                                    <i class=\"material-icons\">high_quality</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Qualidade Média da Imagem</p>
                                    <h3 class=\"title\">4,7
                                        <!-- <small>média</small> -->
                                    </h3>
                                    <small>score</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons text-success\">favorite</i> Nossos profissionais são incríveis!
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"orange\">
                                    <i class=\"material-icons\">explicit</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Dosagem Média de Radiação</p>
                                    <h3 class=\"title\">8,32</h3>
                                    <small>mGy</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">battery_charging_full</i> Miligray (mGy)
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"purple\">
                                    <i class=\"material-icons\">power_settings_new</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Ajuste fino</p>
                                    <h3 class=\"title\">75</h3>
                                    <small>mA</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">power_settings_new</i> Miliampère (mA)
                                        <a href=\"#pablo\">Nas últimas 24h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"card card-stats\">
                                <div class=\"card-header\" data-background-color=\"blue\">
                                    <i class=\"material-icons\">battery_charging_full</i>
                                </div>
                                <div class=\"card-content\">
                                    <p class=\"category\">Calibração Média</p>
                                    <h3 class=\"title\">70</h3>
                                    <small>kVp</small>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">battery_charging_full</i> Calibração da tensão (kVp)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"green\">
                                    <div class=\"ct-chart\" id=\"dailySalesChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Qualidade Média Semanal</h4>
                                    <p class=\"category\">
                                        <span class=\"text-success\"><i class=\"fa fa-long-arrow-up\"></i> 55% </span> aumentou nos últimos 3 dias.</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> atualizado há 6 min
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"orange\">
                                    <div class=\"ct-chart\" id=\"emailsSubscriptionChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Avaliações Enviadas</h4>
                                    <p class=\"category\">Desempenho da última submissão</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> submetido há 2 dias
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"card-header card-chart\" data-background-color=\"red\">
                                    <div class=\"ct-chart\" id=\"completedTasksChart\"></div>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"title\">Exames de Imagens Concluídos</h4>
                                    <p class=\"category\">Desempenho da última submissão</p>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"stats\">
                                        <i class=\"material-icons\">access_time</i> submetido há 2 dias
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card card-nav-tabs\">
                                <div class=\"card-header\" data-background-color=\"purple\">
                                    <div class=\"nav-tabs-navigation\">
                                        <div class=\"nav-tabs-wrapper\">
                                            <span class=\"nav-tabs-title\">Tarefas:</span>
                                            <ul class=\"nav nav-tabs\" data-tabs=\"tabs\">
                                                <li class=\"active\">
                                                    <a href=\"#profile\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">bug_report</i> Discordantes
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                                <li class=\"\">
                                                    <a href=\"#messages\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">code</i> Desenvolvedores
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                                <li class=\"\">
                                                    <a href=\"#settings\" data-toggle=\"tab\">
                                                        <i class=\"material-icons\">cloud</i> Servidores
                                                        <div class=\"ripple-container\"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-content\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"profile\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"tab-pane\" id=\"messages\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"tab-pane\" id=\"settings\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class=\"checkbox\">
                                                                <label>
                                                                    <input type=\"checkbox\" name=\"optionsCheckboxes\">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                                        <td class=\"td-actions text-right\">
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Editar Tarefa\" class=\"btn btn-primary btn-simple btn-xs\">
                                                                <i class=\"material-icons\">edit</i>
                                                            </button>
                                                            <button type=\"button\" rel=\"tooltip\" title=\"Remover\" class=\"btn btn-danger btn-simple btn-xs\">
                                                                <i class=\"material-icons\">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-header\" data-background-color=\"orange\">
                                    <h4 class=\"title\">Ranking - Unidades</h4>
                                    <p class=\"category\">Avaliações de qualidade - 3 de dezembro, 2017</p>
                                </div>
                                <div class=\"card-content table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead class=\"text-warning\">
                                            <th>ID</th>
                                            <th>Unidade</th>
                                            <th>Enviados</th>
                                            <th>Localidade</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lavoisier, Guarulhos - Vila Galvão</td>
                                                <td>2810</td>
                                                <td>São Paulo, SP</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pasteur, Samambaia Sul</td>
                                                <td>2344</td>
                                                <td>Brasília, DF</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Cedic Cedilab, CPA Brasil</td>
                                                <td>1975</td>
                                                <td>Cuiabá, MT</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Bronstein, Seropédica</td>
                                                <td>1883</td>
                                                <td>Rio de Janeiro, RJ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <nav class=\"pull-left\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    Inicial
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Startup
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class=\"copyright pull-right\">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href=\"http://www.phoenix-dasa.com\">Phoenix Dasa</a>, criado para a melhor gestão hospitalar
                    </p>
                </div>
            </footer>
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

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>", "dashboard.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\dashboard.html.twig");
    }
}
