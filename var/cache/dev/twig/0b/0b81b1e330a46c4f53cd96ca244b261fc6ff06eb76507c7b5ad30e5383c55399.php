<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_0be894733d36a164e18d01a83e14a8fd3f4dcffe7c9d9bedcf70c40869f75303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be894733d36a164e18d01a83e14a8fd3f4dcffe7c9d9bedcf70c40869f75303->enter($__internal_0be894733d36a164e18d01a83e14a8fd3f4dcffe7c9d9bedcf70c40869f75303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f52cfbdaa11aba7015bbf2139dfd1d8340f1784a4aedb0b9c2b90da0aa830c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52cfbdaa11aba7015bbf2139dfd1d8340f1784a4aedb0b9c2b90da0aa830c92->enter($__internal_f52cfbdaa11aba7015bbf2139dfd1d8340f1784a4aedb0b9c2b90da0aa830c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0be894733d36a164e18d01a83e14a8fd3f4dcffe7c9d9bedcf70c40869f75303->leave($__internal_0be894733d36a164e18d01a83e14a8fd3f4dcffe7c9d9bedcf70c40869f75303_prof);

        
        $__internal_f52cfbdaa11aba7015bbf2139dfd1d8340f1784a4aedb0b9c2b90da0aa830c92->leave($__internal_f52cfbdaa11aba7015bbf2139dfd1d8340f1784a4aedb0b9c2b90da0aa830c92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b91a3538a3de135c359e64e296300304f623eeb13aad79581ecbb9d3f40ac30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b91a3538a3de135c359e64e296300304f623eeb13aad79581ecbb9d3f40ac30->enter($__internal_7b91a3538a3de135c359e64e296300304f623eeb13aad79581ecbb9d3f40ac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63bb85089f1b53e92918d3980993f070080b5470a821f70e02d622d3bfdd8bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bb85089f1b53e92918d3980993f070080b5470a821f70e02d622d3bfdd8bce->enter($__internal_63bb85089f1b53e92918d3980993f070080b5470a821f70e02d622d3bfdd8bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63bb85089f1b53e92918d3980993f070080b5470a821f70e02d622d3bfdd8bce->leave($__internal_63bb85089f1b53e92918d3980993f070080b5470a821f70e02d622d3bfdd8bce_prof);

        
        $__internal_7b91a3538a3de135c359e64e296300304f623eeb13aad79581ecbb9d3f40ac30->leave($__internal_7b91a3538a3de135c359e64e296300304f623eeb13aad79581ecbb9d3f40ac30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_adc64517babaf2d4617947fe2b54c9b6ccf062dcb6962f0572b355da56528d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc64517babaf2d4617947fe2b54c9b6ccf062dcb6962f0572b355da56528d3f->enter($__internal_adc64517babaf2d4617947fe2b54c9b6ccf062dcb6962f0572b355da56528d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_60b40a4852c17668ee4bf2b304ffe898dd3d7d824a8e19fd28f22e6eb22eb536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b40a4852c17668ee4bf2b304ffe898dd3d7d824a8e19fd28f22e6eb22eb536->enter($__internal_60b40a4852c17668ee4bf2b304ffe898dd3d7d824a8e19fd28f22e6eb22eb536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_60b40a4852c17668ee4bf2b304ffe898dd3d7d824a8e19fd28f22e6eb22eb536->leave($__internal_60b40a4852c17668ee4bf2b304ffe898dd3d7d824a8e19fd28f22e6eb22eb536_prof);

        
        $__internal_adc64517babaf2d4617947fe2b54c9b6ccf062dcb6962f0572b355da56528d3f->leave($__internal_adc64517babaf2d4617947fe2b54c9b6ccf062dcb6962f0572b355da56528d3f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a377090085bf69f0945309cf3ff04bdf6aef9fe3fdb2c658429f8bf9a66c5f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a377090085bf69f0945309cf3ff04bdf6aef9fe3fdb2c658429f8bf9a66c5f96->enter($__internal_a377090085bf69f0945309cf3ff04bdf6aef9fe3fdb2c658429f8bf9a66c5f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08660be2c271836c3655b562af27d33c8b2943c4f6a4b356f97618d6c43fdc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08660be2c271836c3655b562af27d33c8b2943c4f6a4b356f97618d6c43fdc50->enter($__internal_08660be2c271836c3655b562af27d33c8b2943c4f6a4b356f97618d6c43fdc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08660be2c271836c3655b562af27d33c8b2943c4f6a4b356f97618d6c43fdc50->leave($__internal_08660be2c271836c3655b562af27d33c8b2943c4f6a4b356f97618d6c43fdc50_prof);

        
        $__internal_a377090085bf69f0945309cf3ff04bdf6aef9fe3fdb2c658429f8bf9a66c5f96->leave($__internal_a377090085bf69f0945309cf3ff04bdf6aef9fe3fdb2c658429f8bf9a66c5f96_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf88ad18b70a3f5e63e4dc30c66a20356a65297336e938fb3c7c76be0175a28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf88ad18b70a3f5e63e4dc30c66a20356a65297336e938fb3c7c76be0175a28c->enter($__internal_bf88ad18b70a3f5e63e4dc30c66a20356a65297336e938fb3c7c76be0175a28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_37ba4cee85de0884e7cc0b83dbf025eea29af56d9c2c773de567ccbd2f4950cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ba4cee85de0884e7cc0b83dbf025eea29af56d9c2c773de567ccbd2f4950cd->enter($__internal_37ba4cee85de0884e7cc0b83dbf025eea29af56d9c2c773de567ccbd2f4950cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_37ba4cee85de0884e7cc0b83dbf025eea29af56d9c2c773de567ccbd2f4950cd->leave($__internal_37ba4cee85de0884e7cc0b83dbf025eea29af56d9c2c773de567ccbd2f4950cd_prof);

        
        $__internal_bf88ad18b70a3f5e63e4dc30c66a20356a65297336e938fb3c7c76be0175a28c->leave($__internal_bf88ad18b70a3f5e63e4dc30c66a20356a65297336e938fb3c7c76be0175a28c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\dasaHack\\app/Resources\\views/base.html.twig");
    }
}
