<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7ce47e092ebbee34a951b5918f1163e2b6e4ba9bd88047697fc6621bbc8efe38 extends Twig_Template
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
        $__internal_164943abb9ee4f3a3bea02080381542c3cc601e9af2d1a4892fbf6b9e716ddb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164943abb9ee4f3a3bea02080381542c3cc601e9af2d1a4892fbf6b9e716ddb3->enter($__internal_164943abb9ee4f3a3bea02080381542c3cc601e9af2d1a4892fbf6b9e716ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_c85e25bd36d47993d7d8b9b25ee0ac242c5b4e7a4966d58ac07e84e5d3d1f049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85e25bd36d47993d7d8b9b25ee0ac242c5b4e7a4966d58ac07e84e5d3d1f049->enter($__internal_c85e25bd36d47993d7d8b9b25ee0ac242c5b4e7a4966d58ac07e84e5d3d1f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_164943abb9ee4f3a3bea02080381542c3cc601e9af2d1a4892fbf6b9e716ddb3->leave($__internal_164943abb9ee4f3a3bea02080381542c3cc601e9af2d1a4892fbf6b9e716ddb3_prof);

        
        $__internal_c85e25bd36d47993d7d8b9b25ee0ac242c5b4e7a4966d58ac07e84e5d3d1f049->leave($__internal_c85e25bd36d47993d7d8b9b25ee0ac242c5b4e7a4966d58ac07e84e5d3d1f049_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
