<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_a6fb1a3bdaa8a5bbc77d8fd313e27b6d290242b30435a2ee2c764028b0fa8314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fb1a3bdaa8a5bbc77d8fd313e27b6d290242b30435a2ee2c764028b0fa8314->enter($__internal_a6fb1a3bdaa8a5bbc77d8fd313e27b6d290242b30435a2ee2c764028b0fa8314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9399374794ac5e448d43a30e86e728cf59b5146cdc8230272e2e6ed0dec556ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9399374794ac5e448d43a30e86e728cf59b5146cdc8230272e2e6ed0dec556ca->enter($__internal_9399374794ac5e448d43a30e86e728cf59b5146cdc8230272e2e6ed0dec556ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a6fb1a3bdaa8a5bbc77d8fd313e27b6d290242b30435a2ee2c764028b0fa8314->leave($__internal_a6fb1a3bdaa8a5bbc77d8fd313e27b6d290242b30435a2ee2c764028b0fa8314_prof);

        
        $__internal_9399374794ac5e448d43a30e86e728cf59b5146cdc8230272e2e6ed0dec556ca->leave($__internal_9399374794ac5e448d43a30e86e728cf59b5146cdc8230272e2e6ed0dec556ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
