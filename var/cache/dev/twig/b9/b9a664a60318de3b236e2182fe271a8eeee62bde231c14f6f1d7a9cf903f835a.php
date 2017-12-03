<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_98d9d2215fae000002c13bf1725fbe6808eb796e5f700b724b682bc97b4fe64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d9d2215fae000002c13bf1725fbe6808eb796e5f700b724b682bc97b4fe64f->enter($__internal_98d9d2215fae000002c13bf1725fbe6808eb796e5f700b724b682bc97b4fe64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f5c4b4b9331914a109d61d4ed94b3e1607856469fcf56e96f6f20afa72543d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c4b4b9331914a109d61d4ed94b3e1607856469fcf56e96f6f20afa72543d85->enter($__internal_f5c4b4b9331914a109d61d4ed94b3e1607856469fcf56e96f6f20afa72543d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_98d9d2215fae000002c13bf1725fbe6808eb796e5f700b724b682bc97b4fe64f->leave($__internal_98d9d2215fae000002c13bf1725fbe6808eb796e5f700b724b682bc97b4fe64f_prof);

        
        $__internal_f5c4b4b9331914a109d61d4ed94b3e1607856469fcf56e96f6f20afa72543d85->leave($__internal_f5c4b4b9331914a109d61d4ed94b3e1607856469fcf56e96f6f20afa72543d85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
