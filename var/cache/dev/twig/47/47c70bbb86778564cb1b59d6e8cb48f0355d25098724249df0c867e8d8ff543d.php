<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ddd38255e283e2b31e92cd6d2937fcc862fe0551610abd1ba589fa2f3fecf69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddd38255e283e2b31e92cd6d2937fcc862fe0551610abd1ba589fa2f3fecf69->enter($__internal_2ddd38255e283e2b31e92cd6d2937fcc862fe0551610abd1ba589fa2f3fecf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8dfcc84e959a8e1d90ac25029fb42fbf4fbe7fba2a741b7f9b19dad894183668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfcc84e959a8e1d90ac25029fb42fbf4fbe7fba2a741b7f9b19dad894183668->enter($__internal_8dfcc84e959a8e1d90ac25029fb42fbf4fbe7fba2a741b7f9b19dad894183668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ddd38255e283e2b31e92cd6d2937fcc862fe0551610abd1ba589fa2f3fecf69->leave($__internal_2ddd38255e283e2b31e92cd6d2937fcc862fe0551610abd1ba589fa2f3fecf69_prof);

        
        $__internal_8dfcc84e959a8e1d90ac25029fb42fbf4fbe7fba2a741b7f9b19dad894183668->leave($__internal_8dfcc84e959a8e1d90ac25029fb42fbf4fbe7fba2a741b7f9b19dad894183668_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b11d62f0d6acfb0e4e028633b446ba0564d6835cc065e8d2fc088def5c3a62fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11d62f0d6acfb0e4e028633b446ba0564d6835cc065e8d2fc088def5c3a62fa->enter($__internal_b11d62f0d6acfb0e4e028633b446ba0564d6835cc065e8d2fc088def5c3a62fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9061b565d43428bcce8d3ca53eb1624baaa6ce1c5e70cfb22f1734348d04f75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9061b565d43428bcce8d3ca53eb1624baaa6ce1c5e70cfb22f1734348d04f75d->enter($__internal_9061b565d43428bcce8d3ca53eb1624baaa6ce1c5e70cfb22f1734348d04f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9061b565d43428bcce8d3ca53eb1624baaa6ce1c5e70cfb22f1734348d04f75d->leave($__internal_9061b565d43428bcce8d3ca53eb1624baaa6ce1c5e70cfb22f1734348d04f75d_prof);

        
        $__internal_b11d62f0d6acfb0e4e028633b446ba0564d6835cc065e8d2fc088def5c3a62fa->leave($__internal_b11d62f0d6acfb0e4e028633b446ba0564d6835cc065e8d2fc088def5c3a62fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d76998811b970519ca74392e90297ac7be5e8b26a03395b26d162121d9066808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76998811b970519ca74392e90297ac7be5e8b26a03395b26d162121d9066808->enter($__internal_d76998811b970519ca74392e90297ac7be5e8b26a03395b26d162121d9066808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfbe871b9296c32da63f9d50ebdb5b04034198e9e227d947f3f160a05e36ad6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbe871b9296c32da63f9d50ebdb5b04034198e9e227d947f3f160a05e36ad6f->enter($__internal_bfbe871b9296c32da63f9d50ebdb5b04034198e9e227d947f3f160a05e36ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bfbe871b9296c32da63f9d50ebdb5b04034198e9e227d947f3f160a05e36ad6f->leave($__internal_bfbe871b9296c32da63f9d50ebdb5b04034198e9e227d947f3f160a05e36ad6f_prof);

        
        $__internal_d76998811b970519ca74392e90297ac7be5e8b26a03395b26d162121d9066808->leave($__internal_d76998811b970519ca74392e90297ac7be5e8b26a03395b26d162121d9066808_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
