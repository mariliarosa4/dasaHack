<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_43971ae663aee0c1e1a20da05d52bfefd2fcf57e927dff7d29e6d621208f3c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43971ae663aee0c1e1a20da05d52bfefd2fcf57e927dff7d29e6d621208f3c4c->enter($__internal_43971ae663aee0c1e1a20da05d52bfefd2fcf57e927dff7d29e6d621208f3c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3eb77a047782ff7bf98b6198e07c47beafd23703d2d69a42af7b3a54efc08b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb77a047782ff7bf98b6198e07c47beafd23703d2d69a42af7b3a54efc08b2b->enter($__internal_3eb77a047782ff7bf98b6198e07c47beafd23703d2d69a42af7b3a54efc08b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43971ae663aee0c1e1a20da05d52bfefd2fcf57e927dff7d29e6d621208f3c4c->leave($__internal_43971ae663aee0c1e1a20da05d52bfefd2fcf57e927dff7d29e6d621208f3c4c_prof);

        
        $__internal_3eb77a047782ff7bf98b6198e07c47beafd23703d2d69a42af7b3a54efc08b2b->leave($__internal_3eb77a047782ff7bf98b6198e07c47beafd23703d2d69a42af7b3a54efc08b2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_955310967307b1cda37e674e5c96878f08a5155d492f15609cfc31a85e46ddba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955310967307b1cda37e674e5c96878f08a5155d492f15609cfc31a85e46ddba->enter($__internal_955310967307b1cda37e674e5c96878f08a5155d492f15609cfc31a85e46ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9360a0545514075816fc752c84576c4232f7678f3dd419885e6d27e51001903d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9360a0545514075816fc752c84576c4232f7678f3dd419885e6d27e51001903d->enter($__internal_9360a0545514075816fc752c84576c4232f7678f3dd419885e6d27e51001903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9360a0545514075816fc752c84576c4232f7678f3dd419885e6d27e51001903d->leave($__internal_9360a0545514075816fc752c84576c4232f7678f3dd419885e6d27e51001903d_prof);

        
        $__internal_955310967307b1cda37e674e5c96878f08a5155d492f15609cfc31a85e46ddba->leave($__internal_955310967307b1cda37e674e5c96878f08a5155d492f15609cfc31a85e46ddba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37ab63b5ffc66bbc447ca0433ce4cc05013607ca59f602f432288f47697660d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ab63b5ffc66bbc447ca0433ce4cc05013607ca59f602f432288f47697660d0->enter($__internal_37ab63b5ffc66bbc447ca0433ce4cc05013607ca59f602f432288f47697660d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec7aab0cb07d0d1f837b5573993aa81b9046e7a12be631ade481f658d3e51767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7aab0cb07d0d1f837b5573993aa81b9046e7a12be631ade481f658d3e51767->enter($__internal_ec7aab0cb07d0d1f837b5573993aa81b9046e7a12be631ade481f658d3e51767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec7aab0cb07d0d1f837b5573993aa81b9046e7a12be631ade481f658d3e51767->leave($__internal_ec7aab0cb07d0d1f837b5573993aa81b9046e7a12be631ade481f658d3e51767_prof);

        
        $__internal_37ab63b5ffc66bbc447ca0433ce4cc05013607ca59f602f432288f47697660d0->leave($__internal_37ab63b5ffc66bbc447ca0433ce4cc05013607ca59f602f432288f47697660d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_631ca43d2eac6889e0214919262fae8571ef956af2c1e2eb86a4362b6ac030b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631ca43d2eac6889e0214919262fae8571ef956af2c1e2eb86a4362b6ac030b9->enter($__internal_631ca43d2eac6889e0214919262fae8571ef956af2c1e2eb86a4362b6ac030b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae5644104720b997de2624a22bdb6b5ef308955502b5f9b1275e7cb8167c0bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5644104720b997de2624a22bdb6b5ef308955502b5f9b1275e7cb8167c0bcc->enter($__internal_ae5644104720b997de2624a22bdb6b5ef308955502b5f9b1275e7cb8167c0bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae5644104720b997de2624a22bdb6b5ef308955502b5f9b1275e7cb8167c0bcc->leave($__internal_ae5644104720b997de2624a22bdb6b5ef308955502b5f9b1275e7cb8167c0bcc_prof);

        
        $__internal_631ca43d2eac6889e0214919262fae8571ef956af2c1e2eb86a4362b6ac030b9->leave($__internal_631ca43d2eac6889e0214919262fae8571ef956af2c1e2eb86a4362b6ac030b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
