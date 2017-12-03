<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d44f4360e3e9feaa1cb73971eb6fabaa095559369b7e994fd34bbc4f47465d7 extends Twig_Template
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
        $__internal_e5380ad53a0036e831978729aa9046acb658cff77db89cd94ef8e588851b791d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5380ad53a0036e831978729aa9046acb658cff77db89cd94ef8e588851b791d->enter($__internal_e5380ad53a0036e831978729aa9046acb658cff77db89cd94ef8e588851b791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ee6440943d38f8b4196edad3eb469e6ddca5319a00eda3e017714f380ea02e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6440943d38f8b4196edad3eb469e6ddca5319a00eda3e017714f380ea02e79->enter($__internal_ee6440943d38f8b4196edad3eb469e6ddca5319a00eda3e017714f380ea02e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5380ad53a0036e831978729aa9046acb658cff77db89cd94ef8e588851b791d->leave($__internal_e5380ad53a0036e831978729aa9046acb658cff77db89cd94ef8e588851b791d_prof);

        
        $__internal_ee6440943d38f8b4196edad3eb469e6ddca5319a00eda3e017714f380ea02e79->leave($__internal_ee6440943d38f8b4196edad3eb469e6ddca5319a00eda3e017714f380ea02e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
