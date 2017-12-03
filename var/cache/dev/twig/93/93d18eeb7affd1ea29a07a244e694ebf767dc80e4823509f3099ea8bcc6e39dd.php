<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_9aa757c7a9652432c3ddc94189b970dfdd401440a82cf9f0aa34e4b23cf29581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa757c7a9652432c3ddc94189b970dfdd401440a82cf9f0aa34e4b23cf29581->enter($__internal_9aa757c7a9652432c3ddc94189b970dfdd401440a82cf9f0aa34e4b23cf29581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b58907c2c9d94e30176d7ea0185f8e898f709ada11922cdb9b9d42904fa29c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58907c2c9d94e30176d7ea0185f8e898f709ada11922cdb9b9d42904fa29c3d->enter($__internal_b58907c2c9d94e30176d7ea0185f8e898f709ada11922cdb9b9d42904fa29c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9aa757c7a9652432c3ddc94189b970dfdd401440a82cf9f0aa34e4b23cf29581->leave($__internal_9aa757c7a9652432c3ddc94189b970dfdd401440a82cf9f0aa34e4b23cf29581_prof);

        
        $__internal_b58907c2c9d94e30176d7ea0185f8e898f709ada11922cdb9b9d42904fa29c3d->leave($__internal_b58907c2c9d94e30176d7ea0185f8e898f709ada11922cdb9b9d42904fa29c3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
