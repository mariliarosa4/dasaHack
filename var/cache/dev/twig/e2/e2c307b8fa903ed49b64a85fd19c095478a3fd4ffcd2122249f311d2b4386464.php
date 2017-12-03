<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_4e8c52cdc2d7dabe8090661bf8a99b5816041c2b539d3588977575c52f215c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8c52cdc2d7dabe8090661bf8a99b5816041c2b539d3588977575c52f215c81->enter($__internal_4e8c52cdc2d7dabe8090661bf8a99b5816041c2b539d3588977575c52f215c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fd47fd61ae86f2c2fc1990252e65543b1ebd77444ed670b938cff6831a6f229e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd47fd61ae86f2c2fc1990252e65543b1ebd77444ed670b938cff6831a6f229e->enter($__internal_fd47fd61ae86f2c2fc1990252e65543b1ebd77444ed670b938cff6831a6f229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4e8c52cdc2d7dabe8090661bf8a99b5816041c2b539d3588977575c52f215c81->leave($__internal_4e8c52cdc2d7dabe8090661bf8a99b5816041c2b539d3588977575c52f215c81_prof);

        
        $__internal_fd47fd61ae86f2c2fc1990252e65543b1ebd77444ed670b938cff6831a6f229e->leave($__internal_fd47fd61ae86f2c2fc1990252e65543b1ebd77444ed670b938cff6831a6f229e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
