<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51373b15bc3e7900f7dab7645e85aae1479fd914944259cf38caba9064983bc6 extends Twig_Template
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
        $__internal_d92badb2bf94812f96efc929efad5a0edcee2ecee853307e9aa289d5127e1e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92badb2bf94812f96efc929efad5a0edcee2ecee853307e9aa289d5127e1e7a->enter($__internal_d92badb2bf94812f96efc929efad5a0edcee2ecee853307e9aa289d5127e1e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d20e825bc08808cbfbf226c33704a57a9bf02cd1f2266cc8dd485032bf251727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20e825bc08808cbfbf226c33704a57a9bf02cd1f2266cc8dd485032bf251727->enter($__internal_d20e825bc08808cbfbf226c33704a57a9bf02cd1f2266cc8dd485032bf251727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d92badb2bf94812f96efc929efad5a0edcee2ecee853307e9aa289d5127e1e7a->leave($__internal_d92badb2bf94812f96efc929efad5a0edcee2ecee853307e9aa289d5127e1e7a_prof);

        
        $__internal_d20e825bc08808cbfbf226c33704a57a9bf02cd1f2266cc8dd485032bf251727->leave($__internal_d20e825bc08808cbfbf226c33704a57a9bf02cd1f2266cc8dd485032bf251727_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
