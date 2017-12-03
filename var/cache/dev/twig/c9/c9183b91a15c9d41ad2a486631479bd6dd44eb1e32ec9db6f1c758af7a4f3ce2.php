<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9676b17fdd24f413452ce75aed249516f8713df58005b26b244c2201ca0e9782 extends Twig_Template
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
        $__internal_411aeb7e0dfbc15bad5f33bfb04411d1a5f9bbdd0c440fee305b9936181ef952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411aeb7e0dfbc15bad5f33bfb04411d1a5f9bbdd0c440fee305b9936181ef952->enter($__internal_411aeb7e0dfbc15bad5f33bfb04411d1a5f9bbdd0c440fee305b9936181ef952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bd8ce05627e68be43e1111c5a9e68b07bb9bca236e4bdb65b5135726f691b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8ce05627e68be43e1111c5a9e68b07bb9bca236e4bdb65b5135726f691b121->enter($__internal_bd8ce05627e68be43e1111c5a9e68b07bb9bca236e4bdb65b5135726f691b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_411aeb7e0dfbc15bad5f33bfb04411d1a5f9bbdd0c440fee305b9936181ef952->leave($__internal_411aeb7e0dfbc15bad5f33bfb04411d1a5f9bbdd0c440fee305b9936181ef952_prof);

        
        $__internal_bd8ce05627e68be43e1111c5a9e68b07bb9bca236e4bdb65b5135726f691b121->leave($__internal_bd8ce05627e68be43e1111c5a9e68b07bb9bca236e4bdb65b5135726f691b121_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
