<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_b2d15d12df55f0ca80cf9cdd7018cc57244599be5dbd5d0f8b35bb4cbbc2b2e3 extends Twig_Template
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
        $__internal_e4b051a192a460cc2f7c1c62eea06530cf5207cca9b93baaae0f31b883e4eff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b051a192a460cc2f7c1c62eea06530cf5207cca9b93baaae0f31b883e4eff9->enter($__internal_e4b051a192a460cc2f7c1c62eea06530cf5207cca9b93baaae0f31b883e4eff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_8d686e3af5b1df56b8b96ba356a945d06d2814134c2f53496775e14178d3869c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d686e3af5b1df56b8b96ba356a945d06d2814134c2f53496775e14178d3869c->enter($__internal_8d686e3af5b1df56b8b96ba356a945d06d2814134c2f53496775e14178d3869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_e4b051a192a460cc2f7c1c62eea06530cf5207cca9b93baaae0f31b883e4eff9->leave($__internal_e4b051a192a460cc2f7c1c62eea06530cf5207cca9b93baaae0f31b883e4eff9_prof);

        
        $__internal_8d686e3af5b1df56b8b96ba356a945d06d2814134c2f53496775e14178d3869c->leave($__internal_8d686e3af5b1df56b8b96ba356a945d06d2814134c2f53496775e14178d3869c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
