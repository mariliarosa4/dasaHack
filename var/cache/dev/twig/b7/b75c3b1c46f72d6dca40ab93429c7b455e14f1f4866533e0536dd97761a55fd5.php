<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3078bb444171a393edbd00fe3d1d2b94f0089de32c340d08af82a30085989f58 extends Twig_Template
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
        $__internal_591c503c5e5203b63407c4bff612d71f105d00adae5b0b9f3dc0e59d3afe535b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591c503c5e5203b63407c4bff612d71f105d00adae5b0b9f3dc0e59d3afe535b->enter($__internal_591c503c5e5203b63407c4bff612d71f105d00adae5b0b9f3dc0e59d3afe535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a21aa3c5d4642e27a84303bdc824755ae69e3d322e98829fb3129dc199abeb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21aa3c5d4642e27a84303bdc824755ae69e3d322e98829fb3129dc199abeb6a->enter($__internal_a21aa3c5d4642e27a84303bdc824755ae69e3d322e98829fb3129dc199abeb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_591c503c5e5203b63407c4bff612d71f105d00adae5b0b9f3dc0e59d3afe535b->leave($__internal_591c503c5e5203b63407c4bff612d71f105d00adae5b0b9f3dc0e59d3afe535b_prof);

        
        $__internal_a21aa3c5d4642e27a84303bdc824755ae69e3d322e98829fb3129dc199abeb6a->leave($__internal_a21aa3c5d4642e27a84303bdc824755ae69e3d322e98829fb3129dc199abeb6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
