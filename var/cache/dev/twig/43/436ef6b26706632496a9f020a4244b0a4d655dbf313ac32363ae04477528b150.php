<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3e3cfe76230e5d301a3c407a058a2c1f52a4cdb574d0ea80ef653cc4b8dfb14b extends Twig_Template
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
        $__internal_64ab429b35ffa1a560e02156fb59e072f9046c8fec6762f0ecefec1e982fe0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ab429b35ffa1a560e02156fb59e072f9046c8fec6762f0ecefec1e982fe0ad->enter($__internal_64ab429b35ffa1a560e02156fb59e072f9046c8fec6762f0ecefec1e982fe0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ee51dd3494883dac52c04685b40e2c9fe52bcc067468ecf535dc54c74d54d004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee51dd3494883dac52c04685b40e2c9fe52bcc067468ecf535dc54c74d54d004->enter($__internal_ee51dd3494883dac52c04685b40e2c9fe52bcc067468ecf535dc54c74d54d004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_64ab429b35ffa1a560e02156fb59e072f9046c8fec6762f0ecefec1e982fe0ad->leave($__internal_64ab429b35ffa1a560e02156fb59e072f9046c8fec6762f0ecefec1e982fe0ad_prof);

        
        $__internal_ee51dd3494883dac52c04685b40e2c9fe52bcc067468ecf535dc54c74d54d004->leave($__internal_ee51dd3494883dac52c04685b40e2c9fe52bcc067468ecf535dc54c74d54d004_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
