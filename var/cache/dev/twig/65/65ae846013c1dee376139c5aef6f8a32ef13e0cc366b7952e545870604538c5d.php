<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b28e7fc67780c2c26119d54fb23f5103f49550c3368fda20e7ff9b850ba55182 extends Twig_Template
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
        $__internal_a9e405d2663f0e512daa217ab0f632ec481fc172da672c8e83b215aabbcc27d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e405d2663f0e512daa217ab0f632ec481fc172da672c8e83b215aabbcc27d2->enter($__internal_a9e405d2663f0e512daa217ab0f632ec481fc172da672c8e83b215aabbcc27d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_16b5f4f43a7df5974a43ae77627bd89a809f481e049ce848a925011c9efa7a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b5f4f43a7df5974a43ae77627bd89a809f481e049ce848a925011c9efa7a6a->enter($__internal_16b5f4f43a7df5974a43ae77627bd89a809f481e049ce848a925011c9efa7a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_a9e405d2663f0e512daa217ab0f632ec481fc172da672c8e83b215aabbcc27d2->leave($__internal_a9e405d2663f0e512daa217ab0f632ec481fc172da672c8e83b215aabbcc27d2_prof);

        
        $__internal_16b5f4f43a7df5974a43ae77627bd89a809f481e049ce848a925011c9efa7a6a->leave($__internal_16b5f4f43a7df5974a43ae77627bd89a809f481e049ce848a925011c9efa7a6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
