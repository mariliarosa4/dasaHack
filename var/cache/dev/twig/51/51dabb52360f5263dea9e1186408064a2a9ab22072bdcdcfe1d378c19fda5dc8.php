<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_3bfd968dbae6ada7b519bea7e4f0f4bd2fc6f2e581f91f76bbf22e24740488a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfd968dbae6ada7b519bea7e4f0f4bd2fc6f2e581f91f76bbf22e24740488a0->enter($__internal_3bfd968dbae6ada7b519bea7e4f0f4bd2fc6f2e581f91f76bbf22e24740488a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0ca2684342b98b5322262f5a8563541ae3a53a9fd9abf05641d3e0a8f141946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca2684342b98b5322262f5a8563541ae3a53a9fd9abf05641d3e0a8f141946b->enter($__internal_0ca2684342b98b5322262f5a8563541ae3a53a9fd9abf05641d3e0a8f141946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3bfd968dbae6ada7b519bea7e4f0f4bd2fc6f2e581f91f76bbf22e24740488a0->leave($__internal_3bfd968dbae6ada7b519bea7e4f0f4bd2fc6f2e581f91f76bbf22e24740488a0_prof);

        
        $__internal_0ca2684342b98b5322262f5a8563541ae3a53a9fd9abf05641d3e0a8f141946b->leave($__internal_0ca2684342b98b5322262f5a8563541ae3a53a9fd9abf05641d3e0a8f141946b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
