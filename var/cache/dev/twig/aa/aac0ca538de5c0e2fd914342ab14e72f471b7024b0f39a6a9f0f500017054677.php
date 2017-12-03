<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a9779a140337356804816fe0013176ff169531b929b336b006a4a20850729240 extends Twig_Template
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
        $__internal_5f37478a6ac9d0111aba8bab2b5ca14f8161fdb6476c883cd831837c908f6425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f37478a6ac9d0111aba8bab2b5ca14f8161fdb6476c883cd831837c908f6425->enter($__internal_5f37478a6ac9d0111aba8bab2b5ca14f8161fdb6476c883cd831837c908f6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e36a26859421dcb4c4f6410f53f9037cc18c32f45b7d843ac441ea393e03d5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36a26859421dcb4c4f6410f53f9037cc18c32f45b7d843ac441ea393e03d5de->enter($__internal_e36a26859421dcb4c4f6410f53f9037cc18c32f45b7d843ac441ea393e03d5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5f37478a6ac9d0111aba8bab2b5ca14f8161fdb6476c883cd831837c908f6425->leave($__internal_5f37478a6ac9d0111aba8bab2b5ca14f8161fdb6476c883cd831837c908f6425_prof);

        
        $__internal_e36a26859421dcb4c4f6410f53f9037cc18c32f45b7d843ac441ea393e03d5de->leave($__internal_e36a26859421dcb4c4f6410f53f9037cc18c32f45b7d843ac441ea393e03d5de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
