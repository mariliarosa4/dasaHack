<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f250018f808798563ea3e9c65a638d88fbc4e6c5a0626b5c4874026997ab864d extends Twig_Template
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
        $__internal_cb2ed54cf2c4a9290282aa1683ea527bfe53345fa668c12270fdcf16d05cbc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2ed54cf2c4a9290282aa1683ea527bfe53345fa668c12270fdcf16d05cbc2a->enter($__internal_cb2ed54cf2c4a9290282aa1683ea527bfe53345fa668c12270fdcf16d05cbc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_aedd1aeb58fe3a988c87fbbd4a9427f3d02e456c1cfa098fb75a86b9e5dffa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedd1aeb58fe3a988c87fbbd4a9427f3d02e456c1cfa098fb75a86b9e5dffa25->enter($__internal_aedd1aeb58fe3a988c87fbbd4a9427f3d02e456c1cfa098fb75a86b9e5dffa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_cb2ed54cf2c4a9290282aa1683ea527bfe53345fa668c12270fdcf16d05cbc2a->leave($__internal_cb2ed54cf2c4a9290282aa1683ea527bfe53345fa668c12270fdcf16d05cbc2a_prof);

        
        $__internal_aedd1aeb58fe3a988c87fbbd4a9427f3d02e456c1cfa098fb75a86b9e5dffa25->leave($__internal_aedd1aeb58fe3a988c87fbbd4a9427f3d02e456c1cfa098fb75a86b9e5dffa25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
