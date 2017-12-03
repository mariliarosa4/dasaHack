<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50b2f5cb3123d7a774907482aaf5174e0ae5616512281d42e34bb951c80647b8 extends Twig_Template
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
        $__internal_b438f6803e7554bd1eb60b5e3a842da1ddda50ecefe62129e5a58fd3b0f365a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b438f6803e7554bd1eb60b5e3a842da1ddda50ecefe62129e5a58fd3b0f365a4->enter($__internal_b438f6803e7554bd1eb60b5e3a842da1ddda50ecefe62129e5a58fd3b0f365a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ecf758324c5a38cfcc4a0c49dd9d9fd55259fcc7ffb0aa25332a3b7041f4553b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf758324c5a38cfcc4a0c49dd9d9fd55259fcc7ffb0aa25332a3b7041f4553b->enter($__internal_ecf758324c5a38cfcc4a0c49dd9d9fd55259fcc7ffb0aa25332a3b7041f4553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b438f6803e7554bd1eb60b5e3a842da1ddda50ecefe62129e5a58fd3b0f365a4->leave($__internal_b438f6803e7554bd1eb60b5e3a842da1ddda50ecefe62129e5a58fd3b0f365a4_prof);

        
        $__internal_ecf758324c5a38cfcc4a0c49dd9d9fd55259fcc7ffb0aa25332a3b7041f4553b->leave($__internal_ecf758324c5a38cfcc4a0c49dd9d9fd55259fcc7ffb0aa25332a3b7041f4553b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
