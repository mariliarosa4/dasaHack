<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ebae816fd1156f5046be1c76889a36b567d9959762a8dd75a3ba623a17fd264f extends Twig_Template
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
        $__internal_f8f1353fbb735d59e9714527a5979e31ea4e4816cd301a2626b0c8f42703b9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f1353fbb735d59e9714527a5979e31ea4e4816cd301a2626b0c8f42703b9ed->enter($__internal_f8f1353fbb735d59e9714527a5979e31ea4e4816cd301a2626b0c8f42703b9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4e47be780385324672452c9d3a5ebef59712baf42b4c2476612005b69653eeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e47be780385324672452c9d3a5ebef59712baf42b4c2476612005b69653eeeb->enter($__internal_4e47be780385324672452c9d3a5ebef59712baf42b4c2476612005b69653eeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_f8f1353fbb735d59e9714527a5979e31ea4e4816cd301a2626b0c8f42703b9ed->leave($__internal_f8f1353fbb735d59e9714527a5979e31ea4e4816cd301a2626b0c8f42703b9ed_prof);

        
        $__internal_4e47be780385324672452c9d3a5ebef59712baf42b4c2476612005b69653eeeb->leave($__internal_4e47be780385324672452c9d3a5ebef59712baf42b4c2476612005b69653eeeb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_907bca5c0626101b6bdd6f24a8652769c3064be63673edf6336735e12f932cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907bca5c0626101b6bdd6f24a8652769c3064be63673edf6336735e12f932cf8->enter($__internal_907bca5c0626101b6bdd6f24a8652769c3064be63673edf6336735e12f932cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d940c9f7c21ccb73077840a1b6e05dff4d2085d57ea2c9f9126f9ad1a9c51fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d940c9f7c21ccb73077840a1b6e05dff4d2085d57ea2c9f9126f9ad1a9c51fd7->enter($__internal_d940c9f7c21ccb73077840a1b6e05dff4d2085d57ea2c9f9126f9ad1a9c51fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d940c9f7c21ccb73077840a1b6e05dff4d2085d57ea2c9f9126f9ad1a9c51fd7->leave($__internal_d940c9f7c21ccb73077840a1b6e05dff4d2085d57ea2c9f9126f9ad1a9c51fd7_prof);

        
        $__internal_907bca5c0626101b6bdd6f24a8652769c3064be63673edf6336735e12f932cf8->leave($__internal_907bca5c0626101b6bdd6f24a8652769c3064be63673edf6336735e12f932cf8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2d6ea6d9b5e539c23e8d4a40c1eaef3c49d53113384590ee8967f5a18fe3c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d6ea6d9b5e539c23e8d4a40c1eaef3c49d53113384590ee8967f5a18fe3c2e->enter($__internal_d2d6ea6d9b5e539c23e8d4a40c1eaef3c49d53113384590ee8967f5a18fe3c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d14f3253c65a17e4fa4d94f37d577e47cfdd54ead03b327d1915f5bca52896ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14f3253c65a17e4fa4d94f37d577e47cfdd54ead03b327d1915f5bca52896ca->enter($__internal_d14f3253c65a17e4fa4d94f37d577e47cfdd54ead03b327d1915f5bca52896ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d14f3253c65a17e4fa4d94f37d577e47cfdd54ead03b327d1915f5bca52896ca->leave($__internal_d14f3253c65a17e4fa4d94f37d577e47cfdd54ead03b327d1915f5bca52896ca_prof);

        
        $__internal_d2d6ea6d9b5e539c23e8d4a40c1eaef3c49d53113384590ee8967f5a18fe3c2e->leave($__internal_d2d6ea6d9b5e539c23e8d4a40c1eaef3c49d53113384590ee8967f5a18fe3c2e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2250a1e0e7c57f4f0ccd716744c419d018cf0e3f15dce71ca813ed16fc61a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2250a1e0e7c57f4f0ccd716744c419d018cf0e3f15dce71ca813ed16fc61a4c->enter($__internal_d2250a1e0e7c57f4f0ccd716744c419d018cf0e3f15dce71ca813ed16fc61a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34af0af6aa7bcfad240bdb3a02d779254efa664548eb220264def141963fd019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34af0af6aa7bcfad240bdb3a02d779254efa664548eb220264def141963fd019->enter($__internal_34af0af6aa7bcfad240bdb3a02d779254efa664548eb220264def141963fd019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34af0af6aa7bcfad240bdb3a02d779254efa664548eb220264def141963fd019->leave($__internal_34af0af6aa7bcfad240bdb3a02d779254efa664548eb220264def141963fd019_prof);

        
        $__internal_d2250a1e0e7c57f4f0ccd716744c419d018cf0e3f15dce71ca813ed16fc61a4c->leave($__internal_d2250a1e0e7c57f4f0ccd716744c419d018cf0e3f15dce71ca813ed16fc61a4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
