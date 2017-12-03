<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3719796a823097d50d7c8ac8a135f58480fc7acd70bf9447bf7a66ab3e1bff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3719796a823097d50d7c8ac8a135f58480fc7acd70bf9447bf7a66ab3e1bff0->enter($__internal_d3719796a823097d50d7c8ac8a135f58480fc7acd70bf9447bf7a66ab3e1bff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a16cecafe80db3d8123e17cbc52cadebabb9f033964ceba57fc64c6ace32e68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16cecafe80db3d8123e17cbc52cadebabb9f033964ceba57fc64c6ace32e68e->enter($__internal_a16cecafe80db3d8123e17cbc52cadebabb9f033964ceba57fc64c6ace32e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3719796a823097d50d7c8ac8a135f58480fc7acd70bf9447bf7a66ab3e1bff0->leave($__internal_d3719796a823097d50d7c8ac8a135f58480fc7acd70bf9447bf7a66ab3e1bff0_prof);

        
        $__internal_a16cecafe80db3d8123e17cbc52cadebabb9f033964ceba57fc64c6ace32e68e->leave($__internal_a16cecafe80db3d8123e17cbc52cadebabb9f033964ceba57fc64c6ace32e68e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80a5acc62f3aa17eaf72abddc6ea3dd68d8dcaa4f158be3db545af198570754f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a5acc62f3aa17eaf72abddc6ea3dd68d8dcaa4f158be3db545af198570754f->enter($__internal_80a5acc62f3aa17eaf72abddc6ea3dd68d8dcaa4f158be3db545af198570754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_170bfeb7ecb15b35b784df74245f09ff142d06a921d83bb6a7d002b8275f9e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170bfeb7ecb15b35b784df74245f09ff142d06a921d83bb6a7d002b8275f9e77->enter($__internal_170bfeb7ecb15b35b784df74245f09ff142d06a921d83bb6a7d002b8275f9e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_170bfeb7ecb15b35b784df74245f09ff142d06a921d83bb6a7d002b8275f9e77->leave($__internal_170bfeb7ecb15b35b784df74245f09ff142d06a921d83bb6a7d002b8275f9e77_prof);

        
        $__internal_80a5acc62f3aa17eaf72abddc6ea3dd68d8dcaa4f158be3db545af198570754f->leave($__internal_80a5acc62f3aa17eaf72abddc6ea3dd68d8dcaa4f158be3db545af198570754f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84895bc3c37a7244f5df2b29825307ee6de9c7c4b4b81ceaf6c913b41bbcdc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84895bc3c37a7244f5df2b29825307ee6de9c7c4b4b81ceaf6c913b41bbcdc9a->enter($__internal_84895bc3c37a7244f5df2b29825307ee6de9c7c4b4b81ceaf6c913b41bbcdc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd74e05df07994daf1a4b449ea7566ba68abdbbc2ec1706cf6e8d54fae5cecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd74e05df07994daf1a4b449ea7566ba68abdbbc2ec1706cf6e8d54fae5cecc5->enter($__internal_bd74e05df07994daf1a4b449ea7566ba68abdbbc2ec1706cf6e8d54fae5cecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd74e05df07994daf1a4b449ea7566ba68abdbbc2ec1706cf6e8d54fae5cecc5->leave($__internal_bd74e05df07994daf1a4b449ea7566ba68abdbbc2ec1706cf6e8d54fae5cecc5_prof);

        
        $__internal_84895bc3c37a7244f5df2b29825307ee6de9c7c4b4b81ceaf6c913b41bbcdc9a->leave($__internal_84895bc3c37a7244f5df2b29825307ee6de9c7c4b4b81ceaf6c913b41bbcdc9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab5355bb7b2a158a442b2deaf229723e6f553998dcffbdeb62b392c66a2c4763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5355bb7b2a158a442b2deaf229723e6f553998dcffbdeb62b392c66a2c4763->enter($__internal_ab5355bb7b2a158a442b2deaf229723e6f553998dcffbdeb62b392c66a2c4763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6bcf9fa43e1d15b65f524da68eefca2b61dffa4dfc7bbb61aefa86a549447f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcf9fa43e1d15b65f524da68eefca2b61dffa4dfc7bbb61aefa86a549447f00->enter($__internal_6bcf9fa43e1d15b65f524da68eefca2b61dffa4dfc7bbb61aefa86a549447f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6bcf9fa43e1d15b65f524da68eefca2b61dffa4dfc7bbb61aefa86a549447f00->leave($__internal_6bcf9fa43e1d15b65f524da68eefca2b61dffa4dfc7bbb61aefa86a549447f00_prof);

        
        $__internal_ab5355bb7b2a158a442b2deaf229723e6f553998dcffbdeb62b392c66a2c4763->leave($__internal_ab5355bb7b2a158a442b2deaf229723e6f553998dcffbdeb62b392c66a2c4763_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
