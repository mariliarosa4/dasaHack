<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9ecd932e5d724ac01bd34c6c7859d2c76df6788246a7764cb84aec5455501f11 extends Twig_Template
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
        $__internal_8c0297ac7f7941a06dd39e8beb7e67d10304bee98289701e5ec002c2d03f35eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0297ac7f7941a06dd39e8beb7e67d10304bee98289701e5ec002c2d03f35eb->enter($__internal_8c0297ac7f7941a06dd39e8beb7e67d10304bee98289701e5ec002c2d03f35eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_07bae6915d26d82408f7d2531cf8a7ab43ae523329e31b765ce09c72cd1db705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bae6915d26d82408f7d2531cf8a7ab43ae523329e31b765ce09c72cd1db705->enter($__internal_07bae6915d26d82408f7d2531cf8a7ab43ae523329e31b765ce09c72cd1db705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8c0297ac7f7941a06dd39e8beb7e67d10304bee98289701e5ec002c2d03f35eb->leave($__internal_8c0297ac7f7941a06dd39e8beb7e67d10304bee98289701e5ec002c2d03f35eb_prof);

        
        $__internal_07bae6915d26d82408f7d2531cf8a7ab43ae523329e31b765ce09c72cd1db705->leave($__internal_07bae6915d26d82408f7d2531cf8a7ab43ae523329e31b765ce09c72cd1db705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
