<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cdcc2c5aebcb16f3da3b8fa293d042feab5f04236228cc486549b6afa9a78996 extends Twig_Template
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
        $__internal_3acc492bfa98ec8dcaf95945587f10b768317f66e29479aa640b6bf571feb8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acc492bfa98ec8dcaf95945587f10b768317f66e29479aa640b6bf571feb8c9->enter($__internal_3acc492bfa98ec8dcaf95945587f10b768317f66e29479aa640b6bf571feb8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3202a3f6f108690941e81930560a01196a8a8bc5e32c6c24e9189f774e5bb67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3202a3f6f108690941e81930560a01196a8a8bc5e32c6c24e9189f774e5bb67b->enter($__internal_3202a3f6f108690941e81930560a01196a8a8bc5e32c6c24e9189f774e5bb67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3acc492bfa98ec8dcaf95945587f10b768317f66e29479aa640b6bf571feb8c9->leave($__internal_3acc492bfa98ec8dcaf95945587f10b768317f66e29479aa640b6bf571feb8c9_prof);

        
        $__internal_3202a3f6f108690941e81930560a01196a8a8bc5e32c6c24e9189f774e5bb67b->leave($__internal_3202a3f6f108690941e81930560a01196a8a8bc5e32c6c24e9189f774e5bb67b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
