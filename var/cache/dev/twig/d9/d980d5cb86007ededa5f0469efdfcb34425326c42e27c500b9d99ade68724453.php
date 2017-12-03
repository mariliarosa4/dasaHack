<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0a1615bded4cabb1e00a10feca8d0f78834832c28666e5f395da923e53934f20 extends Twig_Template
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
        $__internal_aae57c8cb1e32516a7c47595e4810aa43d06aa9d349caf427159f3c144abc67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae57c8cb1e32516a7c47595e4810aa43d06aa9d349caf427159f3c144abc67e->enter($__internal_aae57c8cb1e32516a7c47595e4810aa43d06aa9d349caf427159f3c144abc67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d959846e4e6ff032edfd1cc454935b873b621859ff95564ebe1504276caa0e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d959846e4e6ff032edfd1cc454935b873b621859ff95564ebe1504276caa0e21->enter($__internal_d959846e4e6ff032edfd1cc454935b873b621859ff95564ebe1504276caa0e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_aae57c8cb1e32516a7c47595e4810aa43d06aa9d349caf427159f3c144abc67e->leave($__internal_aae57c8cb1e32516a7c47595e4810aa43d06aa9d349caf427159f3c144abc67e_prof);

        
        $__internal_d959846e4e6ff032edfd1cc454935b873b621859ff95564ebe1504276caa0e21->leave($__internal_d959846e4e6ff032edfd1cc454935b873b621859ff95564ebe1504276caa0e21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
