<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6ac95d2c8d1ebe9907d9f429f869a2eef34762df24d4ec7e26554055ef566658 extends Twig_Template
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
        $__internal_1fdc35077a44b77bbbde337d3284d3b73a0d2270250fa4ed0e439ccdcdc91be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdc35077a44b77bbbde337d3284d3b73a0d2270250fa4ed0e439ccdcdc91be3->enter($__internal_1fdc35077a44b77bbbde337d3284d3b73a0d2270250fa4ed0e439ccdcdc91be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a7bc0c06519c1c485b8a1f3127fc227d058ac0036b132a9f7ca514f7ea433dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bc0c06519c1c485b8a1f3127fc227d058ac0036b132a9f7ca514f7ea433dc5->enter($__internal_a7bc0c06519c1c485b8a1f3127fc227d058ac0036b132a9f7ca514f7ea433dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1fdc35077a44b77bbbde337d3284d3b73a0d2270250fa4ed0e439ccdcdc91be3->leave($__internal_1fdc35077a44b77bbbde337d3284d3b73a0d2270250fa4ed0e439ccdcdc91be3_prof);

        
        $__internal_a7bc0c06519c1c485b8a1f3127fc227d058ac0036b132a9f7ca514f7ea433dc5->leave($__internal_a7bc0c06519c1c485b8a1f3127fc227d058ac0036b132a9f7ca514f7ea433dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
