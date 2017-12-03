<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_b568734915c734a904e4b276f9d3ef342f42923094a7aae3a162ccfa4324a8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b568734915c734a904e4b276f9d3ef342f42923094a7aae3a162ccfa4324a8e1->enter($__internal_b568734915c734a904e4b276f9d3ef342f42923094a7aae3a162ccfa4324a8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bb7a0e5cb2b70384901bc7a197d6268a76619ae193378abab7e5cc015bdc64d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7a0e5cb2b70384901bc7a197d6268a76619ae193378abab7e5cc015bdc64d8->enter($__internal_bb7a0e5cb2b70384901bc7a197d6268a76619ae193378abab7e5cc015bdc64d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b568734915c734a904e4b276f9d3ef342f42923094a7aae3a162ccfa4324a8e1->leave($__internal_b568734915c734a904e4b276f9d3ef342f42923094a7aae3a162ccfa4324a8e1_prof);

        
        $__internal_bb7a0e5cb2b70384901bc7a197d6268a76619ae193378abab7e5cc015bdc64d8->leave($__internal_bb7a0e5cb2b70384901bc7a197d6268a76619ae193378abab7e5cc015bdc64d8_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_578b5f02efff375d12291bef48e43c8d15ef40a9f8496ae096309297e4a24a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578b5f02efff375d12291bef48e43c8d15ef40a9f8496ae096309297e4a24a8e->enter($__internal_578b5f02efff375d12291bef48e43c8d15ef40a9f8496ae096309297e4a24a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_87197fceccdbdd7fea18c0f7999daf4b1b6a715673dc61db31a1bffa58e231c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87197fceccdbdd7fea18c0f7999daf4b1b6a715673dc61db31a1bffa58e231c4->enter($__internal_87197fceccdbdd7fea18c0f7999daf4b1b6a715673dc61db31a1bffa58e231c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_87197fceccdbdd7fea18c0f7999daf4b1b6a715673dc61db31a1bffa58e231c4->leave($__internal_87197fceccdbdd7fea18c0f7999daf4b1b6a715673dc61db31a1bffa58e231c4_prof);

        
        $__internal_578b5f02efff375d12291bef48e43c8d15ef40a9f8496ae096309297e4a24a8e->leave($__internal_578b5f02efff375d12291bef48e43c8d15ef40a9f8496ae096309297e4a24a8e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b258d15a8e72770e58013d9a6ce5602f65b682aca16fbf7cd2d6279dc7f64f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b258d15a8e72770e58013d9a6ce5602f65b682aca16fbf7cd2d6279dc7f64f9->enter($__internal_1b258d15a8e72770e58013d9a6ce5602f65b682aca16fbf7cd2d6279dc7f64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6655ed08495f1a20278e51eec0e67b3ebd0a4a747ebbe30bf29e31b5e6c20db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6655ed08495f1a20278e51eec0e67b3ebd0a4a747ebbe30bf29e31b5e6c20db9->enter($__internal_6655ed08495f1a20278e51eec0e67b3ebd0a4a747ebbe30bf29e31b5e6c20db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6655ed08495f1a20278e51eec0e67b3ebd0a4a747ebbe30bf29e31b5e6c20db9->leave($__internal_6655ed08495f1a20278e51eec0e67b3ebd0a4a747ebbe30bf29e31b5e6c20db9_prof);

        
        $__internal_1b258d15a8e72770e58013d9a6ce5602f65b682aca16fbf7cd2d6279dc7f64f9->leave($__internal_1b258d15a8e72770e58013d9a6ce5602f65b682aca16fbf7cd2d6279dc7f64f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
