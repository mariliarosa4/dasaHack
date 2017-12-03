<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_65619d5c538bd4fa0a625e127402e635994872c1a3e8a5db1fcf351ca7c029ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65619d5c538bd4fa0a625e127402e635994872c1a3e8a5db1fcf351ca7c029ae->enter($__internal_65619d5c538bd4fa0a625e127402e635994872c1a3e8a5db1fcf351ca7c029ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f71a64c4d15ec515fd289cb6105003d92d0fb0099e55a73355dbac00809a4848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71a64c4d15ec515fd289cb6105003d92d0fb0099e55a73355dbac00809a4848->enter($__internal_f71a64c4d15ec515fd289cb6105003d92d0fb0099e55a73355dbac00809a4848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_65619d5c538bd4fa0a625e127402e635994872c1a3e8a5db1fcf351ca7c029ae->leave($__internal_65619d5c538bd4fa0a625e127402e635994872c1a3e8a5db1fcf351ca7c029ae_prof);

        
        $__internal_f71a64c4d15ec515fd289cb6105003d92d0fb0099e55a73355dbac00809a4848->leave($__internal_f71a64c4d15ec515fd289cb6105003d92d0fb0099e55a73355dbac00809a4848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
