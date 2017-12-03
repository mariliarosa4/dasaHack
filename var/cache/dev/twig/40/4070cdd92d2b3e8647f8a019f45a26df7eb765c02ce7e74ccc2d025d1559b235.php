<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_3504d22c24cf00fa8c95335ebaa9165a9f2b256fe5734378f1495cf19ee3cc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3504d22c24cf00fa8c95335ebaa9165a9f2b256fe5734378f1495cf19ee3cc38->enter($__internal_3504d22c24cf00fa8c95335ebaa9165a9f2b256fe5734378f1495cf19ee3cc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_412878cafc20c85cdec64707043b46460fa1583f64b3eb05b5ca611db852d65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412878cafc20c85cdec64707043b46460fa1583f64b3eb05b5ca611db852d65c->enter($__internal_412878cafc20c85cdec64707043b46460fa1583f64b3eb05b5ca611db852d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3504d22c24cf00fa8c95335ebaa9165a9f2b256fe5734378f1495cf19ee3cc38->leave($__internal_3504d22c24cf00fa8c95335ebaa9165a9f2b256fe5734378f1495cf19ee3cc38_prof);

        
        $__internal_412878cafc20c85cdec64707043b46460fa1583f64b3eb05b5ca611db852d65c->leave($__internal_412878cafc20c85cdec64707043b46460fa1583f64b3eb05b5ca611db852d65c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
