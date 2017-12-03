<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_099ce2f812d56467963786f29d2fe59a1bdf08ee4084d157ef2790973c9c0efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099ce2f812d56467963786f29d2fe59a1bdf08ee4084d157ef2790973c9c0efb->enter($__internal_099ce2f812d56467963786f29d2fe59a1bdf08ee4084d157ef2790973c9c0efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_15a9fc677460b714ad43890f669cf028c1b3b10fbec72e7727067de41bc3e268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a9fc677460b714ad43890f669cf028c1b3b10fbec72e7727067de41bc3e268->enter($__internal_15a9fc677460b714ad43890f669cf028c1b3b10fbec72e7727067de41bc3e268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_099ce2f812d56467963786f29d2fe59a1bdf08ee4084d157ef2790973c9c0efb->leave($__internal_099ce2f812d56467963786f29d2fe59a1bdf08ee4084d157ef2790973c9c0efb_prof);

        
        $__internal_15a9fc677460b714ad43890f669cf028c1b3b10fbec72e7727067de41bc3e268->leave($__internal_15a9fc677460b714ad43890f669cf028c1b3b10fbec72e7727067de41bc3e268_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c440fe9820997ae467cc8e93dcfc129e1a9a5409897f77f8c42a77be8b91789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c440fe9820997ae467cc8e93dcfc129e1a9a5409897f77f8c42a77be8b91789->enter($__internal_0c440fe9820997ae467cc8e93dcfc129e1a9a5409897f77f8c42a77be8b91789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1df843182e133d1c1714782df376d2cc9cb8de97cf237e2db134b04a909633bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df843182e133d1c1714782df376d2cc9cb8de97cf237e2db134b04a909633bc->enter($__internal_1df843182e133d1c1714782df376d2cc9cb8de97cf237e2db134b04a909633bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1df843182e133d1c1714782df376d2cc9cb8de97cf237e2db134b04a909633bc->leave($__internal_1df843182e133d1c1714782df376d2cc9cb8de97cf237e2db134b04a909633bc_prof);

        
        $__internal_0c440fe9820997ae467cc8e93dcfc129e1a9a5409897f77f8c42a77be8b91789->leave($__internal_0c440fe9820997ae467cc8e93dcfc129e1a9a5409897f77f8c42a77be8b91789_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21971e45d3b2b02fefd40c0a32fceb8ad4f7aa2f971c27cd1e81bec96f486d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21971e45d3b2b02fefd40c0a32fceb8ad4f7aa2f971c27cd1e81bec96f486d89->enter($__internal_21971e45d3b2b02fefd40c0a32fceb8ad4f7aa2f971c27cd1e81bec96f486d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3bd42ba07b607a8affc8185c5b21bdf81c5155ee3168ebd8b5813ce4926f01cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd42ba07b607a8affc8185c5b21bdf81c5155ee3168ebd8b5813ce4926f01cf->enter($__internal_3bd42ba07b607a8affc8185c5b21bdf81c5155ee3168ebd8b5813ce4926f01cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3bd42ba07b607a8affc8185c5b21bdf81c5155ee3168ebd8b5813ce4926f01cf->leave($__internal_3bd42ba07b607a8affc8185c5b21bdf81c5155ee3168ebd8b5813ce4926f01cf_prof);

        
        $__internal_21971e45d3b2b02fefd40c0a32fceb8ad4f7aa2f971c27cd1e81bec96f486d89->leave($__internal_21971e45d3b2b02fefd40c0a32fceb8ad4f7aa2f971c27cd1e81bec96f486d89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de075820430412ea916c591e3c8196662adf5a7ef846838aaf3ad7626972ff0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de075820430412ea916c591e3c8196662adf5a7ef846838aaf3ad7626972ff0c->enter($__internal_de075820430412ea916c591e3c8196662adf5a7ef846838aaf3ad7626972ff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b39cdfdc5b039a28ae13d14c6011e93a7eb5e18af61003e2571da53fb8ace86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b39cdfdc5b039a28ae13d14c6011e93a7eb5e18af61003e2571da53fb8ace86->enter($__internal_0b39cdfdc5b039a28ae13d14c6011e93a7eb5e18af61003e2571da53fb8ace86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b39cdfdc5b039a28ae13d14c6011e93a7eb5e18af61003e2571da53fb8ace86->leave($__internal_0b39cdfdc5b039a28ae13d14c6011e93a7eb5e18af61003e2571da53fb8ace86_prof);

        
        $__internal_de075820430412ea916c591e3c8196662adf5a7ef846838aaf3ad7626972ff0c->leave($__internal_de075820430412ea916c591e3c8196662adf5a7ef846838aaf3ad7626972ff0c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdbef72684d2fb2a71c14a611caedd517488125fafebe7e3b45a3143040973b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbef72684d2fb2a71c14a611caedd517488125fafebe7e3b45a3143040973b7->enter($__internal_fdbef72684d2fb2a71c14a611caedd517488125fafebe7e3b45a3143040973b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa777585c41bac1aeacfda97895fb71c45d204c5057d522e7ba7f3cfc3292602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa777585c41bac1aeacfda97895fb71c45d204c5057d522e7ba7f3cfc3292602->enter($__internal_aa777585c41bac1aeacfda97895fb71c45d204c5057d522e7ba7f3cfc3292602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa777585c41bac1aeacfda97895fb71c45d204c5057d522e7ba7f3cfc3292602->leave($__internal_aa777585c41bac1aeacfda97895fb71c45d204c5057d522e7ba7f3cfc3292602_prof);

        
        $__internal_fdbef72684d2fb2a71c14a611caedd517488125fafebe7e3b45a3143040973b7->leave($__internal_fdbef72684d2fb2a71c14a611caedd517488125fafebe7e3b45a3143040973b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app\\Resources\\views\\base.html.twig");
    }
}
