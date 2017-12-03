<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32c1e2dd51908b999fd6d04a140dfe953f2babe834a00a161265969b76654424 extends Twig_Template
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
        $__internal_314f198dd1f6692e881159fbfbed2c6e4cc1da21d11f58f5679da3085ad05e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314f198dd1f6692e881159fbfbed2c6e4cc1da21d11f58f5679da3085ad05e43->enter($__internal_314f198dd1f6692e881159fbfbed2c6e4cc1da21d11f58f5679da3085ad05e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1864f7a73be006cb109da03302a1abc24e8288d721eb68dcf281f0d2cf4805c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1864f7a73be006cb109da03302a1abc24e8288d721eb68dcf281f0d2cf4805c9->enter($__internal_1864f7a73be006cb109da03302a1abc24e8288d721eb68dcf281f0d2cf4805c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_314f198dd1f6692e881159fbfbed2c6e4cc1da21d11f58f5679da3085ad05e43->leave($__internal_314f198dd1f6692e881159fbfbed2c6e4cc1da21d11f58f5679da3085ad05e43_prof);

        
        $__internal_1864f7a73be006cb109da03302a1abc24e8288d721eb68dcf281f0d2cf4805c9->leave($__internal_1864f7a73be006cb109da03302a1abc24e8288d721eb68dcf281f0d2cf4805c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
