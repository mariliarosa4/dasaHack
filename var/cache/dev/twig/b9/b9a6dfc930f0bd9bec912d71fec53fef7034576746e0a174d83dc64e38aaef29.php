<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c96c430f0072b2fcc37956bb389027312cb9f8b4cdc62770bbb42cb023c0b3d2 extends Twig_Template
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
        $__internal_394e1dead279e1bfbd6393cb9ce43a7ec0e50a5e718905ec4e4ee930819afe9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394e1dead279e1bfbd6393cb9ce43a7ec0e50a5e718905ec4e4ee930819afe9d->enter($__internal_394e1dead279e1bfbd6393cb9ce43a7ec0e50a5e718905ec4e4ee930819afe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ee46593bb0520a52af82fb22aa602b664cbe1ed287d30b210df0651d82b25be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee46593bb0520a52af82fb22aa602b664cbe1ed287d30b210df0651d82b25be2->enter($__internal_ee46593bb0520a52af82fb22aa602b664cbe1ed287d30b210df0651d82b25be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_394e1dead279e1bfbd6393cb9ce43a7ec0e50a5e718905ec4e4ee930819afe9d->leave($__internal_394e1dead279e1bfbd6393cb9ce43a7ec0e50a5e718905ec4e4ee930819afe9d_prof);

        
        $__internal_ee46593bb0520a52af82fb22aa602b664cbe1ed287d30b210df0651d82b25be2->leave($__internal_ee46593bb0520a52af82fb22aa602b664cbe1ed287d30b210df0651d82b25be2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
