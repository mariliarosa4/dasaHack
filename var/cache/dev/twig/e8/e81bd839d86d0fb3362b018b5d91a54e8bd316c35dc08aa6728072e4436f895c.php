<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_193e39f86a8b888ab35e7bd17c6d262920b13f4176710f295679b4a2c70b9de2 extends Twig_Template
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
        $__internal_cbb32ddf2d24394a2b13aa8b9c3635827181f628a3c6c1d2c08f9fa1b1eaf277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb32ddf2d24394a2b13aa8b9c3635827181f628a3c6c1d2c08f9fa1b1eaf277->enter($__internal_cbb32ddf2d24394a2b13aa8b9c3635827181f628a3c6c1d2c08f9fa1b1eaf277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_caaf5c22554ab45a97cd6eb3e5916f6ed89d3e2b395c0812f305a78819678ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaf5c22554ab45a97cd6eb3e5916f6ed89d3e2b395c0812f305a78819678ec1->enter($__internal_caaf5c22554ab45a97cd6eb3e5916f6ed89d3e2b395c0812f305a78819678ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cbb32ddf2d24394a2b13aa8b9c3635827181f628a3c6c1d2c08f9fa1b1eaf277->leave($__internal_cbb32ddf2d24394a2b13aa8b9c3635827181f628a3c6c1d2c08f9fa1b1eaf277_prof);

        
        $__internal_caaf5c22554ab45a97cd6eb3e5916f6ed89d3e2b395c0812f305a78819678ec1->leave($__internal_caaf5c22554ab45a97cd6eb3e5916f6ed89d3e2b395c0812f305a78819678ec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
