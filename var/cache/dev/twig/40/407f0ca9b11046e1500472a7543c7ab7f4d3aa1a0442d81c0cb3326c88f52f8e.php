<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_410804887290895a2c379c82fdb4fd9862b73fab83b53cd89456f2524c8585cc extends Twig_Template
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
        $__internal_3857d9f74910b694b6bb340f37b9d6591fa7129323ab8246fb1baf5fc73005bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3857d9f74910b694b6bb340f37b9d6591fa7129323ab8246fb1baf5fc73005bc->enter($__internal_3857d9f74910b694b6bb340f37b9d6591fa7129323ab8246fb1baf5fc73005bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_065e8adbfd65c3f0377fdd95efc8ecbb4a43c83453d5b9b99df7e66991f2f834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065e8adbfd65c3f0377fdd95efc8ecbb4a43c83453d5b9b99df7e66991f2f834->enter($__internal_065e8adbfd65c3f0377fdd95efc8ecbb4a43c83453d5b9b99df7e66991f2f834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3857d9f74910b694b6bb340f37b9d6591fa7129323ab8246fb1baf5fc73005bc->leave($__internal_3857d9f74910b694b6bb340f37b9d6591fa7129323ab8246fb1baf5fc73005bc_prof);

        
        $__internal_065e8adbfd65c3f0377fdd95efc8ecbb4a43c83453d5b9b99df7e66991f2f834->leave($__internal_065e8adbfd65c3f0377fdd95efc8ecbb4a43c83453d5b9b99df7e66991f2f834_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
