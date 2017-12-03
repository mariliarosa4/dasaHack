<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ab1c6c4208a205987a23ebcb3ca2eff89e6f04e3b9eef954130e8647e804a2b extends Twig_Template
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
        $__internal_8c065d1ca89f244f1ce88390ba4f5ae28e8f8c54ee912c4a937a272afcc1c49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c065d1ca89f244f1ce88390ba4f5ae28e8f8c54ee912c4a937a272afcc1c49b->enter($__internal_8c065d1ca89f244f1ce88390ba4f5ae28e8f8c54ee912c4a937a272afcc1c49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_43fe741fc77edd239e68786ccf3487f3ead248265d8b4a6bdc61c12a31b8914f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe741fc77edd239e68786ccf3487f3ead248265d8b4a6bdc61c12a31b8914f->enter($__internal_43fe741fc77edd239e68786ccf3487f3ead248265d8b4a6bdc61c12a31b8914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c065d1ca89f244f1ce88390ba4f5ae28e8f8c54ee912c4a937a272afcc1c49b->leave($__internal_8c065d1ca89f244f1ce88390ba4f5ae28e8f8c54ee912c4a937a272afcc1c49b_prof);

        
        $__internal_43fe741fc77edd239e68786ccf3487f3ead248265d8b4a6bdc61c12a31b8914f->leave($__internal_43fe741fc77edd239e68786ccf3487f3ead248265d8b4a6bdc61c12a31b8914f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
