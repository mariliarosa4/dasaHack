<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a350d45bf53f6e53c2c8e1d6a26586e3a22ba27c1538a3c8825e5cdc3b13742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a350d45bf53f6e53c2c8e1d6a26586e3a22ba27c1538a3c8825e5cdc3b13742->enter($__internal_3a350d45bf53f6e53c2c8e1d6a26586e3a22ba27c1538a3c8825e5cdc3b13742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2f1074bc3657259d10401bb46d88e992fbb7b5ff0859b832af831483178902ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1074bc3657259d10401bb46d88e992fbb7b5ff0859b832af831483178902ac->enter($__internal_2f1074bc3657259d10401bb46d88e992fbb7b5ff0859b832af831483178902ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3a350d45bf53f6e53c2c8e1d6a26586e3a22ba27c1538a3c8825e5cdc3b13742->leave($__internal_3a350d45bf53f6e53c2c8e1d6a26586e3a22ba27c1538a3c8825e5cdc3b13742_prof);

        
        $__internal_2f1074bc3657259d10401bb46d88e992fbb7b5ff0859b832af831483178902ac->leave($__internal_2f1074bc3657259d10401bb46d88e992fbb7b5ff0859b832af831483178902ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14b2c4904fcb192796b792df4c194421f308c8a8d5d649ca211bf2b4ea0d2a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b2c4904fcb192796b792df4c194421f308c8a8d5d649ca211bf2b4ea0d2a8d->enter($__internal_14b2c4904fcb192796b792df4c194421f308c8a8d5d649ca211bf2b4ea0d2a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29d3ac238aecceed0777b39e1d39d1eee72161f0bd91c182821156adbf673ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d3ac238aecceed0777b39e1d39d1eee72161f0bd91c182821156adbf673ce0->enter($__internal_29d3ac238aecceed0777b39e1d39d1eee72161f0bd91c182821156adbf673ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_29d3ac238aecceed0777b39e1d39d1eee72161f0bd91c182821156adbf673ce0->leave($__internal_29d3ac238aecceed0777b39e1d39d1eee72161f0bd91c182821156adbf673ce0_prof);

        
        $__internal_14b2c4904fcb192796b792df4c194421f308c8a8d5d649ca211bf2b4ea0d2a8d->leave($__internal_14b2c4904fcb192796b792df4c194421f308c8a8d5d649ca211bf2b4ea0d2a8d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd3cf597df2986ae06ac24b33d5cf224d7c8fd06f6fa680e2b9b09bda58f5b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3cf597df2986ae06ac24b33d5cf224d7c8fd06f6fa680e2b9b09bda58f5b67->enter($__internal_bd3cf597df2986ae06ac24b33d5cf224d7c8fd06f6fa680e2b9b09bda58f5b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c14ee90c885a08bcd1c53770fa659bac6fdf7c9045fc2e3f9a5415f86a5ed15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c14ee90c885a08bcd1c53770fa659bac6fdf7c9045fc2e3f9a5415f86a5ed15->enter($__internal_0c14ee90c885a08bcd1c53770fa659bac6fdf7c9045fc2e3f9a5415f86a5ed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c14ee90c885a08bcd1c53770fa659bac6fdf7c9045fc2e3f9a5415f86a5ed15->leave($__internal_0c14ee90c885a08bcd1c53770fa659bac6fdf7c9045fc2e3f9a5415f86a5ed15_prof);

        
        $__internal_bd3cf597df2986ae06ac24b33d5cf224d7c8fd06f6fa680e2b9b09bda58f5b67->leave($__internal_bd3cf597df2986ae06ac24b33d5cf224d7c8fd06f6fa680e2b9b09bda58f5b67_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f35771de9c447d8c5e85f5002b88693ac148d05b3536dce717382f900c0a2e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35771de9c447d8c5e85f5002b88693ac148d05b3536dce717382f900c0a2e06->enter($__internal_f35771de9c447d8c5e85f5002b88693ac148d05b3536dce717382f900c0a2e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ae1353b3dbcccf541c5fa594dac26d14b5ba15cc00aea35cadf7a6602cf65c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae1353b3dbcccf541c5fa594dac26d14b5ba15cc00aea35cadf7a6602cf65c1->enter($__internal_8ae1353b3dbcccf541c5fa594dac26d14b5ba15cc00aea35cadf7a6602cf65c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ae1353b3dbcccf541c5fa594dac26d14b5ba15cc00aea35cadf7a6602cf65c1->leave($__internal_8ae1353b3dbcccf541c5fa594dac26d14b5ba15cc00aea35cadf7a6602cf65c1_prof);

        
        $__internal_f35771de9c447d8c5e85f5002b88693ac148d05b3536dce717382f900c0a2e06->leave($__internal_f35771de9c447d8c5e85f5002b88693ac148d05b3536dce717382f900c0a2e06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
