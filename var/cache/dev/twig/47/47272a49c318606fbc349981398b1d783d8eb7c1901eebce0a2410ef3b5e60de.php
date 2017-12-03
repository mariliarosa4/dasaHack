<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_88e7a1532b79529a104546322fa06211be9acb2ac54fc74685b45ca68df3cd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e7a1532b79529a104546322fa06211be9acb2ac54fc74685b45ca68df3cd55->enter($__internal_88e7a1532b79529a104546322fa06211be9acb2ac54fc74685b45ca68df3cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_38c6edcbfd798b1af0df4f87e2315ee317a6c4dfb73b0f917ac7a6b477911166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c6edcbfd798b1af0df4f87e2315ee317a6c4dfb73b0f917ac7a6b477911166->enter($__internal_38c6edcbfd798b1af0df4f87e2315ee317a6c4dfb73b0f917ac7a6b477911166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_88e7a1532b79529a104546322fa06211be9acb2ac54fc74685b45ca68df3cd55->leave($__internal_88e7a1532b79529a104546322fa06211be9acb2ac54fc74685b45ca68df3cd55_prof);

        
        $__internal_38c6edcbfd798b1af0df4f87e2315ee317a6c4dfb73b0f917ac7a6b477911166->leave($__internal_38c6edcbfd798b1af0df4f87e2315ee317a6c4dfb73b0f917ac7a6b477911166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
