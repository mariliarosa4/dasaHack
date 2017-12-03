<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aeb1ada288ab7b6c6ca369f21a420ba5f2a3d71ff3fac68246d296bd208e772b extends Twig_Template
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
        $__internal_284413b6669176596b5a9b2af6f584445ae73a8a4d895a8d9813282c7d8fa728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284413b6669176596b5a9b2af6f584445ae73a8a4d895a8d9813282c7d8fa728->enter($__internal_284413b6669176596b5a9b2af6f584445ae73a8a4d895a8d9813282c7d8fa728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a65d711997424bf266d03668362859f91c7d16a6234bcb635ce0b2687f7cd979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65d711997424bf266d03668362859f91c7d16a6234bcb635ce0b2687f7cd979->enter($__internal_a65d711997424bf266d03668362859f91c7d16a6234bcb635ce0b2687f7cd979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_284413b6669176596b5a9b2af6f584445ae73a8a4d895a8d9813282c7d8fa728->leave($__internal_284413b6669176596b5a9b2af6f584445ae73a8a4d895a8d9813282c7d8fa728_prof);

        
        $__internal_a65d711997424bf266d03668362859f91c7d16a6234bcb635ce0b2687f7cd979->leave($__internal_a65d711997424bf266d03668362859f91c7d16a6234bcb635ce0b2687f7cd979_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
