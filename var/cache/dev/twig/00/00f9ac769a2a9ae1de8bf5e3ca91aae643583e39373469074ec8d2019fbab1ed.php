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
        $__internal_33f10100d9971f057a3c233abe905267b5a169cbaddadf4f2d20e80870f4dde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f10100d9971f057a3c233abe905267b5a169cbaddadf4f2d20e80870f4dde7->enter($__internal_33f10100d9971f057a3c233abe905267b5a169cbaddadf4f2d20e80870f4dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_914e9ffb69a087aaab3288c09f80f908b319d2c05fc7755a6dd455681c894345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914e9ffb69a087aaab3288c09f80f908b319d2c05fc7755a6dd455681c894345->enter($__internal_914e9ffb69a087aaab3288c09f80f908b319d2c05fc7755a6dd455681c894345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_33f10100d9971f057a3c233abe905267b5a169cbaddadf4f2d20e80870f4dde7->leave($__internal_33f10100d9971f057a3c233abe905267b5a169cbaddadf4f2d20e80870f4dde7_prof);

        
        $__internal_914e9ffb69a087aaab3288c09f80f908b319d2c05fc7755a6dd455681c894345->leave($__internal_914e9ffb69a087aaab3288c09f80f908b319d2c05fc7755a6dd455681c894345_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8256509446b978f8dbe74069b264cf9fa8f873ccd02273827edcafd2264ae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8256509446b978f8dbe74069b264cf9fa8f873ccd02273827edcafd2264ae7e->enter($__internal_e8256509446b978f8dbe74069b264cf9fa8f873ccd02273827edcafd2264ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0a227eecc8dd75007e8976b80b07cec3012bf49c4c1b6ebca151f10d5f0a0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a227eecc8dd75007e8976b80b07cec3012bf49c4c1b6ebca151f10d5f0a0bc->enter($__internal_a0a227eecc8dd75007e8976b80b07cec3012bf49c4c1b6ebca151f10d5f0a0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a0a227eecc8dd75007e8976b80b07cec3012bf49c4c1b6ebca151f10d5f0a0bc->leave($__internal_a0a227eecc8dd75007e8976b80b07cec3012bf49c4c1b6ebca151f10d5f0a0bc_prof);

        
        $__internal_e8256509446b978f8dbe74069b264cf9fa8f873ccd02273827edcafd2264ae7e->leave($__internal_e8256509446b978f8dbe74069b264cf9fa8f873ccd02273827edcafd2264ae7e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a470980484eef37d8e3caece66946859b07e96270d311d13323d7a3bb0dee9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a470980484eef37d8e3caece66946859b07e96270d311d13323d7a3bb0dee9a3->enter($__internal_a470980484eef37d8e3caece66946859b07e96270d311d13323d7a3bb0dee9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ad9b04e5f861ce6ee99a37633bf794b8159c8f5debdd0227a1bbd6a82c19701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad9b04e5f861ce6ee99a37633bf794b8159c8f5debdd0227a1bbd6a82c19701->enter($__internal_7ad9b04e5f861ce6ee99a37633bf794b8159c8f5debdd0227a1bbd6a82c19701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7ad9b04e5f861ce6ee99a37633bf794b8159c8f5debdd0227a1bbd6a82c19701->leave($__internal_7ad9b04e5f861ce6ee99a37633bf794b8159c8f5debdd0227a1bbd6a82c19701_prof);

        
        $__internal_a470980484eef37d8e3caece66946859b07e96270d311d13323d7a3bb0dee9a3->leave($__internal_a470980484eef37d8e3caece66946859b07e96270d311d13323d7a3bb0dee9a3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_42f4b832c08614bb8e396b7660adc23a6222b25b3e7ea2bbcb87eaa08ba3b60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f4b832c08614bb8e396b7660adc23a6222b25b3e7ea2bbcb87eaa08ba3b60e->enter($__internal_42f4b832c08614bb8e396b7660adc23a6222b25b3e7ea2bbcb87eaa08ba3b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b597a8b135e6e23b59bbeae29efd6c055c330382244d952bb943b79c6c68970c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b597a8b135e6e23b59bbeae29efd6c055c330382244d952bb943b79c6c68970c->enter($__internal_b597a8b135e6e23b59bbeae29efd6c055c330382244d952bb943b79c6c68970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b597a8b135e6e23b59bbeae29efd6c055c330382244d952bb943b79c6c68970c->leave($__internal_b597a8b135e6e23b59bbeae29efd6c055c330382244d952bb943b79c6c68970c_prof);

        
        $__internal_42f4b832c08614bb8e396b7660adc23a6222b25b3e7ea2bbcb87eaa08ba3b60e->leave($__internal_42f4b832c08614bb8e396b7660adc23a6222b25b3e7ea2bbcb87eaa08ba3b60e_prof);

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
