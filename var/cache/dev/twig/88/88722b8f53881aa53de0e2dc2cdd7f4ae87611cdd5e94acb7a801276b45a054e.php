<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bc7e7a784d133918f6e03109f05e39011e458d777d67588a14a7457d3057c06 extends Twig_Template
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
        $__internal_694be23ecf1b9edc454de1aa94b5e16d35988005a491ab1fb928380c79efe3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694be23ecf1b9edc454de1aa94b5e16d35988005a491ab1fb928380c79efe3fe->enter($__internal_694be23ecf1b9edc454de1aa94b5e16d35988005a491ab1fb928380c79efe3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cdcafe3d4f8d27c1f40c5b6b87705d84afa6e92f94b9fdc0e31e61d6de80d98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcafe3d4f8d27c1f40c5b6b87705d84afa6e92f94b9fdc0e31e61d6de80d98e->enter($__internal_cdcafe3d4f8d27c1f40c5b6b87705d84afa6e92f94b9fdc0e31e61d6de80d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_694be23ecf1b9edc454de1aa94b5e16d35988005a491ab1fb928380c79efe3fe->leave($__internal_694be23ecf1b9edc454de1aa94b5e16d35988005a491ab1fb928380c79efe3fe_prof);

        
        $__internal_cdcafe3d4f8d27c1f40c5b6b87705d84afa6e92f94b9fdc0e31e61d6de80d98e->leave($__internal_cdcafe3d4f8d27c1f40c5b6b87705d84afa6e92f94b9fdc0e31e61d6de80d98e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
