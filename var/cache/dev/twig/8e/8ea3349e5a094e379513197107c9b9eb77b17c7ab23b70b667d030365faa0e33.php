<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_0d63a101b4bd25cdd21966a4f41543376ebb8038e78447613fa4efb15ae6a85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d63a101b4bd25cdd21966a4f41543376ebb8038e78447613fa4efb15ae6a85f->enter($__internal_0d63a101b4bd25cdd21966a4f41543376ebb8038e78447613fa4efb15ae6a85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_06a853748561536bf504b1da9705ff34cf65533e87c6e2bb21ac9966383e1e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a853748561536bf504b1da9705ff34cf65533e87c6e2bb21ac9966383e1e97->enter($__internal_06a853748561536bf504b1da9705ff34cf65533e87c6e2bb21ac9966383e1e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0d63a101b4bd25cdd21966a4f41543376ebb8038e78447613fa4efb15ae6a85f->leave($__internal_0d63a101b4bd25cdd21966a4f41543376ebb8038e78447613fa4efb15ae6a85f_prof);

        
        $__internal_06a853748561536bf504b1da9705ff34cf65533e87c6e2bb21ac9966383e1e97->leave($__internal_06a853748561536bf504b1da9705ff34cf65533e87c6e2bb21ac9966383e1e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
