<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_bb075fe2535c511d2ef2769473d1afd3fadf7c34614add181ad32c0057aeccb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb075fe2535c511d2ef2769473d1afd3fadf7c34614add181ad32c0057aeccb0->enter($__internal_bb075fe2535c511d2ef2769473d1afd3fadf7c34614add181ad32c0057aeccb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8573a34c4a7c5e85c53197c0590487fd30f55833efe3bcd01ce7ed0444986fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8573a34c4a7c5e85c53197c0590487fd30f55833efe3bcd01ce7ed0444986fee->enter($__internal_8573a34c4a7c5e85c53197c0590487fd30f55833efe3bcd01ce7ed0444986fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb075fe2535c511d2ef2769473d1afd3fadf7c34614add181ad32c0057aeccb0->leave($__internal_bb075fe2535c511d2ef2769473d1afd3fadf7c34614add181ad32c0057aeccb0_prof);

        
        $__internal_8573a34c4a7c5e85c53197c0590487fd30f55833efe3bcd01ce7ed0444986fee->leave($__internal_8573a34c4a7c5e85c53197c0590487fd30f55833efe3bcd01ce7ed0444986fee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a42bd7c22b3137aa0367687c1d25ca4b7807d72cb2c8e9c6c63ed1f511c596c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42bd7c22b3137aa0367687c1d25ca4b7807d72cb2c8e9c6c63ed1f511c596c8->enter($__internal_a42bd7c22b3137aa0367687c1d25ca4b7807d72cb2c8e9c6c63ed1f511c596c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f34d0888f20c3a56e556f9d27c815fd90d0ecf8d2f9ccb70deb4f2495e7b684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f34d0888f20c3a56e556f9d27c815fd90d0ecf8d2f9ccb70deb4f2495e7b684->enter($__internal_6f34d0888f20c3a56e556f9d27c815fd90d0ecf8d2f9ccb70deb4f2495e7b684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f34d0888f20c3a56e556f9d27c815fd90d0ecf8d2f9ccb70deb4f2495e7b684->leave($__internal_6f34d0888f20c3a56e556f9d27c815fd90d0ecf8d2f9ccb70deb4f2495e7b684_prof);

        
        $__internal_a42bd7c22b3137aa0367687c1d25ca4b7807d72cb2c8e9c6c63ed1f511c596c8->leave($__internal_a42bd7c22b3137aa0367687c1d25ca4b7807d72cb2c8e9c6c63ed1f511c596c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19c00f3806867a90ea7eb9fa4d34b4eb10e214d950ded42527daf786807a7e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c00f3806867a90ea7eb9fa4d34b4eb10e214d950ded42527daf786807a7e9a->enter($__internal_19c00f3806867a90ea7eb9fa4d34b4eb10e214d950ded42527daf786807a7e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_520132233ee389f1ef41bb79bd1f4b9a5267e8a39fcf01b60cf6314d00f90c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520132233ee389f1ef41bb79bd1f4b9a5267e8a39fcf01b60cf6314d00f90c72->enter($__internal_520132233ee389f1ef41bb79bd1f4b9a5267e8a39fcf01b60cf6314d00f90c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_520132233ee389f1ef41bb79bd1f4b9a5267e8a39fcf01b60cf6314d00f90c72->leave($__internal_520132233ee389f1ef41bb79bd1f4b9a5267e8a39fcf01b60cf6314d00f90c72_prof);

        
        $__internal_19c00f3806867a90ea7eb9fa4d34b4eb10e214d950ded42527daf786807a7e9a->leave($__internal_19c00f3806867a90ea7eb9fa4d34b4eb10e214d950ded42527daf786807a7e9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
