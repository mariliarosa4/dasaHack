<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b047b834bb43a229473981128133c5075b44968bc447b633f6c3e60b0259f12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b047b834bb43a229473981128133c5075b44968bc447b633f6c3e60b0259f12b->enter($__internal_b047b834bb43a229473981128133c5075b44968bc447b633f6c3e60b0259f12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6e7d9f8509ea0410c10d71483d23e4bb983800410ec7fd36b69456dfaadb39db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7d9f8509ea0410c10d71483d23e4bb983800410ec7fd36b69456dfaadb39db->enter($__internal_6e7d9f8509ea0410c10d71483d23e4bb983800410ec7fd36b69456dfaadb39db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b047b834bb43a229473981128133c5075b44968bc447b633f6c3e60b0259f12b->leave($__internal_b047b834bb43a229473981128133c5075b44968bc447b633f6c3e60b0259f12b_prof);

        
        $__internal_6e7d9f8509ea0410c10d71483d23e4bb983800410ec7fd36b69456dfaadb39db->leave($__internal_6e7d9f8509ea0410c10d71483d23e4bb983800410ec7fd36b69456dfaadb39db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66e1b6afe42e9eb4e395a704988a23907cdd8f551d6588f823eff8fa0eb6cbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e1b6afe42e9eb4e395a704988a23907cdd8f551d6588f823eff8fa0eb6cbc5->enter($__internal_66e1b6afe42e9eb4e395a704988a23907cdd8f551d6588f823eff8fa0eb6cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3ee602f4dde350fe98053ad21a02493b6382f79b3e32076b6f18a10f4969cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ee602f4dde350fe98053ad21a02493b6382f79b3e32076b6f18a10f4969cef->enter($__internal_c3ee602f4dde350fe98053ad21a02493b6382f79b3e32076b6f18a10f4969cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c3ee602f4dde350fe98053ad21a02493b6382f79b3e32076b6f18a10f4969cef->leave($__internal_c3ee602f4dde350fe98053ad21a02493b6382f79b3e32076b6f18a10f4969cef_prof);

        
        $__internal_66e1b6afe42e9eb4e395a704988a23907cdd8f551d6588f823eff8fa0eb6cbc5->leave($__internal_66e1b6afe42e9eb4e395a704988a23907cdd8f551d6588f823eff8fa0eb6cbc5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_547ffbad865cd53255cbafad520ead8cb100de6bed4eb0c1223862e53e9b0bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547ffbad865cd53255cbafad520ead8cb100de6bed4eb0c1223862e53e9b0bd7->enter($__internal_547ffbad865cd53255cbafad520ead8cb100de6bed4eb0c1223862e53e9b0bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_438223f79cf49e569451bb7eb2c4fbc0fe3ded3259111b3cc60a3541ca1f2a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438223f79cf49e569451bb7eb2c4fbc0fe3ded3259111b3cc60a3541ca1f2a8f->enter($__internal_438223f79cf49e569451bb7eb2c4fbc0fe3ded3259111b3cc60a3541ca1f2a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_438223f79cf49e569451bb7eb2c4fbc0fe3ded3259111b3cc60a3541ca1f2a8f->leave($__internal_438223f79cf49e569451bb7eb2c4fbc0fe3ded3259111b3cc60a3541ca1f2a8f_prof);

        
        $__internal_547ffbad865cd53255cbafad520ead8cb100de6bed4eb0c1223862e53e9b0bd7->leave($__internal_547ffbad865cd53255cbafad520ead8cb100de6bed4eb0c1223862e53e9b0bd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
