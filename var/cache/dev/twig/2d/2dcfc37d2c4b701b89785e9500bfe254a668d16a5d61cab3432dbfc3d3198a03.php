<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a64c31dc80b4a07b4cec9b02e3de11c99a0ed3bdd4de48c600e1599ca89e3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a64c31dc80b4a07b4cec9b02e3de11c99a0ed3bdd4de48c600e1599ca89e3c8->enter($__internal_5a64c31dc80b4a07b4cec9b02e3de11c99a0ed3bdd4de48c600e1599ca89e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6acd4170a3876a6de616e21f886eb2982b916bfe83c491e43cbae63810cf2582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acd4170a3876a6de616e21f886eb2982b916bfe83c491e43cbae63810cf2582->enter($__internal_6acd4170a3876a6de616e21f886eb2982b916bfe83c491e43cbae63810cf2582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a64c31dc80b4a07b4cec9b02e3de11c99a0ed3bdd4de48c600e1599ca89e3c8->leave($__internal_5a64c31dc80b4a07b4cec9b02e3de11c99a0ed3bdd4de48c600e1599ca89e3c8_prof);

        
        $__internal_6acd4170a3876a6de616e21f886eb2982b916bfe83c491e43cbae63810cf2582->leave($__internal_6acd4170a3876a6de616e21f886eb2982b916bfe83c491e43cbae63810cf2582_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_175f862f6af5a7fe5136f23ad45122e080c5a218d56040f137c156019a228255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175f862f6af5a7fe5136f23ad45122e080c5a218d56040f137c156019a228255->enter($__internal_175f862f6af5a7fe5136f23ad45122e080c5a218d56040f137c156019a228255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e93103c8a42b316a03977f2dc946867f981044439ee0e86173fe767216c7a198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93103c8a42b316a03977f2dc946867f981044439ee0e86173fe767216c7a198->enter($__internal_e93103c8a42b316a03977f2dc946867f981044439ee0e86173fe767216c7a198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e93103c8a42b316a03977f2dc946867f981044439ee0e86173fe767216c7a198->leave($__internal_e93103c8a42b316a03977f2dc946867f981044439ee0e86173fe767216c7a198_prof);

        
        $__internal_175f862f6af5a7fe5136f23ad45122e080c5a218d56040f137c156019a228255->leave($__internal_175f862f6af5a7fe5136f23ad45122e080c5a218d56040f137c156019a228255_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e78ac24c1f3d56c41fe69c91137f3a40b2e674cea7f00bbccb921dd3d441286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e78ac24c1f3d56c41fe69c91137f3a40b2e674cea7f00bbccb921dd3d441286->enter($__internal_7e78ac24c1f3d56c41fe69c91137f3a40b2e674cea7f00bbccb921dd3d441286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d7a27d761ca0d263b1ba91325ea36360bb3854fb173c42751790d2fde8c4b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7a27d761ca0d263b1ba91325ea36360bb3854fb173c42751790d2fde8c4b5e->enter($__internal_6d7a27d761ca0d263b1ba91325ea36360bb3854fb173c42751790d2fde8c4b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6d7a27d761ca0d263b1ba91325ea36360bb3854fb173c42751790d2fde8c4b5e->leave($__internal_6d7a27d761ca0d263b1ba91325ea36360bb3854fb173c42751790d2fde8c4b5e_prof);

        
        $__internal_7e78ac24c1f3d56c41fe69c91137f3a40b2e674cea7f00bbccb921dd3d441286->leave($__internal_7e78ac24c1f3d56c41fe69c91137f3a40b2e674cea7f00bbccb921dd3d441286_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
