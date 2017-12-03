<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_d93b64ee79dc6fe7d9ecb5f103306b8ea636ee132cbed541bd6d011347a9bd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93b64ee79dc6fe7d9ecb5f103306b8ea636ee132cbed541bd6d011347a9bd6b->enter($__internal_d93b64ee79dc6fe7d9ecb5f103306b8ea636ee132cbed541bd6d011347a9bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0eeafc2931defef38083940af290330f99787aad372c1070b11250150bb81ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eeafc2931defef38083940af290330f99787aad372c1070b11250150bb81ba9->enter($__internal_0eeafc2931defef38083940af290330f99787aad372c1070b11250150bb81ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d93b64ee79dc6fe7d9ecb5f103306b8ea636ee132cbed541bd6d011347a9bd6b->leave($__internal_d93b64ee79dc6fe7d9ecb5f103306b8ea636ee132cbed541bd6d011347a9bd6b_prof);

        
        $__internal_0eeafc2931defef38083940af290330f99787aad372c1070b11250150bb81ba9->leave($__internal_0eeafc2931defef38083940af290330f99787aad372c1070b11250150bb81ba9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
