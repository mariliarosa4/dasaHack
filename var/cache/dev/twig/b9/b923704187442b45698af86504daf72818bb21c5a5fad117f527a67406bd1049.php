<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e26819f51523b377e887d87fc7c0338f1c904b322e65a529d4a86bd51ac0ab6f extends Twig_Template
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
        $__internal_e4c06b3d561f29263ff1925e0ed0d61b628aeb357a5acb90fd8af9ed012dd39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c06b3d561f29263ff1925e0ed0d61b628aeb357a5acb90fd8af9ed012dd39f->enter($__internal_e4c06b3d561f29263ff1925e0ed0d61b628aeb357a5acb90fd8af9ed012dd39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7f10cec073efeb2e62e56df8de4fb3c19c9c38d3456a961ca632ec708c895f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f10cec073efeb2e62e56df8de4fb3c19c9c38d3456a961ca632ec708c895f32->enter($__internal_7f10cec073efeb2e62e56df8de4fb3c19c9c38d3456a961ca632ec708c895f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e4c06b3d561f29263ff1925e0ed0d61b628aeb357a5acb90fd8af9ed012dd39f->leave($__internal_e4c06b3d561f29263ff1925e0ed0d61b628aeb357a5acb90fd8af9ed012dd39f_prof);

        
        $__internal_7f10cec073efeb2e62e56df8de4fb3c19c9c38d3456a961ca632ec708c895f32->leave($__internal_7f10cec073efeb2e62e56df8de4fb3c19c9c38d3456a961ca632ec708c895f32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
