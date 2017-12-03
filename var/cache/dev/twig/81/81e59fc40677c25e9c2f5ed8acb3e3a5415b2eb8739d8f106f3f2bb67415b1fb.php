<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_7249e9ea235e0960072b3f2ad4e2f25badbf0f45e8620637ea2808d365437e71 extends Twig_Template
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
        $__internal_3497a4ffebc9a5d1e91cf8b2dc2e65340e2ea903cb50e5c107e05d6f1ba529d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3497a4ffebc9a5d1e91cf8b2dc2e65340e2ea903cb50e5c107e05d6f1ba529d0->enter($__internal_3497a4ffebc9a5d1e91cf8b2dc2e65340e2ea903cb50e5c107e05d6f1ba529d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_73b5544756e0f71177e1a314d7b3d5fae80eeb73ff29590a46e394aee3481137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b5544756e0f71177e1a314d7b3d5fae80eeb73ff29590a46e394aee3481137->enter($__internal_73b5544756e0f71177e1a314d7b3d5fae80eeb73ff29590a46e394aee3481137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_3497a4ffebc9a5d1e91cf8b2dc2e65340e2ea903cb50e5c107e05d6f1ba529d0->leave($__internal_3497a4ffebc9a5d1e91cf8b2dc2e65340e2ea903cb50e5c107e05d6f1ba529d0_prof);

        
        $__internal_73b5544756e0f71177e1a314d7b3d5fae80eeb73ff29590a46e394aee3481137->leave($__internal_73b5544756e0f71177e1a314d7b3d5fae80eeb73ff29590a46e394aee3481137_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
