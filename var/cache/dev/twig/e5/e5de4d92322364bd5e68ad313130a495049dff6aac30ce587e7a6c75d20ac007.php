<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_69c649e42a9bf50a0f5012ba7b88bbd46903b8ddb6590fd54ced58bf9651f242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c649e42a9bf50a0f5012ba7b88bbd46903b8ddb6590fd54ced58bf9651f242->enter($__internal_69c649e42a9bf50a0f5012ba7b88bbd46903b8ddb6590fd54ced58bf9651f242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_93595ab28f02a7a334145f1049725d16d372fa48a254b444b3e7ab9c5a3bef8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93595ab28f02a7a334145f1049725d16d372fa48a254b444b3e7ab9c5a3bef8d->enter($__internal_93595ab28f02a7a334145f1049725d16d372fa48a254b444b3e7ab9c5a3bef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_69c649e42a9bf50a0f5012ba7b88bbd46903b8ddb6590fd54ced58bf9651f242->leave($__internal_69c649e42a9bf50a0f5012ba7b88bbd46903b8ddb6590fd54ced58bf9651f242_prof);

        
        $__internal_93595ab28f02a7a334145f1049725d16d372fa48a254b444b3e7ab9c5a3bef8d->leave($__internal_93595ab28f02a7a334145f1049725d16d372fa48a254b444b3e7ab9c5a3bef8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
